<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Vetor 01</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
    $matriz = array (array(6,4), array(4,9), array(3,2));
    
    for ($i=0; $i <=2; $i++) {  //linha
    	for ($j=0; $j<=1; $j++) { //coluna
    		echo $matriz [$i][$j]; //sem aspas
    		echo " ";
    	}
    	echo "<br/>";
    }

    ?>
</div>
</body>
</html>