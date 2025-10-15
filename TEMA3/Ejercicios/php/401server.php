<?php
echo "<h2>Información del servidor y de la petición</h2>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<h2>GET</h2>";
print_r($_GET);
echo "<h2>POST</h2>";
print_r($_POST);
?>