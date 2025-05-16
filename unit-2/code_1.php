<?php
// Write a program to create pdf document in PHP

require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(150, 200, 225);
$pdf->Cell(40, 10, 'Hello Out There!');
$pdf->Output();
