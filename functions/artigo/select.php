<?php 
   
   require 'require.php';

   function getArtigos() {
      $artigo = new Artigo(new Conexao);
      $cliente = new Cliente($artigo);
      $res = $cliente->operacao('select');
      $tabela = '';
      while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
         $tabela .= '<tr>';
         $tabela .= "<td>$row[artigo_id]</td>";
         $tabela .= "<td>$row[autor]</td>"; 
         $tabela .= "<td>$row[data]</td>";
         $tabela .= "<td>$row[titulo]</td>";
         $tabela .= "<td><a href='edit.php?id=$row[artigo_id]'>Editar</a></td>";
         $tabela .= "<td><a class='delete' href='../functions/artigo/delete.php?id=$row[artigo_id]'>Delete</a></td>";
         $tabela .= '</tr>';
      //   echo '<tr>';
      //   echo "<td>$row[articulo_id]</td>";
      //   echo "<td>$row[autor]</td>";
      //   echo "<td>$row[fecha]</td>";
      //   echo "<td>$row[titulo]</td>";
      //   echo "<td><a href='edit.php?id=$row[articulo_id]'>Editar</a></td>";
      //   echo "<td><a class='delete' href='../functions/article/delete.php?id=$row[articulo_id]'>Eliminar</a></td>";
      //   echo  '</tr>';
      }
      return $tabela;
   }

  echo  getArtigos();

