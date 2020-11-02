<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
</head>
<body>
<div>
 <?php // tabuada de um numero //
  $numero = isset($_GET["num"])?$_GET["num"]:10;
  $n = $numero;
  $i = 1;
 do{
  $res = $n * $i;
  echo "$n x $i = $res<br/>";
  $i++;
  }while ( $i<= 10);







 ?>



  </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 