<?php
$i = 0;
$base = 3;
$exponente = 5;
$resultado = $base;
while ($i < $exponente) {
    $resultado = $resultado * $base;
    $i++;
}
echo "$resultado";
?>