<?php
    //Define a class Student
    class Student extends Person{
        private $studentId;
        // Methods
        function setStudentId(string $studentId): void{
            $this->studentId = $studentId;
        }
        function getStudentId(): string{
            return $this->studentId;
        }
        // Constructor
        function __construct(){
            Person::__construct(); // call Person constructor
            $this->studentId = 0;
        }
    }
?>