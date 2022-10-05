<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 5</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php //calcular cubo
	function calcular($num1){
		$cubo = pow($num1,3);
		echo "O cubo foi: " .$cubo;
	}
	$num1= $_POST["num1"];
	calcular($num1);
?>
</div>
</body>
</html>