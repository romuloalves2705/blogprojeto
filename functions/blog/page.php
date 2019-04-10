<?php 
   
   require 'autoload.php';
   require 'img.php';
   
   function validaId($id) {
      if(!is_numeric($id) || $id <= 0) {
         return false;
     }
      return true;
   }

   function getArtigo($id) {
      $artigo = new Artigo(new Conexao);
      $artigo->setArtigoId($id);
      $cliente = new Cliente($artigo);
      $res = $cliente->operacao('select');
      $row = $res->fetch_array(MYSQLI_ASSOC);
      $post = '<div class="blog-header">';
      $post .= getImg($row['img'], $row['artigo_id']);
      $post .= "<h1 class=\"blog-title\">$row[titulo]</h1>";
      $post .= "<p class=\"blog-post-meta\">$row[data]</td> escrito por <a href=\"#\">$row[autor]</a></p>";
      $post .= '<hr>';
      $post .= '<div class="page-content">';
      $post .=  $row['conteudo'];
      $post .= '</div>';
      
      return $post;
   
   }

   function getId(){
      $id = $_GET['id'] ?? '';
      if(!validaId($id)) exit('Id inválido');
      return $id;
   }

?>   
