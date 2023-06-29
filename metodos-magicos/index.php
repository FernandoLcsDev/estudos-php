<?php

    class C{
        public $x = 1;

        function __construct() { ++$this->x; } //2
        function __invoke() { return ++$this->x; }
        function __toString() { return (string) --$this->x; }
    }

    $obj = new C();// 2 (__construct)
    echo $obj(); // 3 (__invoke)

?>