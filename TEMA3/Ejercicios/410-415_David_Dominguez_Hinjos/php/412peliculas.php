<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: 410formInicioSesion.php?error=2');
    exit;
}
$peliculas = isset($_SESSION['peliculas']) ? $_SESSION['peliculas'] : [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="David Domínguez Hinjos">
    <link rel="stylesheet" href="../css/listas.css">
    <title>Peliculas</title>
</head>
<body>
    <div class="container">
        <h1>Peliculas</h1>
        <ul>
            <?php foreach ($peliculas as $peli): ?>
                <li><?php echo $peli; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="414series.php">Ir al menú de series</a>
        <p>Pulsa <a href="413logout.php">aquí</a> para salir</p>
    </div>
</body>
</html>