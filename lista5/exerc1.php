<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercício 1r</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>

    <?php
    echo "Letra A:"; //Apresente o total de elementos desse vetor
    $vetor = array(3,5,8,2);
    echo count($vetor);

    echo "<br>Letra B:"; //Inclua um elemento no final do vetor
    array_push($vetor, 3);
    print_r($vetor);

    echo "<br> Letra C:"; //Elimine o último elemento do vetor
    array_pop($vetor);
    print_r($vetor);

    echo "<br> Letra D:"; // Inclua um elemento no início do vetor
    array_unshift($vetor, 1);
    print_r($vetor);

    echo "<br> Letra E: "; // Elimine o primeiro elemento do vetor
    array_shift($vetor);
    print_r($vetor);

    echo "<br> Letra F: "; // Ordene os elementos do vetor de forma crescente
    sort($vetor);
    print_r($vetor);

    echo "<br> Letra G: "; //Ordene os elementos do vetor de forma decrescente
    rsort($vetor);
    print_r($vetor);

    

    ?>

</div>
</body>
</html>
 