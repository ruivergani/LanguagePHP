<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 9</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php 
	function calcular($num1,$num2){
     $resultado=0;
 	 for($i=$num1; $num2>=$i ; $i++){
 		$resultado = $resultado + $i;
 	}
        echo "O resultado é :" .$resultado;
     }
	$num1= $_POST["num1"];
	$num2= $_POST["num2"];
	calcular($num1,$num2);
?>
</div>
</body>
</html>