<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1537" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-08-21T04:33:27+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1537</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-08-21T04:33:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1537&amp;p=7026#p7026</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1537&amp;p=7026#p7026"/>
<title type="html"><![CDATA[Re: Ayuda Proyecto Plataformas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1537&amp;p=7026#p7026"><![CDATA[
Bueno, sobre las colisiones con la parte superior, es un problema de las matemáticas mismas de las colisiones (son &quot;discretas&quot;, no &quot;continuas&quot;)...<br />Intenta con una velocidad mas reducida para el salto... o una distancia superior... en cuanto al problema de las colisiones a los lados, puedes intentar con colision entre rectas... solo sugiero... (no se me dan mucho los juegos de plataformas... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> )<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Ago 21, 2012 4:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d0hk0o]]></name></author>
<updated>2012-08-17T08:26:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1537&amp;p=7022#p7022</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1537&amp;p=7022#p7022"/>
<title type="html"><![CDATA[Ayuda Proyecto Plataformas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1537&amp;p=7022#p7022"><![CDATA[
Hola a todos,<br /><br />estoy intentando armar un videojuego de plataformas, pero tengo un inconveniente que no logro solucionar, he revisado el ejemplo de plataformas que hay acá, pero la técnica usada es otra... me gustaría que le den una revisada si tienen tiempo para que me puedan ayudar. Menciono las características del desarrollo:<br /><br />-Lenguaje C++ librerías SDL, SDL_image.<br />-Los gráficos son placeholders (cuadraditos u_u).<br />-Nivel editado con Tiled.<br />-Tinycpp para los xml.<br />-Lo armé en Windows con el Devcpp.<br /><br />La cuestión es la siguiente:<br />Las colisiones con el mapa son reconocidas en la pantalla inicial del juego, sin embargo cuando hago un scrolling vertical, no sé qué pasa, que lo reconoce pero ya no de manera exacta, acá les dejo el código...<br /><br />La lógica es la siguiente: Game contiene el loop principal, este llama a Nivel y a Hero con sus métodos Update y Render.<br /><!-- m --><a class="postlink" href="http://www.mediafire.com/?5d3464heo9ankff">http://www.mediafire.com/?5d3464heo9ankff</a><!-- m --> (sorry que lo suba así, lo que pasa es que son varios archivos porque incluye la librería tinyxml)<br />Por otro lado, las colisiones por el lado derecho e izquierdo tampoco me reconocen como me gustaría.<br /><br />Sé que si logro solucionar esto, ya estaría en la capacidad de armar un juego decente...<br /><br />Saludos y gracias de antemano...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2403">d0hk0o</a> — Vie Ago 17, 2012 8:26 am</p><hr />
]]></content>
</entry>
</feed>