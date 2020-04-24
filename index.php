<?php
include_once 'action.php';

$arrNums = [];

for ($i = 0; $i < 100; $i++) {
    $arrNums[$i] = rand(1, 100);
}

foreach ($arrNums as $num) {
    echo $num . " ";
}

$maxValue = findMax($arrNums);
echo '<br>' . 'The maximum value is ' . $maxValue;

$minValue = findMin($arrNums);
echo '<br>' . 'The minimum value is ' . $minValue;