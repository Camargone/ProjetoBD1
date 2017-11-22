<?php
session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
include_once("conexao.php");

$result = mysql_query("SELECT * FROM usuarios WHERE login='$usuariot' AND senha='$senhat' LIMIT 1");
$resultado = mysql_fetch_assoc($result);
//echo "Usuario: ".$resultado['nome'];
if(empty($resultado)){
	//Mensagem de Erro global
	$_SESSION['loginErro'] = "Usuário ou senha Inválidos!!";

	//Manda o usuario para a tela de login
	header("Location: login.php");
}else{
	//Move o usuario para a pagina inicial do projeto
	header("Location: index.php");
}
?>


