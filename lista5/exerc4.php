<?php
	
	$num = array();
	for ($aux = 1;$aux <= 5; $aux++) 
	{
		$num[$aux] = pow($aux,2); 
	}
	for ($aux = 1;$aux <= 5; $aux++) 
	{
		echo  $num[$aux];
		echo "<br>";
	}	
?>
