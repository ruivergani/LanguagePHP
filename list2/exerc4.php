<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 5</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
	<?php
     $altura = $_POST["altura"];
     $raio = $_POST["raio"];
     $volume = (((3.14159 * $raio)/2) * $altura);
     echo "O volume calculado foi de:" .number_format($volume,2);
	?>
</div>
</body>
</html>