<!DOCTYPE html>
<html>
<head>
	<title>Exercício 8</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$resto = ($num1 % $num2);
	$div = $num1 / $num2;
	echo "A divisão é $div<br/>";
    echo "O resto da divisão é: " .$resto;
    ?>
    <a href="exerc8.html"> Voltar</a>
</div>
</body>
</html>