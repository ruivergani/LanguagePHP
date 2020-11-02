<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 4</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php //calcular quociente e resto
	function calcular($num1, $num2){
		$divisao = $num1 / $num2;
		echo "O quociente foi: " .$divisao;
	}
	$num1= $_POST["num1"];
	$num2 = $_POST["num2"];
	calcular($num1, $num2);
?>
</div>
</body>
</html>