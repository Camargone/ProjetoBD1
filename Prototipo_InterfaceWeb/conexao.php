<?php
$conectar = mysql_connect("localhost","root","") or die ("Erro na conexão");
mysql_select_db("banco_de_dados")or die ("**ERRO** base de dados não foi encontrada");
?>