<?php

   require 'require.php';
   require 'files.php';
   //require '../autoload_class.php';
   //require '../validate_session.php';
   //require '../files/files.php';
   if (! validar($_FILES)) {
      header('location: ../../dashboard/post.php');
      exit();
   }

   $img = upload($_FILES);
   $article = new Article(new Conexion);
   $article->setTitle($_POST['title']);
   $article->setAuthor($session->getValue('usuario'));
   $article->setCategorieId($_POST['categorie_id']);
   $article->setContent($_POST['content']);
   $article->setImg($img);
   $cliente = new Client($article);
   
   if($cliente->operate('insert')){
      header('location: ../../dashboard/post.php?message= Artigo inserido corretamente');
      exit();
   }
   header('location: ../../dashboard/post.php?message= Houve um error ao inserir o artigo :(');

?>


