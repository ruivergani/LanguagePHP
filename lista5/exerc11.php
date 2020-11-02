<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercício 11</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
    $matriz  = array(array(1,1,1,1),
                     array(2,2,2,2),
                     array(3,3,3,3),
                     array(4,4,4,4));
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
 