<?php
require 'conexao.php';
require 'fpdf/fpdf.php';

$id = $_GET['id'];

$sql = "SELECT * from clientes where id_cliente = " . $id;

$mostrar = $conexao->prepare($sql);
$mostrar->execute();
$visualizar = $mostrar->fetchAll();
$listar = $visualizar[0];


$pdf = new FPDF('P','cm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',10);

$pdf->Cell(4,0.7,('Nome'),1,0);
$pdf->Cell(4,0.7,('Cidade'),1,0);
$pdf->Cell(4,0.7,('Telefone'),1,1);

$pdf->Cell(4,0.7,$listar['nome'],1,0);
$pdf->Cell(4,0.7,$listar['cidade'],1,0);
$pdf->Cell(4,0.7,$listar['telefone'],1,1);

$pdf->Output();
?>