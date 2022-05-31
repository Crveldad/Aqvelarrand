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
    <title>Aquelarre - Competencias paternas</title>
</head>

<body>
    <form action="fichaPersonaje.php" method="post">
        <?php
        //hacer una comparación donde estén las mismas competencias que las del array
        foreach ($p1->getCompetenciasPat() as $competencias => $valor) {
        ?>
            <label for="<?= $competencias ?>"><?= $competencias ?></label>
            <input type="text" 
                name="<?= $competencias ?>" 
                class="pat"
                id="<?= $competencias ?>" 
                max="<?= competenciasMax($competencias, $p1->caracteristicas, $p1->getAspecto()) ?>" 
                min="<?= $valor ?>" 
                value="<?= $valor ?>">
            <button type="button" onclick="sumar('<?= $competencias ?>')"> + </button> <button type="button" onclick="restar('<?= $competencias ?>')"> - </button><br />
        <?php
        }
        ?>
        <p><span id="total"><?= $total ?></span>/25</p>
        <input type="submit" value="Guardar">

    </form>

    <script type="text/javascript" src="js/paternas.js"></script>

</body>

</html>