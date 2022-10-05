<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 03</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>	
  <?php 
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $num3 = $_POST["num3"];
  if ($num1 < ($num2 + $num3) && $num2 < ($num1 + $num3) && $num3 < ($num1 + $num2)) {
  	 if (($num1 == $num2) && ($num1 == $num3) && ($num2 == $num3)) {
  		echo "Triangulo Equilátero";
  	 }
  	 elseif(($num1 == $num2) || ($num1 == $num3) || ($num2 == $num3)){
        echo "Triangulo isosceles";
  	 }
  	 elseif(($num1 !=  $num2) && ($num1 != $num3) && ($num2 != $num3)){
  	 	echo "Triangulo escaleno";
  	 }
  }
  else{
  	echo "Os números não formam um triangulo!";
  }
  ?>
</div>
</body>
</html>