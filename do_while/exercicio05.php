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
    $c = 0;
    do{
      echo $c ."<br/>";
      $c = $c + 2;
    }
    while ($c <= 20);
    ?>
</div>
</body>
</html>
 