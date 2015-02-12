<?php
require 'conexao.php';
require 'fpdf/fpdf.php';

$pdf = new FPDF('P','cm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',10);

$pdf->Cell(2,0.7,('Hello World'),0,0);

$pdf->Output();
?>