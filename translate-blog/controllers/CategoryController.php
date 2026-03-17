<?php

    class CategoryController extends AbstractController {
        
        private CategoryManager $cm;
        
        public function __construct(){
            $this -> cm = new CategoryManager();
        }
        
        public function categories(){
            $data = ["categories" => $this -> cm -> findAll()];
            
            $this -> render("categories", $data);
        }
        
        public function switchLang(){
            if($_SESSION["lang"] === "fr"){
                $_SESSION["lang"] = "en";
            }
            else{
                $_SESSION["lang"] = "fr";
            }
            
            $this -> redirect("index.php");
        }
        
    }

?>