
<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 03/04/2016
 * Time: 23:20
 * http://www.devmedia.com.br/introducao-ao-php-pdo/24973
 */

/*** mysql hostname ***/
$hostname = '200.132.36.197';
/*** mysql username ***/
$username = 'postgres';
/*** mysql password ***/
$password = 'cijkd';

//conexão com o banco
//$conn = new PDO("pgsql:host=200.132.36.197;dbname=dbalmox", "postgres", "cijkd");



$conn = new PDO("pgsql:host=$hostname;dbname=dbalmox", $username, $password);

//$login = $_POST['login'];
//$senha = $_POST['senha'];
//
//$loginf = "123";
//$senhaf = "123";
//
//if($login == $loginf && $senha == $senhaf){
//    header("Location: ../principal.php");
//}else{
//    header("Location: http://allison.house/404");
//}

?>




