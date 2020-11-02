<?php
require_once("conecta_banco.php");

function buscaUsuario ($usuario){
	$conexao = conecta_bd();

	$query = "Select * 
			  From usuario 
			  Where usuario = '$usuario'";
						  
	$resultado = mysqli_query($conexao, $query);
	$dados = mysqli_num_rows($resultado);

	return $dados;
}

function cadastraUsuario ($nome,$usuario,$senha,$email,$data){
	
	$conexao = conecta_bd();

	$query = "Insert Into usuario(nome,usuario,senha,email,datacad) values('$nome','$usuario','$senha','$email','$data')";
	
	$resultado = mysqli_query($conexao,$query);
	$dados = mysqli_affected_rows($conexao);
	return $dados;

}

?>