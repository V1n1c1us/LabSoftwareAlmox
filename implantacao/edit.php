<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 06/07/2016
 * Time: 02:23
 */

 include '../DB/connect.php';

 $id = $_POST["idProduto"];
 $text = $_POST["quantidade"];
  $sql = "UPDATE produto SET quantidade = $text WHERE id= $id ";

 ?>
