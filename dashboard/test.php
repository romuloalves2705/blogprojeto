<?php

   require_once $_SERVER['DOCUMENT_ROOT'] . '/blog/config/config.php';
   spl_autoload_register(function($class) {
      if($class === 'Conexao')
      return include "../class/$class/$class.class.php";
      include "../class/Artigo/$class.class.php";
   });

   $artigo = new Artigo(new Conexao);
   $cliente = new Cliente($artigo);
   
   writeln($cliente->operacao('insert'));
   writeln($cliente->operacao('update'));
   writeln($cliente->operacao('select'));
   writeln($cliente->operacao('delete'));

   function writeln($value){
      print("> $value </br></br>");
   }
  