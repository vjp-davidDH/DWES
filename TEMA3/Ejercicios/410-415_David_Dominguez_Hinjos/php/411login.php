<?php
session_start();
$usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';
if ($usuario === 'admin' && $password === 'admin') {
    $_SESSION['usuario'] = $usuario;

    $_SESSION['peliculas'] = [
        'El Padrino',
        'Spider-Man',
        'El Señor de los Anillos',
        'Baywatch: Los vigilantes de la playa',
        'Fast & Furious 9'
    ];

    $_SESSION['series'] = [
        'Breaking Bad',
        'Juego de Tronos',
        'Better Call Saul',
        'Stranger Things',
        'Peaky Blinders'
    ];
    header('Location: 412peliculas.php');
    exit;
} else {
    header('Location: 410formInicioSesion.php?error=1');
    exit;
}
?>
