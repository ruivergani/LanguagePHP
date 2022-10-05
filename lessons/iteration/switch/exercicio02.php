<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Switch</title>
</head>
<body>
<div>
    <?php  // ler o dia da semana (2 - 7) e mostrar se precisa ou não ir para escola //
    $d = isset($_GET["ds"])?$_GET["ds"]:0;
    switch ($d) {
    	case 2:
    	case 3:
    	case 4:
    	case 5:
    	case 6:
    	echo "Levanta e vai estudar! :)";
    	break;
    	case 7:
    	case 8:
    	echo "Descanse, pequeno gafanhoto ;)";
    	break;
    	default:
    		echo "Dia da semana invalido!";
    }



     // esse código javascript significa volte uma página //
    ?>
    <br> <a href="javascript:history.go(-1)" class="botao"> Voltar</a>  
</div>
</body>
</html>
 