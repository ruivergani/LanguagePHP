<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 3</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php
	$data1 = mktime(0,0,0,11,29,2020);
	$data2 = mktime(0,0,0,12,31,2021);
	
	$difSeconds = $data2 - $data1;
	echo "Diferença em segundos: ".$difSeconds. "<br>";

	$difMinutes = ($data2 - $data1) / 60;
	echo "Diferença em minutos: " .$difMinutes. "<br>";

	$difHours = ($data2 - $data1) / 60 / 60;
	echo "Diferença em horas: " .$difHours. "<br>";

	$difDays = ($data2 - $data1) /60 /60 /24;
	echo "Diferença em dias: " .$difDays. "<br>";
?>
</div>
</body>
</html>