<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1053" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-18T00:23:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1053</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-02-18T00:23:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5111#p5111</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5111#p5111"/>
<title type="html"><![CDATA[Re: pasar una variable a TTF_RenderText_Blended]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5111#p5111"><![CDATA[
Muchas gracias chicos, con esto doy por finalizado mi primer juego con SDL. <br />Gracias de nuevo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Vie Feb 18, 2011 12:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-02-17T03:47:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5107#p5107</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5107#p5107"/>
<title type="html"><![CDATA[Re: pasar una variable a TTF_RenderText_Blended]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5107#p5107"><![CDATA[
Procura brindar más información para que sea más sencillo poder ayudarte.<br /><br />Las funciones de SDL_ttf que esperan texto para dibujar, esperan una variable de tipo <span style="font-weight: bold">const char*</span>.<br />Si la variable en la que tienes la puntuación es tipo <span style="font-weight: bold">int</span>, puedes usar la función <span style="font-weight: bold">sprintf</span> dentro de la biblioteca <span style="font-weight: bold">stdio</span>de C como mencionó carleto, algo similar a esto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>...<br />int puntos = 10;<br />char bufer&#91; 10 &#93;;<br />sprintf( bufer, &quot;%d&quot;, puntos );<br /><br />SDL_Surface* s = TTF_RenderText_Blended( fuente, bufer, color );<br />...<br /></code></dd></dl><br />Esto te sirve tanto en C como en C++, salvo que desees usar variables de tipo std::string para los textos.<br /><br />También, recuerda checar antes la sección de referencia de la web, sobretodo los <a href="http://www.losersjuegos.com.ar/referencia/ejemplos" class="postlink">ejemplos</a>.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Jue Feb 17, 2011 3:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2011-02-15T20:33:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5102#p5102</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5102#p5102"/>
<title type="html"><![CDATA[Re: pasar una variable a TTF_RenderText_Blended]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5102#p5102"><![CDATA[
Hola<br /><br />Hace tiempo que no uso SDL, pero según recuerdo esa función espera que le pases una cadena con el texto a renderizar, y tu la puntuación la tendrás en una variable numérica, un int por ejemplo.<br /><br />Lo que tienes que hacer es convertir el número a cadena, con sprintf lo hacía yo:<br /><!-- m --><a class="postlink" href="http://c.conclase.net/librerias/?ansifun=sprintf">http://c.conclase.net/librerias/?ansifun=sprintf</a><!-- m --><br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Mar Feb 15, 2011 8:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-02-15T08:03:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5101#p5101</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5101#p5101"/>
<title type="html"><![CDATA[pasar una variable a TTF_RenderText_Blended]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1053&amp;p=5101#p5101"><![CDATA[
Buenas, queria saber que de manera puedo pasar una variable con la puntuacion de mi juego a la funcion TTF_RenderText_Blended, he probado con varios tipos de variables y no hay manera. Alguna idea? <br /><br />muchas gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mar Feb 15, 2011 8:03 am</p><hr />
]]></content>
</entry>
</feed>