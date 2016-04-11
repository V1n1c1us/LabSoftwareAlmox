<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 03/04/2016
 * Time: 23:49
 */
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

    <!--Mascaras INPUT-->
    <script src="js/maskedinput.js"></script>
    <script>
        jQuery(function ($) {
            $("#cpf").mask("999.999.999-99");
        });
    </script>

</head>
<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- HEADER -->
        <?php include('Views/header.php'); ?>

        <!-- MENU -->
        <?php include('Views/menu.php'); ?>
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <i class="fa fa-user-plus"></i> Cadastro de Servidor
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="principal.php">Início</a></li>
                        <li class="active">Cadastra Servidor</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">

                    <!-- FORMULÁRIO -->
                    <?php include('Views/cadastra-servidor-form.php'); ?>

                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3"></div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<!-- /#wrapper -->
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

