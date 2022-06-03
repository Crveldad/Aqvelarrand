<?php

declare(strict_types=1);

include_once("conexion.php");

$conexion = null;

try {
    $conexion = new PDO($dsn, $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM personajes";

    $sentencia = $conexion->prepare($sql);
    $sentencia->setFetchMode(PDO::FETCH_ASSOC);
    $sentencia->execute();


    //así accedo a las  columnas mediante un array asociativo
    $personajes = $sentencia->fetchAll();

    foreach ($personajes as $personaje) {
        echo "Id: " . $personaje["id"] . "<br />";
        echo "Nombre: " . $personaje["nombre"] . "<br />";
        echo "Profesión: " . $personaje["profesion"] . "<br /><br />";
    }
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

$conexion = null;


// INSERT INTO `personajes` (`id`, `sexo`, `nombre`, `reino`, `pueblo`, `sociedad`, `posicion_social`, `titulo`, `profesion`, `profesion_paterna`, `situacion_familiar`, `hermanos`, `hermanos_varones`, `hermanos_hembras`, `posicion_nacimiento`, `aspecto`, `templanza`, `edad`, `altura`, `peso`, `racionalidad`, `irracionalidad`, `suerte`, `ingresos`, `rasgo_1`, `rasgo_2`, `rasgo_3`, `rasgo_4`, `enfermedad`, `fuerza`, `agilidad`, `habilidad`, `resistencia`, `percepcion`, `comunicacion`, `cultura`, `usuario_id`) VALUES (NULL, 'F', 'Gemma', 'Corona de Aragón', 'Catalán', 'Cristiana', 'Campesino', 'Colono', 'Brujo', 'Cazador', 'El personaje ha nacido en el seno de un matrimonio, aunque sólo viven su padre y sus hermanos.', '5', '2', '3', '4', '14', '51', '20', '1.49', '118', '25', '75', '45', '45', 'Debido a un accidente o como castigo por ladrón, el personaje es manco, pues ha perdido una mano, y aunque ha aprendido a valerse bien con la mano que le queda —no tendrá penalizador por mano torpe—, resta -3 puntos a su Habilidad.', 'El personaje tiene el rostro desfigurado debido a una gran cicatriz, los estragos causados por una enfermedad o simplemente porque ha nacido con esa malformación facial. En todo caso, reduce su Aspecto en -5 puntos.', 'Es un estudiante aplicado, pues es capaz de aprender rápidamente hasta los conceptos más complicados y aplicarlos a su experiencia. Cada vez que esté aumentando una competencia mediante la enseñanza, la tirada de característica que debe realizar al final se hará como si tuviera +5 puntos en dicha característica, o si se trata de un hechizo, el tiempo de aprendizaje se dividirá entre dos (redondeando hacia arriba).', 'El PJ es bastante bajito, y es normal que sea considerado objeto de burla: reduce en 0,30 su altura.', NULL, '7', '10', '20', '18', '12', '13', '20', '1');
// INSERT INTO `competencias` (`id`, `alquimia`, `arcos`, `artesania`, `astrologia`, `ballestas`, `cabalgar`, `cantar`, `comerciar`, `conducir_carro`, `conocimiento_animal`, `conocimiento_mineral`, `conocimiento_magico`, `conocimiento_vegetal`, `conocimiento_de_area`, `correr`, `corte`, `cuchillos`, `degustar`, `descubrir`, `disfrazarse`, `elocuencia`, `empatia`, `ensenar`, `escamotear`, `escuchar`, `escudos`, `espadas`, `espadones`, `esquivar`, `forzar_mecanismos`, `hachas`, `hondas`, `idioma`, `idioma_`, `idioma_arabe`, `idioma_griego`, `idioma_hebreo`, `idioma_latin`, `juego`, `lanzar`, `lanzas`, `leer_y_escribir`, `leyendas`, `mando`, `mazas`, `medicina`, `memoria`, `musica`, `nadar`, `navegar`, `ocultar`, `palos`, `pelea`, `rastrear`, `saltar`, `sanar`, `seduccion`, `sigilo`, `teologia`, `tormento`, `trepar`, `personaje_id`) VALUES (NULL, '$p1->compentencias["Alquimia]', '76', '45', '43', '43', '65', '23', '3', '44', '4', '8', '7', '54', '5', '51', '51', '5', '54', '5', '5', '54', '5', '87', '87', '1', '54', '84', '84', '84', '78', '84', '15', '58', NULL, NULL, NULL, NULL, NULL, '87', '84', '15', '58', '84', '84', '1', '8', '48', '15', '51', '51', '51', '84', '84', '9', '84', '84', '84', '45', '54', '84', '84', '1');



if (!isset($_GET["error"])) {
    $error = "";
  }else{
    $error = $_GET["error"];
  }

  //

//   if ($usuarioBD && $usuarioBD["email"] == $email && password_verify($password, $usuarioBD["password"])) {
//     comprobarRol($usuarioBD);
// } else {
//     headerLocationError("Email y/o contraseña incorrectos.", "login.php");
// }