<?php

   require '../autoload_class.php';
   require '../valida_session.php';

   if (empty($_GET['id'])) exit('Id não foi recebido');
   if (!is_numeric($_GET['id']) or $_GET['id'] <= 0) exit('Houve um error');

   $artigo = new Artigo(new Conexao);
   $artigo->setArtigoId($_GET['id']);
   $cliente = new Cliente($artigo);
   
   if ($cliente->operacao('delete')) {
      header('location: ../../dashboard/dashboard.php?mensagem=Artigo deletado corretamente');
      exit();
   }
   header('location: ../../dashboard/dashboard.php?mensagem=Houve um erro ao deletar o arquivo :(');
?>