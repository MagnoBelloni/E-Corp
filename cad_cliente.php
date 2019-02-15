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
              <form action="val_cad_cliente.php" method="POST" id="formulario" name="formulario" class="col s12 l8 offset-l2">
                <!--CARD-->
                <div class="card z-depth-4">
                  <div class="card-content">
                    <span class="card-title blue-text">Cadastrar Cliente</span>
                      <!--Conteudo-->
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="nome" type="text" name="nome" class="validate" data-length="100" maxlength="100" autofocus>
                          <label for="nome">Nome</label>
                          <small class="text-mutted left erro" id="nm"></small>
                        </div>                        
                      </div>
                      <div class="row">
                        <div class="input-field col s12 l6">
                          <input id="RG" type="number" class="validate" name="RG" data-length="9">
                          <label for="RG">RG</label>
                          <small class="text-mutted left erro" id="rg"></small>
                        </div>
                        <div class="input-field col s12 l6">
                          <input id="CPF" type="number" class="validate" name="CPF" data-length="11">
                          <label for="CPF">CPF</label>
                          <small class="text-mutted left erro" id="cpf"></small>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12 l6">
                          <input id="telefone" type="number" class="validate" name="telefone" data-length="10">
                          <label for="telefone">Telefone</label>
                          <small class="text-mutted left erro" id="tel"></small>
                        </div>
                        <div class="input-field col s12 l6">
                          <input id="Celular" type="number" class="validate" name="celular" data-length="11" maxlength="11">
                          <label for="Celular">Celular</label>
                          <small class="text-mutted left erro" id="cel"></small>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="email" type="email" name="email" class="validate" data-length="100" maxlength="100">
                          <label for="email">E-mail</label>
                          <small class="text-mutted left erro" id="em"></small>
                        </div>                        
                      </div>
                      <div class="row">
                       <div class="input-field col s12 l6">
                        <select name="sexo" id="sexo">
                          <option value="" disabled selected>Escolha uma opção</option>
                          <option value="Masculino">Masculino</option>
                          <option value="Femino">Feminino</option>
                          <option value="Outros">Outros</option>
                        </select>
                        <label>Sexo</label>
                        <small class="text-mutted left erro" id="sx"></small>
                       </div>                  
                        <div class="input-field col s12 l6">
                          <select name="EstCivil" id="EstCivil">
                            <option value="" disabled selected>Escolha uma opção</option>
                            <option value="Solteiro">Solteiro</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="Viuvo">Viuvo</option>
                          </select>
                        <label>Estado civil</label>
                        <small class="text-mutted left erro" id="ec"></small>
                        </div>                  
                      </div>
                      <div class="row">
                        <div class="input-field col s12 l2">
                          <select name="UF" id="UF">
                            <option value="" selected disabled>UF</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                          </select>
                          <label>UF</label>
                          <small class="text-mutted left erro" id="uf"></small>
                        </div>
                        <div class="input-field col s12 l5">
                          <input id="cidade" type="text" class="validate" name="cidade" data-length="50" maxlength="50">
                          <label for="cidade">Cidade</label>
                          <small class="text-mutted left erro" id="cid"></small>
                        </div>
                        <div class="input-field col s12 l5">
                          <input id="bairro" type="text" class="validate" name="bairro" data-length="50" maxlength="50">
                          <label for="bairro">Bairro</label>
                          <small class="text-mutted left erro" id="br"></small>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s8 l10">
                          <input id="logradouro" type="text" class="validate" name="logradouro" data-length="100" maxlength="100">
                          <label for="logradouro">Logradouro</label>
                          <small class="text-mutted left erro" id="lg"></small>
                        </div>
                        <div class="input-field col s4 l2">
                          <input id="n" type="number" class="validate" name="n" data-length="5">
                          <label for="n">Nº</label>
                          <small class="text-mutted left erro" id="N"></small>
                        </div>
                      </div>
                      <!--Botões-->
                      <div class="row">
                        <div class="col s12"> 
                          <div class="col s5">
                            <button type="button" class="waves-effect waves-light btn" onclick="erro()">Cadastrar<i class="material-icons right">send</i></button>    
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
          if (nome.value=="") {
            nm.innerText="O campo Nome está vazio.";
            nome.focus();
            return false;
          }
          else{
            nm.innerText="";
          }
          var RG = document.getElementById('RG').value;
          if(RG.length!=9){
            rg.innerText="O campo RG precisa ter 9 digitos.";
            document.getElementById('RG').focus();
            return false;
          }
          if (rg.innerText!="") {
            document.getElementById('RG').focus();
            return false;
          }
          var CPF = document.getElementById('CPF').value;
          if(CPF.length!=11){
            cpf.innerText="O campo CPF precisa ter 11 digitos.";
            document.getElementById('CPF').focus();
            return false;
          }
          if (cpf.innerText!="") {
            document.getElementById('CPF').focus();
            return false;
          }
          var telefone = document.getElementById('telefone').value;
          if (telefone.length<8) {
            tel.innerText="O campo Telefone precisa ter pelo menos 8 digitos.";
            document.getElementById('telefone').focus();        
            return false;
          }          
          else{
            tel.innerText="";
          }
          if (telefone.length>10) {
            tel.innerText="O campo Telefone não pode exceder 10 digitos.";
            document.getElementById('telefone').focus();
            return false;
          }
          else{
            tel.innerText="";
          }
          var Celular = document.getElementById('Celular').value;
          if (Celular.length<9) {
            cel.innerText="O campo Celular precisar ter 9 digitos.";
            document.getElementById('Celular').focus();           
            return false;
          }
          else{
            cel.innerText="";
          }
          if (Celular.length>11) {
            cel.innerText="O campo Celular não pode exceder 11 digitos.";
            document.getElementById('Celular').focus();
            return false;
          }
          else{
            cel.innerText="";          
          }
          if (email.value=="") {
            em.innerText="Digite um E-mail valido";
            email.focus();
          }          
          if (em.innerText!="") {
            email.focus();
            return false;
          }           
          if (sexo.value=="") {
            sx.innerText="Você precisa selecionar uma das opções.";            
            return false;
          }
          else{
            sx.innerText="";
          }
          if (EstCivil.value=="") {
            ec.innerText="Selecione uma das opções.";            
            return false;
          }
          else{
            ec.innerText="";
          }
          if (UF.value=="") {
            uf.innerText="Selecione um UF.";            
            return false;
          }
          else{
            uf.innerText="";
          }
          if (cidade.value=="") {
            cid.innerText="Campo Cidade vazio.";
            cidade.focus();
            return false;
          }
          else{
            cid.innerText="";
          }
          if (bairro.value=="") {
            br.innerText="Campo Bairro vazio.";
            bairro.focus();
            return false;
          }
          else{
            br.innerText="";
          }
          if (logradouro.value=="") {
            lg.innerText="Campo Logradouro vazio.";
            logradouro.focus();
            return false;
          }
          else{
            lg.innerText="";
          }
          var n = document.getElementById('n').value;
          if (n.length<=0) {
            N.innerText="O campo Nº Vazio está vazio.";
            document.getElementById('n').focus();          
            return false;
          }
          else{
            N.innerText="";
          }
          if (n.length>10) {
           N.innerText="O campo Nº não pode exceder 10 caracteres.";
           document.getElementById('n').focus();
           return false;
          }
          else{
            N.innerText="";
          }
          document.formulario.submit(); 
        }
        function sucesso(){          
          Materialize.toast("<?php if(isset($_SESSION['msg']))echo $_SESSION['msg'].".";unset($_SESSION['msg'])?>", 8000);       
        }
        $(function(){
            $("input[id='RG']").on("blur",function(){
              var $rg = $("input[name='RG']").val();//Pega o valor do Input            
                $.post('testeCliente/testeRG.php',{rg:$rg}, function(data){
                $('#rg').html(data)
            });
          });
        });
        $(function(){
            $("input[id='CPF']").on("blur",function(){
              var $cpf = $("input[name='CPF']").val();//Pega o valor do Input            
                $.post('testeCliente/testeCPF.php',{cpf:$cpf}, function(data){
                $('#cpf').html(data)
            });
          });
        });
        $(function(){
            $("input[id='email']").on("blur",function(){
              var $email = $("input[name='email']").val();//Pega o valor do Input            
                $.post('testeCliente/testeEmail.php',{email:$email}, function(data){
                $('#em').html(data)
            });
          });
        });
      </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/style.js"></script>      
  </body>

</html>