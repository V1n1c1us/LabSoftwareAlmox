<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 02/05/2016
 * Time: 11:11
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 05/04/2016
 * Time: 17:34
 */

include('DB/connect.php');
session_start();
include('funcoes/seguranca.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colégio Politécnico - Almox</title>

    <link rel="stylesheet" href="css/step.css">
    <?php include('Views/links.php'); ?>
    <?php include('Views/scripts.php'); ?>
    <script src="js/bootbox.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="funcoes/scriptLista.js"></script>

    <script type="text/javascript">

        //var selected=[];
        $(document).ready(function () {
            var table = $('#tabelaUsuarios').DataTable({
                "processing": true,
                "language": {
                    "url": "datatableTraducaoUser.json",
                },
            });
        });
    </script>
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
                        <i class="fa fa-cart-arrow-down"></i> Listar Usuários
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="principal.php">Início</a></li>
                        <li class="active">Listar Usuários</li>
                    </ol>
                </div>
            </div>
            <?php include('Views/listagem-usuarios-form.php'); ?>
        </div>

    </div>


</div>
<!-- /#page-wrapper -->

</body>
</html>



