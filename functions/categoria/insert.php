<?php

   if(!isset($_POST['categoria'])) exit('Houve um error.Não recebemos a categoria :c');
   require '../autoload_class.php';

   function insertCategoria(){
      $categoria = new Categoria(new Conexao);
      $categoria->setName($_POST['categoria']);
         if($categoria->insert())
            return 'Categoria atualizada';
            return 'Houve um erro ao atualizar a categoria';
   }
echo insertCategoria();
