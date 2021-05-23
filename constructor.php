<!-- constructor needs for call a method automitically.it's works when Instantiate a object  -->
<?php
    class Persion{
        public $name;
        //construct method
        function __construct($n){
            $this->name = $n;
        }
        //simple method
        function show(){
            echo "Your Name is ".$this->name;
        }
    }

    $obj = new Persion('Md Ashanaur Rahman');
    $obj->show();


?>
