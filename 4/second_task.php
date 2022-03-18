<?php
$array = array(11, 1, 2, 3, 4, -1, 12, 12, -51, -51, -51);
$counter = 0;
$max_count = 0;

for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $array[$i - 1])
        $counter++;
    else
        $counter = 0;
    $max_count = max($max_count, $counter);
}

echo $max_count;