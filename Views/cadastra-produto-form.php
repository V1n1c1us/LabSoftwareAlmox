<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 26/04/2016
 * Time: 21:01
 */
?>
<!--<form action="funcoes/cadastraUsuario.php?funcao=cadastraFuncionario" method="POST" class="form-inline">-->
<!--    <div class="form-group">-->
<!--        <label for="requisicao">Número da Requisição</label>-->
<!--        <input type="text" class="form-control" id="requisicao" placeholder="Número da Requisição" name="requisicao">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="origem">Origem</label>-->
<!--        <select class="form-control">-->
<!--            <option>Almoxarifado Central</option>-->
<!--            <option>Cartela</option>-->
<!--        </select>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="matricula">Código do Produto</label>-->
<!--        <input type="text" class="form-control" id="matricula" placeholder="Código do Produto" name="matricula">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="descricaoproduto">Descrição</label>-->
<!--        <input type="text" class="form-control" id="descricaoproduto" placeholder="Descrição do Produto" name="descricaoproduto">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="cpf">Unidade</label>-->
<!--        <select class="form-control">-->
<!--            <option>Caixas</option>-->
<!--            <option>Cartela</option>-->
<!--            <option>Pacote</option>-->
<!--            <option>Rolo</option>-->
<!--            <option>Unidade</option>-->
<!--        </select>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="senha">Quantidade em Estoque</label>-->
<!--        <input type="password" class="form-control" id="senha" placeholder="Quantidade" name="senha">-->
<!--    </div>-->
<!--    <button type="submit" class="btn btn-success">Cadastrar</button>-->
<!--</form>-->
<form method="post" name="frm_campo_dinamico" action="">
    <table border="0" cellpadding="2" cellspacing="4" class="table table-responsive table-bordered">
        <tr class="text-center">
            <td class="bd_titulo">Nª Requisição</td>
            <td class="bd_titulo">Origem</td>
            <td class="bd_titulo">Código Produto</td>
            <td class="bd_titulo">Descrição</td>
            <td class="bd_titulo">Unidade</td>
            <td class="bd_titulo" width="10">Quantidade</td>
            <td class="bd_titulo"><i class="fa fa-cog"></i></td>
        </tr>
        <tr class="linhas text-center">
            <td>
                <input type="text" class="form-control" id="requisicao" placeholder="Número da Requisição"
                       name="numerorequisicao[]">
            </td>
            <td>
                <select class="form-control" name="origem[]">
                    <option value="" selected="selected">Selecione a Origem</option>
                    <option>Almoxarifado Central</option>
                    <option>Cartela</option>
                </select>
            </td>
            <td>
                <input type="text" class="form-control" id="codigoproduto" placeholder="Código do Produto"
                       name="codigoproduto[]">
            </td>
            <td>
                <input type="text" class="form-control" id="descricaoproduto" placeholder="Descrição do Produto"
                       name="descricaoproduto[]">
            </td>
            <td>
                <select name="unidade[]" class="form-control">
                    <option value="" selected="selected">Selecione uma unidade</option>
                    <option value="Amarelo">Caixas</option>
                    <option value="Branco">Cartela</option>
                    <option value="Cinza">Pacote</option>
                    <option value="Verde">Rolo</option>
                </select>
            </td>
            <td>
                <input type="text" class="form-control" name="quantidade[]" style="text-align:center"/>
            </td>
            <td>
                <a href="#" class="adicionarCampo btn btn-success fa fa-plus"></a>
                |
                <a href="#" class="removerCampo btn btn-danger fa fa-remove"></a>
            </td>
            <!--            </tr>-->
            <!--                <td align="right" colspan="4"><input type="submit" id="btn-cadastrar" value="Cadastrar"/></td>-->
            <!--            </tr>-->
    </table>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
<?php
// exibindo os dados
if ($_POST){
    $qtd 	= $_POST['numerorequisicao'];
    $descr 	= $_POST['origem'];
    $cor = $_POST['codigoproduto'];
    $valor	= $_POST['descricaoproduto'];
    $unidade	= $_POST['unidade'];
    $quantidade	= $_POST['quantidade'];
    $quant_linhas = count($qtd);
    for ($i=0; $i<$quant_linhas; $i++) {
        echo  "numerorequisicao: ".$qtd[$i]."<br />";
        echo  "origem: ".$descr[$i]."<br />";
        echo  "codigoproduto: ".$cor[$i]."<br />";
        echo  "descricaoproduto: ".$valor[$i]."<br />";
        echo  "unidade: ".$unidade[$i]."<br />";
        echo  "quantidade: ".$quantidade[$i]."<br />";
    }
}
?>

