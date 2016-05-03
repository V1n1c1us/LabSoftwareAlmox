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

    <script type="text/javascript">

        //var selected=[];
        $(document).ready(function () {
            var table = $('#tabelaProdutos').DataTable({
                "processing": true,
                "language": {
                    "url": "datatableTraducao.json",
                },
                select: {
                    style: 'multi'
                }
            });

            $("#tabelaProdutos tbody").on("click","tr", function(){
                var produto = $(this).find("td:nth-of-type(1)").text();
                var descricao = $(this).find("td:nth-of-type(2)").text();
                var unidade = $(this).find("td:nth-of-type(3)").text();
                var idProduto = $(this).attr("idProduto");

                var trNovo = "<tr idProduto='"+idProduto+"'><td>"+produto+"</td><td>"+descricao+"</td><td>"+unidade+"</td><td><input class='quantidade' type='number' value='1'/></td></tr>"
                $("#confirmTable tbody").append(trNovo);
                
            });

            $('#enviaDados').click(function () {

                var listaProdutos = [];
                $("#confirmTable tr").each(function(){
                    var idProduto = $(this).attr("idProduto");
                    if(idProduto != null){
                        var p = {};
                        p.quantidade = parseInt($(this).find(".quantidade").val());
                        p.idProduto = idProduto;
                        listaProdutos.push(p);
                    }
                });

                $.post("processaPedido.php",{
                    produtos: listaProdutos,
                    tipo: "saida",
                    login: $("#campoLogin").val(),
                    senha: $("#campoSenha").val()
                }, function(data){
                    try{
                    var response = $.parseJSON(data);


                    if(response.status == "ok"){
                        bootbox.alert({
                            message: '<center><img src="logoPoli.png" width="100px"/></center><br/> <h2 class="alert alert-success text-center">Pedido Efetuado com Sucesso</h2>',
                        });
                    } else {
                        bootbox.alert( {
                            message: '<center><img src="logoPoli.png" width="100px"/></center><br/> <h2 class="alert alert-danger text-center">'+response.msgErro+'</h2>',
                        });
                    }
                } catch(e){
                    alert(e);
                    console.log(data);
                }
                });

            });



            $('div.setup-panel div a.btn-primary').trigger('click');

//            ALERT CANCELA PEDIDO
            $(document).on("click", "#cancelaPedido", function() {
                bootbox.alert( {
                    message: '<center><img src="logoPoli.png" width="100px"/></center><br/> <h2 class="alert alert-danger text-center">Pedido Cancelado</h2>',
                });
            });
//            ALERT CONFIRMA PEDIDO
            $(document).on("click", "#confimaPedidoOK", function(){
                bootbox.alert({
                    message: '<center><img src="logoPoli.png" width="100px"/></center><br/> <h2 class="alert alert-success text-center">Pedido Efetuado com Sucesso</h2>',
                });
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
                        <i class="fa fa-cart-arrow-down"></i> Retirar Itens
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="principal.php">Início</a></li>
                        <li class="active">Retirar Itens</li>
                    </ol>
                </div>
            </div>
            <?php include('Views/retirar-itens-form.php'); ?>
        </div>

    </div>



</div>
<!-- /#page-wrapper -->

</body>
</html>


