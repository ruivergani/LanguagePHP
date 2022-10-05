<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php //mostrar a situação de um aluno de acordo com sua média obtida //
    $nota1 = 9;
    $nota2 = 8;
    $m = ($nota1+$nota2) / 2;
    echo "A media entre $nota1 e $nota2 é $m <br/>";
    $r = ($m > 6) ? "Aprovadissimo" : "Bombou";
    echo "Sua situação atual é: $r"; // ou pode concatenar //

    ?>
</div>
</body>
</html>