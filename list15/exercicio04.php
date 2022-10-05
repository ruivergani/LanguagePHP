<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/style.css"/>
  <meta charset="UTF-8"/>
  <title>Exercicio 04</title>
</head>
<body>
<div>
    <?php  
    $estados = $_POST["estados"];
    switch ($estados) {
    	case 1:
    	 $r ="Região Norte";
    		break;
        case 2:
    	 $r = "Região Nordeste";
    		break;
    	case 3:
    	 $r ="Região Centro-oest";
    		break;
    	case 4:
    	$r = "Região Sudeste";
    		break;
    	case 5:
    	 $r = "Região Sul";
    		break;
    }
    echo "Voce mora na $r";
    ?>
 
    <br> <a href="exercicio04.html" class="botao"> Voltar</a>  
</div>
</body>
</html>
 