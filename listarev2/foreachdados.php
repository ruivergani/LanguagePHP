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
    $dados = array('nome' => "Rui Vergani Neto", 'Data de nascimento' => "10/05/2000", 'Nacionalidade' => "Brasileira/Italiana");
    foreach ($dados as $key => $value) {
    	echo " Campo: $key => $value <br>";
    }
    ?>
</div>
</body>
</html>