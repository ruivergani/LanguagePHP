<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Atividade 1</title>
</head>
<body>
	<?php
		$largura = $_POST['largura'];
		$altura = $_POST['altura'];
		$caborda = $_POST['caracborda'];
		$corborda = $_POST['corborda'];
		$capreen = $_POST['caracpreen'];
		$corpreen = $_POST['corpreen'];

		echo "<h3> Retângulo Gerado com sucesso! </h3>";
		
		# Primeira linha
		echo "<table>";
		for ($bor=0; $bor < $largura ; $bor++) { 
			echo "<td style='color:$corborda;'>$caborda</td>";
		}

		echo "<tr></tr>";

		for ($alt=2; $alt < $altura; $alt++) { # Cria as bordas laterais
			echo "<tr></tr>";
			# Preenchimento				
			for ($i=0; $i < $largura; $i++) { 
				if ($i == 0) {
					echo "<td style='color:$corborda;'>$caborda</td>";
				}

				elseif ($i == ($largura - 1)) {
					echo "<td style='color:$corborda;'>$caborda</td>";					
				}
											
				else{
					echo "<td style='color:$corpreen;'>$capreen</td>";
				}
			}
		}
		echo "<tr></tr>";
		
		# Última linha
		for ($bor = 0; $bor < $largura; $bor++) { 
			echo "<td style='color:$corborda;'>$caborda</td>";
		}
		echo "</table>";				
	?>

	<style>
		table{
			font-family: 'Verdana';
			border: 0;
		}

		h3{
			color: green;
		}
	</style>	
</body>
</html>