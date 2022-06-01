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
    <title>Aquelarrand - Creator</title>
</head>

<body>
    <nav class="nav affix">
        <div class="container">
            <div class="logo">
                <a href="index.html">Aquelarrand</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="caracteristicas.php">Generator</a></li>
                    <li><a href="dados.html">Dice roller</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">Contact</a></li>
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
        <p>Esta es la ficha completa de tu personaje.<br> Si te ha gustado y quieres usarla, puedes guardarla o borrarla.<br> Recuerda que tienes que estar <a href="#">registrado</a> para almacenarla.</p>

        <ul>
            <li>Nombre: <?= $p1->nombre ?></li>
            <?php
            if ($p1->getSexo() == "M") {
            ?>
                <li>Sexo: Masculino</li>
            <?php
            } else {
            ?>
                <li>Sexo: Femenino</li>
            <?php
            }
            ?>
            <li>Reino: <?= $p1->reino ?></li>
            <li>Pueblo: <?= $p1->getPueblo() ?></li>
            <li>Sociedad: <?= $p1->sociedad ?></li>
            <li>Posición social: <?= $p1->pSocial ?></li>
            <?php
            if ($p1->titulo != "") {
            ?>
                <li>Título: <?= $p1->titulo ?></li>
            <?php
            }
            ?>
            <li>Profesión: <?= $p1->profesion ?></li>
            <li>Profesión paterna: <?= $p1->getProfesionPat() ?></li>
            <li>Situación familiar: <?= $p1->getSitFamiliar() ?></li>
            <li>Hermanos: <?= $p1->getHermanos() ?></li>
            <?php
            if ($p1->getHermanos() > 0) {
            ?>
                <li>Número hermanos: <?= $p1->getVarones() ?></li>
                <li>Número hermanas: <?= $p1->getHembras() ?></li>
                <li>Posición de nacimiento: <?= $p1->getPosicion() ?></li>
            <?php
            }
            ?>
        </ul>
        <hr>
        <ul>
            <li>Aspecto: <?= $p1->aspecto ?></li>
            <li>Templanza: <?= $p1->templanza ?></li>
            <li>Edad: <?= $p1->edad ?> años</li>
            <li>Altura: <?= $p1->altura ?> varas</li>
            <li>Peso: <?= $p1->peso ?> libras</li>
            <li>Racionalidad: <?= $p1->racionalidad ?></li>
            <li>Irracionalidad: <?= $p1->irracionalidad ?></li>
            <li>Suerte: <?= $p1->getSuerte() ?></li>
        </ul>


        <footer>
        <div class="foot">
            <div class="foote">
                <div class="aquela">
                    <h2>Aquelarre</h2>
                    <ul>
                        <li><a href="https://www.nosolorol.com/es/3-aquelarre">Nosolorol</a></li>
                        <li><a href="https://www.facebook.com/groups/320854464591436">Facebook</a></li>
                        <li><a href="https://es.wikipedia.org/wiki/Aquelarre_(juego_de_rol)">Wikipedia</a></li>
                    </ul>
                </div>
                <div class="esevg">
                    <img src="./img/aqblanco.svg" alt="Logo blanco svg vectorial" height="100">
                </div>
                <div class="links">
                    <h2>Enlaces</h2>
                    <ul>
                        <li><a href="#">Sobre mí</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li><a href="#">Privacidad</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="er">
            <p>Alejandro Andreo Padilla<span>Copyright</span>©<span>2022</span>Aquelarrand</p>
        </div>
    </footer>
        <script type="text/javascript" src="js/paternas.js"></script>
        <script src="js/dados.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- <script src="js/estilo.js"></script> -->
</body>

</html>