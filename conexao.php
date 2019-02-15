<?php 
	$bdservidor='127.0.0.1'; //armazena ip do servidor
	$bdusuario='root'; //armazena nome do usuario do banco
	$bdsenha=''; //Senha do banco
	$bdbanco='aulaTPI'; //Nome do Banco de dados

	$conexao=mysqli_connect($bdservidor,$bdusuario,$bdsenha,$bdbanco); //realziar a conexão parametros devem ser na ordem certa

	if (mysqli_connect_errno($conexao)) { //se der merda volta erro
		echo "Erro";
		die();
	}
	
 ?>