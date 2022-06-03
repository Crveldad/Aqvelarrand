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
                    <li><a href="caracteristicas.php">Generador</a></li>
                    <li><a href="dados.html">Tiradas</a></li>
                    <li><a href="login.php">Acceso</a></li>
                    <li><a href="#">Contacto</a></li>
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
        <p>Esta es la ficha completa de tu personaje.<br> Si te ha gustado y quieres usarla, puedes guardarla o borrarla.<br> Recuerda que tienes que estar <a href="login.php">registrado</a> para almacenarla.</p>


        <div>

            <p> Nombre:</p>
            <p>Sexo:</p>
            <p>Reino:</p>
            <p> Pueblo:</p>
            <p> Sociedad:</p>
            <p> Posición social:</p>
            <p>Título:
            </p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>






            Profesión:
            Profesión paterna:
            Situación familiar:
            Número de hermanos:
            Hermanos:
            Hermanas:
            Posición de nacimiento:
        </div>


        <table class="ficha">
            <tr>
                <td>Nombre: </td>
                <td><?= $p1->nombre ?></td>

                <td>Sexo: </td>
                <?php
                if ($p1->getSexo() == "M") {
                ?>
                    <td>Masculino</td>
                <?php
                } else {
                ?>
                    <td>Femenino</td>
                <?php
                }
                ?>
            </tr>
            <tr>
                <td>Reino: </td>
                <td><?= $p1->reino ?></td>

                <td>Pueblo: </td>
                <td><?= $p1->getPueblo() ?></td>
            </tr>
            <tr>
                <td>Sociedad: </td>
                <td><?= $p1->sociedad ?></td>

                <td>Posición social: </td>
                <td><?= $p1->pSocial ?></td>
            </tr>
            <?php
            if ($p1->titulo != "") {
            ?><tr>

                    <td>Título: </td>
                    <td><?= $p1->titulo ?></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td>Profesión: </td>
                <td><?= $p1->profesion ?></td>
            </tr>
            <tr>
                <td>Profesión paterna: </td>
                <td><?= $p1->getProfesionPat() ?></td>
            </tr>
            <tr>
                <td>Situación familiar: </td>
                <td><?= $p1->getSitFamiliar() ?></td>
            </tr>
            <tr>
                <td>Cantidad de hermanos: </td>
                <td><?= $p1->getHermanos() ?></td>
            </tr>

            <?php
            if ($p1->getHermanos() > 0) {
            ?>
                <tr>
                    <td>Hermanos: </td>
                    <td><?= $p1->getVarones() ?></td>
                </tr>
                <tr>
                    <td>Hermanas: </td>
                    <td><?= $p1->getHembras() ?></td>
                </tr>
                <tr>
                    <td>Posición de nacimiento: </td>
                    <td><?= $p1->getPosicion() ?></td>
                </tr>
            <?php
            }
            ?>
        </table>

        <hr>

        <h2>Características</h2>
        <table>
            <tr>
                <td>FUErza: </td>
                <td><?= $p1->caracteristicas["FUE"] ?></td>
            </tr>
            <tr>
                <td>AGIlidad: </td>
                <td><?= $p1->caracteristicas["AGI"] ?></td>
            </tr>
            <tr>
                <td>HABilidad: </td>
                <td><?= $p1->caracteristicas["HAB"] ?></td>
            </tr>
            <tr>
                <td>RESistencia</td>
                <td><?= $p1->caracteristicas["RES"] ?></td>
            </tr>
            <tr>
                <td>PERcepción</td>
                <td><?= $p1->caracteristicas["PER"] ?></td>
            </tr>
            <tr>
                <td>COMunicación</td>
                <td><?= $p1->caracteristicas["COM"] ?></td>
            </tr>
            <tr>
                <td>CULtura</td>
                <td><?= $p1->caracteristicas["CUL"] ?></td>
            </tr>
        </table>

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
                <div class="footer-columna">
                    <h2>Aquelarre</h2>
                    <ul>
                        <li>
                            <a href="https://www.nosolorol.com/es/3-aquelarre%22%3ENosolorol">Nosolorol</a>
                        </li>
                        <li>
                            <a href=" https://www.facebook.com/groups/320854464591436%22%3EFacebook">Facebook</a>
                        </li>
                        <li>
                            <a href="https://es.wikipedia.org/wiki/Aquelarre_(juego_de_rol)%22%3EWikipedia">Wikipedia</a>
                        </li>
                    </ul>
                </div>
                <!--  -->
                <div class="footer-columna">
                    <img src="./img/aqblanco.svg" alt="Logo blanco svg vectorial" height="100">
                </div>
                <!--  -->
                <div class="footer-columna">
                    <h2>Enlaces</h2>
                    <ul>
                        <li>
                            <a href="#">Sobre mí</a>
                        </li>
                        <li>
                            <a href="#">Cookies</a>
                        </li>
                        <li>
                            <a href="#">Privacidad</a>
                        </li>
                    </ul>
                </div>
                <!--  -->

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