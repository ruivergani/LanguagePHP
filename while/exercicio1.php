<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 1</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
     $c = 1;
     while ($c <= 10) {
     	echo "valor $c: <input type:'number' name='v$c' max='100' min='0' value='0'/><br/>";
     	$c++;
     }
    ?>
</div>
</body>
</html>