<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 05/04/2016
 * Time: 15:21
 */
?>
<form action="DB/connect.php" method="POST">
    <div class="form-group">
        <label for="matricula">Matrícula</label>
        <input type="text" class="form-control" id="matricula" placeholder="Nome Completo" name="">
    </div>
    <div class="form-group">
        <label for="nomeCompleto">Nome Completo</label>
        <input type="text" class="form-control" id="nomeCompleto" placeholder="Nome Completo" name="">
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="">
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Senha" name="">
    </div>
    <div class="form-group">
        <label for="sala">Tipo</label>
        <select class="form-control">
            <option>...</option>
            <option>Terceirizado</option>
            <option>Almoxarife</option>
        </select>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" placeholder="almox@ufsm.br" name="">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button type="submit" class="btn btn-danger">Cancelar</button>
</form>
