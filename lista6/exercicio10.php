<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 10</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php 
	function calcular($num1, $num2,$num3){
		$calc = (pow($num1,2) + $num2 + $num3);
		echo "O calculo foi de: " .number_format($calc, 0);
	}
	$num1= $_POST["num1"];
	$num2 = $_POST["num2"];
	$num3 = $_POST["num3"];
	calcular($num1, $num2,$num3);
?>
</div>
</body>
</html>