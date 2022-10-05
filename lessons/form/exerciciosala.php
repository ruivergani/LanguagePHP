<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/style.css"/>
  <meta charset="UTF-8"/>
  <title>Exemplo 3</title>
</head>
<body>
<div>
    <?php // soma dois numeros digitados pelo usuario //
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     $result = $num1 + $num2;
     echo "O resultado é igual a: " .number_format($result,2);
    ?>
    <a href="exerciciosala.html">Voltar</a>
</div>
</body>
</html>