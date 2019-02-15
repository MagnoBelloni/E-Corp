<?php
	header("Content-Type: text/html; charset=utf-8");
	session_start();
	include_once('../conexao.php');	
	
	
	$sql="SELECT * 	FROM `TB_Banco` WHERE `cnpj_banco` = '{$_POST['cnpjBanco']}' LIMIT 1";
	
	$result = mysqli_query($conexao,$sql);		
	if(mysqli_num_rows($result)>0)
	{
		echo "CNPJ já está cadastrado no sistema.";
	}
	else
	{		
		echo "";		
	}		
	
?>