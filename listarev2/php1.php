<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 01</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php 
$operacao = $_POST["oper"];
$num = $_POST["num"];
switch ($operacao) {
	case 1:
		$info = $num * 2;
		break;
	case 2:
		$info = $num * 3;
		break;
}
	echo "O resultado foi: $info";
 ?>
</div>
</body>
</html>