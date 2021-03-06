<?php

include_once("conexion.php");

function validar(string $usuario, string $email, string $password, string $confirmacion): array
{
    if ($password !== $confirmacion) {
        throw new Exception("Las contraseñas no coinciden.");
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        throw new Exception("El email no es válido.");
    }
    if (validarEmail($email)) {
        throw new Exception("El email ya está siendo usado.");
    }
    return [
        'user' => $usuario,
        'email' => $email,
        'pass' => $password
    ];
}

function validarEmail(string $email)
{
    $conexion = getConexion();
    $sql = "SELECT COUNT(email) FROM usuarios WHERE email = :email";

    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam(':email', $email);
    $sentencia->setFetchMode(PDO::FETCH_ASSOC);
    $sentencia->execute();
    //da la cantidad de filas con esa columna = al email, si es 0, es que no hay
    return $sentencia->fetchColumn() > 0;
}

function registrar(array $datos)
{
    $sql = "INSERT INTO usuarios(nombre, email, password) VALUES (:user,:email,:pass)";
    $conexion = getConexion();
    $sentencia = $conexion->prepare($sql);

    $sentencia->bindParam(':email', $datos["email"]);
    $sentencia->bindParam(':user', $datos["user"]);
    $sentencia->bindParam(':pass', $datos["pass"]);

    $sentencia->execute();
}


try {
    $datosUsuario = validar($_POST["user"], $_POST["email"], $_POST["pass"], $_POST["pass2"]);
} catch (Exception $e) {
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION["error_registro"] = $e->getMessage();
    header('Location: login.php?tab=register');
}
try {
    registrar($datosUsuario);
} catch (Exception $e) {
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION["error_registro"] = $e->getMessage();
    header('Location: login.php?tab=register');
    die();
}
header('Location: login.php');
die();
