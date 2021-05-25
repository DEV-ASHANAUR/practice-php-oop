<!-- PHP TYPE HINTING -->

    <!-- As PHP is a loosely typed language, there is no need to specify a data type for variable declaration, function declaration or anywhere. But, using PHP5, we can specify the data type that is passed as arguments of PHP functions. This capability is called as type hinting. -->

<!-- Advantages of PHP Type Hinting -->


    <!-- 
    1.Using PHP type hinting, we can know the expected argument type of the function at the time of maintenance.
    2.Function declaration and usage would be obvious once the code is handover to another developer.
    3.Type hinting in PHP makes the code useful for some future reference. 
    -->
<?php
    // function sum($a){
    //     echo $a + 10;
    // }
    // // sum(10); // it's works
    // sum("hello"); //it's give error in line of 15

    // for solve this problem we can use type hinting like this

    // function sum(int $a){
    //     echo $a + 10;
    // }
    // // sum(10);
    // sum('hello'); // it also give error but prevent unnecessary time westing.

    // let's see another example
    // function fruits(array $names){
    //     foreach($names as $name){
    //         echo $name.'<br>';
    //     }
    // }
    // // $test = ['mango','apple','lichi']; 
    // $test = 'mango'; // it's give error at the beggining of the function
    // fruits($test);

    // let's see another example in oop

    // class hello{
    //     public function sayhello(){
    //         echo "hello Everyone";
    //     }
    // }
    // class bye{
    //     public function saybye(){
    //         echo "bye Everyone";
    //     }
    // }
    // function wow(hello $c){
    //     $c->sayhello();
    // }

    // // $obj = new bye();

    // // wow($obj); // give error wow() must be an instance of hello 

    // $obj = new hello();

    // wow($obj); // now working 

    // let's see real example

    class school{
        public function getNames(student $names){
            foreach($names->names() as $name){
                echo $name.'<br>';
            }
        }
    }
    class student{
        public function names(){
            return ['rahim','karim','jamal'];
        }
    }

    class library{

    }

    
    $stu = new student();
    $lib = new library();
    $sch = new school(); 
    // $sch->getNames($lib);//it's give fatel error without type hinting
    // $sch->getNames($lib);//it's give getNames() must be an instance of student, by type hinting
    $sch->getNames($stu);//it's working



?>    
