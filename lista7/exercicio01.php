<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 1</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php //contagem de caracteres
	$palavra = $_POST["palavra"];
	echo "Essa palavra tem " .strlen($palavra). " caracteres.";
?>
</div>
</body>
</html>