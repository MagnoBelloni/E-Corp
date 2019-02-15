<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<?php session_start(); ?>
		<title>Cadastro de Usuário</title>
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

	<body onload="sucesso()">
		<!--NAVBAR-->
		<?php
			include_once("nav1.html");
		?>

		<center class="down">
			<div class="container row">
				<div class="col s12 l8 offset-l2">
					<div class="card z-depth-4">
			            <div class="card-content center-align">
			              <span class="card-title blue-text">Cadastro</span>
			              <!--FORMULÁRIO-->
			              <form action="val_cad_usuario.php" method="POST" name="formulario">
		                      <div class="row">
						          <div class="input-field col s12">
						            <input id="login" type="text" name="login" data-length="30" maxlength="30">
						            <label for="login">Insira seu Login</label>
						            <small class="text-mutted left erro" id="usuario"></small>
						          </div>
						       </div>
						       <div class="row">
						          <div class="input-field col s12">
						            <input id="senha" type="password" name="senha" data-length="30" maxlength="30">
						            <label for="senha">Insira sua Senha</label>
						            <small class="text-mutted left erro" id="Senha"></small>
						          </div>
						      </div>
						      <div class="row">
						          <div class="input-field col s12">
						            <input id="csenha" type="password" name="cenha" data-length="30" maxlength="30">
						            <label for="senha">Confirme sua Senha</label>
						            <small class="text-mutted left erro" id="CSenha"></small>
						          </div>
						      </div>  							  
						      <!--Checkbox-->
						      <div class="row">
						    	<div class="col s12 left-align">
						    		<p>
								      <input type="checkbox" id="termos" required="" />
								      <label for="termos">Aceito os <a class="modal-trigger" href="#modal1">Termos de uso</a>.</label>
								    </p>
								    <small class="text-mutted left erro" id="Termos"></small>
						    	</div>
							   </div>
							   <!-- Modal Termos -->
								<div id="modal1" class="modal modal-fixed-footer">
								   <div class="modal-content">
								      <h4 class="blue-text">Termos de uso</h4>
								      <p>
							              1.1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						          	  </p>
						          	  <p>
							          	  1.2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							          	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							          	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							          	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							          	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							          	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						          	  </p>
						          	  <p>
							          	  1.3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							          	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							          	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							          	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							          	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							          	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						          	  </p>	
								    </div>
								    <div class="modal-footer">
								    	<a href="#!" class="modal-action modal-close waves-effect waves-red btn red" onclick="nAceito()">Não concordo</a>
								      	<a href="#!" class="modal-action modal-close waves-effect waves-green btn green" onclick="Aceito()">Concordo</a>
								   </div>
								</div>							   
								<!--Fim do Modal-->							    
								<button id="btn" type="button" class="waves-effect waves-light btn" onclick="erro()">
									Cadastrar<i class="material-icons right">send</i>
								</button>					     		
			            	</form>
			            </div>
			        </div>												
				</div>				
			</div>
		</center>

		<!--JQUERY-->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
    		function Aceito() {
    			document.getElementById('termos').checked=true;
    			Termos.innerText="";  					
    		}
    		function nAceito() {
    			document.getElementById('termos').checked=false;
    			Termos.innerText="Aceite os termos de Uso.";					
    		}
    		function sucesso(){          
        	  Materialize.toast("<?php if(isset($_SESSION['msg']))echo $_SESSION['msg'].".";unset($_SESSION['msg'])?>", 8000);       
        	}
        	function erro() {
        		if (login.value==""){
        			usuario.innerText="Campo Login vazio.";
        			return false;
        		}
        		if (usuario.innerText!="") {
        			return false;
        		}
        		if (senha.value=="") {
					Senha.innerText="Campo Senha vazio.";
					return false;
        		}
        		else{
        			Senha.innerText="";
        		}
        		if (csenha.value=="") {
        			CSenha.innerText="Campo confirmar Senha vazio.";
        			return false;
        		}
        		else{
        			CSenha.innerText="";
        		}
        		if (csenha.value!=senha.value) {
        			CSenha.innerText="As senhas não correspondem.";
        			return false;
        		}
        		else{
        			CSenha.innerText="";
        		}
        		if (termos.checked!=true) {
        			Termos.innerText="Aceite os termos de Uso.";
        			return false;
        		}
        		else{
        			Termos.innerText="";
        		}
        		document.formulario.submit();
        	}
        	$(function(){
            $("input[id='login']").on("blur",function(){
              var $login = $("input[name='login']").val();//Pega o valor do Input            
                $.post('testeUsuario.php',{login:$login}, function(data){ //Manda a var como parametro
                $('#usuario').html(data)
              });
            });
          }); 
    	</script>    		
    	<script type="text/javascript" src="js/materialize.min.js"></script>
    	<script type="text/javascript" src="js/style.js"></script>
    	
	</body>
	
</html>