<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>
<body>
<div> 
    <?php   //soma com multiplos parametros 
    function soma(){
    	$p = func_get_args();
        $t = func_num_args();
        $s = 0;

        for($i=0;$i<$t;$i++){
          $s += $p[$i];
        }
    return $s;
}

    //começa o programa //
    $r = soma(3,5,2);
    echo "A soma dos valores é $r";



    ?>
</div>
</body>
</html>