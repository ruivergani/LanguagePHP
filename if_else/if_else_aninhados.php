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
    if ($i < 16) {
      $tipoVoto ="nao vota";
    }
    elseif(($i >= 16 && $i < 18) || ($i >65)){ // pode ser elseif ou colocar o if dentro do else normal //
      $tipoVoto = "voto opcional";
      }
      else{
        $tipoVoto = "voto obrigatório";
      }
    
    echo "<br/>Para essa idade, $tipoVoto";











    ?>
</div>
</body>
</html>
