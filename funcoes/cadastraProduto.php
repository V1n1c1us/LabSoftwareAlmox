<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 10/05/2016
 * Time: 13:36
 */
include "../DB/connect.php";
// exibindo os dados

$codigoprodutoalmox = $_POST['codigoprodutoalmox'];
$codigoalmox = $_POST['codigoalmox'];
$numerorequisicao = $_POST['numerorequisicao'];
$descricaoproduto = $_POST['descricaoproduto'];
$quantidade = $_POST['quantidade'];
$codunidade = $_POST['codunidade'];
$quant_linhas = count($codigoprodutoalmox);

for ($i = 0; $i < $quant_linhas; $i++) {
    $sqlInsert = $conn->prepare("INSERT INTO produto (codigoprodutoalmox,codigoalmox,numerorequisicao,descricaoproduto,quantidade,codunidade) VALUES (?,?,?,?,?,?)");
    $sqlInsert->bindParam(1, $codigoprodutoalmox[$i]);
    $sqlInsert->bindParam(2, $codigoalmox[$i]);
    $sqlInsert->bindParam(3, $numerorequisicao[$i]);
    $sqlInsert->bindParam(4, $descricaoproduto[$i]);
    $sqlInsert->bindParam(5, $quantidade[$i]);
    $sqlInsert->bindParam(6, $codunidade[$i]);


    if ($sqlInsert->execute() == true) {
        echo "<script>alert('Produto Cadastrado com Sucesso'); window.location='../cadastra-produto.php';</script>";
    } else {
        print_r($conn->errorInfo());
        echo "<script>alert('Erro ao Cadastrado'); </script>";
    }
}
?>