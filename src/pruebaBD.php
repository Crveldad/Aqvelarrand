<?php

declare(strict_types=1);

namespace src;

use PDO;
use PDOException;

include_once("Personaje.php");

if (!isset($_SESSION)) {
    session_start();
}

$p1 = $_SESSION['personaje'];

// MYSQL_DATABASE: aquelarrand
// MYSQL_USER: usuario
// MYSQL_PASSWORD: 1234
// MYSQL_ROOT_PASSWORD: 1234


$dsn = 'mysql:dbname=aquelarrand;host=127.0.0.1';
$usuario = 'usuario';
$contraseña = '1234';

try {
    $conexion = new PDO($dsn, $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
