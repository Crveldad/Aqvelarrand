<?php

if (!isset($_SESSION)) {
    session_start();
}
include_once("conexion.php");

function login(string $email, string $password)
{
    $sql = "SELECT * FROM usuarios WHERE email = :email AND password = :password";

    $conexion = getConexion();
    $sentencia = $conexion->prepare($sql);

    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':password', $password);

    $sentencia->setFetchMode(PDO::FETCH_ASSOC);
    $sentencia->execute();
    return $sentencia->fetch();
}

try {
    $usuario = login($_POST["email"], $_POST["pass"]);
} catch (\Throwable $th) {
    $_SESSION["error_login"] = $th->getMessage();
    header('Location: login.php');
}
if (empty($usuario)) {
    $_SESSION["error_login"] = "El usuario no existe.";
    header('Location: login.php');
}


$_SESSION["usuario"] = $usuario;
header('Location: listado.php');