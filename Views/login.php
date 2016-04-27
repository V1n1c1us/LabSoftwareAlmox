<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 05/04/2016
 * Time: 14:57
 */

?>

<div class="col-md-4"></div>
<div class="col-md-4">
    <section class="login-form">
        <form method="post" action="./funcoes/autenticaLogin.php" role="login"
              style="background: #f7f7f7; transform: none; transition: all 0s ease 0s; box-shadow: rgba(0,0,0,0.298039) 0px 2px 2px 0px;">
            <img src="logoPoli.png" class="img-responsive" alt=""/>
            <input type="text" name="login" id="login" placeholder="Email" class="form-control input-lg" required/>
            <input type="password" class="form-control input-lg" id="senha" placeholder="Password" name="senha"
                   required/>
            <button type="submit" id="logar" class="btn btn-lg btn-primary btn-block" disabled>Entrar
            </button>

        </form>
        <div>
            <p id="er" class="text-center text-danger">
                <?php
                //se a varíavel global($_SESSION['loginErro']) for vazia
                if (isset($_SESSION['loginErro'])) {
                    //imprime o que tem dentro da variável
                    echo $_SESSION['loginErro'];
                    //depois que imprime, destroi a variável para não ficar nenhum dado na variável global
                    unset($_SESSION['loginErro']);
                }
                ?>
            </p>
        </div>
        <div class="form-links">
            <a href="www.politecnico.ufsm.br" target="_blank"
               style="color: #23527c ">www.politecnico.ufsm.br</a>
        </div>
    </section>
</div>
<div class="col-md-4"></div>
