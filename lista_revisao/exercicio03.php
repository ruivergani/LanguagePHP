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
	$pao = $_POST["pao"];
	$broa = $_POST["broa"];
	$total_vendido = (($pao * 0.12) + ($broa * 1.50));
	$poupanca = ($total_vendido * 10) / 100;
	echo "A quantidade arrecadada com Pães e Broas foi de: R$" .number_format($total_vendido,2);
	echo "<br/>Você deve guardar na poupança R$" .number_format($poupanca,2);
	?>
	<br/>
	<a href="exercicio03.html"> Voltar</a>
</div>
</body>
</html>