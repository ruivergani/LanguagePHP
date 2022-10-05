<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 6</title>
</head>
<body>
    <?php
    $salario = $_POST["sal"];
    $aumento = ($salario + (($salario * 15) / 100));
    echo "O salario com aumento foi de: " .number_format($aumento,2);


    ?>
	
</body>
</html>