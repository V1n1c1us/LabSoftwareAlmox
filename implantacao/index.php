<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colégio Politécnico - Almox</title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript">

        //var selected=[];
//        $(document).ready(function () {
//            $('.qtda').on('change', function(){
//               var valor = parseInt($(this).val());
//                var id = $('td.codigoprodutoalmox').html();
//
//                var data = $(this).serializeArray();
//
//                data.push({name: 'codigoprodutoalmox', value: id});
//                data.push({name: 'quantidade', value: valor});
//
//                alert(valor);
//                console.log(valor);
//                alert(id);
//                $.ajax({
//                    type: "POST",
//                    url: "atualiza.php",
//                    data: data,
//                    success: function(data){
//                        alert(data);
//                    }
//                })
//            });
//        });

        function atualiza(codigoprodutoalmox, quantidade){
            $.ajax({
                type: "POST",
                url: "atualiza.php",
                data: {codigoprodutoalmox: codigoprodutoalmox, quantidade:quantidade},
                datatype: "text",
                success: function (data) {
                    alert(data);
                }
            });
        }

        $(document).on('blur','.qtda', function(){
            var codigoprodutoalmox = $(this).data("id1");
            var quantidade = parseInt($(this).val());

            atualiza(codigoprodutoalmox,quantidade);
        })
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-cart-arrow-down"></i> Listar Usuários
            </h1>
            <ol class="breadcrumb">
                <li><a href="../principal.php">Início</a></li>
                <li class="active">Implantação do Sistema</li>
            </ol>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12-lg">
            <div id="ok"></div>
            <table class="table table-bordered table-responsive" cellspacing="0"
                   cellpadding="0">
                <thead>
                <tr>
                    <th class="text-center">Produto</th>
                    <th class="text-center">Descrição do Produto</th>
                    <th class="text-center">Quantidade</th>
                    <th class="text-center"></th>
                </tr>
                </thead>
                <tbody>

                <?php
                include("../DB/connect.php");

                $sql = $conn->query("SELECT * FROM produto ORDER BY codigoprodutoalmox");

                while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                    $idProduto = $linha->idproduto;
                    $codigoProdutoAlmox = $linha->codigoprodutoalmox;
                    $descricaoProduto = $linha->descricaoproduto;
                    $quantidade = $linha->quantidade;
                    ?>
                    <tr>
                        <td class="text-center codigoprodutoalmox"><?php echo $codigoProdutoAlmox; ?></td>
                        <td><?php echo $descricaoProduto; ?></td>
<!--                        <td><input type="text" class="qtda" value="--><?php //echo $quantidade;?><!--"></td>-->
                        <td class="quantidade" data-id1="<?php echo $codigoProdutoAlmox;?>"><?php echo $quantidade;?></td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>



