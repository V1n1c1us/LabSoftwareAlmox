<?php

include "DB/connect.php";

$produtos = @$_POST['produtos'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

$response = array();
$SqlSelect = $conn->query("SELECT id,matricula,senha FROM USUARIO WHERE matricula = '$login' and senha = '$senha'");
$resultado = $SqlSelect->fetch(PDO::FETCH_ASSOC);

if (empty($resultado)) {
    $response["msgErro"] = "Credenciais invalidas!";

    echo json_encode($response, JSON_PRETTY_PRINT);
} else {
//    $response["status"] = "ok";
//    $response["Produtos"] = $produtos;
//    $response["TIPO:"] = $tipo;
//    $response['debugs'] = "Sim, Debugs";
//
    $SQLinsert = $conn->prepare("INSERT INTO movimentacao (matricula,datahora,tipo) values (?,current_timestamp,?)");
    $SQLinsert->bindParam(1, $login);
    $SQLinsert->bindParam(2, $tipo);
    $SQLinsert->execute();
    $response["status"] = "ok";
    $response["Produtos"] = $produtos;
    $response["msgErro"] = "SUCESSO";

    $SQLultimoId = $conn->query("SELECT CURRVAL('movimentacao_idmovimentacao_seq')");
    $ultimo_id_movimentacao = $SQLultimoId->fetch(PDO::FETCH_COLUMN);

    foreach ($produtos as $produto) {
        $SQLinsert = $conn->prepare("INSERT INTO itens (codigoprodutoalmox,idMovimentacao,quantidade,tipo) values (?,?,?,?)");
        $SQLinsert->bindParam(1, $produto["codigoProduto"]);
        $SQLinsert->bindParam(2, $ultimo_id_movimentacao);
        $SQLinsert->bindParam(3, $produto["quantidade"]);
        $SQLinsert->bindParam(4, $tipo);
        $SQLinsert->execute();
        $conn->errorInfo();
    }

    echo json_encode($response, JSON_PRETTY_PRINT);
//        //envia email
//        $_destino = "v.f.diehl@gmail.com";
//        $_assunto = "Confirmação do Pedido";
//        $_mensagem = json_encode($response, JSON_PRETTY_PRINT);
//        mail($_destino, $_assunto, $_mensagem);
}


//echo json_encode($response);


//    echo $produtos[0]['idProduto'];
//    echo '-';
//    echo $produtos[0]['quantidade'];
//
//    echo '<br>';
//
//    echo $produtos[1]['idProduto'];
//    echo '-';
//    echo $produtos[1]['quantidade'];


//	$login = $_POST['login'];
//	$senha = $_POST['senha'];
//
//
//    if($login == 123 && $senha == 123){
//        echo $login;
//        echo $senha;
//        $produtos = @$_POST["produtos"];
//        $response["status"] = "ok";
//    }else{
//        $response["msgErro"] = "Erro na coenxao com o mysql!";
//    }
//echo json_encode($response);


//	// $idMovimentacao = criarMovimentacao();
//	// $_POST["login"];
//	// $_POST["senha"];
//
//	//$idUsuario = verificaLogin($_POST["login"],$_POST["senha"]);
//
//	$response = array();
//	if($idUsuario > 0){
//		//try
//		$con->prepare("INSERT INTO movimentacao (idUsuario,data,tipo) values (?,NOW(),?)");
//		$con->bindParam(1,$idUsuario);
//		$con->bindParam(2,$_POST["tipo"]);
//		$con->execute();
//
//		$response["status"] = "ok";
//		$response["msgErro"] = "";
//		$idMovimentacao = $con->lastInsertId();
//
//		// begin
//		foreach($_POST["produtos"] as $produto){
//			$con->prepare("INSERT INTO Item (idProduto,idMovimentacao,quantidade) values (?,?,?)");
//			$con->bindParam(1,$produto["idProduto"]);
//			$con->bindParam(2,$idMovimentacao);
//			$con->bindParam(3,$produto["quantidade"]);
//			$con->excute();
//		}
//		// commit
//
//		// catch rollback etc.
//	} else {
//		$response["status"] = "erro";
//		$response["msgErro"] = "Credenciais invalidas!";
//	}


?>