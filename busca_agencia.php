<?php
	session_start();
	include_once 'conexao.php';
	$sql="SELECT * FROM TB_Agencia";
	$result=mysqli_query($conexao,$sql);
	$linhas=mysqli_num_rows($result);
	if($linhas>0){
		echo "<option value='erro' disabled selected>Selecione uma Agência</option>";
		while ($exibir = mysqli_fetch_assoc($result)) {
			echo "<option value='".$exibir['id_agencia']."'>".$exibir['numero_agencia']." - ".$exibir['bairro_agencia']."</option>";
		}
	}
	else{
		echo "<option value='nEcontrado' selected disabled>Não existem Agências</option>";
	}
?>