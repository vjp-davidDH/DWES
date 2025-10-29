<?php
session_start();
ini_set('display_errors', 1);
$colores = [
    "Blanco" => "#ffffff",
    "Rojo" => "#ff0000",
    "Verde" => "#00ff00",
    "Azul" => "#0000ff",
    "Amarillo" => "#ffff00",
    "Naranja" => "#ffa500",
    "Gris" => "#cccccc",
    "Negro" => "#000000"
];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    $colorSeleccionado = $_POST['color'];
    if (in_array($colorSeleccionado, $colores)) {
        $_SESSION['colorFondo'] = $colorSeleccionado;
    }
}
$colorFondo = $_SESSION['colorFondo'] ?? "#ffffff";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>408fondoSesion1</title>
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
        <h2>Selecciona un color de fondo</h2>
        <form method="POST" action="">
            <label for="color">Color:</label>
            <select name="color" id="color">
                <?php foreach ($colores as $nombre => $valor): ?>
                    <option value="<?= $valor ?>" <?= ($valor === $colorFondo) ? 'selected' : '' ?>>
                        <?= $nombre ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Cambiar color</button>
        </form>
        <br>
        <a href="408fondoSesion2.php">Ir a la siguiente página</a>
    </div>
</body>
</html>
