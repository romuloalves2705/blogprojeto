<?php 

   class UpdateComando implements Comando {
      protected $artigo;

      public function __construct(Artigo $artigo){
         $this->artigo = $artigo;
      }
      
      public function exec(): int {
         return $this->artigo->update();
      }
   }
?>
