<?php

   require 'header.php';
   require 'navbar.php';
?>
<div class="container-fluid">
   <div class="row">
      <?php require 'sidebar.php'; ?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         <h2 class="sub-header">Editar de Post</h2>
      </div>
      <div class="row">
         <div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main">
            <form enctype="multipart/form-data" action="../functions/artigo/update.php" method="POST">
               <div class="form-group">
                  <label for="titulo">Título</label>
                  <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="tituloHelp" placeholder="Novo titulo">
               </div>
               <div class="form-group">
                  <label for="categoria">Categoria</label>
                  <select name="categoria_id" class="form-control" id="categoria">
                     <option value="0">Esconha uma categoria</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="conteudo">Conteúdo</label>
                  <textarea name="conteudo" class="form-control" id="conteudo" rows="4" placeholder="Conteúdo aqui..."></textarea>
               </div>
               <div class="form-group">
                  <label for="img">Entrada de Arquivo</label>
                  <input name="user-file" type="file" class="form-control-file" id="img" aria-describedby="entradadearquivoHelp">
               </div>
               <input type="hidden" name="id_artigo" id="id_artigo">
               <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
            </form>
         </div>
         <div class="col-md-2 main">
            <form>
               <div class="form-group">
                  <label for="new_categoria">Nova Categoria</label>
                  <input type="text" class="form-control" id="new_categoria" aria-describedby="novacategorialHelp" placeholder="Nova Categoria">
               </div>
               <button type="button" id="submit_categoria" class="btn btn-primary btn-block">Salvar</button>
            </form>
         </div>
      </div>
   </div>   
<?php require 'footer.php'; ?>