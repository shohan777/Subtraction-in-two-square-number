<?php

    $given = 1245789;
    $sum = 0;
    $i = 1;
    if ($given % 2 != 0) {
        while ($i <= $given) {
            $sum = $i+$i+1;
            if ($sum == $given) {
                echo "The numbers are: " . $i.' '.($i + 1);
            }
            $i++;
        }
    }else {
        echo "Your given number is false";
    }

$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

echo "<br>".$time;


?>