<?php
$base = 3;
$exponente = 5;
$resultado = $base;
for ($i = 0; $i < $exponente; $i++) {
    $resultado = $resultado * $base;
}
echo "$resultado";
?>