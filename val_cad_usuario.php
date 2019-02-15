<?php
	session_start();	
	include_once 'conexao.php';
	
	if(empty($_POST['login']))
	{
		$_SESSION['msg']="Campo Login vazio";
		header("location:cadastro.php");
	}else if(empty($_POST['senha'])){
		header("location:cadastro.php");
	}
	else{
		$login= mysqli_real_escape_string($conexao,$_POST['login']);
		$senha= mysqli_real_escape_string($conexao,$_POST['senha']);
		$sql="INSERT INTO TB_Login(usuario,senha) values('$login','$senha')";
		mysqli_query($conexao,$sql);
		$_SESSION['msg']="Cadastrado com sucesso";
		header("location:cad_usuario.php");
	}	
	
?>