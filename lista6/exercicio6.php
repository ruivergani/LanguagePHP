<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 6</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php //calcular média
	function calcular($num1,$num2){
		$media = ($num1 + $num2) / 2;
		echo "A média foi de: " .number_format($media,2);
	}
	$num1= $_POST["num1"];
	$num2= $_POST["num2"];
	calcular($num1,$num2);
?>
</div>
</body>
</html>