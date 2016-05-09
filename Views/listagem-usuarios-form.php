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

function getKeys($arr) {
    return join('|', array_keys(($arr)));
}

function getValues($arr) {
    return join('|', array_values(($arr)));
}



?>
<form role="form" method="post">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-lg-12">
                <h3> Buscar Iten(s)</h3>
                <!--                <table id="tabelaProdutos" class="table table-bordered table-responsive" cellspacing="0" -->
                <!--                    <thead>-->
                <!--                    <tr>-->
                <!--                        <th>Produto</th>-->
                <!--                        <th>Matrícula</th>-->
                <!--                        <th>Unidade</th>-->
                <!--                        <th>Quantidade</th>-->
                <!--                    </tr>-->
                <!--                    <tbody>-->
                <!--                    </tbody>-->
                <!--                    </thead>-->
                <!--                </table>-->
                <table id="tabelaUsuarios" class="table table-bordered table-responsive" cellspacing="0"
                       cellpadding="0">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Matrícula</th>
                        <th>E-maill</th>
                        <th>Tipo</th>
                        <th><i class="fa fa-cog"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = $conn->query("SELECT * FROM usuario");
                    //$sql = $conn->query("SELECT * FROM produto");

                    while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {


                    $idUsuario = $linha->id;
                    $nomeusuario = $linha->nomeusuario;
                    $matricula = $linha->matricula;
                    $email = $linha->email;
                    $siape = $linha->siape;
                    $tipo = $linha->tipo;

                    $registro = array(
                        'nomeusuario' => $linha->nomeusuario,
                        'matricula' => $linha->matricula,
                        'email' => $linha->email,
                        'siape' => $linha->siape,
                        'tipo' => $linha->tipo,
                    );

                    ?>

                    <tr>
                        <td><?php echo $nomeusuario; ?></td>
                        <td>
                            <?php if (isset($matricula)) {
                                echo $matricula;
                            } else {
                                echo $siape;
                            } ?>
                        </td>
                        <td>
                            <?php if (isset($email)) {
                                echo $email;
                            } else {
                                echo "--";
                            } ?>
                        </td>
                        <td>
                            <?php
                            if ($tipo == 1) {
                                echo "Servidor";
                            } elseif ($tipo == 2) {
                                echo "Funcionário";
                            } elseif ($tipo == 3) {
                                echo "Bolsista";
                            }
                            ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info center-block" data-toggle="modal" data-target="#modalEditUsuario" data-keys="<?= getKeys($registro) ?>" data-values="<?= getValues($registro) ?>">
                                <i class="fa fa-edit"></i>
                            </button>
                        </td>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="modalEditUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">

                <input type="text" name="nomeusuario">
                <input type="text" name="matricula">
                <input type="text" name="email">
                <input type="text" name="siape">
                <input type="text" name="tipo">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


    <script>
    $('button').click(function(){


        var keys = $(this).data('keys').split('|');
        var values = $(this).data('values').split('|');

        for(var i=0; i<keys.length; i++) {

            $('input[name='+keys[i]+']').val(values[i]);
        }

    });
</script>





