<?php 

   class Artigo {
      private $con;
      public $titulo;
      //public $author;
      public $categoria_id;
      public $conteudo;
      //public $img;
      //public $article_id;

      public function __construct(Conexao $con){
         $this->con = $con;
      }

      public function setTitulo($titulo){
         $this->titulo = $this->con->real_escape_string($titulo);
      //   $this->title = ucwords($this->title);
      }

      public function setCategoriaId($categoria_id){
         $this->categoria_id = $this->con->real_escape_string($categoria_id);
      }

      public function setConteudo($conteudo){
         $this->conteudo = $this->con->real_escape_string($conteudo);
      }


      public function select(){
         return 'select';
      }

       public function insert(){
         return 'insert';
      }

       public function update(){
         return 'update';
      }

       public function delete(){
         return 'delete';
      }

      

      //public function setAuthor(string $author){
      //   $this->author = $this->con->real_escape_string($author);
      //}

      
      //public function setImg($img){
      //   $this->img = $this->con->real_escape_string($img);
      //}

      //public function setArticleId($article_id){
      //   $this->article_id = $this->con->real_escape_string($article_id);
      //}

      /*public function select() {
         if (empty($this->article_id)) {
            $query = "SELECT * FROM `articulo`";
            return $this->con->query($query);
         }
         $query = "SELECT * FROM `articulo` WHERE `articulo_id` = $this->article_id";
         return $this->con->query($query);
      }*/

      /*public function insert() {
         $query = "INSERT INTO `articulo`(`categoria_id`, `autor`, `titulo`, `contenido`, `fecha`, `img`) VALUES
         ($this->categorie_id, '$this->author', '$this->title', '$this->content', '" . date('Y-m-d') . "', '$this->img')";
         $this->con->query($query);
         if($this->con->affected_rows <= 0) {
            return false;
         }
         return true;
      }*/

      /*public function update() {
         if(empty($this->img)) {
            $query = "UPDATE `articulo` SET `categoria_id`= $this->categorie_id, `titulo`= '$this->title', 
               `contenido`= '$this->content' WHERE `articulo_id` = $this->article_id";
         } else {
            $query = "UPDATE `articulo` SET `categoria_id`= $this->categorie_id, `titulo`= '$this->title', 
               `contenido`= '$this->content', `img`='$this->img' WHERE `articulo_id` = $this->article_id";
         }
        
         $this->con->query($query);
         if($this->con->affected_rows <= 0) {
            return false;
         }
         return true;
      }*/

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