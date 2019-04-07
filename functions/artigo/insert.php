<?php

   require 'require.php';
   //require 'files.php';
   //require '../autoload_class.php';
   //require '../validate_session.php';
   //require '../files/files.php';
   //if (! validar($_FILES)) {
   //   header('location: ../../dashboard/post.php');
    //  exit();
   //}

   //$img = upload($_FILES);
   $artigo = new Artigo(new Conexao);
   $artigo->setTitulo($_POST['titulo']);
   //$article->setAuthor($session->getValue('usuario'));
   $artigo->setCategoriaId($_POST['categoria_id']);
   $artigo->setConteudo($_POST['conteudo']);
   //$article->setImg($img);
   $cliente = new Cliente($artigo);

   var_dump($artigo->titulo);
   
   //if($cliente->operate('insert')){
   //   header('location: ../../dashboard/post.php?message= Artigo inserido corretamente');
   //   exit();
   //}
   //header('location: ../../dashboard/post.php?message= Houve um error ao inserir o artigo :(');

?>


