<?php
	session_start();
	include_once "val_logado.php";
	include_once('conexao.php');	
	$nome=mysqli_real_escape_string($conexao,$_POST['nome']);
	$rg=mysqli_real_escape_string($conexao,$_POST['RG']);
	$cpf=mysqli_real_escape_string($conexao,$_POST['CPF']);
	$telefone=mysqli_real_escape_string($conexao,$_POST['telefone']);
	$celular=mysqli_real_escape_string($conexao,$_POST['celular']);
	$email=mysqli_real_escape_string($conexao,$_POST['email']);
	$sexo=mysqli_real_escape_string($conexao,$_POST['sexo']);
	$estcivil=mysqli_real_escape_string($conexao,$_POST['EstCivil']);
	$logradouro=mysqli_real_escape_string($conexao,$_POST['logradouro']);
	$numero=mysqli_real_escape_string($conexao,$_POST['n']);
	$bairro=mysqli_real_escape_string($conexao,$_POST['bairro']);
	$cidade=mysqli_real_escape_string($conexao,$_POST['cidade']);
	$uf=mysqli_real_escape_string($conexao,$_POST['UF']);
	
	

	

	
    
	$sql=$conexao->prepare("INSERT INTO TB_Cliente(nome_cliente,rg_cliente,cpf_cliente,telefone_cliente,celular_cliente,email_cliente,sexo_cliente,civil_cliente,logradouro_cliente,num_cliente,bairro_cliente,cidade_cliente,uf_cliente)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$sql->bind_param("sssssssssssss",$nome,$rg,$cpf,$telefone,$celular,$email,$sexo,$estcivil,$logradouro,$numero,$bairro,$cidade,$uf);
	$sql->execute();
	$sql->close();
	$conexao->close();
	$_SESSION['msg']="Cliente cadastrado com sucesso";
	header("Location:cad_cliente.php");
	die();	
	
?>