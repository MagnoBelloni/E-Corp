<?php
	header("Content-Type: text/html; charset=utf-8");
	session_start();
	include_once 'conexao.php';

	$sql="SELECT bairro_agencia FROM TB_Agencia WHERE id_agencia = '{$_POST['codAge']}' LIMIT 1";
	$result=mysqli_query($conexao,$sql);
	$linhas=mysqli_num_rows($result);
	

	if($linhas>0){
		$resultado = mysqli_fetch_assoc($result);
		//$_SESSION['teste']=$resultado['bairro_agencia'];
		$bairro=$resultado['bairro_agencia'];
		//echo "<option value='$bairro' selected>$bairro</option>";
		//echo $resultado['bairro_agencia'];
		echo "<option value='$bairro' selected>$bairro</option>":
	}
	else{
		echo "<option value='' selected disabled>Bairro não encontrado</option>";
	}
?>