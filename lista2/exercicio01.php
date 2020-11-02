<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 01</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
     $n1 = $_POST["n1"];
     $n2 = $_POST["n2"];
     if ($n1 > $n2) {
     	echo "O Número $n1 é o maior";
     }
     elseif ($n2 > $n1) {
     	echo "O Número $n2 é o maior";
     }
     else{
     	echo "Números são iguais.";
     }
    ?>
	
</div>
</body>
</html>