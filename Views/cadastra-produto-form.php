<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 26/04/2016
 * Time: 21:01
 */
?>

<form method="post" name="frm_campo_dinamico" action="funcoes/cadastraProduto.php">
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
                <input type="number" class="form-control" id="requisicao" placeholder="Número da Requisição"
                       name="numerorequisicao[]">
            </td>
            <td>
                <select class="form-control" name="codigoalmox[]">
                    <option value="" selected="selected">Selecione a Origem</option>
                    <option value="1">Almoxarifado Central</option>
                    <option value="2">Almoxarifado Politécnico</option>
                </select>
            </td>
            <td>
                <input type="number" class="form-control" id="codigoprodutoalmox" placeholder="Código do Produto"
                       name="codigoprodutoalmox[]">
            </td>
            <td>
                <input type="text" class="form-control" id="descricaoproduto" placeholder="Descrição do Produto"
                       name="descricaoproduto[]">
            </td>
            <td>
                <select name="codunidade[]" class="form-control">
                    <option selected>...</option>
                    <?php
                    include('DB/connect.php');
                    $sql = $conn->query("SELECT * FROM unidade");

                    while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                        $codunidade = $linha->codunidade;
                        $unidade = $linha->unidade;
                        ?>
                        <option value="<?php echo $codunidade; ?>"><?php echo $unidade; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
            <td>
                <input type="number" class="form-control" name="quantidade[]" style="text-align:center"/>
            </td>
            <td>
                <button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="top"
                        title="Cadastrar Item">Cadastrar
                </button>
                |
                <a href="#" class="removerCampo btn btn-danger fa fa-remove"></a>
            </td>
    </table>
    <a href="#" class="adicionarCampo btn btn-info" data-toggle="tooltip">Inserir Novo Item</a>
</form>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
