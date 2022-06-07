<?php

if (!isset($_SESSION)) {
    session_start();
}
include_once("Personaje.php");
include_once("conexion.php");

function guardarPersonaje(Personaje $personaje)
{

    $conexion = getConexion();

    
    $sql = "INSERT INTO `personajes` (`id`, `sexo`, `nombre`, `reino`, `pueblo`, `sociedad`, `posicion_social`, `titulo`, `profesion`, `profesion_paterna`, `situacion_familiar`, `hermanos`, `hermanos_varones`, `hermanos_hembras`, `posicion_nacimiento`, `aspecto`, `templanza`, `edad`, `altura`, `peso`, `racionalidad`, `irracionalidad`, `suerte`, `ingresos`, `rasgo_1`, `rasgo_2`, `rasgo_3`, `rasgo_4`, `enfermedad`, `fuerza`, `agilidad`, `habilidad`, `resistencia`, `percepcion`, `comunicacion`, `cultura`, `usuario_id`) VALUES
    (
        NULL,
        :sexo, 
        :nombre, 
        :reino, 
        :pueblo,
        :sociedad,
        :posicion_social,
        :titulo,
        :profesion, 
        :profesion_paterna,
        :situacion_familiar, 
        :hermanos,
        :hermanos_varones,
        :hermanos_hembras,
        :posicion_nacimiento,
        :aspecto,
        :templanza,
        :edad,
        :altura,
        :peso,
        :racionalidad,
        :irracionalidad,
        :suerte,
        :ingresos,
        :rasgo_1, 
        :rasgo_2,
        :rasgo_3,
        :rasgo_4,
        :enfermedad,
        :fuerza,
        :agilidad,
        :habilidad,
        :resistencia,
        :percepcion,
        :comunicacion,
        :cultura, 
        :usuario_id
    )";

    $sentencia = $conexion->prepare($sql);

    $sexo = $personaje->getSexo();
    $sentencia->bindParam(':sexo', $sexo);
    $sentencia->bindParam(':nombre', $personaje->nombre);
    $sentencia->bindParam(':reino', $personaje->reino);
    $pueblo = $personaje->getPueblo();
    $sentencia->bindParam(':pueblo', $pueblo);
    $sentencia->bindParam(':sociedad', $personaje->sociedad);
    $sentencia->bindParam(':posicion_social', $personaje->pSocial);
    $sentencia->bindParam(':titulo', $personaje->titulo);
    $sentencia->bindParam(':profesion', $personaje->profesion);
    $profesionPat = $personaje->getProfesionPat();
    $sentencia->bindParam(':profesion_paterna', $profesionPat);
    $sitFamiliar = $personaje->getSitFamiliar();
    $sentencia->bindParam(':situacion_familiar', $sitFamiliar);
    $hermanos = $personaje->getHermanos();
    $sentencia->bindParam(':hermanos', $hermanos);
    $varones = $personaje->getVarones();
    $sentencia->bindParam(':hermanos_varones', $varones);
    $hembras = $personaje->getHembras();
    $sentencia->bindParam(':hermanos_hembras', $hembras);
    $posicion = $personaje->getPosicion();
    $sentencia->bindParam(':posicion_nacimiento', $posicion);
    $sentencia->bindParam(':aspecto', $personaje->aspecto);
    $sentencia->bindParam(':templanza', $personaje->templanza);
    $sentencia->bindParam(':edad', $personaje->edad);
    $sentencia->bindParam(':altura', $personaje->altura);
    $sentencia->bindParam(':peso', $personaje->peso);
    $sentencia->bindParam(':racionalidad', $personaje->racionalidad);
    $sentencia->bindParam(':irracionalidad', $personaje->irracionalidad);
    $suerte = $personaje->getSuerte();
    $sentencia->bindParam(':suerte', $suerte);
    $sentencia->bindParam(':ingresos', $personaje->ingresos);
    $sentencia->bindParam(':rasgo_1', $personaje->rasgos[0]);
    $sentencia->bindParam(':rasgo_2', $personaje->rasgos[1]);
    $sentencia->bindParam(':rasgo_3', $personaje->rasgos[2]);
    $sentencia->bindParam(':rasgo_4', $personaje->rasgos[3]);
    $enfermedad = $personaje->getEnfermedad();
    $sentencia->bindParam(':enfermedad', $enfermedad);
    $sentencia->bindParam(':fuerza', $personaje->caracteristicas["FUE"]);
    $sentencia->bindParam(':agilidad', $personaje->caracteristicas["AGI"]);
    $sentencia->bindParam(':habilidad', $personaje->caracteristicas["HAB"]);
    $sentencia->bindParam(':resistencia', $personaje->caracteristicas["RES"]);
    $sentencia->bindParam(':percepcion', $personaje->caracteristicas["PER"]);
    $sentencia->bindParam(':comunicacion', $personaje->caracteristicas["COM"]);
    $sentencia->bindParam(':cultura', $personaje->caracteristicas["CUL"]);
    $usuario_id = $_SESSION['usuario']['id'];
    $sentencia->bindParam(':usuario_id', $usuario_id);

    $sentencia->execute();
}

function guardarCompetencias(Personaje $personaje)
{
    $conexion = getConexion();
    $sql = "INSERT INTO `competencias` (`id`, `alquimia`, `arcos`, `artesania`, `astrologia`, `ballestas`, `cabalgar`, `cantar`, `comerciar`, `conducir_carro`, `conocimiento_animal`, `conocimiento_mineral`, `conocimiento_magico`, `conocimiento_vegetal`, `conocimiento_de_area`, `correr`, `corte`, `cuchillos`, `degustar`, `descubrir`, `disfrazarse`, `elocuencia`, `empatia`, `ensenar`, `escamotear`, `escuchar`, `escudos`, `espadas`, `espadones`, `esquivar`, `forzar_mecanismos`, `hachas`, `hondas`, `idioma`, `idioma_`, `idioma_arabe`, `idioma_griego`, `idioma_hebreo`, `idioma_latin`, `juego`, `lanzar`, `lanzas`, `leer_y_escribir`, `leyendas`, `mando`, `mazas`, `medicina`, `memoria`, `musica`, `nadar`, `navegar`, `ocultar`, `palos`, `pelea`, `rastrear`, `saltar`, `sanar`, `seduccion`, `sigilo`, `teologia`, `tormento`, `trepar`, `personaje_id`) VALUES 
    (
        NULL,
        :alquimia,
        :arcos,
        :artesania,
        :astrologia,
        :ballestas,
        :cabalgar,
        :cantar,
        :comerciar,
        :conducir_carro,
        :conocimiento_animal,
        :conocimiento_mineral,
        :conocimiento_magico,
        :conocimiento_vegetal,
        :conocimiento_de_area,
        :correr,
        :corte,
        :cuchillos,
        :degustar,
        :descubrir,
        :disfrazarse,
        :elocuencia,
        :empatia,
        :ensenar,
        :escamotear,
        :escuchar,
        :escudos,
        :espadas,
        :espadones,
        :esquivar,
        :forzar_mecanismos,
        :hachas,
        :hondas,
        :idioma,
        :idioma_,
        :idioma_arabe,
        :idioma_griego,
        :idioma_hebreo,
        :idioma_latin,
        :juego,
        :lanzar,
        :lanzas,
        :leer_y_escribir,
        :leyendas,
        :mando,
        :mazas,
        :medicina,
        :memoria,
        :musica,
        :nadar,
        :navegar,
        :ocultar,
        :palos,
        :pelea,
        :rastrear,
        :saltar,
        :sanar,
        :seduccion,
        :sigilo,
        :teologia,
        :tormento,
        :trepar,
        :personaje_id
    )";

    $sentencia = $conexion->prepare($sql);

    $competencias = $personaje->competencias;
    $sentencia->bindParam(':alquimia', $competencias["Alquimia"]);
    $sentencia->bindParam(':arcos', $competencias["Arcos"]);
    $sentencia->bindParam(':artesania', $competencias["Artesanía"]);
    $sentencia->bindParam(':astrologia', $competencias["Astrología"]);
    $sentencia->bindParam(':ballestas', $competencias["Ballestas"]);
    $sentencia->bindParam(':cabalgar', $competencias["Cabalgar"]);
    $sentencia->bindParam(':cantar', $competencias["Cantar"]);
    $sentencia->bindParam(':comerciar', $competencias["Comerciar"]);
    $sentencia->bindParam(':conducir_carro', $competencias["Conducir Carro"]);
    $sentencia->bindParam(':conocimiento_animal', $competencias["Conocimiento Animal"]);
    $sentencia->bindParam(':conocimiento_mineral', $competencias["Conocimiento Mineral"]);
    $sentencia->bindParam(':conocimiento_magico', $competencias["Conocimiento Mágico"]);
    $sentencia->bindParam(':conocimiento_vegetal', $competencias["Conocimiento Vegetal"]);
    $sentencia->bindParam(':conocimiento_de_area', $competencias["Conocimiento de Área"]);
    $sentencia->bindParam(':correr', $competencias["Correr"]);
    $sentencia->bindParam(':corte', $competencias["Corte"]);
    $sentencia->bindParam(':cuchillos', $competencias["Cuchillos"]);
    $sentencia->bindParam(':degustar', $competencias["Degustar"]);
    $sentencia->bindParam(':descubrir', $competencias["Descubrir"]);
    $sentencia->bindParam(':disfrazarse', $competencias["Disfrazarse"]);
    $sentencia->bindParam(':elocuencia', $competencias["Elocuencia"]);
    $sentencia->bindParam(':empatia', $competencias["Empatía"]);
    $sentencia->bindParam(':ensenar', $competencias["Enseñar"]);
    $sentencia->bindParam(':escamotear', $competencias["Escamotear"]);
    $sentencia->bindParam(':escuchar', $competencias["Escuchar"]);
    $sentencia->bindParam(':escudos', $competencias["Escudos"]);
    $sentencia->bindParam(':espadas', $competencias["Espadas"]);
    $sentencia->bindParam(':espadones', $competencias["Espadones"]);
    $sentencia->bindParam(':esquivar', $competencias["Esquivar"]);
    $sentencia->bindParam(':forzar_mecanismos', $competencias["Forzar Mecanismos"]);
    $sentencia->bindParam(':hachas', $competencias["Hachas"]);
    $sentencia->bindParam(':hondas', $competencias["Hondas"]);
    $sentencia->bindParam(':idioma', $competencias["Idioma"]);
    $sentencia->bindParam(':idioma_', $competencias["Idioma()"]);
    $sentencia->bindParam(':idioma_arabe', $competencias["Idioma(Árabe)"]);
    $sentencia->bindParam(':idioma_griego', $competencias["Idioma(Griego)"]);
    $sentencia->bindParam(':idioma_hebreo', $competencias["Idioma(Hebreo)"]);
    $sentencia->bindParam(':idioma_latin', $competencias["Idioma(Latín)"]);
    $sentencia->bindParam(':juego', $competencias["Juego"]);
    $sentencia->bindParam(':lanzar', $competencias["Lanzar"]);
    $sentencia->bindParam(':lanzas', $competencias["Lanzas"]);
    $sentencia->bindParam(':leer_y_escribir', $competencias["Leer y Escribir"]);
    $sentencia->bindParam(':leyendas', $competencias["Leyendas"]);
    $sentencia->bindParam(':mando', $competencias["Mando"]);
    $sentencia->bindParam(':mazas', $competencias["Mazas"]);
    $sentencia->bindParam(':medicina', $competencias["Medicina"]);
    $sentencia->bindParam(':memoria', $competencias["Memoria"]);
    $sentencia->bindParam(':musica', $competencias["Música"]);
    $sentencia->bindParam(':nadar', $competencias["Nadar"]);
    $sentencia->bindParam(':navegar', $competencias["Navegar"]);
    $sentencia->bindParam(':ocultar', $competencias["Ocultar"]);
    $sentencia->bindParam(':palos', $competencias["Palos"]);
    $sentencia->bindParam(':pelea', $competencias["Pelea"]);
    $sentencia->bindParam(':rastrear', $competencias["Rastrear"]);
    $sentencia->bindParam(':saltar', $competencias["Saltar"]);
    $sentencia->bindParam(':sanar', $competencias["Sanar"]);
    $sentencia->bindParam(':seduccion', $competencias["Seducción"]);
    $sentencia->bindParam(':sigilo', $competencias["Sigilo"]);
    $sentencia->bindParam(':teologia', $competencias["Teología"]);
    $sentencia->bindParam(':tormento', $competencias["Tormento"]);
    $sentencia->bindParam(':trepar', $competencias["Trepar"]);
    $personaje_id = $conexion->lastInsertId();
    $sentencia->bindParam(':personaje_id', $personaje_id);
    
    $sentencia->execute();
}

//1. comprobar que esté logueado o no (si no, header location a login)
//2. recoger el personaje de la sesion
//3. preparar la sentencia SQL y hacer la inserción
//4. mensaje "el personaje ha sido insertado en la sesión"
//5. reenvío a la página "listado"

if (!isset($_SESSION["usuario"])) {
    $_SESSION["error_login"] = "Debes estar logueado.";
    header('Location: login.php');
}

$personaje = $_SESSION['personaje'];
//esto es necesario para que no pete porque no detecta la clase que era
$personaje = serialize($personaje);
$personaje = unserialize($personaje);

try {
    guardarPersonaje($personaje);
    guardarCompetencias($personaje);
    $_SESSION["mensaje"] = "Personaje guardado en la base de datos";
    header('Location: listado.php');
} catch (\Throwable $th) {
    echo "Ha ocurrido un error, vuelve a intentarlo." . $th->getMessage();
}

//SELECT * FROM personajes p JOIN competencias c ON c.personaje_id=p.id; 