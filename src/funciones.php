<?php

declare(strict_types=1);

namespace src;

const REINOS = ["Corona de Castilla", "Corona de Aragón", "Reino de Granada", "Reino de Navarra", "Reino de Portugal"];
const NOM_CAS_M = ["Alarico", "Alejandro", "Alfonso", "Alvar", "Ángel", "Arturo", "Ataúlfo", "Calixto", "Cándido", "Carlos", "César", "Claudio", "Cristóbal", "Diego", "Felipe", "Fernando", "Francisco", "Gabriel", "Gonzalo", "Gregorio", "Guillermo", "Honesto", "Isidoro", "Isidro", "Jorge", "Julián", "Lázaro", "Lope", "Manuel", "Martín", "Mateo", "Mauricio", "Miguel", "Onofre", "Pablo", "Pedro", "Pelayo", "Rafael", "Ramiro", "Ricardo", "Rodolfo", "Rodrigo", "Roque", "Sancho", "Sebastián", "Severo", "Simplicio", "Sixto", "Tancredo", "Teolfo", "Timoteo", "Tomás", "Valentín", "Vicente", "Víctor"];
const NOM_CAS_F = ["Adela", "Ágata", "Amalia", "Bárbara", "Beatriz", "Bernarda", "Blanca", "Bonifacia", "Camila", "Carlota", "Carmen", "Cecilia", "Celestina", "Cirila", "Clara", "Claudia", "Cristina", "Dorotea", "Elvira", "Emilia", "Flora", "Francisca", "Genoveva", "Gregoria", "Helena", "Hilaria", "Honorata", "Inés", "Isabel", "Juana", "Julia", "Laura", "Leonor", "Lucía", "Margarita", "María", "Milagros", "Ofelia", "Orosia", "Paloma", "Patricia", "Petra", "Priscila", "Radegunda", "Ramona", "Rosalinda", "Susana", "Teodora", "Teresa", "Ursina", "Úrsula", "Urraca", "Violante", "Virtudes", "Visitación"];
const NOM_ARA_M = ["Alexandro", "Alifonso", "Anchel", "Andreu", "Antón", "Asén", "Balantín", "Bastián", "Benet", "Bernat", "Bertolomé", "Bertrán", "Betrurián", "Beturino", "Bizé", "Bras", "Calistro", "Carapasio", "Chabier", "Chacobo", "Chaume", "Chazinto", "Chenaro", "Cherardo", "Cheremías", "Chermán", "Cherónimo", "Chesús", "Chil", "Chimen", "Chinés", "Chorche", "Chuan", "Chuaquín", "Chulián", "Chulio", "Chusto", "Chisé", "Climén", "Colás", "Dimetrio", "Donisio", "Ebardo", "Fertús", "Francho", "Garapasio", "Grabiel", "Guergorio", "Inazio", "Istebe", "Lauriano", "Locadio", "Lodosis", "Lonzio", "Loreto", "Lorién", "Luterio", "Maiximo", "Mané", "Marzal", "Mateu", "Menazio", "Menejildo", "Miterio", "Nizeto", "Numildo", "Pere", "Piera", "Pietro", "Polonio", "Pulinario", "Ramiro", "Roldán", "Ruxer", "Satornil", "Saturiano", "Superio", "Uc", "Ufemio", "Ufrasio", "Uloxio", "Úrbez", "Usebio", "Ximén", "Zelidonio", "Zelipe", "Zequiel", "Zerilo"];
const NOM_ARA_F = ["Alezandra", "Alodia", "Anchela", "Anchels", "Asenoma", "Baldesca", "Birila", "Brixida", "Chuana", "Chuaquina", "Chulia", "Chusefa", "Chusta", "Crestina", "Dimetria", "Dolors", "Francha", "Grabiela", "Guayen", "Guergoria", "Ibon", "Iguazel", "Madalena", "Merenziana", "Nieus", "Olaria", "Orosia", "Pifania", "Polita", "Polonia", "Rexina", "Tresa", "Ufemia", "Úrbez", "Yacma", "Zelidonia", "Zelipa", "Zilia"];
const NOM_CAT_M = ["Adriá", "Agustí", "Alaric", "Albert", "Aleix", "Andreu", "Antoni", "Arnau", "Bartolomeu", "Bernat", "Blai", "Carles", "Cast", "Damiá", "Faviá", "Ferran", "Francesc", "Gabí", "Galdric", "Gregori", "Guifré", "Hilari", "Iscle", "Jaume", "Jeroni", "Joan", "Jofre", "Jordi", "Llorenç", "Manel", "Marçal", "Mateu", "Miquel", "Pau", "Pere", "Prim", "Ramir", "Ramón", "Roderic", "Sixt", "Teodoric"];
const NOM_CAT_F = ["Agnés", "Alexandra", "Alícia", "Alódia", "Anna", "Angelina", "Camilúla", "Caritat", "Carme", "Clarissa", "Dolors", "Dolça", "Estel", "Francesca", "Gemma", "Gloria", "Joana", "Josepa", "Lea", "Lídia", "Llúcia", "Marcelúlina", "Margarida", "Marianna", "Montserrat", "Neus", "Roser", "Socors", "Susanna"];
const NOM_GAL_M = ["Adrao", "Agostiño", "Alberte", "Aleixo", "André", "Anxio", "Antón", "Artús", "Bertomeu", "Bernal", "Bras", "Brandán", "Camiño", "Caitán", "Cibrao", "Cloio", "Estevo", "Euxeo", "Filipe", "Fuco", "Gorecho", "Leuter", "Liño", "Lois", "Manecho", "Roi", "Tiago", "Tomé", "Xacome", "Xan", "Xaquín", "Xelasio", "Xervasio", "Xenxo", "Xino", "Xurxo", "Xosé"];
const NOM_GAL_F = ["Adega", "Alis", "Andreia", "Asunta", "Auria", "Branca", "Candela", "Comba", "Dinis", "Dores", "Estrela", "Euxea", "Frol", "Ilda", "Ledicia", "Loisa", "Maruxa", "Mariña", "Martiño", "Miragres", "Nela", "Neves", "Trega", "Tareixa", "Trindade", "Uxia", "Xema", "Xertrude", "Xilda", "Xisela"];
const NOM_EUS_M = ["Aingeru", "Alex", "Amand", "Anborsti", "Ander", "Anter", "Argia", "Baraxil", "Dunixi", "Edrigu", "Edorta", "Endika", "Erramun", "Gontzal", "Goio", "Gorka", "Gundane", "Igaro", "Ikini", "Imanol", "Iñaki", "Josu", "Jokin", "Karmel", "Koldo", "Lander", "Luken", "Mikel", "Paskal", "Patxi", "Pol", "Shanti", "Ximun", "Zuzen"];
const NOM_EUS_F = ["Argia", "Alaiñe", "Anixe", "Austiñe", "Batirtze", "Birkide", "Burne", "Bureskunde", "Dunixe", "Elixe", "Ermiñe", "Estitxu", "Garbiñe", "Gaxux", "Gorane", "Ilariñe", "Jokiñe", "Julene", "Katixa", "Kispiñe", "Konxesi", "Kuspiñe", "Libe", "Lide", "Lonora", "Lukene", "Markele", "Mari", "Mariñe", "Mertxe", "Nunile", "Ostatxu", "Seña", "Txaro", "Zutaiola"];
const NOM_JUD_M = ["Aarón", "Abner", "Abraham", "Absalón", "Asher", "Baltasar", "Daniel", "David", "Eleazar", "Ezequiel", "Hasdai", "Isaac (Ishaq)", "Isaías", "Jacob", "Job", "Jonás (Jonah)", "José (Yosef)", "Josué", "Judas", "Lázaro", "Leví", "Malaquías", "Matías", "Melchor", "Moisés", "(Moshe)", "Nataniel", "Nehemiah", "Nicodemo", "Nicomedes", "Salomón", "(Shelomo)", "Samuel", "(Shemuel)", "Simeón", "Tobías", "Yahia", "Yehudá", "Zacarías"];
const NOM_JUD_F = ["Ana", "Belén", "Esther", "Judith", "Karima", "Lea", "Libia", "Marta", "Miriam", "Nabila", "Raquel", "(Rajel)", "Rebeca", "(Ribka)", "Ruth", "Salomé", "Sara", "(Zarah)", "Sarwa", "Tamar", "Zenobia"];
const NOM_MUS_M = ["Abbad", "Abbas", "Abid", "Absam", "Abu", "Ahmed", "Ali", "Amir", "Ammar", "Awland", "Badis", "Banu", "Barmaki", "Bazlaf", "Buluggin", "Dawud", "Garur", "Harum", "Hassán", "Hussein", "Khaled", "Malik", "Mubarak", "Muhammad", "Musakkan", "Mustafa", "Mu´tamid", "Mutawakkil", "Othmán", "Qarawi", "Rachid", "Rasiq", "Sumadih", "Yabiz", "Yusuf", "Zuhayr"];
const NOM_MUS_F = ["Aixa", "Asma", "Fátima", "Hafsah", "Jadicha", "Kalthoum", "Karima", "Khadija", "Ladda", "Latifa", "Miriam", "Moraima", "Najate", "Nasma", "Nuba", "Ouafae", "Rabea", "Salma", "Soraya", "Subh", "Walada", "Zarah", "Zohra", "Zohraida", "Zoraya", "Zubayda"];
const SIT_FAMILIAR = ["El personaje es hijo bastardo y además desconoce quiénes fueron sus padres: no posee hermanos y se ha criado con un protector o un tutor que le ha enseñado lo que sabe de la vida.", "El personaje ha nacido en el seno de un matrimonio y sus padres todavía están vivos.", "El personaje ha nacido en el seno de un matrimonio, aunque sólo viven su madre y sus hermanos. En caso de ser hijo primogénito, el PJ hereda el título de su padre.", "El personaje ha nacido en el seno de un matrimonio, aunque sólo viven su padre y sus hermanos.", "El personaje ha nacido en el seno de un matrimonio, pero no vive ninguno de sus padres, sólo sus hermanos. En caso de ser hijo primogénito, el PJ hereda el título de su padre."];
const BASTARDO = ["Fornecido: Hijo de un adulterio, de una relación incestuosa entre parientes o de una monja o sacerdote.", "Espurio: Hijo de una barragana concubina pero que no ha sido reconocido por el padre.", "Manssur: Hijo de prostituta.", "Natural: Hijo de una barragana o concubina pero que sí ha sido reconocido por el padre.", "Nato: Hijo de un adulterio, pero que ha sido criado por el marido cornudo como si fuera hijo suyo."];
const MATRIMONIO = ["El PJ estuvo casado, pero el cónyuge murió, aunque pudo llegar a tener hijos.", "El PJ está casado, pero no sabe dónde se encuentra su cónyuge (desaparecido, raptado, fugado…), aunque puede que le haya dejado hijos a su cargo.", "El PJ está casado y su cónyuge se encuentra en perfecto estado de salud: si acompaña al personaje, se creará de la forma descrita en la vergüenza Compañero de Infortunios. Además, el matrimonio puede haber dado frutos y tener hijos."];
const ARMAS_VIL = ["Arcos", "Cuchillos", "Hachas", "Hondas", "Mazas", "Palos", "Pelea"];
const ARMAS_SOL = ["Arcos", "Ballestas", "Cuchillos", "Escudos", "Hachas", "Lanzas", "Mazas", "Pelea"];
const ARMAS_NOB = ["Ballestas", "Cuchillos", "Escudos", "Espadas", "Espadones", "Lanzas", "Pelea"];
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
    "El personaje es muy mayor, casi un viejo para los expresiones de la época, pues su edad real es de 2D10+26 años: la buena noticia es que tiene 10 puntos adicionales para gastar en las competencias de su profesión por cada año por encima de 26; la mala es que, también por cada año que sobrepase los 26, deberá hacer una tirada en la Tabla de Eventos (pág. 94) y, si sobrepasa los 35, empezarán a aplicarse las reglas de envejecimiento, cambiando el resultado de muerte por -1 punto de Resistencia.",
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
    "Es un tipo verdaderamente guarro, incluso para los expresiones de la época: nunca se baña —al menos de forma voluntaria— ni se cambia de ropa, lo que conlleva un olor corporal capaz de levantar a un muerto. Cualquier tirada de competencia que implique cierto grado de relación del PJ con otra persona se ve modificada en -25%, como puede ser Seducción, Comerciar o Elocuencia.",
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


function sexo(): string
{
    $tirada = rand(0, 1);
    $tirada == 0 ? $sexo = "F" : $sexo = "M";
    return $sexo;
}

function nombre(string $pueblo, string $sexo): string
{
    switch ($pueblo) {
        case 'Castellano':
        case 'Asturleonés':
            if ($sexo == "M") {
                $longitud = sizeof(NOM_CAS_M) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_CAS_M[$tirada];
            } else {
                $longitud = sizeof(NOM_CAS_F) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_CAS_F[$tirada];
            }
            break;
        case "Aragonés":
            if ($sexo == "M") {
                $longitud = sizeof(NOM_ARA_M) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_ARA_M[$tirada];
            } else {
                $longitud = sizeof(NOM_ARA_F) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_ARA_F[$tirada];
            }
            break;
        case 'Catalán':
            if ($sexo == "M") {
                $longitud = sizeof(NOM_CAT_M) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_CAT_M[$tirada];
            } else {
                $longitud = sizeof(NOM_CAT_F) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_CAT_F[$tirada];
            }
            break;
        case 'Gallego':
        case 'Portugués':
            if ($sexo == "M") {
                $longitud = sizeof(NOM_GAL_M) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_GAL_M[$tirada];
            } else {
                $longitud = sizeof(NOM_GAL_F) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_GAL_F[$tirada];
            }
            break;
        case 'Vasco':
        case 'Navarro':
            if ($sexo == "M") {
                $longitud = sizeof(NOM_EUS_M) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_EUS_M[$tirada];
            } else {
                $longitud = sizeof(NOM_EUS_F) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_EUS_F[$tirada];
            }
            break;
        case 'Judío':
            if ($sexo == "M") {
                $longitud = sizeof(NOM_JUD_M) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_JUD_M[$tirada];
            } else {
                $longitud = sizeof(NOM_JUD_F) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_JUD_F[$tirada];
            }
            break;
        case 'Mudéjar':
        case 'Árabe':
        case 'Mozárabe':
            if ($sexo == "M") {
                $longitud = sizeof(NOM_MUS_M) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_MUS_M[$tirada];
            } else {
                $longitud = sizeof(NOM_MUS_F) - 1;
                $tirada = rand(0, $longitud);
                $nombre = NOM_MUS_F[$tirada];
            }
            break;
    }
    return $nombre;
}

function reino(): string
{
    $tirada = rand(1, 10);
    switch ($tirada) {
        case $tirada <= 4:
            $reino = REINOS[0];
            break;
        case $tirada <= 6:
            $reino = REINOS[1];
            break;
        case 7:
            $reino = REINOS[2];
            break;
        case 8:
            $reino = REINOS[3];
            break;
        case $tirada <= 10:
            $reino = REINOS[4];
            break;
    }
    return $reino;
}

function pueblo(string $reino): string
{
    $tirada = rand(1, 10);
    if ($reino == "Corona de Castilla") {
        switch ($tirada) {
            case $tirada <= 3:
                $pueblo = "Castellano";
                break;
            case $tirada <= 5:
                $pueblo = "Gallego";
                break;
            case 6:
                $pueblo = "Vasco";
                break;
            case 7:
                $pueblo = "Asturleonés";
                break;
            case $tirada <= 9:
                $pueblo = "Mudéjar";
                break;
            case 10:
                $pueblo = "Judío";
                break;
        }
    } elseif ($reino == "Corona de Aragón") {
        switch ($tirada) {
            case $tirada <= 4:
                $pueblo = "Aragonés";
                break;
            case $tirada <= 8:
                $pueblo = "Catalán";
                break;
            case 9:
                $pueblo = "Mudéjar";
                break;
            case 10:
                $pueblo = "Judío";
                break;
        }
    } elseif ($reino == "Reino de Granada") {
        switch ($tirada) {
            case $tirada <= 8:
                $pueblo = "Árabe";
                break;
            case 9:
                $pueblo = "Judío";
                break;
            case 10:
                $pueblo = "Mozárabe";
                break;
        }
    } elseif ($reino == "Reino de Navarra") {
        switch ($tirada) {
            case $tirada <= 6:
                $pueblo = "Navarro";
                break;
            case $tirada <= 9:
                $pueblo = "Vasco";
                break;
            case 10:
                $pueblo = "Judío";
                break;
        }
    } elseif ($reino == "Reino de Portugal") {
        switch ($tirada) {
            case $tirada <= 6:
                $pueblo = "Portugués";
                break;
            case $tirada <= 8:
                $pueblo = "Judío";
                break;
            case $tirada <= 10:
                $pueblo = "Mudéjar";
                break;
        }
    }
    return $pueblo;
}

function sociedad(string $pueblo): string
{
    if ($pueblo == "Árabe" || $pueblo == "Mozárabe") {
        $sociedad = "Islámica";
    } elseif ($pueblo == "Judío") {
        $sociedad = "Judía";
    } else {
        $sociedad = "Cristiana";
    }
    return $sociedad;
}

function pSocial(string $sociedad, string $pueblo): string
{
    $tirada = rand(1, 10);
    if ($sociedad == "Cristiana") {
        switch ($tirada) {
            case 1:
                $pueblo == 'Mudéjar' || $pueblo == 'Vasco'
                    ? $pSocial = pSocial($sociedad, $pueblo)
                    : $pSocial = "Alta Nobleza";
                break;
            case 2:
                $pueblo == 'Mudéjar' || $pueblo == 'Vasco'
                    ? $pSocial = pSocial($sociedad, $pueblo)
                    : $pSocial = "Baja Nobleza";
                break;
            case $tirada <= 4:
                $pueblo == 'Vasco'
                    ? $pSocial = pSocial($sociedad, $pueblo)
                    : $pSocial = "Burguesía";
                break;
            case $tirada <= 6:
                $pSocial = "Villano";
                break;
            case $tirada <= 9:
                $pSocial = "Campesino";
                break;
            case 10:
                $pueblo == 'Mudéjar'
                    ? $pSocial = "Esclavo"
                    : $pSocial = pSocial($sociedad, $pueblo);
                break;
        }
    } elseif ($sociedad == "Islámica") {
        switch ($tirada) {
            case 1:
                $pueblo == 'Mozárabe'
                    ? $pSocial = pSocial($sociedad, $pueblo)
                    : $pSocial = "Alta Nobleza";
                break;
            case 2:
                $pueblo == 'Mozárabe'
                    ? $pSocial = pSocial($sociedad, $pueblo)
                    : $pSocial = "Baja Nobleza";
                break;
            case $tirada <= 4:
                $pSocial = "Mercader";
                break;
            case $tirada <= 6:
                $pSocial = "Ciudadano";
                break;
            case $tirada <= 9:
                $pSocial = "Campesino";
                break;
            case 10:
                $pSocial = "Esclavo";
                break;
        }
    } elseif ($sociedad == "Judía") {
        switch ($tirada) {
            case $tirada <= 4:
                $pSocial = "Burguesía";
                break;
            case $tirada <= 10:
                $pSocial = "Villano";
                break;
        }
    }
    return $pSocial;
}

function titulo(string $sociedad, string $pSocial, string $sexo): string
{
    $titulo = "";
    $tirada = rand(1, 10);
    if ($sociedad == "Cristiana") {
        if ($pSocial == "Alta Nobleza") {
            switch ($tirada) {
                case 1:
                    $sexo == "M"
                        ? $titulo = "Duque"
                        : $titulo = "Duquesa";
                    break;
                case 2:
                    $sexo == "M"
                        ? $titulo = "Marqués"
                        : $titulo = "Marquesa";
                    break;
                case $tirada <= 4:
                    $sexo == "M"
                        ? $titulo = "Conde"
                        : $titulo = "Condesa";
                    break;
                case $tirada <= 7:
                    $sexo == "M"
                        ? $titulo = "Vizconde"
                        : $titulo = "Vizcondesa";
                    break;
                case $tirada <= 10:
                    $sexo == "M"
                        ? $titulo = "Barón"
                        : $titulo = "Baronesa";
                    break;
            }
        } elseif ($pSocial == "Baja Nobleza") {
            switch ($tirada) {
                case $tirada <= 2:
                    $sexo == "M"
                        ? $titulo = "Señor"
                        : $titulo = "Señora";
                    break;
                case $tirada <= 5:
                    $sexo == "M"
                        ? $titulo = "Caballero"
                        : $titulo = "Dama";
                    break;
                case $tirada <= 10:
                    $titulo = "Hidalgo";
                    break;
            }
        } elseif ($pSocial == "Campesino") {
            switch ($tirada) {
                case $tirada <= 3:
                    $titulo = "Colono";
                    break;
                case $tirada <= 9:
                    $titulo = "Vasallo";
                    break;
                case 10:
                    $titulo = "Siervo de la Gleba";
                    break;
            }
        }
    } elseif ($sociedad == "Islámica") {
        if ($pSocial == "Alta Nobleza") {
            switch ($tirada) {
                case 1:
                    $titulo = "Sharif";
                    break;
                case $tirada <= 3:
                    $titulo = "Shayif";
                    break;
                case $tirada <= 6:
                    $titulo = "Emir";
                    break;
                case $tirada <= 10:
                    $titulo = "Qadi";
                    break;
            }
        } elseif ($pSocial == "Baja Nobleza") {
            switch ($tirada) {
                case $tirada <= 3:
                    $titulo = "Sa´id";
                    break;
                case $tirada <= 10:
                    $titulo = "Al-Barraz";
                    break;
            }
        }
    }
    return $titulo;
}

function profesion(string $sociedad, string $pSocial, string $reino, string $pueblo, string $sexo): string
{
    $tirada = rand(1, 100);
    if ($sociedad == "Cristiana") {
        if ($pSocial == "Alta Nobleza") {
            switch ($tirada) {
                case $tirada <= 10:
                    $profesion = "Alquimista";
                    break;
                case $tirada <= 20:
                    $profesion = "Caballero de Orden Militar";
                    break;
                case $tirada <= 40:
                    $sexo == "M"
                        ? $profesion = "Clérigo"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 60:
                    $profesion = "Cortesano";
                    break;
                case $tirada <= 80:
                    $profesion = "Infanzón";
                    break;
                case $tirada <= 90:
                    $pueblo != "Mudéjar"
                        ? $profesion = "Monje"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 100:
                    $profesion = "Trovador";
                    break;
            }
        } elseif ($pSocial == "Baja Nobleza") {
            switch ($tirada) {
                case $tirada <= 10:
                    $profesion = "Alquimista";
                    break;
                case $tirada <= 20:
                    $sexo == "F"
                        ? $profesion = "Ama"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 30:
                    $profesion = "Caballero de Orden Militar";
                    break;
                case $tirada <= 40:
                    $sexo == "M"
                        ? $profesion = "Clérigo"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 60:
                    $profesion = "Cortesano";
                    break;
                case $tirada <= 80:
                    $profesion = "Infanzón";
                    break;
                case $tirada <= 90:
                    $pueblo != "Mudéjar"
                        ? $profesion = "Monje"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 100:
                    $profesion = "Trovador";
                    break;
            }
        } elseif ($pSocial == "Burguesía") {
            switch ($tirada) {
                case $tirada <= 5:
                    $sexo == "M" && $pueblo != "Mudéjar"
                        ? $profesion = "Alguacil"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 15:
                    $profesion = "Alquimista";
                    break;
                case $tirada <= 20:
                    $profesion = "Barbero Cirujano";
                    break;
                case $tirada <= 30:
                    $profesion = "Cambista";
                    break;
                case $tirada <= 40:
                    $profesion = "Comerciante";
                    break;
                case $tirada <= 50:
                    $profesion = "Escriba";
                    break;
                case $tirada <= 55:
                    $profesion = "Marino";
                    break;
                case $tirada <= 65:
                    $profesion = "Médico";
                    break;
                case $tirada <= 70:
                    $pueblo != "Mudéjar"
                        ? $profesion = "Monje"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 75:
                    $reino == "Corona de Castilla"
                        ? $profesion = "Pardo"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 80:
                    $profesion = "Pirata";
                    break;
                case $tirada <= 90:
                    $sexo == "M" && $pueblo != "Mudéjar"
                        ? $profesion = "Sacerdote"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 100:
                    $pueblo != "Mudéjar"
                        ? $profesion = "Soldado"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
            }
        } elseif ($pSocial == "Villano") {
            switch ($tirada) {
                case $tirada <= 5:
                    $sexo == "M" && $pueblo != "Mudéjar"
                        ? $profesion = "Alguacil"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 15:
                    $profesion = "Artesano";
                    break;
                case $tirada <= 20:
                    $profesion = "Barbero Cirujano";
                    break;
                case $tirada <= 25:
                    $profesion = "Bufón";
                    break;
                case $tirada <= 30:
                    $profesion = "Cómico";
                    break;
                case $tirada <= 35:
                    $profesion = "Embaucador";
                    break;
                case $tirada <= 40:
                    $pueblo != "Mudéjar"
                        ? $profesion = "Goliardo"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 45:
                    $profesion = "Juglar";
                    break;
                case $tirada <= 50:
                    $profesion = "Ladrón";
                    break;
                case $tirada <= 60:
                    $profesion = "Marino";
                    break;
                case $tirada <= 65:
                    $profesion = "Mendigo";
                    break;
                case $tirada <= 70:
                    $pueblo != "Mudéjar"
                        ? $profesion = "Monje"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 75:
                    $reino == "Corona de Castilla"
                        ? $profesion = "Pardo"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 80:
                    $profesion = "Pirata";
                    break;
                case $tirada <= 85:
                    $sexo == "F"
                        ? $profesion = "Ramera"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 90:
                    $sexo == "M" && $pueblo != "Mudéjar"
                        ? $profesion = "Sacerdote"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 95:
                    $profesion = "Siervo de Corte";
                    break;
                case $tirada <= 100:
                    $pueblo != "Mudéjar"
                        ? $profesion = "Soldado"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
            }
        } elseif ($pSocial == "Campesino") {
            switch ($tirada) {
                case $tirada <= 5:
                    $reino == "Corona de Aragón"
                        ? $profesion = "Almogávar"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 15:
                    $profesion = "Bandido";
                    break;
                case $tirada <= 20:
                    $profesion = "Brujo";
                    break;
                case $tirada <= 30:
                    $profesion = "Cazador";
                    break;
                case $tirada <= 40:
                    $profesion = "Curandero";
                    break;
                case $tirada <= 45:
                    $profesion = "Mendigo";
                    break;
                case $tirada <= 55:
                    $pueblo != "Mudéjar"
                        ? $profesion = "Monje"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 60:
                    $reino == "Corona de Castilla"
                        ? $profesion = "Pardo"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 70:
                    $profesion = "Pastor";
                    break;
                case $tirada <= 75:
                    $sexo == "F"
                        ? $profesion = "Ramera"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 80:
                    $sexo == "M" && $pueblo != "Mudéjar"
                        ? $profesion = "Sacerdote"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 90:
                    $profesion = "Siervo de Corte";
                    break;
                case $tirada <= 100:
                    $pueblo != "Mudéjar"
                        ? $profesion = "Soldado"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
            }
        } elseif ($pSocial == "Esclavo") {
            switch ($tirada) {
                case $tirada <= 10:
                    $profesion = "Bufón";
                    break;
                case $tirada <= 20:
                    $profesion = "Curandero";
                    break;
                case $tirada <= 30:
                    $profesion = "Escriba";
                    break;
                case $tirada <= 40:
                    $profesion = "Juglar";
                    break;
                case $tirada <= 50:
                    $profesion = "Mendigo";
                    break;
                case $tirada <= 60:
                    $profesion = "Pastor";
                    break;
                case $tirada <= 70:
                    $sexo == "F"
                        ? $profesion = "Ramera"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 90:
                    $profesion = "Siervo de Corte";
                    break;
                case $tirada <= 100:
                    $pueblo != "Mudéjar"
                        ? $profesion = "Soldado"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
            }
        }
    } elseif ($sociedad == "Islámica") {
        if ($pSocial == "Alta Nobleza") {
            switch ($tirada) {
                case $tirada <= 10:
                    $profesion = "Alquimista";
                    break;
                case $tirada <= 30:
                    $profesion = "Cortesano";
                    break;
                case $tirada <= 40:
                    $profesion = "Ghazi";
                    break;
                case $tirada <= 60:
                    $profesion = "Infanzón";
                    break;
                case $tirada <= 70:
                    $sexo == "M"
                        ? $profesion = "Mago"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 80:
                    $profesion = "Trovador";
                    break;
                case $tirada <= 100:
                    $sexo == "M"
                        ? $profesion = "Ulema"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
            }
        } elseif ($pSocial == "Baja Nobleza") {
            switch ($tirada) {
                case $tirada <= 10:
                    $profesion = "Alquimista";
                    break;
                case $tirada <= 30:
                    $profesion = "Cortesano";
                    break;
                case $tirada <= 40:
                    $sexo == "M"
                        ? $profesion = "Derviche"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 60:
                    $profesion = "Ghazi";
                    break;
                case $tirada <= 80:
                    $profesion = "Infanzón";
                    break;
                case $tirada <= 90:
                    $sexo == "M"
                        ? $profesion = "Mago"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 100:
                    $profesion = "Trovador";
                    break;
            }
        } elseif ($pSocial == "Mercader") {
            switch ($tirada) {
                case $tirada <= 5:
                    $sexo == "M"
                        ? $profesion = "Alguacil"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 15:
                    $profesion = "Alquimista";
                    break;
                case $tirada <= 20:
                    $profesion = "Barbero Cirujano";
                    break;
                case $tirada <= 30:
                    $profesion = "Cambista";
                    break;
                case $tirada <= 40:
                    $profesion = "Comerciante";
                    break;
                case $tirada <= 45:
                    if ($pueblo == "Árabe" && $sexo == "M") {
                        $profesion = "Derviche";
                    } else {
                        $tirada % 2 == 0
                            ? $profesion = "Sacerdote"
                            : $profesion = "Monje";
                    }
                    break;
                case $tirada <= 55:
                    $profesion = "Escriba";
                    break;
                case $tirada <= 60:
                    if ($pueblo == "Árabe") {
                        $profesion = "Ghazi";
                    } else {
                        $tirada % 2 == 0
                            ? $profesion = "Sacerdote"
                            : $profesion = "Monje";
                    }
                    break;
                case $tirada <= 65:
                    $sexo == "M"
                        ? $profesion = "Mago"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 70:
                    $profesion = "Marino";
                    break;
                case $tirada <= 80:
                    $profesion = "Médico";
                    break;
                case $tirada <= 85:
                    $profesion = "Pardo";
                    break;
                case $tirada <= 90:
                    $profesion = "Pirata";
                    break;
                case $tirada <= 100:
                    if ($pueblo == "Árabe") {
                        $profesion = "Soldado";
                    } else {
                        $tirada % 2 == 0
                            ? $profesion = "Sacerdote"
                            : $profesion = "Monje";
                    }
                    break;
            }
        } elseif ($pSocial == "Ciudadano") {
            switch ($tirada) {
                case $tirada <= 5:
                    $sexo == "M"
                        ? $profesion = "Alguacil"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 15:
                    $profesion = "Artesano";
                    break;
                case $tirada <= 20:
                    $profesion = "Barbero Cirujano";
                    break;
                case $tirada <= 25:
                    $profesion = "Bufón";
                    break;
                case $tirada <= 30:
                    $profesion = "Cómico";
                    break;
                case $tirada <= 35:
                    if ($pueblo == "Árabe" && $sexo == "M") {
                        $profesion = "Derviche";
                    } else {
                        $tirada % 2 == 0
                            ? $profesion = "Sacerdote"
                            : $profesion = "Monje";
                    }
                    break;
                case $tirada <= 40:
                    $profesion = "Embaucador";
                    break;
                case $tirada <= 45:
                    if ($pueblo == "Árabe") {
                        $profesion = "Ghazi";
                    } else {
                        $tirada % 2 == 0
                            ? $profesion = "Sacerdote"
                            : $profesion = "Monje";
                    }
                    break;
                case $tirada <= 50:
                    $profesion = "Juglar";
                    break;
                case $tirada <= 55:
                    $profesion = "Ladrón";
                    break;
                case $tirada <= 65:
                    $profesion = "Marino";
                    break;
                case $tirada <= 70:
                    $profesion = "Mendigo";
                    break;
                case $tirada <= 75:
                    $profesion = "Pardo";
                    break;
                case $tirada <= 80:
                    $profesion = "Pirata";
                    break;
                case $tirada <= 85:
                    $sexo == "F"
                        ? $profesion = "Qaina"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 90:
                    $sexo == "F"
                        ? $profesion = "Ramera"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 95:
                    $profesion = "Siervo de Corte";
                    break;
                case $tirada <= 100:
                    if ($pueblo == "Árabe") {
                        $profesion = "Soldado";
                    } else {
                        $tirada % 2 == 0
                            ? $profesion = "Sacerdote"
                            : $profesion = "Monje";
                    }
                    break;
            }
        } elseif ($pSocial == "Campesino") {
            switch ($tirada) {
                case $tirada <= 10:
                    $profesion = "Bandido";
                    break;
                case $tirada <= 20:
                    $profesion = "Brujo";
                    break;
                case $tirada <= 30:
                    $profesion = "Cazador";
                    break;
                case $tirada <= 40:
                    $profesion = "Curandero";
                    break;
                case $tirada <= 45:
                    if ($pueblo == "Árabe") {
                        $profesion = "Ghazi";
                    } else {
                        $tirada % 2 == 0
                            ? $profesion = "Sacerdote"
                            : $profesion = "Monje";
                    }
                    break;
                case $tirada <= 55:
                    $profesion = "Mendigo";
                    break;
                case $tirada <= 60:
                    $profesion = "Pardo";
                    break;
                case $tirada <= 70:
                    $profesion = "Pastor";
                    break;
                case $tirada <= 80:
                    if ($sexo == "F") {
                        $profesion = "Ramera";
                    } else {
                        $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    }
                    break;
                case $tirada <= 90:
                    $profesion = "Siervo de Corte";
                    break;
                case $tirada <= 100:
                    if ($pueblo == "Árabe") {
                        $profesion = "Soldado";
                    } else {
                        $tirada % 2 == 0
                            ? $profesion = "Sacerdote"
                            : $profesion = "Monje";
                    }
                    break;
            }
        } elseif ($pSocial == "Esclavo") {
            switch ($tirada) {
                case $tirada <= 10:
                    $profesion = "Bufón";
                    break;
                case $tirada <= 20:
                    $profesion = "Curandero";
                    break;
                case $tirada <= 30:
                    $profesion = "Escriba";
                    break;
                case $tirada <= 40:
                    $profesion = "Juglar";
                    break;
                case $tirada <= 50:
                    $profesion = "Mendigo";
                    break;
                case $tirada <= 60:
                    $profesion = "Pastor";
                    break;
                case $tirada <= 70:
                    $sexo == "F"
                        ? $profesion = "Qaina"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 80:
                    $sexo == "F"
                        ? $profesion = "Ramera"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 90:
                    $profesion = "Siervo de Corte";
                    break;
                case $tirada <= 100:
                    if ($pueblo == "Árabe") {
                        $profesion = "Soldado";
                    } else {
                        $tirada % 2 == 0
                            ? $profesion = "Sacerdote"
                            : $profesion = "Monje";
                    }
                    break;
            }
        }
    } elseif ($sociedad == "Judía") {
        if ($pSocial == "Burguesía") {
            switch ($tirada) {
                case $tirada <= 10:
                    $profesion = "Alquimista";
                    break;
                case $tirada <= 20:
                    $profesion = "Barbero Cirujano";
                    break;
                case $tirada <= 30:
                    $profesion = "Cambista";
                    break;
                case $tirada <= 40:
                    $profesion = "Comerciante";
                    break;
                case $tirada <= 50:
                    $profesion = "Escriba";
                    break;
                case $tirada <= 60:
                    $profesion = "Marino";
                    break;
                case $tirada <= 70:
                    $profesion = "Médico";
                    break;
                case $tirada <= 80:
                    $profesion = "Mediero";
                    break;
                case $tirada <= 90:
                    $profesion = "Pirata";
                    break;
                case $tirada <= 100:
                    $sexo == "M"
                        ? $profesion = "Rabino"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
            }
        } elseif ($pSocial == "Villano") {
            switch ($tirada) {
                case $tirada <= 10:
                    $profesion = "Artesano";
                    break;
                case $tirada <= 20:
                    $profesion = "Barbero Cirujano";
                    break;
                case $tirada <= 25:
                    $profesion = "Bufón";
                    break;
                case $tirada <= 30:
                    $profesion = "Cómico";
                    break;
                case $tirada <= 35:
                    $profesion = "Embaucador";
                    break;
                case $tirada <= 45:
                    $profesion = "Juglar";
                    break;
                case $tirada <= 55:
                    $profesion = "Ladrón";
                    break;
                case $tirada <= 60:
                    $profesion = "Malsín";
                    break;
                case $tirada <= 70:
                    $profesion = "Marino";
                    break;
                case $tirada <= 75:
                    $profesion = "Mendigo";
                    break;
                case $tirada <= 85:
                    $sexo == "M"
                        ? $profesion = "Muccadim"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 90:
                    $profesion = "Pirata";
                    break;
                case $tirada <= 95:
                    $sexo == "F"
                        ? $profesion = "Ramera"
                        : $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
                    break;
                case $tirada <= 100:
                    $profesion = "Siervo de Corte";
                    break;
            }
        }
    }
    return $profesion;
}

//FAMILIA E HIJOS

function sitFamiliar(): string
{
    $tirada = rand(1, 10);
    switch ($tirada) {
        case 1:
            $sitFamiliar = SIT_FAMILIAR[0];
            break;
        case 2:
            $retirada = rand(1, 10);
            switch ($retirada) {
                case $retirada <= 2:
                    $sitFamiliar = BASTARDO[0];
                    break;
                case $retirada <= 4:
                    $sitFamiliar = BASTARDO[1];
                    break;
                case $retirada <= 6:
                    $sitFamiliar = BASTARDO[2];
                    break;
                case $retirada <= 8:
                    $sitFamiliar = BASTARDO[3];
                    break;
                case $retirada <= 10:
                    $sitFamiliar = BASTARDO[4];
                    break;
            }
            break;
        case $tirada <= 7:
            $sitFamiliar = SIT_FAMILIAR[1];
            break;
        case 8:
            $sitFamiliar = SIT_FAMILIAR[2];
            break;
        case 9:
            $sitFamiliar = SIT_FAMILIAR[3];
            break;
        case 10:
            $sitFamiliar = SIT_FAMILIAR[4];
            break;
    }
    return $sitFamiliar;
}

function hermanos(string $sitFamiliar): int
{
    $hermanos = 0;
    if (str_starts_with($sitFamiliar, 'El personaje ha')) {
        $tirada1 = rand(1, 8);
        $tirada2 = rand(1, 4);
        $hermanos = $tirada1 - $tirada2;
    }
    if ($hermanos < 0) $hermanos = 0;
    return $hermanos;
}

function varones(int $hermanos): int
{
    $varones = $hermanos;
    for ($i = 0; $i < $hermanos; $i++) {
        if (sexo() == "F") {
            $varones--;
        }
    }
    if ($varones < 0) $varones = 0;
    return $varones;
}

function hembras(int $hermanos, int $varones): int
{
    return $hermanos - $varones;
}

function posicion(int $hermanos): int
{
    return rand(1, $hermanos + 1);
}

//meter restricciones con las profesiones que tienen prohibido casarse
function matrimonio(): string
{
    $matrimonio = "";
    $tirada = rand(1, 10);
    switch ($tirada) {
        case $tirada <= 2:
            $matrimonio = MATRIMONIO[0];
            break;
        case 3:
            $matrimonio = MATRIMONIO[1];
            break;
        case $tirada <= 10:
            $matrimonio = MATRIMONIO[2];
            break;
    }
    return $matrimonio;
}

function hijos(): int
{
    $hijos = 0;
    $tirada1 = rand(1, 6);
    $tirada2 = rand(1, 4);
    $hijos = $tirada1 - $tirada2;
    if ($hijos < 0) $hijos = 0;
    return $hijos;
}

//CARACTERÍSTICAS PRINCIPALES

function caracteristicas(string $profesion): array
{
    $caracteristicas = [
        "FUE" => 5,
        "AGI" => 5,
        "HAB" => 5,
        "RES" => 10,
        "PER" => 5,
        "COM" => 5,
        "CUL" => 5
    ];

    switch ($profesion) {
        case "Alguacil":
        case "Ghazi":
        case "Marino":
        case "Pirata":
        case "Siervo de Corte":
            $caracteristicas["AGI"] = 15;
            $caracteristicas["HAB"] = 15;
            break;
        case "Almogávar":
        case "Bufón":
            $caracteristicas["AGI"] = 20;
            $caracteristicas["HAB"] = 20;
            break;
        case "Alquimista":
        case "Rabino":
        case "Ulema":
            $caracteristicas["CUL"] = 20;
            break;
        case "Ama":
        case "Cazador":
            $caracteristicas["PER"] = 20;
            break;
        case "Artesano":
            $caracteristicas["HAB"] = 20;
            $caracteristicas["PER"] = 15;
            break;
        case "Bandido":
            $caracteristicas["RES"] = 15;
            $caracteristicas["PER"] = 15;
            break;
        case "Barbero Cirujano":
            $caracteristicas["HAB"] = 15;
            $caracteristicas["COM"] = 10;
            $caracteristicas["CUL"] = 10;
            break;
        case "Brujo":
        case "Clérigo":
        case "Monje":
        case "Sacerdote":
            $caracteristicas["CUL"] = 15;
            break;
        case "Caballero de Orden Militar":
            $caracteristicas["AGI"] = 15;
            $caracteristicas["CUL"] = 15;
            break;
        case "Cambista":
            $caracteristicas["HAB"] = 10;
            $caracteristicas["PER"] = 10;
            $caracteristicas["CUL"] = 15;
            break;
        case "Comerciante":
        case "Cómico":
            $caracteristicas["COM"] = 20;
            break;
        case "Cortesano":
            $caracteristicas["PER"] = 15;
            $caracteristicas["COM"] = 15;
            break;
        case "Curandero":
            $caracteristicas["HAB"] = 15;
            $caracteristicas["CUL"] = 10;
            break;
        case "Derviche":
            $caracteristicas["AGI"] = 15;
            $caracteristicas["CUL"] = 20;
            break;
        case "Embaucador":
            $caracteristicas["AGI"] = 10;
            $caracteristicas["COM"] = 15;
            break;
        case "Escriba":
            $caracteristicas["PER"] = 15;
            $caracteristicas["CUL"] = 15;
            break;
        case "Goliardo":
            $caracteristicas["AGI"] = 10;
            $caracteristicas["HAB"] = 10;
            $caracteristicas["CUL"] = 15;
            break;
        case "Infanzón":
            $caracteristicas["FUE"] = 15;
            $caracteristicas["AGI"] = 15;
            break;
        case "Juglar":
            $caracteristicas["AGI"] = 15;
            $caracteristicas["COM"] = 20;
            $caracteristicas["CUL"] = 10;
            break;
        case "Ladrón":
            $caracteristicas["AGI"] = 15;
            $caracteristicas["HAB"] = 20;
            break;
        case "Mago":
            $caracteristicas["PER"] = 15;
            $caracteristicas["CUL"] = 20;
            break;
        case "Malsín":
            $caracteristicas["AGI"] = 15;
            $caracteristicas["PER"] = 20;
            break;
        case "Médico":
            $caracteristicas["HAB"] = 15;
            $caracteristicas["CUL"] = 15;
            break;
        case "Mediero":
        case "Trovador":
            $caracteristicas["COM"] = 15;
            $caracteristicas["CUL"] = 15;
            break;
        case "Mendigo":
        case "Ramera":
            $caracteristicas["RES"] = 10;
            break;
        case "Muccadim":
            $caracteristicas["FUE"] = 15;
            $caracteristicas["CUL"] = 10;
            break;
        case "Pardo":
            $caracteristicas["AGI"] = 20;
            $caracteristicas["HAB"] = 15;
            break;
        case "Pastor":
            $caracteristicas["AGI"] = 15;
            $caracteristicas["PER"] = 20;
            break;
        case "Qaina":
            $caracteristicas["AGI"] = 15;
            $caracteristicas["COM"] = 15;
            break;
        case "Soldado":
            $caracteristicas["FUE"] = 15;
            $caracteristicas["HAB"] = 15;
            break;
        default:
            $caracteristicas = [];
            break;
    }

    return $caracteristicas;
}


function competencias(array $caracteristicas, int $aspecto): array
{
    $agi = $caracteristicas["AGI"];
    $hab = $caracteristicas["HAB"];
    $per = $caracteristicas["PER"];
    $com = $caracteristicas["COM"];
    $cul = $caracteristicas["CUL"];

    $asp = $aspecto;

    $competencias = [
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

    return $competencias;
}

function competenciasFUE(): array
{
    return [
        "Espadones",
        "Hachas",
        "Mazas"
    ];
}

function competenciasAGI(): array
{
    return [
        "Cabalgar",
        "Correr",
        "Esquivar",
        "Lanzar",
        "Nadar",
        "Saltar",
        "Sigilo",
        "Trepar",
        "Lanzas",
        "Palos",
        "Pelea"
    ];
}

function competenciasHAB(): array
{
    return [
        "Artesanía",
        "Conducir Carro",
        "Escamotear",
        "Forzar Mecanismos",
        "Juego",
        "Navegar",
        "Ocultar",
        "Sanar",
        "Tormento",
        "Cuchillos",
        "Escudos",
        "Espadas"
    ];
}

function competenciasPER(): array
{
    return [
        "Degustar",
        "Descubrir",
        "Empatía",
        "Escuchar",
        "Memoria",
        "Rastrear",
        "Arcos",
        "Ballestas",
        "Hondas"
    ];
}

function competenciasCOM(): array
{
    return [
        "Cantar",
        "Comerciar",
        "Corte",
        "Disfrazarse",
        "Elocuencia",
        "Enseñar",
        "Mando"
    ];
}

function competenciasCUL(): array
{
    return [
        "Alquimia",
        "Astrología",
        "Conocimiento Animal",
        "Conocimiento de Área",
        "Conocimiento Mágico",
        "Conocimiento Mineral",
        "Conocimiento Vegetal",
        "Idioma",
        "Idioma()",
        "Idioma(Árabe)",
        "Idioma(Griego)",
        "Idioma(Hebreo)",
        "Idioma(Latín)",
        "Leer y Escribir",
        "Leyendas",
        "Medicina",
        "Música",
        "Teología"
    ];
}

function competenciasMax(string $competencia, array $caracteristicas, int $aspecto): int
{
    //si es una competencia basada en CUL, el máximo es 100
    if (in_array($competencia, competenciasCUL())) {
        return 100;
    }

    $competencias = competencias($caracteristicas, $aspecto);
    if (isset($competencias[$competencia])) {
        return $competencias[$competencia] * 5;
    }
    return 100;
}

function armas(array $caracteristicas): array
{
    $fue = $caracteristicas["FUE"];
    $agi = $caracteristicas["AGI"];
    $hab = $caracteristicas["HAB"];
    $per = $caracteristicas["PER"];

    $armas = [
        "Arcos" => $per,
        "Ballestas" => $per,
        "Cuchillos" => $hab,
        "Escudos" => $hab,
        "Espadas" => $hab,
        "Espadones" => $fue,
        "Hachas" => $fue,
        "Hondas" => $per,
        "Lanzas" => $agi,
        "Mazas" => $fue,
        "Palos" => $agi,
        "Pelea" => $agi
    ];

    return $armas;
}

function competenciasPj(array $caracteristicas, string $profesion, int $aspecto, string $sexo): array
{

    $agi = $caracteristicas["AGI"];
    $hab = $caracteristicas["HAB"];
    $per = $caracteristicas["PER"];
    $com = $caracteristicas["COM"];
    $cul = $caracteristicas["CUL"];

    $asp = $aspecto;

    switch ($profesion) {
        case "Alguacil":
            $competenciasPj = [
                //2 menos por armas
                "Conocimiento de Área" => $cul * 3,
                "Correr" => $agi * 3,
                "Descubrir" => $per,
                "Empatía" => $per,
                "Escuchar" => $per * 3,
                "Esquivar" => $agi,
                "Mando" => $com,
                "Rastrear" => $per,
                "Sigilo" => $agi,
                "Tormento" => $hab
            ];
            break;
        case "Almogávar":
            $competenciasPj = [
                //4 menos por armas
                "Correr" => $agi,
                "Descubrir" => $per,
                "Escuchar" => $per,
                "Esquivar" => $agi * 3,
                "Rastrear" => $per,
                "Sanar" => $hab,
                "Sigilo" => $agi * 3,
                "Tormento" => $hab
            ];
            break;
        case "Alquimista":
            $competenciasPj = [
                "Alquimia" => $cul * 3,
                "Astrología" => $cul * 3,
                "Conocimiento Animal" => $cul,
                "Conocimiento Mágico" => $cul * 3,
                "Conocimiento Mineral" => $cul,
                "Conocimiento Vegetal" => $cul,
                "Empatía" => $per,
                "Enseñar" => $com,
                "Idioma(Griego)" => $cul,
                "Idioma(Latín)" => $cul,
                "Leer y Escribir" => $cul * 3,
                "Sanar" => $hab
            ];
            break;
        case "Ama":
            $competenciasPj = [
                "Artesanía(Labor)" => $hab,
                "Conocimiento Vegetal" => $cul,
                "Corte" => $com * 3,
                "Descubrir" => $per * 3,
                "Empatía" => $per,
                "Enseñar" => $com * 3,
                "Escuchar" => $per,
                "Idioma" => $cul,
                "Mando" => $com,
                "Memoria" => $per,
                "Sanar" => $hab,
                "Sigilo" => $agi * 3
            ];
            break;
        case "Artesano":
            $competenciasPj = [
                //1 menos por armas
                "Artesanía" => $hab * 3,
                "Comerciar" => $com * 3,
                "Conducir Carro" => $hab,
                "Conocimiento de Área" => $cul,
                "Descubrir" => $per * 3,
                "Elocuencia" => $com,
                "Empatía" => $per,
                "Enseñar" => $com,
                "Escuchar" => $per,
                "Leer y Escribir" => $cul,
                "Memoria" => $per * 3
            ];
            break;
        case "Bandido":
            $competenciasPj = [
                //2 menos por armas
                "Conocimiento de Área" => $cul,
                "Correr" => $agi,
                "Descubrir" => $per * 3,
                "Empatía" => $per,
                "Escuchar" => $per,
                "Lanzar" => $agi,
                "Rastrear" => $per,
                "Sigilo" => $agi * 3,
                "Tormento" => $hab * 3,
                "Trepar" => $agi
            ];
            break;
        case "Barbero Cirujano":
            $competenciasPj = [
                //1 menos por armas
                "Comerciar" => $com,
                "Conducir Carro" => $hab,
                "Conocimiento Vegetal" => $cul,
                "Correr" => $agi,
                "Descubrir" => $per,
                "Elocuencia" => $com * 3,
                "Empatía" => $per * 3,
                "Idioma" => $cul,
                "Leer y Escribir" => $cul,
                "Medicina" => $cul * 3,
                "Sanar" => $hab * 3
            ];
            break;
        case "Brujo":
            $competenciasPj = [
                "Alquimia" => $cul * 3,
                "Astrología" => $cul * 3,
                "Conocimiento Animal" => $cul,
                "Conocimiento Mágico" => $cul * 3,
                "Conocimiento Mineral" => $cul,
                "Conocimiento Vegetal" => $cul * 3,
                "Descubrir" => $per,
                "Empatía" => $per,
                "Enseñar" => $com,
                "Leyendas" => $cul,
                "Medicina" => $cul,
                "Sanar" => $hab
            ];
            break;
        case "Bufón":
            $competenciasPj = [
                "Correr" => $agi,
                "Corte" => $com,
                "Disfrazarse" => $com * 3,
                "Elocuencia" => $com * 3,
                "Escamotear" => $hab * 3,
                "Juego" => $hab,
                "Lanzar" => $agi,
                "Música" => $cul,
                "Ocultar" => $hab,
                "Saltar" => $agi * 3,
                "Sigilo" => $agi,
                "Trepar" => $agi
            ];
            break;
        case "Caballero de Orden Militar":
            if ($sexo == "F") {
                $competenciasPj = [
                    //1 menos por armas
                    "Cabalgar" => $agi * 3,
                    "Descubrir" => $per,
                    "Elocuencia" => $com,
                    "Empatía" => $per * 3,
                    "Escuchar" => $per,
                    "Esquivar" => $agi,
                    "Idioma(Latín)" => $cul,
                    "Leer y Escribir" => $cul,
                    "Mando" => $com,
                    "Sanar" => $hab * 3,
                    "Teología" => $cul * 3
                ];
            } else {
                $competenciasPj = [
                    //2 menos por armas
                    "Cabalgar" => $agi * 3,
                    "Descubrir" => $per,
                    "Elocuencia" => $com,
                    "Empatía" => $per,
                    "Escuchar" => $per,
                    "Esquivar" => $agi,
                    "Idioma(Latín)" => $cul,
                    "Leer y Escribir" => $cul,
                    "Mando" => $com,
                    "Teología" => $cul * 3
                ];
            }
            break;
        case "Cambista":
            $competenciasPj = [
                //1 menos por armas
                "Alquimia" => $cul * 3,
                "Artesanía" => $hab,
                "Comerciar" => $com * 3,
                "Conocimiento Mineral" => $cul * 3,
                "Descubrir" => $per,
                "Elocuencia" => $com * 3,
                "Empatía" => $per,
                "Idioma" => $cul,
                "Leer y Escribir" => $cul,
                "Memoria" => $per,
                "Ocultar" => $hab
            ];
            break;
        case "Cazador":
            $competenciasPj = [
                //2 menos por armas
                "Cabalgar" => $agi,
                "Conocimiento Animal" => $cul,
                "Conocimiento de Área" => $cul,
                "Conocimiento Vegetal" => $cul,
                "Descubrir" => $per,
                "Escuchar" => $per * 3,
                "Lanzar" => $agi,
                "Rastrear" => $per * 3,
                "Sigilo" => $agi * 3,
                "Trepar" => $agi
            ];
            break;
        case "Clérigo":
            $competenciasPj = [
                //1 menos por armas
                "Corte" => $com,
                "Descubrir" => $per,
                "Elocuencia" => $com * 3,
                "Empatía" => $per,
                "Enseñar" => $com,
                "Escuchar" => $per,
                "Idioma(Griego)" => $cul,
                "Idioma(Latín)" => $cul * 3,
                "Leer y Escribir" => $cul * 3,
                "Memoria" => $per,
                "Teología" => $cul * 3
            ];
            break;
        case "Comerciante":
            $competenciasPj = [
                //1 menos por armas
                "Comerciar" => $com * 3,
                "Conducir Carro" => $hab,
                "Conocimiento de Área" => $cul,
                "Descubrir" => $per,
                "Elocuencia" => $com * 3,
                "Empatía" => $per * 3,
                "Escuchar" => $per,
                "Idioma" => $cul * 3,
                "Leer y Escribir" => $cul,
                "Nadar" => $agi,
                "Ocultar" => $hab
            ];
            break;
        case "Cómico":
            $competenciasPj = [
                //1 menos por armas
                "Conducir Carro" => $hab,
                "Disfrazarse" => $com * 3,
                "Elocuencia" => $com * 3,
                "Empatía" => $per * 3,
                "Enseñar" => $com,
                "Escamotear" => $hab,
                "Escuchar" => $per,
                "Idioma" => $cul,
                "Leyendas" => $cul,
                "Memoria" => $per * 3,
                "Teología" => $cul
            ];
            break;
        case "Cortesano":
            $competenciasPj = [
                //1 menos por armas
                "Cabalgar" => $agi,
                "Comerciar" => $com,
                "Corte" => $com * 3,
                "Descubrir" => $per,
                "Elocuencia" => $com * 3,
                "Empatía" => $per * 3,
                "Escuchar" => $per,
                "Idioma" => $cul,
                "Leer y Escribir" => $cul,
                "Seducción" => $asp * 3,
                "Sigilo" => $agi
            ];
            break;
        case "Curandero":
            $competenciasPj = [
                //1 menos por armas
                "Alquimia" => $cul * 3,
                "Astrología" => $cul,
                "Conocimiento Animal" => $cul,
                "Conocimiento Mágico" => $cul * 3,
                "Conocimiento Mineral" => $cul,
                "Conocimiento Vegetal" => $cul,
                "Descubrir" => $per,
                "Empatía" => $per * 3,
                "Leyendas" => $cul,
                "Medicina" => $cul,
                "Sanar" => $hab * 3
            ];
            break;
        case "Derviche":
            $competenciasPj = [
                "Conocimiento Mágico" => $cul,
                "Descubrir" => $per,
                "Elocuencia" => $com * 3,
                "Empatía" => $per * 3,
                "Enseñar" => $com,
                "Escuchar" => $per,
                "Esquivar" => $agi,
                "Leer y Escribir" => $cul * 3,
                "Leyendas" => $cul,
                "Memoria" => $per,
                "Sanar" => $hab,
                "Teología" => $cul * 3
            ];
            break;
        case "Embaucador":
            $competenciasPj = [
                //1 menos por armas
                "Alquimia" => $cul,
                "Comerciar" => $com * 3,
                "Conducir Carro" => $hab * 3,
                "Conocimiento Vegetal" => $cul,
                "Correr" => $agi,
                "Disfrazarse" => $com,
                "Elocuencia" => $com * 3,
                "Empatía" => $per * 3,
                "Escamotear" => $hab,
                "Esquivar" => $agi,
                "Idioma" => $cul
            ];
            break;
        case "Escriba":
            $competenciasPj = [
                //1 menos por armas
                "Comerciar" => $com * 3,
                "Descubrir" => $per,
                "Elocuencia" => $com,
                "Empatía" => $per,
                "Enseñar" => $com,
                "Escuchar" => $per,
                "Idioma" => $cul,
                "Idioma(Latín)" => $cul * 3,
                "Leer y Escribir" => $cul * 3,
                "Memoria" => $per * 3,
                "Sigilo" => $agi
            ];
            break;
        case "Ghazi":
            $competenciasPj = [
                //3 menos por armas
                "Cabalgar" => $agi * 3,
                "Descubrir" => $per,
                "Empatía" => $per,
                "Esquivar" => $agi,
                "Leer y Escribir" => $cul,
                "Mando" => $com,
                "Sanar" => $hab,
                "Teología" => $cul * 3,
                "Tormento" => $hab
            ];
            break;
        case "Goliardo":
            $competenciasPj = [
                //2 menos por armas
                "Cantar" => $com * 3,
                "Correr" => $agi,
                "Elocuencia" => $com,
                "Escamotear" => $hab * 3,
                "Esquivar" => $agi,
                "Forzar Mecanismos" => $hab,
                "Idioma(Latín)" => $cul,
                "Juego" => $hab,
                "Leer y Escribir" => $cul * 3,
                "Seducción" => $asp * 3,
                "Teología" => $cul
            ];
            break;
        case "Infanzón":
            $competenciasPj = [
                //4 menos por armas
                "Cabalgar" => $agi * 3,
                "Descubrir" => $per,
                "Escuchar" => $per,
                "Esquivar" => $agi,
                "Juego" => $hab,
                "Leer y Escribir" => $cul,
                "Mando" => $com * 3,
                "Tormento" => $hab
            ];
            break;
        case "Juglar":
            $competenciasPj = [
                //2 menos por armas
                "Cantar" => $com * 3,
                "Correr" => $agi,
                "Elocuencia" => $com * 3,
                "Escamotear" => $hab * 3,
                "Esquivar" => $agi,
                "Leer y Escribir" => $cul,
                "Leyendas" => $cul,
                "Música" => $cul * 3,
                "Saltar" => $agi,
                "Sigilo" => $agi
            ];
            break;
        case "Ladrón":
            $competenciasPj = [
                //1 menos por armas
                "Comerciar" => $com,
                "Correr" => $agi * 3,
                "Descubrir" => $per,
                "Disfrazarse" => $com,
                "Escamotear" => $hab * 3,
                "Escuchar" => $per,
                "Esquivar" => $agi * 3,
                "Forzar Mecanismos" => $hab,
                "Lanzar" => $agi,
                "Sigilo" => $agi,
                "Trepar" => $agi * 3
            ];
            break;
        case "Mago":
            $competenciasPj = [
                "Alquimia" => $cul,
                "Astrología" => $cul,
                "Conocimiento Animal" => $cul,
                "Conocimiento Mágico" => $cul * 3,
                "Conocimiento Mineral" => $cul,
                "Conocimiento Vegetal" => $cul,
                "Elocuencia" => $com * 3,
                "Enseñar" => $com,
                "Leer y Escribir" => $cul * 3,
                "Medicina" => $cul,
                "Memoria" => $per,
                "Teología" => $cul * 3
            ];
            break;
        case "Malsín":
            $competenciasPj = [
                //1 menos por armas
                "Comerciar" => $com,
                "Conocimiento de Área" => $cul * 3,
                "Correr" => $agi,
                "Descubrir" => $per,
                "Empatía" => $per,
                "Escuchar" => $per * 3,
                "Forzar Mecanismos" => $hab * 3,
                "Memoria" => $per,
                "Saltar" => $agi,
                "Sigilo" => $agi * 3,
                "Trepar" => $agi
            ];
            break;
        case "Marino":
            $competenciasPj = [
                //1 menos por armas
                "Astrología" => $cul,
                "Descubrir" => $per * 3,
                "Idioma" => $cul,
                "Idioma()" => $cul,
                "Juego" => $hab,
                "Memoria" => $per,
                "Nadar" => $agi * 3,
                "Navegar" => $hab * 3,
                "Sanar" => $hab,
                "Seducción" => $asp,
                "Trepar" => $agi * 3
            ];
            break;
        case "Médico":
            $competenciasPj = [
                //1 menos por armas
                "Alquimia" => $cul,
                "Conocimiento Animal" => $cul,
                "Conocimiento Mineral" => $cul,
                "Conocimiento Vegetal" => $cul * 3,
                "Descubrir" => $per,
                "Elocuencia" => $com,
                "Empatía" => $per * 3,
                "Leer y Escribir" => $cul,
                "Medicina" => $cul * 3,
                "Memoria" => $per,
                "Sanar" => $hab * 3
            ];
            break;
        case "Mediero":
            $competenciasPj = [
                //1 menos por armas
                "Comerciar" => $com * 3,
                "Conocimiento de Área" => $cul * 3,
                "Disfrazarse" => $com,
                "Elocuencia" => $com * 3,
                "Empatía" => $per * 3,
                "Escamotear" => $hab,
                "Esquivar" => $agi,
                "Leer y Escribir" => $cul,
                "Mando" => $com,
                "Sigilo" => $agi,
                "Tormento" => $hab
            ];
            break;
        case "Mendigo":
            $competenciasPj = [
                //2 menos por armas
                "Artesanía" => $hab,
                "Comerciar" => $com,
                "Elocuencia" => $com * 3,
                "Empatía" => $per * 3,
                "Escamotear" => $hab * 3,
                "Idioma" => $cul,
                "Juego" => $hab,
                "Memoria" => $per * 3,
                "Ocultar" => $hab,
                "Sigilo" => $agi
            ];
            break;
        case "Monje":
            $competenciasPj = [
                "Cantar" => $com,
                "Descubrir" => $per,
                "Elocuencia" => $com,
                "Empatía" => $per,
                "Enseñar" => $com * 3,
                "Escuchar" => $per,
                "Idioma(Árabe)" => $cul,
                "Idioma(Griego)" => $cul,
                "Idioma(Latín)" => $cul * 3,
                "Leer y Escribir" => $cul * 3,
                "Memoria" => $per,
                "Teología" => $cul * 3
            ];
            break;
        case "Muccadim":
            $competenciasPj = [
                //2 menos por armas
                "Correr" => $agi,
                "Descubrir" => $per,
                "Empatía" => $per * 3,
                "Escuchar" => $per,
                "Esquivar" => $agi,
                "Mando" => $com,
                "Sanar" => $hab,
                "Saltar" => $agi,
                "Tormento" => $hab,
                "Teología" => $cul * 3
            ];
            break;
        case "Pardo":
            $competenciasPj = [
                //1 menos por armas
                "Cabalgar" => $agi * 3,
                "Comerciar" => $com,
                "Conocimiento de Área" => $cul,
                "Descubrir" => $per * 3,
                "Escuchar" => $per,
                "Idioma" => $cul,
                "Mando" => $com * 3,
                "Rastrear" => $per,
                "Sanar" => $hab,
                "Sigilo" => $agi,
                "Tormento" => $hab
            ];
            break;
        case "Pastor":
            $competenciasPj = [
                //2 menos por armas
                "Artesanía" => $hab,
                "Astrología" => $cul,
                "Conocimiento Animal" => $cul * 3,
                "Correr" => $agi,
                "Descubrir" => $per * 3,
                "Escuchar" => $per * 3,
                "Lanzar" => $agi,
                "Rastrear" => $per * 3,
                "Saltar" => $agi,
                "Trepar" => $agi
            ];
            break;
        case "Pirata":
            $competenciasPj = [
                //2 menos por armas
                "Astrología" => $cul,
                "Descubrir" => $per * 3,
                "Idioma" => $cul,
                "Juego" => $hab,
                "Lanzar" => $agi,
                "Nadar" => $agi * 3,
                "Navegar" => $hab * 3,
                "Sanar" => $hab,
                "Seducción" => $asp,
                "Trepar" => $agi
            ];
            break;
        case "Qaina":
            $competenciasPj = [
                "Cantar" => $com * 3,
                "Corte" => $com,
                "Elocuencia" => $com * 3,
                "Empatía" => $per,
                "Idioma" => $cul,
                "Leyendas" => $cul,
                "Memoria" => $per,
                "Música" => $cul * 3,
                "Ocultar" => $hab,
                "Saltar" => $agi,
                "Seducción" => $asp * 3,
                "Sigilo" => $agi
            ];
            break;
        case "Rabino":
            $competenciasPj = [
                "Astrología" => $cul,
                "Elocuencia" => $com * 3,
                "Empatía" => $per,
                "Enseñar" => $com,
                "Escuchar" => $per,
                "Idioma(Árabe)" => $cul,
                "Idioma(Hebreo)" => $cul * 3,
                "Idioma(Latín)" => $cul,
                "Leer y Escribir" => $cul * 3,
                "Memoria" => $per,
                "Sigilo" => $agi,
                "Teología" => $cul * 3
            ];
            break;
        case "Ramera":
            $competenciasPj = [
                //1 más por armas
                "Comerciar" => $com,
                "Correr" => $agi,
                "Descubrir" => $per,
                "Elocuencia" => $com * 3,
                "Empatía" => $per,
                "Escamotear" => $hab * 3,
                "Forzar Mecanismos" => $hab,
                "Juego" => $hab,
                "Ocultar" => $hab,
                "Seducción" => $asp * 3,
                "Sigilo" => $agi * 3
            ];
            break;
        case "Sacerdote":
            $competenciasPj = [
                "Cantar" => $com,
                "Conocimiento de Área" => $cul,
                "Descubrir" => $per,
                "Elocuencia" => $com * 3,
                "Empatía" => $per,
                "Enseñar" => $com,
                "Escuchar" => $per,
                "Idioma(Latín)" => $cul * 3,
                "Leer y Escribir" => $cul * 3,
                "Mando" => $com,
                "Memoria" => $per,
                "Teología" => $cul * 3
            ];
            break;
        case "Siervo de Corte":
            $competenciasPj = [
                //1 más por armas
                "Artesanía" => $hab * 3,
                "Comerciar" => $com,
                "Conducir Carro" => $hab * 3,
                "Conocimiento Animal" => $cul * 3,
                "Correr" => $agi,
                "Corte" => $com,
                "Degustar" => $per,
                "Escuchar" => $per,
                "Juego" => $hab,
                "Saltar" => $agi,
                "Sigilo" => $agi * 3
            ];
            break;
        case "Soldado":
            $competenciasPj = [
                //5 menos por armas
                "Cabalgar" => $agi * 3,
                "Conducir Carro" => $hab,
                "Descubrir" => $per,
                "Esquivar" => $agi,
                "Sanar" => $hab,
                "Sigilo" => $agi,
                "Tormento" => $hab
            ];
            break;
        case "Trovador":
            $competenciasPj = [
                //1 menos por armas
                "Cabalgar" => $agi,
                "Cantar" => $com,
                "Corte" => $com,
                "Elocuencia" => $com * 3,
                "Empatía" => $per,
                "Leer y Escribir" => $cul * 3,
                "Leyendas" => $cul,
                "Memoria" => $per,
                "Música" => $cul * 3,
                "Seducción" => $asp * 3,
                "Sigilo" => $agi
            ];
            break;
        case "Ulema":
            $competenciasPj = [
                //1 menos por armas
                "Corte" => $com,
                "Descubrir" => $per,
                "Elocuencia" => $com,
                "Empatía" => $per,
                "Enseñar" => $com,
                "Escuchar" => $per,
                "Idioma" => $cul,
                "Idioma(Árabe)" => $cul * 3,
                "Leer y Escribir" => $cul * 3,
                "Memoria" => $per * 3,
                "Teología" => $cul * 3
            ];
            break;
        default:
            $competenciasPj = [];
            break;
    }

    return $competenciasPj;
}

function armasPj(array $caracteristicas, string $profesion, string $sexo): array
{
    $fue = $caracteristicas["FUE"];
    $agi = $caracteristicas["AGI"];
    $hab = $caracteristicas["HAB"];
    $per = $caracteristicas["PER"];

    switch ($profesion) {
        case "Alguacil":
            $fue >= $per
                ? $armasPj = ["Mazas" => $fue * 3, "Pelea" => $agi]
                : $armasPj = ["Ballestas" => $per * 3, "Pelea" => $agi];
            break;
        case "Almogávar":
            $armasPj = [
                "Arcos" => $per,
                "Cuchillos" => $hab,
                "Escudos" => $hab * 3,
                "Lanzas" => $agi * 3
            ];
            break;
        case "Artesano":
        case "Barbero Cirujano":
        case "Cambista":
        case "Escriba":
        case "Ladrón":
        case "Médico":
        case "Ramera":
            $armasPj = [
                "Cuchillos" => $hab
            ];
            break;
        case "Bandido":
        case "Pirata":
            $fue >= $hab
                ? $armasPj = ["Ballestas" => $per, "Hachas" => $fue * 3]
                : $armasPj = ["Ballestas" => $per, "Cuchillos" => $hab * 3];
            break;
        case "Caballero de Orden Militar":
            if ($sexo == "F") {
                $armasPj = [
                    "Espadas" => $hab
                ];
            } else {
                $fue >= $hab
                    ? $armasPj = ["Espadones" => $fue * 3, "Mazas" => $fue * 3]
                    : $armasPj = ["Espadas" => $fue * 3, "Mazas" => $fue * 3];
            }
            break;
        case "Cazador":
            $armasPj = [
                "Arcos" => $per * 3,
                "Cuchillos" => $hab
            ];
            break;
        case "Clérigo":
        case "Cortesano":
        case "Trovador":
        case "Ulema":
            $armasPj = [
                "Espadas" => $hab
            ];
            break;
        case "Comerciante":
        case "Embaucador":
        case "Malsín":
        case "Mediero":
            $hab >= $per
                ? $armasPj = ["Cuchillos" => $hab]
                : $armasPj = ["Ballestas" => $per];
            break;
        case "Cómico":
        case "Goliardo":
        case "Siervo de Corte":
            $hab >= $agi
                ? $armasPj = ["Cuchillos" => $hab]
                : $armasPj = ["Pelea" => $agi];
            break;
        case "Curandero":
            $hab >= $per
                ? $armasPj = ["Cuchillos" => $hab]
                : $armasPj = ["Arcos" => $per];
            break;
        case "Ghazi":
            $armasPj = [
                "Arcos" => $per * 3,
                "Espadas" => $hab * 3,
                "Escudos" => $hab
            ];
            break;
        case "Infanzón":
            $armasPj = [
                "Ballestas" => $per,
                "Espadas" => $hab * 3,
                "Espadones" => $fue * 3,
                "Escudos" => $hab
            ];
            break;
        case "Juglar":
        case "Mendigo":
            $armasPj = [
                "Cuchillos" => $hab,
                "Pelea" => $agi
            ];
            break;
        case "Marino":
            $fue > $per
                ? $armasPj = ["Hachas" => $fue]
                : $armasPj = ["Ballestas" => $per];
            break;
        case "Muccadim":
            $armasPj = [
                "Mazas" => $fue * 3,
                "Pelea" => $agi * 3
            ];
            break;
        case "Pardo":
            $armasPj = [
                "Lanzas" => $agi * 3
            ];
            break;
        case "Pastor":
            $armasPj = [
                "Hondas" => $per,
                "Palos" => $agi
            ];
            break;
        case "Soldado":
            $fue >= $agi
                ? $armasPj = ["Ballestas" => $per * 3, "Cuchillos" => $hab, "Escudos" => $hab * 3, "Mazas" => $fue * 3, "Pelea" => $agi]
                : $armasPj = ["Ballestas" => $per * 3, "Cuchillos" => $hab, "Escudos" => $hab * 3, "Lanzas" => $agi * 3, "Pelea" => $agi];
            break;
        default:
            $armasPj = [];
            break;
    }
    return $armasPj;
}

function competenciasPri(string $profesionPat): array
{

    switch ($profesionPat) {
        case "Alguacil":
            $competenciasPri = [
                "Conocimiento de Área",
                "Correr",
                "Escuchar",
                "Mazas"
            ];
            break;
        case "Almogávar":
            $competenciasPri = [
                "Escudos",
                "Esquivar",
                "Lanzas",
                "Sigilo"
            ];
            break;
        case "Alquimista":
            $competenciasPri = [
                "Alquimia",
                "Astrología",
                "Conocimiento Mágico",
                "Leer y Escribir"
            ];
            break;
        case "Artesano":
            $competenciasPri = [
                "Artesanía",
                "Comerciar",
                "Descubrir",
                "Memoria"
            ];
            break;
        case "Bandido":
            $competenciasPri = [
                "Cuchillos",
                "Descubrir",
                "Sigilo",
                "Tormento"
            ];
            break;
        case "Barbero Cirujano":
            $competenciasPri = [
                "Elocuencia",
                "Empatía",
                "Medicina",
                "Sanar"
            ];
            break;
        case "Brujo":
            $competenciasPri = [
                "Alquimia",
                "Astrología",
                "Conocimiento Mágico",
                "Conocimiento Vegetal"
            ];
            break;
        case "Bufón":
            $competenciasPri = [
                "Disfrazarse",
                "Elocuencia",
                "Escamotear",
                "Saltar"
            ];
            break;
        case "Caballero de Orden Militar":
            $competenciasPri = [
                "Cabalgar",
                "Espadas",
                "Mazas",
                "Teología"
            ];
            break;
        case "Cambista":
            $competenciasPri = [
                "Alquimia",
                "Comerciar",
                "Conocimiento Mineral",
                "Elocuencia"
            ];
            break;
        case "Cazador":
            $competenciasPri = [
                "Arcos",
                "Escuchar",
                "Rastrear",
                "Sigilo"
            ];
            break;
        case "Clérigo":
            $competenciasPri = [
                "Elocuencia",
                "Idioma(Latín)",
                "Leer y Escribir",
                "Teología"
            ];
            break;
        case "Comerciante":
            $competenciasPri = [
                "Comerciar",
                "Elocuencia",
                "Empatía",
                "Idioma"
            ];
            break;
        case "Cómico":
            $competenciasPri = [
                "Disfrazarse",
                "Elocuencia",
                "Empatía",
                "Memoria"
            ];
            break;
        case "Cortesano":
            $competenciasPri = [
                "Corte",
                "Elocuencia",
                "Empatía",
                "Seducción"
            ];
            break;
        case "Curandero":
            $competenciasPri = [
                "Alquimia",
                "Conocimiento Mágico",
                "Empatía",
                "Sanar"
            ];
            break;
        case "Derviche":
            $competenciasPri = [
                "Elocuencia",
                "Empatía",
                "Leer y Escribir",
                "Teología"
            ];
            break;
        case "Embaucador":
            $competenciasPri = [
                "Comerciar",
                "Conducir Carro",
                "Elocuencia",
                "Empatía"
            ];
            break;
        case "Escriba":
            $competenciasPri = [
                "Comerciar",
                "Idioma(Latín)",
                "Leer y Escribir",
                "Memoria"
            ];
            break;
        case "Ghazi":
            $competenciasPri = [
                "Arcos",
                "Cabalgar",
                "Espadas",
                "Teología"
            ];
            break;
        case "Goliardo":
            $competenciasPri = [
                "Cantar",
                "Escamotear",
                "Leer y Escribir",
                "Seducción"
            ];
            break;
        case "Infanzón":
            $competenciasPri = [
                "Cabalgar",
                "Espadas",
                "Espadones",
                "Mando"
            ];
            break;
        case "Juglar":
            $competenciasPri = [
                "Cantar",
                "Elocuencia",
                "Escamotear",
                "Música"
            ];
            break;
        case "Ladrón":
            $competenciasPri = [
                "Correr",
                "Escamotear",
                "Esquivar",
                "Trepar"
            ];
            break;
        case "Mago":
            $competenciasPri = [
                "Conocimiento Mágico",
                "Elocuencia",
                "Leer y Escribir",
                "Teología"
            ];
            break;
        case "Malsín":
            $competenciasPri = [
                "Conocimiento de Área",
                "Escuchar",
                "Forzar Mecanismos",
                "Sigilo"
            ];
            break;
        case "Marino":
            $competenciasPri = [
                "Descubrir",
                "Nadar",
                "Navegar",
                "Trepar"
            ];
            break;
        case "Médico":
            $competenciasPri = [
                "Conocimiento Vegetal",
                "Empatía",
                "Medicina",
                "Sanar"
            ];
            break;
        case "Mediero":
            $competenciasPri = [
                "Comerciar",
                "Conocimiento de Área",
                "Elocuencia",
                "Empatía"
            ];
            break;
        case "Mendigo":
            $competenciasPri = [
                "Elocuencia",
                "Empatía",
                "Escamotear",
                "Memoria"
            ];
            break;
        case "Monje":
            $competenciasPri = [
                "Enseñar",
                "Idioma(Latín)",
                "Leer y Escribir",
                "Teología"
            ];
            break;
        case "Muccadim":
            $competenciasPri = [
                "Empatía",
                "Mazas",
                "Pelea",
                "Teología"
            ];
            break;
        case "Pardo":
            $competenciasPri = [
                "Cabalgar",
                "Descubrir",
                "Lanzas",
                "Mando"
            ];
            break;
        case "Pastor":
            $competenciasPri = [
                "Conocimiento Animal",
                "Descubrir",
                "Escuchar",
                "Rastrear"
            ];
            break;
        case "Pirata":
            $competenciasPri = [
                "Cuchillos",
                "Descubrir",
                "Nadar",
                "Navegar"
            ];
            break;
        case "Rabino":
            $competenciasPri = [
                "Elocuencia",
                "Idioma(Hebreo)",
                "Leer y Escribir",
                "Teología"
            ];
            break;
        case "Sacerdote":
            $competenciasPri = [
                "Elocuencia",
                "Idioma(Latín)",
                "Leer y Escribir",
                "Teología"
            ];
            break;
        case "Siervo de Corte":
            $competenciasPri = [
                "Artesanía",
                "Conducir Carro",
                "Conocimiento Animal",
                "Sigilo"
            ];
            break;
        case "Soldado":
            $competenciasPri = [
                "Ballestas",
                "Cabalgar",
                "Escudos",
                "Mazas"
            ];
            break;
        case "Trovador":
            $competenciasPri = [
                "Elocuencia",
                "Leer y Escribir",
                "Música",
                "Seducción"
            ];
            break;
        case "Ulema":
            $competenciasPri = [
                "Idioma(Árabe)",
                "Leer y Escribir",
                "Memoria",
                "Teología"
            ];
            break;
        default:
            $competenciasPri = [];
            break;
    }

    return $competenciasPri;
}

//CARACTERÍSTICAS SECUNDARIAS

function suerte(array $caracteristicas): int
{
    $per = $caracteristicas["PER"];
    $com = $caracteristicas["COM"];
    $cul = $caracteristicas["CUL"];
    return $com + $per + $cul;
}

function templanza(): int
{
    $templanza = 25;
    for ($i = 0; $i < 5; $i++) {
        $templanza += rand(1, 10);
    }
    return $templanza;
}

function aspecto(string $sexo): int
{
    $aspecto = 0;
    for ($i = 0; $i < 4; $i++) {
        $aspecto += rand(1, 6);
    }

    $sexo == "F"
        ? $aspecto = $aspecto + 2
        : $aspecto;

    return $aspecto;
}

function edad(): int
{
    $edad = 16 + rand(1, 10);
    return $edad;
}

function altura(array $caracteristicas): float
{
    $altura = 0;
    $tirada = rand(0, 1);

    $tirada == 0
        ? $atributo = $caracteristicas["FUE"]
        : $atributo = $caracteristicas["RES"];

    switch ($atributo) {
        case 5:
            $altura = 1.52;
            break;
        case 6:
            $altura = 1.54;
            break;
        case 7:
            $altura = 1.57;
            break;
        case 8:
            $altura = 1.59;
            break;
        case 9:
            $altura = 1.62;
            break;
        case 10:
            $altura = 1.64;
            break;
        case 11:
            $altura = 1.67;
            break;
        case 12:
            $altura = 1.69;
            break;
        case 13:
            $altura = 1.72;
            break;
        case 14:
            $altura = 1.74;
            break;
        case 15:
            $altura = 1.77;
            break;
        case $atributo > 15:
            $altura = 1.79;
            break;
    }
    return $altura;
}

function peso(int $fue): int
{
    $peso = 0;
    switch ($fue) {
        case 5:
            $peso = 106;
            break;
        case 6:
            $peso = 110;
            break;
        case 7:
            $peso = 118;
            break;
        case 8:
            $peso = 120;
            break;
        case 9:
            $peso = 122;
            break;
        case 10:
            $peso = 125;
            break;
        case 11:
            $peso = 128;
            break;
        case 12:
            $peso = 132;
            break;
        case 13:
            $peso = 134;
            break;
        case 14:
            $peso = 140;
            break;
        case 15:
            $peso = 146;
            break;
        case $fue > 15:
            $peso = 150;
            break;
    }
    return $peso;
}

function racionalidad(): int
{
    return rand(25, 75);
}

function irracionalidad(int $racionalidad): int
{
    return 100 - $racionalidad;
}

function rasgos(): array
{
    $rasgos = [];
    array_push($rasgos, ("[" . 2 + 1 . "]") . " - " . RASGOS[2]);

    while (sizeof($rasgos) < 4) {
        $tirada = rand(0, 99);
        array_push($rasgos, ("[" . $tirada + 1 . "]") . " - " . RASGOS[$tirada]);
        $rasgos = array_unique($rasgos);
    }
    return $rasgos;
}

//ÚLTIMOS TOQUES

function numeroRasgo(string $rasgo): string
{
    $numero = substr($rasgo, strpos($rasgo, "[") + 1, strpos($rasgo, "]") - 1);
    return $numero;
}



function rasgosOpe(Personaje $personaje): Personaje
{
    foreach ($personaje->rasgos as $rasgo) {
        $numero = numeroRasgo($rasgo);

        switch ($numero) {
            case "1":
                //-25 a todas las competencias de armas
                $personaje->competencias["Arcos"] -= 25;
                $personaje->competencias["Ballestas"] -= 25;
                $personaje->competencias["Cuchillos"] -= 25;
                $personaje->competencias["Escudos"] -= 25;
                $personaje->competencias["Espadas"] -= 25;
                $personaje->competencias["Espadones"] -= 25;
                $personaje->competencias["Hachas"] -= 25;
                $personaje->competencias["Hondas"] -= 25;
                $personaje->competencias["Lanzas"] -= 25;
                $personaje->competencias["Mazas"] -= 25;
                $personaje->competencias["Palos"] -= 25;
                $personaje->competencias["Pelea"] -= 25;
                break;
            case "2":
                //+25 Elocuencia
                $personaje->competencias["Elocuencia"] += 25;
                break;
            case "3":
                //+5 Percepción
                // $personaje->caracteristicas["PER"] += 5;
                recalcular($personaje, "PER", "+", 5);
                break;
            case "4":
                //Enfermedad aleatoria
                $tirada = rand(1, 10);
                switch ($tirada) {
                    case  $tirada <= 2:
                        $personaje->rasgos["4"] = "El personaje tiene la enfermedad: " . ENFERMEDAD[0];
                        break;
                    case  $tirada <= 4:
                        $personaje->rasgos["4"] = "El personaje tiene la enfermedad: " . ENFERMEDAD[1];
                        break;
                    case  $tirada <= 6:
                        $personaje->rasgos["4"] = "El personaje tiene la enfermedad: " . ENFERMEDAD[2];
                        break;
                    case  $tirada <= 8:
                        $personaje->rasgos["4"] = "El personaje tiene la enfermedad: " . ENFERMEDAD[3];
                        break;
                    case 9:
                        $personaje->rasgos["4"] = "El personaje tiene la enfermedad: " . ENFERMEDAD[4];
                        break;
                    case 10:
                        $personaje->rasgos["4"] = "El personaje tiene la enfermedad: " . ENFERMEDAD[5];
                        break;
                }
                break;
            case "5":
                //+25 en la mayor competencia de armas
                arsort($personaje->armas);
                $arma = array_key_first($personaje->armas);
                $personaje->competencias[$arma] += 25;
                $personaje->actualizarArmas();
                break;
            case "8":
                //+5 Aspecto
                $personaje->aspecto += 5;
                break;
            case "9":
                //-2 Agilidad, +60 peso
                // $personaje->caracteristicas["AGI"] -= 2;
                recalcular($personaje, "AGI", "-", 2);
                $personaje->peso += 60;
                break;
            case "10":
                //-5 Aspecto
                $personaje->aspecto -= 5;
                break;
            case "11":
                //+15 Alquimia, +15 Conocimiento Mineral
                $personaje->competencias["Alquimia"] += 15;
                $personaje->competencias["Conocimiento Mineral"] += 15;
                break;
            case "12":
                //-25 Templanza
                $personaje->templanza -= 25;
                break;
            case "13":
                //+25 Descubrir
                $personaje->competencias["Descubrir"] += 25;
                break;
            case "14":
                //-4 Comunicación, Cantar, Elocuencia, Mando, Idioma = 0 
                // $personaje->caracteristicas["COM"] -= 4;
                recalcular($personaje, "COM", "-", 4);
                $personaje->competencias["Cantar"] = 0;
                $personaje->competencias["Elocuencia"] = 0;
                $personaje->competencias["Mando"] = 0;
                $personaje->competencias["Idioma"] = 0;
                break;
            case "15":
                //-25 Seducción
                $personaje->competencias["Seducción"] -= 25;
                break;
            case "17":
                //+25 Conocimiento Animal
                $personaje->competencias["Conocimiento Animal"] += 25;
                break;
            case "18":
                //-25 Trepar
                $personaje->competencias["Trepar"] -= 25;
                break;
            case "19":
                //-25 Conocimiento Animal, -25 Cabalgar
                $personaje->competencias["Cabalgar"] -= 25;
                $personaje->competencias["Conocimiento Animal"] -= 25;
                break;
            case "20":
                //-5 Fuerza, -5 Agilidad, -5 Resistencia
                // $personaje->caracteristicas["FUE"] -= 5;
                // $personaje->caracteristicas["AGI"] -= 5;
                // $personaje->caracteristicas["RES"] -= 5;
                recalcular($personaje, "FUE", "-", 5);
                recalcular($personaje, "AGI", "-", 5);
                recalcular($personaje, "RES", "-", 5);
                break;
            case "22":
                //-0.30 Altura
                $personaje->altura -= 0.3;
                break;
            case "23":
                //-50 Cabalgar
                $personaje->competencias["Cabalgar"] -= 50;
                break;
            case "24":
                //+25 Escuchar
                $personaje->competencias["Escuchar"] += 25;
                break;
            case "25":
                //+15 Escamotear
                $personaje->competencias["Escamotear"] += 15;
                break;
            case "27":
                //-25 Empatía
                $personaje->competencias["Empatía"] -= 25;
                break;
            case "28":
                //+25 Disfrazarse
                $personaje->competencias["Disfrazarse"] += 25;
                break;
            case "29":
                //+15 Astrología, +15 Conocimiento Mágico
                $personaje->competencias["Astrología"] += 15;
                $personaje->competencias["Conocimiento Mágico"] += 15;
                break;
            case "30":
                //+25 Degustar
                $personaje->competencias["Degustar"] += 25;
                break;
            case "31":
                //-25 Correr
                $personaje->competencias["Correr"] -= 25;
                break;
            case "32":
                //+25 Mando
                $personaje->competencias["Mando"] -= 25;
                break;
            case "33":
                //Herencia 
                $personaje->ingresos += rand(1, 4) * 1500;
                break;
            case "34":
                //-25 Memoria
                $personaje->competencias["Memoria"] -= 25;
                break;
            case "36":
                //+10 IRR, -10 RR
                $personaje->racionalidad -= 10;
                $personaje->irracionalidad += 10;
                break;
            case "38":
                //-5 Agilidad
                // $personaje->caracteristicas["AGI"] -= 5;
                recalcular($personaje, "AGI", "-", 5);
                break;
            case "41":
                //-3 Habilidad
                // $personaje->caracteristicas["HAB"] - 3;
                recalcular($personaje, "HAB", "-", 3);
                break;
            case "42":
                //-25 Esquivar
                $personaje->competencias["Esquivar"] -= 25;
                break;
            case "43":
                //+25 Cantar
                $personaje->competencias["Cantar"] += 25;
                break;
            case "44":
                //+5 Fuerza
                // $personaje->caracteristicas["FUE"] += 5;
                recalcular($personaje, "FUE", "+", 5);
                break;
            case "45":
                //-15 Elocuencia, -15 Seducción, -15 Mando
                $personaje->competencias["Elocuencia"] -= 15;
                $personaje->competencias["Seducción"] -= 15;
                $personaje->competencias["Mando"] -= 15;
                break;
            case "46":
                //-25 Degustar
                $personaje->competencias["Degustar"] -= 25;
                break;
            case "47":
                //+25 Tormento
                $personaje->competencias["Tormento"] += 25;
                break;
            case "48":
                //-25 Escuchar
                $personaje->competencias["Escuchar"] -= 25;
                break;
            case "49":
                //+5 Habilidad
                // $personaje->caracteristicas["HAB"] += 5;
                recalcular($personaje, "HAB", "+", 5);
                break;
            case "50":
                //+25 Empatía
                $personaje->competencias["Empatía"] += 25;
                break;
            case "51":
                //+25 Leer y Escribir, +25 Teología
                $personaje->competencias["Leer y Escribir"] += 25;
                $personaje->competencias["Teología"] += 25;
                break;
            case "53":
                //+25 Enseñar
                $personaje->competencias["Enseñar"] += 25;
                break;
            case "54":
                //-25 Descubrir
                $personaje->competencias["Descubrir"] -= 25;
                break;
            case "55":
                //-25 Navegar
                $personaje->competencias["Navegar"] -= 25;
                break;
            case "56":
                //+35 Memoria
                $personaje->competencias["Memoria"] += 35;
                break;
            case "57":
                //+25 Navegar, +25 Nadar
                $personaje->competencias["Nadar"] += 25;
                $personaje->competencias["Navegar"] += 25;
                break;
            case "58":
                //+25 Rastrear, +25 Conocimiento Animal | +25 Arcos
                $personaje->competencias["Rastrear"] += 25;
                $personaje->pSocial == "Alta Nobleza " || $personaje->pSocial == "Baja Nobleza"
                    ? $personaje->competencias["Conocimiento Animal"] += 25
                    : $personaje->competencias["Arcos"] += 25;
                break;
            case "59":
                //+5 Cultura
                // $personaje->caracteristicas["CUL"] += 5;
                recalcular($personaje, "CUL", "+", 5);
                break;
            case "60":
                //+15 RR, -15 IRR | -15 RR, +15 IRR
                if ($personaje->racionalidad >= $personaje->irracionalidad) {
                    $personaje->racionalidad += 15;
                    $personaje->irracionalidad -= 15;
                } else {
                    $personaje->racionalidad -= 15;
                    $personaje->irracionalidad += 15;
                }
                break;
            case "61":
                //+25 Seducción
                $personaje->competencias["Seducción"] += 25;
                break;
            case "62":
                //-25 Nadar
                $personaje->competencias["Nadar"] -= 25;
                break;
            case "64":
                //+25 Templanza
                $personaje->templanza += 25;
                break;
            case "65":
                //edad = 2D10 + 26
                $suma = 0;
                for ($i = 0; $i < 2; $i++) {
                    $suma += rand(1, 10);
                }
                $personaje->edad = 26 + $suma;
                break;
            case "66":
                //+25 Conocimiento Vegetal
                $personaje->competencias["Conocimiento Vegetal"] += 25;
                break;
            case "67":
                //+15 Juego
                $personaje->competencias["Juego"] += 15;
                break;
            case "73":
                //+0.30 Altura
                $personaje->altura += 0.3;
                break;
            case "74":
                //+25 Saltar, +25 Esquivar
                $personaje->competencias["Esquivar"] += 25;
                $personaje->competencias["Saltar"] += 25;
                break;
            case "76":
                //-60 peso
                $personaje->peso -= 60;
                break;
            case "77":
                //+25 Saltar, +25 Esquivar
                $personaje->competencias["Correr"] += 25;
                $personaje->competencias["Trepar"] += 25;
                break;
            case "78":
                //-25 Comerciar, -25 Elocuencia, -25 Seducción
                $personaje->competencias["Comerciar"] -= 25;
                $personaje->competencias["Elocuencia"] -= 25;
                $personaje->competencias["Seducción"] -= 25;
                break;
            case "79":
                //-25 Comerciar, -25 Elocuencia, -25 Cantar, -25 Corte, -25 Disfrazarse, -25 Mando
                $personaje->competencias["Cantar"] -= 25;
                $personaje->competencias["Comerciar"] -= 25;
                $personaje->competencias["Corte"] -= 25;
                $personaje->competencias["Disfrazarse"] -= 25;
                $personaje->competencias["Mando"] -= 25;
                $personaje->competencias["Elocuencia"] -= 25;
            case "80":
                //-5 Habilidad
                // $personaje->caracteristicas["HAB"] -= 5;
                recalcular($personaje, "HAB", "-", 5);
                break;
            case "81":
                //+25 Leer y Escribir
                $personaje->competencias["Leer y Escribir"] += 25;
                break;
            case "82":
                //+25 Sigilo
                $personaje->competencias["Sigilo"] += 25;
                break;
            case "83":
                //+25 Pelea
                $personaje->competencias["Pelea"] += 25;
                break;
            case "84":
                //+25 Escamotear
                $personaje->competencias["Escamotear"] += 25;
                break;
            case "87":
                //Máximo 15 en Fuerza y Agilidad, -25 a todas las competencias de agi, -5 Aspecto
                $personaje->caracteristicas["FUE"] > 15
                    // ? $personaje->caracteristicas["FUE"] = 15
                    ? recalcular($personaje, "FUE", "=", 15)
                    : $personaje->caracteristicas["FUE"];
                $personaje->caracteristicas["AGI"] > 15
                    // ? $personaje->caracteristicas["AGI"] = 15
                    ? recalcular($personaje, "AGI", "=", 15)
                    : $personaje->caracteristicas["AGI"];
                $personaje->competencias["Cabalgar"] -= 25;
                $personaje->competencias["Correr"] -= 25;
                $personaje->competencias["Esquivar"] -= 25;
                $personaje->competencias["Lanzar"] -= 25;
                $personaje->competencias["Nadar"] -= 25;
                $personaje->competencias["Saltar"] -= 25;
                $personaje->competencias["Sigilo"] -= 25;
                $personaje->competencias["Trepar"] -= 25;
                $personaje->aspecto -= 5;
                break;
            case "91":
                //-25 en armas a distancia, -25 lanzar, -2 Percepción
                $personaje->competencias["Arcos"] -= 25;
                $personaje->competencias["Ballestas"] -= 25;
                $personaje->competencias["Hondas"] -= 25;
                $personaje->competencias["Lanzar"] -= 25;
                // $personaje->caracteristicas["PER"] -= 2;
                recalcular($personaje, "PER", "-", 2);
                break;
            case "92":
                //+25 Astrología
                $personaje->competencias["Astrología"] += 25;
                break;
            case "94":
                //ingresos / 2
                $personaje->ingresos /= 2;
                break;
            case "95":
                //+25 Leyendas
                $personaje->competencias["Leyendas"] += 25;
                break;
            case "97":
                //-5 Resistencia
                // $personaje->caracteristicas["RES"] -= 5;
                recalcular($personaje, "RES", "-", 5);
                break;
            case "98":
                //+25 Sanar
                $personaje->competencias["Sanar"] += 25;
                break;
            case "100":
                //+10 en todas las armas
                $personaje->competencias["Arcos"] += 10;
                $personaje->competencias["Ballestas"] += 10;
                $personaje->competencias["Cuchillos"] += 10;
                $personaje->competencias["Escudos"] += 10;
                $personaje->competencias["Espadas"] += 10;
                $personaje->competencias["Espadones"] += 10;
                $personaje->competencias["Hachas"] += 10;
                $personaje->competencias["Hondas"] += 10;
                $personaje->competencias["Lanzas"] += 10;
                $personaje->competencias["Mazas"] += 10;
                $personaje->competencias["Palos"] += 10;
                $personaje->competencias["Pelea"] += 10;
                break;
        }
        echo "ha hecho la operación número " . $numero . "<br><br>";
    }
    return $personaje;
}

function ingresos(Personaje $personaje): float
{
    if ($personaje->pSocial == "Esclavo") {
        return (float) 0;
    }

    switch ($personaje->profesion) {
        case "Alguacil":
            $ingresos = $personaje->pSocial == "Burguesía"
                ? 750
                : 500;
            break;
        case "Almogávar":
        case "Bandido":
        case "Cómico":
        case "Ladrón":
        case "Malsín":
            $ingresos = $personaje->suerte * 2;
            break;
        case "Alquimista":
            $ingresos = $personaje->pSocial == "Alta Nobleza"
                ? $personaje->competencias["Alquimia"] * 20
                : $personaje->competencias["Alquimia"] * 5;
            break;
        case "Ama":
            $ingresos = 350;
            break;
        case "Artesano":
            $ingresos = $personaje->competencias["Artesanía"];
            break;
        case "Barbero Cirujano":
            $ingresos = $personaje->pSocial == "Villano"
                ? $personaje->competencias["Sanar"] * 2
                : $personaje->competencias["Sanar"] * 5;
            break;
        case "Brujo":
            $ingresos = $personaje->suerte;
            break;
        case "Bufón":
            $ingresos = $personaje->competencias["Elocuencia"] > $personaje->competencias["Saltar"]
                ? $personaje->competencias["Elocuencia"]
                : $personaje->competencias["Saltar"];
            break;
        case "Caballero de Orden Militar":
        case "Cortesano":
        case "Infanzón":
        case "Trovador":
            $ingresos = $personaje->pSocial == "Alta Nobleza"
                ? 1800
                : 500;
            break;
        case "Cambista":
        case "Comerciante":
        case "Mediero":
            $ingresos = $personaje->competencias["Comerciar"] * 10;
            break;
        case "Cazador":
            $ingresos = $personaje->competencias["Rastrear"];
            break;
        case "Clérigo":
            $ingresos = rand(1, 8) * 350;
            break;
        case "Curandero":
            $ingresos = $personaje->competencias["Sanar"];
            break;
        case "Derviche":
            $ingresos = 0;
            break;
        case "Embaucador":
            $ingresos = $personaje->competencias["Elocuencia"];
            break;
        case "Escriba":
            $ingresos = $personaje->competencias["Leer y Escribir"] * 10;
            break;
        case "Ghazi":
            $ingresos = $personaje->pSocial == "Ciudadano" || $personaje->pSocial == "Campesino"
                ? 80
                : 500;
            break;
        case "Goliardo":
            $ingresos = $personaje->competencias["Leer y Escribir"];
            break;
        case "Juglar":
            $ingresos = $personaje->competencias["Elocuencia"] > $personaje->competencias["Cantar"]
                ? $personaje->competencias["Elocuencia"]
                : $personaje->competencias["Cantar"];
            break;
        case "Mago":
            $ingresos = $personaje->pSocial == "Alta Nobleza"
                ? $personaje->competencias["Conocimiento Mágico"] * 20
                : $personaje->competencias["Conocimiento Mágico"] * 5;
            break;
        case "Marino":
            $ingresos = $personaje->competencias["Navegar"] * 5;
            break;
        case "Médico":
            $ingresos = $personaje->competencias["Medicina"] * 10;
            break;
        case "Mendigo":
            $ingresos = $personaje->competencias["Elocuencia"] / 2;
            break;
        case "Monje":
            switch ($personaje->pSocial) {
                case "Alta Nobleza":
                    $ingresos = 1800;
                    break;
                case "Baja Nobleza":
                    $ingresos = 500;
                    break;
                case "Burguesía":
                    $ingresos = 80;
                    break;
                default:
                    $ingresos = 40;
                    break;
            }
            break;
        case "Muccadim":
            $ingresos = 80;
            break;
        case "Pardo":
            $ingresos = $personaje->suerte * 10;
            break;
        case "Pastor":
            $ingresos = $personaje->competencias["Conocimiento Animal"] / 2;
            break;
        case "Pirata":
            $ingresos = $personaje->pSocial == "Burguesía"
                ? $personaje->suerte * 15
                : $personaje->suerte * 5;
            break;
        case "Qaina":
            $ingresos = $personaje->competencias["Seducción"] > $personaje->competencias["Cantar"]
                ? $personaje->competencias["Seducción"] * 2
                : $personaje->competencias["Cantar"] * 2;
            break;
        case "Rabino":
            $ingresos = $personaje->competencias["Teología"] * 10;
            break;
        case "Ramera":
            $ingresos = $personaje->competencias["Seducción"];
            break;
        case "Sacerdote":
            $ingresos = $personaje->pSocial == "Burguesía"
                ? 750
                : 80;
            break;
        case "Siervo de Corte":
            $ingresos = 40;
            break;
        case "Soldado":
            arsort($personaje->armas);
            $arma = array_key_first($personaje->armas);
            $ingresos = $personaje->pSocial == "Burguesía"
                ? $personaje->competencias[$arma] * 5
                : $personaje->competencias[$arma];
            break;
        case "Ulema":
            $ingresos = 1800;
            break;
        default:
            $ingresos = 0;
            break;
    }

    return (float) $ingresos;
}

function crearPersonaje(): Personaje
{
    $sexo = sexo();
    $reino = reino();
    $pueblo = pueblo($reino);
    $sociedad = sociedad($pueblo);
    $nombre = nombre($pueblo, $sexo);
    $pSocial = pSocial($sociedad, $pueblo);
    $titulo = titulo($sociedad, $pSocial, $sexo);
    $profesion = profesion($sociedad, $pSocial, $reino, $pueblo, $sexo);
    $profesionPat = profesion($sociedad, $pSocial, $reino, $pueblo, "M");
    $aspecto = aspecto($sexo);
    $edad = edad();
    $sitFamiliar = sitFamiliar();
    if (
        $profesionPat == "Clérigo" ||
        $profesionPat == "Monje" ||
        $profesionPat == "Sacerdote" ||
        $profesionPat == "Goliardo"
    ) {
        $sitFamiliar = BASTARDO[0];
        $profesionPat = profesion($sociedad, $pSocial, $reino, $pueblo, "F");
    } elseif ($profesionPat == "Derviche") {
        $profesionPat = "Ghazi";
    }
    $hermanos = hermanos($sitFamiliar);
    $varones = varones($hermanos);
    $hembras = hembras($hermanos, $varones);
    $posicion = posicion($hermanos);
    $templanza = templanza();
    $racionalidad = racionalidad();
    $irracionalidad = irracionalidad($racionalidad);
    $caracteristicas = caracteristicas($profesion);
    $competencias = competenciasPj($caracteristicas, $profesion, $aspecto, $sexo);
    $armas = armasPj($caracteristicas, $profesion, $sexo);
    $rasgos = rasgos();
    $suerte = suerte($caracteristicas);
    $altura = altura($caracteristicas);
    $peso = peso($caracteristicas["FUE"]);
    $ingresos = 0;

    return new Personaje(
        $sexo,
        $nombre,
        $reino,
        $pueblo,
        $sociedad,
        $pSocial,
        $titulo,
        $profesion,
        $profesionPat,
        $sitFamiliar,
        $hermanos,
        $varones,
        $hembras,
        $posicion,
        $aspecto,
        $templanza,
        $edad,
        $altura,
        $peso,
        $racionalidad,
        $irracionalidad,
        $suerte,
        $caracteristicas,
        $competencias,
        $armas,
        $rasgos,
        $ingresos
    );
}

function rellenarCaracteristicas(Personaje $p1, int $total): Personaje
{
    $puntos = (100 - $total) / 5;
    while ($puntos < 100) {
        foreach ($p1->caracteristicas as $caracteristica => $valor) {
            $maximo = 20 - $valor;
            //$maximo = 10;
            $incremento = rand(0, 3) * 5;
            //$incremento = 15;
            if ($incremento <= $maximo) {
                $valor += $incremento;
            }
        }
        //revisar esto que no está bien ¿?
    }
    return $p1;
}

function filtrarArrayPorClave(array $completo, array $existe): array
{
    //filtramos el array basándose en la llamada, si es verdadero, mantiene ese valor del array, si es falso lo elimina (crea un array nuevo, no modifica el anterior)
    return array_filter($completo, function (string $actual) use ($existe) {
        return in_array($actual, $existe);
    }, ARRAY_FILTER_USE_KEY);
}

function recalcular(Personaje $personaje, string $abreviatura, string $operacion, int $cantidad): Personaje
{
    //me devuelve el nombre de la función bien formateao
    $funcion = sprintf("competencias%s", ucfirst($abreviatura));

    $competenciasDependientes = $funcion();

    $caracteristicaActual = $personaje->caracteristicas[$abreviatura];

    switch ($operacion) {
        case '+':
            $personaje->caracteristicas[$abreviatura] += $cantidad;
            break;
        case '-':
            $personaje->caracteristicas[$abreviatura] -= $cantidad;
            break;
        case '=':
            $personaje->caracteristicas[$abreviatura] = $cantidad;
            break;
    }
    if ($caracteristicaActual === $personaje->caracteristicas[$abreviatura]) {
        return $personaje;
    }
    $caracteristicaOriginal = caracteristicas($personaje->profesion)[$abreviatura];
    $competenciasActuales = filtrarArrayPorClave($personaje->competencias, $competenciasDependientes);

    $competenciasOriginales = competenciasPj(
        $personaje->caracteristicas,
        $personaje->profesion,
        $personaje->getAspecto(),
        $personaje->getSexo()
    );

    $competenciasOriginales = filtrarArrayPorClave($competenciasOriginales, $competenciasDependientes);

    foreach ($competenciasActuales as $nombre => $valor) {
        //si esto es así, no le ha dado ningún punto
        $puntosRepartidos = $valor === $competenciasOriginales[$nombre]
            ? 0
            : $valor - $competenciasOriginales[$nombre];

        switch ($operacion) {
            case '+':
                $nuevoValor = $competenciasOriginales[$nombre] += $valor;
                break;
            case '-':
                $nuevoValor = $competenciasOriginales[$nombre] -= $valor;
                break;
            case '=':
                $nuevoValor = $competenciasOriginales[$nombre] = $valor;
                break;
        }
        $nuevoValor += $puntosRepartidos;
        $personaje->competencias[$nombre] = $nuevoValor;
    }
    return $personaje;
}
