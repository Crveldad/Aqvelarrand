"Abbad","Abbas","Abid","Absam","Abu","Ahmed","Ali","Amir","Ammar","Awland","Badis","Banu","Barmaki","Bazlaf","Buluggin","Dawud","Garur","Harum","Hassán","Hussein","Khaled","Malik","Mubarak","Muhammad","Musakkan","Mustafa","Mu´tamid","Mutawakkil","Othmán","Qarawi","Rachid","Rasiq","Sumadih","Yabiz","Yusuf","Zuhayr"
"Aixa","Asma","Fátima","Hafsah","Jadicha","Kalthoum","Karima","Khadija","Ladda","Latifa","Miriam","Moraima","Najate","Nasma","Nuba","Ouafae","Rabea","Salma","Soraya","Subh","Walada","Zarah","Zohra","Zohraida","Zoraya","Zubayda"


<?php
const REINOS = ["Corona de Castilla", "Corona de Aragón", "Reino de Granada", "Reino de Navarra", "Reino de Portugal"];
const NOM_CAS_M = ["Alarico", "Alejandro", "Alfonso", "Alvar", "Ángel", "Arturo", "Ataúlfo", "Calixto", "Cándido", "Carlos", "César", "Claudio", "Cristóbal", "Diego", "Felipe", "Fernando", "Francisco", "Gabriel", "Gonzalo", "Gregorio", "Guillermo", "Honesto", "Isidoro", "Isidro", "Jorge", "Julián", "Lázaro", "Lope", "Manuel", "Martín", "Mateo", "Mauricio", "Miguel", "Onofre", "Pablo", "Pedro", "Pelayo", "Rafael", "Ramiro", "Ricardo", "Rodolfo", "Rodrigo", "Roque", "Sancho", "Sebastián", "Severo", "Simplicio", "Sixto", "Tancredo", "Teolfo", "Timoteo", "Tomás", "Valentín", "Vicente", "Víctor"];
const NOM_CAS_F = ["Adela", "Ágata", "Amalia", "Bárbara", "Beatriz", "Bernarda", "Blanca", "Bonifacia", "Camila", "Carlota", "Carmen", "Cecilia", "Celestina", "Cirila", "Clara", "Claudia", "Cristina", "Dorotea", "Elvira", "Emilia", "Flora", "Francisca", "Genoveva", "Gregoria", "Helena", "Hilaria", "Honorata", "Inés", "Isabel", "Juana", "Julia", "Laura", "Leonor", "Lucía", "Margarita", "María", "Milagros", "Ofelia", "Orosia", "Paloma", "Patricia", "Petra", "Priscila", "Radegunda", "Ramona", "Rosalinda", "Susana", "Teodora", "Teresa", "Ursina", "Úrsula", "Urraca", "Violante", "Virtudes", "Visitación"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquelarre - 1er try</title>
</head>

<body>
    <ul>
        <?php

        $longitud = sizeof(NOM_CAS_M) - 1;

        for ($i = 0; $i < 50; $i++) {
            $tirada = rand(0, $longitud);
            $nombre = NOM_CAS_M[$tirada];
            echo "$nombre<br>";
        }
        ?>
    </ul>
</body>

</html>

($pueblo =="Castellano" ||
$pueblo == "Gallego" ||
$pueblo == "Vasco" ||
$pueblo == "Asturleonés" ||
$pueblo == "Aragonés" ||
$pueblo == "Catalán" ||
$pueblo == "Navarro" ||
$pueblo == "Portugués")

<?php

const RASGOS = [
    "Por alguna razón —mató a su mejor amigo en un ataque de furia, recibió una grave herida, ha visto y vivido demasiadas cosas en su vida…—, el personaje odia el combate, la guerra y la pelea, así que tiene -25% en todas las competencias de armas. Eso no quiere decir que sea más o menos cobarde, sólo que no está dispuesto a combatir y cuando lo hace, le cuesta muchísimo",
    "El personaje es un tipo particularmente locuaz y parlanchín, y aunque tiene un pico de oro con el que es capaz de convencer a cualquiera de casi cualquier cosa (+25% en Elocuencia), también es verdad que suele tener dificultades para mantener la boca cerrada, lo que suele conllevarle algún que otro problema.",
    "El PJ tiene unos sentidos extraordinariamente sensibles: súmale +5 a su característica de Percepción.",
    "El personaje sufre algún tipo de enfermedad o dolencia. Tira de nuevo 1D10 para ver exactamente qué tipo de dolencia posee:
    1-2 Alergia: Su cuerpo rechaza determinada sustancia o alimento: polen de ciertas plantas, frutas, leche, huevos, agua helada… En caso de que el PJ toque o coma de esa sustancia, la reacción alérgica que se le producirá 1D10 minutos después —picores, manchas, hinchazón, incluso fiebre— reducirá en -30% todas sus tiradas de competencias y características, reacción que le durará 1D6 horas. La sustancia la decidirá el DJ, que puede — maquiavélico él—, guardarse para sí dicho conocimiento y hacérselo saber al jugador después de que su personaje la haya consumido o tocado…
    3-4 Herpes: Véase la descripción de la enfermedad en la pág. 104.
    5-6 Ladillas: Véase la descripción de la enfermedad en la pág. 104.
    7-8 Gonorrea: Véase la descripción de la enfermedad en la pág. 104.
    9 Lepra: Véase la descripción de la enfermedad en la pág. 104. Recordamos que la lepra es incurable y provoca la muerte tras varios años.
    10 Mal de San Antón: Véase la descripción de la enfermedad en la pág. 104. Al igual que la lepra, es incurable y provoca tarde o temprano la muerte del enfermo.",
    "Por alguna razón o motivo —busca al asesino de su familia, intenta encontrar a un pariente desaparecido, ha sido educado por un padre guerrero, por el simple placer de la lucha—, el personaje se ha entrenado en el combate casi desde pequeño. Aumenta en +25% el porcentaje de una competencia de armas.",
    "El personaje ha reñido con su familia por las circunstancias que fueran y está desheredado: ha sido expulsado del hogar familiar, no tiene derecho al título nobiliario —si su familia lo tenía— y debe vivir de forma más humilde. A todos los efectos, su posición social se considerará un grado menor —de burgués pasaría a villano, por ejemplo—, afectando también a sus gastos y rentas. Este rasgo de carácter no puede aplicarse ni a campesinos ni a esclavos.",
    "Posee una reliquia familiar, que puede ser un arma, un libro —pero no de conjuros, tío listo…—, una joya, etc. Nunca se desprenderá del objeto y hará todo lo posible por recuperarlo en caso de que sea robado. Si lo pierde durante el curso de alguna aventura, al finalizarla no recibirá ningún Punto de Aprendizaje por haberla jugado.",
    "El personaje es bastante apuesto: aumenta su Aspecto en +5 puntos.",
    "Tiene graves problemas de peso: aumenta su peso en 60 libras y reduce en -2 su Agilidad.",
    "El personaje tiene el rostro desfigurado debido a una gran cicatriz, los estragos causados por una enfermedad o simplemente porque ha nacido con esa malformación facial. En todo caso, reduce su Aspecto en -5 puntos.",
    "Ha recibido educación alquímica, por propia voluntad del personaje o porque un familiar o amigo le ha instruido ligeramente en el ars magna. En todo caso, aumenta en +15% las competencias de Alquimia y de Conocimiento Mineral.",
    "El personaje es bastante cobarde y si se ve obligado a combatir, atacará por la espalda o a individuos desarmados. Si no le es posible, tratará de huir, aunque se defenderá si se ve acorralado. Reduce en -25% su valor de Templanza.",
    "Tiene una vista excelente, que le permitirá observar cosas que a otros le pasarían desapercibidas: +25% a Descubrir.",
    "Debido a un accidente, a la tortura o como castigo a un delito, el personaje tiene la lengua cortada: sólo puede comunicarse mediante la mímica y los gestos, lo que significa que su Comunicación se reduce en -4, sus competencias de Cantar, Elocuencia, Mando e Idioma se reducen a 0%, mientras que Comerciar, Disfrazarse y Degustar no podrán pasar nunca de su máximo en COMx5.",
    "Debido a una frustración amorosa o a una deficiente educación infantil, el PJ desprecia al sexo opuesto, y trata a todos los miembros del otro sexo con desconfianza y menosprecio —lo que no quiere decir que no se acueste con ellos: simplemente los trata como objetos y poco más—. Este desprecio le reduce en -25% su competencia de Seducción.",
    "El personaje es un extranjero en los reinos peninsulares, por lo que tiene serias dificultades para hacerse entender —sin contar además algunas costumbres y maneras que pueden extrañar a los de aquí—. Al comenzar el juego sólo tendrá un idioma natal al 100% de fuera de la Península —francés, inglés, italiano, alemán…—, y el idioma del lugar donde vive además del castellano, ambos al 25%.",
    "Tiene cierto carisma con los animales, que nunca le atacarán, en principio, a no ser que el personaje se muestre hostil hacia ellos, que estén muy hambrientos o que hayan sido entrenados para atacar. Aumenta en +25% su Conocimiento Animal. Dentro de la definición de animal no se encuentran las criaturas irracionales.",
    "El personaje sufre un vértigo considerable y le asustan las alturas: resta -25% a su competencia de Trepar.",
    "El PJ repulsa a los animales que le odian directamente: los perros le ladran y le muerden, los caballos se resisten a ser montados, las vacas se irritan sólo con su presencia, etc. El PJ tiene -25% a Conocimiento Animal y -25% a Cabalgar.",
    "Sufrió de niño unas fiebres casi mortales que le han dejado extremadamente débil: resta -5 a su Fuerza, Agilidad y Resistencia,",
    "El personaje es ambidextro y puede usar con la misma facilidad la mano izquierda y la derecha, por lo que no tendrá ningún tipo de modificador negativo al usar su “mano torpe”.",
    "El PJ es bastante bajito, y es normal que sea considerado objeto de burla: reduce en 0,30 su altura.",
    "Debido a algún suceso traumático o a un accidente montando, lo cierto es que el personaje le tiene un miedo atroz a los caballos y al resto de cabalgaduras: no le gusta acercarse a ellos, pues los considera peligrosos, y en el caso extremo de que tuviera que montar alguno tendrá un -50% en su competencia de Cabalgar.",
    "Posee un oído muy sensible: aumenta en +25% la competencia de Escuchar.",
    "El personaje es lo que llamamos actualmente un cleptómano: no puede evitar robar todo lo que se pone a su alcance, tenga o no valor el objeto y exista o no la posibilidad de ser descubierto. Es una costumbre que le provocará más de un quebradero de cabeza al personaje y a los que vayan junto a él. Al menos tendrá un +15% para aumentar su Escamotear.",
    "El PJ es un tipo verdaderamente honrado: siempre va con la verdad por delante —nunca miente, aunque a veces no dirá toda la verdad—, y se negará en redondo a cometer actos delictivos, lo que le otorga un -25% a todas aquellas tiradas que supongan mentir, sobornar, hacer trampas, robar, atacar a un enemigo por la espalda, etc.",
    "Es una persona confiada que nunca recela de nadie y que sólo desconfiará de una persona si ésta da pruebas evidentes de su mala fe. Reduce la competencia de Empatía en -25%.",
    "El personaje es un imitador de primera, y es capaz de adoptar las poses, maneras y gestos de las personas que ve y escucha. Aumenta en +25% su competencia de Disfrazarse.",
    "Ha sido educado por un brujo o curandera en las artes oscuras de la magia: aumenta en +15% su Astrología y su Conocimiento Mágico.",
    "Posee el gusto y el olfato de un verdadero gourmet, capaz de distinguir multitud de sabores y olores: aumenta en +25% su Degustar.",
    "Debido a un accidente o a una enfermedad infantil, el personaje es un poco cojo. Puede andar sin problemas, pero cuando trata de ir deprisa las cosas se complican. Reduce en -25% su competencia de Correr.",
    "El personaje está acostumbrado a mandar. Quizás fuera el líder de un grupo de mercenarios o bandidos, o instruyó a una serie de aprendices en su oficio, o puede que simplemente estuviera a cargo de un grupo de trabajadores. Lo cierto es que se le da bien dar órdenes: aumenta en +25% su competencia de Mando.",
    "Ya sea debido a una herencia inesperada o bien por un tremendo golpe de fortuna, el personaje cuenta con 1D4x1.500 maravedíes adicionales que deberá gastar íntegramente en la compra de equipo y propiedades.",
    "Es una persona despistada y olvidadiza, incapaz de recordar lo que le ocurre de un día para otro: reduce en -25% la competencia de Memoria.",
    "El personaje ha sido condenado a muerte en su tierra por algún grave delito que cometió, o que todos pensaron que había cometido él. Si en algún momento vuelve a su tierra natal (la ciudad o pueblo donde nació y el territorio que le rodea), deberá tomar precauciones para evitar ser descubierto y sentenciado.",
    "Posee una reliquia arcana, ya sea un grimorio —con 1D3 hechizos— o el talismán de un hechizo —tira 1D6 y ése será el nivel del hechizo, que elegirá el DJ—, aunque no tiene por qué saber cómo se utiliza. La simple posesión de dichas reliquias conlleva un aumento de IRR de +10.",
    "El personaje posee un sexto sentido que le permitirá no ser sorprendido jamás. En caso de que sea sorprendido en combate, tirará por Iniciativa de forma normal y se ignorarán los modificadores al ataque y a la defensa al ser objeto de un ataque por sorpresa.",
    "Es una persona bastante torpe: reduce en -5 su característica de Agilidad.",
    "Tiene una amistad influyente con una posición social superior a la suya. El jugador y el DJ deberán ponerse de acuerdo exactamente sobre el cargo que ocupa el amigo del personaje, y aunque no le acompañará en las aventuras, podrá echarle una mano en caso de necesidad, siempre y cuando su influencia afecte al territorio en el que se encuentra el PJ.",
    "El personaje está siendo buscado por una familia poderosa o por una organización —una orden militar, la Inquisición aragonesa, la Fraternitas Vera Lucis…—, para lavar una afrenta o para castigarle por un delito cometido contra ellos —haya existido la afrenta o delito, o lo haya cometido realmente el PJ—. En caso de que sea atrapado, será castigado severamente, aunque no le llegarán a matar, excepto si se resiste en la detención, claro.",
    "Debido a un accidente o como castigo por ladrón, el personaje es manco, pues ha perdido una mano, y aunque ha aprendido a valerse bien con la mano que le queda —no tendrá penalizador por mano torpe—, resta -3 puntos a su Habilidad.",
    "Por algún golpe recibido en la cabeza o porque ha nacido con ese problema, lo cierto es que el personaje tiene verdaderas dificultades para coordinar sus movimientos en momentos de estrés, lo que conlleva una pérdida de -25% a su competencia de Esquivar.",
    "Tiene una voz prodigiosa, bien entonada y modulada: aumenta en +25% su competencia de Cantar.",
    "El personaje es extraordinariamente robusto: aumenta en +5 su competencia de Fuerza.",
    "Es un tipo tímido y reservado y le da mucho reparo relacionarse con los demás, pues enrojece con facilidad y comienza a tartamudear a la primera de cambio. Reduce en -15% las competencias de Elocuencia, Seducción y Mando.",
    "Posee un estómago muy resistente, capaz de tragar y digerir todo lo que le echen, ya esté cocinado, crudo o incluso podrido. La buena noticia es que ve aumentadas en +25% sus posibilidades para resistirse a venenos de ingestión o enfermedades que se contagien mediante los alimentos, pero la mala es que su competencia de Degustar se reduce en -25%",
    "Es lo que llamamos un sádico, pues gusta de infligir dolor y tiene ciertos conocimientos en los métodos para hacerlo: aumenta en +25% su competencia de Tormento.",
    "Debido a un accidente o quizá por nacimiento, el personaje es sordo de una oreja: reduce en -25% su porcentaje en Escuchar.",
    "El personaje es un tipo excepcionalmente hábil: aumenta en +5 su competencia de Habilidad.",
    "Es un tipo comprensivo, un hombre de mundo, capaz de comprender el espíritu humano, las emociones de los demás y de anticiparse a ellas: aumenta en +25% su porcentaje en Empatía.",
    "Ha sido educado en un convento (o en una madraza islámica o sinagoga judía), por lo que ha tenido acceso a una educación un poco más refinada: aumenta en +25% su porcentaje de Leer y Escribir y Teología.",
    "Posee un don de lenguas innato y es capaz de aprender rápidamente aquellos idiomas que escucha. Cada vez que gaste PAp para aumentar el porcentaje con un idioma, el aumento será doble (+2% si quería subir +1%, por ejemplo).",
    "Es un verdadero pedagogo, con un don natural para transmitir sus conocimientos de forma sencilla y clara: aumenta en +25% su competencia de Enseñar.",
    "El personaje es un poco corto de vista: reduce en -25% su porcentaje en Descubrir.",
    "Sufre mareos cada vez que se monta en un barco: reduce en -25% su porcentaje en Navegar y mientras esté pisando la cubierta de una embarcación tendrá un -30% a todas sus tiradas de competencia y característica debido a los náuseas y mareos.",
    "El personaje posee una memoria prodigiosa —lo que conocemos como memoria eidética o fotográfica—, y es capaz de recordar casi cualquier cosa que haya visto u oído. Aumenta su porcentaje de Memoria en un +35%.",
    "Se ha criado en la costa del mar o de un río importante, así que está acostumbrado a sumergirse en el agua y a manejar pequeñas embarcaciones. Aumenta en +25% las competencias de Nadar y de Navegar.",
    "Tenga la profesión que tenga, el personaje es un verdadero aficionado a la caza y la practica siempre que tiene ocasión: aumenta en +25% su porcentaje en Rastrear y luego el tipo de caza que practica, con arco (+25% a Arcos) o mediante cetrería (+25% a Conocimiento Animal). Esta última opción es la ideal para un personaje noble.",
    "Es una persona ávida de conocimientos y, desde pequeño, ha tratado de aprender todo lo que ha podido sobre el mundo que le rodea: aumenta en +5 su característica de Cultura.",
    "El personaje posee unas firmes creencias: puede ser que no crea en la magia ni en el mundo irracional —para él sólo son fantasías y supersticiones sin validez alguna— o puede ser que piense que la razón y la fe nada pueden contra el poder inmenso de la magia: aumenta en +15 su valor de RR o de IRR (reduciendo, naturalmente, el valor contrario).",
    "Es una persona a la que le atrae mucho el sexo opuesto y no pierde ocasión de abordarlo, ni de bromear, intimar y yacer siempre que puede. Aumenta en +25% su porcentaje en Seducción.",
    "Le tiene verdadero miedo al agua y se alejará todo lo posible de ríos, arroyos y mares: reduce en -25% su porcentaje en Nadar.",
    "El personaje es un sodomita, pues lo que le gusta de verdad son las personas de su mismo sexo, inclinación sexual muy peligrosa para la época, pues si es sorprendido realizando prácticas sexuales contra natura o anuncia públicamente sus gustos, el único castigo que se conoce entonces es la muerte en la hoguera.",
    "Es un verdadero valiente, un tipo que no es fácil de amedrentar ni de asustar, aunque a veces llega a extremos casi suicidas, pues acostumbra a no retroceder ni huir a no ser que se vea superado de forma abrumadora. Aumenta en +25% su Templanza.",
    "El personaje es muy mayor, casi un viejo para los patrones de la época, pues su edad real es de 2D10+26 años: la buena noticia es que tiene 10 puntos adicionales para gastar en las competencias de su profesión por cada año por encima de 26; la mala es que, también por cada año que sobrepase los 26, deberá hacer una tirada en la Tabla de Eventos (pág. 94) y, si sobrepasa los 35, empezarán a aplicarse las reglas de envejecimiento, cambiando el resultado de muerte por -1 punto de Resistencia.",
    "Se ha criado en el campo y conoce bien la rotación y las propiedades de los cultivos: aumenta en +25% su Conocimiento Vegetal.",
    "Posee el vicio del juego y le es casi imposible rechazar una partida de cartas, dados o participar en una apuesta. Lo único bueno es que la competencia de Juego se ve aumentada en +15%.",
    "El personaje sufre de calvicie prematura o, si es de sexo femenino, de un pelo prematuramente cano, lo que puede provocar burlas y menosprecio entre sus congéneres.",
    "Cree firmemente en el honor del guerrero y piensa que sólo se debería abatir a un enemigo mirándolo cara a cara, pues es de gente villana y miserable el matar a un oponente a distancia, por la espalda, por sorpresa o desarmado. Por tanto, nunca atacará a un enemigo que no se esté defendiendo con el arma en la mano y, si quiere usar un arma a distancia (arcos, ballestas u hondas) contra otra persona —los animales y criaturas irracionales no cuentan—, tendrá un -25% a su tirada.",
    "El personaje viaja junto a un compañero, amigo, criado o esposa, que le acompaña en sus aventuras. Este PNJ se creará de la forma habitual, pero sólo tendrá 75 puntos para dividir entre sus características y no dispondrá de punto alguno para sus competencias. El PNJ será controlado por el jugador, pero el DJ tendrá en cuenta que no realice acciones estúpidas o suicidas. En caso de que muera, el PJ no recibirá ningún PAp en el transcurso de la aventura en la que haya fallecido.",
    "El personaje desprecia a los que no son como él, ya sea porque sean de otra raza, posean otra religión o pertenezcan a una clase social inferior a la suya.",
    "Por una causa u otra, lo cierto es que el PJ está maldito por Dios: le será imposible utilizar rituales de fe, se verá afectado por esos rituales como si fuera el seguidor de un demonio y deberá hacer una tirada de Templanza siempre que quiera entrar a un recinto sagrado o tocar un objeto bendecido, ya que la simple permanencia en ese lugar o el contacto con el objeto le pone enfermo: tendrá -50% a todas sus tiradas de competencia y característica mientras se encuentre en el interior del recinto o toque el objeto.",
    "Es un tipo alto, bastante más de lo normal: aumenta su altura en 0,30 varas.",
    "Posee reflejos felinos que le permiten retorcerse en el aire como un gato: aumenta en +25% su porcentaje en Saltar y en Esquivar.",
    "El personaje tiene una mascota, un animal que le acompaña a todas partes y que obedece las órdenes del PJ, siempre que no sean muy complejas. Elige el animal que desees (págs. 380 y 381), pero ten en cuenta que no tendrá habilidades especiales y que si muere, el PJ no ganará PAp al finalizar la aventura en la que muriera el animal.",
    "Está muy delgado, más de lo normal, lo que era visto en la Edad Media como síntoma de enfermedad, y muchos pueden rehuirlo por eso: reduce su peso en 60 libras.",
    "El personaje es una persona ágil y veloz, y es capaz de encaramarse a los árboles como las ardillas o de dejar atrás a sus perseguidores a la velocidad de un galgo. Sus competencias de Correr y Trepar se ven aumentadas en +25%.",
    "Es un tipo verdaderamente guarro, incluso para los patrones de la época: nunca se baña —al menos de forma voluntaria— ni se cambia de ropa, lo que conlleva un olor corporal capaz de levantar a un muerto. Cualquier tirada de competencia que implique cierto grado de relación del PJ con otra persona se ve modificada en -25%, como puede ser Seducción, Comerciar o Elocuencia.",
    "El personaje es tartamudo y le cuesta mucho hablar con sus semejantes: reduce en -25% las competencias de Cantar, Comerciar, Corte, Disfrazarse, Mando y Elocuencia.",
    "Es un tipo bastante desmañado e inepto: reduce en -5 puntos su característica de Habilidad.",
    "Le gusta la literatura y la poesía, y desde siempre ha intentado emular sus lecturas: aumenta en +25% su porcentaje en Leer y Escribir.",
    "El personaje es un tipo sigiloso y discreto, capaz de pasar desapercibido en medio de una multitud o de fundirse con las sombras para no ser observado: aumenta en +25% su competencia de Sigilo.",
    "Es una persona marrullera y camorrista, de las que empiezan las peleas en las tabernas y las broncas en las plazas, esas trifulcas en las que no suele llegar la sangre al río pero que permiten soltar la mala sangre que se guarda uno en el interior. Aumenta en +25% su competencia de Pelea.",
    "Tiene unos dedos ligeros, capaces de realizar toda clase de juegos de prestidigitación… o de birlar una bolsa sin que se percate su dueño: aumenta en +25% su porcentaje en Escamotear.",
    "El personaje es un verdadero borracho: le gusta beber de forma compulsiva y lo hace a todas horas del día. Le cuesta mucho resistirse a una ronda de alcohol y casi nunca se encuentra sobrio. Cada vez que se entregue a su vicio, el DJ le otorgará un modificador de -30% a todas sus tiradas de competencia y característica debido a la cogorza que tendrá encima.",
    "Se recupera rápidamente de todo tipo de heridas y enfermedades: puede tirar RESx4 (en vez de x3) para evitar caer enfermo y recupera +1 PV cada semana, aparte de la curación natural o mediante tratamientos médicos.",
    "Una grave enfermedad o un accidente ha dejado al personaje jorobado: no podrá tener más de 15 en Fuerza ni en Agilidad —si tiene más, se le reduce hasta ese valor—, tendrá un -25% a todas sus competencias de Agilidad y su Aspecto se verá reducido en 5 puntos.",
    "El personaje es un tipo delicado y frágil: en caso de tener que tirar por Resistencia para evitar caer inconsciente o para sobreponerse al dolor de alguna forma, se considerará que su Resistencia es 5 puntos menor de lo que es realmente.",
    "Es un estudiante aplicado, pues es capaz de aprender rápidamente hasta los conceptos más complicados y aplicarlos a su experiencia. Cada vez que esté aumentando una competencia mediante la enseñanza, la tirada de característica que debe realizar al final se hará como si tuviera +5 puntos en dicha característica, o si se trata de un hechizo, el tiempo de aprendizaje se dividirá entre dos (redondeando hacia arriba).",
    "Posee una cabeza dura como la piedra: las borracheras no le producen resacas y es muy difícil dejarlo inconsciente (toda tirada de Resistencia para evitar perder el conocimiento se hará como si su RES fuera 5 puntos mayor).",
    "El personaje es tuerto: reduce en -2 su característica de Percepción y en -25% el porcentaje de sus competencias de armas a distancia y de Lanzar.",
    "Tiene un extraordinario sentido de la orientación: siempre sabrá dónde se encuentra el norte y es prácticamente imposible que se pueda perder. Aumenta en +25% su porcentaje en Astrología.",
    "Es un tipo colérico: el personaje se enfada muy fácilmente y al menor gesto, palabra o mirada de menosprecio o insulto, echa mano de sus armas y ataca al que cree que puede estar faltándole al respeto, lo que suele provocarle a él y a sus compañeros muchos quebraderos de cabeza.",
    "Es un hombre pobre que tiene bastante menos dinero de lo que suele ser habitual: reduce a la mitad el dinero inicial con el que debería comenzar el juego, y recuerda que debes seguir gastando el 50% en equipo y posesiones.",
    "Es un estudioso de las leyendas y los cuentos, y hace todo lo posible por escuchar nuevos relatos de tierras lejanas o cercanas: aumenta en +25% su porcentaje en Leyendas.",
    "Es una persona de mundo, conocedora de diversos territorios y reinos. Por eso, se encuentre en el sitio que se encuentre, siempre que sea en la Península Ibérica, tendrá un porcentaje mínimo en Conocimiento de Área igual a su característica de Cultura, aunque no haya nacido allí.",
    "El personaje es una persona enfermiza, con una salud bastante debilitada: resta -5 puntos a su característica de Resistencia (que puede incluso bajar por debajo del mínimo de 10).",
    "El personaje es un sanador nato, y ya sea por los estudios recibidos o por una aptitud natural, lo cierto es que sabe cómo tratar todo tipo de heridas y enfermedades: aumenta en +25% su porcentaje en Medicina y en Sanar.",
    "Es un tipo tacaño y miserable: le cuesta muchísimo gastarse el dinero, ya sea para él —siempre viste con ropas muy gastadas y un equipo anticuado— o para los demás, a los que no les prestará nunca nada.",
    "Posee una habilidad natural para el combate: todas las competencias de armas se ven aumentadas en +10%."
];

const ENFERMEDAD = ["Alergia", "Herpes", "Ladillas", "Gonorrea", "Lepra", "Mal de San Antón"];

?>
$competenciasPj = [
"Alquimia" => $cul,
"Artesanía" => $hab,
"Astrología" => $cul,
"Cabalgar" => $agi,
"Cantar" => $com,
"Comerciar" => $com,
"Conducir Carro" => $hab,
"Conocimiento Animal" => $cul,
"Conocimiento de Área" => $cul,
"Conocimiento Mágico" => $cul,
"Conocimiento Mineral" => $cul,
"Conocimiento Vegetal" => $cul,
"Correr" => $agi,
"Corte" => $com,
"Degustar" => $per,
"Descubrir" => $per,
"Disfrazarse" => $com,
"Elocuencia" => $com,
"Empatía" => $per,
"Enseñar" => $com,
"Escamotear" => $hab,
"Escuchar" => $per,
"Esquivar" => $agi,
"Forzar Mecanismos" => $hab,
"Idioma" => $cul,
"Juego" => $hab,
"Lanzar" => $agi,
"Leer y Escribir" => $cul,
"Leyendas" => $cul,
"Mando" => $com,
"Medicina" => $cul,
"Memoria" => $per,
"Música" => $cul,
"Nadar" => $agi,
"Navegar" => $hab,
"Ocultar" => $hab,
"Rastrear" => $per,
"Saltar" => $agi,
"Sanar" => $hab,
"Seducción" => $asp,
"Sigilo" => $agi,
"Teología" => $cul,
"Tormento" => $hab,
"Trepar" => $agi
];
break;

const SIT_FAMILIAR = ["El personaje es hijo bastardo y además desconoce quiénes fueron sus padres: no posee hermanos y se ha criado con un protector o un tutor que le ha enseñado lo que sabe de la vida.", "El personaje ha nacido en el seno de un matrimonio y sus padres todavía están vivos.", "El personaje ha nacido en el seno de un matrimonio, aunque sólo viven su madre y sus hermanos. En caso de ser hijo primogénito, el PJ hereda el título de su padre.", "El personaje ha nacido en el seno de un matrimonio, aunque sólo viven su padre y sus hermanos.", "El personaje ha nacido en el seno de un matrimonio, pero no vive ninguno de sus padres, sólo sus hermanos. En caso de ser hijo primogénito, el PJ hereda el título de su padre."];


"Espurio: Hijo de una barragana concubina pero que no ha sido reconocido por el padre.",
"Manssur: Hijo de prostituta.",
"Natural: Hijo de una barragana o concubina pero que sí ha sido reconocido por el padre.",
"Nato: Hijo de un adulterio, pero que ha sido criado por el marido cornudo como si fuera hijo suyo."]

const MATRIMONIO = ["El PJ estuvo casado, pero el cónyuge murió, aunque pudo llegar a tener hijos.", "El PJ está casado, pero no sabe dónde se encuentra su cónyuge (desaparecido, raptado, fugado…), aunque puede que le haya dejado hijos a su cargo.", "El PJ está casado y su cónyuge se encuentra en perfecto estado de salud: si acompaña al personaje, se creará de la forma descrita en la vergüenza Compañero de Infortunios. Además, el matrimonio puede haber dado frutos y tener hijos."];

const ARMAS_VIL = ["Arcos", "Cuchillos", "Hachas", "Hondas", "Mazas", "Palos", "Pelea"];
const ARMAS_SOL = ["Arcos", "Ballestas", "Cuchillos", "Escudos", "Hachas", "Lanzas", "Mazas", "Pelea"];
const ARMAS_NOB = ["Ballestas", "Cuchillos", "Escudos", "Espadas", "Espadones", "Lanzas", "Pelea"];

let plusBt = document.getElementById("plusBt")

plusBt.addEventListener("click", function() {
    let plus = document.getElementById("plus");
    let n = parseInt(plus.innerText);
    n += 1;
    plus.innerText = n;
});
let mB = document.getElementById("minusBt")

mB.addEventListener("click", function() {
    let plus = document.getElementById("plus");
    let n = parseInt(plus.innerText);
    n -= 1;
    plus.innerText = n;
});

<div class="cc">
            <i id="plusBt" class="fa fa-plus" aria-hidden="true">
                <p id="plus">0</p>
            </i>
            <i id="minusBt" class="fa fa-minus" aria-hidden="true">
                <p id="minus">0</p>
            </i>
        </div>


