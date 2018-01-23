<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=3044" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-12-18T02:30:44+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=3044</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-12-18T02:30:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9311#p9311</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9311#p9311"/>
<title type="html"><![CDATA[Re: Ayuda con Inteligencia artificial]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9311#p9311"><![CDATA[
Hola y bienvenida!<br /><br />Veras, el tema es un poco complicado como para que alguien lo explique en un post. ¿Sabes que es una maquina(?) de estados? Bueno, viene a ser algo así como los estados en los que se encuentra un autómata, y a partir de ellos, a cuales otros estados puede acceder. Para explicarlo más fácil, yo ahora mismo estoy sentado en mi silla; se puede decir que estoy en un estado determinado que se llama &quot;sentado&quot; ¿A que otro estado puedo acceder desde mi estado actual? Bueno, puedo acceder solamente a uno de dos: &quot;escribir en la portátil&quot; o ponerme &quot;de pie&quot;. Sí me pusiera de pie, podría acceder a otros estados como &quot;caminar&quot;, &quot;saltar&quot; y nuevamente &quot;sentado&quot;. ¿Cómo se consigue que un autómata pase de un estado a otro de forma lógica y sin saltarse un estado? Con <a href="https://www.youtube.com/watch?v=DdCoaWzLw2g" class="postlink">arboles binarios</a>. De esta forma, evitaras que tu autómata pase de &quot;escribir en la portátil&quot; a &quot;correr&quot;, que es un cambio de estado ilógico.<br /><br />Ahora, el problema que describes se puede afrontar de esta manera, con una maquina de estado para los actores/sprites/enemigos involucrados. Escribes una maquina de estado raíz dentro de la clase del actor, y enlazas esa maquina de estado con otras dos o tres o las que necesites por medio de una estructura de árbol binario. La lógica de la IA, supongo yo, iría dentro de cada maquina de estado haciendo que el actor se comporte de forma diferente cuando la maquina de estado cambie.<br /><br />Por supuesto, para que el autómata cambie de comportamiento por medio de su maquina de estados, es necesario que pueda comprobar ciertas condiciones externas a él (de otra manera ¿Cómo cambiaría de estado?). Si el actor no esta en alerta, que camine de un lado al otro (aquí tendrás que darle la posibilidad de &quot;decidir&quot; a donde &quot;quiere&quot; ir que seguido, se mueva hasta el lugar que el actor &quot;desea&quot;), y si el actor mientras camina o esta decidiendo dónde moverse, &quot;ve&quot; al jugador, lo persiga y le dispare. Por supuesto esto ya es un tema algo más complicado. Posiblemente el modulo <a href="http://code.google.com/p/aima-python/wiki/ReadMe" class="postlink">aima-python</a> (por si estas implementando el juego en Python) te ayude a evitar reinventar la rueda, pero en lo personal te recomiendo que estudies algo de álgebra y te familiarices con el tema.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Dic 18, 2013 2:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-14T21:26:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9308#p9308</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9308#p9308"/>
<title type="html"><![CDATA[Ayuda con Inteligencia artificial]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9308#p9308"><![CDATA[
Hola, estoy intentando hacer una inteligencia artificial para enemigos RPG que cuando vean al personaje principal disparen, pero cuando no lo hagan caminen de lado a lado.<br />El problema es que no encontre ninguna forma de hacerlo ni nada.<br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Jue Nov 14, 2013 9:26 pm</p><hr />
]]></content>
</entry>
</feed>