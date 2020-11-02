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
		$agora = time();
		echo "Quantidade de segundos que se passaram desde 1/1/1970: " .$agora." segundos";

		// dia atual
		echo "<br><br>Data: " .date("d/m/Y", time());
		?>
</div>
</body>
</html>

