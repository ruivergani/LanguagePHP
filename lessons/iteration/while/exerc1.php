<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio Sétima Lista</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
	<?php
	$consumo = $_POST["consumo"];
	$codigo = $_POST["codigo"];
	$hab = $_POST["hab"];
	$kwh = $_POST["kwh"]; //finge que é um valor mais caro em que cada pessoa gasta em media 30 reais
	if ($codigo == 1) {
		$conta_mensal = (($hab * $kwh) + 35);
	}
	elseif ($codigo == 2) {
		$conta_mensal = (($hab * $kwh) + 50);
	}
	else{
		$conta_mensal = (($hab * $kwh) + 150);
	}
    echo "O valor da conta mensal foi de: $conta_mensal";

	?>
</div>
</body>
</html>