<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 1</title>
</head>
<body>
<?php //calcular quociente e resto
	function calcular($num1, $num2){
		$divisao = (int)($num1 / $num2);
		$resto = $num1 % $num2;
		echo "O quociente foi: " .$divisao. " e o resto: " .$resto;
	}
	$num1= $_POST["num1"];
	$num2 = $_POST["num2"];
	calcular($num1, $num2);
?>
</body>
</html>