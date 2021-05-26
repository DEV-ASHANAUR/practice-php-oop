<?php
    class abc{
        public $name;
        private $roll;
        private $age;

        public function hello($roll,$age){
            $this->roll = $roll;
            $this->age = $age;
        }
        // use for check private property isset or not
        public function __isset($property){
            echo isset($this->$property);
        }

    }

    $obj = new abc();

    // $obj->name = 'ashanur';
    // echo isset($obj->name); //result is 1 because the name property is fill by value

    $obj->hello(45,22);

    echo isset($obj->roll);


?>