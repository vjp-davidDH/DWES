<?php
$i = 0;
$base = 3;
$exponente = 5;
$resultado = $base;
do {
    $resultado = $resultado * $base;
    $i++;
} while ($i < $exponente);
echo "$resultado";
