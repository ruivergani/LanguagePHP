<?php
    // Define a class Person
    class Person{
        // Properties
        private $name;
        private $age;

        //Methods
        function setName(string $firstName, string $lastName) {
            $this->name = $firstName . ' ' . $lastName;
        }
        function setAge(int $age){
            $this->age = $age;
        }
        function getName(){
            return $this->name;
        }
        function getAge(){
            return $this->age;
        }
        //Constructor
        function __construct($name, $age){
            $this->name = "";
            $this->age = 0;
        }
    }
?>