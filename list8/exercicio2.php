<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 2</title>
</head>
<body>
<?php //calcular raiz quadrada
	function calcular($num1){
		$raiz = sqrt($num1);
		echo "A raiz foi: ".$raiz;
	}
	$num1= $_GET["num"];
	calcular($num1);

?>
</body>
</html>