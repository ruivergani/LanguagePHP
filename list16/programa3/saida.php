<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Programa 03</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">


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
                    <h2>Programa 03</h2>
                    <hr class="star-primary" style="border-top: 1px solid #D8D8D8;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                <!-- Começa PHP -->
                    <div class="thumbnail">
                    <div class="caption">
                   	<?php 
                        $v1=$_GET["val1"];
                        $v2=$_GET["val2"];
                        $n1=$_GET["nota1"];
                        $n2=$_GET["nota2"];

                        $s1=$v1+$v2;
                        echo "<span style='font-size:1.2em;font-family: Verdana;'>O Valor Total das duas provas é: <b>$s1.</b> </span></br>"; 

                        $p1=($n1*100 ) / $v1;
                        echo "<span style='font-size:1.2em;font-family: Verdana;'>Em relação a Prova 1 , o aluno obteve <b>" .round($p1). "%</b> do total. </span></br>";

                        $p2= ($n2*100) / $v2 ;
                        echo "<span style='font-size:1.2em;font-family: Verdana;'>Em relação a Prova 2 , o aluno obteve <b>"  .round($p2)."%</b> do total.</span> </br>";

                        $s2=$n1+$n2;
                        echo "<span style='font-size:1.2em;font-family: Verdana;'>O aluno Totalizou, com as duas provas,<b>$s2 pontos.</b> </span></br>";

                        $p2=($s2*100) / $s1;
                        echo "<span style='font-size:1.2em;font-family: Verdana;'>A Porcentagem Obtida pelo aluno em função do total foi de <b>" .round($p2). "%</b>.</span> </br>";

                        echo "<span style='font-size:1.2em;font-family: Verdana;'>O Conceito do Aluno:</span>";
                        if($p2 < 60){
                            echo "<span style='font-size:1.2em;font-family: Verdana;'> <b>Péssimo.</b></span>";
                        }
                        elseif ($p2>=60 && $p2<=69) {
                            echo "<span style='font-size:1.2em;font-family: Verdana;'> <b>Ruim.</b></span>";
                        }
                        elseif ($p2>=70 && $p2 <=79) {
                            echo "<span style='font-size:1.2em;font-family: Verdana;'> <b>Bom.</b></span>";
                        }
                        elseif ($p2>=80 && $p2<=89) {
                            echo "<span style='font-size:1.2em;font-family: Verdana;'> <b>Ótimo.</b></span>";
                        }
                        else {
                            echo "<span style='font-size:1.2em;font-family: Verdana;'> <b>Excelente.</b></span>";
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
        </div>
    </section>
</body>
</html>