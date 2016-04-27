<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 20/04/2016
 * Time: 13:42
 */

session_start();

//finaliza a sessão
session_destroy();
// redireciona
echo "<script>alert('Sessão Encerrada, Obrigado!'); window.location='../index.php';</script>";



?>