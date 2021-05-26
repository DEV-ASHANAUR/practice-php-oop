<!-- 
    1.when someone tring to access and set private or non existing property value then __set() method called automiticaly.
    2.__set($pro,$val) take two aru for showing this property name and value.
 -->

<?php
    class abc{
        private $name;

        public function __get($property){
            echo "This is private or non Existing property($property)";
        }
        public function __set($property,$value){
            echo "This is private or non Existing property($property) and value ($value)";
        }

    }

    $obj = new abc();
    $obj->name = "Ashanur";




?>