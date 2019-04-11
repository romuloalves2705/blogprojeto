<?php

   require_once $_SERVER['DOCUMENT_ROOT'] . '/blog' . '/config/config.php';
   spl_autoload_register(function ($class) {
      include "../class/$class/$class.class.php";
   });

   $session = new Session();
   if (! $session->validateSession('id')) {
      header('location: login/login.php?mensagem=Usuário iniciar sessão.&type=warningMensagem');
   }
?>
<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Login ">
   <meta name="author" content="Romulo Alves">
   <title>Romulo Blog | Admin</title>
   <link rel="icon" href="../img/blogicon.png">
   <link rel="stylesheet" href="../css/dashboard/bootstrap.css">
   <link rel="stylesheet" href="../css/dashboard/dashboard.css">
</head>
<body>