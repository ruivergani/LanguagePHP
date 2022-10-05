<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 5</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php
    $palavra1 = $_POST["palavra1"];
    $palavra2 = $_POST["palavra2"];
	if(strcasecmp($palavra1, $palavra2) == 0){
		echo "São Iguais";
	}
	else{
		echo "Não são iguais";
	}
?>
</div>
</body>
</html>