<!-- what are traits 

PHP only supports single inheritance: a child class can inherit only from one single parent.

So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

Traits are declared with the trait keyword: -->

<?php
    trait hello{
        public function sayhello(){
            echo 'hello world <br>';
        }
    }

    trait bye{
        public function saybye(){
            echo 'bye bye  <br>';
        }
    }

    class child1{
        use hello,bye;

    }

    class child2{
        use hello,bye;
    }

    $obj = new child1();
    $obj->sayhello();
    $obj->saybye();

    $obj1 = new child2();
    $obj1->sayhello();
    $obj1->saybye();





?>