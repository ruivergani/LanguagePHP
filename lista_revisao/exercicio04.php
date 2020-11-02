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
	$pequena = $_POST["pequena"];
	$grande = $_POST["grande"];
	$media = $_POST["media"];
	$total_vendido = (($pequena * 10) + ($media * 15) + ($grande * 20));
	echo "Valor arrecadado foi de: R$" .number_format($total_vendido,2);
	?>
	<br/>
	<a href="exercicio03.html"> Voltar</a>
</div>
</body>
</html>