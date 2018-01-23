<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=880" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-18T12:00:43+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=880</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-18T12:00:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=880&amp;p=4132#p4132</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=880&amp;p=4132#p4132"/>
<title type="html"><![CDATA[Re: Explosiones, ¿ideas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=880&amp;p=4132#p4132"><![CDATA[
yo ya tengo bastante lio con Pilas C++ como para meterme en más cosillas lo siento.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Sep 18, 2010 12:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-18T03:11:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=880&amp;p=4128#p4128</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=880&amp;p=4128#p4128"/>
<title type="html"><![CDATA[Explosiones, ¿ideas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=880&amp;p=4128#p4128"><![CDATA[
Buenas, armé un ejemplo llamado explosiones.py que emite<br />explosiones muy sencillas como actores:<br /><br /><!-- m --><a class="postlink" href="http://www.youtube.com/watch?v=WoplJPjFZyY">http://www.youtube.com/watch?v=WoplJPjFZyY</a><!-- m --><br /><br />Así que se me ocurrió preguntar, ¿alguien se anima a generar<br />sprites de explosiones con algún generador para agregarle<br />a pilas?.<br /><br />Ví que hay varios programas generadores de explosiones disponibles (incluso<br />creo que blender se podría usar para generarlas), pero no puedo dedicarle<br />mucho tiempo a eso.<br /><br />¿Alguien se ofrece de voluntario?.<br /><br />PD: para los curiosos del código aquí está el ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pilas<br /><br />imagen_explosion = pilas.imagenes.Grilla(&quot;explosion.png&quot;, 7)<br /><br />def crear_explosion(sender, x, y, button, signal):<br />    explosion = pilas.actores.Animacion(imagen_explosion)<br />    explosion.x = x<br />    explosion.y = y<br />    explosion.escala = 2<br /><br />pilas.eventos.click_de_mouse.connect(crear_explosion)<br />pilas.ejecutar()<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Sep 18, 2010 3:11 am</p><hr />
]]></content>
</entry>
</feed>