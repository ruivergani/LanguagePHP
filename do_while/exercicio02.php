<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
</head>
<body>
<div>
    <?php // script para calcular o fatorial de um numero inteiro //
    $v = isset($_GET["val"])?$_GET["val"]:1;
    echo "Calculando o fatorial de $v";
   $c = $v;
   $fat = 1;
  do{
    $fat = $fat * $c;
    $c--;
  }while ($c >= 1);
  echo "$v ! = $fat";
  

  ?>
  </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 