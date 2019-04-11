<?php 
   
   require '../autoload_class.php';
   require '../valida_session.php';

   function getArtigos() {
      $artigo = new Artigo(new Conexao);
      $cliente = new Cliente($artigo);
      $res = $cliente->operacao('select');
      while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
         echo  '<tr>';
         echo  "<td>$row[artigo_id]</td>";
         echo  "<td>$row[autor]</td>"; 
         echo  "<td>$row[data]</td>";
         echo  "<td>$row[titulo]</td>";
         echo  "<td><a href='edit.php?id=$row[artigo_id]'>Editar</a></td>";
         echo  "<td><a class='delete' href='../functions/artigo/delete.php?id=$row[artigo_id]'>Delete</a></td>";
         echo  '</tr>';
      }
   }

getArtigos();

