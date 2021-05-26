<!-- 
    1.when someone tring to access private or non existing property then __get() method called automiticaly.
    2.__get($pro) take one aru for showing this property name.
 -->

<?php
 class abc{
     private $name = "Ashanur";
     public function hello(){
         echo $this->name;
     }
     public function __get($property){
        echo "This is private or non Existing property($property)";
     }
 }
 $obj = new abc();
 $obj->name;



?>