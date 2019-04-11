<?php

   class WarningMensagem extends Mensagem {

      public function getMensagem (string $mensagem): string {
         $mensagem = strip_tags($mensagem);
         return "<div class='alert alert-danger' role='alert'>$mensagem</div>";
      }
   }
?> 