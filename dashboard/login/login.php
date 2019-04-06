<?php
   spl_autoload_register(function ($class) {
      include "../../class/Mensagem/$class.class.php";
   });

   $mensagem = isset($_GET['mensagem']) && isset($_GET['type']) ? 
   MensagemFactory::createMensagem($_GET['type']) : false;
   $mensagem_out = $mensagem ? $mensagem->getMensagem($_GET['mensagem']) : '';
?>
<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Login ">
   <meta name="author" content="Romulo Alves">
   <title>Login | Meu Blog</title>
   <link rel="icon" href="../../img/blogicon.png">
   <link rel="stylesheet" href="../../css/bootstrap.css">
   <link rel="stylesheet" href="../../css/signin.css">
</head>
<body class="text-center">
   <form class="form-signin" method="post" action="validar_login.php">
      <img class="mb-4" src="../../img/romuloblog.png" alt="romuloblog" width="242" height="36">
      <h1 class="h3 mb-3 font-weight-normal">Formulário de login</h1>
      <?php echo $mensagem_out; ?>
      <label for="inputEmail" class="sr-only">E-mail</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Digite seu email" autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Digite sua senha">
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy;2019 - ROMULO BLOG</p>
   </form>
</body>
</html>