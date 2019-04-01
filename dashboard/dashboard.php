<?php
   //require_once $_SERVER['DOCUMENT_ROOT'] . '/blog' . '/config/config.php';
   spl_autoload_register(function ($class) {
      include "../class/$class/$class.class.php";
   });
   $session = new Session();
   if (!$session->validateSession('id')) {
      header('location: login/login.php?message= Iniciar sesão &type=warningMessage');
   }
?>
<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="../../favicon.ico">
   <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/dashboard/">
   <title>Dashboard Template for Bootstrap</title>
   <!-- Bootstrap core CSS -->
   <link href="../css/dashboard/bootstrap.css" rel="stylesheet">
   
   <!-- Custom styles for this template -->
   <link href="../css/dashboard/dashboard.css" rel="stylesheet">
   <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
   <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>
<body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo utf8_encode($session->getValue('usuario'))?></a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#">Meu Blog</a></li>
               <li><a href="#">Trocar de Senha</a></li>
               <li><a href="cerrar_sesion.php">Sair</a></li>
            </ul>
         </div>
      </div>
   </nav>
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
               <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
               <li><a href="#">Criar Post</a></li>
               <li><a href="#">Analytics</a></li>
               <li><a href="#">Export</a></li>
            </ul>
         </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
               <h1 class="page-header">Dashboard</h1>
               <div class="row placeholders">
               <h2 class="sub-header">Lista de Posts</h2>
               <div class="table-responsive">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Header</th>
                           <th>Header</th>
                           <th>Header</th>
                           <th>Header</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html> 