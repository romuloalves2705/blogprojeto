<?php 

   class SelectComando implements Comando {
      protected $artigo;

      public function __construct(Artigo $artigo){
         $this->artigo = $artigo;
      }
      
      public function exec() {
         echo '*' . __CLASS__ . '-> exec</br>';
         return $this->artigo->select();
      }
   }
