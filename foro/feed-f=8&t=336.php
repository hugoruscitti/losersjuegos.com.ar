<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=336" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-09-04T14:43:41+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=336</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-09-04T14:43:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1633#p1633</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1633#p1633"/>
<title type="html"><![CDATA[Pygame - Movimiento de imágenes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1633#p1633"><![CDATA[
<blockquote><div><cite>yasser_001200 escribió:</cite><br />Cuando hago un proyecto, para dar la salida le pongo: sys.exit() pero no sale haga lo que haga. Para que salga debo ponerle quit(). Cómo hago para que me salga con sys.exit.<br /><br />Aclaro que al principio pongo los import correspondientes:<br />import pygame,sys<br /></div></blockquote><br /><br />Así como lo indicas:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import sys<br />sys.exit&#40;0&#41;</code></dd></dl><br /><br />no sé por qué no te funciona, ¿has indicado el parámetro<br />numérico 0 o 1 a la función &quot;exit&quot;?.<br /><br />PD: sería bueno que generes un post nuevo cada vez que te surge<br />      una consulta diferente, así es mas fácil explorar el foro y<br />      consultarlo para los que son nuevos.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Sep 04, 2008 2:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2008-09-03T19:04:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1631#p1631</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1631#p1631"/>
<title type="html"><![CDATA[Pygame - Movimiento de imágenes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1631#p1631"><![CDATA[
Cuando hago un proyecto, para dar la salida le pongo: sys.exit() pero no sale haga lo que haga. Para que salga debo ponerle quit(). Cómo hago para que me salga con sys.exit.<br /><br />Aclaro que al principio pongo los import correspondientes:<br />import pygame,sys<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mié Sep 03, 2008 7:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-06-11T17:51:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1477#p1477</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1477#p1477"/>
<title type="html"><![CDATA[Re: Pygame - Movimiento de imágenes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1477#p1477"><![CDATA[
<blockquote><div><cite>Necrozard escribió:</cite><br />Simplemente presiona la tecla hacia abajo para mover la imagen y me hace un retraso no se porque [...]<br /></div></blockquote><br /><br />Lo que necesitas es limpiar la superficie de pantalla antes<br />de re-imprimir el texto en su nueva posición. Hay una explicación<br />detallada de esto en el artículo de introducción a pygame:<br /><br />    <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/pygame_intro/pygame_intro.php">http://www.losersjuegos.com.ar/referenc ... _intro.php</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Jun 11, 2008 5:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Necrozard]]></name></author>
<updated>2008-06-11T17:05:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1476#p1476</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1476#p1476"/>
<title type="html"><![CDATA[Pygame - Movimiento de imágenes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=336&amp;p=1476#p1476"><![CDATA[
Hola a todos primero! Soy Federico Pintaluba, A.K.A Necrozard, soy de Uruguay, Soriano y me gusta mucho programar videojuegos, sobre todo en Pygame. Bueno, vamos al punto:<br /><br />Tengo un problema con las imagenes en pygame, no creo que sera un problema, sino que he &quot;codeado&quot; mal, les dejo unas imagenes para que vean de que error hablo.<br /><br /><img src="http://img74.imageshack.us/img74/1743/58979706qx2.png" alt="Imagen" /><br /><br />Aquí simplemente cargo una imagen y la muestro por pantalla, el tema es cuando agrego los comandos de teclas para moverla:<br /><br /><img src="http://img65.imageshack.us/img65/2605/18523900nk8.png" alt="Imagen" /><br /><br />Simplemente presiona la tecla hacia abajo para mover la imagen y me hace un retraso no se porque :S, por las dudas, les dejo el codigo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame.locals import *<br />from sys import exit<br /><br />screen = pygame.display.set_mode&#40;&#40;640,480&#41;,0,32&#41;<br />pygame.display.set_caption&#40;&quot;Incializar Pygame&quot;&#41;<br /><br />imagen = pygame.image.load&#40;&quot;img.png&quot;&#41;.convert_alpha&#40;&#41;<br /><br />dy=-50<br /><br />while True:<br />   <br />   for event in pygame.event.get&#40;&#41;:<br />      if event.type == QUIT:<br />         exit&#40;&#41;<br />   <br />   teclas = pygame.key.get_pressed&#40;&#41;<br />   <br />   if teclas&#91;K_UP&#93;:<br />      dy=dy-1<br />      <br />   if teclas&#91;K_DOWN&#93;:<br />      dy=dy+1<br />      <br />   screen.blit&#40;imagen,&#40;110,dy&#41;&#41;<br />   pygame.display.update&#40;&#41;</code></dd></dl><br /><br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1944">Necrozard</a> — Mié Jun 11, 2008 5:05 pm</p><hr />
]]></content>
</entry>
</feed>