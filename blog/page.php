<?php

   require '../functions/autoload_class.php';
   require '../functions/blog/page.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Page Inicial">
   <meta name="author" content="Romulo Alves">
   <title>Romulo Blog </title>
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
        <div class="col-sm-12 blog-main">
            <?php echo getArtigo(getId()); ?>
         </div>
      </div>
   </div>
   <?php include_once('footer.php')?>
</body>
</html>