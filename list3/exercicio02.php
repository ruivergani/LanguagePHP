<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercício 01</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
	<?php
     $salario = $_POST["salario"];
     $nome = $_POST["nome"];
     $vendas= $_POST["vendas"];
     $comissao = ($vendas * 15) / 100;
     $salariofinal = $salario + $comissao;
     echo "Salário Fixo: R$" .number_format($salario,2);
     echo "<br/>Salário Final: R$" .number_format($salariofinal,2);
	?>
     <br/>
     <a href="exercicio02.html"> Voltar</a>
</div>
</body>
</html>