<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio Sétima Lista</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
	<?php
	 $n = $_POST["n"];
	 for ($i=1; $i <= $n ; $i= $i + 2) { 
	 	 echo "$i<br>";
	 }
	?>
</div>
</body>
</html>