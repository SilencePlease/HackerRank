<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    sort($arr);
    $minSumArray = 0;
    $maxSumArray = 0;
    for($i = 0;$i <= count($arr) - 2; $i++){
        $minSumArray += $arr[$i];
    }
    for($i = 1;$i <= count($arr) - 1; $i++){
        $maxSumArray += $arr[$i];
    }
    
    echo $minSumArray . ' ' . $maxSumArray;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);