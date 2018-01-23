<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=285" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-11T14:54:22+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=285</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-11T14:54:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=285&amp;p=1118#p1118</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=285&amp;p=1118#p1118"/>
<title type="html"><![CDATA[duda sobre una funcion de SDL_ttf: TTF_Font * TTF_OpenFon...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=285&amp;p=1118#p1118"><![CDATA[
Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Vie Abr 11, 2008 2:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-04-11T00:29:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=285&amp;p=1115#p1115</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=285&amp;p=1115#p1115"/>
<title type="html"><![CDATA[duda sobre una funcion de SDL_ttf: TTF_Font * TTF_OpenFon...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=285&amp;p=1115#p1115"><![CDATA[
no, el concepto esta mal.<br /><br />lo que indica el segundo parametro es el tamaño de la fuente (en provinciano Hace mas chica o mas grande la fuente)<br /><br />ej:<br /><dl class="codebox"><dt>Code: </dt><dd><code>TTF_Font *<br />unafuente = TTF_OpenFont&#40;&quot;C:/windows/fonts/ariblk.ttf&quot;, 24&#41;;<br /></code></dd></dl><br />cargaria una fuente Arial Black de 24 pts<br /><br /><span style="font-size: 200%; line-height: 116%;"><span style="font-weight: bold">algo asi</span> </span><br /><dl class="codebox"><dt>Code: </dt><dd><code>unafuente = TTF_OpenFont&#40;&quot;C:/windows/fonts/ariblk.ttf&quot;, 12&#41;;<br /></code></dd></dl><br />cargaria una fuente Arial Black de 12 pts<br /><span style="font-weight: bold"><span style="font-size: 100%; line-height: 116%;">algo asi</span></span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Vie Abr 11, 2008 12:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-10T20:02:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=285&amp;p=1113#p1113</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=285&amp;p=1113#p1113"/>
<title type="html"><![CDATA[duda sobre una funcion de SDL_ttf: TTF_Font * TTF_OpenFon...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=285&amp;p=1113#p1113"><![CDATA[
Hola, tengo una duda con un argumento de la funcion de SDL_ttf TTF_Font * TTF_OpenFont(const char *file, int ptsize); y es que segun he leido ptsize, el segundo argumento, es el tamaño de la fuente que se va a cargar, pero ¿el tamaño en numero de caracteres, bytes, kilobytes o en que?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Abr 10, 2008 8:02 pm</p><hr />
]]></content>
</entry>
</feed>