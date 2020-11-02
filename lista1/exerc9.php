<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="../css/style.css"/>
  <title>Exercício 1</title>
</head>
<body>
<div>
    <?php 
     $salario = $_POST["salario"];
     $salarioa = $salario + (($salario/100) * 15);
     echo "O salário com aumento é de R$" .number_format($salarioa,2);
    ?>
    <a href="exerc9.html">Voltar</a>
</div>
</body>
</html>