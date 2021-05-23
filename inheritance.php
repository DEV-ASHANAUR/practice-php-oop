<!-- Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword.

Let's look at an example: -->

<?php
    //base class
    class Fruit{
        public $name;
        public $color;

        public function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "The Fruit is {$this->name} And The Color is {$this->color}.";
        }
    }
    //Strawbwerry inherited from Fruit Class
    //drived class
    class Strawberry Extends Fruit{
        public function message(){
            echo "Am i a Fruit or A Berry ? ";
        }
    }

    $obj = new Strawberry('Strawberry','red');
    $obj->message();
    $obj->intro();


?>

