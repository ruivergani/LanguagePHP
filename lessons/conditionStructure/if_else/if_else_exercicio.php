<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title> If - else</title>
</head>
<body>
<div>
    <?php
     $nota1 = isset($_GET["n1"])?$_GET["n1"]:0;
	 $nota2 = isset($_GET["n2"])?$_GET["n2"]:0;
     $m = ($nota1 + $nota2) / 2;
     echo "A média entre $nota1 e $nota2 é igual a $m";
     if ($m < 5 ) {
     	$situacao = "REPROVADO";
     }
     else{
     	if($m >= 5 && $m <7){
     	$situacao = "RECUPERAÇÃO";
     	}
     	else{
     	$situacao = "APROVADO";
     	}
     }

     echo "<br>A situação do aluno é $situacao";










    ?>
</div>
</body>
</html>
