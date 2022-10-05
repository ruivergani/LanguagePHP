<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Vetor 01</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div> <!-- SINTAXE 1 -->
    <?php //o valor do indice é atribuido a variavel $valor
    $vetor = array(3,5,8,2);
     foreach($vetor as $valor){
     echo "$valor,";
     }

    ?>
</div>
</body>
</html>