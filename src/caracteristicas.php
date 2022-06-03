<?php

declare(strict_types=1);

include_once("Personaje.php");

if (!isset($_SESSION)) {
    session_start();
}

$p1 = crearPersonaje();

//Reduce iterativamente un array a un solo valor usando una función llamada de retorno
$total = array_reduce($p1->caracteristicas, function ($total, $valor) {
    return $total + $valor;
    //el 0 es el número en el que empieza
}, 0);

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
        <h1>Selecciona las Características</h1>
        <p>Introduce los puntos en Características para tu personaje.<br> Tienes 100 puntos para gastar en total. La cantidad máxima es 20.<br> No puedes tener menos que las que ya te salen en la ficha inicial.</p>
        
        <form action="competencias.php" method="post">
        <div class="tabla">
            <table>
                <tr>
                    <th colspan="1"><?= $p1->nombre ?></th>
                    <th colspan="3"><?= $p1->profesion ?></th>
                </tr>
                <tr>
                    <td>FUErza</td>
                    <td class="bot">
                        <button type="button" onclick="restar('fue')">
                            <img src="img/minusb.png">
                        </button>
                    </td>
                    <td><input 
                        type="text" 
                        class="car" 
                        name="fue" 
                        id="fue" 
                        max=20 
                        min=<?= $p1->caracteristicas["FUE"] ?> 
                        value=<?= $p1->caracteristicas["FUE"] ?>
                        ></td>
                    <td class="bot">
                        <button type="button" onclick="sumar('fue')">
                           <img src="img/plusb.png">
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>AGIlidad</td>
                    <td class="bot">
                        <button type="button" onclick="restar('agi')">
                            <img src="img/minusb.png">
                        </button>
                    </td>
                    <td><input 
                        type="text" 
                        class="car" 
                        name="agi" 
                        id="agi" 
                        max=20 
                        min=<?= $p1->caracteristicas["AGI"] ?> 
                        value=<?= $p1->caracteristicas["AGI"] ?>
                        ></td>
                    <td class="bot">
                        <button type="button" onclick="sumar('agi')">
                            <img src="img/plusb.png">
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>HABilidad</td>
                    <td class="bot">
                        <button type="button" onclick="restar('hab')">
                            <img src="img/minusb.png">
                        </button>
                    </td>
                    <td><input 
                        type="text" 
                        class="car" 
                        name="hab" 
                        id="hab" 
                        max=20 
                        min=<?= $p1->caracteristicas["HAB"] ?> 
                        value=<?= $p1->caracteristicas["HAB"] ?>
                        ></td>
                    <td class="bot">
                        <button type="button" onclick="sumar('hab')">
                            <img src="img/plusb.png">
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RESistencia</td>
                    <td class="bot">
                        <button type="button" onclick="restar('res')">
                            <img src="img/minusb.png">
                        </button>
                    </td>
                    <td><input 
                        type="text" 
                        class="car" 
                        name="res" 
                        id="res" 
                        max=20 
                        min=<?= $p1->caracteristicas["RES"] ?> 
                        value=<?= $p1->caracteristicas["RES"] ?>
                        ></td>
                    <td class="bot">
                        <button type="button" onclick="sumar('res')">
                            <img src="img/plusb.png">
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PERcepción</td>
                    <td class="bot">
                        <button type="button" onclick="restar('per')">
                            <img src="img/minusb.png">
                        </button>
                    </td>
                    <td><input 
                        type="text" 
                        class="car" 
                        name="per" 
                        id="per" 
                        max=20 
                        min=<?= $p1->caracteristicas["PER"] ?> 
                        value=<?= $p1->caracteristicas["PER"] ?>
                        ></td>
                    <td class="bot">
                        <button type="button" onclick="sumar('per')">
                            <img src="img/plusb.png">
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>COMunicación</td>
                    <td class="bot">
                        <button type="button" onclick="restar('com')">
                            <img src="img/minusb.png">
                        </button>
                    </td>
                    <td><input 
                        type="text" 
                        class="car" 
                        name="com" 
                        id="com" 
                        max=20 
                        min=<?= $p1->caracteristicas["COM"] ?> 
                        value=<?= $p1->caracteristicas["COM"] ?>
                        ></td>
                    <td class="bot">
                        <button type="button" onclick="sumar('com')">
                            <img src="img/plusb.png">
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>CULtura</td>
                    <td class="bot">
                        <button type="button" onclick="restar('cul')">
                            <img src="img/minusb.png">
                        </button>
                    </td>
                    <td><input 
                        type="text" 
                        class="car" 
                        name="cul" 
                        id="cul" 
                        max=20 
                        min=<?= $p1->caracteristicas["CUL"] ?> 
                        value=<?= $p1->caracteristicas["CUL"] ?>
                        ></td>
                    <td class="bot">
                        <button type="button" onclick="sumar('cul')">
                            <img src="img/plusb.png">
                        </button>
                    </td>
                </tr>

                <tr>
                    <td colspan="1">Total</td>
                    <td colspan="1"><span id="total" class="total"><?= $total ?></span>/100</td>
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

        <div class="vacio3"></div>
    </div>


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
    <script type="text/javascript" src="js/caracteristicas.js"></script>
    <script src="js/dados.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/estilo.js"></script> -->
</body>

</html>