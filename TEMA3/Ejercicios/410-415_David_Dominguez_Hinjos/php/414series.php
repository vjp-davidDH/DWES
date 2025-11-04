<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: 410formInicioSesion.php?error=2');
    exit;
}
$series = isset($_SESSION['series']) ? $_SESSION['series'] : [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="David Domínguez Hinjos">
    <link rel="stylesheet" href="../css/listas.css">
    <title>Series</title>
</head>
<body>
    <div class="container">
        <h1>Series</h1>
        <ul>
            <?php foreach ($series as $serie): ?>
                <li><?php echo $serie; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="412peliculas.php">Volver al menú de peliculas</a>
        <p>Pulsa <a href="413logout.php">aquí</a> para salir</p>
    </div>
</body>
</html>