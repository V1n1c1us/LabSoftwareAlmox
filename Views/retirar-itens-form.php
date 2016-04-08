<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 05/04/2016
 * Time: 17:38
 */
?>
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>

            <p>Buscar Iten(s)</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>

            <p>Confirmar Iten(s) e Finalizar Pedido</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
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
                    <tr>
                        <td>6676</td>
                        <td>ABRACADEIRA ROSCA SEM FIM, 16 A 25MM, 10 X 3/4</td>
                        <td>Unidade</td>
                        <td>20,00</td>
                    </tr>
                    <tr>
                        <td>6985</td>
                        <td>PASTA CARTOLINA BRANCA, PADRAO UFSM, P/ SEMINÁRIOS.</td>
                        <td>Rolo</td>
                        <td>500,00</td>
                    </tr>
                    <tr>
                        <td>4607</td>
                        <td>PAPEL HIGIÊNICO BRANCO, EM ROLO (ROLÃO), C/300M.</td>
                        <td>Rolo</td>
                        <td>48,00</td>
                    </tr>
                    <tr>
                        <td>0051</td>
                        <td>PAPEL HIGIÊNICO, FOLHA DUPLA, PCT. C/ 4 ROLOS.</td>
                        <td>Pacote</td>
                        <td>48,00</td>
                    </tr>
                    <tr>
                        <td>6676</td>
                        <td>ABRACADEIRA ROSCA SEM FIM, 16 A 25MM, 10 X 3/4</td>
                        <td>Unidade</td>
                        <td>20,00</td>
                    </tr>
                    <tr>
                        <td>6985</td>
                        <td>PASTA CARTOLINA BRANCA, PADRAO UFSM, P/ SEMINÁRIOS.</td>
                        <td>Rolo</td>
                        <td>500,00</td>
                    </tr>
                    <tr>
                        <td>4607</td>
                        <td>PAPEL HIGIÊNICO BRANCO, EM ROLO (ROLÃO), C/300M.</td>
                        <td>Rolo</td>
                        <td>48,00</td>
                    </tr>
                    <tr>
                        <td>0051</td>
                        <td>PAPEL HIGIÊNICO, FOLHA DUPLA, PCT. C/ 4 ROLOS.</td>
                        <td>Pacote</td>
                        <td>48,00</td>
                    </tr>
                    <tr>
                        <td>6676</td>
                        <td>ABRACADEIRA ROSCA SEM FIM, 16 A 25MM, 10 X 3/4</td>
                        <td>Unidade</td>
                        <td>20,00</td>
                    </tr>
                    <tr>
                        <td>6985</td>
                        <td>PASTA CARTOLINA BRANCA, PADRAO UFSM, P/ SEMINÁRIOS.</td>
                        <td>Rolo</td>
                        <td>500,00</td>
                    </tr>
                    <tr>
                        <td>4607</td>
                        <td>PAPEL HIGIÊNICO BRANCO, EM ROLO (ROLÃO), C/300M.</td>
                        <td>Rolo</td>
                        <td>48,00</td>
                    </tr>
                    <tr>
                        <td>0051</td>
                        <td>PAPEL HIGIÊNICO, FOLHA DUPLA, PCT. C/ 4 ROLOS.</td>
                        <td>Pacote</td>
                        <td>48,00</td>
                    </tr>
                    <tr>
                        <td>6676</td>
                        <td>ABRACADEIRA ROSCA SEM FIM, 16 A 25MM, 10 X 3/4</td>
                        <td>Unidade</td>
                        <td>20,00</td>
                    </tr>
                    <tr>
                        <td>6985</td>
                        <td>PASTA CARTOLINA BRANCA, PADRAO UFSM, P/ SEMINÁRIOS.</td>
                        <td>Rolo</td>
                        <td>500,00</td>
                    </tr>
                    <tr>
                        <td>4607</td>
                        <td>PAPEL HIGIÊNICO BRANCO, EM ROLO (ROLÃO), C/300M.</td>
                        <td>Rolo</td>
                        <td>48,00</td>
                    </tr>
                    <tr>
                        <td>0051</td>
                        <td>PAPEL HIGIÊNICO, FOLHA DUPLA, PCT. C/ 4 ROLOS.</td>
                        <td>Pacote</td>
                        <td>48,00</td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary nextBtn btn-lg pull-right" id="enviaDados" type="button">Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Confirmar Itens(s) e Finalizar Pedido</h3>
<!--                --><?php //echo $recebe; ?>
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
                    <tr>
                        <td>0051</td>
                        <td>PAPEL HIGIÊNICO, FOLHA DUPLA, PCT. C/ 4 ROLOS.</td>
                        <td>Pacote</td>
                        <td>1</td>

                    </tr>
                    <tr>
                        <td>4607</td>
                        <td>PAPEL HIGIÊNICO BRANCO, EM ROLO (ROLÃO), C/300M.</td>
                        <td>Rolo</td>
                        <td>1</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="text-center"> --- </th>
                        <th class="text-center"> --- </th>
                        <th></th>
                        <th>Total de Iten(s) - 2</th>
                    </tr>
                    </tfoot>
                </table>
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
                <button class="btn btn-success btn-lg pull-right" type="button">Confirmar Pedido</button>
                <button class="btn btn-danger btn-lg pull-left" id="cancelaPedido" type="button" onclick="cancelarPedido();">Cancelar Pedido</button>
            </div>
        </div>
    </div>
</form>

