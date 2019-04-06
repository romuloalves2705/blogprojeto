<?php

   class SuccessMensagem extends Mensagem {

      public function getMensagem ($mensagem) {
         $mensagem = strip_tags($mensagem);
         return "<div class='alert alert-success' role='alert'>$mensagem</div>";
      }
   }
?>