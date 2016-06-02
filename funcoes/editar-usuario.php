<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 02/06/2016
 * Time: 00:53
 */
include ("../DB/connect.php");

$sql = "UPDATE usuario SET nomeusuario=?, siape=?, matricula=?, email=?, senha=?, sala=? WHERE id = $id ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1,$nomeusuario);
$stmt->bindParam(2,$siape);
$stmt->bindParam(3,$matricula);
$stmt->bindParam(4,$email);
$stmt->bindParam(5,$senha);
$stmt->bindParam(6,$sala);


if ($stmt->execute() == true) {
    echo "<script>alert('Dados atualizado com Sucesso'); window.location='../listagem-usuarios.php';</script>";
} else {
    echo "<script>alert('Erro ao Atualizar Dados');</script>";
}



?>