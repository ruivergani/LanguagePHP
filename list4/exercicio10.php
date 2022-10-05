<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 09</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
     $ano = $_POST["ano"];
     $idade = date ("Y") - $ano;
     if ($idade >= 18) {
         echo "Pode votar.";
     }
     else{
        echo "Não pode votar.";
     }
    ?>
	
</div>
</body>
</html>