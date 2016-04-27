<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 20/04/2016
 * Time: 11:24
 */
// se os dados estão vazios, redireciona para o login
if(!isset($_SESSION["matricula"]) || !isset($_SESSION["senha"])){
    // redireciona
    echo "<script>alert('Área Restrita para os Usuários Cadastrados'); window.location='index.php';</script>";
    exit; // encerra a função
}