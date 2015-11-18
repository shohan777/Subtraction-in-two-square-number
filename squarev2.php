<?php

    $given = 1245789;
    $sum = 0;
    $i = 1;
    if ($given % 2 != 0) {
        $res = floor($given / 2);
        echo "The numbers are: " . $res.' '. ($res+1);
    }else {
        echo "Your given number is false";
    }

    $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

    echo "<br>".$time;
 ?>