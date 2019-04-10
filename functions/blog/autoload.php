<?php

   require_once $_SERVER['DOCUMENT_ROOT'] . '/blog/config/config.php';
   spl_autoload_register(function($class) {
      if($class === 'Conexao' || $class === 'Session')
      return include "../class/$class/$class.class.php";
      include "../class/Artigo/$class.class.php";
   });

?>