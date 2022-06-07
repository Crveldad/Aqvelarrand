<?php

declare(strict_types=1);


include_once("Personaje.php");

if (!isset($_SESSION)) {
    session_start();
}

$p1 = $_SESSION['personaje'];
$competencias = $_POST;


foreach ($competencias as $competencia => $valor) {
    $competencia = str_replace('_', ' ', $competencia);
    if (array_key_exists($competencia, $p1->competencias)) {
        $p1->competencias[$competencia] = $valor;
    }
}


$p1->actualizarArmas();
$p1->ingresos = ingresos($p1);
rasgosOpe($p1);
$p1->actualizarArmas();
$p1->sesion();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Aquelarrand - Persona</title>
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
        <h1>Ficha de personaje</h1>

        <div class="ficha">
            <div class="descripcion">
                <div class="ficha1">
                    <p><span>Nombre:</span> <?= $p1->nombre ?></p>
                    <p><span>Reino:</span> <?= $p1->reino ?></p>
                    <p><span>Posición social: </span><?= $p1->pSocial ?>
                        <?php
                        if ($p1->titulo != "") {
                        ?>
                            (<?= $p1->titulo ?>)</p>
                <?php
                        }
                ?>
                </p>
                <p><span>Profesión:</span> <?= $p1->profesion ?></p>

                </div>
                <div class="ficha2">
                    <p><span>Sexo:</span><?php
                                            if ($p1->getSexo() == "M") {
                                            ?> Masculino
                        <?php
                                            } else {
                        ?>
                            Femenino
                        <?php
                                            }
                        ?></p>
                    <p><span>Pueblo:</span> <?= $p1->getPueblo() ?></p>
                    <p><span>Sociedad:</span> <?= $p1->sociedad ?></p>
                    <p><span>Profesión paterna:</span> <?= $p1->getProfesionPat() ?></p>
                </div>
            </div>

            <h2>Situación familiar</h2>

            <div class="familiar">
                <p><?= $p1->getSitFamiliar() ?></p>
                <p><span>Número de hermanos:</span> <?= $p1->getHermanos() ?></p>
                <?php
                if ($p1->getHermanos() > 0) {
                ?>
                    <p><span>Hermanos:</span> <?= $p1->getVarones() ?></p>
                    <p><span>Hermanas:</span> <?= $p1->getHembras() ?></p>
                    <p><span>Posición de nacimiento:</span> <?= $p1->getPosicion() ?></p>
                <?php
                }
                ?>
            </div>

            <h2>Características</h2>

            <div class="caracteristicas">

                <div class="car_primarias">
                    <p><span>FUErza: </span><?= $p1->caracteristicas["FUE"] ?></p>
                    <p><span>AGIlidad: </span><?= $p1->caracteristicas["AGI"] ?></p>
                    <p><span>HABilidad: </span><?= $p1->caracteristicas["HAB"] ?></p>
                    <p><span>RESistencia: </span><?= $p1->caracteristicas["RES"] ?></p>
                    <p><span>PERcepción: </span><?= $p1->caracteristicas["PER"] ?></p>
                    <p><span>COMunicación: </span><?= $p1->caracteristicas["COM"] ?></p>
                    <p><span>CULtura: </span><?= $p1->caracteristicas["CUL"] ?></p>
                </div>

                <div class="car_secundarias">
                    <p><span>ASPecto: </span><?= $p1->aspecto ?></p>
                    <p><span>Templanza: </span><?= $p1->templanza ?></p>
                    <p><span>Edad: </span><?= $p1->edad ?> años</p>
                    <p><span>Altura: </span><?= $p1->altura ?> varas</p>
                    <p><span>Peso: </span><?= $p1->peso ?> libras</p>
                    <p><span>Racionalidad: </span><?= $p1->racionalidad ?></p>
                    <p><span>Irracionalidad: </span><?= $p1->irracionalidad ?></p>
                    <p><span>Suerte: </span><?= $p1->getSuerte() ?></p>
                </div>
            </div>

            <h2>Armas</h2>

            <div class="armas">

                <div class="armas1">
                    <p><span>Arcos (PER): </span><?= $p1->competencias["Arcos"] ?></p>
                    <p><span>Ballestas (PER): </span><?= $p1->competencias["Ballestas"] ?></p>
                    <p><span>Cuchillos (HAB): </span><?= $p1->competencias["Cuchillos"] ?></p>
                    <p><span>Escudos (HAB): </span><?= $p1->competencias["Escudos"] ?></p>
                    <p><span>Espadas (HAB): </span><?= $p1->competencias["Espadas"] ?></p>
                    <p><span>Espadones (FUE): </span><?= $p1->competencias["Espadones"] ?></p>
                </div>

                <div class="armas2">
                    <p><span>Hachas (FUE): </span><?= $p1->competencias["Hachas"] ?></p>
                    <p><span>Hondas (PER): </span><?= $p1->competencias["Hondas"] ?></p>
                    <p><span>Lanzas (AGI): </span><?= $p1->competencias["Lanzas"] ?></p>
                    <p><span>Mazas (FUE): </span><?= $p1->competencias["Mazas"] ?></p>
                    <p><span>Palos (AGI): </span><?= $p1->competencias["Palos"] ?></p>
                    <p><span>Pelea (AGI): </span><?= $p1->competencias["Pelea"] ?></p>
                </div>
            </div>

            <h2>Competencias</h2>

            <div class="competencias">
                <div class="competencias1">
                    <p><span>Alquimia (CUL): </span><?= $p1->competencias["Alquimia"] ?></p>
                    <p><span>Artesanía (HAB): </span><?= $p1->competencias["Artesanía"] ?></p>
                    <p><span>Astrología (CUL): </span><?= $p1->competencias["Astrología"] ?></p>
                    <p><span>Cabalgar (AGI): </span><?= $p1->competencias["Cabalgar"] ?></p>
                    <p><span>Cantar (COM): </span><?= $p1->competencias["Cantar"] ?></p>
                    <p><span>Comerciar (COM): </span><?= $p1->competencias["Comerciar"] ?></p>
                    <p><span>Conducir Carro (HAB): </span><?= $p1->competencias["Conducir Carro"] ?></p>
                    <p><span>Conocimiento Animal (CUL): </span><?= $p1->competencias["Conocimiento Animal"] ?></p>
                    <p><span>Conocimiento de Área (CUL): </span><?= $p1->competencias["Conocimiento de Área"] ?></p>
                    <p><span>Conocimiento Mágico (CUL): </span><?= $p1->competencias["Conocimiento Mágico"] ?></p>
                    <p><span>Conocimiento Mineral (CUL): </span><?= $p1->competencias["Conocimiento Mineral"] ?></p>
                    <p><span>Conocimiento Vegetal (CUL): </span><?= $p1->competencias["Conocimiento Vegetal"] ?></p>
                    <p><span>Correr (AGI): </span><?= $p1->competencias["Correr"] ?></p>
                    <p><span>Corte (COM): </span><?= $p1->competencias["Corte"] ?></p>
                    <p><span>Degustar (PER): </span><?= $p1->competencias["Degustar"] ?></p>
                    <p><span>Descubrir (PER): </span><?= $p1->competencias["Descubrir"] ?></p>
                    <p><span>Disfrazarse (COM): </span><?= $p1->competencias["Disfrazarse"] ?></p>
                    <p><span>Elocuencia (COM): </span><?= $p1->competencias["Elocuencia"] ?></p>
                    <p><span>Empatía (PER): </span><?= $p1->competencias["Empatía"] ?></p>
                    <p><span>Enseñar (COM): </span><?= $p1->competencias["Enseñar"] ?></p>
                    <p><span>Escamotear (HAB): </span><?= $p1->competencias["Escamotear"] ?></p>
                    <p><span>Escuchar (PER): </span><?= $p1->competencias["Escuchar"] ?></p>
                </div>
                <div class="competencias2">
                    <p><span>Esquivar (AGI): </span><?= $p1->competencias["Esquivar"] ?></p>
                    <p><span>Forzar Mecanismos (HAB): </span><?= $p1->competencias["Forzar Mecanismos"] ?></p>
                    <p><span>Idioma (CUL): </span><?= $p1->competencias["Idioma"] ?></p>
                    <?php
                    if ($p1->competencias["Idioma()"] > 0) {
                    ?>
                        <p><span>Idioma(Extra) (CUL):</span> <?= $p1->competencias["Idioma()"] ?></p>
                    <?php
                    }
                    ?>
                    <?php
                    if ($p1->competencias["Idioma(Árabe)"] > 0) {
                    ?>
                        <p><span>Idioma(Árabe) (CUL):</span> <?= $p1->competencias["Idioma(Árabe)"] ?></p>
                    <?php
                    }
                    ?>
                    <?php
                    if ($p1->competencias["Idioma(Griego)"] > 0) {
                    ?>
                        <p><span>Idioma(Griego) (CUL):</span> <?= $p1->competencias["Idioma(Griego)"] ?></p>
                    <?php
                    }
                    ?>
                    <?php
                    if ($p1->competencias["Idioma(Hebreo)"] > 0) {
                    ?>
                        <p><span>Idioma(Hebreo) (CUL):</span> <?= $p1->competencias["Idioma(Hebreo)"] ?></p>
                    <?php
                    }
                    ?>
                    <?php
                    if ($p1->competencias["Idioma(Latín)"] > 0) {
                    ?>
                        <p><span>Idioma(Latín) (CUL):</span> <?= $p1->competencias["Idioma(Latín)"] ?></p>
                    <?php
                    }
                    ?>
                    <p><span>Juego (HAB): </span><?= $p1->competencias["Juego"] ?></p>
                    <p><span>Lanzar (AGI): </span><?= $p1->competencias["Lanzar"] ?></p>
                    <p><span>Leer y Escribir (CUL): </span><?= $p1->competencias["Leer y Escribir"] ?></p>
                    <p><span>Leyendas (CUL): </span><?= $p1->competencias["Leyendas"] ?></p>
                    <p><span>Mando (COM): </span><?= $p1->competencias["Mando"] ?></p>
                    <p><span>Medicina (CUL): </span><?= $p1->competencias["Medicina"] ?></p>
                    <p><span>Memoria (PER): </span><?= $p1->competencias["Memoria"] ?></p>
                    <p><span>Música (CUL): </span><?= $p1->competencias["Música"] ?></p>
                    <p><span>Nadar (AGI): </span><?= $p1->competencias["Nadar"] ?></p>
                    <p><span>Navegar (HAB): </span><?= $p1->competencias["Navegar"] ?></p>
                    <p><span>Ocultar (HAB): </span><?= $p1->competencias["Ocultar"] ?></p>
                    <p><span>Rastrear (PER): </span><?= $p1->competencias["Rastrear"] ?></p>
                    <p><span>Saltar (AGI): </span><?= $p1->competencias["Saltar"] ?></p>
                    <p><span>Sanar (HAB): </span><?= $p1->competencias["Sanar"] ?></p>
                    <p><span>Seducción (ASP): </span><?= $p1->competencias["Seducción"] ?></p>
                    <p><span>Sigilo (AGI): </span><?= $p1->competencias["Sigilo"] ?></p>
                    <p><span>Teología (CUL): </span><?= $p1->competencias["Teología"] ?></p>
                    <p><span>Tormento (HAB): </span><?= $p1->competencias["Tormento"] ?></p>
                    <p><span>Trepar (AGI): </span><?= $p1->competencias["Trepar"] ?></p>
                </div>
            </div>

            <h2>Rasgos de Carácter</h2>
            <div class="rasgos">
                <p><?= $p1->rasgos[0] ?></p>
                <p><?= $p1->rasgos[1] ?></p>
                <p><?= $p1->rasgos[2] ?></p>
                <p><?= $p1->rasgos[3] ?></p>
            </div>
            <h2>Otros</h2>
            <div class="otros">
                <?php
                if ($p1->getEnfermedad() != "") {
                ?>
                    <p><span>El personaje padece de la enfermedad:</span> <?= $p1->getEnfermedad() ?></p>
                <?php
                }
                ?>
                <p><span>Ingresos mensuales: </span><?= $p1->ingresos ?> maravedíes</p>
            </div>
            <div class="guard">
                <a href="index.php"><button>
                        <input type="image" img src="img/back.png">
                    </button></a>
                <a href="guardarFicha.php"><button>
                            <input type="image" img src="img/save.png">
                        </button></a>
            </div>
        </div>
    </div>



    <?php
    include_once("footer.php");
    ?>

    <script type="text/javascript" src="js/paternas.js"></script>
    <script src="js/dados.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/estilo.js"></script> -->
</body>

</html>