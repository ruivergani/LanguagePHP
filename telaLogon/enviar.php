<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estiloPHP.css"/>
  <meta charset="UTF-8"/>
  <title>Exemplo 3</title>
</head>
<body>
<section>
    <?php
     $usuario = $_POST["user"];
     $senha = $_POST["senha"];
     echo "<span>Bem Vindo: $usuario</span>";
    ?>
    <div id="botoes">
      <p><button onClick="history.go(-1)" class="voltar">Voltar</button></p>
    </div>

</section>
</body>
</html>