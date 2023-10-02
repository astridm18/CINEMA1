<?php

/**
* Este documento permite que se pueda generar una factura luego de una compra exitosa
*
*
*/

session_start();
require('../resources/fpdf185/Code128.php');

$pdf = new PDF_Code128('P','mm',array(80,210));
$pdf->SetMargins(4,10,4);
$pdf->AddPage();

// Encabezado y datos de la empresa
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,utf8_decode(strtoupper("Cinema Night")),0,'C',false);
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(0,5,utf8_decode("RIF: J-00045832-7"),0,'C',false);
$pdf->MultiCell(0,5,utf8_decode("Dirección: Centro Comercial La Vela, Isla de Margarita, Venezuela"),0,'C',false);
$pdf->MultiCell(0,5,utf8_decode("Teléfono: 0295-2631850"),0,'C',false);
$pdf->MultiCell(0,5,utf8_decode("Email: cinemanight@gmail.com"),0,'C',false);

$pdf->Ln(1);
$pdf->Cell(0,5,utf8_decode("------------------------------------------------------"),0,0,'C');
$pdf->Ln(5);

$pdf->MultiCell(0,5,utf8_decode("Fecha: ".date("d/m/Y", strtotime("13-09-2022"))." ".date("h:s A")),0,'C',false);
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(0,5,utf8_decode(strtoupper("Ticket Nro: 1")),0,'C',false);
$pdf->SetFont('Arial','',9);

$pdf->Ln(1);
$pdf->Cell(0,5,utf8_decode("------------------------------------------------------"),0,0,'C');
$pdf->Ln(5);



if (isset($_SESSION['nombre'])) {
    $nombres = $_SESSION['nombre'];
    $apellidos = $_SESSION['apellido'];
    $correos = $_SESSION['correo'];

    $pdf->MultiCell(0,5,utf8_decode("Cliente: $nombres $apellidos"),0,'C',false);
    $pdf->MultiCell(0,5,utf8_decode("Email: $correos"),0,'C',false);

    $pdf->Ln(1);
    $pdf->Cell(0,5,utf8_decode("-------------------------------------------------------------------"),0,0,'C');
    $pdf->Ln(3);



// Tablas de productos
$pdf->Cell(10,5,utf8_decode("N°"),0,0,'C');
$pdf->Cell(19,5,utf8_decode("Precio p/b"),0,0,'C');
$pdf->Cell(15,5,utf8_decode("Desc."),0,0,'C');
$pdf->Cell(28,5,utf8_decode("Total"),0,0,'C');

$pdf->Ln(3);
$pdf->Cell(72,5,utf8_decode("-------------------------------------------------------------------"),0,0,'C');
$pdf->Ln(3);

// Detalles de la tabla
$pdf->MultiCell(0,8,utf8_decode("Butacas: 7, 8, 9"),0,'C',false);
$pdf->Cell(19,4,utf8_decode(""),0, 0,'C');
$pdf->Cell(7,4,utf8_decode("$2 USD"),0,0,'C');
$pdf->Cell(10,4,utf8_decode("x 3"),0,0,'C');
$pdf->Cell(2,4,utf8_decode("="),0,0,'C');
$pdf->Cell(20,4,utf8_decode("$6.00 USD"),0,0,'C');
$pdf->Ln(4);
$pdf->MultiCell(0,8,utf8_decode("Película: Mario Bros / Sala 1"),0,'C',false);
// Fin detalles de la tabla
$pdf->Cell(72,5,utf8_decode("-------------------------------------------------------------------"),0,0,'C');

$pdf->Ln(5);

// Impuestos y total
$pdf->Cell(18,5,utf8_decode(""),0,0,'C');
$pdf->Cell(22,5,utf8_decode("SUBTOTAL"),0,0,'C');
$pdf->Cell(32,5,utf8_decode("+ $6.00 USD"),0,0,'C');

$pdf->Ln(5);

$pdf->Cell(18,5,utf8_decode(""),0,0,'C');
$pdf->Cell(22,5,utf8_decode("IGTF (3%)"),0,0,'C');
$pdf->Cell(32,5,utf8_decode("+ $0.18 USD"),0,0,'C');

$pdf->Ln(5);

$pdf->Cell(72,5,utf8_decode("-------------------------------------------------------------------"),0,0,'C');

$pdf->Ln(5);

$pdf->Cell(18,5,utf8_decode(""),0,0,'C');
$pdf->Cell(22,5,utf8_decode("USTED AHORRA"),0,0,'C');
$pdf->Cell(32,5,utf8_decode("$0.00 USD"),0,0,'C');

$pdf->Ln(5);

$pdf->Cell(18,5,utf8_decode(""),0,0,'C');
$pdf->Cell(22,5,utf8_decode("TOTAL A PAGAR"),0,0,'C');
$pdf->Cell(32,5,utf8_decode("$6.18 USD"),0,0,'C');

$pdf->Ln(10);

$pdf->MultiCell(0,5,utf8_decode("*** Precios de productos incluyen impuestos. Para poder realizar un reclamo o devolución debe de presentar este ticket ***"),0,'C',false);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,7,utf8_decode("¡Gracias por preferirnos!"),'',0,'C');

$pdf->Ln(9);

//Codigo de barras 
$pdf->Code128(5,$pdf->GetY(),"COD000001V0001",70,20);
$pdf->SetXY(0,$pdf->GetY()+21);
$pdf->SetFont('Arial','',14);
$pdf->MultiCell(0,5,utf8_decode("COD000001V0001"),0,'C',false);

} else {
    echo "<h2>Error: No se ha iniciado sesión.</h2>";
}

$pdf->Output("I","Ticket_Nro_1.pdf",true);

