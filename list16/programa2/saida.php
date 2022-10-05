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
	<section id="form" style="margin-top: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Programa 02</h2>
                    <hr class="star-primary" style="border-top: 1px solid #D8D8D8;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                <!-- Começa PHP -->
                    <div class="thumbnail">
                    <div class="caption">
                   	<?php 
                        $fatorial= $_GET["fatorial"];
                        echo "<span style='font-size:1.2em;font-family: Verdana;'>Resultado: </span>";
                        //função
                        function fatorial($a){
                        $fatorial = 1;
                        echo "<span style='font-size:1.2em;font-family: Verdana;'>O fatorial de $a é <i class='fa fa-long-arrow-right' aria-hidden='true'></i> </span>";
                            for ($i=$a; $i>1; $i=$i-1) {
                                echo "<span style='font-size:1.2em;font-family: Verdana;'>$i*</span>"; 
                            }
                            for($i = 1; $i<=$a; $i++){
                                $fatorial = $fatorial* $i;  
                            }
                            echo "<span style='font-size:1.2em;font-family: Verdana;'>1 = $fatorial</span>";
                        }
                        //fim função
                        fatorial($fatorial);
                   	 ?>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                       <div class="form-group col-xs-12">
                           <button type="submit" onClick="history.go(-1)" class="btn btn-danger btn-lg">Voltar</button>
                       </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
</body>
</html>