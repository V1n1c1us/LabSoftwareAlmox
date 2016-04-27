<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 01/04/2016
 * Time: 14:57
 */
include('DB/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colégio Politécnico - Almox</title>
    <link href="css/login.css" rel="stylesheet">
    <?php include('Views/scripts.php'); ?>
    <?php include('Views/links.php'); ?>
    <script type="text/javascript">
        $(function(){

            var $btn = $("#logar");

            $("#login, #senha").on('keyup', function(){
                if ($('#login').is(':valid') && $('#senha').is(':valid')) {
                    $btn.removeAttr('disabled');
                } else {
                    $btn.attr("disabled","disabled");
                }
            });

        });
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <?php include('Views/login.php'); ?>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

