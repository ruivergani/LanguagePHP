<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 5</title>
</head>
<body>
     <?php
      $valor = 500; 
      $taxa = 1; // 1% no caso 
      $tempo = 3; // 3 dias
      $resultado = $valor + ($valor * ($taxa/100) * $tempo);
      echo "O resultado foi de: $resultado";


     ?>
</body>
</html>