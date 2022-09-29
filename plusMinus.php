<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $pos_ratio = 0;
    $neg_ratio = 0;
    $zero_ratio = 0;
    $nr_pos = 0;
    $nr_neg = 0;
    $nr_zero = 0;
    foreach($arr as $v){
        if($v < 0){
            $nr_neg++;
        }elseif($v > 0){
            $nr_pos++;
        }else{
            $nr_zero++;
        }
    }
    $pos_ratio = number_format($nr_pos/count($arr), 6,'.','');
    $neg_ratio = number_format($nr_neg/count($arr), 6,'.','');
    $zero_ratio = number_format($nr_zero/count($arr), 6,'.','');
    echo $pos_ratio . "\n" . $neg_ratio . "\n" . $zero_ratio . "\n";
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);