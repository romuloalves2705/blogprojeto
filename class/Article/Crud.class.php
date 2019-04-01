<?php 

   class Crud{
      protected $insert;
      protected $select;
      protected $update;
      protected $delete;

      public function __construct(
         InsertCommand $insertC,
         SelectCommand $selectC,
         UpdateCommand $updateC,
         DeleteCommand $deleteC ) 
      {  
         echo 'Inicializando Crud </br></br>';
         $this->insert = $insertC;
         $this->select = $selectC;
         $this->update = $updateC;
         $this->delete = $deleteC;
      }

      public function insert() {
         echo '** Crud -> insert </br>';
         return $this->insert->exec();
      }

      public function select() {
         echo '** Crud -> insert </br>';
         return $this->select->exec();
      }

      public function update() {
         echo '** Crud -> insert </br>';
         return $this->update->exec();
      }

      public function delete() {
         echo '** Crud -> insert </br>';
         return $this->delete->exec();
      }
   }
?>   
