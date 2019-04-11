<?php 

   class SelectComando implements Comando {
      protected $artigo;

      public function __construct(Artigo $artigo){
         $this->artigo = $artigo;
      }
      
      public function exec(): mysqli_result {
         return $this->artigo->select();
      }
   }
