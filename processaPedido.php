<?php
	//$produtos = @$_POST["produtos"];
	$login = $_POST['login'];
	$senha = $_POST['senha'];


    if($login == 123 && $senha == 123){
        echo $login;
        echo $senha;
        $produtos = @$_POST["produtos"];
        $response["status"] = "ok";
    }else{
        $response["msgErro"] = "Erro na coenxao com o mysql!";
    }
echo json_encode($response);



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