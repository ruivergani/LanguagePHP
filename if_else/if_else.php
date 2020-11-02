<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title> If - else</title>
</head>
<body>
<div>
    <?php // ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir //
    $a = isset($_GET["ano"])?$_GET["ano"]:1900; //se //
    $i = date("Y") - $a;
    echo "Você nasceu em $a e terá $i anos";
    if ($i >= 18) {
    	$v = "ja pode votar";
    	$d = "ja pode dirigir";
    }
    else{
     $v = "nao pode votar";
     $d = "nao pode dirigir";
    }
    echo "<br/
    >Com essa idade você $v e também $d";











    ?>
</div>
</body>
</html>
