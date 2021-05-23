<!-- Interfaces allow you to specify what methods a class should implement.

Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

Interfaces are declared with the interface keyword: -->

<!-- interface vs abstract class -->
<!-- Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

    1.Interfaces cannot have properties, while abstract classes can
    2.All interface methods must be public, while abstract class methods is public or protected
    3.All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
    4.Classes can implement an interface while inheriting from another class at the same time 
-->

<!-- using interface -->

<!-- To implement an interface, a class must use the implements keyword.

A class that implements an interface must implement all of the interface's methods. -->

<?php
    interface parent1{
        function add($a,$b);
    }
    interface parent2{
        function sub($c,$d);
    }

    class child implements parent1,parent2{
        function add($a,$b){
            return $a + $b;
        }
        function sub($c,$d){
            return $c - $d;
        }
    }

    $obj = new child();
    echo $obj->add(45,28).'<br>';
    echo $obj->sub(45,28);

?>
