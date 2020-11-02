<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php //mostrar se um eleitor é obrigado a votar ou não //
    $ano = 2000;
    $idade = 2017 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos.";
    $tipo = ($idade >= 18 && $idade <= 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
    echo "<br/>E dessa forma seu voto é: $tipo";
    ?>
</div>
</body>
</html>
 