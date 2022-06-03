<?php

declare(strict_types=1);

include_once("conexion.php");
include_once("Personaje.php");

if (!isset($_SESSION)) {
    session_start();
}

$p1 = $_SESSION['personaje'];
$competencias = $_POST;

foreach ($competencias as $competencia) {
    $competencia = str_replace('_', ' ', $competencia);
}
$p1->sesion();


 // QUITAR TODAS LAS COMILLAS

// INSERT INTO `personajes` (`id`, `sexo`, `nombre`, `reino`, `pueblo`, `sociedad`, `posicion_social`, `titulo`, `profesion`, `profesion_paterna`, `situacion_familiar`, `hermanos`, `hermanos_varones`, `hermanos_hembras`, `posicion_nacimiento`, `aspecto`, `templanza`, `edad`, `altura`, `peso`, `racionalidad`, `irracionalidad`, `suerte`, `ingresos`, `rasgo_1`, `rasgo_2`, `rasgo_3`, `rasgo_4`, `enfermedad`, `fuerza`, `agilidad`, `habilidad`, `resistencia`, `percepcion`, `comunicacion`, `cultura`, `usuario_id`) VALUES 
//(NULL, 'F', 'Gemma', 'Corona de Aragón', 'Catalán', 'Cristiana', 'Campesino', 'Colono', 'Brujo', 'Cazador', 'El personaje ha nacido en el seno de un matrimonio, aunque sólo viven su padre y sus hermanos.', '5', '2', '3', '4', '14', '51', '20', '1.49', '118', '25', '75', '45', '45', 'Debido a un accidente o como castigo por ladrón, el personaje es manco, pues ha perdido una mano, y aunque ha aprendido a valerse bien con la mano que le queda —no tendrá penalizador por mano torpe—, resta -3 puntos a su Habilidad.', 'El personaje tiene el rostro desfigurado debido a una gran cicatriz, los estragos causados por una enfermedad o simplemente porque ha nacido con esa malformación facial. En todo caso, reduce su Aspecto en -5 puntos.', 'Es un estudiante aplicado, pues es capaz de aprender rápidamente hasta los conceptos más complicados y aplicarlos a su experiencia. Cada vez que esté aumentando una competencia mediante la enseñanza, la tirada de característica que debe realizar al final se hará como si tuviera +5 puntos en dicha característica, o si se trata de un hechizo, el tiempo de aprendizaje se dividirá entre dos (redondeando hacia arriba).', 'El PJ es bastante bajito, y es normal que sea considerado objeto de burla: reduce en 0,30 su altura.', NULL, '7', '10', '20', '18', '12', '13', '20', '1');
// (NULL, '$p1->sexo', 
// '$p1->nombre', 
// '$p1->reino', 
// '$p1->getPueblo()',
// '$p1->sociedad',
// '$p1->pSocial',
// $p1->titulo,
// '$p1->profesion', 
// '$p1->getProfesionPat()',
// '$p1->getSitFamiliar()', 
// '$p1->getHermanos()',
// '$p1->getVarones()',
// '$p1->getHembras()',
// '$p1->getPosicion()',
// '$p1->aspecto',
// '$p1->templanza',
// '$p1->edad',
// '$p1->altura',
// '$p1->peso',
// '$p1->racionalidad',
// '$p1->irracionalidad',
// '$p1->getSuerte()',
// '$p1->ingresos',
// '$p1->rasgos[0]', 
// '$p1->rasgos[1]',
// '$p1->rasgos[2]',
// '$p1->rasgos[3]',
// $p1->getEnfermedad(),
// '$p1->caracteristicas["FUE"]',
// '$p1->caracteristicas["AGI"]',
// '$p1->caracteristicas["HAB"]',
// '$p1->caracteristicas["RES"]',
// '$p1->caracteristicas["PER"]',
// '$p1->caracteristicas["COM"]',
// '$p1->caracteristicas["CUL"]', 
//'$_SESSION["usuario"]["id"]');


//INSERT INTO `competencias` (`id`, `alquimia`, `arcos`, `artesania`, `astrologia`, `ballestas`, `cabalgar`, `cantar`, `comerciar`, `conducir_carro`, `conocimiento_animal`, `conocimiento_mineral`, `conocimiento_magico`, `conocimiento_vegetal`, `conocimiento_de_area`, `correr`, `corte`, `cuchillos`, `degustar`, `descubrir`, `disfrazarse`, `elocuencia`, `empatia`, `ensenar`, `escamotear`, `escuchar`, `escudos`, `espadas`, `espadones`, `esquivar`, `forzar_mecanismos`, `hachas`, `hondas`, `idioma`, `idioma_`, `idioma_arabe`, `idioma_griego`, `idioma_hebreo`, `idioma_latin`, `juego`, `lanzar`, `lanzas`, `leer_y_escribir`, `leyendas`, `mando`, `mazas`, `medicina`, `memoria`, `musica`, `nadar`, `navegar`, `ocultar`, `palos`, `pelea`, `rastrear`, `saltar`, `sanar`, `seduccion`, `sigilo`, `teologia`, `tormento`, `trepar`, `personaje_id`) VALUES 
// (NULL,
// '$p1->compentencias["Alquimia"]', 
// '$p1->compentencias["Arcos"]', 
// '$p1->compentencias["Artesanía"]', 
// '$p1->compentencias["Astrología"]',
// '$p1->compentencias["Ballestas"]',
// '$p1->compentencias["Cabalgar"]',
// '$p1->compentencias["Cantar"]',
// '$p1->compentencias["Comerciar"]',
// '$p1->compentencias["Conducir Carro"]',
// '$p1->compentencias["Conocimiento Animal"]',
// '$p1->compentencias["Conocimiento Mineral"]',
// '$p1->compentencias["Conocimiento Mágico"]',
// '$p1->compentencias["Conocimiento Vegetal"]',
// '$p1->compentencias["Conocimiento de Área"]',
// '$p1->compentencias["Correr"]',
// '$p1->compentencias["Corte"]',
// '$p1->compentencias["Cuchillos"]',
// '$p1->compentencias["Degustar"]',
// '$p1->compentencias["Descubrir"]',
// '$p1->compentencias["Disfrazarse"]',
// '$p1->compentencias["Elocuencia"]',
// '$p1->compentencias["Empatía"]',
// '$p1->compentencias["Enseñar"]',
// '$p1->compentencias["Escamotear"]',
// '$p1->compentencias["Escuchar"]',
// '$p1->compentencias["Escudos"]',
// '$p1->compentencias["Espadas"]',
// '$p1->compentencias["Espadones"]',
// '$p1->compentencias["Esquivar"]',
// '$p1->compentencias["Forzar Mecanismos"]',
// '$p1->compentencias["Hachas"]',
// '$p1->compentencias["Hondas"]',
// '$p1->compentencias["Idioma"]',
// isset($p1->competencias["Idioma()"]) ? '$p1->compentencias["Idioma()"]': NULL, 
// isset($p1->competencias["Idioma(Árabe)"]) ? '$p1->compentencias["Idioma(Árabe)"]': NULL, 
// isset($p1->competencias["Idioma(Griego)"]) ? '$p1->compentencias["Idioma(Griego)"]': NULL, 
// isset($p1->competencias["Idioma(Hebreo)"]) ? '$p1->compentencias["Idioma(Hebreo)"]': NULL, 
// isset($p1->competencias["Idioma(Latín)"]) ? '$p1->compentencias["Idioma(Latín)"]': NULL, 
// '$p1->compentencias["Lanzar"]',
// '$p1->compentencias["Lanzas"]',
// '$p1->compentencias["Leer y Escribir"]',
// '$p1->compentencias["Leyendas"]',
// '$p1->compentencias["Mando"]',
// '$p1->compentencias["Mazas"]',
// '$p1->compentencias["Medicina"]',
// '$p1->compentencias["Memoria"]',
// '$p1->compentencias["Música"]',
// '$p1->compentencias["Nadar"]',
// '$p1->compentencias["Navegar"]',
// '$p1->compentencias["Ocultar"]',
// '$p1->compentencias["Palos"]',
// '$p1->compentencias["Pelea"]',
// '$p1->compentencias["Rastrear"]',
// '$p1->compentencias["Saltar"]',
// '$p1->compentencias["Sanar"]',
// '$p1->compentencias["Seducción"]',
// '$p1->compentencias["Sigilo"]',
// '$p1->compentencias["Teología"]',
// '$p1->compentencias["Tormento"]',
// '$p1->compentencias["Trepar"]',
// '$_SESSION["personaje"]["id"]');
// );

//pdo get last insert id()
//guardarlo en variable para poder mantenerlo

