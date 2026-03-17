<?php

    class Router {
        private PostController $pc;
        private CategoryController $cc;
        
        public function __construct(){
            $this -> pc = new PostController();
            $this -> cc = new CategoryController();
        }
        
        public function handleRequest(array $get){
            if(isset($get["route"]) && $get["route"] === "posts"){
                $this -> pc -> posts();
            }
            
            else if(isset($get["route"]) && $get["route"] === "categories"){
                $this -> cc -> categories();
            }
            
            else if(isset($get["route"]) && $get["route"] === "switch_lang"){
                $this -> cc -> switchLang();
            }
            
            else{
                $this -> cc -> categories();
            }
        }
        
    }

?>