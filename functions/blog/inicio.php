<?php 

   require 'autoload.php';
   require 'img.php';

   function getArtigos(){

      $artigo = new Artigo(new Conexao);
      $cliente = new Cliente($artigo);
      $res = $cliente->operacao('select');
      $posts = '';
      while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
         $posts .= getImg($row['img'], $row['artigo_id']);
         $posts .= '<div class="blog-header">';
         $posts .= "<a href='page.php?id=$row[artigo_id]'><h3 class=\"blog-title\">$row[titulo]</h3></a>";
         $posts .= "<p class=\"blog-post-meta\">$row[data]</td> escrito por <a href=\"#\">$row[autor]</a></p>";
         $posts .= '</div>';
      }
      return $posts;
   }
?>