<?php

$array = array(1, 1, 2, 3, 4, -1, 12, 12, -51, -51, -51);
$counter = 0;

for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] == $array[$j])
            $counter++;
    }
}
echo count($array) . "<br>";
echo $counter;
