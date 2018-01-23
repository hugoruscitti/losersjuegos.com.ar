<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=946" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-30T02:36:48+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=946</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-30T02:36:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4510#p4510</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4510#p4510"/>
<title type="html"><![CDATA[Re: Video del evento conurbania, la presentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4510#p4510"><![CDATA[
<blockquote><div><cite>kaiser escribió:</cite><br />Hola! en lo del videojuego por red estoy trabajando yo ahora mismo, a ver si os lo puedo regalar por Navidad, o mejor si puedo antes, en cuanto encuentre un rato libre. Ya tengo un pequeño &quot;motor&quot; de red que permite transferir datos por turnos entre dos usuarios dentro de la misma red local, será muy fácil adaptarlo para crear unas damas por LAN que creo haber leído algo en redmine de que queríais unas damas para Pilas. El código es muy corto y sencillo por lo que creo que será muy útil para los que se quieran iniciar en la programación por red, utiliza la clase socket de python, y también es muy sencillo de adaptar a cualquier juego por turnos (damas, ajedrez, cartas, parchís, estrategia por turnos, pelea por turnos,...) o juegos que no requieran de una gran transferencia de datos.<br /><br />Un saludo!<br /></div></blockquote><br /><br />Buenisimo Kaiser, me viene super bien una ayuda con el sistema de redes. ¿Pudiste ver algo<br />de twisted?, y estoy investigando bastante sobre esto porque se ajusta a la perfección a pilas:<br /><br />   <!-- m --><a class="postlink" href="http://twistedmatrix.com/documents/current/core/howto/index.html">http://twistedmatrix.com/documents/curr ... index.html</a><!-- m --><br /><br />Ten en cuenta que pilas necesitará contactarse con el sistema de redes por eventos, y eventualmente<br />usando UDP y no TCP...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Nov 30, 2010 2:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-30T02:18:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4509#p4509</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4509#p4509"/>
<title type="html"><![CDATA[Re: Video del evento conurbania, la presentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4509#p4509"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />¿Tendrás en un archivo aparte los actores y sonidos que usas, o ya vienen al descargar el motor? Para que los usemos en nuestras pruebas.<br /></div></blockquote><br /><br />Los actores están en el mismo repositorio de pilas, en la versión de python. Poco a poco voy<br />incorporando mas, el único que deshabilité es el de la tortuga, porque quiero corregir algunas cosas...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Nov 30, 2010 2:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-11-30T01:29:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4507#p4507</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4507#p4507"/>
<title type="html"><![CDATA[Re: Video del evento conurbania, la presentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4507#p4507"><![CDATA[
OK, gracias, eso les puede servir para la versión de python, aunque lo decía para la versión que desarrollo, pilascpp<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Nov 30, 2010 1:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-11-29T15:29:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4505#p4505</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4505#p4505"/>
<title type="html"><![CDATA[Re: Video del evento conurbania, la presentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4505#p4505"><![CDATA[
Hola! en lo del videojuego por red estoy trabajando yo ahora mismo, a ver si os lo puedo regalar por Navidad, o mejor si puedo antes, en cuanto encuentre un rato libre. Ya tengo un pequeño &quot;motor&quot; de red que permite transferir datos por turnos entre dos usuarios dentro de la misma red local, será muy fácil adaptarlo para crear unas damas por LAN que creo haber leído algo en redmine de que queríais unas damas para Pilas. El código es muy corto y sencillo por lo que creo que será muy útil para los que se quieran iniciar en la programación por red, utiliza la clase socket de python, y también es muy sencillo de adaptar a cualquier juego por turnos (damas, ajedrez, cartas, parchís, estrategia por turnos, pelea por turnos,...) o juegos que no requieran de una gran transferencia de datos.<br /><br />Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Lun Nov 29, 2010 3:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-11-29T04:20:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4500#p4500</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4500#p4500"/>
<title type="html"><![CDATA[Re: Video del evento conurbania, la presentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4500#p4500"><![CDATA[
Estupendo, que bueno que las personas se interesaron en pilas. Ya había checado maso menos lo que habías hecho, pero ya veo que avanzaste mucho y eso que eres tu solo, y que paso la persona que te pregunto de C++, ¿si estaba interesado?<br />Cuando comentaste lo del desarrollo de un videojuego por red se me ocurrió un modulo para permitir transmitir datos por red y así hacer juegos multijugador, eso ya quedo anotado para PilasCpp.<br /><br />¿Tendrás en un archivo aparte los actores y sonidos que usas, o ya vienen al descargar el motor? Para que los usemos en nuestras pruebas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Lun Nov 29, 2010 4:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-29T02:56:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4499#p4499</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4499#p4499"/>
<title type="html"><![CDATA[Video del evento conurbania, la presentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=946&amp;p=4499#p4499"><![CDATA[
Saludos, quería comentarles que recién subí el video<br />que filmamos en el evento Conurbania en donde hablé<br />de pilas y el desarrollo de videojuegos:<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doku.php?id=videos">http://www.pilas-engine.com.ar/doku.php?id=videos</a><!-- m --><br /><br />Espero que les guste el video, y se animen a poner<br />comentarios al respecto.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Nov 29, 2010 2:56 am</p><hr />
]]></content>
</entry>
</feed>