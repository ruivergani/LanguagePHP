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
     if ($num % 7 == 0) {
     	echo "Multiplo de 7.";
     }
     else{
     	echo "Não foi multiplo de 7.";
     }
    ?>
	
</div>
</body>
</html>