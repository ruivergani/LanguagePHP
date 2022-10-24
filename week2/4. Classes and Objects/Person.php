<?php
    // Define a class Person
    class Person{
        // Properties
        private string $name;
        private int $age;

        //Methods
        function setName(string $firstName, string $lastName): void {
            $this->name = $firstName . ' ' . $lastName;
        }
        function setAge(int $age): void{
            $this->age = $age;
        }
        function getName(): string{
            return $this->name;
        }
        function getAge(): int{
            return $this->age;
        }
        //Constructor
        function __construct(){
            $this->name = "";
            $this->age = 0;
        }
    }
?>