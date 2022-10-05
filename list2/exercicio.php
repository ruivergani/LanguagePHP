<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
      <?php
       $pequena = $_POST["pequena"];
       $grande = $_POST["grande"];
       $media = $_POST["media"];
       $resultado = (($pequena * 10) + ($grande * 15) + ($media * 12));
       echo "O resultado é $resultado";
      ?>

</body>
</html>