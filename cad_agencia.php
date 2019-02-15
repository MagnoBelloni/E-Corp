<!doctype html>
<html lang="pt-br">

  <head>
        <?php
          session_start();
        ?> 
        <title>Cadastrar Agência</title>
        <meta charset="utf-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
        <!--CSS PERSONALIZADO-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body onload="sucesso()">

        <?php
         include_once("nav2.php");                
        ?>

        <!--CORPO-->
        <center class="down">
            <div class="row container">
              <form action="val_cad_agencia.php" method="POST" id="formulario" class="col s12 l8 offset-l2" name="formulario">
                <div class="card z-depth-4">
                  <div class="card-content">
                    <span class="card-title blue-text">Cadastrar Agência</span>
                      <div class="row">                  
                        <div class="input-field col s12">
                          <select name="codBanco" id="codBanco">                            
                            <?php
                              require 'busca_banco.php';
                            ?>
                          </select>
                          <label>Código do Banco</label>
                          <small class="text-mutted left erro" id="cod"></small>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="nAgencia" type="number" class="validate" name="nAgencia" data-length="10">
                          <label for="nAgencia">Número da Agência</label>
                          <small class="text-mutted left erro" id="n"></small>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="bairro" type="text" class="validate" name="bairro" data-length="50" maxlength="50">
                          <label for="bairro">Bairro</label>
                          <small class="text-mutted left erro" id="Bairro"></small>
                        </div>                  
                      </div>
                      
                      <!--Botões-->
                      <div class="row">                        
                        <div class="col s3 l5">
                          <button type="button" id="btn" class="waves-effect waves-light btn" onclick="erro()">Cadastrar<i class="material-icons right">send</i></button>    
                        </div>
                        <div class="col s3 l5 offset-s4 offset-l2">
                          <button type="reset" class="waves-effect waves-blue btn red">Limpar<i class="material-icons right">close</i></button>     
                        </div>                          
                      </div>
                       <!--Mensagem de Erro-->
                      <h3 class="erro">
                        <?php 
                          if (isset($_SESSION['erro'])) {
                            echo $_SESSION['erro'];
                            unset($_SESSION['erro']);
                          }
                        ?>
                      </h3>
                    </form>
                  </div>                  
                </div>                
            </div>
        </center>
        
      <!--JQUERY-->
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript">
        function erro(){
          if(codBanco.value=="erro"){
            cod.innerText="Selecione um dos Bancos";            
            return false;
          }
          else{
           cod.innerText="";
          }
          if (codBanco.value=="nEcontrado") {
            btn.disabled=true;
            cod.innerText="Cadastre um Banco antes de Cadastrar uma Agência.";
            return false;          
          }
          else{
            btn.disabled=false;
          }          
          if (nAgencia.value=="") {
            n.innerText="Campo Número da Agência vazio.";
            nAgencia.focus();
            return false;
          }                    
          if (n.innerText!="") {
            nAgencia.focus();
            return false;
          }
          if (bairro.value=="") {
            Bairro.innerText="Campo Bairro vazio.";
            bairro.focus();
            return false;
          }
          else{
            Bairro.innerText="";
          }
          document.formulario.submit();
        }
        function sucesso(){          
          Materialize.toast("<?php if(isset($_SESSION['msg']))echo $_SESSION['msg'].".";unset($_SESSION['msg'])?>", 8000);       
        }
        $(function(){
            $("input[id='nAgencia']").on("blur",function(){
              var $nAgencia = $("input[name='nAgencia']").val();//Pega o valor do Input            
                $.post('testeAgencia.php',{nAgencia:$nAgencia}, function(data){ //Manda a var como parametro
                $('#n').html(data)
              });
            });
          });           
      </script>      
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/style.js"></script>      
  </body>

</html>