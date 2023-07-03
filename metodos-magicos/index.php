<?php

    class C{
        public $x = 1;

        function __construct() { ++$this->x; } //2
        function __invoke() { return ++$this->x; }
        function __toString() { return (string) --$this->x; }
    }

    $obj = new C();// 2 (__construct)
    echo $obj(); // 3 (__invoke)

    class Test {
        public function __call($name, $args){
            call_user_func_array(array('static', "test$name"), $args);
        }

        public function testS($l) {
            echo "$l,";
        }
    }

    class Test2 extends Test {
        public function testS($l) {
            echo "$l,$l,";
        }
    }
    
    $test = new Test2();
    $test->S('A');// A,A => S não existe é chamado __call()
?>