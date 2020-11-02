<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Contador</title>
</head>
<body>
<div>
    <?php // mostrar uma contagem progressiva de 1 até 10 ou regressiva basta inverter o sinal de maior e menor

    $c = 10;
    while ($c>= 1) {
    	echo $c ."<br/>";
    	 // echo "<br/>Número $c"; //
    	$c--;
    }
        
    ?>
</div>
</body>
</html>
 