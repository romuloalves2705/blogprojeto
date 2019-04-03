<?php

   //var_dump($_POST);

   require 'require.php';
   //require 'files.php';

  
   //require '../autoload_class.php';
   //require '../validate_session.php';
   //require '../files/files.php';

   //if (!validar($_FILES)) {
   //   header('location: ../../dashboard/post.php?message=Nenhuma imagem foi selecionada');
   //   exit();
   //}

   //$img = upload($_FILES);

   $article = new Article(new Conexion);
   $article->setTitle($_POST['title']);
   //$artigo->setAutor($session->getValue('usuario'));
   $article->setCategorieId($_POST['categorie_id']);
   $article->setContent($_POST['content']);
   //$artigo->setImg($img);

   $cliente = new Client($article);
   //echo $cliente->operate('insert');
   //var_dump($article->title);

   

   //if ($cliente->operate('insert') > 0){
   //header('location: ../../dashboard/post.php?message=Se insertĂ³ correctamente');
   //exit();
   //}

   //header('location: ../../dashboard/post.php?message=Hubo un error al guardar el articulo :(');
?>


