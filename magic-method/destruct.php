<!-- A destructor is called when the object is destructed or the script is stopped or exited.

If you create a __destruct() function, PHP will automatically call this function at the end of the script.

Notice that the destruct function starts with two underscores (__)!

The example below has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script: -->


<?php
    class abc{
        private $con;
        public function __construct(){
            echo $this->con = 'db connected <br>';
        }
        public function insertdata(){
            echo 'data inserted <br>';
        }
        public function __destruct(){
            echo $this->con = 'dis connected <br>';
        }
    }
    $obj = new abc();
    $obj->insertdata();
?>