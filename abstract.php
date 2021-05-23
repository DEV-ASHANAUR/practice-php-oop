<!-- Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

An abstract class or method is defined with the abstract keyword: -->

<!-- rule for define a child class -->
<!-- So, when a child class is inherited from an abstract class, we have the following rules:

    The child class method must be defined with the same name and it redeclares the parent abstract method
    The child class method must be defined with the same or a less restricted access modifier
    The number of required arguments must be the same. However, the child class may have optional arguments in addition -->

<?php
    abstract class parentClass{
        public $name;
        //difine abstract method
        abstract protected function calc($a,$b);
    }

    class childClass Extends parentClass{
        //the method arg can be different name
        public function calc($a,$b)
        {
            return $a + $b;
        }
        
    }

    $obj = new childClass();
    echo $obj->calc(50,25);


?>