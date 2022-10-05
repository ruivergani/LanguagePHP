<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 06</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
     $num = $_POST["num"];
     if ($num % 5 == 0) {
     	echo "Multiplo de 5.";
     }
     else{
     	echo "Não foi multiplo de 5.";
     }
    ?>
	
</div>
</body>
</html>