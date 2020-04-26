<?php

function findMax($arr)
{
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($min > $value) {
            $min = $value;
        }
    }
    return $min;
}

function findMin($arr)
{
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($max < $value) {
            $max = $value;
        }
    }
    return $max;
}