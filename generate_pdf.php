<?php
include 'config.php';
require('libs/fpdf.php');
$pdf = new FPDF('P','mm','A4');


$pdf -> AddPage();

// create heading
$pdf->SetFont('Arial','B','20');
$pdf->Cell(0,10,'TEAMS',0,0,'C');

$result = mysqli_query($conn, "SELECT * FROM team");
$header = mysqli_query($conn, "SHOW columns FROM team");


// output on pdf page
$pdf -> Output();

?>
