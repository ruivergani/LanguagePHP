<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fibbonaci</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
		<?php
		$atual = 1;
		$anterior = 1;
		$i = 0;
		echo "$atual,$anterior,";
		while ($i <= 10) {
			$proximo = $atual + $anterior;
			echo "$proximo,";
			$anterior = $atual;
			$atual = $proximo;
			$i++;
		}
		?>
</div>
</body>
</html>

