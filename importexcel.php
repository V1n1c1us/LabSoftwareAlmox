<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 30/04/2016
 * Time: 00:01
 */
include("DB/connect.php");


$nome_arquivo = "base1.csv";

$objeto = fopen($nome_arquivo, 'r');

while(($dados = fgetcsv($objeto,1000,',')) !== FALSE){

    $sql = "INSERT INTO PRODUTO (idproduto, codigoprodutoalmox,descricaoproduto,quantidade,codunidade) VALUES('$dados[0]','$dados[1]','$dados[2]','$dados[3]','$dados[4]')";
    $conn->query($sql);
   echo $sql . "<br>";
//    echo '<pre>';
//    print_r($dados);
//    echo '</pre>';
}

fclose($objeto);

echo "Processo Encerrado";
?>