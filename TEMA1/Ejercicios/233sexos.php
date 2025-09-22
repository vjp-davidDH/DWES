<?php
$array = [];
for ($i= 0; $i < 100; $i++) {
    $num = rand(0,1) ? "M" : "F";
    $array[] = $num;
}
print_r($array);
$conteo = array_count_values($array);
echo "M's hay: " . ($conteo["M"]) . "<br>";
echo "F's hay: " . ($conteo["F"]) . "<br>";
?>