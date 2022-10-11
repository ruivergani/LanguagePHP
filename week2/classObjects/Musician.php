<?php
    class Musician{
        // Properties
        private $name;
        private $dOb;

        //Methods
        function setName(string $name) {
            $this->name = $name;
        }
        function setDateOfBirth(string $dOb){
            $this->dOb = $dOb;
        }
        function getName(){
            return $this->name;
        }
        function getDateOfBirth(){
            return $this->dOb;
        }
    }

?>