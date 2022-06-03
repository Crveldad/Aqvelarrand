<?php

function getConexion(): PDO
{
    static $conexion = null;

    if ($conexion === null) {

        //el host ha de ser el número del contenedor de docker
        $dsn = 'mysql:dbname=aquelarrand;host=25a5d6be5eb1';
        $usuario = 'root';
        $contraseña = '1234';

        $conexion = new PDO($dsn, $usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return $conexion;
}
