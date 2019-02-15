<?php
	header("Content-Type: text/html; charset=utf-8");
	session_start();
	include_once('../conexao.php');	
	
	
	$sql="SELECT * 	FROM `TB_Cliente` WHERE `email_cliente` = '{$_POST['email']}' LIMIT 1";
	
	$result = mysqli_query($conexao,$sql);		
	if(mysqli_num_rows($result)>0)
	{
		echo "E-mail já cadastrado no sistema.";
	}
	else
	{		
		echo "";		
	}		
	
?>