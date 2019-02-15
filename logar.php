<?php
	session_start(); //Inicia a sessão
	include_once("conexao.php"); //Inclui a pagina conexao apenas uma vez

	if((!empty($_POST)) && (!empty($_POST['login'])) && (!empty($_POST['senha']))) //Se não estiver vazio realiza o codigo abaixo
	{
		//Limpa os caracteres especiais, evita SQLinjection
		$usuario = mysqli_real_escape_string($conexao,$_POST['login']);
		$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

		$sql= "SELECT * FROM TB_Login where usuario='$usuario' && senha='$senha' LIMIT 1"; //Comando SQL armazenado
		$result = mysqli_query($conexao,$sql); //recebe o resultado da consulta do SQL pede 2 parametros a conexão e o comando
		$resultado = mysqli_fetch_assoc($result); //Associa todos os campos da tabela em um vetor

		if(empty($resultado)) //Se estiver vazio
		{
			$_SESSION['erroLogin'] ="Usuário ou senha Invalidos"; //Armazena o erro
			header("Location: index.php"); //retorna para o index
		}
		else
		{
			$_SESSION['user']=$usuario; //guarda o usuario na var
			$_SESSION['user']=ucfirst($_SESSION['user']); //Dxa a primeira letra em Maiusculo 'ucfirts'
			header("Location: home.php"); //retorna para a página do usuário no caso
		}
	}
	else //Se estiver vazio
	{
		$_SESSION['erroLogin']="Campos em Branco"; //Armazena a msg 'Campos em Branco'
		header("Location: index.php"); //retorna a pagina para o index
	}
?>