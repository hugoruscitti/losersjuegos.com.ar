<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=347" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-07-11T03:34:19+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=347</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2008-07-11T03:34:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=347&amp;p=1538#p1538</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=347&amp;p=1538#p1538"/>
<title type="html"><![CDATA[forma correcta de limpiar la pantalla usando SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=347&amp;p=1538#p1538"><![CDATA[
Me ha entrado una duda sobre como es la forma correcta de limpiar la pantalla usando SDL.<br />He buscado en internet y encontre muchas formas de hacerlo; ninguna me convencio hasta que encontre una forma medio extraña de limpiarla.<br />Segun yo es la mejor opcion para hacerlo (encuanto a consumo y eficiencia)<br />lo hago así:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface* ClrscSdl&#40; SDL_Surface* Screen &#41;&#123;<br />   SDL_Rect PosScr;<br />   PosScr.x = 0;<br />   PosScr.y = 0;<br />   PosScr.w = Screen -&gt; w;<br />   PosScr.h = Screen -&gt; h;<br />   SDL_FillRect&#40; Screen, &amp;PosScr, SDL_MapRGB&#40; Screen -&gt; format, 0, 0, 0&#41; &#41;;<br />   return Screen;<br />&#125;<br /></code></dd></dl><br />Limpia toda la pantalla...<br />Aun que en lo personal no se si es una forma correcta de hacerlo... Habra muchas más que son mejores que esta...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Vie Jul 11, 2008 3:34 am</p><hr />
]]></content>
</entry>
</feed>