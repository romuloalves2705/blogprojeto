<?php 
   
   function validaId($id):bool {
      return is_numeric($id) && $id >= 0 ;
   }

   function getArtigo($id) {
      $artigo = new Artigo(new Conexao);
      $artigo->setArtigoId($id);
      $cliente = new Cliente($artigo);
      $res = $cliente->operacao('select');
      $row = $res->fetch_array(MYSQLI_ASSOC);
      echo  '<div class="container">';
      echo  '<div class="blog-header">';
      echo  "<a href='page.php?id=$row[artigo_id]'><img class='post-img img' src='../img/$row[img]'></a>";
      echo  "<h1 class=\"blog-title\">$row[titulo]</h1>";
      echo  "<p class=\"blog-post-meta\">$row[data]</td> escrito por <a href=\"#\">$row[autor]</a></p>";
      echo  '<div class="page-content">';
      echo  $row['conteudo'];
      echo  '</div>';
      echo  '</div>';
   }

   function getId(){
      $id = $_GET['id'] ?? '';
      if(!validaId($id)) exit('Id inválido');
      return $id;
   }

?>   
