<?php
	//funciona sin ningun problema 
    session_start();
        $numero = md5(rand(1, 99999));
        $texto = substr($numero,0,5);
        $_SESSION['captcha_texto'] = $texto;


  $im = imagecreate( 60, 30 );
$fondo = imagecolorallocate( $im, 255, 255, 0 );
$negro = imagecolorallocate( $im, 0, 0, 0 );

imagestring( $im, 20, 5, 10,  $_SESSION['captcha_texto'], $negro );
imagesetthickness ( $im, 5 );


header( "Content-type: image/png" );
imagepng( $im );

imagecolordeallocate( $negro );
imagecolordeallocate( $fondo );
imagedestroy( $im );


?>