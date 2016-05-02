<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 05/04/2016
 * Time: 17:38
 */
?>

<form role="form" method="post">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-lg-12">
                <h3> Buscar Iten(s)</h3>
                <table id="tabelaProdutos" class="table table-bordered table-responsive" cellspacing="0"
                       cellpadding="0">
                    <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Descrição do Produto</th>
                        <th>Unidade</th>
                        <th>Quantidade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = $conn->query("SELECT * FROM produto, unidade WHERE produto.codunidade = unidade.codunidade");
                    //$sql = $conn->query("SELECT * FROM produto");

                    while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                        $idProduto = $linha->idproduto;
                        $codigoProdutoAlmox = $linha->codigoprodutoalmox;
                        $descricaoProduto = $linha->descricaoproduto;
                        $unidade = $linha->unidade;
                        $quantidade = $linha->quantidade;
                        ?>

                        <tr idProduto="<?php echo $idProduto;?>" >
                            <td><?php echo $codigoProdutoAlmox;?></td>
                            <td><?php echo $descricaoProduto;?></td>
                            <td><?php echo $unidade;?></td>
                            <td><?php echo $quantidade;?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <button class="btn btn-primary nextBtn pull-right" id="enviaDados" type="button">Next</button>
            </div>
        </div>
    </div>
</form>
<div class="row">
    <div class="col-xs-12">
        <div class="col-md-12">
            <h3> Confirmar Itens(s) e Finalizar Pedido</h3>
            <table id="confirmTable" class="table table-bordered">
                <thead>
                <tr>
                    <th>Produto</th>
                    <th>Descrição do Produto</th>
                    <th>Unidade</th>
                    <th>Quantidade</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th class="text-center"> ---</th>
                    <th class="text-center"> ---</th>
                    <th></th>
                    <th>Total de Iten(s) - 2</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">Login</label>
                    <input type="text" required="required" class="form-control"
                           placeholder="Login"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Senha</label>
                    <input maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Senha"/>
                </div>
                <button class="btn btn-success btn-md pull-left" id="confimaPedidoOK" type="button">Confirmar
                    Pedido
                </button>
                <button class="btn btn-danger btn-md pull-right " id="cancelaPedido" type="button">Cancelar Pedido
                </button>
            </div>
            <div class="col-lg 4"></div>
        </div>
    </div>
</div>


