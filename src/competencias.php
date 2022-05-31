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
    <title>Aquelarre - Competencias</title>
</head>

<body>
    <form action="paternas.php" method="post">
        <?php
        foreach ($p1->getCompetenciasTotales() as $competencias => $valor) {
        ?>
            <label for="<?= $competencias ?>"><?= $competencias ?></label>
            <input type="text" 
                name="<?= $competencias ?>" 
                class="com" id="<?= $competencias ?>" 
                max="<?= competenciasMax($competencias, $p1->caracteristicas, $p1->getAspecto()) ?>"
                min="<?= $valor ?>" 
                value="<?= $valor ?>"
                >
            <button type="button" onclick="sumar('<?= $competencias ?>')"> + </button> <button type="button" onclick="restar('<?= $competencias ?>')"> - </button><br />
        <?php
        }

        ?>
        <p><span id="total"><?= $total ?></span>/100</p>
        <input type="submit" value="Guardar">

    </form>

    <script type="text/javascript" src="js/competencias.js"></script>

</body>

</html>