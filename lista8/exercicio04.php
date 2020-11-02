<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 4</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<?php
    function data($data, $data1){
	$date = explode("-", $data);

	echo " ";
	echo ($date[0]);

	echo "/";
	echo ($date[1]);

	echo "/";
	echo ($date[2]);

    echo date(' H:i:s', strtotime($data1));
	}
    $data = $_POST["data"];
    $data1 = $_POST["data1"];
    data($data, $data1);
?>
</div>
</body>
</html>