<?php
   spl_autoload_register(function ($class) {
      include "../class/$class/$class.class.php";
   });

   $session = new Session();
   if (! $session->validateSession('id')) {
      header('location: login/login.php?message= Usuário ou senha inválidos &type=warningMessage');
   }

   $session->destroySession();
      header('location: login/login.php');
?>