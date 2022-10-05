<!DOCTYPE html>
<html>
<head>
	<title>Isset</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
      echo isset($empresa);
      $empresa = "Rui Vergani company";
      echo isset($empresa);
    ?>
</div>
</body>
</html>