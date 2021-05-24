<!-- Static properties can be called directly - without creating an instance of a class.

Static properties are declared with the static keyword: -->

<?php
    //example 1
    // class personal{
    //     public static $name = 'Md Ashanaur Rahman';

    //     public static function show(){
    //         echo self::$name;
    //     }
    // }
    // personal::show();

    //example 2 how to use static parent class propertise to the child class

    class personal{
        public static $name ="Md Ashanaur Rahman";
    }
    class account Extends personal{
        public function show(){
            echo parent::$name;
        }
    }
    $obj = new account();
    $obj->show();
?>