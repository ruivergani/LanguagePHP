<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
		<?php
		// exemplo função
		function soma($x, $y){
			$r = $x + $y;
			return $r;
		}
		$num1 = 10;
		$num2 = 5;
		 echo (soma($num1,$num2));

		echo "<br> <br>";

		$strExemplo = "Linguagem PHP";
		echo "Variavél Inicial: $strExemplo";

		//exemplo 01 
		echo "<br> <br>";
		$strExemplo[1] = "I"; //mudou letra i 
		echo "Modificando uma Letra na posição [1]: " .$strExemplo;

		//exemplo 02
		echo "<br> <br>";
		echo ("Tamanho da String: " .strlen ($strExemplo));

		//exemplo 03
		echo "<br> <br>";
		$strModificada = (str_replace(" ", " (de Programação) ", $strExemplo)); 
		echo ($strModificada);

		//exemplo 04
		echo "<br> <br>";
		echo "Primeira posição da String u: " .strpos($strExemplo, "u");
	  
	  	//exemplo 05
		echo "<br> <br>";
		echo "Primeira ocorrencia do u e mostra o resto: " .strchr($strExemplo, "u");

		//exemplo 06
		echo "<br> <br>";
		echo "Última ocorrencia do G e mostra o resto: " .strrchr($strExemplo, "g");
        
        //exemplo 07
		echo "<br> <br>";
		echo "Captura a partir da posição 4: " .substr($strExemplo, 2);

		//exemplo 08
		echo "<br> <br>";
		echo "Substitui x onde tem espaço na String: " .str_replace(" ", "x", $strExemplo);

		//exemplo 09
		echo "<br> <br>";
		print_r(explode(" ", $strExemplo));

		//exemplo 10
		echo "<br><br>";
		$strMistura = "ruiverganineto";
		$mistura = str_shuffle($strMistura);
		echo " Misturada: $mistura";

		//exemplo 11
		$teste = "rui";
		$teste1 = "RuI";
		echo "<br><br>Comparação de string sem diferenciar Maiusc e Minusc: " .strcasecmp($teste, $teste1);
		echo "<br>Comparação diferenciando Maiusc de Minusc: ".strcmp($teste, $teste1);

		echo "<br>";
		echo (strtolower($strExemplo));
		echo "<br>";
		echo (strtoupper($strExemplo));
		echo "<br> <br>";

		$dividida = str_split($strExemplo, 3);
		print_r($dividida);
	
		?>
</div>
</body>
</html>

