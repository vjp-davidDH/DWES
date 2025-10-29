<?php
session_start();
ini_set('display_errors', 1);
if (isset($_GET['reset']) && $_GET['reset'] === '1') {
    session_unset();
    session_destroy();
    header("Location: 408fondoSesion1.php");
    exit();
}
$colorFondo = $_SESSION['colorFondo'] ?? "#ffffff";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>408fondoSesion2</title>
    <style>
        body {
            background-color: <?= $colorFondo ?>;
            font-family: sans-serif;
        }
        .container {
            margin: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Color de fondo actual</h2>
        <p>El color de fondo es: <strong><?= $colorFondo ?></strong></p>
        <a href="408fondoSesion1.php">Volver a la página anterior</a><br><br>
        <a href="408fondoSesion2.php?reset=1">Vaciar sesión y volver</a>
    </div>
</body>
</html>
