<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 6</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php
    $palavra1 = $_POST["palavra1"];
    $caractere = $_POST["caractere"];
    echo "Aparece " .substr_count($palavra1, $caractere). " vez."; //função nova
?>
</div>
</body>
</html>