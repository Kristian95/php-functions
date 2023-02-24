<?php

$array =  [ [1, 2, 3], [4, 5, 6], [7, 8, 9, 10, 12] ];

filterEventNumbers($array);

function filterEventNumbers($array): array
{
    $returnArray = [];
    foreach ($array as $index => $data) {
        foreach ($data as $key => $value) {
            if ($value % 2 === 0) {
                $returnArray[$index][] = $value;
            }
        }
    }

    return $returnArray;
}
