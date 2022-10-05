<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 2</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php //substituir as vogais por x
	$palavra = $_POST["palavra"];
	$i = 0;
	 for($i = 0; $i < strlen($palavra); $i++) {
        if ($palavra[$i] == 'a') {
            $palavra[$i] = 'X';
        }
        if ($palavra[$i] == 'e') {
            $palavra[$i] = 'X';
        }
        if ($palavra[$i] == 'i') {
            $palavra[$i] = 'X';
        }
        if ($palavra[$i] == 'o') {
            $palavra[$i] = 'X';
        }
        if ($palavra[$i] == 'u') {
            $palavra[$i] = 'X';
        }
    }
	echo "<br>$palavra.";
?>
</div>
</body>
</html>