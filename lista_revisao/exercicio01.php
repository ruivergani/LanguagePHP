<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercício 01</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
	<?php
     $salario = $_POST["salario"];
     $agua = $_POST["agua"];
     $comida = $_POST["comida"];
     $roupa = $_POST["roupa"];
     $energia = $_POST["energia"];
     $gasto_total = $energia + $agua + $comida + $roupa;
     $resto = $salario - $gasto_total;
     echo "Você gasta mensalmente: R$" .number_format($gasto_total,2);
     echo "<br/>Depois de pagar as contas ainda sobram: R$" .number_format($resto,2);
	?>
     <br/>
     <a href="exercicio01.html"> Voltar</a>
</div>
</body>
</html>