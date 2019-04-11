<?php
   require_once(realpath($_SERVER['DOCUMENT_ROOT']) . '/blog/config/config.php');
   spl_autoload_register(function ($class) {
      if (in_array($class, NORMAL_CLASS))
         return require DIR . "/blog/class/$class/$class.class.php";
      elseif (strpos($class, 'Mensagem') !== false)
         require DIR . "/blog/class/Mensagem/$class.class.php";
      else
         require DIR . "/blog/class/Artigo/$class.class.php";
   });
