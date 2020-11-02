<?php
require_once("conecta_banco.php");

function listaAtividades(){
	$conexao = conecta_bd();
	$atividades = array();
	$query = "Select * 
	From atividade 
	order by nome";
	$resultado = mysqli_query($conexao,$query);
	while($dados = mysqli_fetch_array($resultado)) {
	array_push($atividades, $dados);
	}
	return $atividades;
}

function cadastraAtividade($nome,$descricao,$prazo,$prioridade,$concluida,$data,$usuario){
	

}

function removeAtividade($codigo) {
    
}

function buscaAtividadeditar ($codigo){
	
}

function editarAtividade($codigo,$nome,$descricao,$prazo,$prioridade,$concluida,$data){
	

}

?>