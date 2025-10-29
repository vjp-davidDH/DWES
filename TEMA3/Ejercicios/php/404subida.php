<?php
$carpetaDestino = "uploads/";
if (!is_dir($carpetaDestino)) {
    mkdir($carpetaDestino, 0755, true);
}
if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    $nombreArchivo = $_FILES['archivo']['name'];
    $archivoTemporal = $_FILES['archivo']['tmp_name'];
    $rutaDestino = $carpetaDestino . basename($nombreArchivo);
    if (move_uploaded_file($archivoTemporal, $rutaDestino)) {
        echo "Archivo subido correctamente a: " . $rutaDestino;
    } else {
        echo "Error al subir el archivo.";
    }
} else {
    echo "No se ha enviado ningún archivo o hubo un error en la subida.";
}
?>
