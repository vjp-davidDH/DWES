<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['convivientes'] = $_POST['convivientes'] ?? '';
    $_SESSION['aficiones'] = $_POST['aficiones'] ?? [];
    $_SESSION['menu'] = $_POST['menu'] ?? '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen del formulario</title>
</head>
<body>
    <h2>Datos completos del formulario</h2>
    <ul>
        <li><strong>Nombre:</strong> <?= $_SESSION['nombre'] ?></li>
        <li><strong>Apellidos:</strong> <?= $_SESSION['apellidos'] ?></li>
        <li><strong>Email:</strong> <?= $_SESSION['email'] ?></li>
        <li><strong>URL:</strong> <?= $_SESSION['url'] ?></li>
        <li><strong>Sexo:</strong> <?= $_SESSION['sexo'] ?></li>
        <li><strong>Convivientes:</strong> <?= $_SESSION['convivientes'] ?></li>
        <li><strong>Aficiones:</strong>
            <ul>
                <?php foreach ($_SESSION['aficiones'] as $aficion): ?>
                    <li><?= $aficion ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li><strong>Menú preferido:</strong> <?= $_SESSION['menu'] ?></li>
    </ul>
</body>
</html>
