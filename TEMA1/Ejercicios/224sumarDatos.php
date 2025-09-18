<?php
$cantidad = $_GET["numero"];
$numero = $_GET["num"];
$resultado = 0;
for ($i = 0; $i < $cantidad; $i++) {
    $resultado = $numero + $numero;
}
echo "$resultado";
?>