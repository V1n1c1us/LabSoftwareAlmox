<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 20/04/2016
 * Time: 00:43
 */

session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo = 2;
include('../DB/connect.php');

$sql = $conn->query("SELECT nomeusuario, tipo, matricula, senha, siape FROM usuario WHERE tipo = '$tipo' AND matricula = '$login' AND senha = '$senha'");
$resultado = $sql->fetch(PDO::FETCH_ASSOC);

//se o resultado for vazio, então o usuário e senha está incorreto.
if(empty($resultado)){

    // redireciona
    echo "<script>alert('Matrícula ou senha incorreta'); window.location='../index.php';</script>";
}else{
    //define os valores atribuidos na sessão do usuário
    $_SESSION['nomeusuario'] = $resultado['nomeusuario'];
    $_SESSION['matricula'] = $resultado['matricula'];
    $_SESSION['senha'] = $resultado['senha'];

    header("Location: ../principal.php");
}

?>

