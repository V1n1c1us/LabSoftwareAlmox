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
$dataInicial = $_GET['dataInicial'];
$dataFinal = $_GET['dataFinal'];

$sql = "SELECT nomeusuario, datahora, descricaoproduto, itens.quantidade FROM usuario, itens, produto, movimentacao WHERE usuario.matricula = movimentacao.matricula AND movimentacao.idmovimentacao = itens.idmovimentacao AND produto.codigoprodutoalmox = itens.codigoprodutoalmox AND usuario.id = '$id' AND movimentacao.datahora BETWEEN  '$dataInicial' AND '$dataFinal'  ORDER BY datahora ";
$select = $conn->prepare($sql);
$select->execute() or die("<div class='alert alert-danger'>Erro ao pesquisar</div>");

function converterSimbolos($string)
{
    return iconv("UTF-8", "ISO-8859-1", $string);
}

function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

$pdf = new FPDF("L", "pt", "A4");
$pdf->AddPage();


$pdf->SetFont('arial', 'B', 18);
$pdf->Cell(0, 5, converterSimbolos("Retirada de Produtos do Almoxarifado"), 0, 1, 'C');
$pdf->Cell(0, 25, "", "B", 1, 'C');
// Logo
$pdf->Image('logoPoli.png',15,0,80,60);
// Arial bold 15

$sqlUser = $conn->query("SELECT * FROM usuario WHERE id = '$id'");
while ($row = $sqlUser->fetch(PDO::FETCH_OBJ)) {
    $id = $row->id;
    $nome = $row->nomeusuario;
    $matricula = $row->matricula;
    $siape = $row->siape;
    $email = $row->email;
    $sala = $row->sala;
    $tipo = $row->tipo;

    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(70, 20, "Nome:", 0, 0, 'L');
    $pdf->Cell(0, 20, converterSimbolos($nome), 0, 1, 'L');
    if ($tipo == 1) {
        $pdf->Cell(70, 20, converterSimbolos("Siape:"), 0, 0, 'L');
        $pdf->Cell(70, 20, $siape, 0, 1, 'L');
    } else {
        $pdf->Cell(70, 20, converterSimbolos("Matrícula:"), 0, 0, 'L');
        $pdf->Cell(70, 20, $matricula, 0, 1, 'L');
    }
    $pdf->Cell(70, 20, "E-mail:", 0, 0, 'L');
    $pdf->Cell(70, 20, $email, 0, 1, 'L');
    $pdf->Cell(70, 20, "Sala:", 0, 0, 'L');
    $pdf->Cell(70, 20, $sala, 0, 1, 'L');
}
$pdf->ln(10);

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
    $pdf->Cell(80, 20, date("d/m/Y", strtotime($linha["datahora"])), 1, 0, "L");
    $pdf->Cell(610, 20, converterSimbolos($linha["descricaoproduto"]), 1, 0, "L");
    $pdf->Cell(85, 20, converterSimbolos($linha["quantidade"]), 1, 1, "C");

}
$pdf->SetY(-70);
// Select Arial italic 8
$pdf->SetFont('Arial','I',8);
// Print current and total page numbers
$pdf->Cell(0,10,converterSimbolos('Página ').$pdf->PageNo().'/{nb}',0,0,'C');
$pdf->AliasNbPages();
$pdf->Output();

//$pdf->Output("arquivo.pdf","D");
?>

