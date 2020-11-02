<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercício 12</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
    $matriz=array(array("x","x","x","x"),
                  array("x","z","z","x"),
                  array("x","z","z","x"),
                  array("x","x","x","x"));
    for ($i=0; $i <=3; $i++) {  //linha
    	for ($j=0; $j<=3; $j++) { //coluna
    		echo $matriz [$i][$j]; //sem aspas
    		echo " ";
    	}
    	echo "<br/>";
    }
    ?>
</div>
</body>
</html>
 