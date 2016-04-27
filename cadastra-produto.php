<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 26/04/2016
 * Time: 20:58
 */
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

    <?php include('Views/links.php'); ?>
    <?php include('Views/scripts.php'); ?>
    <!--Mascaras INPUT-->
    <script src="js/maskedinput.js"></script>
    <script>
        jQuery(function ($) {
            $("#cpf").mask("999.999.999-99");
        });
    </script>
    <script type="text/javascript">
        $(function () {
            function removeCampo() {
                $(".removerCampo").unbind("click");
                $(".removerCampo").bind("click", function () {
                    if($("tr.linhas").length > 1){
                        $(this).parent().parent().remove();
                    }
                });
            }

            $(".adicionarCampo").click(function () {
                novoCampo = $("tr.linhas:first").clone();
                novoCampo.find("input").val("");
                novoCampo.insertAfter("tr.linhas:last");
                removeCampo();
            });
        });
    </script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Navigation -->

    <?php include('Views/header.php'); ?>

    <?php include('Views/menu.php'); ?>

</nav>
<div id="wrapper">
    <div id="page-wrapper">

        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <i class="fa fa-barcode"></i> Cadastro de Produto
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="principal.php">Início</a></li>
                        <li class="active">Cadastro de Produto</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <?php include('Views/cadastra-produto-form.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>

