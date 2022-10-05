<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 5</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
	<?php
     $valor = 500; /* em reais */
     $tempo = 3; /*em dias*/
     $taxa = 3; /* 1% */
     $prestacao =  $valor + ($valor * ($taxa/100) * $tempo);
     echo "O valor da prestação é de: R$" .number_format($prestacao,2);
	?>
</div>
</body>
</html>