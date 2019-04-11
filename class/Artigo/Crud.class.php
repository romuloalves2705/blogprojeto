<?php 

   class Crud{
      protected $insert;
      protected $select;
      protected $update;
      protected $delete;

      public function __construct(
         InsertComando $insertC
         ,SelectComando $selectC
         ,UpdateComando $updateC
         ,DeleteComando $deleteC
      )
      { 
         $this->insert = $insertC;
         $this->select = $selectC;
         $this->update = $updateC;
         $this->delete = $deleteC;
      }

      public function insert(): int {
         return $this->insert->exec();
      }

      public function select(): mysqli_result {
         return $this->select->exec();
      }

      public function update(): int {
         return $this->update->exec();
      }

      public function delete(): int {
         return $this->delete->exec();
      }
   }
?>   
