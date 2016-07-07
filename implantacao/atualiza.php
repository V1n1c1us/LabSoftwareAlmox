<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 06/07/2016
 * Time: 00:49
 */

include ("../DB/connect.php");

$id = $_POST['codigoprodutoalmox'];
$qtda = $_POST['quantidade'];

$sql = "UPDATE produto SET quantidade = $qtda WHERE codigoprodutoalmox = $id";
$res = $conn->query($sql) or die("Erro");






?>