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

    <?php
   include_once("footer.php");
   ?>
    <script type="text/javascript" src="js/caracteristicas.js"></script>
    <script src="js/dados.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/estilo.js"></script> -->
</body>

</html>