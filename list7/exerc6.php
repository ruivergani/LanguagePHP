<?php
	
	$num = array();
	for ($aux = 1;$aux <= 10; $aux++) 
	{
		$num[$aux] = 10 * $aux; 
	}
	for ($aux = 1;$aux <= 9; $aux++) 
	{
		$num[$aux] = $num[$aux + 1];
	}	
	for ($aux = 1;$aux <= 10; $aux++) 
	{
		echo  $num[$aux];
		echo "<br>";
	}	
?>
