
<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 03/04/2016
 * Time: 23:20
 */

$email = $_POST['email'];
$senha = $_POST['senha'];

$emailf = "v@v.com";
$senhaf = "123";

if($email == $emailf && $senha == $senhaf){

    header("Location: ../principal.php");
}else{
    header("Location: http://allison.house/404");
}

?>