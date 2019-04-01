<?php
   require 'header.php';
   require 'navbar.php';
?>
   <div class="container-fluid">
      <div class="row">
         <?php require 'sidebar.php'; ?>
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            <h2 class="sub-header">Novo Posts</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main">
            <form>
               <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Novo title">
               </div>
               <label for="categorie">Categoria</label>
               <select name="" id="categorie" class="form-control" required="required">
                  <option value=""></option>
               </select>
               <div class="form-group">
                  <label for="content">Conteudo</label>
                  <textarea id="content" name="content" class="form-control" rows="3"></textarea>
               </div>
               <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Example block-level help text here.</p>
               </div>
               <button type="submit" class="btn btn-default">Enviar</button>
            </form>
         </div>
         <div class="col-md-2 main">
            <form>
               <div class="form-group">
                  <label for="new_categorie">Nova categoria</label>
                  <input type="text" name="new_categorie" class="form-control" id="new_categorie" placeholder="Nova categoria">
               </div>
               <button type="submit" id="submit_categorie" class="btn btn-default btn-block">Salvar</button>
            </form>
         </div>
      </div>
   </div>
<?php require 'footer.php'; ?> 