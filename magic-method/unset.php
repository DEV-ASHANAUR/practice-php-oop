<?php
    class abc{
        public $name = 'ashanur';
        private $age;
        private $roll;

        public function hello($age,$roll){
            $this->age = $age;
            $this->roll = $roll;
        }

        public function __unset($property){
            unset($this->$property);
        }
    }

    $obj = new abc();
    // unset($obj->name);
    // echo $obj->name; // for public property name we can eassly unset 
    
    $obj->hello(22,52);
    // print_r($obj); // check 

    unset($obj->age); // give fatel error because of private property. but using __unset method we can essly unset this private property
    print_r($obj); 













?>