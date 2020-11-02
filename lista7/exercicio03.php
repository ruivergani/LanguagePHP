<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 3</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php
    $cep = $_POST["cep"];
	echo "<br>Últimos 3 números do CEP: " .substr($cep,(strlen($cep)-3),strlen($cep));
	// echo "Ultimos 3 números do CEP: .substr($cep,-3);"
?>
</div>
</body>
</html>