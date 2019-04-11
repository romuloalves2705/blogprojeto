<?php 
   $session = new Session();
   if (! $session->validaSession('id')) {
   header('location: ../../dashboard/login/login.php?mensagem=Usuario iniciar sessão sesión&type=warningMensagem');
   }
