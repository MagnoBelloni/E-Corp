<?php 	
	include_once('conexao.php');
	if(!isset($_SESSION['user'])){
		$_SESSION['nLogado']="Logue antes de navegar no site.";
		header("Location:index.php");
		die();
	}
?>