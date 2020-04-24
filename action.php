<?php

function findMax($arr)
{
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($min > $arr[$value]) {
            $min = $arr[$value];
        }
    }
    return $min;
}

function findMin($arr)
{
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($max < $arr[$value]) {
            $max = $arr[$value];
        }
    }
    return $max;
}