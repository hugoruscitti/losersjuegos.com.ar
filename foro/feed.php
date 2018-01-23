<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2014-12-20T23:40:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2014-12-20T23:40:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3056&amp;p=9321#p9321</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3056&amp;p=9321#p9321"/>
<title type="html"><![CDATA[Inspiración y otras ideas interesantes • Re: Godot Engine: Un motor para juegos 2D/3D todo-incluido!]]></title>

<category term="Inspiración y otras ideas interesantes" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=13" label="Inspiración y otras ideas interesantes"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3056&amp;p=9321#p9321"><![CDATA[
Vengo a decir que hace menos de una semana alcanzo finalmente su <a href="http://www.godotengine.org/wp/godot-engine-reaches-1-0-releases-first-stable/" class="postlink">versión estable 1.0</a><br /><br />Y pues, hay gente que le gusta como esta hecho Godot:<br /><br /><a href="http://imgur.com/sjqfGVC" class="postlink"><img src="http://i.imgur.com/sjqfGVC.jpg" alt="Imagen" /></a><br /><br />jeje. Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Dic 20, 2014 11:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jhg]]></name></author>
<updated>2014-10-22T14:51:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9320#p9320</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9320#p9320"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: Idea de juego en nube (es dificil describir en una frase]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9320#p9320"><![CDATA[
Esta idea que tuve hace algo más de un año por los estudios me esta llevando más tiempo del esperado pero también por falta de conocimientos, y sobre eso venia a consultar por este foro. Hasta ahora lo que habia hecho siempre eran cosas muy sencillas, en local para el usuario que ejecuta el juego, sin red de por medio ni multi jugador, y tener que controlar la posición, variación, colisión de multiples objetos. Por un lado tengo que si actualizo las posiciones en el momento que interactua el navegador con el servidor para pedir información o indicar acciones seguramente el servidor tarde más en responder al suario las consultas y se repitan a ritmo anormal segun cada navegador pida algo, y pense en la actualización de los objetos, simulacón, movimiento, estado, etc; dejarlo en manos de un proceso fuera de lo que es la comunicacion entre navegador y servidor que continuamente se ejecute y realice el trabajo de si un objeto tiene aceleración calcular la velocidad que le corresponde segun el tiempo transcurrido desde la ultima actualización, segun en que estado este el automata lo actualice al que corresponda luego, cambie la posición, calcule colisiones y actualice los estados, etc; y pensnado en eso se me ha presentado un problema que me imagino se resolvera con mucha matematica de geometria en el espacio pero que es bastante nuevo para mi. ¿Y si una vez calculada, por ejemplo, la posicion nueva que le corresponde a los objetos, resulta que en un punto intermedio entre ese calculo y el anterior, deberian haber colisionado? Por ejemplo un objeto que en el ciclo anterior del bucle se calcula que esta en (0, 0) y en el siguiente se calcula que esta en (2, 2) y por otro lado otro objeto que esta en (2, 0) en el ciclo anterior y en el siguiente esta en (0, 2) y obviamente deberian haber colisionado en (1, 1) suponiendo en el ejemplo que llevan misma velocidad aunque en diferente dirección. ¿Como se puede tener esto en cuenta al ir recalculando cada objeto? Aprovecho además para preguntar si conocen motores de fisica 3D que haga este tipo de calculos.<br /><br />El juego lo que es la parte grafica sera en 2D pero quiero qe en lo que es los objetos y la logica cuente ya con el eje z aunque solo se usen por ahora el x e y para los objetos tenerlos preparados para una vez este este listo poder reutilizar código para un intento de 3D cambiando unicamente la aprte de la interfaz, sin tocar la logica. Para soportar mejor multiples jugadores de la forma mas masiva que pueda habia pensado en usar REST en lugar de Websocket para así no gastar el maximo de conexiones que soporte el servidor ycon REST intercambiar el estado de los objetos JavaScript y Python.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2542">jhg</a> — Mié Oct 22, 2014 2:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[AdaelRuiz]]></name></author>
<updated>2014-03-29T20:21:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3057&amp;p=9319#p9319</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3057&amp;p=9319#p9319"/>
<title type="html"><![CDATA[Links interesantes • Re: Biblioteca para hacer juegos Flappy]]></title>

<category term="Links interesantes" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=11" label="Links interesantes"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3057&amp;p=9319#p9319"><![CDATA[
Interesante voy a testearlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3143">AdaelRuiz</a> — Sab Mar 29, 2014 8:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[AdaelRuiz]]></name></author>
<updated>2014-03-29T20:02:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3058&amp;p=9318#p9318</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3058&amp;p=9318#p9318"/>
<title type="html"><![CDATA[Ejemplos • Ayuda con almacenamiento de item para un juego]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3058&amp;p=9318#p9318"><![CDATA[
Hola comunidad, como están? ando dando mis primeros pasos en el engine de pygame, y el primer proyecto que ando haciendo es un juego rpg, pero en papel tengo una lista enorme de armas, hechizos y equipo, etc, pero para ser sincero no tengo la menor idea de como poder almacenar eso y posterior mente usarlo en el juego, ¿alguien me pueden dar una idea para poder hacerlo?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3143">AdaelRuiz</a> — Sab Mar 29, 2014 8:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2014-03-20T17:51:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3057&amp;p=9317#p9317</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3057&amp;p=9317#p9317"/>
<title type="html"><![CDATA[Links interesantes • Biblioteca para hacer juegos Flappy]]></title>

<category term="Links interesantes" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=11" label="Links interesantes"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3057&amp;p=9317#p9317"><![CDATA[
Saludos!!, hoy me enteré de una biblioteca para hacer juegos<br />que pinta interesante. ¿Alguno de ustedes la investigó?<br /><br /><!-- m --><a class="postlink" href="https://github.com/pyronimous/flappy">https://github.com/pyronimous/flappy</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Mar 20, 2014 5:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Falcon]]></name></author>
<updated>2014-03-17T20:01:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3056&amp;p=9316#p9316</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3056&amp;p=9316#p9316"/>
<title type="html"><![CDATA[Inspiración y otras ideas interesantes • Re: Godot Engine: Un motor para juegos 2D/3D todo-incluido!]]></title>

<category term="Inspiración y otras ideas interesantes" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=13" label="Inspiración y otras ideas interesantes"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3056&amp;p=9316#p9316"><![CDATA[
Hola, he leido tu post, y me genero interes, al parecer ya van varios dias que has posteado eso, yo en mi caso estoy un opco enpolvado, pero creo que con un poco de estudio e interes se puede lograr algo bueno, anteriormente he realizado proyecto en python, de juegos sencillos, pero por falta de apoyo y de organizacion con la gente, pues no se logro lo que queriamos. y en pocas palabras fue un proyecto fallido, ya que habia varios problemas que con el tiempo se fueron duplicando hasta que decidi mejor ponerle fin.<br /><br />de cualquier forma, me interesa tu propuesta, y me gustaria el poder realizar algo, al respecto, cuantas con mi apoyo amigo. si aun estas interesado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1848">Falcon</a> — Lun Mar 17, 2014 8:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2014-02-14T07:31:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3056&amp;p=9315#p9315</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3056&amp;p=9315#p9315"/>
<title type="html"><![CDATA[Inspiración y otras ideas interesantes • Godot Engine: Un motor para juegos 2D/3D todo-incluido!]]></title>

<category term="Inspiración y otras ideas interesantes" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=13" label="Inspiración y otras ideas interesantes"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3056&amp;p=9315#p9315"><![CDATA[
Saludos gente! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Estoy algo emocionado leyendo la documentación de Godot, que es un motor de videojuegos 2D/3D que nada más le hace falta sacarte el perro de paseo! Este motor puede correr en varios sistemas operativos como GNU/Linux, Windows y MacOS X, ademas de permitirte de hacer juegos para escritorio, puedes hacer con él también juegos para dispositivos mobiles como iOS y Android.<br /><br /><img src="http://www.godotengine.org/wp/wp-content/uploads/2014/01/sliders_web_godot_linuxmacwin-01.jpg" alt="Imagen" /><br /><br />Tiene un editor integrado con una plétora de funcionalidades, nada más miren ésta otra imagen:<br /><br /><img src="http://www.godotengine.org/wp/wp-content/uploads/2014/01/editor2.jpg" alt="Imagen" /><br /><br />El motor ha sido el resultado de un desarrollo de diez años, por lo que ya se han hecho cantidad de juegos con él (quienes han hecho los susodichos juegos durante ese tiempo ha sido nada más y nada menos que el <span style="font-weight: bold">OKAM Studio</span>; si esta calidad de personajes están detrás del desarrollo de esta herramienta, no veo porque no puedo estar más emocionado xD)<br /><br /><img src="http://www.godotengine.org/wp/wp-content/uploads/2014/01/gamespublished.jpg" alt="Imagen" /><br /><br />Los desarrolladores en lugar de optar por perseguir ese sueño de hacer juegos sin programar ni una sola linea de código, desarrollaron su propio lenguaje script de programación fuertemente inspirado en Python, y leyendo la documentación lo encuentro realmente sencillo!<br /><br />Ahora mismo están en fase alfa, por lo cual cualquier persona en éste foro que haga juegos se anime y pruebe el motor para su próximo proyecto, y de paso ayuda dando algo de retro-alimentación a los desarrolladores! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br /><a href="http://www.godotengine.org/wp/" class="postlink">Acá el enlace de el sitio del proyecto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /></a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Feb 14, 2014 7:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-12-18T02:49:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9312#p9312</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9312#p9312"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: SDL]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9312#p9312"><![CDATA[
Saludos!<br /><br />Bueno, primero que nada, SDL no esta muy orientado a objetos (Clases, como dices) que digamos. Se puede hacer si tu haces tus propias clases y por dentro escribes el código SDL respectivo. Yo en lo personal te recomiendo que te pases a <a href="http://www.sfml-dev.org/" class="postlink">SFML</a> que esta pensado para usarse en C++ (y esta orientado a objetos). El procedimiento seria similar, escribes tus propias clases y usas composición (composición antes que usar herencia, como dicen) para juntar SFML con el código de tu juego.<br /><br />Me encantaría ayudarte con algo concreto, pero mi C++ es aun algo verde (aunque estoy trabajando para madurarlo). Pero como dices, te gustaría saber sobre clases menejadores de Sprites, frames (ni idea como pretendes manejar un frame...) y personaje. Bueno, la programación orientada a objetos te permite abstraer tu problema a conceptos. Por ejemplo, una clase que se encargue en el manejo de los sprites podría llamarse <span style="font-weight: bold">Escena</span>, ella se encargaría de la creación y eliminación de sprites en el mapa/escenario de tu juego. Una forma de ir poniendo los sprites dentro de una instancia de Escena seria usando un <span style="font-weight: bold">vector</span>, el objeto vector te permitiría guardar las instancias del objetos Sprite tan fácil como hacer <span style="font-style: italic">mivector.push_back(enemigo1)</span>, por supuesto que tendrás que estudiar la biblioteca STL de C++ para que te familiarices con la mayoría de los objetos que se ofrecen y así resuelvas el problema que te planteas de la mejor forma según tus requerimientos.<br /><br />También no estaría mal familiarizarse con la colección de bibliotecas Boost, su biblioteca signals2 se ve muy interesante y te permitirá implementar el patrón de diseño Observer, ideal para enviar eventos a diferentes objetos sin mucho trajín (y es usado actualmente en el motor Pilas)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Dic 18, 2013 2:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-12-18T02:30:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9311#p9311</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9311#p9311"/>
<title type="html"><![CDATA[General • Re: Ayuda con Inteligencia artificial]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9311#p9311"><![CDATA[
Hola y bienvenida!<br /><br />Veras, el tema es un poco complicado como para que alguien lo explique en un post. ¿Sabes que es una maquina(?) de estados? Bueno, viene a ser algo así como los estados en los que se encuentra un autómata, y a partir de ellos, a cuales otros estados puede acceder. Para explicarlo más fácil, yo ahora mismo estoy sentado en mi silla; se puede decir que estoy en un estado determinado que se llama &quot;sentado&quot; ¿A que otro estado puedo acceder desde mi estado actual? Bueno, puedo acceder solamente a uno de dos: &quot;escribir en la portátil&quot; o ponerme &quot;de pie&quot;. Sí me pusiera de pie, podría acceder a otros estados como &quot;caminar&quot;, &quot;saltar&quot; y nuevamente &quot;sentado&quot;. ¿Cómo se consigue que un autómata pase de un estado a otro de forma lógica y sin saltarse un estado? Con <a href="https://www.youtube.com/watch?v=DdCoaWzLw2g" class="postlink">arboles binarios</a>. De esta forma, evitaras que tu autómata pase de &quot;escribir en la portátil&quot; a &quot;correr&quot;, que es un cambio de estado ilógico.<br /><br />Ahora, el problema que describes se puede afrontar de esta manera, con una maquina de estado para los actores/sprites/enemigos involucrados. Escribes una maquina de estado raíz dentro de la clase del actor, y enlazas esa maquina de estado con otras dos o tres o las que necesites por medio de una estructura de árbol binario. La lógica de la IA, supongo yo, iría dentro de cada maquina de estado haciendo que el actor se comporte de forma diferente cuando la maquina de estado cambie.<br /><br />Por supuesto, para que el autómata cambie de comportamiento por medio de su maquina de estados, es necesario que pueda comprobar ciertas condiciones externas a él (de otra manera ¿Cómo cambiaría de estado?). Si el actor no esta en alerta, que camine de un lado al otro (aquí tendrás que darle la posibilidad de &quot;decidir&quot; a donde &quot;quiere&quot; ir que seguido, se mueva hasta el lugar que el actor &quot;desea&quot;), y si el actor mientras camina o esta decidiendo dónde moverse, &quot;ve&quot; al jugador, lo persiga y le dispare. Por supuesto esto ya es un tema algo más complicado. Posiblemente el modulo <a href="http://code.google.com/p/aima-python/wiki/ReadMe" class="postlink">aima-python</a> (por si estas implementando el juego en Python) te ayude a evitar reinventar la rueda, pero en lo personal te recomiendo que estudies algo de álgebra y te familiarices con el tema.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Dic 18, 2013 2:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-12-06T02:19:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3046&amp;p=9310#p9310</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3046&amp;p=9310#p9310"/>
<title type="html"><![CDATA[Artículos, traducciones y documentación • Programar en C++ sexta edición]]></title>

<category term="Artículos, traducciones y documentación" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=2" label="Artículos, traducciones y documentación"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3046&amp;p=9310#p9310"><![CDATA[
Saludos! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Me alegra que el foro volviera a estar en linea xD. Hoy les traigo un libro que, aunque algo viejo, es super interesante, en especial si no sabes nada sobre la increible colección de bibliotecas Boost para C++ y Ogre3D, además del propio lenguaje C++.<br /><br /><img src="http://lalibreria.deshackra.com/Harvey%20M.%20Deitel%2C%20Paul%20J.%20Deitel/Como%20Programar%20C__%20%28131%29/Como%20Programar%20C__%20-%20Harvey%20M.%20Deitel%2C%20Paul%20J.%20Deitel_resizedcover.jpg" alt="Imagen" /><br /><br />Pueden visitar <a href="http://lalibreria.deshackra.com/_catalogo/book_0/book_131.html" class="postlink">mi libreria</a> y hacer la descarga del PDF <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />. El código fuente que viene con el libro lo pueden <a href="https://my.owndrive.com/public.php?service=files&amp;t=a0ffd7a652737e35a5a7dc25959028d4" class="postlink">bajar de acá</a>.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Dic 06, 2013 2:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2013-11-15T18:56:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3045&amp;p=9309#p9309</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3045&amp;p=9309#p9309"/>
<title type="html"><![CDATA[Anuncios de los desarrolladores • Publicamos la versión 0.83]]></title>

<category term="Anuncios de los desarrolladores" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=23" label="Anuncios de los desarrolladores"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3045&amp;p=9309#p9309"><![CDATA[
Saludos!!!, les quería comentar que publicamos la nueva versión de pilas-engine, pueden<br />descargarla directamente desde el sitio web:<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/">http://www.pilas-engine.com.ar/</a><!-- m --><br /><br />Abrazo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Nov 15, 2013 6:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-14T21:26:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9308#p9308</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9308#p9308"/>
<title type="html"><![CDATA[General • Ayuda con Inteligencia artificial]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9308#p9308"><![CDATA[
Hola, estoy intentando hacer una inteligencia artificial para enemigos RPG que cuando vean al personaje principal disparen, pero cuando no lo hagan caminen de lado a lado.<br />El problema es que no encontre ninguna forma de hacerlo ni nada.<br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Jue Nov 14, 2013 9:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Franjabube]]></name></author>
<updated>2013-11-14T06:30:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9307#p9307</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9307#p9307"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • SDL]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9307#p9307"><![CDATA[
Hola a todos!<br /><br />Mi nombre es Francisco, actualmente estoy comenzando a practicar en SDL, tengo un pequeño proyecto para practicar, &quot;soki&quot;, no es nada especial jajaja, solo mi primer programatia en SDL<br /><br />Quisiera saber como podría mejorar mi codigo? Especialmente, en como utilizar <span style="font-weight: bold">Clases</span> para el manejo de Frames, Sprites, Personaje..no se exactamente como es el pseudo codigo, digamos, para realizar cada uno, como debería organizarse cada uno<br /><br />Ajunto mi pequeño proyecto para que lo vean, y su codigo.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;SDL/SDL.h&gt;<br />#include &lt;stdlib.h&gt;<br />#include &lt;iostream&gt;<br /><br />int main()<br />{<br />   SDL_Init( SDL_INIT_EVERYTHING );<br /><br />SDL_Surface *ventana, *soki, *suelo, *fondo;<br />SDL_Event tecla;<br />SDL_Rect posicion_soki = {0, 152};<br />SDL_Rect posicion_recorte = {0, 0, 40, 40};<br />//SDL_Rect posicion_suelo = {0, 240};<br />SDL_Rect posicion_fondo = {0, 0};<br /><br /><br />int done = 0;<br /><br />            ventana = SDL_SetVideoMode( 800, 400, 32, SDL_SWSURFACE | SDL_ASYNCBLIT | SDL_DOUBLEBUF);<br />               if( ventana == NULL)<br />                  {   fprintf (stderr, &quot;No se pudo mostrar el modo de video 800x600: %s\n&quot;, SDL_GetError());<br />                        exit(1);<br />                  }<br />               <br />               //Titulo de la ventana                  <br />               SDL_WM_SetCaption(&quot;Soki&quot;, NULL);<br /><br />            soki = SDL_LoadBMP(&quot;soki.bmp&quot;);<br />               if( soki == NULL)<br />                  {   fprintf (stderr, &quot;No se pudo mostrar el grafico: %s\n&quot;, SDL_GetError()); <br />                        exit(1);<br />                  }<br /><br />               //suelo = SDL_LoadBMP(&quot;suelo.bmp&quot;);<br /><br />               fondo = SDL_LoadBMP(&quot;fondo.bmp&quot;);<br /><br />               //De la imagen soki, no pintar el color violeta (255,0,150)<br />               SDL_SetColorKey(soki,SDL_SRCCOLORKEY|SDL_RLEACCEL,SDL_MapRGB(soki-&gt;format,255,0,150));<br />//Repeticion de tecla<br />SDL_EnableKeyRepeat(SDL_DEFAULT_REPEAT_DELAY,SDL_DEFAULT_REPEAT_INTERVAL);<br /><br />            while(true)<br />            {<br />               while ( SDL_PollEvent(&amp;tecla))<br />                        {<br />                           if(tecla.type==SDL_QUIT){<br />                              exit(0);}<br />                           if(tecla.type==SDL_KEYDOWN)<br />                             switch(tecla.key.keysym.sym)<br />                              {<br /><br />                           case SDLK_LEFT: posicion_soki.x-=5.5;<br />                                       posicion_recorte.x-=40;<br /><br />                              if(posicion_recorte.x&lt;0)<br />                                    {<br />                                       posicion_recorte.x=360;<br />                                    } <br />                              if(posicion_soki.x&lt;0)<br />                                    {<br />                                       posicion_soki.x=0;<br />                              }   <br />                                                    <br />                                             break; //Break, para detener loop en la instruccion<br />                           <br /><br />                           <br />                           case SDLK_RIGHT: posicion_soki.x+=5.5;<br />                                        posicion_recorte.x+=40;<br />                              <br />                              if(posicion_recorte.x&gt;360)<br />                                    {<br />                                       posicion_recorte.x=0;<br />                                    } <br />                              if(posicion_soki.x&gt;760)  //No se puede usar 800 como limite, porque la distancia entre soki y el borde del cuadrado es de 40 pixeles<br />                                    {<br />                                       posicion_soki.x=760;<br />                                    }<br />                                             break;<br /><br /><br />                           case SDLK_UP: posicion_soki.y-=10;<br />                                    posicion_recorte.x-=40;<br />                              <br />                              if(posicion_recorte.x&lt;0)<br />                                    {<br />                                       posicion_recorte.x=360;<br />                                    } <br />                              if(posicion_soki.y&lt;0)<br />                                    {<br />                                       posicion_soki.y=0;<br />                                    }<br />                                             break;//Break, para detener loop en la instruccion<br />                           case SDLK_ESCAPE: return 0;<br /><br />                           case SDLK_DOWN: posicion_soki.y+=10;<br />                              if(posicion_soki.y&gt;148)<br />                                    {<br />                                       posicion_soki.y = 148;  //Limita el movimiento de soki hasta 400 en y<br />                                    }<br /><br /><br />                           posicion_recorte.x+=40;<br />                              if(posicion_recorte.x&gt;360)<br />                                    {<br />                                       posicion_recorte.x=0;<br />                                    } <br />                                             break;<br />                           }<br />            }<br /><br />            //Pintar sobre pantalla, el siguiente color<br />            SDL_FillRect(ventana, 0, SDL_MapRGB(ventana-&gt;format, 80, 80, 80));<br />            //Dibujar nave en pantalla, en la posicion &amp;posicion_nave<br />            //SDL_BlitSurface(suelo, NULL, ventana, &amp;posicion_suelo);<br />            SDL_BlitSurface(fondo, NULL, ventana, &amp;posicion_fondo);<br />            SDL_BlitSurface(soki, &amp;posicion_recorte, ventana, &amp;posicion_soki);         <br />            //Mostrar ventana<br />            SDL_Flip( ventana );<br />            }<br /><br />//Liberar superficie<br />SDL_FreeSurface ( ventana );<br />return 0;<br />}</code></dd></dl><br /><br />Básicamente quiero aprendear el manejo de Sprites y Frames corréctamente, eh leído sobre esto en varios libros y tutoriales, pero cada uno, lamentablemente estan adjudican sus descripciones únicamente a sus ejemplos, por lo tanto me cuesta lograr entenderlos de manera efectiva.<br /><br /><br />LINK de descarga de mi proyecto (450kb) : <!-- m --><a class="postlink" href="https://mega.co.nz/#!9whwxaTT!Sz5YE3gIujRWgFdTfWDL9U-tWo8E56pWHmoRphH7t5k">https://mega.co.nz/#!9whwxaTT!Sz5YE3gIu ... moRphH7t5k</a><!-- m --><br /><br />Saludos a todos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3151">Franjabube</a> — Jue Nov 14, 2013 6:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[SebasCabeza]]></name></author>
<updated>2013-11-14T04:56:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3042&amp;p=9306#p9306</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3042&amp;p=9306#p9306"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Problema Camara SDL2]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3042&amp;p=9306#p9306"><![CDATA[
Hola, gente estoy en las primeras etapas de un proyecto de un plataformero, y estoy teniendo problemas con la camara, eh probado la forma de LAzy foo, sin resultados, eh probado otras formas pero tambien sin resultados, creo que mi problema es mas de entendimiento que de otra cosa, el concepto que tengo es el siguiente. Creo un SDL_Rect (camara) por ejemplo, yo a ese rectangulo le sumo la posicion del personaje en los ejes X e Y y despues en (W/H) el ancho y largo deseado de la camara, despues lo renderizo en pantalla de la siguiente forma SDL_RenderCopy(renderer,NULL,NULL,&amp;camara), despues les seteo los parametros para que no salga del ancho y largo del nivel, pero es lo mismo que nada, no funciona. Si alguien me podria orientar se lo agradeceria inmensamente. Dejo el codigo que tengo hasta ahora. <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void Jug::Draw()<br />  {<br /><br />      posicion.x = rect.x+*CameraX;<br />      posicion.y = rect.y+*CameraY;<br />      posicion.w = rect.w;<br />      posicion.h = rect.h;<br /><br /><br /><br />      SDL_RenderCopy (renderer,texture,&amp;crop,&amp;posicion);<br /><br /><br />  }<br /><br />  void Jug::SetCamera()<br />  {<br /><br />      camara.x = (*CameraX+100/2)-1440/2;<br />      std::cout&lt;&lt;camara.x&lt;&lt;std::endl;<br />      camara.y = (*CameraY+100/2)-900/2;<br />      std::cout&lt;&lt;camara.y&lt;&lt;std::endl;<br />      camara.w = 500;<br />      camara.h = 500;<br /><br />      if( camara.x &lt; 0 )<br />            {<br />               camara.x = 0;<br />            }<br />            if( camara.y &lt; 0 )<br />            {<br />               camara.y = 0;<br />            }<br />            if( camara.x &gt; 1440 - camara.w )<br />            {<br />               camara.x = 1440 - camara.w;<br />            }<br />            if( camara.y &gt; 900 - camara.h )<br />            {<br />               camara.y = 900 - camara.h;<br />            }<br /><br />      SDL_RenderCopy(renderer,texture,NULL,&amp;camara);<br /><br /><br />  }</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3144">SebasCabeza</a> — Jue Nov 14, 2013 4:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[IrvingProg]]></name></author>
<updated>2013-11-12T23:16:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9305#p9305</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9305#p9305"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: No reproduce el sonido]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9305#p9305"><![CDATA[
<blockquote><div><cite>Natalia escribió:</cite><br />No, ya esta. <br />Era asi:<br /><pre class="prettyprint">musica=pilas.musica.cargar&#40;&quot;tangananica.mp3&quot;&#41;<br />musica.reproducir&#40;repetir=True&#41;<br />musica.detener&#40;&#41;</pre><br /></div></blockquote><br /><br />Creo que ya lo descubriste jejej.<br /><br />Que bien que funcionó.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2369">IrvingProg</a> — Mar Nov 12, 2013 11:16 pm</p><hr />
]]></content>
</entry>
</feed>