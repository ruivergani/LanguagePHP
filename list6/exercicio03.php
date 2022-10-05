<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Contador</title>
</head>
<body>
<div>
    <?php
    $n = 3;
    $i = 0;
    do{
    $res = pow($n,$i);
    echo "$n<sup>$i</sup> = $res<br/>";
    $i++;
    }while ( $i<= 15);
    ?>
</div>
</body>
</html>
 