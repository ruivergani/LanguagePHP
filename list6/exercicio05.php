<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 05</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
     <?php
     $cont = 0;
     $litros = 20;
     do{
         $litros = $litros - 0.1;
      	 $cont++;
     }
     while ($litros >= 0);
     echo "Quantidade de horas vazio: $cont";
     ?>
</div>
</body>
</html>