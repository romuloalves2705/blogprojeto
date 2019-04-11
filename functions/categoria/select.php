<?php 
   
   require '../autoload_class.php';

   function selectCategoria($categoria_id){
      $categoria = new Categoria(new Conexao);
      $res = $categoria->select();
      while ($row = $res->fetch_array(MYSQLI_ASSOC)){
         if($categoria_id == $row['categoria_id'])
            echo "<option selected value='$row[categoria_id]'>$row[categoria]</option>";
               else
            echo "<option value='$row[categoria_id]'>$row[categoria]</option>";
      }
   }

   $id = empty($_POST['categoria_id']) ? '' : $_POST['categoria_id'];
   selectCategoria($id);
?>   