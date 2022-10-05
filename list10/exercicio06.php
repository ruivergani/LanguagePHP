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
	$data = $_POST["data"];

	//cria um array
	$array = explode('-', $data);

	//garante que o array possue tres elementos (dia, mes e ano)
	if(count($array) == 3){
	    $dia = (int)$array[2];
	    $mes = (int)$array[1];
	    $ano = (int)$array[0];

	    //testa se a data é válida
	    if(checkdate($dia, $mes, $ano)){
	        echo "Data '$data' é válida";
	    }else{
	        echo "Data '$data' é inválida";
	    }
	}
	else{
	    echo "Formato da data '$data' inválido";
	}
?>
</pre>
</div>
</body>
</html>