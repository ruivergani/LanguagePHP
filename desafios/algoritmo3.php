<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="../css/style.css"/>
  <title></title>
</head>
<body>
<div>
    <?php // Calcular a distancia //
     $x1 = $_POST["x1"];
     $y1 = $_POST["y1"];
     $x2 = $_POST["x2"];
     $y2 = $_POST["y2"];
     $distancia = sqrt(pow(($x2-$x1),2) + pow(($y2-$y1),2));
     echo "O calculo da distância é " .number_format($distancia,2);
    ?>
    <a href="algoritmo3.html">Voltar</a>
</div>
</body>
</html>