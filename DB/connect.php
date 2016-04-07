
<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 03/04/2016
 * Time: 23:20
 */

$login = $_POST['login'];
$senha = $_POST['senha'];

$loginf = "123";
$senhaf = "123";

if($login == $loginf && $senha == $senhaf){
    header("Location: ../principal.php");
}else{
    header("Location: http://allison.house/404");
}

?>