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
      </div>
      <div class="row">
         <div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main">
            <form>
               <div class="form-group">
                  <label for="titulo">Título</label>
                  <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="tituloHelp">
               </div>
               <div class="form-group">
                  <label for="categoria">Categoria</label>
                  <select class="form-control" id="categoria"></select>
               </div>
               <div class="form-group">
                  <label for="conteudo">Conteudo</label>
                  <textarea name="conteudo" class="form-control" id="conteudo" rows="3"></textarea>
               </div>
               <div class="form-group">
                  <label for="exampleInputFile">Entrada de Arquivo</label>
                  <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="entradadearquivoHelp">
               </div>
               <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
         </div>
         <div class="col-sm-2  col-md-2 main">
            <form action="">
               <div class="form-group">
                  <label for="new_categoria">Nova Categoria</label>
                  <input type="text" name="new_categoria" class="form-control" id="new_categoria" aria-describedby="novacategorialHelp">
               </div>
               <button type="submit" class="btn btn-primary btn-block">Salvar</button>
            </form>
         </div>
      </div>
   </div>
   <?php require 'footer.php'; ?>