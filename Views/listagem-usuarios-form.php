<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 02/05/2016
 * Time: 11:12
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 05/04/2016
 * Time: 17:38
 */
?>
<form role="form" method="post">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-lg-12">
                <h3> Buscar Iten(s)</h3>
                <table id="tabelaProdutos" class="table table-bordered table-responsive" cellspacing="0"
                       cellpadding="0">
                    <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Matrícula</th>
                        <th>Unidade</th>
                        <th>Quantidade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = $conn->query("SELECT * FROM usuario");
                    //$sql = $conn->query("SELECT * FROM produto");

                    while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                        $nomeusuario = $linha->nomeusuario;
                        $matricula = $linha->matricula;
                        $email = $linha->email;

                        //$unidade = $linha->unidade;
                        //$quantidade = $linha->quantidade;
                        ?>

                        <tr>
                            <td><?php echo $nomeusuario;?></td>
                            <td>
                                <?php if(isset($matricula)){
                                    echo $matricula;
                                }else{
                                    echo "--";
                                }?>
                            </td>
                            <td>
                                <?php if(isset($email)){
                                    echo $email;
                                }else{
                                    echo "--";
                                }?>
                            </td>
<!--                            <td>--><?php //echo $unidade;?><!--</td>-->
<!--                            <td>--><?php //echo $quantidade;?><!--</td>-->
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>



