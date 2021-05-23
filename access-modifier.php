<!-- Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

    public - the property or method can be accessed from everywhere. This is default
    protected - the property or method can be accessed within the class and by classes derived from that class
    private - the property or method can ONLY be accessed within the class -->

<!-- example 1     -->
<?php
    // class Fruit{
    //     public $name;
    //     protected $color;
    //     private $weight;
    // }

    // $obj = new Fruit();
    // $obj->name = "Mango"; //it's work fine
    // $obj->color = "yellow"; //it's give error
    // $obj->weight = 300; //it's give error


    //example 2

    class Fruit{
        public $name;
        public $color;
        public $weight;
        // a public method (default)
        function set_name($n){ 
            $this->name = $n;
        }
        // a protected method 
        protected function set_color($c){ 
            $this->color = $c;
        }
        // a private method 
        private function set_weight($w){ 
            $this->weight = $w;
        }
    }

    $obj = new Fruit();
    $obj->set_name('mango'); //it's work fine 
    // $obj->set_color('red'); //it's give error
    // $obj->set_weight(300); //it's give error


    
?>


