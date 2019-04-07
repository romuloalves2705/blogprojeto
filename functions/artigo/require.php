<?php

   require_once $_SERVER['DOCUMENT_ROOT'] . '/blog/config/config.php';
   spl_autoload_register(function($class) {
      if($class === 'Conexao' || $class === 'Session')
      return include "../../class/$class/$class.class.php";
      include "../../class/Artigo/$class.class.php";
   });


   $session = new Session();
   if (! $session->validateSession('id')){
      header('location: ../../dashboard/login/login.php?message= Iniciar a sessão &type=warningMessage');
   }

   //$artigo = new Artigo(new Conexao);
   //$cliente = new Cliente($artigo);
   
   //writeln($cliente->operate('insert'));
   //writeln($cliente->operate('update'));
   //writeln($cliente->operate('select'));
   //writeln($cliente->operate('delete'));

   //function writeln($value) {
   //   print("$value </br></br>");
   //}
?>   
