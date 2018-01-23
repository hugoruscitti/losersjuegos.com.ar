<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1145" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-12T22:45:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1145</id>
<entry>
<author><name><![CDATA[IrvingProg]]></name></author>
<updated>2011-05-12T22:45:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1145&amp;p=5523#p5523</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1145&amp;p=5523#p5523"/>
<title type="html"><![CDATA[Re: screen.blit pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1145&amp;p=5523#p5523"><![CDATA[
<blockquote><div><cite>IrvingProg escribió:</cite><br />Hola.<br /><br />Hace poco que realice un juego para la PSP en Lenguaje de programación LUA un lenguaje bastante sencillo, el juego me parece bastante entretenido, y como no todos cuentan con una de estas consolas he decidido portarlo a la PC, por ello he optado por Python + Pygame desde hace un tiempo lo he estado mirando pero no he hecho nada concreto.<br /><br />Ahora mismo empiezo a portar el juego y estoy haciendo unas pruebas en el interprete interactivo para después directamente pasarlo a archivos.<br /><br />Tengo problemas al blitear imágenes en pantalla, empiezo haciendo esto:<br /><pre class="prettyprint">import pygame<br /><br />pygame.display.set_mode&#40;&#40;640,480&#41;&#41;<br />personaje = pygame.image.load&#40;/&quot;home/irving/image.png&quot;&#41;<br />screen.blit&#40;personaje,&#40;10,10&#41;&#41;</pre><br /><br />Es todo, pero hasta donde logro ver <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> no aparece nada en pantalla, mas que la ventana previamente creada. Espero me puedan orientar un poco, que el juego es muy sencillo y me parece portarlo en poco tiempo.<br /><br />Saludos<br /></div></blockquote><br /><br /><span style="font-weight: bold">Solucionado:</span> Me parece que hice un post algo inútil :/ ya encontré el error, me falto poner la linea:<br /><br /><pre class="prettyprint">pygame.display.update&#40;&#41;</pre><br /><br />Ya sabia de esto, pero pensé que en el interprete interactivo no se usaba. Igual a alguien que se encuentre en la situación como yo le sirva <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2369">IrvingProg</a> — Jue May 12, 2011 10:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[IrvingProg]]></name></author>
<updated>2011-05-12T22:40:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1145&amp;p=5522#p5522</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1145&amp;p=5522#p5522"/>
<title type="html"><![CDATA[screen.blit pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1145&amp;p=5522#p5522"><![CDATA[
Hola.<br /><br />Hace poco que realice un juego para la PSP en Lenguaje de programación LUA un lenguaje bastante sencillo, el juego me parece bastante entretenido, y como no todos cuentan con una de estas consolas he decidido portarlo a la PC, por ello he optado por Python + Pygame desde hace un tiempo lo he estado mirando pero no he hecho nada concreto.<br /><br />Ahora mismo empiezo a portar el juego y estoy haciendo unas pruebas en el interprete interactivo para después directamente pasarlo a archivos.<br /><br />Tengo problemas al blitear imágenes en pantalla, empiezo haciendo esto:<br /><pre class="prettyprint">import pygame<br /><br />pygame.display.set_mode&#40;&#40;640,480&#41;&#41;<br />personaje = pygame.image.load&#40;/&quot;home/irving/image.png&quot;&#41;<br />screen.blit&#40;personaje,&#40;10,10&#41;&#41;</pre><br /><br />Es todo, pero hasta donde logro ver <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> no aparece nada en pantalla, mas que la ventana previamente creada. Espero me puedan orientar un poco, que el juego es muy sencillo y me parece portarlo en poco tiempo.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2369">IrvingProg</a> — Jue May 12, 2011 10:40 pm</p><hr />
]]></content>
</entry>
</feed>