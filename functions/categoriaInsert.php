<?php

   if(!isset($_POST['categoria'])) exit('Houve um error.Não recebemos a categoria :c');
   require_once $_SERVER['DOCUMENT_ROOT'] . '/blog/config/config.php';
   spl_autoload_register(function ($class) {
      include "../class/$class/$class.class.php";
   });

   function insertCategoria(){
      $categoria = new Categoria(new Conexao);
      $categoria->setName($_POST['categoria']);
         //if($categoria->insert())
         //   return 'bem';
         //   return 'false';
      return $categoria->insert();
   }
   
   echo insertCategoria();
