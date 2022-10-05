<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercício 3</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
    date_default_timezone_set('UTC');
    $data = date("w");
    $vetor = array(1,2,3,4,5,6,7);
  	$cod = array_search($data, $vetor);

	$dia = array("Domingo ", "Segunda-feira ", "Terça-feira ", "Quarta-feira ", "Quinta-Feira ","Sexta-feira ", "Sábado ");
	$prato = array("Lasanha quatro queijo ", "Frango ao molho ", "Arroz com legumes ", "Feijoada ", "Panqueca ", "Nhoque paulista ", "Carne assada ");
	$preco = array(12.00, 10.00, 9.40, 11.20, 8.50, 10.00, 15.00);

    echo "O cardápio do dia é: ";
	if ($cod == 7) {
		echo "<br> ".$dia[7] .$prato[7]  .$preco[7];
	}
	else if ($cod == 1) {
		echo "<br> " .$dia[1] .$prato[1]  .$preco[1];
	}
	else if ($cod == 2) {
		echo "<br> " .$dia[2]  .$prato[2]  .$preco[2];
	}
	else if ($cod == 3) {
		echo "<br> " .$dia[3]  .$prato[3]  .$preco[3];
	}
	else if ($cod == 4) {
		echo "<br> " .$dia[4] .$prato[4]   .$preco[4];
	}
	else if ($cod == 5) {
		echo "<br> " .$dia[5]  .$prato[5]  .$preco[5];
	}
	else if ($cod == 6) {
		echo "<br> " .$dia[6]  .$prato[6]  .$preco[6];
	}
    ?>

</div>
</body>
</html>
 