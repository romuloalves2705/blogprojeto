<?php 
   //require '../autoload_class.php';
   //require '../validate_session.php';
   require 'require.php';

   function getArticles() {
      $article = new Article(new Conexion);
      $cliente = new Client($article);
      $res = $cliente->operate('select');
      $tabla = '';
      while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
         $tabla .= '<tr>';
         $tabla .= "<td>$row[articulo_id]</td>";
         $tabla .= "<td>$row[autor]</td>"; 
         $tabla .= "<td>$row[fecha]</td>";
         $tabla .= "<td>$row[titulo]</td>";
         $tabla .= "<td><a href='edit.php?id=$row[articulo_id]'>Editar</a></td>";
         $tabla .= "<td><a>Delete</a></td>";
         $tabla .= '</tr>';
      //   echo '<tr>';
      //   echo "<td>$row[articulo_id]</td>";
      //   echo "<td>$row[autor]</td>";
      //   echo "<td>$row[fecha]</td>";
      //   echo "<td>$row[titulo]</td>";
      //   echo "<td><a href='edit.php?id=$row[articulo_id]'>Editar</a></td>";
      //   echo "<td><a class='delete' href='../functions/article/delete.php?id=$row[articulo_id]'>Eliminar</a></td>";
      //   echo  '</tr>';
      }
      return $tabla;
   }

  echo  getArticles();

