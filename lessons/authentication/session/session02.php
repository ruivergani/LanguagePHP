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

			//Eliminando as variaveis da sessão
			session_unset();

			//Destruir a sessão
			session_destroy();

			echo $_SESSION["aula"];
			echo $_SESSION["nota"];

		?>
	</div>
</body>
</html>