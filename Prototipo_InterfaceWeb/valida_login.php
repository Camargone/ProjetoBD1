<?php
session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
include_once("conexao.php");

$result = mysql_query("SELECT * FROM usuarios WHERE login='$usuariot' AND senha='$senhat' LIMIT 1");
$resultado = mysql_fetch_assoc($result);
echo "Usuario: ".$resultado['nome'];
?>