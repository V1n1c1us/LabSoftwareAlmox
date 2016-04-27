<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 01/04/2016
 * Time: 15:59
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

            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="active">Início /</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <img class="img-responsive center-block" src="logoPoli.png" width="500"/>

                    <h1 class="text-center">
                        Bem-Vindo, <?php echo  $_SESSION['nomeusuario'];?>!
                    </h1>

                    <h3 class="text-center" style="font-size: 2em; ">Almoxarifado
                        <small>Colégio Politécnico - UFSM</small>
                    </h3>
                </div>
                <div class="col-lg-4"></div>
            </div>

        </div>
    </div>
</div>
<!-- /#page-wrapper -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>

