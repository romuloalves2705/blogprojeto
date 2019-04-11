<?php 

   class Artigo {
      public $con;
      public $titulo;
      public $autor;
      public $categoria_id;
      public $conteudo;
      public $img;
      public $artigo_id;

      public function __construct(Conexao $con){
         $this->con = $con;
      }

      public function setTitulo(string $titulo){
         $this->titulo = $this->con->real_escape_string($titulo);
         $this->title = ucwords($this->titulo);
      }

      public function setAutor(string $autor){
         $this->autor = $this->con->real_escape_string($autor);
      }

      public function setCategoriaId(int $categoria_id){
         $this->categoria_id = $this->con->real_escape_string($categoria_id);
      }

      public function setConteudo( string $conteudo){
         $this->conteudo = $this->con->real_escape_string($conteudo);
      }

      public function setImg(string $img){
         $this->img = $this->con->real_escape_string($img);
      }

      public function setArtigoId(int $artigo_id){
         $this->artigo_id = $this->con->real_escape_string($artigo_id);
      }

      public function select(): mysqli_result {
         $query = "SELECT * FROM `artigo` ";
         if($this->artigo_id){
            $query .= "WHERE `artigo_id` = $this->artigo_id "; 
         }
         return $this->con->query($query);
      }

      public function insert(): int {
         $query = "INSERT INTO `artigo`(`categoria_id`, `autor`, `titulo`, `conteudo`, `data`, `img`) VALUES
         ($this->categoria_id, '$this->autor', '$this->titulo', '$this->conteudo', '" . date('Y-m-d') . "', '$this->img')";
         $this->con->query($query);
         return $this->con->affected_rows;
      }

      public function update(): int {
         if($this->img) {
            $query = "UPDATE `artigo` SET `categoria_id`= $this->categoria_id, `titulo`= '$this->titulo', 
            `conteudo`= '$this->conteudo' WHERE `artigo_id` = $this->artigo_id";
         } else {
            $query = "UPDATE `artigo` SET `categoria_id`= $this->categoria_id, `titulo`= '$this->titulo', 
            `conteudo`= '$this->conteudo', `img`='$this->img' WHERE `artigo_id` = $this->artigo_id ";
         }
         $this->con->query($query);
         return $this->con->affected_rows;
      }

      public function delete(): int {
         $query = "DELETE FROM `artigo` WHERE `artigo_id` = $this->artigo_id";
         $this->con->query($query);
         return $this->con->affected_rows;
      }
   }
?>