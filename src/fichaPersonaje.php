<?php

declare(strict_types=1);

namespace src;

include_once("Personaje.php");

if (!isset($_SESSION)) {
    session_start();
}

$p1 = $_SESSION['personaje'];

$caracteristicasOriginales = $p1->caracteristicas;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
            <?=
            print_r($p1)
            ?>
        </pre>

    <?php 
    ingresos($p1);
    rasgosOpe($p1);
    ?>

    <pre>
            <?=
            print_r($p1)
            ?>
        </pre>

    <?php
    if ($caracteristicasOriginales != $p1->caracteristicas) {
        //hacer recálculo
    }
    ?>
</body>

</html>