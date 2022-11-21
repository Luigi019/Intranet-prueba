<?php
require('fpdf.php');

class PDF extends FPDF
{
function Header()
{
	global $title;

	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Calculamos ancho y posici�n del t�tulo.
	$w = $this->GetStringWidth($title)+6;
	$this->SetX((210-$w)/2);
	// Colores de los bordes, fondo y texto
	$this->SetDrawColor(3, 28, 250);
	$this->SetFillColor(4, 160, 165, 0.63);
	$this->SetTextColor(20, 20, 20);
	// Ancho del borde (1 mm)
	$this->SetLineWidth(1);
	// T�tulo
	$this->Cell($w,9,$title,1,1,'C',true);
	// Salto de l�nea
	$this->Ln(10);
}

function Footer()
{
	// Posici�n a 1,5 cm del final
	$this->SetY(-15);
	// Arial it�lica 8
	$this->SetFont('Arial','I',8);
	// Color del texto en gris
	$this->SetTextColor(128);
	// N�mero de p�gina
	$this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
}

function ChapterTitle($num, $label)
{
	// Arial 12
	$this->SetFont('Arial','',12);
	// Color de fondo
	$this->SetFillColor(200,220,255);
	// T�tulo
	$this->Cell(0,6,"$num : $label",0,1,'L',true);
	// Salto de l�nea
	$this->Ln(4);
}

function ChapterBody($file)
{
	// Leemos el fichero
	$txt = file_get_contents($file);
	// Times 12
	$this->SetFont('Times','',12);
	// Imprimimos el texto justificado
	$this->MultiCell(0,5,$txt);
	// Salto de l�nea
	$this->Ln();
	// Cita en it�lica
	$this->SetFont('','I');
	$this->Cell(0,5,'(Requiere sello humedo, para procesar)');
}

function PrintChapter($num, $title, $file)
{
	$this->AddPage();
	$this->ChapterTitle($num,$title);
	$this->ChapterBody($file);
}
}

$pdf = new PDF();
$title = 'Solicitud de Creacion del Usuario';
$pdf->SetTitle($title);
$pdf->SetAuthor('Intranet');
$pdf->PrintChapter(1,'Solicitud de Creacion del Usuario en la intranet','solicitud.txt');
$pdf->Output();
?>
