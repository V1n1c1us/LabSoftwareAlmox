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
                        <th class="text-center">Produto</th>
                        <th class="text-center">Descrição do Produto</th>
                        <th class="text-center">Unidade</th>
                        <th class="text-center">Quantidade</th>
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

                        <tr idProduto="<?php echo $idProduto; ?>">
                            <td class="text-center"><?php echo $codigoProdutoAlmox; ?></td>
                            <td><?php echo $descricaoProduto; ?></td>
                            <td class="text-center"><?php echo $unidade; ?></td>

                                <?php if ($quantidade <= 5) {
                                    echo '<td class="text-center alert alert-danger" data-toggle="tooltip" data-placement="top"
                        title="Estoque Baixo"><b>'. $quantidade .'</b></td>';
                                } else{
                                    echo '<td class="text-center"><b>'. $quantidade .'</b></td>';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <button class="btn btn-primary nextBtn pull-right" id="" type="button">Next</button>
            </div>
        </div>
    </div>
</form>
<div class="row">
    <div class="col-xs-12">
        <div class="col-md-12">
            <h3> Confirmar Itens(s) e Finalizar Pedido</h3>
            <table id="confirmTable" class="table table-bordered text-center">
                <thead>
                <tr>
                    <th class="text-center">Produto</th>
                    <th class="text-center">Descrição do Produto</th>
                    <th class="text-center">Unidade</th>
                    <th class="text-center">Quantidade</th>
                    <th class="text-center"><i class="fa fa-cog"></i></th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr class="text-center">
                    <th class="text-center"> ---</th>
                    <th class="text-center"> ---</th>
                    <th class="text-center"> ---</th>
                    <th class="text-center">Total de Iten(s) <span id="total"></span></th>
                    <th></th>
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
                           placeholder="Login" id="campoLogin" name="login" required/>
                </div>
                <div class="form-group">
                    <label class="control-label">Senha</label>
                    <input maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Senha" id="campoSenha" name="senha" required/>
                </div>
                <button class="btn btn-success btn-md pull-left" id="enviaDados" type="button">Confirmar
                    Pedido
                </button>
                <button class="btn btn-danger btn-md pull-right " id="cancelaPedido" type="button">Cancelar Pedido
                </button>
            </div>
            <div class="col-lg 4"></div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


