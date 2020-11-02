<?php
require_once("conecta_banco.php");

function checaUsuario($usuario, $senha) {
	$conexao= conecta_bd();
	$senhaMd5 = md5($senha);

	$query = "select *
	from usuario 
	where usuario ='$usuario' and
	senha='$senhaMd5'";

	$resultado = mysqli_query($conexao,$query);
	$dados=mysqli_num_rows($resultado);

	return $dados;
    
}

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

function listaUsuarios(){
$conexao = conecta_bd();
$usuarios = array();
$query = "Select * 
From usuario 
order by nome";
$resultado = mysqli_query($conexao,$query);
while($dados = mysqli_fetch_array($resultado)) {
array_push($usuarios, $dados);
}
return $usuarios;
}

function removeUsuario($codigo) {
	$conexao = conecta_bd();
	$query = "delete from usuario where codigo = '$codigo'";
	$resultado = mysqli_query($conexao, $query);
	$dados = mysqli_affected_rows($conexao);
	return $dados;
}

function buscaUsuarioeditar ($codigo){
	$conexao = conecta_bd();
	$query = "Select * 
	From usuario 
	Where codigo = '$codigo'";
	$resultado = mysqli_query($conexao, $query);
	$dados = mysqli_fetch_array($resultado);
	return $dados;
}

function editarUsuario($codigo,$nome,$email,$data){
	$conexao = conecta_bd();
	$query = "Select * 
	From usuario 
	Where codigo = '$codigo'";
	$resultado = mysqli_query($conexao,$query);
	$dados = mysqli_num_rows($resultado);
	if($dados == 1) //testa se a consulta retornou algum registro
	{
	$query = "Update usuario
	Set nome = '$nome', email = '$email', datacad = '$data'
	where codigo = '$codigo'";
	$resultado = mysqli_query($conexao,$query);
	$dados = mysqli_affected_rows($conexao);
	return $dados; 
	}

}

function editarUsuariosenha($codigo,$nome,$novasenha,$email,$data){
	$conexao = conecta_bd();
	$query = "Select * 
	From usuario 
	Where codigo = '$codigo'";
	$resultado = mysqli_query($conexao,$query);
	$dados = mysqli_num_rows($resultado);
	if($dados == 1) //testa se a consulta retornou algum registro
	{
	$query = "Update usuario
	Set nome = '$nome', senha = '$novasenha', email = '$email', datacad = '$data'
	where codigo = '$codigo'";
	$resultado = mysqli_query($conexao,$query); 
	$dados = mysqli_affected_rows($conexao);
	return $dados; 
	}
}

function buscaEmail ($email){
$conexao = conecta_bd();
$query = "Select *
From usuario 
Where email = '$email'";
$resultado = mysqli_query($conexao, $query);
$linha = mysqli_num_rows($resultado);
$dados = mysqli_fetch_array($resultado);
if ($linha == 1){
$usuario = $dados['usuario'];
$codigo = $dados['codigo'];
//DETERMINA OS CARACTERES QUE CONTERÃO A SENHA
$caracteres = "0123456789";
//EMBARALHA OS CARACTERES E PEGA APENAS OS 6 PRIMEIROS
$senha = substr(str_shuffle($caracteres),0,6);
$query = "Update usuario
Set senha = md5('$senha')
where codigo = '$codigo'
and usuario = '$usuario'";
$resultado = mysqli_query($conexao,$query);

return array($usuario,$senha);
}else{
echo $linha;
return $linha;
}
	
}
?>