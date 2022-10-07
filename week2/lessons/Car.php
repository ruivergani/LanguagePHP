<?php
    class Car{
        // Access Modifiers
        private $model; // in general it should be declared as private
        protected $version;
        public $color;

        private const COLOUR = 'Black'; // constant is a property that can not be changed

        // Creating Methods
        public function setModel(string $model){
            $this->model = $model; 
            // this: refers to the object's model property
            // $model refers to the parameter variable
        }
        public function createFordFiesta(){
            $this->setModel('Fiesta');
        }

        // Constructor
        public function __construct(){
            $this->model = 'A3';
        }

    }



?>