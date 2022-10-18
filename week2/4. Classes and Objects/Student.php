<?php
    //Define a class Student
    class Student extends Person{
        private $studentId;
        // Methods
        function setStudentId(string $studentId){
            $this->studentId = $studentId;
        }
        function getStudentId(){
            return $this->studentId;
        }
        // Constructor
        function __construct(){
            $this->name = "";
            $this->age = 0;
            $this->studentId = 0;
        }
    }
?>