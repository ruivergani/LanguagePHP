<!DOCTYPE html>
<html>
<head>
	<title>Exercício 6</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
     $celsius = $_POST["celsius"];
     $farenheit = (9 * $celsius + 160) / 5;
     echo "A temperatura em Farenheit é de: " .number_format($farenheit,2);

    ?>
    <a href="exerc6.html"> Voltar</a>

</div>
</body>
</html>