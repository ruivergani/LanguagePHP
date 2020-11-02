<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 5</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
     $num = $_POST["num"];
     for ($i=1; $i<=$num; $i++) { 
     	echo "$i<br>";
     }
    ?>
</div>
</body>
</html>