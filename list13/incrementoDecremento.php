<!DOCTYPE html>
<html>
<head>
	<title>Primeira Aula</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div>
  <?php
    echo "<h3>Pós-incremento</h3>"; //soma-se após +1 (atualizado depois de mostrar)
    $a = 5;
    echo "Deve ser 5: " . $a++ . "<br/>\n";
    echo "Deve ser 6: " . $a . "<br/>\n";

    echo "<h3>Pré-incremento</h3>";
    $a = 5;
    echo "Deve ser 6: " . ++$a . "<br/>\n"; //soma-se antes +1 (atualizou antes de mostrar)
    echo "Deve ser 6: " . $a . "<br/>\n";

    echo "<h3>Pós-decremento</h3>"; //subtrai-se -1 depois de mostrar (atualizado depois de mostrar)
    $a = 5;
    echo "Deve ser 5: " . $a-- . "<br/>\n";
    echo "Deve ser 4: " . $a . "<br/>\n";

    echo "<h3>Pré-decremento</h3>"; //subtrai -1 e depois mostra (atualizou antes de mostrar)
    $a = 5;
    echo "Deve ser 4: " . --$a . "<br/>\n";
    echo "Deve ser 4: " . $a . "<br/>\n";

  ?>
</div>
</body>
</html>
