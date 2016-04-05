<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 04/04/2016
 * Time: 16:29
 */
?>


<form>
    <div class="form-group">
        <label for="matricula">Matrícula</label>
        <input type="text" class="form-control" id="matricula" placeholder="2014510310" name="">
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
        <label for="email">Orientador(a)</label>
        <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button type="submit" class="btn btn-danger">Cancelar</button>
</form>
