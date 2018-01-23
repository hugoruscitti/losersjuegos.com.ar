<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=466" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-06T15:58:02+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=466</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-02-06T15:58:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=466&amp;p=2023#p2023</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=466&amp;p=2023#p2023"/>
<title type="html"><![CDATA[Error de fragmentacion en funcion de SDL convirtiendo format]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=466&amp;p=2023#p2023"><![CDATA[
si, era ese el problema; no veia el problema por estar en la funcion que menos esperaba que tuviera que ver con el problema y al usar el debuger no ponia un punto de ruptura en dicha funcion, sino los ponia en las funciones que veia más probable que estuvieran relacionadas con el error, solo cuando el punto de ruptura lo puse en main y ejecute todo con &quot;step&quot; paso a paso entrando en todas las funciones pude ver el problema.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Vie Feb 06, 2009 3:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-02-05T02:13:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=466&amp;p=2014#p2014</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=466&amp;p=2014#p2014"/>
<title type="html"><![CDATA[Error de fragmentacion en funcion de SDL convirtiendo format]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=466&amp;p=2014#p2014"><![CDATA[
La función SDL_DisplayFormat se tiene que llamar luego<br />de iniciar el modo de video. ¿lo has hecho así?.<br /><br />Es muy importante iniciar el modo de video antes de convertir<br />las superficies, si lo haces al revés SDL no sabrá cómo<br />optimizar la imagen y eso produce un segmentation fault<br />seguro.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Feb 05, 2009 2:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-02-05T01:43:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=466&amp;p=2013#p2013</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=466&amp;p=2013#p2013"/>
<title type="html"><![CDATA[Error de fragmentacion en funcion de SDL convirtiendo format]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=466&amp;p=2013#p2013"><![CDATA[
Hola, he echo una funcion que se encarga de cargar una imagen, convertir el formato de pixel al de la pantalla y poner el color FF00FF como transparente, el problema es que la funcion que realiza la conversion me da un error de fragmentacion, si pongo dicha funcion comentada (la conversion de formato se realzia cada vez que copie la imagen a la superficie de pantalla, consumiendo más recurso de procesamiento) no me da error de fragmentacion pero el color FF00FF aparece en la ventana en vez de no aparecer.<br /><br />La funcion con la funcion de SDL comentada es:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * cargar_imagen&#40;const char *nombre_archivo&#41;&#123;<br />   SDL_Surface *r, *t;<br />   t= IMG_Load&#40;nombre_archivo&#41;;<br />   if&#40;t != NULL&#41;&#123;<br />      /*r= SDL_DisplayFormat&#40;t&#41;;<br />      SDL_FreeSurface&#40;t&#41;;*/<br />      SDL_SetColorKey&#40;t, SDL_SRCCOLORKEY|SDL_RLEACCEL, SDL_MapRGB&#40;t-&gt;format, 255, 0, 255&#41;&#41;;<br />      r= t;<br />   &#125;else&#123;<br />      r= NULL;<br />   &#125;<br />   return r;<br />&#125;</code></dd></dl><br /><br />Y sin la funcion SDL comentada:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * cargar_imagen&#40;const char *nombre_archivo&#41;&#123;<br />   SDL_Surface *r, *t;<br />   t= IMG_Load&#40;nombre_archivo&#41;;<br />   if&#40;t != NULL&#41;&#123;<br />      r= SDL_DisplayFormat&#40;t&#41;;<br />      SDL_FreeSurface&#40;t&#41;;<br />      SDL_SetColorKey&#40;r, SDL_SRCCOLORKEY|SDL_RLEACCEL, SDL_MapRGB&#40;r-&gt;format, 255, 0, 255&#41;&#41;;<br />   &#125;else&#123;<br />      r= NULL;<br />   &#125;<br />   return r;<br />&#125;</code></dd></dl><br /><br />Lo que me extraña es que esta funcion me funcionaba bien en un principio, fue cuando la use en otra funcion cuando me dio un error en otra funcion del programa que no tenia nada que ver con esta, y al solucionar el error en la otra funcion el error se paso a esta. Cuando esta funcion no la usaba en la que ahora la uso, no daba problemas al usarla. He estado pasando el debugger una y otra vez y no entiendo el motivo del fallo. y menos de como funciona y derepente deja de funcionar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Feb 05, 2009 1:43 am</p><hr />
]]></content>
</entry>
</feed>