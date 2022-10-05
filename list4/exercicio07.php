<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 07</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
    $temp = $_POST["temp"];
    if ($temp > 36.5) {
    	echo "Está com febre.";
    }
    else{
    	echo "Está sem febre.";
    }
    ?>
	
</div>
</body>
</html>