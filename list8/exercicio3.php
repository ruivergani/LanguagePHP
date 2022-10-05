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
	function calcular($num1){
		if ($num1 > 0) {
			$i = 1;
			while ($i < $num1) {
				$somatorio = $num1 + $i;
				$i++;
			}
			echo "A soma de 1 até $num1 foi de: $somatorio";
		}
		else {
			echo "Número negativo fera!";
		}
	}
	$num1= $_POST["num"];
	calcular($num1);
?>
</div>
</body>
</html>