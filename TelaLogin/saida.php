<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tela Login | Rui Vergani Neto</title>
  
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <!-- Scripts -->
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="js/init.js"></script>
    
      <link rel="icon" href="images/icon.png"/>
      <style type="text/css">
      #preload
      {
       display: block ;
      }
      #posload
      {
       display: none;
      }
      div#button button.btn{
       height: 32px !important;
       line-height: 32px !important;
       padding: 0 1rem !important;
      }
      </style>
      <script type="text/javascript">
      function muda_p_carregado()
      {
       document.getElementById("posload").style.display = "block";
       document.getElementById("preload").style.display = "none";
      }
      </script>
</head>

<body onload="muda_p_carregado()" class="login login-background">
    <div id="preload">
      <div class="preloader-wrapper big active center-align">
           <div class="spinner-layer spinner-red">
             <div class="circle-clipper left">
               <div class="circle"></div>
             </div><div class="gap-patch">
               <div class="circle"></div>
             </div><div class="circle-clipper right">
               <div class="circle"></div>
             </div>
           </div>
      </div>
    </div>
    <div id="posload" class="row">
      <div class="container">
                <?php 
                    $usuario = $_POST['usuario'];
                    $senha = $_POST['senha'];
                    $encriptar = md5($senha);
                    echo "<div style='margin-top:10%' class='row'>";
                    echo "<div class='col s6 offset-s3'>";
                    echo "<div id='cardpanel' class='card-panel hoverable grey lighten-5'>";
                    echo "<h4 class='center-align'>Logado com Sucesso</h4>";
                    echo "<div style='margin-top:30px;'>";
                    echo "<span>Bem Vindo:</span> $usuario <br> <span>Senha Codificada:</span> $encriptar <br><span>Seu Login será ativado em:</span> " .date('d/m/Y', strtotime(' + 1 week', time()));
                    echo "</div>"; 
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                ?>
      </div>  
    </div>
  </div>
</body>
</html>