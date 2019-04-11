<?php

   date_default_timezone_set("America/Sao_Paulo");
   define('CONF_DB_HOST', 'localhost');
   define('CONF_DB_USER', 'root');
   define('CONF_DB_PASS', '');
   define('CONF_DB_DATABASE', 'romulo_blog');
   define('CONF_DB_CHARSET', 'utf8');
   define('DIR', $_SERVER['DOCUMENT_ROOT']);
   define('NORMAL_CLASS', ['Categoria', 'Conexao', 'Login', 'Session']);
   
?>