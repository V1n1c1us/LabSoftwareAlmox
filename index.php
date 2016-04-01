<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 01/04/2016
 * Time: 14:57
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colégio Politécnico - Almox</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <section class="login-form">
                <form method="post" action="principal.php" role="login">
                    <img src="http://www.enemvirtual.com.br/wp-content/uploads/2011/09/ufsm.gif" class="img-responsive" alt="" />
                    <input type="email" name="email" placeholder="Email" required class="form-control input-lg"/>
                    <input type="password" class="form-control input-lg" id="password" placeholder="Password"/>
                    <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Entrar</button>
                    <div>
                        <a href="#">Create account</a> or <a href="#">reset password</a>
                    </div>
                </form>
                <div class="form-links">
                    <a href="www.politecnico.ufsm.br" target="_blank" style="color: #23527c ">www.politecnico.ufsm.br</a>
                </div>
            </section>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>

