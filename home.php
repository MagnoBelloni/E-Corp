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

  <body onload="ola()">
        <!--NAVBAR-->
        <?php
         include_once("nav2.php");              
        ?>
            
        <!--CORPO-->
        <center>            

            <div class="parallax-container">
              <div class="parallax"><img src="img/bank.jpg"></div>
            </div>
            <div class="section white">
              <div class="row container">
                <h2 class="header">E-CORP</h2>
                <p class="grey-text text-darken-3 lighten-3">O Banco para salvar você da Crise.</p>
                <!--Slider-->
                <div class="slider">
                  <ul class="slides">
                    <li>
                      <img src="img/time.jpg">
                      <div class="caption left-align blue-text text-darken-5">
                        <h3>Economize tempo e dinheiro.</h3>
                        <h5 class="light grey-text text-lighten-3">Venha para E-CORP.</h5>
                      </div>
                    </li>
                    <li>
                      <img src="img/cela.jpg"> 
                      <div class="caption center-align">
                        <h3>Seu Dinheiro protegido</h3>
                        <h5 class="light grey-text text-lighten-3">Nossos Cofres são os mais seguros do mundo.</h5>
                      </div>
                    </li>
                    <li>
                      <img src="img/sup.png"> 
                      <div class="caption right-align">
                        <h3>Atendimento 24H</h3>
                        <h5 class="light grey-text text-lighten-3">Eleito o melhor suporte do mundo por 5 anos consecutivos.</h5>
                      </div>
                    </li>                        
                  </ul>
                </div>
                <!--Fim Slider-->
              </div>
            </div>
            <div class="parallax-container">
              <div class="parallax"><img src="img/footer.jpg"></div>
            </div>      
        </center>            

      <!--JQUERY-->
      <script type="text/javascript" src="js/jquery.js"></script>                   
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/style.js"></script>
      <script type="text/javascript">
        function ola(){          
          Materialize.toast("Bem vindo <?php echo $_SESSION['user']; ?>.", 3000);       
        }
      </script>

  </body>
</html>