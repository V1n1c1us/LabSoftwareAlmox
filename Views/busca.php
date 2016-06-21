<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 07/06/2016
 * Time: 09:06
 */
include('../DB/connect.php');

//echo $_POST['palavra'];

$pesquisa = $_POST['palavra'];

$sql = "SELECT nomeusuario, datahora, descricaoproduto, itens.quantidade FROM usuario, itens, produto, movimentacao WHERE usuario.matricula = movimentacao.matricula AND movimentacao.idmovimentacao = itens.idmovimentacao AND produto.codigoprodutoalmox = itens.codigoprodutoalmox AND usuario.nomeusuario LIKE  '%".$pesquisa."' ORDER BY datahora";

$select = $conn->prepare($sql);
$select->execute() or die("Erro ao pesquisar");
$row = $select->rowCount();

if ($row <= 0) {
    echo "<p class='alert alert-danger'>Número de Registros Encontrados <b>($row)</b> com o nome de: <b>($pesquisa)</b></p>";
} else {
?>
<table class="table table-bordered" id="tabela">
    <tr>
        <th>Nome</th>
        <th>Data</th>
        <th>Descrição</th>
        <th>Quantidade</th>
    </tr>
    <?php
    echo '<p class="alert alert-success"> Número de Registros Encontrados <b>('.$row.')</b> com o nome de: <b>('.$pesquisa.')</b></p>';
    while ($linha = $select->fetch()) {
        echo '<tr>';
        echo '<td>' . $linha["nomeusuario"] . '</td>';
        echo '<td>' . $linha["datahora"] . '</td>';
        echo '<td>' . $linha["descricaoproduto"] . '</td>';
        echo '<td id="quantidade">' . $linha["quantidade"] . '</td>';
        echo '</tr>';
       }
    }
    ?>
    Total: <span id="total"></span>
</table>
