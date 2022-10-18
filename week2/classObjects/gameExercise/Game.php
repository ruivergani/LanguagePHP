<?php
    // Define a class Game
    class Game{
        // Properties
        private $title;
        private $publisher;
        private $sales;

        //Methods
        function setTitle(string $title) {
            $this->title = $title;
        }
        function setPublisher(string $publisher){
            $this->publisher = $publisher;
        }
        function setSales(float $sales){
            $this->sales = $sales;
        }
        function getTitle(){
            return $this->title;
        }
        function getPublisher(){
            return $this->publisher;
        }
        function getSales(){
            return $this->sales;
        }
        //Constructor
        function __construct(){
            $this->title = "";
            $this->publisher = "";
            $this->sales = "";
        }
    }
?>