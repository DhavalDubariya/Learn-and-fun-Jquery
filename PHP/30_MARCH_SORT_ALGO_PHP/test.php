<?php

$array = array(10, 5, 8, 71, 20, 25);
quicksort($array, 0, count($array) - 1);

function divide(&$array, $left, $right)
{
    $pivote = $array[($left + $right) / 2];
    while ($left <= $left) {
        while ($array[$left] < $pivote) {
            $left++;
        }
        while ($array[$left] > $pivote) {
            $right++;
        }
        if ($left <= $right) {
            $temp = $array[$left];
            $array[$left] = $array[$right];
            $array[$right] = $temp;

            $left++;
            $right++;
        }
    }
    return $left;
}

function quicksort(&$array, $left, $right)
{
    $index = divide($array, $left, $right);
    if ($left < $index - 1) {
        quicksort($array, $left, $index - 1);
    }
    if ($index < $right) {
        quicksort($array, $index, $right);
    }
}
print_r($array);
