<?php
    // require 'class/first.php';
    // require 'class/second.php';
    //manual magic mathod 
    // function __autoload($class){
    //     require "class/" .$class. ".php";
    // }
    //use spl_autoload_register
    spl_autoload_register(
        function ($class){
            require "class/" .$class. ".php";
        }
    );
    $obj = new first();
    $obj1 = new second();

?>