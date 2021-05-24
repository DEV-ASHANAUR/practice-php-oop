<?php
    trait hello{
        public function sayhello(){
            echo "hello from hello traits.\n";
        }
    }

    trait hi{
        private function sayhello(){
            echo "hello from hi traits.\n";
        }
    }

    // class base{
    //     use hello;
    // }
    // //when use same method two trait it's give error
    // class base{
    //     use hello,hi;
    // }
    //for solve this type of problem we call that same method differently

    class base{
        use hello,hi{
            hello::sayhello insteadOf hi;
            hi::sayhello as public newhello;
        }
    }

    $obj = new base();
    $obj->sayhello();
    $obj->newhello();

?>