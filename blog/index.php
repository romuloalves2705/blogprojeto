<?php

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
   <div class="blog-masthead">
      <div class="container">
         <nav class="nav blog-nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="#">About</a>
         </nav>
      </div>
   </div>
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
               <a class="btn btn-outline-secondary" href="#">Newer</a>
            </nav>
         </div><!--blog-main -->
         <?php include_once ('aside.php')?>
      </div><!--row -->
   </div><!--container -->
   <?php include_once ('footer.php')?>
</body>
</html>