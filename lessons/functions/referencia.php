<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>
<body>
<div>
    <?php  //criar um procedimento que use a passagem de parâmetros por valor/referência //
    function teste(&$x){ // referencia: coloca &
        $x += 2;
        echo "O valore de X é $x";
    }
    $a = 3;
    teste($a);
    echo "<br>O valor de A é $a";


    ?>
</div>
</body>
</html>