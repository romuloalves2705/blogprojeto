<?php
   require 'header.php';
   require 'navbar.php';
?>
   <div class="container-fluid">
      <div class="row">
         <?php require 'sidebar.php';?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
               <h1 class="page-header">Dashboard</h1>
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
<?php require 'footer.php';?>      

