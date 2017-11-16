<?php
$conectar = mysql_connect("localhost","root","") or die ("Erro na conexão");
mysql_select_db("usuarios_cadastrados")or die ("**ERRO** base de dados não foi encontrada");
?>