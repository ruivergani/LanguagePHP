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
     $num1 = $_POST["num1"];
     $num2 = $_POST["num2"];
     $num3 = $_POST["num3"];
     if (($num1 > $num2) &&($num1 > $num3)){
         echo "$num1 é o maior.";
     }
     elseif (($num2 > $num1) && ($num2 > $num3)) {
        echo "$num2 é o maior";
     }
     else{
        echo "$num3 é o maior";
     }
    ?>
	
</div>
</body>
</html>