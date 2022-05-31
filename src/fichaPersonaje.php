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
$p1->sesion();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de personaje</title>
</head>

<body>
    <pre>
            <?=
            print_r($p1)
            ?>
        </pre>

    <?php
    $p1->ingresos = ingresos($p1);
    rasgosOpe($p1);
    $p1->actualizarArmas();
    // $p1->sesion();
    ?>

    <pre>
            <?=
            print_r($p1)
            ?>
        </pre>
</body>

</html>