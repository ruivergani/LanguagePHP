<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Vetor 01</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div> <!-- SINTAXE 2 -->
    <?php //indice também é mostrado
    $vetor = array(3,5,8,2);
    foreach ($vetor as $indice => $valor) {
        echo "<br>O vetor no indice $indice possui o valor $valor<br>";
    }
	
    ?>
</div>
</body>
</html>