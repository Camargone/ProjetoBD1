<?php
session_start();
session_destroy();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);

$_SESSION['msg'] = "Deslogado com sucesso";



//Redirecionamento a pagina de login
header("Location: login.php");
?>