<?php 

    echo '1' . (print '2') + 3; // Ordem: (print '2') -> 2 | echo (print '2') -> 1 + 4 ==> 4 | Resultado: 214

    echo '</br>';

    $a = 3;
    switch ($a) {
        case 1: echo 'one'; break;
        case 2: echo 'two'; break;
        default: echo 'four'; break;
        case 3: echo 'three'; break;
    }//three

    echo '</br>';

    $a = 'a'; $b = 'b';
    echo isset($c) ? $a.$b.$c : ($c = 'c').'d'; // cd

    echo '</br>';

    echo "22" + "0.2", 23 . 1;// 22 + 0.2 = 22.2 | 23 . 1 = 231 | 22.2 . 231 => 22.2231

    echo '</br>';

    $first = "second";
    $second = "first";
    echo $$$first; // second

    echo '</br>';

    function z($x) {
        return function ($y) use ($x) {
            return str_repeat($y, $x);
        };
    }
    
    $a = z(2); // 22
    $b = z(3); // 333
    echo $a(3) . $b(5); // a(3) -> 22 => 33 | b(5) -> 333 => 555

    echo '</br>';

    class Base {
        protected static function whoami() {
            echo "Base ";
        }
        public static function whoareyou() {
            static::whoami();
        }
    }

    class A extends Base {
        public static function test() {
            Base::whoareyou();
            self::whoareyou();
            parent::whoareyou();
            A::whoareyou();
            static::whoareyou();
        }
        public static function whoami() {
            echo "A ";
        }
    }

    class B extends A {
        public static function whoami() {
            echo "B ";
        }
    }

    B::test(); // Base::whoareyou() -> Base | (B) self::whoareyou() -> B | parent::whoareyou() -> B | A::whoareyou() -> A | static::whoareyou() -> B

    echo '</br>';

    class Foo Implements ArrayAccess {
        function offsetExists($k) { return true;}
        function offsetGet($k) {return 'a';}
        function offsetSet($k, $v) {}
        function offsetUnset($k) {}
    }
    $x = new Foo();
    //echo array_key_exists('foo', $x)?'true':'false'; // false

    echo '</br>';

    class Bar {
        private $a = 'b';
        public $c = 'd';
    }
    $x = (array) new Bar();
    echo array_key_exists('a', $x) ? 'true' : 'false'; // false => a = PRIVATE
    echo '-';
    echo array_key_exists('c', $x) ? 'true' : 'false'; // true => c = PUBLIC

    echo '</br>';

    class C {
        public $ello = 'ello';
        public $c;
        public $m;
        function __construct($y) {
            $this->c = static function($f) {
            // INSERT LINE OF CODE HERE
            };
            $this->m = function() {
                return "h";
            };
        }
    }
    $x = new C("h");
    $f = $x->c;
    echo $f($x->m); // Para imprimir 'hello' deve incluir o código $f(). "ello"

    $text = 'This is text';
    $text1 = <<<'TEXT'
    $text
    TEXT;
    $text2 = <<<TEXT
    $text1
    TEXT;
    echo "$text2"; // $text
?>