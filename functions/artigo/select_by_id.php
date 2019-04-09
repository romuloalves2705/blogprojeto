<?php 
   
   require 'require.php';
   
   function validaId($id) {
      if(!is_numeric($id) || $id <= 0) {
         return false;
     }
      return true;
   //   return is_numeric($id) and $id > 0;
   }

   function getArtigos($id) {
      $artigo = new Artigo(new Conexao);
      $artigo->setArtigoId($id);
      $cliente = new Cliente($artigo);
      $res = $cliente->operacao('select');
      $result_array = $res->fetch_array(MYSQLI_ASSOC);
      return json_encode($result_array);
   }

   $id = $_POST['id'] ?? '';
   if(!validaId($id)) exit('Id inválido');
   echo getArtigos($id);
