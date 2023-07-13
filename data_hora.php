<?php

    // Comparação de datas
    $date1 = new DateTime('2014-02-03');
    $date2 = new DateTime('2014-03-02');

    echo $date2 > $date1;
    echo $date2 < $date1;

    echo '</br>';

    // DateTime em formato '2014-01-01 00:00:01'
    echo $datetime->format('Y-m-d H:i:s');

?>