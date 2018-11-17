<?php 
require '/opt/lampp/htdocs/GimnasioProyect/utilidades/FPDF/fpdf.php';

$text='AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';

$pdf = new FPDF ();

$pdf->AddPage ();

//$pdf->SetXY (50,50);

$pdf->SetFont ('Arial','B',10);

$pdf->SetXY (70,10);
$pdf->Cell(40,10, 'ESTUDIANTES INFORMATICA SECCION 1 TRAYECTO 3 PERIODO 2016-2017', 0, 1, 'C');

$pdf->Cell(40,10, 'NOMBRES', 1, 0, 'C');
$pdf->Cell(40,10, 'APELLIDOS', 1, 0, 'C');
$pdf->Cell(40,10, 'CEDULA', 1, 0, 'C');
$pdf->Cell(40,10, 'NOTA', 1, 1, 'C');

$pdf->Cell(40,10, 'CESAR', 1, 0, 'C');
$pdf->Cell(40,10, 'BRACHO', 1, 0, 'C');
$pdf->Cell(40,10, '26279030', 1, 0, 'C');
$pdf->Cell(40,10, '13', 1, 1, 'C');

$pdf->Cell(40,10, 'RAMON', 1, 0, 'C');
$pdf->Cell(40,10, 'SALAZAR', 1, 0, 'C');
$pdf->Cell(40,10, '2347849', 1, 0, 'C');
$pdf->Cell(40,10, '15', 1, 1, 'C');

$pdf->Cell(40,10, 'FRANK', 1, 0, 'C');
$pdf->Cell(40,10, 'GOMEZ', 1, 0, 'C');
$pdf->Cell(40,10, '1946783', 1, 0, 'C');
$pdf->Cell(40,10, '05', 1, 1, 'C');

$pdf->Cell(40,10, 'MARIA', 1, 0, 'C');
$pdf->Cell(40,10, 'DE LOS ANGELES', 1, 0, 'C');
$pdf->Cell(40,10, '2562789', 1, 0, 'C');
$pdf->Cell(40,10, '12', 1, 1, 'C');

//$y = $pdf->GetY();
//$pdf->GetY();
//$pdf->MultiCell(100,5, "$text", 1, 'C', 0);

$pdf->Output();

 ?>