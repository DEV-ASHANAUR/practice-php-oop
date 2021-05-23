<?php
    class base{
        public $name = 'parrent class';

        public function calc($a,$b){
            return $a+$b;
        }
    }

    class drived Extends base{
        public $name = 'child class';

        public function calc($a,$b){
            return $a*$b;
        }
    }

    // $obj = new base();
    // echo $obj->name;
    // echo $obj->calc(78,65);

    $obj = new drived();
    echo $obj->name;
    echo $obj->calc(78,65);


   



?>