<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 04/04/2016
 * Time: 00:20
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colégio Politécnico - Almox</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Controle de Estoque</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i> Vinícius <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="index.html"><i class="fa fa-fw fa-bars"></i> Menu</a>
                </li>
                <li>
                    <h3 style="color: white;">Cadastro</h3>
                    <ul>
                        <li>
                            </i><a href="cadastra-servidor.php"><i class="fa fa-fw fa-user"></i> Cadastra Servidor</a>
                        </li>
                        <li>
                            </i><a href="cadastra-bolsista.php"><i class="fa fa-fw fa-user"></i> Cadastra Bolsista</a>
                        </li>
                        <li>
                            </i><a href="cadastra-funcionario.php"><i class="fa fa-fw fa-user"></i> Cadastra Funcionário</a>
                        </li>
                        <li>
                            <a href="cadastra-produto.php"><i class="fa fa-fw fa-barcode"></i> Novo Produto</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Cadastro de Bolsista
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="principal.php">Início</a></li>
                        <li class="active">Cadastra Bolsista</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="matricula">Matrícula</label>
                            <input type="text" class="form-control" id="matricula" placeholder="2014510310" name="">
                        </div>
                        <div class="form-group">
                            <label for="nomeCompleto">Nome Completo</label>
                            <input type="text" class="form-control" id="nomeCompleto" placeholder="Nome Completo" name="">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" placeholder="CPF" name="">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="Senha" name="">
                        </div>
                        <div class="form-group">
                            <label for="email">Orientador(a)</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                        <button type="submit" class="btn btn-danger">Cancelar</button>
                    </form>
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
<script src="js/login.js"></script>
</body>
</html>

