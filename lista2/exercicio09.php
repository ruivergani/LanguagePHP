<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 09</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
     $num = $_POST["num"];
     if(($num % 2 == 0) && ($num % 3 == 0)){
     echo "Número par e divisivel por 3.";
     }
     elseif($num % 3 == 0){
     	echo "Número apenas divisivel por 3.";
     }
     elseif($num % 2 == 0){
     	echo "Número é apenas par.";
     }
     else{
     	echo "Número não é nem par nem divisivel por 3. ";
     }
    ?>
	
</div>
</body>
</html>