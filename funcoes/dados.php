<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 09/05/2016
 * Time: 10:47
 */
include("../DB/connect.php");

header('Content-Type:' . "text/plain");

if(!$conn){
    echo '[{"erro": "Não Foi possível conectar ao banco"';
    echo '}]';
}else{
    $sql = $conn->query("SELECT * FROM usuario");
    $n = $sql->rowCount();

    if(!$sql){
        echo '[{"erro": "Não retornou nada"';
        echo '}]';
    }else if($n < 1){
        echo '[{"erro": "Nenhum dado cadastrado"';
        echo '}]';
    } else{
        for($i = 0; $i < $n; $i++){
            $dados[] = $sql->fetch(PDO::FETCH_ASSOC);
        }
        echo json_encode($dados, JSON_PRETTY_PRINT);
    }
}



