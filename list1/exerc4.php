<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 4</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
	<?php
     $altura = $_POST["altura"];
     $raio = $_POST["raio"];
     $volume = ((3.14159 * $raio) / 2)* $altura;
     echo "O volume foi: " .number_format($volume,2). " litros";
	?>
    <a href="exerc4.html">Voltar</a>

</div>	
</body>
</html>