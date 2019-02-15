<?php
	session_start();
	include_once "val_logado.php";
	include_once('conexao.php');
	
	$nAgencia=mysqli_real_escape_string($conexao,$_POST['nAgencia']);
	$bairro=mysqli_real_escape_string($conexao,$_POST['bairro']);
	$numero=mysqli_real_escape_string($conexao,$_POST['codBanco']);//Numero do Banco FK

	$sql= "SELECT * FROM TB_Agencia where numero_agencia = $nAgencia  LIMIT 1"; 
	$result = mysqli_query($conexao,$sql);
	$resultado = mysqli_fetch_assoc($result);
	if(!empty($resultado)){
		$_SESSION['erro']="Já existe uma Agência com este número.";
		header("Location:cad_agencia.php");
	}
	else{
		$sql=$conexao->prepare("INSERT INTO TB_Agencia(numero_agencia,bairro_agencia,id_agencia_banco)VALUES(?,?,?)");
		$sql->bind_param("ssi",$nAgencia,$bairro,$numero);
		$sql->execute();
		$sql->close();
		$conexao->close();
		$_SESSION['msg']="Agência cadastrada com sucesso";
		header("Location:cad_agencia.php");
		die();	
	}
	
?>