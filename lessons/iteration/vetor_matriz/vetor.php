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
    $vetor = array(3,5,8,"vitor");
    print_r($vetor); //imprime a estrutura do array, só funciona com vetor e não funciona com variavel simples.
    echo "<br>$vetor[1]";  //posição 1
    $vetor[7] = 12;
    echo "<br>$vetor[7]";
    for ($i=0; $i <= 3; $i++) { 
    	echo "<br>Vetor na posição [$i] = $vetor[$i]";
    }
	
    ?>
</div>
</body>
</html>