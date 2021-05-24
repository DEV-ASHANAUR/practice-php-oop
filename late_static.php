<?php
    // class personal{
    //     public static $name = "Ashanur";

    //     public function show(){
    //         echo self::$name;
    //     }
    // }
    // class account Extends personal{
    //     public static $name = "Md Ashanur Rahman";
    // }

    //$obj = new personal();
    //$obj->show();//result is Ashanur

    // $obj = new account();
    // $obj->show();//again result is Ashanur  
    
    class personal{
        public static $name = "Ashanur";

        public function show(){
            echo static::$name; //for static keyword problem is solved
        }
    }
    class account Extends personal{
        public static $name = "Md Ashanur Rahman";
    }
    $obj = new personal();
    $obj->show();// result is Ashanur

    $obj = new account();
    $obj->show();// result is Md Ashanur Rahman

?>