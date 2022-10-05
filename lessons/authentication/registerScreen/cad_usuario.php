<?php

//abre a sessão
session_start();

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$data=date("y/m/d");


require_once ("bd/bd_usuario.php");
$dados = buscaUsuario($usuario);

require_once ("mensagens.php");
$titulo = 'CADASTRO DE USUÁRIO';
$link = 'index.php';

if($dados != 0){
	$_SESSION['nome'] = $_POST['nome'];
	$_SESSION['email'] = $_POST['email'];
	$texto = 'Este nome de usuário já existe cadastrado no sistema, por favor cadastre outro nome.';
	erro($titulo,$texto,$link);
}else{
	$dados = cadastraUsuario($nome,$usuario,$senha,$email,$data);
	if($dados == 1){
        session_destroy(); // Destrói a sessão limpando todos os valores salvos
		$texto = 'Os dados foram cadastrados no sistema.';
		sucesso($titulo,$texto,$link);
	}else{
		$texto = 'Os dados não foram cadastrados no sistema.';
		erro($titulo,$texto,$link);
		
	}
	
}
?>