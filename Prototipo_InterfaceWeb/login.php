<?php
	session_start();
  $ipPlayer = $_SERVER["REMOTE_ADDR"];
	include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Ivan Camargo">
    <link rel="icon" href="img/SGP.png">

    <title> Cadastro e Login </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div align="center" class="container">		
      <img = src="img/SGP.png" alt="imagem logo"/>

      <form class="form-signin" method="POST" action="valida_login.php">
        <h2 class="form-signin-heading text-center"> Cadastro e login de usuários </h2>
        <label for="inputEmail" class="sr-only">Usuário</label>
		
        <input type="text" name="usuario" class="form-control" placeholder="Entre com o usuário" required autofocus><br />
		
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Entre com a senha" required >
          <div class="btn-group btn-group-justified">
             <button class="btn btn-primary " type="submit" name="btnLogin">Acessar</button>
             <button class="btn btn-primary " type="button" name="btnSignin" onclick="location.href='cadastro.php';">Cadastrar</button>

          </div>
      </form>

		<span class="span_IP"> Por segurança seu endereço de IP ( <b> <?php echo $ipPlayer; ?> </b>) foi registrado! </span>
    <p class="text-center text-danger">
      <?php
        if(isset($_SESSION['loginErro'])){
          echo $_SESSION['loginErro'];
          unset($_SESSION['loginErro']);
        }
      ?>
    </p>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>