<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 6</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
    $v = $_POST["val"];
    echo "Calculando o fatorial de $v<br>";
    $fat = 1;
    for ($i= $v; $i>=1; $i--) { 
    	$fat = $fat * $i;	
    }
    echo "$v ! = $fat";
    ?>

</div>
</body>
</html>