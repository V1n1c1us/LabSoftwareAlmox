<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 02/06/2016
 * Time: 11:40
 */

$id = $_GET['id'];
$sql = $conn->query("SELECT * FROM usuario WHERE id = $id");
//$sql = $conn->query("SELECT * FROM produto");

while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {


    $nomeusuario = $linha->nomeusuario;
    $matricula = $linha->matricula;
    $email = $linha->email;
    $siape = $linha->siape;
    $tipo = $linha->tipo;
    ?>

    <form action="funcoes/editar-usuario.php" method="POST">
        <?php
        if (isset($matricula)) { ?>
            <div class="form-group">
                <label for="matricula">Matrícula</label>
                <input type="text" class="form-control" id="matricula" placeholder="Matrícula" name="matricula"
                       value="<?php echo $matricula; ?>">
            </div>
            <?php
        }
        ?>
        <?php
        if (isset($siape)) { ?>
            <div class="form-group">
                <label for="senha">Siape</label>
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha"
                       value="<?php echo $siape; ?>">
            </div>
            <?php
        }
        ?>
        <div class="form-group">
            <label for="nomeCompleto">Nome Completo</label>
            <input type="text" class="form-control" id="nomeusuario" placeholder="Nome Completo" name="nomeusuario"
                   value="<?php echo $nomeusuario; ?>">
        </div>
        <div class="form-group">
            <label for="cpf">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>">
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
    <?php
}
?>