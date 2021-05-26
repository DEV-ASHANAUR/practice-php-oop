<?php
    class abc{

        public function __toString(){
            return "Can't Print object as a string of class: ". get_class($this);
        }

    }

    
    $obj = new abc();
    
    echo $obj;// when we tring to show obj result by echo we get a error ,, for solve this and set custom error message we use __tostring() method

?>