<?php

	include "FPDF/fpdf.php";
	include "conectardb.php";
	include "acciones.php";
	
	$usuarios =obtenerUsuarios();


class PDF extends FPDF
{

// Tabla coloreada
function FancyTable($header, $usuarios)
{
	// Colores, ancho de línea y fuente en negrita
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.30);
	$this->SetFont('','B');
	// Cabecera
	$w = array(50, 50, 50);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	// Restauración de colores y fuentes
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Datos
	$fill = false;
	foreach($usuarios as $fila)
	{
		$this->Cell($w[0],10,$fila ['nombre'],'LR',0,'L',$fill);
		$this->Cell($w[1],10,$fila ['apellido'],'LR',0,'L',$fill);
		$this->Cell($w[2],10,$fila ['correo'],'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
	}
	// Línea de cierre
	$this->Cell(array_sum($w),0,'','T');
}
// Cabecera de página
function Header()
{
	// Logo
	// $this->Image('imagenes/logo.png', 10,8,33);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Movernos a la derecha
	$this->Cell(80);
	// Título
	$this->Cell(30,10,'Registros Actuales en el Sistema',0,0,'C');
	// Salto de línea
	$this->Ln(20);
}

// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetFont('Times','',12);

// Títulos de las columnas
$header = array('Nombre', 'Apellido', 'Correo');
// Carga de datos
$usuarios = obtenerUsuarios();
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$pdf->FancyTable($header,$usuarios);
$pdf->Output();
?>