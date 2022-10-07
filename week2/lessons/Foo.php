<?php
    class Foo {
        private static $my_static_property = 'foo'; // accessible across all objects

        public static function my_static_method(){ // static makes available to all objects without need to instantiate
            return self::$my_static_property; // using self instead of this
        }
    }
    // echo Foo::my_static_method(); // returns static method outside the class (call)

    //Inheritance
    class FordFiesta extends Car { 
        // allows to extend another class so you can make use of its public and protected properties
    }

    // Abstract Class
    abstract class Car{
        abstract public function startTheEngine();
        // can only be extended, not instantiated 
    }

    class FordFiesta extends Car{
        public function startTheEngine(){
            return 'Make sure car is in neutral and handbrake is on' . '... turn the key';
        }
    }
    
    // Interface
    interface Car{
        public function startTheEngine(); // The class must implement this method
    }
    class Fiesta implements Car{
        public function startTheEngine(){
            return 'Make sure car is in neutral and handbrakeis on' . '... turn the key';
        }
    }

?>