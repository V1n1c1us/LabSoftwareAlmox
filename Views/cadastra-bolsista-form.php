<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 04/04/2016
 * Time: 16:29
 */
?>


<form method="post" action="funcoes/cadastraUsuario.php?funcao=cadastraBolsista">
    <div class="form-group">
        <label for="matricula">Matrícula</label>
        <input type="text" class="form-control" id="matricula" placeholder="2014510310" name="matricula">
    </div>
    <div class="form-group">
        <label for="nomeCompleto">Nome Completo</label>
        <input type="text" class="form-control" id="nomeCompleto" placeholder="Nome Completo" name="nomeusuario">
    </div>
    <div class="form-group">
        <label for="cpf">Email</label>
        <input type="email" class="form-control" id="email" placeholder="bolsista@bolsa.com" name="email">
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" placeholder="999.999.999-99" name="cpf">
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
    </div>
    <div class="form-group">
        <label for="orientador">Orientador(a)</label>
        <select name="codorientador" data-placeholder="Busque o Orientador" class="chosen-select-width">
            <option selected>...</option>
            <?php
            include('DB/connect.php');
            $sql = $conn->query("SELECT id,nomeusuario FROM usuario WHERE tipo = 1");

            while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                $id = $linha->id;
                $nome = $linha->nomeusuario;
                ?>
                <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button type="submit" class="btn btn-danger">Cancelar</button>
</form>
