<?php 

   class Categorie {
      private $con;
      public $name;

      public function __construct(Conexion $con) {
         $this->con = $con;
      }

      public function setName($name) {
         $this->name = $this->con->real_escape_string($name);
      //   $this->name = ucwords($this->name);
      }

      public function insert() {
         $query = "INSERT INTO `categoria`(`categoria`) VALUES ('$this->name')";
         //$this->con->query($query);
         //return $this->con->affected_rows;
         //$res = $this->con->query($query);
         if ($this->con->query($query)) 
            return 'Categoria adicionada com sucesso';
            return 'Houve um error';
      }

      //public function select() {
      //   $query = "SELECT * FROM `categoria`";
      //   return $this->con->query($query);
      //}
   }
?>   

