<?php

declare(strict_types=1);

include_once("Personaje.php");

if (!isset($_SESSION)) {
    session_start();
}

$p1 = $_SESSION['personaje'];

$caracteristicas = $_POST;

//actualizo los valores de las características para que haga los cálculos de las competencias
foreach ($caracteristicas as $caracteristica => $valor) {
    $caracteristica = strtoupper($caracteristica);
    if (array_key_exists($caracteristica, $p1->caracteristicas)) {
        $p1->caracteristicas[$caracteristica] = $valor;
    }
}

$p1->competencias = competenciasPj($p1->caracteristicas, $p1->profesion, $p1->getAspecto(), $p1->getSexo());
$p1->armas = armasPj($p1->caracteristicas, $p1->profesion, $p1->getSexo());
$p1->setSuerte(suerte($p1->caracteristicas));
$p1->setPeso(peso((int)$p1->caracteristicas["FUE"]));
$p1->setAltura(altura($p1->caracteristicas));

$total = 0;

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
        <h1>Selecciona las Competencias</h1>
        <p>Introduce los puntos en Competencias para tu personaje.<br> Tienes 100 puntos para gastar en total. La cantidad máxima es el valor de la Característica x5.<br> No puedes tener menos que las que ya te salen en la ficha inicial.</p>
        
        <form action="paternas.php" method="post">
        <div class="tabla">
            <table>
                <tr>
                    <th colspan="1"><?= $p1->nombre ?></th>
                    <th colspan="3"><?= $p1->profesion ?></th>
                </tr>

                <?php
        foreach ($p1->getCompetenciasTotales() as $competencias => $valor) {
        ?>
            <tr>
                <td><?= $competencias ?></td>
                <td class="bot">
                    <button type="button" onclick="restar('<?= $competencias ?>')">
                        <img src="img/minusb.png">
                    </button>
                </td>
                <td><input type="text" 
                name="<?= $competencias ?>" 
                class="com" id="<?= $competencias ?>" 
                max="<?= competenciasMax($competencias, $p1->caracteristicas, $p1->getAspecto()) ?>"
                min="<?= $valor ?>" 
                value="<?= $valor ?>"
                >
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
                    <td colspan="1"><span id="total" class="tot"><?= $total ?></span>/100</td>
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
    <div class="vacio"></div>

    <pre>
    <?php
    var_dump($p1->competencias);
    ?>
    </pre>

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
    <script type="text/javascript" src="js/competencias.js"></script>
    <script src="js/dados.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/estilo.js"></script> -->
</body>

</html>