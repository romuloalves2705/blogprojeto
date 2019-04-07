<?php 
   //require '../autoload_class.php';

   require_once $_SERVER['DOCUMENT_ROOT'] . '/blog/config/config.php';
   spl_autoload_register(function ($class) {
      include "../class/$class/$class.class.php";
   });

   function selectCategoria(){
      $categoria = new Categoria(new Conexao);
      return $categoria->selectToArray();
      //$res = $categorie->select();
      //while ($row = $res->fetch_array(MYSQLI_ASSOC)){
      //   if($categorie_id == $row['categoria_id'])
      //      echo "<option selected value='$row[categoria_id]'>$row[categoria]</option>";
      //   else
      //      echo "<option value='$row[categoria_id]'>$row[categoria]</option>";
   }
   //}

   //$id = empty($_POST['categorie_id']) ? '' : $_POST['categorie_id'];
   //selectCategorie($id);
   echo selectCategoria();

?>   