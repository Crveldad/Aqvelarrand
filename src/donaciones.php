<?php

declare(strict_types=1);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Aquelarrand - Donatio</title>
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
        <h1>Donaciones</h1>
        <p>Para que la página web siga activa es necesario un pequeño aporte.<br>
            Muchas gracias por colaborar.</p>
        <div class="donacion">
            <a href="https://www.paypal.com/donate/?business=PYHKBFYUJ8KZ8&no_recurring=0&item_name=Aquelarrand%3A+Generador+de+personajes&currency_code=EUR">
                <img src="img/aqfalero.jpg" width="1000px" alt="Falero"></a>
        </div>
    </div>

    <?php
    include_once("footer.php");
    ?>
</body>

</html>