<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 1</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php
	$data = $_POST["data"];
	$data1 = explode("-", $data);

	echo "Dia: ";
	echo ($data1[2]);

	echo "<br>Mês: ";
	echo ($data1[1]);

	echo "<br>Ano: ";
	echo ($data1[0]);
?>
</div>
</body>
</html>