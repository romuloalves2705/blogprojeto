<?php

   require '../autoload_class.php';
   require '../valida_session.php';
   require '../files/files.php';
   
   if (! validar($_FILES)) {
      header('location: ../../dashboard/post.php?mensagem=Nenhuma imagem selecionada');
      exit();
   }
   
   $img = upload($_FILES);

   $artigo = new Artigo(new Conexao);
   $artigo->setTitulo($_POST['titulo']);
   $artigo->setAutor($session->getValue('usuario'));
   $artigo->setCategoriaId($_POST['categoria_id']);
   $artigo->setConteudo($_POST['conteudo']);
   $artigo->setImg($img);

   $cliente = new Cliente($artigo);
   
   if($cliente->operacao('insert') > 0){
      header('location: ../../dashboard/post.php?mensagem= Artigo inserido corretamente');
      exit();
   }
   header('location: ../../dashboard/post.php?mensagem= Houve um error ao inserir o artigo :(');

?>


