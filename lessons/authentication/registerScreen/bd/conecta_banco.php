<?php

function conecta_bd(){
	//configuracao do banco de dados

	//local que está rodando o php
	$servidor = "localhost";

	//Nome de usuário que tem acesso
	$usuario_bd ="root";

	//Senha do usuário, que tem acesso ao banco de dados
	$senha_bd ="";

	//Banco de dados que deseja estabelecer a conexão
	$banco ="bdusuarios";

	//Abre uma conexão com o servisor MySQL 
	$conexao = mysqli_connect($servidor, $usuario_bd, $senha_bd, $banco);
   
	//Com a variável $con definida, podemos fazer um teste usando o IF, se der falso, a conexão com o servidor falhou.
	if(mysqli_connect_errno($conexao))
	{
		echo "Erro ao conectar ao banco de dados!";
		die();
	}
	return $conexao;
}
?>