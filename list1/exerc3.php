<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercício 3</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
	<?php
     $nota1 = $_POST["nota1"];
     $nota2 = $_POST["nota2"];
     $nota3 = $_POST["nota3"];
     $nota4 = $_POST["nota4"];
     $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
     echo "A média bimestral foi: $media";
	?>
    <a href="exerc3.html">Voltar</a>

</div>
</body>
</html>