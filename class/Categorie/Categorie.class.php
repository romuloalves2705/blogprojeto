<?php 

   class Categorie {
      private $con;
      public $name;

      public function __construct(Conexion $con) {
         $this->con = $con;
      }

      public function setName($name) {
         $this->name = $this->con->real_escape_string($name);
         $this->name = ucwords($this->name);
      }

      public function insert() {
         $query = "INSERT INTO `categoria`(`categoria`) VALUES ('$this->name')";
         //$this->con->query($query);
         //return $this->con->affected_rows;
         if ($this->con->query($query)) 
            return 'Categoria adicionada com sucesso';
            return 'Houve um erro ao adicionar a nova categoria';
      }

      public function selectToArray() {
         $query = "SELECT * FROM `categoria`";
         $res = $this->con->query($query);
         $categorias = '<option value="Não">Esconha uma categoria</option>';
         while($row = $res->fetch_array(MYSQLI_ASSOC)) {
            $categorias .= "<option value='$row[categoria_id]'>$row[categoria]</option>";
         }
         return $categorias;
      //   return $this->con->query($query);
      }
   }
?>   

