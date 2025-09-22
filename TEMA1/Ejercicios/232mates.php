<?php
$array = [];
for ($i = 0; $i < 34 ; $i++) {
    $array[$i] = rand(0, 100);
}
sort($array);
$media = array_sum($array) / count($array);
echo "el menor es: " . $array[0] . "<br>";
echo "el mayor es: " . $array[33] . "<br>";
echo "la media es: " . $media;
?>