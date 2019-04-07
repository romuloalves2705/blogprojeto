<?php 

   class Cliente {
      protected $artigo;
      protected $crud;
      protected $insert;
      protected $select;
      protected $update;
      protected $delete;

      public function __construct(Artigo $artigo) {
         echo 'Iniciando Cliente </br>';
         $this->artigo = $artigo;
         $this->insert = new InsertComando($this->artigo);
         $this->update = new UpdateComando($this->artigo);
         $this->select = new SelectComando($this->artigo);
         $this->delete = new DeleteComando($this->artigo);
         $this->crud = new Crud($this->insert, $this->select, $this->update, $this->delete);
      }

      public function operacao($action) {
         switch ($action) {
            case 'insert':
            echo '*** Petição insert </br>';
               return $this->crud->insert();
               break;
            case 'update':
            echo '*** Petição update </br>';
               return $this->crud->update();
               break;
            case 'delete':
            echo '*** Petição delete </br>';
               return $this->crud->delete();
               break;
            case 'select':
            echo '*** Petição select </br>';
               return $this->crud->select();
               break;
            default:
                throw new Exception("Error Processing Request", 1);
               break;
         }
      }
   }
?>