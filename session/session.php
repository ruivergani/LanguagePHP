<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div>
		<?php
			session_start();

			$_SESSION["aula"] = "PHP";
			$_SESSION["nota"] = 8;
			$_SESSION["cores"] = array("branco", "azul", "cinza");

			echo $_SESSION["nota"];
			echo "<br>";
			echo $_SESSION["aula"];

		?>
	</div>
</body>
</html>