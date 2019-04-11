<?php

   require '../functions/autoload_class.php';
   require '../functions/blog/inicio.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Page Inicial">
   <meta name="author" content="Romulo Alves">
   <title>Romulo Blog | Page Inicial</title>
   <link rel="icon" href="../img/blogicon.png">
   <link rel="stylesheet" href="../css/blog/bootstrap.css">
   <link rel="stylesheet" href="../css/blog/blog1.css">
</head>
<body>
   <?php include 'navbar.php'; ?>
   <div class="container">
      <div class="blog-header">
         <h1 class="blog-title">Romulo Blog</h1>
         <p class="lead blog-description">Este blog aborda varios assuntos da atualidade.</p>
      </div>
      <div class="row">
        <div class="col-sm-8 blog-main">
            <?php echo getArtigos();?>
            <nav class="blog-pagination">
               <a class="btn btn-outline-primary" href="#">Older</a>
               <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
         </div>
         <?php include_once ('aside.php')?>
      </div>
   </div>
   <?php include_once ('footer.php')?>
