<?php
  //Validar se o cara fez login para acessar
  include_once "val_logado.php";
 ?>
<!--NAVBAR-->
<nav class="blue">
  <div class="nav-wrapper">
    <!--Logo no Tablet pra cima-->
    <a href="home.php" class="brand-logo left hide-on-small-only"><img src="img/logo.png"></a>
    <!--Logo no Mobile-->
    <a href="home.php" class="brand-logo center hide-on-med-and-up">E-Corp</a>
    <!--NavDesk-->
    <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="home.php">Home</a></li>
      <li><a href="cad_banco.php">Cadastro Banco</a></li>
      <li><a href="cad_agencia.php">Cadastrar Agência</a></li>
      <li><a href="cad_cliente.php">Cadastrar Cliente</a></li>
      <li><a href="cad_conta.php">Cadastrar Conta</a></li>      
      <!--<li><a href="#">Operações Financeiras</a></li>-->
      <!-- Dropdown Trigger -->
      <li>
        <a class="dropdown-button" href="#!" beloworigin="true" data-activates="dropdown-perfil">           
          <?php echo $_SESSION['user']; ?><i class="material-icons right">arrow_drop_down</i>
        </a>
      </li>
    </ul>

    <!--MOBILE-->
    <ul class="side-nav" id="mobile-demo">
      <li><a href="home.php">Home</a></li>
      <li><a href="cad_banco.php">Cadastro Banco</a></li>
      <li><a href="cad_agencia.php">Cadastrar Agência</a></li>
      <li><a href="cad_cliente.php">Cadastrar Cliente</a></li>
      <li><a href="cad_conta.php">Cadastrar Conta</a></li>      
      <!--<li><a href="#">Operações Financeiras</a></li>-->
      <li><a href="index.php"><i class="material-icons rigth red-text">power_settings_new</i>Sair</a></li>
    </ul>
  </div>
</nav>

<!-- Dropdown Structure -->
<ul id='dropdown-perfil' class='dropdown-content'>
  <li><a href="index.php"><i class="material-icons rigth red-text">power_settings_new</i>Sair</a></li>
</ul>