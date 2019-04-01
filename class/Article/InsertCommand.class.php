<?php 

   class InsertCommand implements iCommand {
      protected $article;

      public function __construct(Article $article){
         $this->article = $article;
      }
      
      public function exec() {
          $this->article->insert();
      }
      //public function exec(): int{
      //   return $this->article->insert();
      //}
   }
?>