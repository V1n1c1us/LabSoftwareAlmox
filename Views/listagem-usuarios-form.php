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
                <h3> Listar Usuários</h3>
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

                    while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {

                    $idUsuario = $linha->id;
                    $nomeusuario = $linha->nomeusuario;
                    $matricula = $linha->matricula;
                    $email = $linha->email;
                    $siape = $linha->siape;
                    $tipo = $linha->tipo;

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
                            <a type="button" class="btn btn-info" href="editar-usuario.php?id=<?php echo $idUsuario?>">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a type="button" class="btn btn-danger" href="funcoes/deleta-usuario.php?id=<?php echo $idUsuario?>">
                                <i class="fa fa-remove"></i>
                            </a>
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




