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

    <title>Aquelarre - Características</title>
</head>

<body>

    <form action="competencias.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="" value=<?= $p1->nombre ?>><br />
        <label for="nombre">Profesión:</label>
        <input type="text" name="nombre" id="" value=<?= $p1->profesion ?>><br />
        <label for="fue">FUE</label>
        <input type="text" class="car" name="fue" id="fue" max=20 min=<?= $p1->caracteristicas["FUE"] ?> value=<?= $p1->caracteristicas["FUE"] ?>>
        <button type="button" onclick="sumar('fue')"> + </button> <button type="button" onclick="restar('fue')"> - </button><br />
        <label for="agi">AGI</label>
        <input type="text" class="car" name="agi" id="agi" max=20 min=<?= $p1->caracteristicas["AGI"] ?> value=<?= $p1->caracteristicas["AGI"] ?>>
        <button type="button" onclick="sumar('agi')"> + </button> <button type="button" onclick="restar('agi')"> - </button><br />
        <label for="hab">HAB</label>
        <input type="text" class="car" name="hab" id="hab" max=20 min=<?= $p1->caracteristicas["HAB"] ?> value=<?= $p1->caracteristicas["HAB"] ?>>
        <button type="button" onclick="sumar('hab')"> + </button> <button type="button" onclick="restar('hab')"> - </button><br />
        <label for="res">RES</label>
        <input type="text" class="car" name="res" id="res" max=20 min=<?= $p1->caracteristicas["RES"] ?> value=<?= $p1->caracteristicas["RES"] ?>>
        <button type="button" onclick="sumar('res')"> + </button> <button type="button" onclick="restar('res')"> - </button><br />
        <label for="per">PER</label>
        <input type="text" class="car" name="per" id="per" max=20 min=<?= $p1->caracteristicas["PER"] ?> value=<?= $p1->caracteristicas["PER"] ?>>
        <button type="button" onclick="sumar('per')"> + </button> <button type="button" onclick="restar('per')"> - </button><br />
        <label for="com">COM</label>
        <input type="text" class="car" name="com" id="com" max=20 min=<?= $p1->caracteristicas["COM"] ?> value=<?= $p1->caracteristicas["COM"] ?>>
        <button type="button" onclick="sumar('com')"> + </button> <button type="button" onclick="restar('com')"> - </button><br />
        <label for="cul">CUL</label>
        <input type="text" class="car" name="cul" id="cul" max=20 min=<?= $p1->caracteristicas["CUL"] ?> value=<?= $p1->caracteristicas["CUL"] ?>>
        <button type="button" onclick="sumar('cul')"> + </button> <button type="button" onclick="restar('cul')"> - </button><br />

        <p><span id="total"><?= $total ?></span>/100</p>
        <input type="submit" value="Guardar">

        <pre>
            <?=
            print_r($p1)
            ?>
        </pre>

    </form>

    <script type="text/javascript" src="js/caracteristicas.js"></script>

</body>

</html>