<?php
$link = mysqli_connect('localhost', 'root', '', 'clase4');

if (!$link) {
    echo '<pre>';
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    echo '</pre>';
    exit;
}
