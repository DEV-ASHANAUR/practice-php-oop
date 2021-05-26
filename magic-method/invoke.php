<!-- __invoke() method worked when we call a object as a function --- as like $obj(); -->

<?php
    class abc{
        public $a;
        public $b;
        public function __construct($a,$b){
            $this->a = $a; 
            $this->b = $b;
        }
        public function sum(){
            echo $this->a + $this->b;
        }
        public function __invoke(){
            echo $this->a + $this->b;
        }

    }
    $obj = new abc(20,25);
    $obj(); // this time run __invoke() method



?>