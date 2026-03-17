<?php

    class PostController extends AbstractController {
        private PostManager $pm;
        
        public function __construct(){
            $this -> pm = new PostManager();
        }
        
        public function posts(){
            $data = ["posts" => $this -> pm -> findAll()];
            
            $this -> render("posts", $data);
        }
    }

?>