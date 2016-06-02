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
            var table = $('#tabelaProdutos').DataTable({ // chama o id da tabela e chama o DataTable
                "processing": true,
                "language": {
                    "url": "datatableTraducao.json", // esse JSON é pra traduzir a tabela
                },
                select: {
                    style: 'multi' // se refere ao multi select, pra selecionar várias linhas da tabela
                }
            });

            $("#tabelaProdutos tbody").on("click", "tr", function () {
                var produto = $(this).find("td:nth-of-type(1)").text();
                var descricao = $(this).find("td:nth-of-type(2)").text();
                var unidade = $(this).find("td:nth-of-type(3)").text();
                var idProduto = $(this).attr("idProduto");

                var trNovo =
                    "<tr class='text-center' idProduto='" + idProduto + "'>" +
                    "<td class='codigoProduto'>" + produto + "</td>" +
                    "<td class='descricao'>" + descricao + "</td>" +
                    "<td class='unidade'>" + unidade + "</td>" +
                    "<td>" +
                    "<input class='quantidade' type='number' value='1' onchange='somarTotal();'/>" +
                    "</td>" +
                    "<td> " +
                    "<button class='btn btn-danger removeItem' onclick='removeCampo(this);' ><i class='fa fa-remove'></i></button>" +
                    "</td> " +
                    "</tr>"
                $("#confirmTable tbody").append(trNovo);
                somarTotal();

            });

            $('.quantidade').change(function () {

            });


            $('#enviaDados').click(function () {

                var listaProdutos = [];
                $("#confirmTable tr").each(function () {
                    var idProduto = $(this).attr("idProduto");
                    if (idProduto != null) {
                        var p = {};
                        p.idProduto = idProduto;
                        p.codigoProduto = $(this).find(".codigoProduto").text();
                        p.descricao = $(this).find(".descricao").text();
                        p.unidade = $(this).find(".unidade").text();
                        p.quantidade = parseInt($(this).find(".quantidade").val());
                        listaProdutos.push(p);
                    }
                });

                $.post("processaPedido.php", {
                    produtos: listaProdutos,
                    tipo: "saida",
                    login: $("#campoLogin").val(),
                    senha: $("#campoSenha").val()
                }, function (data) {
                    try {
                        console.log("entrou no try");
                        var response = $.parseJSON(data);

                        console.log(response);
                        console.log(data);
                        console.log(response.debugs);

                        if (response.status == "ok") {
                            console.log("IF OK");
                            bootbox.alert({
                                message: '<center><img src="logoPoli.png" width="100px"/></center><br/><h2 class="alert alert-success text-center">Pedido Efetuado com Sucesso</h2>',

                            });
                            setTimeout(function(){
                                document.location.href = 'retirada-de-itens.php';
                            }, 3000);
                        } else {
                            console.log("ELSE OK");
                            bootbox.alert({
                                message: '<center><img src="logoPoli.png" width="100px"/></center><br/> <h2 class="alert alert-danger text-center">' + response.msgErro + '</h2>',
                            });
                            //  window.location='cadastra-produto.php';
                        }
                    } catch (e) {
                        // alert(e);
                        console.log("CAI NO CATCH");
                        console.log(data);
                        console.log(e);
                    }
                });

            });


            //            $('div.setup-panel div a.btn-primary').trigger('click');
            //
            ////            ALERT CANCELA PEDIDO
            //            $(document).on("click", "#cancelaPedido", function () {
            //                bootbox.alert({
            //                    message: '<center><img src="logoPoli.png" width="100px"/></center><br/> <h2 class="alert alert-danger text-center">Pedido Cancelado</h2>',
            //                });
            //            });
            ////            ALERT CONFIRMA PEDIDO
            //            $(document).on("click", "#confimaPedidoOK", function () {
            //                bootbox.alert({
            //                    message: '<center><img src="logoPoli.png" width="100px"/></center><br/> <h2 class="alert alert-success text-center">Pedido Efetuado com Sucesso</h2>',
            //                });
            //            });
        });

        function removeCampo(self) {
            console.log("Apagou um td");
            $(self).parent().parent().remove();
            somarTotal();
        }
        function somarTotal() {
            var total = 0;
            $('.quantidade').each(function () {
                total += parseInt($(this).val());
            });
            $('#total').html(total);
        }


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


