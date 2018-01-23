<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1036" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-08T15:08:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1036</id>
<entry>
<author><name><![CDATA[danielpuch]]></name></author>
<updated>2011-02-08T15:08:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5071#p5071</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5071#p5071"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5071#p5071"><![CDATA[
Carlos, me voy a meter a chusmear tu codigo.<br /><br />Es que me gustaria aprender C/C++ mas adelante, por ahora estoy en python/pygame pero me interesa el tema.<br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2372">danielpuch</a> — Mar Feb 08, 2011 3:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-02-07T00:13:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5068#p5068</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5068#p5068"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5068#p5068"><![CDATA[
Lo que voy a comenzar haciendo es definir algunas clases en un diagrama de UML, las mas basicas y una vez hecho eso voy a comenzar con la programacion<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Lun Feb 07, 2011 12:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-02-06T02:03:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5057#p5057</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5057#p5057"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5057#p5057"><![CDATA[
Por que no empiezas a escribir algo de código, lo que se te valla ocurriendo y nos lo muestras para darte algunos consejos, puedes empezar por el sistema de video y después con los actores. con eso pronto veras algo en la pantalla, y ya cuando lo tengas será mas fácil seguir el esquema de desarrollo que haya quedado<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Feb 06, 2011 2:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-02-06T00:49:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5056#p5056</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5056#p5056"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5056#p5056"><![CDATA[
Basicamente mi idea para este nuev juego, seria tener una clase para los graficos, de la cual posteriormente se derivarian los personajes del juego, tambien me interesaria tener una libreria donde estarian todas los subsistemas que necesitaria, en el main tendria ambas librerias y clases relacionadas, y las clases de los personajes estarian relacionadas con la clase de los sistemas, esa seria mi idea por el momento<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Dom Feb 06, 2011 12:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-02-05T07:27:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5050#p5050</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5050#p5050"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5050#p5050"><![CDATA[
Es correcto lo que dices, en la clase game, que vendría siendo la clase maestra de la cual se accede a todo, tiene una función update, esta función se encarga de hacer un apdate a todas los demas managers, por ejemplo el de animación y a una clase que controla las colisiones, pero no actualiza a todas, por que hay clases que solo sirven al inicio del juego o bien, son llamadas al realizar alguna tarea. De hecho si te fijas en la clase escena puedes ver como se realizas las tareas, como esto lo hice pensando en la implementación en LUA, todo lo que se permite hacer se encuentra implementado mediante funciones en escena.h, de ahí se va bajando a las demás clases para que permiten cumplir la tarea, es decir si quieres comenzar leyendo el código es en esena.h donde debes comenzar, hay un archivo arriba de esena.h en la jerarquía es game.h, pero este solo se encarga de inicializar el vídeo y de renderizar la escena. No todo lo que puede hacer el motor esta en esa clase, aveces en los programas test he tenido que acceder a las clases manualmente, estoy consiente que la manera en la que se hace funcionar al motor es un poco engorrosa, me gusta mas una como el estilo de pilas, que es instanciar objetos en el script.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Feb 05, 2011 7:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-02-05T06:48:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5049#p5049</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5049#p5049"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5049#p5049"><![CDATA[
A proposito del libro que nombras, lo lei,  pero se me hizo bastante vueltero en algunas cosas del diseño, por lo que prefiero diseñar algo propio. como vos bien decis me gusta la idea de una jefe de departamento, esos managers que vos tenes serian pro ejemplo el header esena.h??, estoy tratando de conectar lo que me decis con el codigo que tenes, entonces cada vez que la logica del juego necesite algo esta se lo pedira a algun objeto de la clase esena y esta a su vez accedera a las clases correspondientes de las cuales se proveera para llevar a cabo la tarea<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Sab Feb 05, 2011 6:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-02-05T06:23:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5048#p5048</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5048#p5048"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5048#p5048"><![CDATA[
Bueno, la forma de hacerlo pues es siguiendo el esquema de orientación a objetos. es una buena pregunta, en uno de los libros de sdl que esta en esta página se hace al final un juego 1945 el clásico de aviones, creo que a ese tipo de estructura se refiere Juan, es un juego sencillo, y es fácil ver que se hace en el main y como se van llamando las funciones que mantienen el juego, pero ese esquema para un juego mas grande sería muy engorroso a mi parecer. Regresando a lo que me preguntabas, bueno cuando empecé el juego fue de la forma como el 1945 del libro, declare funciones para mantener el cuadro y los actores, era casi todo estructurado, luego me di cuenta que me acomodaba mas la forma un motor, un motor para ese juego, lo aclaro por que no es lo mismo que el motor de pilas que trae un montón de cosas. Mi motor trate lo necesario para el juego que tenia pensado, pero claro al ser un  motor es muy general y puedo hacer con el otro tipo de juego, quizas un RPG, uno tipo Mario bros, pero no implementa un motor de física por que no es necesario, en cambio pilas mientras mas general sea mejor.Me desvié un poco jeje, pero bueno, la forma que lo junto es llamar a las clases que necesito, si quiero crear un actor pues lo creo al inicio del programa, le puedo dar una velocidad y se ira moviendo cada que pase un frame sin hacer nada mas, pero si quiero detectar una colisión pues tengo que meter el código en el bucle principal donde llamo a las clases que ya cree para ver si un objeto choca con otro. <br /><br />Quizás si miras los ejemplos que tengo te des una mejor idea, están en la carpeta test, son tres checate el que dice debug, es muy simple, pero aí se ve el uso del motor, lo que hago es incluir hai todo el motor, por que lo compilo como un biblioteca dinámica, puede parecer ciertas cosas engorrosas, sobre todo la parte en la que defino unos puntos ya lo veras de referencia en cada actor, pero no termine de afinar muchas cosas, básicamente lo que tengo son ideas, que funcionan pero les falta un poco de código para que queden mejor, por que si no defino esos puntos los actores no aparecen, ya que el gestor de gráficos no los dibuja. <br /><br />De hecho la parte que puede ser mas compleja no es como interactúa la lógica del juego con el motor, por que como te digo solo es ir instanciando objetos según necesitas. En cambio la interacción interna del motor puede ser un poco compleja, en mi caso como ya viste para cada módulo(actores, gráficos, efectos, sonido, etc) tengo creado un manager, y la idea es análoga a la de un jefe de un departamento, organiza a sus subordinados y mantiene la comunicación con los demás departamentos si es que lo necesita, y un director que se encarga de pedirle a los jefes las tareas que requiere de ese departamento, y el cliente en este caso la lógica del juego o el que lo programador hace peticiones al director.<br />La biblioteca del motor está preparada para ser importada en un script de LUA lo que permite un desarrollo mas fácil si no se quiere usar C++. <br />Saludos, y cualquier dudad del código intentare responderla en cuanto pueda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Feb 05, 2011 6:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-02-05T05:05:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5047#p5047</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5047#p5047"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5047#p5047"><![CDATA[
Basicamente mi idea es la de hacer el juego, tal vez no me exprese bien al decir que lo que queria hacer era un game engine, lo que quiero hacer es un juego sencillo, como esos en los que con una bola vas golpeando los bloques y estos van desapareciendo, yo se que lo que necesito es una barra que se mueva, una pelotita y bueno, ya vere como trabajo con las barras que s emantienen estaticas, pero como separo todo es del sistema que controla el juego, es decir el sistema de audio, video, fonts, y como logro que se relacionen entre si??, esa es mi principal duda, lograr una forma lo suficientemente sencilla para que se relacionen estas dos partes<br /><br />carlostex muy interesante tu codigo, basicamente vos lo que haces es dividir el codigo que le va sa dedicar a todo lo que es el sistema SDL, y lo que son los actores en los headers game y esena respectivamente, y a partir de ahi que es lo que haces despues, como los relacionas?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Sab Feb 05, 2011 5:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-02-03T12:22:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5029#p5029</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5029#p5029"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5029#p5029"><![CDATA[
<blockquote><div><cite>.teri escribió:</cite><br />Toma tu tiempo en diseñar la arquitectura de tu motor para ser usada en el juego. El principal objetivo de este motor es evitar que reescribas otra vez el mismo código, o bien adaptarlo sin tomarte mucho tiempo para tu juego en particular.<br />Una regla que me aplico es &quot;la memoria está para aprovecharla, no derrocharla&quot;. El ejemplo que te ha dado carlostex es muy claro: cargas una sola vez una imagen, asígnala ahora a cuanto personajes quieras. Puedes tener una imagen guay de 32 bits de alta resolución para un tipo enemigo, pero no vas a cargar esa misma imagen una y otra vez para cada enemigo que acabará con la vida de tu héroe, ¿verdad? Y por más que la ram sea más abundante y relativamente barata, quiere decir que podrás hacer más cosas gracias a la ram, no que la desperdicies. Con la misma memoria ocupada por un recurso repetidas veces, se puede dedicar para cargar sonidos, o texto, o lo que sea.<br /></div></blockquote><br /><br />Ojo, es totalmente cierto esto, pero también depende todo de tus aspiraciones: <br />- si lo que te interesa es hacer más la parte del motor y subsistemas inferiores, creo que es recomendable hacer lo que te recomienda teri.<br />- Si tu proyecto no es demasiado grande y te interesa más hacer lo que es el juego en sí, te recomendaría que primero lo tengas funcionando, y ya luego te preocupes de optimizar las cosas que tengan que optimizarse<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Feb 03, 2011 12:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-02-03T11:37:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5028#p5028</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5028#p5028"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5028#p5028"><![CDATA[
Toma tu tiempo en diseñar la arquitectura de tu motor para ser usada en el juego. El principal objetivo de este motor es evitar que reescribas otra vez el mismo código, o bien adaptarlo sin tomarte mucho tiempo para tu juego en particular.<br />Una regla que me aplico es &quot;la memoria está para aprovecharla, no derrocharla&quot;. El ejemplo que te ha dado carlostex es muy claro: cargas una sola vez una imagen, asígnala ahora a cuanto personajes quieras. Puedes tener una imagen guay de 32 bits de alta resolución para un tipo enemigo, pero no vas a cargar esa misma imagen una y otra vez para cada enemigo que acabará con la vida de tu héroe, ¿verdad? Y por más que la ram sea más abundante y relativamente barata, quiere decir que podrás hacer más cosas gracias a la ram, no que la desperdicies. Con la misma memoria ocupada por un recurso repetidas veces, se puede dedicar para cargar sonidos, o texto, o lo que sea.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Jue Feb 03, 2011 11:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-02-03T07:59:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5027#p5027</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5027#p5027"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5027#p5027"><![CDATA[
ok, pues este es el comando(de svn):<br /><dl class="codebox"><dt>Code: </dt><dd><code>svn co https://tank-war.svn.sourceforge.net/svnroot/tank-war tank-war</code></dd></dl><br /><br />Por una parte es sencillo, por que el código no es excesivo, pero tampoco esta muy comentado, solo comente las partes en las que creí que despues se me podrían olvidar o revolver. Sin embargo podrás notar la forma en la que están las clases y también como distribuí los archivos. Lo que buscas está en el directorio include y src.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Feb 03, 2011 7:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-02-03T03:16:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5023#p5023</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5023#p5023"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5023#p5023"><![CDATA[
dale, me encantaria,. particularmente estaba pensando algun diseño lo suficientemente comodo como para poder utilizar las funciones de los sistemas de graficos, audio, etc en el momento en que necesite<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Jue Feb 03, 2011 3:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-02-02T01:26:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5001#p5001</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5001#p5001"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=5001#p5001"><![CDATA[
Hola, en términos particulares la arquitectura que tendrá tu programa depende mucho de tus conocimientos y habilidades, mas que nada la experiencia, también como dicen de lo que tu quieras hacer, en forma general te podría dar una orientación, es decir la forma en la que se constituyen las capas superiores de tu juego.<br />lo que dices esta bien, lo de los subsistemas es buena idea, una cosa que acostumbro hacer es crear clases altamente especializadas, es decir, tengo una clase actor, una clase actor pues es básicamente la información de un actor, posición, vidas, puntos,etc. He visto en algunos códigos que en el actor le ponen la imagen que debe representar, en lo personal no lo hago, por que considero que eso debe ser parte de un sistema de gráficos, lo que pongo en el actor es solo la referencia y se podría pensar que es lo mismo, pues en esos códigos que he visto también usan apuntadores para la imagen, la diferencia está en quien se hace cargo de procesar el gráfico, si lo hace el actor, es probable que por cada actor que tengas que cargar un gráfico, y si hay dos actores iguales ya duplicaste un gráfico, mientras que con el sistema de gráficos independiente hago que se cargue una imagen y la asocio a un actor, así cuando el actor se dibuja solo toma la referencia. Esto te lo digo por que quisas vega otra persona y te diga que no le gusta así, y lo haga de otra forma, pero al final el juego funciona. Entonces mucho depende de tus gustos y con lo que te sientas mas cómodo. Una forma de hacerte mas la idea de como poder crear tu arquitectura es viendo otros códigos, tanto de programadores noveles, como de juegos mas profesionales. Si lo deseas te puedo dar el link para descargar lo que tengo hecho y te des unas ideas de como lo podrías hacer. Esta en C++<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Feb 02, 2011 1:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-02-01T18:06:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=4996#p4996</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=4996#p4996"/>
<title type="html"><![CDATA[Re: Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=4996#p4996"><![CDATA[
lamentablemente nadie podrá ayudarte, ya que el diseño de las distintas partes que llevara tu juego solo podrás hacerlo tu, ya que tu escribes el código según tus necesidades. Lo que podrías hacer seria ir escribiendo en papel esbozos de ideas para tu juego y a partir de eso ir dividiendo los problemas a nivel de programación que te podría ir presentando tu juego y a partir de eso escribir el código que deseas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mar Feb 01, 2011 6:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-31T17:57:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=4977#p4977</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=4977#p4977"/>
<title type="html"><![CDATA[Programacion orientada a objetos par juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1036&amp;p=4977#p4977"><![CDATA[
Basicamente como ya habia comentado en otros threads estoy por comenzar un nuevo juego, por lo que me interesaria que me den alguna sugerencia sobre el diseño orientado a objetos que deberia adoptar, por ejemplo tengo la idea de generar subsistemas de audio, video, eventos,etc. si me pudiesen dar alguna sugerencia o comentario sobre como diseñarlo me encantaria<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Lun Ene 31, 2011 5:57 pm</p><hr />
]]></content>
</entry>
</feed>