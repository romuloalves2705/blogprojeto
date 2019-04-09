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

      public function setTitulo($titulo){
         $this->titulo = $this->con->real_escape_string($titulo);
      //   $this->title = ucwords($this->title);
      }

      public function setAutor($autor){
         $this->autor = $this->con->real_escape_string($autor);
      }

      public function setCategoriaId($categoria_id){
         $this->categoria_id = $this->con->real_escape_string($categoria_id);
      }

      public function setConteudo($conteudo){
         $this->conteudo = $this->con->real_escape_string($conteudo);
      }

      public function setImg($img){
         $this->img = $this->con->real_escape_string($img);
      }

      public function setArtigoId($artigo_id){
         $this->artigo_id = $this->con->real_escape_string($artigo_id);
      }

      public function select() {
         if (empty($this->artigo_id)){
            $query = "SELECT * FROM `artigo` ";
            return $this->con->query($query);
         }
         $query = "SELECT * FROM `artigo` WHERE `artigo_id` = $this->artigo_id "; 
            return $this->con->query($query);
      }

      public function insert() {
         $query = "INSERT INTO `artigo`(`categoria_id`, `autor`, `titulo`, `conteudo`, `data`, `img`) VALUES
         ($this->categoria_id, '$this->autor', '$this->titulo', '$this->conteudo', '" . date('Y-m-d') . "', '$this->img')";
         $this->con->query($query);
         if($this->con->affected_rows <= 0) {
            return false;
         }
         return true;
      }

      public function update() {
         if(empty($this->img)) {
            $query = "UPDATE `artigo` SET `categoria_id`= $this->categoria_id, `titulo`= '$this->titulo', 
            `conteudo`= '$this->conteudo' WHERE `artigo_id` = $this->artigo_id";
         } else {
            $query = "UPDATE `artigo` SET `categoria_id`= $this->categoria_id, `titulo`= '$this->titulo', 
            `conteudo`= '$this->conteudo', `img`='$this->img' WHERE `artigo_id` = $this->artigo_id ";
         }
         $this->con->query($query);
         if($this->con->affected_rows <= 0) {
            return false;
         }
         return true;
      }


       public function delete(){
         $query = "DELETE FROM `artigo` WHERE `artigo_id` = $this->artigo_id";
         $this->con->query($query);
         return $this->con->affected_rows <= 0 ? false : true;
      }

      

      

      
      

      

     
      

      
      /*public function delete() {
         return 'delete';
      }*/
      
      
      //public function delete(): int{
      //   $query = "DELETE FROM `articulo` WHERE `articulo_id` = $this->article_id";
      //   $this->con->query($query);
      //   return $this->con->affected_rows;
      //}
   }
?>