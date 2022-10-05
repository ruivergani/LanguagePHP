<?php
function conecta_bd(){
	/* configuração do banco de dados */
	$servidor="localhost";
	
	/* local que está rodando o php*/
	$usuario_bd="root";

	/* Senha do usuário, que tem acesso ao banco de dados*/
	$senha_bd="";

	/* Banco de dados que deseja estabelecer conesão */
	$banco="bdatividadeescola";

	/*Abre uma conexão com o servidor Mysql */

	$conexao = mysqli_connect($servidor, $usuario_bd , $senha_bd , $banco);

	/* Com a variavel $con definida, podemos fazer um teste usando o IF, se der falso */
	if(mysqli_connect_errno($conexao)){
		echo "Erro ao conectar ao banco de dados!";
		die();
	}
	return $conexao;

}
?>