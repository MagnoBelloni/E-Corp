<?php
	session_start();
	include_once "val_logado.php";
	include_once('conexao.php');
	$numero=mysqli_real_escape_string($conexao,$_POST['numero']);
	$nome=mysqli_real_escape_string($conexao,$_POST['nome']);
	$cnpj=mysqli_real_escape_string($conexao,$_POST['cnpj']);
	
	$sql="SELECT * FROM TB_Banco WHERE numero_banco='$numero' LIMIT 1";
	$result = mysqli_query($conexao,$sql);
	$resultado = mysqli_fetch_assoc($result);
	if(!empty($resultado)){
		$_SESSION['erroNumero']="Já existe um Banco cadastrado com esse número.";
		header("Location:cad_banco.php");
		
	}
	else{
		$sql="SELECT * FROM TB_Banco WHERE nome_banco='$nome' LIMIT 1";
		$result = mysqli_query($conexao,$sql);
		$resultado = mysqli_fetch_assoc($result);
		if(!empty($resultado)){
			$_SESSION['erroNome']="Já existe um Banco cadastrado com esse Nome.";
			header("Location:cad_banco.php");
		}
		else{
			$sql="SELECT * FROM TB_Banco WHERE cnpj_banco='$cnpj' LIMIT 1";
			$result = mysqli_query($conexao,$sql);
			$resultado = mysqli_fetch_assoc($result);
			if(!empty($resultado)){
				$_SESSION['erroCPNJ']="Já existe um Banco cadastrado com esse CNPJ.";
				header("Location:cad_banco.php");
			}
			else{
				$sql=$conexao->prepare("INSERT INTO TB_Banco(numero_banco,nome_banco,cnpj_banco)VALUES(?,?,?)");
				$sql->bind_param("iss",$numero,$nome,$cnpj);
				$sql->execute();
				$sql->close();
				$conexao->close();
				$_SESSION['msg']="Banco cadastrado com sucesso";
				header("Location:cad_banco.php");
				die();		
			}			
		}		
	}

?>