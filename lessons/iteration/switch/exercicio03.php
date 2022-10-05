<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Switch</title>
</head>
<body>
<div>
    <?php  
    $estado = isset($_GET["estados"])?$_GET["estados"]:0;
    switch ($estado) {
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
 
    <br> <a href="javascript:history.go(-1)" class="botao"> Voltar</a>  
</div>
</body>
</html>
 