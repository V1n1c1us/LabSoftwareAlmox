<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 10/04/2016
 * Time: 15:44
 */
include('../DB/connect.php');

$nomeusuario = $_POST['nomeusuario'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


if ($_GET['funcao'] == 'cadastraBolsista') {

    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $codorientador = $_POST['codorientador'];
    $tipo = 3;

    //inicio da transação
    $conn->beginTransaction();

    $sqlInsert = $conn->prepare("INSERT INTO usuario (nomeusuario,matricula,email,codorientador,cpf,senha,tipo) VALUES (?,?,?,?,?,?,?)");
    $sqlInsert->bindParam(1, $nomeusuario);
    $sqlInsert->bindParam(2, $matricula);
    $sqlInsert->bindParam(3, $email);
    $sqlInsert->bindParam(4, $codorientador);
    $sqlInsert->bindParam(5, $cpf);
    $sqlInsert->bindParam(6, $senha);
    $sqlInsert->bindParam(7, $tipo);

    if ($sqlInsert->execute() == true) {
        //transação ok? commit!
        $conn->commit();
        echo "<script>alert('Bolsista Cadastrado com Sucesso'); window.location='../cadastra-bolsista.php';</script>";
    } else {
        //transação ok? não? desfaz!
        $conn->rollBack();
        echo "<script>alert('Erro ao Cadastrado');</script>";
    }

}
if ($_GET['funcao'] == 'cadastraServidor') {

    $siape = $_POST['siape'];
    $sala = $_POST['sala'];
    $email = $_POST['email'];
    $tipo = 1; // tipo 1 = servidor

    //inicio da transação
    $conn->beginTransaction();

    $sqlInsert = $conn->prepare("INSERT INTO usuario (nomeusuario,matricula,siape,email,cpf,tipo,senha,sala) VALUES (?,$siape,?,?,?,?,?,?)");
    $sqlInsert->bindParam(1, $nomeusuario);
    $sqlInsert->bindParam(2, $siape);
    $sqlInsert->bindParam(3, $email);
    $sqlInsert->bindParam(4, $cpf);
    $sqlInsert->bindParam(5, $tipo);
    $sqlInsert->bindParam(6, $senha);
    $sqlInsert->bindParam(7, $sala);

    if ($sqlInsert->execute() == true) {
        //transação ok? commit!
        $conn->commit();
        echo "<script>alert('Servidor Cadastrado com Sucesso'); window.location='../cadastra-servidor.php';</script>";
    } else {
        //transação ok? não? desfaz!
        $conn->rollBack();
        echo "<script>alert('Erro ao Cadastrado');</script>";
    }
}
if ($_GET['funcao'] == 'cadastraFuncionario') {

    $matricula = $_POST['matricula'];
    $tipo = 2;

    //inicio da transação
    $conn->beginTransaction();

    $sqlInsert = $conn->prepare("INSERT INTO usuario (nomeusuario,matricula,cpf,senha,tipo) VALUES (?,?,?,?,?)");
    $sqlInsert->bindParam(1, $nomeusuario);
    $sqlInsert->bindParam(2, $matricula);
    $sqlInsert->bindParam(3, $cpf);
    $sqlInsert->bindParam(4, $senha);
    $sqlInsert->bindParam(5, $tipo);

    if ($sqlInsert->execute() == true) {
        //transação ok? commit!
        $conn->commit();
        echo "<script>alert('Funcionário Cadastrado com Sucesso'); window.location='../cadastra-funcionario.php';</script>";
    } else {
        //transação ok? não? desfaz!
        $conn->rollBack();
        echo "<script>alert('Erro ao Cadastrado');</script>";
    }

}
?>

