<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 05</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
   $num = $_POST["num"];
   if ($num < 0) {
   	echo "Número negativo.";
   }
   elseif($num == 0){
   	echo "Número igual a 0.";
   }
   else {
   	echo "Número positivo";
   }
    ?>
	
</div>
</body>
</html>