<!doctype html>
<html lang="pt-br">

  <head>
        <?php
          session_start();
        ?> 
        <title>Cadastrar Conta</title>
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
        <!--NAVBAR-->
        <?php
         include_once("nav2.php");        
        ?>

        <!--CORPO-->
        <center class="down">
            <div class="row container">
              <form action="val_cad_conta.php" method="POST" name="formulario" class="col s12 l8 offset-l2">
                <!--CARD-->
                <div class="card z-depth-4">
                  <div class="card-content">
                    <span class="card-title blue-text">Cadastrar Conta</span>
                    <small class="text-mutted left erro" id="nm"></small>
                      <!--Conteudo-->
                      <div class="row">
                        <div class="input-field col s12">
                          <select id="codAge" name="codAge">
                            <?php
                              require 'busca_agencia.php';
                            ?>
                          </select>                      
                          <label for="codAge">Código Agência</label>
                          <small class="text-mutted left erro" id="cod"></small>
                        </div>                        
                      </div>
                      <div class="row">
                        <div class="input-field col s12 l6">
                          <select id="codCli" name="codCli">
                            <?php
                              require 'busca_cliente.php';
                            ?>
                          </select>                          
                          <small class="text-mutted left erro" id="codcli"></small>
                        </div>
                        <div class="input-field col s12 l6">
                          <input id="numero" type="number" class="validate" name="numero" data-length="100">
                          <label for="numero">Número da Conta</label>
                          <small class="text-mutted left erro" id="n"></small>
                        </div>
                      </div>
                      <div class="row">
                       <div class="input-field col s12 l6">
                        <select id="tipoConta" name="tipoConta">
                          <option value="" disabled selected>Escolha uma opção</option>
                          <option value="Poupança">Poupança</option>
                          <option value="Corrente">Corrente</option>                  
                        </select>                        
                        <label>Tipo de conta</label>
                        <small class="text-mutted left erro" id="tipo"></small>
                       </div>                  
                        <div class="input-field col s12 l6">
                          <input id="saldo" type="number" class="validate" name="saldo" data-length="14">
                          <label for="saldo">Saldo Inicial</label>
                          <small class="text-mutted left erro" id="Saldo"></small>
                        </div>                  
                      </div>
                      <!--Botões-->
                      <div class="row">
                        <div class="col s12"> 
                          <div class="col s5">
                            <button type="button" id="btn" class="waves-effect waves-light btn" onclick="erro()">Cadastrar<i class="material-icons right">send</i></button>    
                          </div>
                          <div class="col s5 offset-s2">
                            <button type="reset" class="waves-effect waves-light btn red">Limpar<i class="material-icons right">close</i></button>     
                          </div>  
                        </div>                  
                      </div>
                      <!--MSG de erro-->
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

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript">
        function erro() {
          if(codAge.value=="erro"){
            cod.innerText="Selecione uma das Agências";
            return false;
          }
          else{
           cod.innerText="";
          }
          if (codAge.value=="nEcontrado") {
            btn.disabled=true;
            cod.innerText="Cadastre um Banco antes de Cadastrar uma Agência.";
            return false;          
          }
          else{
            btn.disabled=false;
          }
          if (codCli.value=="erro") {
            codcli.innerText="Selecione um dos Clientes.";
            return false;
          }
          else{
            codcli.innerText="";
          }
          if (codCli.value=="nEcontrado") {
            codcli.innerText="Cadastre um Cliente antes de Cadastrar um Cliente.";
            btn.disabled=true;
            return false;
          }
          else{
            btn.disabled=false;
          }
          if (numero.value=="") {
            n.innerText="Campo Número da Conta em branco.";
            return false;
          }
          if (n.innerText!="") {
            return false;
          }
          if (tipoConta.value=="") {
            tipo.innerText="Selecione um tipo de conta.";
            return false;
          }
          else{
            tipo.innerText="";
          }
          if (saldo.value=="") {
            Saldo.innerText="Campo Saldo em branco.";
            return false;
          }
          else{
            Saldo.innerText="";
          }
          document.formulario.submit();
        }
        function sucesso(){          
          Materialize.toast("<?php if(isset($_SESSION['msg']))echo $_SESSION['msg'].".";unset($_SESSION['msg'])?>", 8000);       
        }
        $(function(){
            $("input[id='numero']").on("blur",function(){              
              var $numero = $("input[name='numero']").val();//Pega o valor do input              
              console.log($numero);
              $.post('testeConta.php',{numero:$numero}, function(data){                
                $("#n").html(data)
                
              });
            });
          });
      </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/style.js"></script>      
  </body>

</html>