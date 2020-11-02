<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Switch</title>
</head>
<body>
<div>
    <?php //ler um número e qual operação realizar: dobro, cubo ou raiz quadrada //
      $n = isset($_GET["num"])?$_GET["num"]:0;
      $o = isset($_GET["oper"])?$_GET["oper"]:1; // se n passar nada vai ser executada a operacao 1 ou seja dobro //
      switch ($o) {
      	case 1: // caso a variavel $o seja 1, vai atender a cada instancia //
      		$r = $n * 2;
      		break;
      	case 2:
      		$r = pow($n,3); // elevado ao cubo //
      		break;
      	case 3:
      		$r = sqrt($n); // $n ^ 0.5;
      		break;
      }
      echo "O resultado da operação solicitada foi $r fera!";

    ?>
</div>
</body>
</html>
 