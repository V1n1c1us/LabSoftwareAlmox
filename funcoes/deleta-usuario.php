<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 02/06/2016
 * Time: 00:00
 */
include('../DB/connect.php');

$id = $_GET['id'];
$SQLDeleta = "DELETE FROM usuario WHERE id = ?";

$stmt = $conn->prepare($SQLDeleta);
$stmt->bindParam(1,$id);


if ($stmt->execute() == true) {
    echo "<script>alert('Deletado com Sucesso'); window.location='../listagem-usuarios.php';</script>";
} else {
    echo "<script>alert('Erro ao Deletar'); window.location='../listagem-usuarios.php';</script>";
}
?>