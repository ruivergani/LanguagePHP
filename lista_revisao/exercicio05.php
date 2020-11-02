<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercício 04</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
	<?php
	$base_maior = $_POST["base_maior"];
	$base_menor = $_POST["base_menor"];
	$altura = $_POST["altura"];
	$area = ((($base_maior + $base_menor) * $altura) / 2);  
	echo "A area do trapezio em m² é de " .number_format($area,2);
	?>
	<br/>
	<a href="exercicio05.html"> Voltar</a>
</div>
</body>
</html>