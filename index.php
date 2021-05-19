<?php
$arr = [0, 0, 7, 5, 3, 7, 3, 54, 6, 3, 4, 2, 7, 3, 4, 7, 3, 4, 6, 3, 5, 6];

$value = 3;

function countValueinArr(array $arr, $value)
{
    static $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($value == $arr[$i]) {
            $count++;
        }
    }
    return $count;
}
echo countValueinArr($arr,3);