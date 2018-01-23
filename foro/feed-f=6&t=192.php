<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=192" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-11-07T02:22:54+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=192</id>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-11-07T02:22:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=192&amp;p=673#p673</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=192&amp;p=673#p673"/>
<title type="html"><![CDATA[SDL y doublebuffer]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=192&amp;p=673#p673"><![CDATA[
En SDL cuando seteas un modo de video se devuelve una referencia a la pantalla. Normalmente la guardamos en una variable de tipo SDL_Surface.<br /><br />Luego cualquier cosa que queramos que aparezca en pantalla la dibujaremos en dicha superficie, y al momento de llamar a SDL_Flip se intercambirán las superficies, y esto es algo que SDL realiza internamente, no debemos preocuparmos por esto. Así que no es necesario generar una segunda superficie para realizar este proceso.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Mié Nov 07, 2007 2:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2007-11-06T22:20:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=192&amp;p=672#p672</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=192&amp;p=672#p672"/>
<title type="html"><![CDATA[SDL y doublebuffer]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=192&amp;p=672#p672"><![CDATA[
Hola<br /><br />Acabo de toparme con ésta guía y me ha surgido una duda:<br /><!-- m --><a class="postlink" href="http://www.aprendeaprogramar.com/mod/resource/view.php?id=188">http://www.aprendeaprogramar.com/mod/re ... php?id=188</a><!-- m --><br /><br />En ella crea una superficie adicional para usar el double buffer, en la que va dibujando y al final vuelca ésta superficie en la pantalla.<br /><br />Yo pensaba que ésto del double buffer lo hacía automático SDL cuando en SDL_SetVideoMode pones SDL_DOUBLEBUF ¿estoy equivocado?<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Mar Nov 06, 2007 10:20 pm</p><hr />
]]></content>
</entry>
</feed>