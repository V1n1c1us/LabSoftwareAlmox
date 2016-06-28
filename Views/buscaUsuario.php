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

$sql = "SELECT * FROM usuario WHERE usuario.nomeusuario LIKE  '%".$pesquisa."'";

$select = $conn->prepare($sql);
$select->execute() or die("<div class='alert alert-danger'>Erro ao pesquisar</div>");
$row = $select->rowCount();

if ($row <= 0) {
    echo "<p class='alert alert-danger'>Número de Registros Encontrados <b>($row)</b> com o nome de: <b>($pesquisa)</b></p>";
} else {
?>
<table class="table table-bordered" id="tabela">
    <tr>
        <th class="text-center">Nome</th>
        <th class="text-center"><i class="fa fa-cog"></i></th>
    </tr>
    <?php
    echo '<p class="alert alert-success"> Número de Registros Encontrados <b>('.$row.')</b> com o nome de: <b>('.$pesquisa.')</b></p>';
    while ($linha = $select->fetch()) {
        echo '<tr>';
        echo '<td class="text-center">' . $linha["nomeusuario"] . '</td>';
        echo '<td class="text-center"><a class="btn btn-default" href="relatorioData.php?id='.$linha["id"].'"><i class="fa fa-search"></i></a></td>';
        echo '</tr>';
       }
    }
    ?>
</table>
