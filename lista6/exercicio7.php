<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 7</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php //calcular fatorial
	function calcular($num1){
        $c = $num1;
        $fat = 1;
        do{
          $fat = $fat * $c;
          $c--;
        }while ($c >= 1);
          echo "$num1 ! = $fat";
	    }
	$num1= $_POST["num1"];
	calcular($num1);
?>
</div>
</body>
</html>