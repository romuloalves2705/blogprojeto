<?php

   if(!isset($_POST['categorie'])) exit('Houve um error.Não recebemos a categoria :c');
   require_once $_SERVER['DOCUMENT_ROOT'] . '/blog/config/config.php';
   spl_autoload_register(function ($class) {
      include "../class/$class/$class.class.php";
   });

   //require '../autoload_class.php';

   function insertCategorie(){
      $categorie = new Categorie(new Conexion);
      $categorie->setName($_POST['categorie']);
      return $categorie->insert();
   }

   echo insertCategorie();
