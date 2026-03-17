<?php

    class CategoryManager extends AbstractManager {
        public function __construct(){
            parent::__construct();
        }
        
        public function findAll(){
            $query = $this -> db -> prepare("
                SELECT *
                FROM categories
            ");
            
            $query -> execute();
            
            $results = $query -> fetchAll(PDO::FETCH_ASSOC);
            
            $categories = [];
            $lang = $_SESSION["lang"];
            
            foreach($results as $result){
                $categories[] = new Category($result["title_".$lang], $result["description_".$lang], $result["id"]);
            }
            
            return $categories;
        }
        
    }

?>