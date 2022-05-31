<?php

declare(strict_types=1);



$dsn = 'mysql:dbname=aquelarrand;host=25a5d6be5eb1';
$usuario = 'root';
$contraseña = '1234';

try {
    $conexion = new PDO($dsn, $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM usuarios";

    $sentencia = $conexion->prepare($sql);
    $sentencia->setFetchMode(PDO::FETCH_ASSOC);
    $sentencia->execute();


    //así accedo a las  columnas mediante un array asociativo
    $usuarios = $sentencia->fetchAll();

    foreach ($usuarios as $usuario) {
        echo "Codigo:" . $usuario["id"] . "<br />";
        echo "Nombre:" . $usuario["nombre"] . "<br />";
    }
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
