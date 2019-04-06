<?php

   class MensagemFactory {

      public static function createMensagem ($type) {

         switch($type) {
            case 'successMensagem':
            return new SuccessMensagem();
            break;
            case 'warningMensagem':
            return new WarningMensagem();
            break;
            default:
            return false;
            break;   
         }
      }
   }
?>