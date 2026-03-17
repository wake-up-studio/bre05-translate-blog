<?php

    class Post{
        public function __construct(private string $title, private string $excerpt, private string $content,
        private int $author, private string $created_at, private ?Category $categories, private ?int $id = null){
            
        }
        
        public function getTitle() : string {
            return $this -> title;
        }
        
        public function setTitle(string $title) : void {
            $this -> title = $title;
        }
        
        public function getExcerpt() : string {
            return $this -> excerpt;
        }
        
        public function setExcerpt(string $excerpt) : void {
            $this -> excerpt = $excerpt;
        }
        
        public function getContent() : string {
            return $this -> content;
        }
        
        public function setContent(string $content) : void {
            $this -> content = $content;
        }
        
        public function getAuthor() : int {
            return $this -> author;
        }
        
        public function setAuthor(int $author) : void {
            $this -> author = $author;
        }
        
        public function getCreatedAt() : string {
            return $this -> created_at;
        }
        
        public function setCreatedAt(int $created_at) : void {
            $this -> created_at = $created_at;
        }
        
        public function getCategories() : array {
            return $this -> categories;
        }
        
        public function setCategories(array $categories) : void {
            $this -> categories = $categories;
        }
        
        public function getId() : int {
            return $this -> id;
        }
        
        public function setId(int $id) : void {
            $this -> id = $id;
        }
    }

?>