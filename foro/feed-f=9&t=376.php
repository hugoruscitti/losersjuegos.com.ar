<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=376" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-09-15T06:07:12+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=376</id>
<entry>
<author><name><![CDATA[GsusKrist]]></name></author>
<updated>2008-09-15T06:07:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=376&amp;p=1660#p1660</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=376&amp;p=1660#p1660"/>
<title type="html"><![CDATA[Como puedo cambiar el icono de la ventana en pygame?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=376&amp;p=1660#p1660"><![CDATA[
Gracias brother me parece cheverísimo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1973">GsusKrist</a> — Lun Sep 15, 2008 6:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-09-13T23:35:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=376&amp;p=1656#p1656</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=376&amp;p=1656#p1656"/>
<title type="html"><![CDATA[Como puedo cambiar el icono de la ventana en pygame?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=376&amp;p=1656#p1656"><![CDATA[
Sí, tienes que generar un objeto surface a partir del ícono (por<br />ejemplo un archivo .png) y luego llamar a la siguiente función:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>pygame.display.set_icon</code></dd></dl><br /><br />por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>icon = pygame.image.load&#40;&quot;game.png&quot;&#41;<br />pygame.display.set_icon&#40;icon&#41;<br /></code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Sep 13, 2008 11:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GsusKrist]]></name></author>
<updated>2008-09-13T23:23:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=376&amp;p=1654#p1654</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=376&amp;p=1654#p1654"/>
<title type="html"><![CDATA[Como puedo cambiar el icono de la ventana en pygame?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=376&amp;p=1654#p1654"><![CDATA[
Simplemente me gustaria ke mi juego no tubiese el miso icono en el vorde superior izquierdo de la ventana que traen todos los videojuegos hechos en pygame, será que existe alguna forma de cambiarlo??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1973">GsusKrist</a> — Sab Sep 13, 2008 11:23 pm</p><hr />
]]></content>
</entry>
</feed>