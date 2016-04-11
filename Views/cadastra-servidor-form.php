<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 04/04/2016
 * Time: 16:31
 */
?>

<form method="POST" action="funcoes/cadastraUsuario.php?funcao=cadastraServidor">
    <div class="form-group">
        <label for="siape">Código SIAPE</label>
        <input type="text" class="form-control" id="siape" placeholder="SIAPE" name="siape">
    </div>
    <div class="form-group">
        <label for="nomeCompleto">Nome Completo</label>
        <input type="text" class="form-control" id="nomeCompleto" placeholder="Nome Completo" name="nomeusuario">
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf">
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="password" placeholder="Senha" name="senha">
    </div>
    <div class="form-group">
        <label for="sala">Sala/Bloco</label>
        <input type="text" class="form-control" id="sala" placeholder="309/F" name="sala">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" placeholder="almox@ufsm.br" name="email">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button type="submit" class="btn btn-danger">Cancelar</button>
</form>

