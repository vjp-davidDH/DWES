<?php

function esPar(int $num) {
    return ($num % 2 === 0) ? "Es par: " : "Es impar: ";
}

function arrayAleatorio(int $min, int $max) {
    $tam = rand($min, $max);
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

function arrayPares(array $array) {
    for ($i = 0; $i < count($array); $i++) {
        echo esPar($array[$i]) . $array[$i] . "<br>";
    }
}

$array = arrayAleatorio(0, 12);
arrayPares($array);
?>