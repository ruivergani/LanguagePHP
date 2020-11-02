<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 7</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php
    $palavra1 = $_POST["palavra1"];
    echo "Organizada em maiuscula:  ".mb_convert_case($palavra1, MB_CASE_TITLE, 'UTF-8'); 
?>
</div>
</body>
</html>
