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
			// Cria um cookie chamado linguagem com valor PHP
			setcookie("linguagem", "PHP");

			//Cria um cookie válido por 1 hora
			setcookie("nome", "Fabio", time()+3600);

			//Cria um cookie válido por 1 dia
			setcookie("disciplina", "programação", time()+3600*24);

			//imprimir o cookie
			echo $_COOKIE["nome"];
			echo "<br>";
			echo $_COOKIE["disciplina"];
			echo "<br>";

			//todos cookies
			print_r($_COOKIE);
		?>
	</div>
</body>
</html>