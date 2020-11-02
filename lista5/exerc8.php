<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercício 8</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
  	$num = array();
  	for ($aux = 1;$aux <= 10; $aux++) 
	{
		$num[$aux] = $aux; 
	}

  	for ($aux = 1;$aux <= 10; $aux++) 
	  {
		 $num[$aux] = $num[$aux] + $aux; 
	  }
    for ($aux = 1;$aux <= 10; $aux++){
     echo  $num[$aux];
     echo "<br>";
    }
    ?>
</div>
</body>
</html>
 