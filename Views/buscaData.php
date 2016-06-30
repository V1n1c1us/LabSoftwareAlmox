<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 07/06/2016
 * Time: 09:06
 */
include('../DB/connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colégio Politécnico - Almox</title>
    <link rel="stylesheet" href="../css/sb-admin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Navigation -->

        <?php include('../Views/header.php'); ?>

    </nav>
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <i class="fa fa-print"></i> Gerar Relatório
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="principal.php">Início</a></li>
                        <li class="active">Gerar Relatório</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">


                    <?php
                    //echo $_POST['palavra'];
                    $id = $_POST['id'];
                    $dataInicial = $_POST['dataInicial'];
                    $dataFinal = $_POST['dataFinal'];

                    //$sql = "SELECT nomeusuario, datahora, descricaoproduto, itens.quantidade FROM usuario, itens, produto, movimentacao WHERE usuario.matricula = movimentacao.matricula AND movimentacao.idmovimentacao = itens.idmovimentacao AND produto.codigoprodutoalmox = itens.codigoprodutoalmox AND usuario.nomeusuario LIKE  '%".$dataInicial."' ORDER BY datahora";
                    $sql = "SELECT nomeusuario, datahora, descricaoproduto, itens.quantidade FROM usuario, itens, produto, movimentacao WHERE usuario.matricula = movimentacao.matricula AND movimentacao.idmovimentacao = itens.idmovimentacao AND produto.codigoprodutoalmox = itens.codigoprodutoalmox AND usuario.id = '$id' AND movimentacao.datahora BETWEEN  '$dataInicial' AND '$dataFinal'  ORDER BY datahora ";
                    $select = $conn->prepare($sql);
                    $select->execute() or die("<div class='alert alert-danger'>Erro ao pesquisar</div>");
                    $row = $select->rowCount();

                    if ($row <= 0) {
                        echo "<p class='alert alert-danger'>Número de Registros Encontrados <b>($row)</b> com o nome de: <b>($dataInicial)</b></p>";
                    } else {
                    ?>
                    <form method="post" action="../funcoes/relatorioUsuario.php">
                    <a href="../funcoes/relatorioUsuario.php?id=<?php echo $id?>" class="btn btn-default" style="margin-bottom: 20px;"><i class="fa fa-print"></i> PDF</a>
                    </form>

                    <table class="table table-bordered" id="tabela">
                        <tr>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Descrição</th>
                            <th>Quantidade</th>
                        </tr>
                        <?php
                        echo '<p class="alert alert-success"> Número de Registros Encontrados <b>(' . $row . ')</b> no período de: <i class="fa fa-calendar"></i> <b>(' . date("d/m/Y", strtotime($dataInicial)) . ') a ('. date("d/m/Y", strtotime($dataFinal)).')</b></p>';
                        while ($linha = $select->fetch()) {
                            echo '<tr>';
                            echo '<td>' . $linha["nomeusuario"] . '</td>';
                            echo '<td>' . date("d/m/Y", strtotime($linha["datahora"])) . '</td>';
                            echo '<td>' . $linha["descricaoproduto"] . '</td>';
                            echo '<td>' . $linha["quantidade"] . '</td>';
                            echo '</tr>';
                        }
                        }
                        ?>
                    </table>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>


