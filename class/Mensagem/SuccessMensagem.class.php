<?php

   class SuccessMensagem extends Mensagem {

      public function getMensagem (string $mensagem): string {
         $mensagem = strip_tags($mensagem);
         return "<div class='alert alert-success' role='alert'>$mensagem</div>";
      }
   }
?>