<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Saída do Programa 3</title>
</head>
<body>
	<h2 style="color: green;">Resultado</h2>

	<?php  

		$valor1 = $_POST['valor1'];
		$valor2 = $_POST['valor2'];
		$nota1 = $_POST['nota1'];
		$nota2 = $_POST['nota2'];


		echo "O valor total das duas provas é: ".($valor1 + $valor2)." pontos.";

		$porc_prova1 = ($nota1 * 100) / $valor1;
		echo "<br>Em relação á Prova 1, o aluno obteve ".round($porc_prova1)."% do total.";

		$porc_prova2 = ($nota2 * 100) / $valor2;
		echo "<br>Em relação á Prova 2, o aluno obteve ".round($porc_prova2)."% do total.";

		echo "<br>O aluno totalizou com as duas provas ".($nota1 + $nota2)." pontos.";

		$porc_total = (($nota1 + $nota2) * 100) / ($valor1 + $valor2);
		echo "<br>A porcentagem obtida pelo aluno em função do total foi de ".round($porc_total)." %.";

		
		if ($porc_total < 60) {
			$conceito = "Péssimo.";
		}
		else if ($porc_total >= 60 && $porc_total <= 69){
			$conceito = "Ruim.";
		}
		else if ($porc_total >= 70 && $porc_total <= 79){
			$conceito = "Bom.";
		}
		else if ($porc_total >= 80 && $porc_total <= 89){
			$conceito = "Ótimo.";
		}
		else {
			$conceito = "Excelente.";
		}

		echo "<br>O conceito do aluno foi: ".$conceito;
	?>
</body>
</html>
