<?php 
   
   require 'require.php';
   require 'files.php';

   $img = '';

   if(!empty($_FILES['user-file']['tmp_name'])) {
      if (! validar($_FILES)) {
         header('location: ../../dashboard/edit.php');
         exit();
      } 
      $img = upload($_FILES);  
   }

   $artigo = new Artigo(new Conexao);
   $artigo->setTitulo($_POST['titulo']);
   $artigo->setAutor($session->getValue('usuario'));
   $artigo->setCategoriaId($_POST['categoria_id']);
   $artigo->setConteudo($_POST['conteudo']);
   $artigo->setImg($img);
   //$artigo->setArtigoId($_POST['id_artigo']);

   $cliente = new Cliente($artigo);

   if ($cliente->operacao('insert')){
      header('location: ../../dashboard/post.php?mensagem=Post atualizado com sucesso');
      exit();
   }
   header('location: ../../dashboard/dashboard.php?mensagem=Houve um erro ao atualizar o post :(');

?>