<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercício 10</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
    $matriz = array(array(3,5),
    				        array(2,1));
    for ($i=0; $i <=1; $i++) {  //linha
    	for ($j=0; $j<=1; $j++) { //coluna
    		echo $matriz [$i][$j]; //sem aspas
    		echo " ";
    	}
    	echo "<br/>";
    }
    ?>s
</div>
</body>
</html>
 