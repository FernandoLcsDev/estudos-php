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
    
    $a = z(2);
    $b = z(3);
    echo $a(3) . $b(5);
?>