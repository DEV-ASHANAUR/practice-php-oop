    <!-- 
    1.when someone tring to access  private static method or non existing private static method then __callStatic() method called automiticaly.
    2.__callStatic($method,$arg) take two aru for showing this property name and value.
 -->


<?php

    // class abc{
    //     private static function hello(){
    //         echo "This is Static private hello function";
    //     }
            //// static must given this time
    //     public static function __callStatic($method,$args){
    //         echo "This is Non Existing or private static method: $method";
    //     }
    // }

    // abc::hello();//not accessable


    // now tring to access this below way

    class abc{
        private static function hello(){
            echo "This is private static hello function";
        }
        // static must given this time
        public static function __callStatic($method,$args){
            if(method_exists(__CLASS__,$method)){
                call_user_func_array([__CLASS__,$method],$args);
            }else{
                echo "This is Non Existing static method";
            }
        }
    }

    abc::hello();






?>