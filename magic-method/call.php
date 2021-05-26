<!-- 
    1.when someone tring to access  private or non existing method then __call() method called automiticaly.
    2.__call($method,$arg) take two aru for showing this property name and value.
 -->

 <?php
    // class abc{
    //     private $name;
    //     private $age;

    //     private function hello(string $name, int $age){
    //         echo 'Name :'.$this->name = $name."<br>";
    //         echo 'Age :'.$this->age = $age."<br>";
    //     }

    //     public function __call($method,$arg){
    //         echo "This is not Exesting or Private Method : $method <br>";
    //         print_r($arg);
    //     }
    // }

    // $obj = new abc();
    // $obj->hello('Ashanur',45);//not accessable because of private method
    // $obj->personal();//not existing method
    
    //now i Will try to access private method by __call method

    class abc{
        private $name;
        private $age;

        private function hello(string $name,int $age){
            $this->name = $name;
            $this->age = $age;
        }

        public function __call($method,$args){
            if(method_exists($this,$method)){
                call_user_func_array([$this,$method],$args);
            }else{
                echo "This is Non Existing Method.";
            }
        }
    }

    $obj = new abc();
    $obj->hello('Ashanur',22);
    "<pre>";
    print_r($obj);
    "</pre>";
 
 ?>