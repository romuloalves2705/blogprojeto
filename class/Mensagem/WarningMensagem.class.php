<?php

   class WarningMensagem extends Mensagem {

      public function getMensagem ($mensagem) {
         $mensagem = strip_tags($mensagem);
         return "<div class='alert alert-danger' role='alert'>$mensagem</div>";
      }
   }
?> 