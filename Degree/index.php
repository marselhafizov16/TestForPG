<?php

function degree($n) {
    $num = $n;
    $res = log($n, 2);
    // var_dump($res);
    // var_dump(is_int($res));
    if ($res - floor($res) == 0) {
        return "Число является степенью числа 2";
    } else {
        return "Число не является степенью числа 2";
    }
}
echo degree(16);