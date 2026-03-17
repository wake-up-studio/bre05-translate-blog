<?php

    class PostManager extends AbstractManager {
        public function __construct(){
            parent::__construct();
        }
        
        public function findAll(){
            $query = $this -> db -> prepare("
                SELECT *
                FROM posts
            ");
            
            $query -> execute();
            
            $results = $query -> fetchAll(PDO::FETCH_ASSOC);
            
            $posts = [];
            $lang = $_SESSION["lang"];
            
            foreach($results as $result){
                $posts[] = new Post($result["title_".$lang], $result["excerpt_".$lang], $result["content_".$lang], 
                $result["author"], $result["created_at"], null, $result["id"]);
            }
            
            return $posts;
        }
        
    }

?>