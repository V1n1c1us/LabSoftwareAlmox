<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 02/05/2016
 * Time: 17:52
 */
include('../DB/connect.php');

function teste($conn){
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = $conn->query("SELECT nomeusuario, matricula, senha FROM usuario WHERE matricula = '$login' AND senha = '$senha'");
    $resultado = $sql->fetch(PDO::FETCH_ASSOC);
}
?>

