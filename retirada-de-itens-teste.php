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
//            $('#enviaDados').click(function (){
//                var dataArr = [];
//                var rows = $('tr.selected');
//                var rowData = table.rows( rows ).data();
//                $.each($(rowData),function(key,value){
//                    dataArr.push(value["id"]);
//                    dataArr.push(value["nomeusuario"]);
//                });
//                console.log(dataArr);
//            });
//            $('#enviaDados').click(function () {
//                table.rows('.selected').each(function() {
//                    $("#confirmTable tbody").append($(this));
//                });
//
////                var data = table.rows('.selected').data(); // pega a linha selecionada com os dados
////                $(JSON.stringify(data)).appendTo("#confirmTable tbody");
////                //alert(JSON.stringify(table.rows('.selected').data()));
//
//            });

//            $('#enviaDados').click(function () {
//                // Remove todas as linhas da tabela de confirmação, pra limpar ela
//                $("#confirmTable tr").remove(); // Não lembro se assim funciona, acho que sim
//                var totalItens = 0;
//                table.rows('.selected').each(function(){	// Passa por todas as linhas selecionadas
//                    // Pega os dados da linha selecionada atual
//                    // Nome é a segunda coluna, então pegamos o 2° TD
//                    var nome = $(this).children("td:nth-child(2)").text();
//                    //Cria linha nova com os dados que retiramos
//                    var trNovo = "<tr><td>"+nome+"</td><td>etc</td></tr>"
//                    // Insere a linha formatada na tabela de confirmação
//                    $("#confirmTable tbody").append(trNovo);
//                    // Aumenta quantia de itens selecionados (não sei como tu vai fazer aqui)
//                    totalItens++;
//                    // Caso queira o ID, pra armazenar em uma lista e enviar via POST depois
//                    var idItemSelecionado = $(this).attr("idProduto");
//                });
//                // Cria linha que vai exibir o total de itens
//                $("#confirmTable tbody").append("<tr><td>"+totalItens+"</td></tr>");
//            });
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn'),
                allPrevBtn = $('.prevBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });


            $('div.setup-panel div a.btn-primary').trigger('click');

//            ALERT CANCELA PEDIDO
            $(document).on("click", "#cancelaPedido", function () {
                bootbox.alert({
                    message: '<center><img src="logoPoli.png" width="100px"/></center><br/> <h2 class="alert alert-danger text-center">Pedido Cancelado</h2>',
                });
            });
//            ALERT CONFIRMA PEDIDO
            $(document).on("click", "#confimaPedidoOK", function () {
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
                        <i class="fa fa-cart-arrow-down"></i> Retirar Itens TESTE
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="principal.php">Início</a></li>
                        <li class="active">Retirar Itens</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php include('Views/retirar-itens-form-teste.php'); ?>
                </div>
            </div>
        </div>

    </div>


</div>
<!-- /#page-wrapper -->

</body>
</html>


