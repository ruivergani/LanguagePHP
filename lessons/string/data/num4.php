<?php

	$timestamp= mktime(18, 30, 00, 05, 10, 2000); /*segundo desde o dia 1/1/1970 até no dia do meu aniverssario*/
	echo "Timestamp:" .$timestamp;
	echo "<br>";
	echo date('d/m/Y H:i:s' , $timestamp);

?>