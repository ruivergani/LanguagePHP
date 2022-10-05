<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 11</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
     $letra = $_POST["letra"];
     if (($letra == "A") || ($letra == "E") || ($letra == "I") || ($letra == "O") ||($letra == "U") ){
     	echo "Vogal";
     }
     else{
     	echo "Consoante";
     }
    ?>
	
</div>
</body>
</html>