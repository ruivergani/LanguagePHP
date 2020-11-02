<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
	echo "Data de amanhã:" .date("d/m/Y" , strtotime("+1 day" , time())) . "<br>";
	echo "Data de aqui sete dias:" .date("d/m/Y" , strtotime("+ 7 day" , time())) . "<br>";
	echo "Data da próxima segunda feira:" .date("d/m/Y" , strtotime("next mondey" , time())) . "<br>";
	echo "Data da sexta-feira passada:" .date("d/m/Y" , strtotime("last friday" , time())) . "<br>";
	echo "Data de uma semana depois:" .date("d/m/Y" , strtotime("+1 week" , time())) . "<br>";
?>	
</body>
</html>