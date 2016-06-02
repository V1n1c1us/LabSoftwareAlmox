<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 07/04/2016
 * Time: 20:04
 */

//$sql = $conn->query("SELECT nomeusuario, datahora, descricaoproduto, itens.quantidade FROM usuario, itens, produto, movimentacao WHERE usuario.matricula = movimentacao.matricula AND movimentacao.idmovimentacao = itens.iditens AND produto.codigoprodutoalmox = itens.codigoprodutoalmox AND usuario.matricula LIKE '%$nome%'");


?>
<!--<div class="col-md-3 form-group">-->
<!--    <label for="datetimepicker">Data:</label>-->
<!--    <input type='text' id="data" class="form-control" placeholder="Mês - Ano" name="matricula"/>-->
<!--</div>-->


<div id="resultados">

    <?php
    include('../DB/connect.php');
    $nome = $_POST["nome"];
    $sql = "SELECT * FROM usuario WHERE nomeusuario LIKE '%$nome%'";
    $select = $conn->prepare($sql);
    $select->execute();
    $row = $select->rowCount();

    if ($row > 0) {
        while ($linha = $select->fetchObject()) {
            $nomeusuario = $linha->nomeusuario;
            ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $nomeusuario; ?></td>
                </tr>
                </tbody>

            </table>
            <?php
        }
    } else {
        echo "<h1>NADA</h1>";
    }
    ?>


</div>










