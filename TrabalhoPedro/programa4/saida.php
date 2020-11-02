<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Saída do Programa 4</title>
</head>
<body>

<h2 style="color: green;">Tabela gerada com sucesso!</h2>
<?php  

	$titulo = $_POST["titulo"];
	$tam_tabela = $_POST["tam-tabela"];
	$qt_linhas = $_POST["qt-linhas"];
	$qt_colunas = $_POST["qt-colunas"];
	$tam_borda = $_POST["tam-borda"];
	$cor_tabela = $_POST["cor-tabela"];
	$cor_texto = $_POST["cor-texto"];


	echo "<table>"; 
	echo "<caption>$titulo</caption>";
	for ($i=1; $i <= $qt_linhas; $i++) { 
		echo "<tr>";
		for ($j=1; $j <= $qt_colunas; $j++) { 
			echo"<td>Texto</td>";
		}
		echo "</tr>";	
	}
	echo "</table>"
?>

<style type="text/css">
	table{
		width: <?php echo "$tam_tabela";?>%;
		background-color: <?php echo "$cor_tabela";?>;
		margin: 0 auto;
		margin-top: 50px;
	}

	table td{
		color: <?php echo "$cor_texto";?>;
		border: <?php echo "$tam_borda";?>px black solid;
		text-align: center;
	}

	table caption{
		padding-bottom: 5px;
		font-size: 1.2em;
	}
</style>

</body>
</html>
