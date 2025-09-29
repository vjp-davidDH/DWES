<?php
$cadena = "Hola Mundo";
function sacarImpares(string $cadena) {
    $letras = "";
    for ($i = 0; $i < strlen($cadena); $i++) {
        if ($i % 2 === 1) {
            $letras .= $cadena[$i];
        }
    }
    return $letras;
}

echo sacarImpares($cadena);
?>     