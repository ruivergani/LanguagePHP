<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 1</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
	<?php
    $num = $_POST["num"];
    if ($num % 2 == 0) {
    	echo "Número par.";
    }
    else{
    	echo "Número impar.";
    }
	?>

</div>
</body>
</html>