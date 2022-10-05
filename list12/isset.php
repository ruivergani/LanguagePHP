<?php

	$aula = false;
	if (isset($aula)) {
		echo "Variável foi definida";
	}
	else{
		echo "Variável nao foi definida.";
	}
	// isset verifica se a variavel é definida ou não e todos esses funcionam:
	// $aula = 0;
	// $aula = "";
	// $aula = "0";
	// $aula = false;

	// não funciona para:
	// $aula = null;
	




?>