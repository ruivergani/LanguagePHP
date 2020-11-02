<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
       $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]"; //operador ternario: se foi passado como parametro nome, pegue nome senão digite como nao informado (isset: foi passado, foi configurado) //
       $ano = isset($_GET["ano"])?$_GET["ano"]:0;
       $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
       $idade = date("Y") - $ano; // o Y grande faz ser exibido o ano completo com os 4 digitos //
       echo "$nome é $sexo e tem $idade anos.";
    ?>
    <a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>
 