<?php

declare(strict_types=1);
if (!isset($_SESSION)) {
    session_start();
}

include_once("Personaje.php");
include("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Aquelarrand - Litany</title>
</head>

<body>
    <nav class="nav affix">
        <div class="container">
            <div class="logo">
                <a href="index.php">Aquelarrand</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="caracteristicas.php">Generador</a></li>
                    <li><a href="dados.php">Tiradas</a></li>
                    <li><a href="login.php">Acceso</a></li>
                    <li><a href="mailto:crveldad@hotmail.com">Contacto</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <div class="contenedor">
        <div class="vacio"></div>
        <h1>Listado de tus personajes</h1>
        <p>Bienvenido a tu listado de personajes.<br>
            Ve a la sección <a href="caracteristicas.php">Generador</a> para crear los tuyos.<br>
            Desde aquí podrás acceder a cada uno de ellos pinchando en "Mostrar personaje".</p>
        <?php
        if (isset($_SESSION["error_login"])) {
            echo $_SESSION["error_login"];
        }
        if (isset($_SESSION["usuario"])) {
            try {
                $sql = "SELECT * 
                            FROM personajes p
                            JOIN competencias c ON  p.id = c.personaje_id
                            WHERE p.usuario_id = :usuario_id";

                $conexion = getConexion();
                $sentencia = $conexion->prepare($sql);

                $usuario_id = $_SESSION["usuario"]["id"];
                $sentencia->bindParam(':usuario_id', $usuario_id);

                $sentencia->setFetchMode(PDO::FETCH_ASSOC);
                $sentencia->execute();

                $personajes = $sentencia->fetchAll();

                foreach ($personajes as $personaje) {
                    $personaje_id = $personaje["personaje_id"];
                    echo "<div class='ficha'>";
                    echo "<p>Nombre: " . $personaje["nombre"] . "</p>";
                    echo "<p>Posición social: " . $personaje["posicion_social"] . "</p>";
                    echo "<p>Profesión: " . $personaje["profesion"] . "</p>";
                    echo "<a href='mostrarPersonaje.php?id=$personaje_id'>Mostrar personaje<br /><br /></a>";
                    echo "</div>";
                }

                echo "<div class='error'><a href='logout.php'>Desconectar</a></div>";
            } catch (\Throwable $th) {
                echo "Ha ocurrido un error." . $th->getMessage();
            }
        } else {
            $_SESSION["error_login"] = "Debes estar logueado o es otra cosa.";
            header('Location: login.php');
            die();
        }
        ?>
       
        <div class="guard">
            <img src="img/personajes.gif" height="735" alt="Personajes">
        </div>
    </div>

    <?php
    include_once("footer.php");
    ?>
</body>

</html>