<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 01/04/2016
 * Time: 15:59
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
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                        <i class="fa fa-fw fa-arrows-v"></i> Cadastros <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
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
                        Almoxarifado <small>Colégio Politécnico - UFSM</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Emitir Relatório</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3 ">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#modalRealizaPedido">
                            <div class="panel-footer">
                                <span class="pull-left">Efetuar Pedido</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
<!--                <div class="col-lg-3 col-md-6">-->
<!--                    <div class="panel panel-red">-->
<!--                        <div class="panel-heading">-->
<!--                            <div class="row">-->
<!--                                <div class="col-xs-3">-->
<!--                                    <i class="fa fa-support fa-5x"></i>-->
<!--                                </div>-->
<!--                                <div class="col-xs-9 text-right">-->
<!--                                    <div class="huge">13</div>-->
<!--                                    <div>Support Tickets!</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <a href="#">-->
<!--                            <div class="panel-footer">-->
<!--                                <span class="pull-left">View Details</span>-->
<!--                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>-->
<!--                                <div class="clearfix"></div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-shopping-cart fa-2x"></i> Retirar Itens do Estoque</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart">

                                <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Digite o Código ou SIAPE ou CPF ou Nome do Funcionário">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Ir!</button>
                                        </span>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center">Informações</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Nome Completo:</p>
                                        <p>CPF:</p>
                                        <p>Sala/Local de Trabalho:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body form-horizontal">
                                    <div class="form-group">
                                        <label for="concept" class="col-sm-2 control-label">Nome do Item</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="concept" name="concept">
                                        </div>
                                        <label for="description" class="col-sm-1 control-label">Quantidade</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Qtda">
                                            <button class="btn btn-default">Retirar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                </div> <!-- / panel preview -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Modal PEDIDOS -->
<div class="modal fade" id="modalRealizaPedido" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Quem retira o(s) iten(s)?</p>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Professor
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox2" value="option2"> Bolsista
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox3" value="option3"> Funcionário
                </label>
                <br>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <br>
                <h3>Buscar Item(s)</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o Código ou o Nome do Produto">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Ir!</button>
                        </span>
                </div>
                <br>
                <h3>Lista dos Itens Retirados</h3>
                <table class="table table-striped table-responsive table-bordered table-list">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Quantidadde</th>
                            <th class="text-center"><i class="fa fa-cog"></i> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1111</td>
                            <td class="text-center">Lápis</td>
                            <td class="text-center">Lápis - Preto</td>
                            <td class="text-center">5</td>
                            <td class="text-center">
                                <a class="btn btn-danger" data-toggle="tooltip" title="Excluir Item"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">1111</td>
                            <td class="text-center">Lápis</td>
                            <td class="text-center">Lápis - Preto</td>
                            <td class="text-center">5</td>
                            <td class="text-center">
                                <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">1111</td>
                            <td class="text-center">Lápis</td>
                            <td class="text-center">Lápis - Preto</td>
                            <td class="text-center">5</td>
                            <td class="text-center">
                                <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">1111</td>
                            <td class="text-center">Lápis</td>
                            <td class="text-center">Lápis - Preto</td>
                            <td class="text-center">5</td>
                            <td class="text-center">
                                <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">1111</td>
                            <td class="text-center">Lápis</td>
                            <td class="text-center">Lápis - Preto</td>
                            <td class="text-center">5</td>
                            <td class="text-center">
                                <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="form-group">
                    <label for="data">Data da Retirada</label>
                    <input type="date" class="form-control" id="data" placeholder="Data">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar Pedido</button>
                <button type="submit" class="btn btn-success">Confirmar Pedido</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>

