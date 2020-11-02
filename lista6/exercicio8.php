<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 8</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php 
	function calcular($num1,$num2,$num3,$num4,$num5,$num6){
	 $soma_pesos = $num4 + $num5 + $num6;
     $media = ((($num1 * $num4) + ($num2 * $num5) + ($num3 * $num6)) / $soma_pesos );
     echo "A média foi de: $media";
     }
	$num1= $_POST["num1"];
	$num2= $_POST["num2"];
	$num3= $_POST["num3"];
	$num4= $_POST["num4"];
	$num5= $_POST["num5"];
	$num6= $_POST["num6"];
	calcular($num1,$num2,$num3,$num4,$num5,$num6);
?>
</div>
</body>
</html>