<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercício 7</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
    $num = array();
  	for ($aux = 0;$aux <= 10; $aux++) 
	  {
		 $num[$aux] = pow($aux,2); 
	  }
    for ($aux = 1;$aux <= 10; $aux++) 
    {
    echo  $num[$aux];
    echo "<br>";
    }
    ?>
</div>
</body>
</html>
 