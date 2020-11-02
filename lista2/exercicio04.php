<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 04</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
     <?php
      $money = $_POST["money"];
      if ($money >= 10) {
      	echo "Vá ao cinema se divertir.";
      }
      else{
      	echo "Fique em casa vendo TV.";
      }
     ?>
     
</div>
</body>
</html>