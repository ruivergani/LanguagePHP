<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="../css/style.css"/>
  <title></title>
</head>
<body>
<div>
    <?php // terça parte de um número //
     $num = $_POST["num1"];
     $resultado = ($num / 3);
     echo "A terça parte é " .number_format($resultado,2);
    ?>
    <a href="algoritmo1.html">Voltar</a>
</div>
</body>
</html>