<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="../css/style.css"/>
  <title></title>
</head>
<body>
<div>
    <?php // sucessor e antecessor //
     $num = $_POST["num1"];
     $sucessor = $num + 1;
     $antecessor = $num - 1;
     echo "O sucessor é $sucessor<br/>";
     echo "O antecessor é $antecessor<br/>";
    ?>
    <a href="algoritmo1.html">Voltar</a>
</div>
</body>
</html>