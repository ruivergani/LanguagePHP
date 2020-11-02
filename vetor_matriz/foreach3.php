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
    $cad = array ("nome" => "Ana", "idade" => 23, "peso" => 65.5);
    foreach($cad as $indice => $k){
    echo "O vetor possui o indice $indice e o valor $k <br>";
    }
    ?>
</div>
</body>
</html>