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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Navigation -->

        <?php include('Views/header.php');?>

        <?php include('Views/menu.php');?>

    </nav>
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="active">Início /</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">

                </div>
                <div class="col-lg-3 col-md-6">

                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <img class="img-responsive center-block" src="logoPoli.png" width="500"/>
                    <h1 class="text-center" style="font-size: 5em;">
                        Bem-Vindo!
                    </h1>
                    <h3 class="text-center">Almoxarifado <small>Colégio Politécnico - UFSM</small></h3>
                </div>
                <div class="col-lg-4"></div>
            </div>

             </div> <!-- / panel preview -->
    </div>
            <!-- /.row -->
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

