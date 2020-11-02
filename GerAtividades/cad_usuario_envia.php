<?php
require_once("valida_session.php");

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);
$email = $_POST["email"];
$data=date("y/m/d");

require_once ("bd/bd_usuario.php");
$dados = buscaUsuario($usuario);

require_once ("mensagens.php");
$titulo = 'CADASTRO DE USUÁRIO';
$link = 'cad_usuario.php';

if($dados != 0){
	$texto = 'Este nome de usuário já existe cadastrado no sistema, por favor cadastre outro nome.';
	erro($titulo,$texto,$link);
}else{
	$dados = cadastraUsuario($nome,$usuario,$senha,$email,$data);
	if($dados == 1){
		$texto = 'Os dados foram cadastrados no sistema.';
		sucesso($titulo,$texto,$link);
	}else{
		$texto = 'Os dados não foram cadastrados no sistema.';
		erro($titulo,$texto,$link);
	}
	
}

?>