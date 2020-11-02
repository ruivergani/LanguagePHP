<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 02</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
     $num1 = $_POST["num1"];
     $num2 = $_POST["num2"];
     $num3 = $_POST["num3"];
     if ($num1 > $num2) {
     	if ($num1 > $num3) {
            echo "O número $num1 é o maior.";
        }
        elseif ($num1 < $num3) {
            echo "O número $num3 é o maior.";
        }
    }
    elseif($num2 > $num3){
        echo "O maior número é o $num2";
    }
    else{
        echo "O maior número é o $num3";
    } 
    ?>
</div>
</body>
</html>