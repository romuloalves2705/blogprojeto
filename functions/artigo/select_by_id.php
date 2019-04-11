<?php 
   
   require '../autoload_class.php';
   require '../valida_session.php';
   
   function validaId($id) {
      return is_numeric($id) and $id > 0;
   }

   function getArtigo(int $id) {
      $artigo = new Artigo(new Conexao);
      $artigo->setArtigoId($id);
      $cliente = new Cliente($artigo);
      $res = $cliente->operacao('select');
      $result_array = $res->fetch_array(MYSQLI_ASSOC);
      return json_encode($result_array);
   }

   $id = $_POST['id'] ?? '';
   if(!validaId($id)) exit(false);
   echo getArtigo($id);
  
