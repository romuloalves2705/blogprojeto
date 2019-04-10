<?php

   function getImg($path_img, $id){
      $img = explode('/', $path_img);
      return '<a href="page.php?id='. $id .'"><img class="post-img img" src =../img/' . $img[count($img) - 1] . '></a>';
   }
?>