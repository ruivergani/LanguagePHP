<?php
    // Define a class Game
    class Game{
        // Properties
        public $id;
        public $title;
        public $publisher;
        public $sales;

        // Methods
        // Set Function
        function setTitle(string $title) {
            $this->title = $title;
        }
        function setPublisher(string $publisher){
            $this->publisher = $publisher;
        }
        function setSales(float $sales){
            $this->sales = $sales;
        }
        // Get Function
        function getTitle(){
            return $this->title;
        }
        function getPublisher(){
            return $this->publisher;
        }
        function getSales(){
            return $this->sales;
        }
    }
?>