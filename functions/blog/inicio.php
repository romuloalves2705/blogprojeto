<?php 

   function getArtigos(){

      $artigo = new Artigo(new Conexao);
      $cliente = new Cliente($artigo);
      $res = $cliente->operacao('select');
      while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
         echo "<a href='page.php?id=$row[artigo_id]'><img class='post-img img' src='../img/$row[img]'</a>";
         echo '<div class="blog-header">';
         echo "<a href='page.php?id=$row[artigo_id]'><h3 class=\"blog-title\">$row[titulo]</h3></a>";
         echo "<p class=\"blog-post-meta\">$row[data]</td> escrito por <a href=\"#\">$row[autor]</a></p>";
         echo '</div>';
      }
   }
?>