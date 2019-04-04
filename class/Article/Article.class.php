<?php 

   class Article {
      public $con;
      public $title;
      public $author;
      public $categorie_id;
      public $content;
      public $img;
      public $article_id;

      public function __construct(Conexion $con){
         $this->con = $con;
      }

      public function setTitle(string $title){
         $this->title = $this->con->real_escape_string($title);
      //   $this->title = ucwords($this->title);
      }

      public function setAuthor(string $author){
         $this->author = $this->con->real_escape_string($author);
      }

      public function setCategorieId($categorie_id){
         $this->categorie_id = $this->con->real_escape_string($categorie_id);
      }

      public function setContent($content){
         $this->content = $this->con->real_escape_string($content);
      }

      public function setImg($img){
         $this->img = $this->con->real_escape_string($img);
      }

      public function setArticleId($article_id){
         $this->article_id = $this->con->real_escape_string($article_id);
      }

      public function select() {
         if (empty($this->article_id)) {
            $query = "SELECT * FROM `articulo`";
            return $this->con->query($query);
         }
         $query = "SELECT * FROM `articulo` WHERE `articulo_id` = $this->article_id";
         return $this->con->query($query);
      }

      public function insert() {
         $query = "INSERT INTO `articulo`(`categoria_id`, `autor`, `titulo`, `contenido`, `fecha`, `img`) VALUES
         ($this->categorie_id, '$this->author', '$this->title', '$this->content', '" . date('Y-m-d') . "', '$this->img')";
         $this->con->query($query);
         if($this->con->affected_rows <= 0) {
            return false;
         }
         return true;
      }

      public function update() {
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
      }

      public function delete() {
         return 'delete';
      }
      
      
      //public function delete(): int{
      //   $query = "DELETE FROM `articulo` WHERE `articulo_id` = $this->article_id";
      //   $this->con->query($query);
      //   return $this->con->affected_rows;
      //}
   }
?>