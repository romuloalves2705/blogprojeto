<?php

   require 'header.php';
   require 'navbar.php';
?>
   <div class="container-fluid">
      <div class="row">
         <?php require 'sidebar.php'; ?>
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Painel Admin</h1>
            <div class="row placeholder"></div>
            <h2 class="sub-header">Lista de Posts</h2>
            <div class="table-responsive">
               <table class="table table-striped table-hover">
                  <thead>
                     <tr>
                        <th>#Id</th>
                        <th>Autor</th>
                        <th>Data</th>
                        <th>Titulo</th>
                        <th>Edit</th>
                        <th>Delete</th>
                     </tr>
                  </thead>
                  <tbody id="artigos">
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
<?php require 'footer.php'; ?>