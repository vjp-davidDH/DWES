<?php
ini_set('display_errors', 1);
$carpetaDestino = "uploads/";
if (!is_dir($carpetaDestino)) {
    mkdir($carpetaDestino, 0755, true);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    $nombreArchivo = $_FILES['archivo']['name'];
    $archivoTemporal = $_FILES['archivo']['tmp_name'];
    $tipoArchivo = $_FILES['archivo']['type'];
    $tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($tipoArchivo, $tiposPermitidos)) {
        echo "Error: Solo se permiten imágenes JPEG, PNG o GIF.";
    } else {
        $rutaDestino = $carpetaDestino . basename($nombreArchivo);
        if (move_uploaded_file($archivoTemporal, $rutaDestino)) {
            echo "Imagen subida correctamente a: " . $rutaDestino;
        } else {
            echo "Error al subir la imagen.";
        }
    }
} else {
    echo "No se ha enviado ninguna imagen o hubo un error en la subida.";
}
?>