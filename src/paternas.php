<?php

declare(strict_types=1);

include_once("Personaje.php");

if (!isset($_SESSION)) {
    session_start();
}

$p1 = $_SESSION['personaje'];

$competencias = $_POST;

//le digo que los valores que no tenga, me los rellene con el mínimo de las Características
$competenciasTotales = competencias($p1->caracteristicas, $p1->getAspecto());
$armasTotales = armas($p1->caracteristicas);


$competenciasTotales = array_merge($competenciasTotales, $armasTotales);
ksort($competenciasTotales);

//actualizo los valores de las competencias
foreach ($competencias as $competencia => $valor) {
    $competencia = str_replace('_', ' ', $competencia);
    if (array_key_exists($competencia, $competenciasTotales)) {
        $competenciasTotales[$competencia] = $valor;
    }
}

$p1->competencias = $competenciasTotales;

$p1->sesion();

$total = 0;

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
        <h1>Competencias paternas</h1>
        <p>Introduce los puntos en las Competencias que te enseñó tu padre.<br> Tienes 25 puntos para gastar en total. La cantidad máxima es el valor de la Característica x5.<br> No puedes tener menos que las que ya te salen en la ficha inicial.</p>
        
        <form action="fichaPersonaje.php" method="post">
        <div class="tabla">
            <table>
                <tr>
                    <th colspan="1">
                        <?= $p1->getSexo() == 'M'
                            ? "Hijo de "
                            : "Hija de "; ?>
                    </th>
                    <th colspan="3"><?= $p1->getProfesionPat() ?></th>
                </tr>

                <?php
       foreach ($p1->getCompetenciasPat() as $competencias => $valor) {
        ?>
            <tr>
                <td><?= $competencias ?></td>
                <td class="bot">
                    <button type="button" onclick="restar('<?= $competencias ?>')">
                        <img src="img/minusb.png">
                    </button>
                </td>
                <td><input 
                    type="text" 
                    name="<?= $competencias ?>" 
                    class="pat"
                    id="<?= $competencias ?>" 
                    max="<?= competenciasMax($competencias, $p1->caracteristicas, $p1->getAspecto()) ?>" 
                    min="<?= $valor ?>" 
                    value="<?= $valor ?>">
                </td>
                <td class="bot">
                    <button type="button" onclick="sumar('<?= $competencias ?>')">
                        <img src="img/plusb.png">
                    </button>
                </td>
            </tr>
        <?php
        }
        ?>
                <tr>
                    <td colspan="1">Total</td>
                    <td colspan="1"><span id="total" class="tot"><?= $total ?></span>/25</td>
                    <td colspan="1">
                        <button>
                            <input type="image" img src="img/save.png">
                        </button>
                    </td>
                    <td colspan="1"></td>
                </tr>
            </table>
        </div>
        </form>

    </div>


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