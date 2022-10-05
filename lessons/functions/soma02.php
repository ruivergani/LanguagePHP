<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>
<body>
<div> 
    <?php   // diferença é que vai retornar $s
    function soma($a, $b){
    	$s = $a + $b;
    	return $s; 
    }
    $x = 3;
    $y = 4;
    $r = soma($x, $y);
    echo "A soma entre $x e $y é igual a $r";




    ?>
</div>
</body>
</html>