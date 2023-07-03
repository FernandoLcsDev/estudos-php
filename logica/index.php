<?php 

    echo '1' . (print '2') + 3; // 214

    $a = 3;
    switch ($a) {
        case 1: echo 'one'; break;
        case 2: echo 'two'; break;
        default: echo 'four'; break;
        case 3: echo 'three'; break;
    }//three

    $a = 'a'; $b = 'b';
    echo isset($c) ? $a.$b.$c : ($c = 'c').'d'; // cd

    echo "22" + "0.2", 23 . 1;// 22 + 0.2 = 22.2 | 23 . 1 = 231 | 22.2 . 231 => 22.2231

    $first = "second";
    $second = "first";
    echo $$$first; // second

?>