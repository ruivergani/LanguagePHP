<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Contador</title>
</head>
<body>
<div>
    <?php // mostrar uma contagem progressiva de 1 até 10 ou regressiva basta inverter o sinal de maior e menor

    $c = 1;
    do{
      echo $c ."<br/>";
      $c++; //pular de 2 em dois $c+=2;
    }
    while ($c<= 10);
    ?>
</div>
</body>
</html>
 