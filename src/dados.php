<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Aquelarrand - Hydriam</title>
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
        <h1>Lanza los dados</h1>
        <p>Aquelarre utiliza dados de cuatro, seis, ocho y diez caras, especialmente de estos últimos.<br> La mayor parte de los valores que se utilizan en el juego se expresan en porcentajes,<br>lo que permite medir en una escala del 1 al 100 lo bueno que
            se es en una determinada Competencia.
        </p>

        <div class="dados">
            <div class="d4" onclick="d4Roll()"></div>
            <div class="d6" onclick="d6Roll()"></div>
            <div class="d8" onclick="d8Roll()"></div>
            <div class="d10" onclick="d10Roll()"></div>
            <div class="d100" onclick="d100Roll()"></div>
        </div>
        <div class="result">
            <div id="display"></div>
        </div>
    </div>
    <div class="vacio2"></div>

    <?php
   include_once("footer.php");
   ?>
   
    <script src="js/dados.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/estilo.js"></script> -->
</body>

</html>