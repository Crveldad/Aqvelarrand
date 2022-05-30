<?php

declare(strict_types=1);

namespace src;

use mysqli;
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

// "SERVIDOR", "USUARIO", "CONTRASEÑA", "BASE DE DATOS"
$conexion = mysqli_connect("15409d32fff6","usuario","1234","aquelarrand");

// COMPROBAMOS LA CONEXIÓN
if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

echo "<h1>Bienvenid@ a MySQL !!</h1>";


// $dsn = 'mysql:dbname=aquelarrand;host=127.0.0.1';
// $usuario = 'usuario';
// $contraseña = '1234';

// try {
//     $conexion = new PDO($dsn, $usuario, $contraseña);
//     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo 'Falló la conexión: ' . $e->getMessage();
// }
