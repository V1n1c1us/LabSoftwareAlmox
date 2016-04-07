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
        <form method="post" action="DB/connect.php" role="login"
              style="background: #f7f7f7; transform: none; transition: all 0s ease 0s; box-shadow: rgba(0,0,0,0.298039) 0px 2px 2px 0px;">
            <img src="logoPoli.png" class="img-responsive" alt=""/>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control input-lg"/>
            <input type="password" id="senha" class="form-control input-lg" id="password" placeholder="Password"
                   name="senha"/>
            <div class="g-recaptcha" data-sitekey="6LeuyBwTAAAAAKYJm09Ream2qk6ecyybj12dv6TJ"></div><br>
            <button type="submit" id="login" name="login" class="btn btn-lg btn-primary btn-block">Entrar
            </button>
            <div>
                <a href="#">Create account</a> or <a href="#">reset password</a>
            </div>
        </form>
        <div class="form-links">
            <a href="www.politecnico.ufsm.br" target="_blank"
               style="color: #23527c ">www.politecnico.ufsm.br</a>
        </div>
    </section>
</div>
<div class="col-md-4"></div>
