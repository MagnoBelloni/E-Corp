<?php
	session_start();
	include_once 'conexao.php';
	$sql="SELECT * FROM TB_Cliente";
	$result=mysqli_query($conexao,$sql);
	$linhas=mysqli_num_rows($result);
	if($linhas>0){
		echo "<option value='erro' disabled selected>Selecione um Cliente</option>";
		while ($exibir = mysqli_fetch_assoc($result)) {
			echo "<option value='".$exibir['id_cliente']."'>".$exibir['nome_cliente']." - ".$exibir['rg_cliente']."</option>";
		}
	}
	else{
		echo "<option value='nEcontrado' selected disabled>Não existem Clientes</option>";
	}
?>