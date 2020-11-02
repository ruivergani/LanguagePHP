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
    $c = 1; 
    do{
      echo $c ."<br/>";
      $c = $c + 10;
    }
    while ($c <= 101);
    ?>
</div>
</body>
</html>
 