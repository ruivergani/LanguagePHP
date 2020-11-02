<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="../css/style.css"/>
  <title>Exercício 2</title>
</head>
<body>
<div>
    <?php // mostrar um soma//
     $num1 = $_POST["num1"];
     $num2 = $_POST["num2"];
     $soma = $num1 + $num2;
     echo "A soma foi $soma<br/>";
    ?>
    <a href="exerc2.html">Voltar</a>
</div>
</body>
</html>