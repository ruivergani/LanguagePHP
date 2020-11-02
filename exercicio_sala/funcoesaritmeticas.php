<!DOCTYPE html>
<html>
<head>
	<title>Funções Aritméticas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
   <style type="text/css">
   h2{
      font-size: 15px;
      color:#171559;
      font-weight: bold;
   }
   </style>
</head>
<body>
<div>
  <?php
  $v1 = $_GET["x"]; /* passa os parametros na url*/
  $v2 = $_GET["y"];
  echo "<h2>Valores recebidos: $v1 e $v2</h2>";

  echo "O valor absoluto de $v2 é " .abs($v2);
  /* elimina o valor negativo e deixa o absoluto */

  echo "<br/>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2); //potencia <sup>: mostra o numero elevado //

  echo "<br/>A raiz de $v1 é " .sqrt($v1); // raiz //


  echo "<br/>O valor de $v2 arredondado é " .round($v2); //ceil (arredonda p cima) floor(arredonda p baixo) //

  echo "<br/>A parte inteira de $v2 é " .intval($v2); //parte inteira do número //

  echo "<br/>O valor de $v1 em moeda é R$" .number_format($v1,2); //coloca as casas decimais transformando o número//
  ?>
</div>
</body>
</html>