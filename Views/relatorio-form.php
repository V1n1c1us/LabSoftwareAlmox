<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 07/04/2016
 * Time: 20:05
 */

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colégio Politécnico - Almox</title>

</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Navigation -->

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">


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

                    <table class="table table-bordered" border="1">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Desc</th>
                            <th>Data/Hora</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include('../DB/connect.php');

                        @$nome = $_POST["nomeusuario"];

                        $sql = "SELECT nomeusuario, datahora, descricaoproduto, itens.quantidade FROM usuario, itens, produto, movimentacao WHERE usuario.matricula = movimentacao.matricula AND movimentacao.idmovimentacao = itens.iditens AND produto.codigoprodutoalmox = itens.codigoprodutoalmox AND usuario.nomeusuario LIKE '%".$nome."%' ORDER BY datahora";

                        //$sql = "SELECT nomeusuario, datahora, descricaoproduto, itens.quantidade FROM usuario, itens, produto, movimentacao WHERE usuario.matricula = movimentacao.matricula AND movimentacao.idmovimentacao = itens.iditens AND produto.codigoprodutoalmox = itens.codigoprodutoalmox AND usuario.nomeusuario = LIKE '%$nome%'";
                        $select = $conn->prepare($sql);
                        $select->execute();
                        $row = $select->rowCount();

                        if ($row > 0) {
                            while ($linha = $select->fetchObject()) {
                                $nomeusuario = $linha->nomeusuario;
                                $dd = $linha->descricaoproduto;
                                $dataHora = $linha->datahora;
                                ?>

                                <tr>
                                    <td><?php echo $nomeusuario; ?></td>
                                    <td><?php echo $dd; ?></td>
                                    <td><?php echo $dataHora; ?></td>
                                </tr>


                                <?php
                            }
                        } else {
                            echo "<h1>NADA</h1>";
                        }
                        ?>
                        </tbody>
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


<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 07/04/2016
 * Time: 20:04
 */

//$sql = $conn->query("SELECT nomeusuario, datahora, descricaoproduto, itens.quantidade FROM usuario, itens, produto, movimentacao WHERE usuario.matricula = movimentacao.matricula AND movimentacao.idmovimentacao = itens.iditens AND produto.codigoprodutoalmox = itens.codigoprodutoalmox AND usuario.matricula LIKE '%$nome%'");


?>











