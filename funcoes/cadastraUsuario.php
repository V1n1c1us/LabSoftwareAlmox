<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 10/04/2016
 * Time: 15:44
 */

$nomeusuario = $_POST['nomeusuario'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


if ($_GET['funcao'] == 'cadastraBolsista') {

    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $orientador = $_POST['orientador'];

    echo "Nome: " . $nomeusuario . "<br>" .
        "Matrícula: " . $matricula . "<br>" .
        "Email: " . $email . "<br>" .
        "Orientador" . $orientador . "<br>" .
        "CPF: " . $cpf . "<br>" .
        "SENHA: " . $senha . "<br>";
}
if ($_GET['funcao'] == 'cadastraServidor') {

    $siape = $_POST['siape'];
    $sala = $_POST['sala'];
    $email = $_POST['email'];

    echo "SIAPE: " . $siape . "<br>" .
        "Nome: " . $nomeusuario . "<br>" .
        "CPF: " . $cpf . "<br>" .
        "SENHA: " . $senha . "<br>".
        "Sala" . $sala . "<br>";
        "Email: " . $email . "<br>";
}
?>