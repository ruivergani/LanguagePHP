<!DOCTYPE html>
<html>
<head>
	<title>Operador Ternário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div> 
    <?php //permitir que o usuário escolha entre somar e multiplicar dois números//
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores passados foram $n1 e $n2.<br/>";
    $r = ($tipo == "s")? $n1+$n2 : $n1*$n2; // se tipo for igual a s executa a soma senao multiplica //
    echo "O resultado será $r";
    ?>
</div>
</body>
</html>