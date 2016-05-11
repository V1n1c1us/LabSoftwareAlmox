<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 05/04/2016
 * Time: 15:21
 */
?>

<form action="funcoes/cadastraUsuario.php?funcao=cadastraFuncionario" method="POST">
    <div class="form-group">
        <label for="matricula">Matrícula</label>
        <input type="text" class="form-control" id="matricula" placeholder="Matrícula" name="matricula">
    </div>
    <div class="form-group">
        <label for="nomeCompleto">Nome Completo</label>
        <input type="text" class="form-control" id="nomeusuario" placeholder="Nome Completo" name="nomeusuario">
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf">
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
