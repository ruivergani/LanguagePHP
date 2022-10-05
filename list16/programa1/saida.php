<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Programa 01</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">

	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	<!--[if IE9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <style type="text/css">
        span{
            font-family: 'Courier New';
            border: 0;
            line-height: 0;
        }
    </style>
</head>
<body>
	
	 <!-- Navegação -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"> Linguagem de Programação IV </span><img src="../images/elephant.png" width="48" height="24"
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
        <div class="row">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Programa 01</h2>
                    <hr class="star-primary" style="border-top: 1px solid #D8D8D8;">
                </div>
            </div>
                <div class="col-lg-8 col-lg-offset-2">
                <div class="thumbnail">
                <div class="caption">
                <!-- Começa PHP -->
                   	<?php
                        $coluna = $_GET["largura"];
                        $linha= $_GET["altura"];
                        $caracterB= $_GET["b"];
                        $corB=$_GET["cor_borda"];
                        $caracterP=$_GET["p"];
                        $corP=$_GET["cor_preenchimento"];

                        for($i=0;$i<=$linha;$i++){
                            for($j=0;$j<=$coluna;$j++){
                                if (($i>0 && $j>0 ) && ($i<$linha  && $j<$coluna)) {

                                    if($corP==1){
                                            echo "<span style='color:red;font-size:1.2em;'>
                                            $caracterP</span>";
                                            echo "  ";
                                    }
                                    if($corP==2){
                                            echo "<span style='color:blue;font-size:1.2em;'>
                                            $caracterP</span>";
                                            echo "  ";
                                    }
                                    if($corP==3){
                                            echo "<span style='color:green;font-size:1.2em;'>
                                            $caracterP</span>";
                                            echo "  ";
                                    }
                                    if($corP==4){
                                            echo "<span style='color:yellow;font-size:1.2em;'>
                                            $caracterP</span>";
                                            echo "  ";
                                    }
                                    if($corP==5){
                                            echo "<span style='color:black;font-size:1.2em;'>
                                            $caracterP</span>";
                                            echo "  ";
                                    }
                                }
                                else{
                                     if($corB==1){
                                            echo "<span style='color:red;font-size:1.2em;'>
                                            $caracterB</span>";
                                            echo "  ";
                                     }

                                     if($corB==2){
                                            echo "<span style='color:blue;font-size:1.2em;'>
                                            $caracterB</span>";
                                            echo "  ";
                                     }
                                      elseif($corB==3){
                                            echo "<span style='color:green;font-size:1.2em;'>
                                            $caracterB</span>";
                                            echo "  ";
                                     }
                                      elseif($corB==4){
                                            echo "<span style='color:yellow;font-size:1.2em;'>
                                            $caracterB</span>";
                                            echo "  ";
                                     }
                                      elseif($corB==5){
                                            echo "<span style='color:black;font-size:1.2em;'>
                                            $caracterB</span>";
                                            echo "  ";
                                     }
                                }
                            }
                            echo "</br>";
                            }
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
    </section>
</body>
</html>