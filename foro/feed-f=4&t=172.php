<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=172" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-11-29T12:38:57+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=172</id>
<entry>
<author><name><![CDATA[joksnet]]></name></author>
<updated>2007-11-29T12:38:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=707#p707</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=707#p707"/>
<title type="html"><![CDATA[Juegos JS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=707#p707"><![CDATA[
Ante todo, gracias por las felicitaciones!<br /><br />Les cuento que la version del <a href="http://private.tietokone.com.ar/Tetris/joksnet/" class="postlink">Tetris</a> es muy avanzada. Ya tiene el tama#o normal, tiene una pantalla de configuracion en donde se puede elegir rotar los tetraedros para un lado o para el otro. Tambien tiene los dos tipos de &quot;drops&quot; el &quot;hard&quot; que te baja la ficha a donde deberia quedar (con el espacio) y el &quot;soft&quot; que te va bajando de a uno (con abajo en FF, y con S en IE). Tiene un modo de juego divertido, en donde los colores de las fichas son aleatorias: no mas acostumbrar la mente a un color igual a una ficha. Que ni bien las fichas dejen de cae, se oscurezcan: asi no confunden con la que esta cayendo. Y la opcion de jugar con una ficha fantasma. Muy bueno, deberian probarlo. Y muchas, muchas cosas mas.<br /><br />Pero el objetivo es esto no era hablar del Tetris sino de mi nuevo juego hecho en JavaScript, con puntajes y niveles en PHP+MySQL. Es un rompecabezas que hize en el dia de ayer, me llevo 10 horas aproximadamente. Se llama <a href="http://private.tietokone.com.ar/jPuzzle15/" class="postlink">jPuzzle15</a>. Simplemente hagan la prueba, si quieren pueden subir un nivel (que es una imagen que automaticamente se crean los mosaicos).<br /><br />Nota: Si van a subir una imagen, tienen que primero hacer click en el 'Board' en el que quieren poner el nivel y tiene que tener las dimensiones que ahi dice. De lo contrario utiliza solo los primeros pixeles o completa con negro en donde no tiene.<br /><br />Saludos,<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=95">joksnet</a> — Jue Nov 29, 2007 12:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nuno]]></name></author>
<updated>2007-10-19T23:57:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=635#p635</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=635#p635"/>
<title type="html"><![CDATA[Juegos JS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=635#p635"><![CDATA[
Hermano, te quería felicitar por ambos juegos!<br />seguí así TE FELICITO<br />un abrazo<br />Nuno!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1831">nuno</a> — Vie Oct 19, 2007 11:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[joksnet]]></name></author>
<updated>2007-10-16T18:07:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=612#p612</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=612#p612"/>
<title type="html"><![CDATA[Juegos JS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=612#p612"><![CDATA[
<blockquote><div><cite>Juan Carlos escribió:</cite><br />Hola, muy bueno el tetris. A mi gusto, la cuadricula deberia ser mas pequeña (es muy alta).<br /><br />Tambien tendrias que chequear el codigo del score ya que a medida que las piezas van cayendo, el puntaje sube, sin motivo alguno.<br /><br />Saludos<br /></div></blockquote><br /><br />Si, realmente me entere tarde que ancho predilecto es de 11 bloques, y que el puntaje sigue una formula con respecto al bloque mas arriba y a la cantidad de lineas hechas hasta que me entere de este [0] sitio a travez de la Wikipedia [1]. Aunque no parezca fue intencion hacer que cada vez que un bloque cae sume puntos, y que cuando lo forzas a caer, sume 2 en vez. Si tengo algun tiempo de mas esta semana voy a arreglar algunos defectos.<br /><br />[0] <!-- m --><a class="postlink" href="http://www.tetrisconcept.com/wiki/index.php?title=Main_Page">http://www.tetrisconcept.com/wiki/index ... =Main_Page</a><!-- m --><br />[1] <!-- m --><a class="postlink" href="http://en.wikipedia.org/wiki/Tetris">http://en.wikipedia.org/wiki/Tetris</a><!-- m --><br /><br />Tambien le encontre que al rotar una pieza no controla que una vez rotada no se superponga con otra pieza. Entra en la lista de TODO. Como idea de features que deberia tener, esta poder colocar una pieza en hold como en el archi-conocido Arika, que la tecla de espacio baje directamente la pieza a la posicion en donde deberia quedar, y posiblemente una pantalla de opciones en donde se puedan setear cosas como la direccion de rotacion de las fichas, poder ver en donde va a quedar la ficha, etc.<br /><br />Saludos,<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=95">joksnet</a> — Mar Oct 16, 2007 6:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-10-10T22:25:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=598#p598</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=598#p598"/>
<title type="html"><![CDATA[Juegos JS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=598#p598"><![CDATA[
Hola, muy bueno el tetris. A mi gusto, la cuadricula deberia ser mas pequeña (es muy alta).<br /><br />Tambien tendrias que chequear el codigo del score ya que a medida que las piezas van cayendo, el puntaje sube, sin motivo alguno.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mié Oct 10, 2007 10:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-10-10T13:47:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=596#p596</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=596#p596"/>
<title type="html"><![CDATA[Re: Juegos JS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=596#p596"><![CDATA[
<blockquote><div><cite>joksnet escribió:</cite><br />Espero sus comentarios y ya saben. Si encuentan algun bug, avisen.<br /></div></blockquote><br /><br />Antetodo mis felicitaciones, me gustan mucho ambos juegos. Revisé<br />el código fuente del Tetris intentando cambiar la forma en la<br />giran las fichas; no estoy muy seguro, pero creo que los jugadores<br />de Tetris &quot;acostumbran&quot; a rotar las piezas en sentido anti-horario...<br /><br />¿hay algún jugador de tetris por ahí?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Oct 10, 2007 1:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[joksnet]]></name></author>
<updated>2007-10-10T00:54:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=595#p595</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=595#p595"/>
<title type="html"><![CDATA[Juegos JS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=172&amp;p=595#p595"><![CDATA[
Hola,<br /><br />Se que JavaScript no es el lenguaje adecuado para la creacion de juegos, pero al igual que en Python se pueden crear juegos de manera muy rapida. Queria compartir con ustedes un Tetris que realize en dos dias unicamente, tiene algo de PHP y MySQL para almacenar los puntajes dado que era la forma mas facil de hacerlo. Obviamente el juego es libre, pueden verlo corriendo (o jugarlo) <a href="http://private.tietokone.com.ar/Tetris/joksnet/" class="postlink">aca</a> y decargarlo desde <a href="http://private.tietokone.com.ar/Tetris/joksnet/4bricks.zip" class="postlink">aca</a>.<br /><br />Tambien habia empezado otro juego parecido al Moon Lander tambien en JS, pero no esta terminaddo. Este lo puden ver desde <a href="http://private.tietokone.com.ar/Plander/" class="postlink">aca</a>. Espero sus comentarios y ya saben. Si encuentan algun bug, avisen.<br /><br />Saludos,<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=95">joksnet</a> — Mié Oct 10, 2007 12:54 am</p><hr />
]]></content>
</entry>
</feed>