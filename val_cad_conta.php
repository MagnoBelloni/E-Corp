<?php
	session_start();
	include_once "val_logado.php";
	include_once('conexao.php');	
	$codAge=mysqli_real_escape_string($conexao,$_POST['codAge']);
	$codCli=mysqli_real_escape_string($conexao,$_POST['codCli']);
	$numero=mysqli_real_escape_string($conexao,$_POST['numero']);
	$tipoConta=mysqli_real_escape_string($conexao,$_POST['tipoConta']);
	$saldo=mysqli_real_escape_string($conexao,$_POST['saldo']);
	    
	$sql=$conexao->prepare("INSERT INTO TB_Conta
		(tipo_conta,saldo_conta,num_conta,id_conta_Agencia,id_conta_cliente)VALUES(?,?,?,?,?)");
	$sql->bind_param("sdiii",$tipoConta,$saldo,$numero,$codAge,$codCli);
	$sql->execute();
	$sql->close();
	$conexao->close();
	$_SESSION['msg']="Conta cadastrada com sucesso";
	header("Location:cad_conta.php");
	die();	
	
?>