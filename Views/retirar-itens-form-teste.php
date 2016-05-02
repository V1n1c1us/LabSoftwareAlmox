<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 05/04/2016
 * Time: 17:38
 */
?>
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
                    <th>Adicionar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = $conn->query("SELECT * FROM produto, unidade WHERE produto.codunidade = unidade.codunidade");
                //$sql = $conn->query("SELECT * FROM produto");

                while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                    $idproduto = $linha->idproduto;
                    $codigoProdutoAlmox = $linha->codigoprodutoalmox;
                    $descricaoProduto = $linha->descricaoproduto;
                    $unidade = $linha->unidade;
                    $quantidade = $linha->quantidade;
                    //$adicionar = '<a href="retirar-itens-form-teste.php?codigoprodutoalmox='.$codigoProdutoAlmox.'"title="'.$codigoProdutoAlmox.'"> Adicionar </a>';
                    ?>

                    <tr>
                        <td><?php echo $codigoProdutoAlmox; ?></td>
                        <td><?php echo $descricaoProduto; ?></td>
                        <td><?php echo $unidade; ?></td>
                        <td><?php echo $quantidade; ?></td>
                        <td>
                            <form action="retirada-de-itens-teste.php" method="POST" name="comprar">

                                <input name="id_txt" type="hidden" value="<?php echo $idproduto; ?>"/>
                                <input name="codigoprodutoalmox" type="hidden"
                                       value="<?php echo $codigoProdutoAlmox; ?>"/>
                                <input name="descricaoproduto" type="hidden" value="<?php echo $descricaoProduto; ?>"/>
                                <input name="unidade" type="hidden" value="<?php echo $unidade; ?>"/>
                                <input name="quantidade" type="hidden" value="<?php echo $quantidade; ?>"/>

                                <button class="glyphicon glyphicon-shopping-cart" value="comprar" name="comprar">
                                    Comprar
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-xs-12">
        <div class="col-md-12">
            <h3> Confirmar Itens(s) e Finalizar Pedido</h3>

            <?php
            if (isset($_POST['id_txt'])) {

                $idproduto = $_POST['id_txt'];
                @$codigoAlmox = $_POST['codigoprodutoalmox'];
                $descricaoProduto = $_POST['descricaoproduto'];
                $unidade = $_POST['unidade'];
                $quantidade = $_POST['quantidade'];
                $meusPedidos [] = array('idproduto' => $idproduto, 'codigoprodutoalmox' => $codigoAlmox, 'descricaoproduto' => $descricaoProduto, 'unidade' => $unidade, 'quantidade' => $quantidade);
            }

            //se existri algo dentro da sessão do carrinho
            if (isset($_SESSION['produtosPedidos'])) {
                $meusPedidos = $_SESSION['produtosPedidos'];
                if (isset($_POST['id_txt'])) {

                    $idproduto = $_POST['id_txt'];
                    @$codigoAlmox = $_POST['codigoprodutoalmox'];
                    $descricaoProduto = $_POST['descricaoproduto'];
                    $unidade = $_POST['unidade'];
                    $quantidade = $_POST['quantidade'];
                    $posicao = -1;

                    for ($i = 0; $i < count($meusPedidos); $i++) {
                        if ($idproduto == $meusPedidos[$i]['idproduto']) {
                            $posicao = $i;
                        }
                    }

                    if ($posicao <> -1) {//se a posição for diferente de -1
                        $controlaQtda = $meusPedidos[$posicao]['quantidade'] + $quantidade; // controla a quantidade e soma a posição mais 1 no valor que já tem
                        $meusPedidos [$posicao] = array('idproduto' => $idproduto, 'codigoprodutoalmox' => $codigoAlmox, 'descricaoproduto' => $descricaoProduto, 'unidade' => $unidade, 'quantidade' => $controlaQtda);
                    } else {
                        $meusPedidos [] = array('idproduto' => $idproduto, 'codigoprodutoalmox' => $codigoAlmox, 'descricaoproduto' => $descricaoProduto, 'unidade' => $unidade, 'quantidade' => $quantidade);
                    }
                }
            }

            if (isset($_POST['id_atualizar'])) {
                $indice = $_POST['id_atualizar'];
                $quant = $_POST['quantidade_atualiza'];
                $meusPedidos[$indice]['quantidade'] = $quant;
            }

            if (isset($_POST['id_deleta'])) {
                $indice = $_POST['id_deleta'];
                $meusPedidos[$indice] = NULL;
            }

            if (isset($meusPedidos)) $_SESSION['produtosPedidos'] = $meusPedidos;
            ?>
            <table id="confirmTable" class="table table-bordered">
                <thead>
                <tr>
                    <th>Produto</th>
                    <th>Descrição do Produto</th>
                    <th>Unidade</th>
                    <th>Quantidade</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <?php
                if (isset($meusPedidos)) {
                    $total = 0;
                    for ($i = 0; $i < count($meusPedidos); $i++) {
                        if ($meusPedidos[$i] <> NULL) {
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $meusPedidos[$i]['codigoprodutoalmox']; ?></td>
                                <td><?php echo $meusPedidos[$i]['descricaoproduto']; ?></td>
                                <td><?php echo $meusPedidos[$i]['unidade']; ?></td>
                                <td>
                                    <form action="" name="atualizar" method="POST">
                                        <input type="hidden" name="id_atualizar" value="<?php echo $i ?>"/>
                                        <!--mostra o objeto na posição dele-->
                                        <input class="form-group-sm" type="text" name="quantidade_atualiza"
                                               value="<?php echo $meusPedidos[$i]['quantidade'] ?>" size="2"
                                               maxlength="2"/>
                                        <button type="submit" class="btn btn-info glyphicon glyphicon-refresh"></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="" method="POST">
                                        <input name="id_deleta" type="hidden" value="<?php echo $i ?>"/>
                                        <button type="submit" class="btn btn-danger fa fa-remove"></button>
                                    </form>
                                </td>
                                <?php
                                $somaqtda = $quantidade + $meusPedidos[$i]['quantidade'];
                                $total = $total + $somaqtda;
                                ?>
                            </tr>
                            </tbody>
                            <?php
                        }
                    }
                }
                ?>
                <tfoot>
                <tr>
                    <th>Total:</th>
                    <td style="color: red;"><b><?php if (isset($total)) echo $total; ?></b></td>
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


