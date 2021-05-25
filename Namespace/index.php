<?php
    require 'product.php';
    require 'test.php';

    function wow(){
        echo "This is product wow<br>";
    }
    // use shortly
    use pro\v1\command as pro;

    $obj = new pro\product();
    // $obj1 = new pro\product();

    wow(); //run index file 
    pro\wow(); //run product.php file

?>