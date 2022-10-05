<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/style.css"/>
  <meta charset="UTF-8"/>
</head>
<body>
<div>
    <?php
     $nome = $_POST['nome']; //$_GET : os dados passam na url ?telefone=98562685
     $telefone = $_POST['telefone'];
     echo "O nome é $nome";
     echo "<br/>O telefone é $telefone <br/>";
    ?>
    <a href="entrada.html">Voltar</a>
</div>
</body>
</html>
