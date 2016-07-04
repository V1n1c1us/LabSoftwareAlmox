<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 29/06/2016
 * Time: 23:07
 */
session_start();
include "../DB/connect.php";
include "fpdf/fpdf.php";

$id = $_GET['id'];
$dataInicial = $_POST['dataInicial'];
$dataFinal = $_POST['dataFinal'];

$sql = "SELECT nomeusuario, datahora, descricaoproduto, itens.quantidade FROM usuario, itens, produto, movimentacao WHERE usuario.matricula = movimentacao.matricula AND movimentacao.idmovimentacao = itens.idmovimentacao AND produto.codigoprodutoalmox = itens.codigoprodutoalmox AND usuario.id = $id AND movimentacao.datahora BETWEEN  $dataInicial AND $dataFinal  ORDER BY datahora ";
$select = $conn->query($sql);

function converterSimbolos($string)
{
    return iconv("UTF-8", "ISO-8859-1", $string);
}

$pdf = new FPDF("L", "pt", "A4");
$pdf->AddPage();


$pdf->SetFont('arial', 'B', 18);
$pdf->Cell(0, 5, "Ficha", 0, 1, 'C');
$pdf->Cell(0, 5, "", "B", 1, 'C');


$pdf->Ln(40);

$sqlUser = $conn->query("SELECT * FROM usuario WHERE id = '$id'");
while ($row = $sqlUser->fetch(PDO::FETCH_OBJ)) {
    $id = $row->id;
    $nome = $row->nomeusuario;
    $matricula = $row->matricula;

    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(70, 20, "Nome:", 0, 0, 'L');
    $pdf->Cell(0, 20, converterSimbolos($nome), 0, 1, 'L');
    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(70, 20, converterSimbolos("Matrícula:"), 0, 0, 'L');
    $pdf->setFont('arial', '', 12);
    $pdf->Cell(70, 20, $matricula, 0, 1, 'L');
}


////email
//    $pdf->SetFont('arial', 'B', 12);
//    $pdf->Cell(70, 20, "E-mail:", 0, 0, 'L');
//    $pdf->setFont('arial', '', 12);
//    $pdf->Cell(70, 20, $email, 0, 1, 'L');


//cabeçalho da tabela
$pdf->SetFont('arial', 'B', 14);
$pdf->Cell(80, 20, 'Data', 1, 0, "C");
$pdf->Cell(610, 20, converterSimbolos('Descrição'), 1, 0, "C");
$pdf->Cell(85, 20, 'Quantidade', 1, 1, "C");


while ($linha = $select->fetch()) {


    $pdf->ln(10);

    $pdf->Cell(80, 20, date("d/m/Y", strtotime($linha["datahora"])), 1, 0, "L");
    $pdf->Cell(610, 20, converterSimbolos($linha["descricaoproduto"]), 1, 0, "L");
    $pdf->Cell(85, 20, converterSimbolos($linha["quantidade"]), 1, 1, "C");
}

$pdf->Output();

//$pdf->AddPage();
//$pdf->Ln(30);
//
//$pdf->SetFont("arial", "B", 18);
//$pdf->Cell(0, 5, converterSimbolos("Almoxarifado do Colégio Politécnico da UFSM"), 0, 1, "C");
//$pdf->Image("http://w3.ufsm.br/sati/img/poli.png",60,30,90,0,'PNG');
//$pdf->Ln(40);
//
////while ($linha = $select->fetch()) {
////    echo '<tr>';
////    echo '<td>' . $linha["nomeusuario"] . '</td>';
////    echo '<td>' . $linha["datahora"] . '</td>';
////    echo '<td>' . $linha["descricaoproduto"] . '</td>';
////    echo '<td>' . $linha["quantidade"] . '</td>';
////    echo '</tr>';
////}
//$pdf->Output("arquivo.pdf","D");
?>