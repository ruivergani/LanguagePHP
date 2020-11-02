<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício 5</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
<pre>
<?php
    function data($data, $data1){
	$date = explode("-", $data);

	$data = array(date('Y', strtotime($data)),date('m', strtotime($data)),date('d', strtotime($data)), date('H', strtotime($data1)), date('i', strtotime($data1)), date('s', strtotime($data1)));
	foreach ($data as $indice => $valor) {
        echo "<br>$indice => $valor<br>";
    }
	}
    $data = $_POST["data"];
    $data1 = $_POST["data1"];
    data($data, $data1);
?>
</pre>
</div>
</body>
</html>