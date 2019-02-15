<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<?php session_start(); ?>
		<title>Login</title>
		<meta charset="utf-8">
		<!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
		<!--CSS LIXEBA-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			
	</head>

	<body onload="modal()">
		<!--NAVBAR-->
		<?php
			include_once("nav1.html");
		?>
		<center class="down">
			<div class="container row">
				<div class="col s12 l8 offset-l2">
					<div class="card z-depth-4">
			            <div class="card-content center-align">
			              <span class="card-title blue-text">Faça seu Login</span>
			              <form action="logar.php" method="POST" name="formulario">
		                      <div class="row">
						          <div class="input-field col s12">
						            <input id="login" type="text" name="login" data-length="30" maxlength="30">
						            <label for="login">Insira seu Login</label>
						          </div>
						       </div>
						       <div class="row">
						          <div class="input-field col s12">
						            <input id="senha" type="password" name="senha" data-length="30" maxlength="30">
						            <label for="senha">Insira sua Senha</label>
						          </div>
						       </div>
						       <h3 id="erro" class="erro"></h3>		        				          				            	
							   <?php
									if (isset($_SESSION['erroLogin'])) { //Se estiver algo na variavel superGlobal SESSION 
										echo "<p class='erro center-align' id='erro'>".$_SESSION['erroLogin']."</p>"; //escreve o erro
										unset($_SESSION['erroLogin']); //Retira oq tinha na variavel
									}
									unset($_SESSION['user']);//Retira a var user
							    ?>
							    <div class="row">
							    	<div class="col s12 left-align">
							    		<a href="cad_usuario.php">Não tem uma conta? Cadastre-se.</a>
							    	</div>
							    </div>
							    
								<button type="button" onclick="erro()" class="waves-effect waves-light btn">
									Logar<i class="material-icons right">send</i>
								</button>					     		
			            	</form>
			            </div>
			        </div>												
				</div>				
			</div>
		</center>
		<?php
			//Teste para saber se existe o erro do cara tentar acessar sem logar
			if (isset($_SESSION['nLogado'])) {
				echo "<div id='modal1' class='modal'>
				    <div class='modal-content'>
				      <h4>Eae, vamo logar?</h4>
				      <p>".$_SESSION['nLogado']."</p>
				    </div>
				    <div class='modal-footer'>
				      <a href='#!' class='modal-action modal-close waves-effect waves-green btn red'>Ok</a>
				    </div>
	  			</div>";
	  			unset($_SESSION['nLogado']);
			}
				
		?>		
		
		<script type="text/javascript">
			function erro() {
				var msg=document.getElementById('erro');
				var login = document.getElementById('login').value;
				if(login=="")
				{
					msg.innerText="O campo Login não está preenchido.";
					return false;
				}
				var senha=document.getElementById('senha').value;
				if(senha=="")
				{
					msg.innerText="O campo senha está vazio.";
					return false;
				}
				document.formulario.submit();
			}
			function modal() {
				$('#modal1').modal('open');          
			}
		</script>
		<!--JQUERY-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    	<script type="text/javascript" src="js/materialize.min.js"></script>
    	<script type="text/javascript" src="js/style.js"></script>
	</body>

</html>