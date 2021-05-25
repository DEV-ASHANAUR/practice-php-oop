<?php
    class abc{
        public function first(){
            echo 'This is First Function <br>';
            return $this;
        }
        public function secound(){
            echo 'This is secound Function <br>';
            return $this;
        }
        public function third(){
            echo 'This is third Function <br>';
            return $this;
        }
    }

    $obj = new abc();
    // it's call method chainning
    $obj->first()->secound()->third();


?>