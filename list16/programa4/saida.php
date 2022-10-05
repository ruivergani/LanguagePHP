<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Programa 02</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>
    
  <link rel="icon" href="../images/favicon.ico"/>
</head>
<body>
	
	 <!-- Navegação -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"> Linguagem de Programação IV </span><img src="../images/elephant.png" width="48" height="24">
                </button>
                <a class="navbar-brand" href="#page-top">
                	<img src="../images/php-logo.svg" width="48" height="24" alt="logo">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Linguagem de Programação IV - <i>Fábio Junior Alves</i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<!-- Formulário -->
	<section id="form" style="margin-top: 5%; text-align: center;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Programa 02</h2>
                    <hr class="star-primary" style="border-top: 1px solid #D8D8D8;">
                </div>
            </div>
                <!-- Começa PHP -->
                   	<?php  
                        $titulo = $_GET["titulo"];
                        $espaco = $_GET["espaco"];
                        $linhas = $_GET["linhas"];
                        $colunas = $_GET["colunas"];
                        $tamanhoborda = $_GET["tamanhoborda"];
                        $cor_fundo = $_GET["cor_fundo"];
                        $cor_texto = $_GET["cor_texto"];

                        echo "<table border='$tamanhoborda'>"; 
                        echo "<caption>$titulo</caption>";
                        for ($i=1; $i <= $linhas; $i++) { 
                            echo "<tr>";
                            for ($j=1; $j <= $colunas; $j++) { 
                                echo"<td>Texto</td>";
                            }
                            echo "</tr>";   
                        }
                        echo "</table>"
                    ?>
                    <br>
                    <div class="container">
                       <div class="form-group col-xs-12 center-block">
                           <button type="submit" onClick="history.go(-1)" class="btn btn-danger btn-lg">Voltar</button>
                       </div>
                    </div>
    </section>
    <style type="text/css">
        table{
             width: <?php echo "$espaco";?>%;
             background-color: <?php echo "$cor_fundo";?>;
             margin-top: 1%;
             margin: 0 auto;
         }
        table td{
              color: <?php echo "$cor_texto";?>;
              text-align: center;
         }
        caption{
              font-size:1.3em;
              font-weight: bolder;
              color: black;
              font-family: 'Verdana';
              text-align: center;
         }
    </style>
</body>
</html>