<?php

header("Content-Type: text/plain; charset=utf-8");

$array = [];
$counter = 0;

for ($i = 1; $i<=100; $i++) {
    array_push($array, rand(-100, 100));
}

print_r($array);

for ($i = 0; $i < count($array) - 1; $i++){
    if ($array[$i] == $array[$i+1]){
        $counter += 1;
    }
}

echo "Количество парных элементов: ".$counter;

?>