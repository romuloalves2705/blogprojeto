<?php

   require_once $_SERVER['DOCUMENT_ROOT'] . '/blog' . '/config/config.php';
   spl_autoload_register(function ($class) {
      include "../class/$class/$class.class.php";
   });

   $session = new Session();
   if (! $session->validateSession('id')) {
      header('location: login/login.php?mensagem= Usuário ou senha inválidos. &type=warningMensagem');
   }

   $session->destroySession();
      header('location: login/login.php');
?>