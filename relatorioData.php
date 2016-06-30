<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 07/06/2016
 * Time: 00:04
 */
?>
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
    <?php include('Views/links.php'); ?>
    <?php include('Views/scripts.php'); ?>
<!--    <script>-->
<!--        $(function () {-->
<!--            $("#busca").keyup(function () {-->
<!--                var busca = $(this).val();-->
<!--                var pesquisaInicial = $(this).val();-->
<!--                var pesquisaFinal = $(this).val();-->
<!--                console.log("***" + pesquisaInicial);-->
<!--                console.log("***" + pesquisaFinal);-->
<!--                //$(".resultados").html(pesquisa);-->
<!---->
<!--                if (busca != '' && pesquisaInicial != '' && pesquisaFinal != '') {-->
<!--                    var dados = {-->
<!--                        busca: busca,-->
<!--                        dataInicial: pesquisaInicial,-->
<!--                        dataFinal: pesquisaFinal-->
<!--                    }-->
<!--                    $.post('Views/buscaData.php', dados, function (retorna) {-->
<!--                        $(".resultados").html(retorna);-->
<!--                    });-->
<!--                }-->
<!--            });-->
<!---->
<!--            $('#form-pesquisa').submit(function (e) {-->
<!--                e.preventDefault();-->
<!--                var busca = $("#busca").val();-->
<!--                var pesquisaInicial = $("#buscaInicial").val();-->
<!--                var pesquisaFinal = $("#buscaFinal").val();-->
<!--                if (busca == '' && pesquisaInicial == '' && pesquisaFinal == '') {-->
<!--                    alert('Informe sua Pesquisa');-->
<!--                } else {-->
<!--                    var dados = {-->
<!--                        busca : busca,-->
<!--                        dataInicial: pesquisaInicial,-->
<!--                        dataFinal: pesquisaFinal-->
<!--                    }-->
<!--                    $.post('Views/buscaData.php', dados, function (retorna) {-->
<!--                        $('.resultados').html(retorna);-->
<!--                    });-->
<!--                }-->
<!--            });-->
<!--        });-->
<!---->
<!--    </script>-->
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Navigation -->

        <?php include('Views/header.php'); ?>

        <?php include('Views/menu.php'); ?>

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

                    <!-- FORMULÁRIO -->
                    <form id="form-pesquisa" class="form-inline" action="Views/buscaData.php" method="post">
                        <?php
                        include ("DB/connect.php");
                        $id = $_GET['id'];
                        $sql = $conn->query("SELECT * FROM usuario WHERE id = $id");

                        while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                            $id = $linha->id;
                            $matricula = $linha->matricula;
                            ?>
                            <div class="form-group">
                                <label for="dataInicial">Data Inícial</label>
                                <input type="text" class="form-control hidden" id="busca" placeholder="De" name="id" value="<?php echo $id?>"
                                       >
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            <label for="dataInicial">Data Inícial</label>
                            <input type="date" class="form-control" id="buscaInicial" placeholder="De" name="dataInicial">
                        </div>
                        <div class="form-group">
                            <label for="dataFinal">Data Final</label>
                            <input type="date" class="form-control" id="buscaFinal" placeholder="Até" name="dataFinal">
                        </div>
                        <button class="btn btn-default" type="submit" name="enviar"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="resultados col-lg-12">

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




