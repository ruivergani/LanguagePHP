<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 4</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php
    $palavra = $_POST["palavra"];
	echo "<br>Inverso da Palavra: " .strrev($palavra);
?>
</div>
</body>
</html>