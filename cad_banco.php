<!doctype html>
<html lang="pt-br">

  <head>
        <?php
          session_start();
        ?> 
        <title>Home</title>
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
              <!--Form-->
              <form action="val_cad_banco.php" method="POST" id="formulario" name="formulario" class="col s12 l8 offset-l2">
                <!--CARD-->
                <div class="card z-depth-4">
                  <div class="card-content">
                    <span class="card-title blue-text">Cadastrar Banco</span>
                    <!--Conteudo-->                          
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="nBanco" type="number" class="validate" name="numero" autofocus>
                        <label for="nBanco">Nº do Banco</label>
                        <small class="text-mutted left erro" id="n"></small>
                      </div>              
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="nome" type="text" class="validate" name="nome" data-length="100" maxlength="100">
                        <label for="nome">Nome do Banco</label>
                        <small class="text-mutted left erro" id="nomeBanco"></small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="cnpj" type="number" class="validate" name="cnpj" data-length="14">
                        <label for="cnpj">CNPJ do Banco</label>
                        <small class="text-mutted left erro" id="CNPJ"></small>
                      </div>                  
                    </div>
                    <!--Botões-->
                    <!--onclick chama a function do js-->
                    <div class="row">                        
                        <div class="col s3 l5">
                          <button id="btn" type="button" class="waves-effect waves-light btn" onclick="erro()">Cadastrar<i class="material-icons right">send</i></button>    
                        </div>
                        <div class="col s3 l5 offset-s4 offset-l2">
                          <button type="reset" class="waves-effect waves-light btn red">Limpar<i class="material-icons right">close</i></button>     
                        </div>                          
                    </div>                    
                  </div>
                </div>
              </form>                              
            </div>
        </center>            

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript">
        function erro() 
        {          
          var num=document.getElementById('nBanco').value;
          if (num=="") {              
            n.innerText = "Campo Nº do banco vazio";            
            return false;
          }          
          if (n.innerText!="") {            
            return false;
          }
          var nome=document.getElementById('nome').value;
          if (nome=="") {
            nomeBanco.innerText = "Campo Nome do Banco vazio";
            document.getElementById('nome').focus();
            return false;
          }          
          if(nomeBanco.innerText!=""){
            document.getElementById('nome').focus();
            return false;
          }
          var cnpj=document.getElementById('cnpj').value;
          if(cnpj==""){
            CNPJ.innerText = "Campo CNPJ vazio";
            document.getElementById('cnpj').focus();
            return false;
          }          
          if (cnpj.length!=14) {
            CNPJ.innerText = "O CNPJ deve conter 14 digitos";
            document.getElementById('cnpj').focus();
            return false;
          }          
          if (CNPJ.innerText!="") {
            document.getElementById('cnpj').focus();
            return false;
          }
          document.formulario.submit();
        }
        function sucesso(){          
          Materialize.toast("<?php if(isset($_SESSION['msg']))echo $_SESSION['msg'].".";unset($_SESSION['msg'])?>", 8000);       
        }
        $(function(){
            $("input[id='nBanco']").on("blur",function(){              
              var $numero = $("input[id='nBanco']").val();
              console.log($numero);
              $.post('testeBanco/testeNumero.php',{nBanco:$numero}, function(data){                
                $("#n").html(data)              
            });
          });
        });
        $(function(){
            $("input[id='nome']").on("blur",function(){              
              var $numero = $("input[id='nome']").val();
              console.log($numero);
              $.post('testeBanco/testeNome.php',{nBanco:$numero}, function(data){                
                $("#nomeBanco").html(data)              
            });
          });
        });
        $(function(){
            $("input[id='cnpj']").on("blur",function(){              
              var $numero = $("input[id='cnpj']").val();
              console.log($numero);
              $.post('testeBanco/testeCNPJ.php',{cnpjBanco:$numero}, function(data){                
                $("#CNPJ").html(data)              
            });
          });
        });
      </script>      
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/style.js"></script>

  </body>
</html>