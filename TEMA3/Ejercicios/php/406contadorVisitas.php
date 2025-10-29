<?php
ini_set('display_errors', 1);
$nombreCookie = "contadorVisitas";
$tipoMensaje = 'info';
$reiniciar = isset($_GET['reiniciar']);
if ($reiniciar) {
    setcookie($nombreCookie, '', time() - 3600);
    $contador = 1;
    echo "Contador reiniciado. Esta es tu primera visita.";
    $tipoMensaje = 'success';
    setcookie($nombreCookie, $contador, time() + 365*24*60*60);
} else {
    if (isset($_COOKIE[$nombreCookie])) {
        $contador = $_COOKIE[$nombreCookie] + 1;
        echo "Bienvenido de nuevo. Esta es tu visita número $contador.";
        $tipoMensaje = 'info';
    } else {
        $contador = 1;
        echo "Bienvenido. Esta es tu primera visita.";
        $tipoMensaje = 'success';
    }
    setcookie($nombreCookie, $contador, time() + 365*24*60*60);
}