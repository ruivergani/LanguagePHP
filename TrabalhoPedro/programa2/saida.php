<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Atividade 2</title>
</head>
<body>
	<?php

		$num = $_POST['num'];
		$result = 1;

		echo "<h3>O Fatorial de $num é:</h3> <br>";

		for ($i = $num; $i >= 1; $i--) { 
			echo $i;
			
			if ($i > 1) {
				echo " * ";
			}
			
			else{
				echo " = ";
			}
		}

		for($i = $num; $i > 1; $i--){
			$result *= $num; 
			$num--;
		}

		echo "$result";
	?>

	<style>
		h3{
			color: green;
		}
	</style>
</body>
</html>