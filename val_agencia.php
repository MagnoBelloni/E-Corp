<?php
	session_start();
	include_once 'conexao.php';
	$sql="SELECT * FROM TB_Banco";
	$result=mysqli_query($conexao,$sql);
	$linhas=mysqli_num_rows($result);
	if($linhas>0){
		echo "<option value='erro' disabled>Selecione um banco</option>";
		while ($exibir = mysqli_fetch_assoc($result)) {
			echo "<option value='".$exibir['id_banco']."'>".$exibir['numero_banco']." - ".$exibir['nome_banco']."</option>";
		}
	}
	else{
		echo "<option value='erro' disabled>Não existem bancos</option>";
	}
?>