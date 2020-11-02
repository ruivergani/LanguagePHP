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
    $n = array (array(2,3),
    			array(100,4),
    			array(5,6));
    print_r($n); //imprime a estrutura da matriz, pois a matriz é um vetor dentro do outro
    echo "<br/><br>Array Modificado";
    $n[0][1] = $n [2][0];
    print_r($n);

    ?>
</div>
</body>
</html>