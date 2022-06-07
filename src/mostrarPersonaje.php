<?php

declare(strict_types=1);

if (!isset($_SESSION)) {
    session_start();
}
include_once("Personaje.php");
include("conexion.php");


if (isset($_GET["id"])) {
    try {
        $sql = "SELECT * 
            FROM personajes p
            JOIN competencias c ON  p.id = c.personaje_id
            WHERE p.id = :personaje_id";

        $conexion = getConexion();
        $sentencia = $conexion->prepare($sql);

        $personaje_id = $_GET["id"];
        $sentencia->bindParam(':personaje_id', $personaje_id);

        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();

        $personaje = $sentencia->fetch();

        // echo "Id: " . $personaje["id"] . "<br />";
        // echo "Nombre: " . $personaje["nombre"] . "<br />";
        // echo "Profesión: " . $personaje["profesion"] . "<br />";
        // echo "Cuchillos: " . $personaje["cuchillos"] . "<br />";

        // echo "<pre>";
        // var_dump($personaje);
        // die();
    } catch (\Throwable $th) {
        echo "Ha ocurrido un error." . $th->getMessage();
    }
} else {
    $_SESSION["error_login"] = "Debes estar logueado o es otra cosa.";
    header('Location: login.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Aquelarrand - <?= $personaje["nombre"] ?></title>
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
        <h1>Detalle del personaje</h1>

        <div class="ficha">
            <div class="descripcion">
                <div class="ficha1">
                    <p><span>Nombre:</span> <?= $personaje["nombre"] ?></p>
                    <p><span>Reino:</span> <?= $personaje["reino"] ?></p>
                    <p><span>Posición social: </span><?= $personaje["posicion_social"] ?>
                        <?php
                        if ($personaje["titulo"] != "") {
                        ?>
                            (<?= $personaje["titulo"] ?>)</p>
                <?php
                        }
                ?>
                </p>
                <p><span>Profesión:</span> <?= $personaje["profesion"] ?></p>

                </div>
                <div class="ficha2">
                    <p><span>Sexo:</span><?php
                                            if ($personaje["sexo"] == "M") {
                                            ?> Masculino
                        <?php
                                            } else {
                        ?>
                            Femenino
                        <?php
                                            }
                        ?></p>
                    <p><span>Pueblo:</span> <?= $personaje["pueblo"] ?></p>
                    <p><span>Sociedad:</span> <?= $personaje["sociedad"] ?></p>
                    <p><span>Profesión paterna:</span> <?= $personaje["profesion_paterna"] ?></p>
                </div>
            </div>

            <h2>Situación familiar</h2>

            <div class="familiar">
                <p><?= $personaje["situacion_familiar"] ?></p>
                <p><span>Número de hermanos:</span> <?= $personaje["hermanos"] ?></p>
                <?php
                if ($personaje["hermanos"] > 0) {
                ?>
                    <p><span>Hermanos:</span> <?= $personaje["hermanos_varones"] ?></p>
                    <p><span>Hermanas:</span> <?= $personaje["hermanos_hembras"] ?></p>
                    <p><span>Posición de nacimiento:</span> <?= $personaje["posicion_nacimiento"] ?></p>
                <?php
                }
                ?>
            </div>

            <h2>Características</h2>

            <div class="caracteristicas">

                <div class="car_primarias">
                    <p><span>FUErza: </span><?= $personaje["fuerza"] ?></p>
                    <p><span>AGIlidad: </span><?= $personaje["agilidad"] ?></p>
                    <p><span>HABilidad: </span><?= $personaje["habilidad"] ?></p>
                    <p><span>RESistencia: </span><?= $personaje["resistencia"] ?></p>
                    <p><span>PERcepción: </span><?= $personaje["percepcion"] ?></p>
                    <p><span>COMunicación: </span><?= $personaje["comunicacion"] ?></p>
                    <p><span>CULtura: </span><?= $personaje["cultura"] ?></p>
                </div>

                <div class="car_secundarias">
                    <p><span>ASPecto: </span><?= $personaje["aspecto"] ?></p>
                    <p><span>Templanza: </span><?= $personaje["templanza"] ?></p>
                    <p><span>Edad: </span><?= $personaje["edad"] ?> años</p>
                    <p><span>Altura: </span><?= $personaje["altura"] ?> varas</p>
                    <p><span>Peso: </span><?= $personaje["peso"] ?> libras</p>
                    <p><span>Racionalidad: </span><?= $personaje["racionalidad"] ?></p>
                    <p><span>Irracionalidad: </span><?= $personaje["irracionalidad"] ?></p>
                    <p><span>Suerte: </span><?= $personaje["suerte"] ?></p>
                </div>
            </div>

            <h2>Armas</h2>

            <div class="armas">

                <div class="armas1">
                    <p><span>Arcos (PER): </span><?= $personaje["arcos"] ?></p>
                    <p><span>Ballestas (PER): </span><?= $personaje["ballestas"] ?></p>
                    <p><span>Cuchillos (HAB): </span><?= $personaje["cuchillos"] ?></p>
                    <p><span>Escudos (HAB): </span><?= $personaje["escudos"] ?></p>
                    <p><span>Espadas (HAB): </span><?= $personaje["espadas"] ?></p>
                    <p><span>Espadones (FUE): </span><?= $personaje["espadones"] ?></p>
                </div>

                <div class="armas2">
                    <p><span>Hachas (FUE): </span><?= $personaje["hachas"] ?></p>
                    <p><span>Hondas (PER): </span><?= $personaje["hondas"] ?></p>
                    <p><span>Lanzas (AGI): </span><?= $personaje["lanzas"] ?></p>
                    <p><span>Mazas (FUE): </span><?= $personaje["mazas"] ?></p>
                    <p><span>Palos (AGI): </span><?= $personaje["palos"] ?></p>
                    <p><span>Pelea (AGI): </span><?= $personaje["pelea"] ?></p>
                </div>
            </div>

            <h2>Competencias</h2>

            <div class="competencias">
                <div class="competencias1">
                    <p><span>Alquimia (CUL): </span><?= $personaje["alquimia"] ?></p>
                    <p><span>Artesanía (HAB): </span><?= $personaje["artesania"] ?></p>
                    <p><span>Astrología (CUL): </span><?= $personaje["astrologia"] ?></p>
                    <p><span>Cabalgar (AGI): </span><?= $personaje["cabalgar"] ?></p>
                    <p><span>Cantar (COM): </span><?= $personaje["cantar"] ?></p>
                    <p><span>Comerciar (COM): </span><?= $personaje["comerciar"] ?></p>
                    <p><span>Conducir Carro (HAB): </span><?= $personaje["conducir_carro"] ?></p>
                    <p><span>Conocimiento Animal (CUL): </span><?= $personaje["conocimiento_animal"] ?></p>
                    <p><span>Conocimiento de Área (CUL): </span><?= $personaje["conocimiento_de_area"] ?></p>
                    <p><span>Conocimiento Mágico (CUL): </span><?= $personaje["conocimiento_magico"] ?></p>
                    <p><span>Conocimiento Mineral (CUL): </span><?= $personaje["conocimiento_mineral"] ?></p>
                    <p><span>Conocimiento Vegetal (CUL): </span><?= $personaje["conocimiento_vegetal"] ?></p>
                    <p><span>Correr (AGI): </span><?= $personaje["correr"] ?></p>
                    <p><span>Corte (COM): </span><?= $personaje["corte"] ?></p>
                    <p><span>Degustar (PER): </span><?= $personaje["degustar"] ?></p>
                    <p><span>Descubrir (PER): </span><?= $personaje["descubrir"] ?></p>
                    <p><span>Disfrazarse (COM): </span><?= $personaje["disfrazarse"] ?></p>
                    <p><span>Elocuencia (COM): </span><?= $personaje["elocuencia"] ?></p>
                    <p><span>Empatía (PER): </span><?= $personaje["empatia"] ?></p>
                    <p><span>Enseñar (COM): </span><?= $personaje["ensenar"] ?></p>
                    <p><span>Escamotear (HAB): </span><?= $personaje["escamotear"] ?></p>
                    <p><span>Escuchar (PER): </span><?= $personaje["escuchar"] ?></p>
                </div>
                <div class="competencias2">
                    <p><span>Esquivar (AGI): </span><?= $personaje["esquivar"] ?></p>
                    <p><span>Forzar Mecanismos (HAB): </span><?= $personaje["forzar_mecanismos"] ?></p>
                    <p><span>Idioma (CUL): </span><?= $personaje["idioma"] ?></p>
                    <?php
                    if ($personaje["idioma_"] > 0) {
                    ?>
                        <p><span>Idioma(Extra) (CUL):</span> <?= $personaje["idioma_"] ?></p>
                    <?php
                    }
                    ?>
                    <?php
                    if ($personaje["idioma_arabe"] > 0) {
                    ?>
                        <p><span>Idioma(Árabe) (CUL):</span> <?= $personaje["idioma_arabe"] ?></p>
                    <?php
                    }
                    ?>
                    <?php
                    if ($personaje["idioma_griego"] > 0) {
                    ?>
                        <p><span>Idioma(Griego) (CUL):</span> <?= $personaje["idioma_griego"] ?></p>
                    <?php
                    }
                    ?>
                    <?php
                    if ($personaje["idioma_hebreo"] > 0) {
                    ?>
                        <p><span>Idioma(Hebreo) (CUL):</span> <?= $personaje["idioma_hebreo"] ?></p>
                    <?php
                    }
                    ?>
                    <?php
                    if ($personaje["idioma_latin"] > 0) {
                    ?>
                        <p><span>Idioma(Latín) (CUL):</span> <?= $personaje["idioma_latin"] ?></p>
                    <?php
                    }
                    ?>
                    <p><span>Juego (HAB): </span><?= $personaje["juego"] ?></p>
                    <p><span>Lanzar (AGI): </span><?= $personaje["lanzar"] ?></p>
                    <p><span>Leer y Escribir (CUL): </span><?= $personaje["leer_y_escribir"] ?></p>
                    <p><span>Leyendas (CUL): </span><?= $personaje["leyendas"] ?></p>
                    <p><span>Mando (COM): </span><?= $personaje["mando"] ?></p>
                    <p><span>Medicina (CUL): </span><?= $personaje["medicina"] ?></p>
                    <p><span>Memoria (PER): </span><?= $personaje["memoria"] ?></p>
                    <p><span>Música (CUL): </span><?= $personaje["musica"] ?></p>
                    <p><span>Nadar (AGI): </span><?= $personaje["nadar"] ?></p>
                    <p><span>Navegar (HAB): </span><?= $personaje["navegar"] ?></p>
                    <p><span>Ocultar (HAB): </span><?= $personaje["ocultar"] ?></p>
                    <p><span>Rastrear (PER): </span><?= $personaje["rastrear"] ?></p>
                    <p><span>Saltar (AGI): </span><?= $personaje["saltar"] ?></p>
                    <p><span>Sanar (HAB): </span><?= $personaje["sanar"] ?></p>
                    <p><span>Seducción (ASP): </span><?= $personaje["seduccion"] ?></p>
                    <p><span>Sigilo (AGI): </span><?= $personaje["sigilo"] ?></p>
                    <p><span>Teología (CUL): </span><?= $personaje["teologia"] ?></p>
                    <p><span>Tormento (HAB): </span><?= $personaje["tormento"] ?></p>
                    <p><span>Trepar (AGI): </span><?= $personaje["trepar"] ?></p>
                </div>
            </div>

            <h2>Rasgos de Carácter</h2>
            <div class="rasgos">
                <p><?= $personaje["rasgo_1"] ?></p>
                <p><?= $personaje["rasgo_2"] ?></p>
                <p><?= $personaje["rasgo_3"] ?></p>
                <p><?= $personaje["rasgo_4"] ?></p>
            </div>
            <h2>Otros</h2>
            <div class="otros">
                <?php
                if ($personaje["enfermedad"] != "") {
                ?>
                    <p><span>El personaje padece de la enfermedad:</span> <?= $personaje["enfermedad"] ?></p>
                <?php
                }
                ?>
                <p><span>Ingresos mensuales: </span><?= $personaje["ingresos"] ?> maravedíes</p>
            </div>
        </div>
    </div>

    <?php
    include_once("footer.php");
    ?>
</body>

</html>