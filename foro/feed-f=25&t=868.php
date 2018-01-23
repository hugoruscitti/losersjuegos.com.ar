<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=25&amp;t=868" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-10-05T04:32:27+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=25&amp;t=868</id>
<entry>
<author><name><![CDATA[estudiante]]></name></author>
<updated>2010-10-05T04:32:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4238#p4238</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4238#p4238"/>
<title type="html"><![CDATA[Re: Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4238#p4238"><![CDATA[
Saludos<br /><br />Claro, Hugo. Adelante<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2184">estudiante</a> — Mar Oct 05, 2010 4:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-10-04T14:26:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4226#p4226</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4226#p4226"/>
<title type="html"><![CDATA[Re: Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4226#p4226"><![CDATA[
<blockquote><div><cite>estudiante escribió:</cite><br />Hola:<br /><br />Ha pasado ya mas de un mes desde que planteaba la idea de hacer un juego tipo laberinto.<br />Lamentablemente, no he podido concentrarme en la solución de ese problema.<br />No obstante, quisiera plantear lo que tenia pensado:<br /><br /><ol style="list-style-type: decimal"><li> Debe existir un objeto mapa</li><li>Mi idea era usar un archivo de texto para crear el objeto mapa.</li><li>Para &quot;interpretar&quot; ese archivo de texto, yo planteaba usar el módulo ConfigParser  (en python 3.0 es configparser, pero yo no uso esa versión). <br />La idea la saqué de aquí:<br /><a href="http://wiki.sheep.art.pl/Tiled%20Map%20in%20PyGame" class="postlink">Sheep Wiki</a><br /></li></ol><br />En fin, copio aquí un prototipo del archivo de texto:<br /><dl class="codebox"><dt>Code: </dt><dd><code># simplemap.ini<br />&#91;animations&#93;<br /># nothing yet<br /><br />&#91;tilesheet&#93;<br /># nothing yet<br /><br />&#91;one_image_per_tile&#93;<br /># element / symbol / imagefilename<br />wall = &quot;w&quot;, &quot;ima/wall.png&quot;<br />floor = &quot;.&quot;, &quot;ima/floor.png&quot;<br />player = &quot;p&quot;, &quot;ima/player.png&quot;<br />target = &quot;t&quot;, &quot;ima/target.png&quot;<br /><br /><br />&#91;simbolmap&#93;<br />map= <br />   &quot;<br />   wwwwwwwwwwww<br />   w.....w....w<br />   w.....w....w<br />   w..p..w.w..w<br />   w.......w.tw<br />   wwwwwwwwwwww<br />   &quot;<br /></code></dd></dl><br /><br />El objeto mapa, por lo que veo, luego hay que subdividirlo en varios otros objetos. Se requieren varias listas y varios pasos como para llegar a un resultado gráfico. <br /><br />Quizás lo mejor hubiese sido usar el código tal como estaba de la página &quot;Sheep Wiki&quot;. Pero opté por hacerle unos cambios. Y ahora estoy atorado<br /><br />Tal vez algún otro tenga una mejor idea.  En otro post leí algo sobre usar un formato &quot;XML&quot;. <br /><br />Un saludo<br /></div></blockquote><br /><br />Si te parece bien podemos hacer otro thread en el foro, así vemos las<br />alternativas para crear los escenarios. ¿te parece bien?, sería un hilo<br />de nombre tipo &quot;mapas para pilas&quot; o algo así. Me gusta la idea<br />de tener el mapa en solo texto usando símbolos...<br /><br />Pilas ya tienen algo semi armado para hacer mapas de grillas, tendríamos<br />que escribir algo de código de prueba para ver cómo nos gustaría<br />usarlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Oct 04, 2010 2:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[estudiante]]></name></author>
<updated>2010-10-04T06:30:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4224#p4224</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4224#p4224"/>
<title type="html"><![CDATA[Re: Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4224#p4224"><![CDATA[
Hola:<br /><br />Ha pasado ya mas de un mes desde que planteaba la idea de hacer un juego tipo laberinto.<br />Lamentablemente, no he podido concentrarme en la solución de ese problema.<br />No obstante, quisiera plantear lo que tenia pensado:<br /><br /><ol style="list-style-type: decimal"><li> Debe existir un objeto mapa</li><li>Mi idea era usar un archivo de texto para crear el objeto mapa.</li><li>Para &quot;interpretar&quot; ese archivo de texto, yo planteaba usar el módulo ConfigParser  (en python 3.0 es configparser, pero yo no uso esa versión). <br />La idea la saqué de aquí:<br /><a href="http://wiki.sheep.art.pl/Tiled%20Map%20in%20PyGame" class="postlink">Sheep Wiki</a><br /></li></ol><br />En fin, copio aquí un prototipo del archivo de texto:<br /><dl class="codebox"><dt>Code: </dt><dd><code># simplemap.ini<br />&#91;animations&#93;<br /># nothing yet<br /><br />&#91;tilesheet&#93;<br /># nothing yet<br /><br />&#91;one_image_per_tile&#93;<br /># element / symbol / imagefilename<br />wall = &quot;w&quot;, &quot;ima/wall.png&quot;<br />floor = &quot;.&quot;, &quot;ima/floor.png&quot;<br />player = &quot;p&quot;, &quot;ima/player.png&quot;<br />target = &quot;t&quot;, &quot;ima/target.png&quot;<br /><br /><br />&#91;simbolmap&#93;<br />map= <br />   &quot;<br />   wwwwwwwwwwww<br />   w.....w....w<br />   w.....w....w<br />   w..p..w.w..w<br />   w.......w.tw<br />   wwwwwwwwwwww<br />   &quot;<br /></code></dd></dl><br /><br />El objeto mapa, por lo que veo, luego hay que subdividirlo en varios otros objetos. Se requieren varias listas y varios pasos como para llegar a un resultado gráfico. <br /><br />Quizás lo mejor hubiese sido usar el código tal como estaba de la página &quot;Sheep Wiki&quot;. Pero opté por hacerle unos cambios. Y ahora estoy atorado<br /><br />Tal vez algún otro tenga una mejor idea.  En otro post leí algo sobre usar un formato &quot;XML&quot;. <br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2184">estudiante</a> — Lun Oct 04, 2010 6:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-09T15:09:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4091#p4091</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4091#p4091"/>
<title type="html"><![CDATA[Re: Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4091#p4091"><![CDATA[
<blockquote><div><cite>estudiante escribió:</cite><br />Hola<br />Idea: Un juego tipo laberinto, donde cargamos un plano y el jugador encuentra la salida<br /><br />Recursos: Un archivo de texto donde esté el mapa del nivel. Imágenes representando los &quot;tiles&quot; del camino, muro, objetivo y jugador.<br /><br />Objetos: Uno para manipular el mapa (crearlo, dibujarlo), otro para el jugador, y tal vez otro para el juego en sí.<br /><br />Habilidades del objeto jugador: Será capaz de moverse por teclado. Cuando &quot;colisione&quot; con el muro, debe detenerse, cuando lo haga con el camino, debe continuar moviéndose, cuando choque con el objetivo... gana y acaba el juego.<br /><br />Y en otras versiones se le añadirá sonidos, animaciones, otro tipo de obstáculos<br /></div></blockquote><br /><br />Buenisimo, me parece que podemos hacer algo al respecto para que<br />se pueda crear el juego facilmente.<br /><br />Armé 3 tareas en el redmine de losersjuegos, si completo esas tres tareas pronto<br />tendremos el juego del laberinto!!:<br /><br /><!-- m --><a class="postlink" href="http://www.dev-losersjuegos.com.ar/issues/47">http://www.dev-losersjuegos.com.ar/issues/47</a><!-- m --><br /><!-- m --><a class="postlink" href="http://www.dev-losersjuegos.com.ar/issues/58">http://www.dev-losersjuegos.com.ar/issues/58</a><!-- m --><br /><!-- m --><a class="postlink" href="http://www.dev-losersjuegos.com.ar/issues/59">http://www.dev-losersjuegos.com.ar/issues/59</a><!-- m --><br /><br />¿alguien se anima a dar una mano?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Sep 09, 2010 3:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[estudiante]]></name></author>
<updated>2010-09-09T04:21:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4086#p4086</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4086#p4086"/>
<title type="html"><![CDATA[Re: Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4086#p4086"><![CDATA[
Hola<br />Idea: Un juego tipo laberinto, donde cargamos un plano y el jugador encuentra la salida<br /><br />Recursos: Un archivo de texto donde esté el mapa del nivel. Imágenes representando los &quot;tiles&quot; del camino, muro, objetivo y jugador.<br /><br />Objetos: Uno para manipular el mapa (crearlo, dibujarlo), otro para el jugador, y tal vez otro para el juego en sí.<br /><br />Habilidades del objeto jugador: Será capaz de moverse por teclado. Cuando &quot;colisione&quot; con el muro, debe detenerse, cuando lo haga con el camino, debe continuar moviéndose, cuando choque con el objetivo... gana y acaba el juego.<br /><br />Y en otras versiones se le añadirá sonidos, animaciones, otro tipo de obstáculos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2184">estudiante</a> — Jue Sep 09, 2010 4:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-08T13:39:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4082#p4082</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4082#p4082"/>
<title type="html"><![CDATA[Re: Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4082#p4082"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />para el scroll esta el clásico plataformas de toda la vida, tipo Mario<br /></div></blockquote><br /><br />O los del tipo de 1945, naves o algo asi<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Sep 08, 2010 1:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-07T13:42:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4075#p4075</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4075#p4075"/>
<title type="html"><![CDATA[Re: Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4075#p4075"><![CDATA[
para el scroll esta el clásico plataformas de toda la vida, tipo Mario<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Sep 07, 2010 1:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-07T12:45:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4074#p4074</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4074#p4074"/>
<title type="html"><![CDATA[Re: Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4074#p4074"><![CDATA[
Si, mi idea es justamente hacer así. Que pilas incluya ejemplos de juegos<br />muy simples donde se puedan ver los conceptos de videjuegos en<br />concreto.<br /><br />Por ejemplo &quot;mover a un personaje&quot; es algo que hace el juego space invaders, que te<br />permite controlar una nave con el teclado. Además, en este juego, los enemigos<br />también tienen una lógica de IA simple, pero que funciona bien...<br /><br /><img src="http://www.juegosdb.com/wp-content//space-invaders2.jpg" alt="Imagen" /><br /><br />Sobre el scroll es un poco mas difícil, pero creo que un RPG sería<br />el ejemplo mas sencillo de implementar.<br /><br />¿que otros ejemplos podemos crear?¿ideas?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Sep 07, 2010 12:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[A3]]></name></author>
<updated>2010-09-07T06:43:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4072#p4072</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4072#p4072"/>
<title type="html"><![CDATA[Re: Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4072#p4072"><![CDATA[
oh, pues podemos usar mi inexperiencia para esto, yo soy relativamente nuevo en esto de los juegos, y justamente se me vienen dudas que resolví en su momento y otras que aun tengo de como hacer ciertas cosas, y que mejor que ver ejemplos de ello, no necesariamente tendrían que ser juegos completos, sino más como ejemplos concretos de algunas cuestiones como estas:<br /><br />- Mover un personaje (con entradas del usuario)<br />- Mover un personaje (con IA)<br />- Generador de Partículas (no se si Pilas tendrá uno)<br />- Scrolling<br />- Rotar una imagen desde cualquier eje<br />- Controlar el Framerate<br />- Menús<br />- etc, etc<br /><br />Esto me recuerda al J2ME que trae sus ejemplos de cosas en concreto. Y por supuesto que todo esto se puede implementar en jueguitos, pero a veces uno quiere ver un ejemplo de un tema especifico y entre tanto código del juego uno pierde el punto.<br /><br />Pero podría tener tanto ejemplos relativamente básicos como ejemplos completos de un juego. digo yo, no? pero si se trata de decir juegos, seria bueno tener un ejemplo de cada tipo de juego (los más comunes) para mostrar que con Pilas se pueden hacer de todo tipo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2146">A3</a> — Mar Sep 07, 2010 6:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-07T03:57:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4070#p4070</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4070#p4070"/>
<title type="html"><![CDATA[Re: Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4070#p4070"><![CDATA[
Que tal el tipico tetris, es comun, pero es buen ejemplo.<br />Un rpg sencillo, esto me lleva a preguntar si el motor incluye una maquina de estados, que se pueda usar facilmente.<br />El snake me gusta, solo sería ver si se pueden conseguir mejores graficos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Sep 07, 2010 3:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-07T02:03:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4069#p4069</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4069#p4069"/>
<title type="html"><![CDATA[Minijuegos para pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=868&amp;p=4069#p4069"><![CDATA[
Buenas, ¿como están?. Hoy comencé a escribir juegos con pilas<br />y se puede... en serio, creo que sería muy bueno para quienes<br />son nuevos en la programación de juegos que pilas incluyera<br />algunos juegos sencillos para investigar.<br /><br />Por ejemplo, un juego que me gustaría crear es un &quot;snake&quot; sencillo<br />y un juego de memoria como los de estas páginas:<br /><br /><!-- m --><a class="postlink" href="http://www.mundolatino.org/rinconcito/memory/index.htm">http://www.mundolatino.org/rinconcito/memory/index.htm</a><!-- m --><br /><!-- m --><a class="postlink" href="http://www.juegosjuegos.com/jugar-juego/Snake.html">http://www.juegosjuegos.com/jugar-juego/Snake.html</a><!-- m --><br /><br />¿y ustedes?, ¿que juegos les gustaría que incluyera pilas?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Sep 07, 2010 2:03 am</p><hr />
]]></content>
</entry>
</feed>