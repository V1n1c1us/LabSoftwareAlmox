<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 07/04/2016
 * Time: 20:04
 */
include('DB/connect.php');


$nome = $_POST['nome'];

$query = $conn->prepare('SELECT * FROM usuario WHERE nomeusuario LIKE ?');
$query->bindValue(1,"%$nome%",PDO::PARAM_STR);
$query->execute();
//$sql = $conn->query("SELECT nomeusuario, datahora, descricaoproduto, itens.quantidade FROM usuario, itens, produto, movimentacao WHERE usuario.matricula = movimentacao.matricula AND movimentacao.idmovimentacao = itens.iditens AND produto.codigoprodutoalmox = itens.codigoprodutoalmox AND usuario.matricula LIKE '%$nome%'");


?>
<div class="col-md-3 form-group">
    <label for="datetimepicker">Data:</label>
    <input type='text' id="data" class="form-control" placeholder="Mês - Ano"/>
</div>
<div class="col-md-6 form-group">
    <label for="autocomplete">Nome:</label>
    <input type='text' id="nome" class="form-control" style="text-transform: capitalize;"
           placeholder="Nome do Usuário" name="nome"/>
</div>
<div class="col-md-3 form-group">
    <button class="btn btn-default" id="buscar" type="button"><i class="fa fa-search"></i></button>
</div>


<div class="container">
    <?php if (!$query->rowCount() == 0) {
        ?>
        <table>
            <tr>
                <th>
                    Nome
                </th>
            </tr>
            <?php
            while ($results = $query->fetch())
            {
                        ?>
                <tr>
                    <td>
                    <?php echo $results['nome']?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    } else { ?>
        <h1>Nada encontrado</h1>
        <?php
    }
    ?>
</div>







