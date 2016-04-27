<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 26/04/2016
 * Time: 21:01
 */
?>
<form action="funcoes/cadastraUsuario.php?funcao=cadastraFuncionario" method="POST">
    <div class="form-group">
        <label for="matricula">Código</label>
        <input type="text" class="form-control" id="matricula" placeholder="Código do Produto" name="matricula">
    </div>
    <div class="form-group">
        <label for="descricaoproduto">Descrição</label>
        <input type="text" class="form-control" id="descricaoproduto" placeholder="Descrição do Produto" name="descricaoproduto">
    </div>
    <div class="form-group">
        <label for="cpf">Unidade</label>
        <select class="form-control">
            <option>...</option>
        </select>
    </div>
    <div class="form-group">
        <label for="senha">Quantidade em Estoque</label>
        <input type="password" class="form-control" id="senha" placeholder="Quantidade" name="senha">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

