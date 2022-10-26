
<?php
session_start();
 
//Caso o usu�rio n�o esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['usuario']) and !isset($_SESSION['senha']) ) {
    //Limpa sess�o
    unset ($_SESSION['usuario']);
    unset ($_SESSION['senha']);
	
	//Destr�i sess�o
    session_destroy();
 
    //Redireciona para a p�gina de autentica��o
    header ("Location:home.php");
	die();
}


?>