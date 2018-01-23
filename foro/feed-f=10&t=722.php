<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=722" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-05-13T05:26:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=722</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-05-13T05:26:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3354#p3354</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3354#p3354"/>
<title type="html"><![CDATA[Solicito recomendaciones desarrollo software multimedia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3354#p3354"><![CDATA[
Gracias por las respuestas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />No había comentado algunos detalles :p. El sistema corre en Linux, está enfocado a un sistema de sinfonola/rockola con monederos, estoy evaluando lo de la GUI para ahorrar una buena parte del trabajo de rediseño, ya que la biblioteca GUI actual en si misma (basada en SDL) es bastante trabajo :p.<br /><br />Aunque valdría la pena darle un vistazo a C#, por el momento lo hago de lado. La idea de Qt me atrae más, voy a tratar de hacer algunas pruebas. ¿Saben si las aplicaciones hechas con Qt corren con solo el servidor X? ¿o es necesario un entorno de escritorio?<br /><br />La otra opción que venía manejando es C++ con SDL/OpenGL y CEGUI para los widgets.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Jue May 13, 2010 5:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-05-12T22:41:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3353#p3353</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3353#p3353"/>
<title type="html"><![CDATA[Solicito recomendaciones desarrollo software multimedia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3353#p3353"><![CDATA[
buenas Geo, la solucion depende de un pequeño par de detalles:<br /><br />- supongo que buscas multiplataformidad (esto existe??), pero en el caso de que solo te intersase windows, c# con los winforms es una de las mejores soluciones para interfaces<br /><br />- si no, yo seguiría la recomendacion de david, ya que he leido que widgets/C++ es solo apto para masoquistas<br /><br />un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié May 12, 2010 10:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-05-12T20:46:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3352#p3352</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3352#p3352"/>
<title type="html"><![CDATA[Solicito recomendaciones desarrollo software multimedia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3352#p3352"><![CDATA[
Si quieres hacer una GUI y además ponerle alguna sección con animación como la que suelen tener los reproductores, puedes usar Qt + OpenGL.<br />Sé de varios proyectos que lo usan, pero solamente he modificado una pequeña parte del código que se centraba en OpenGL. Así que tampoco sé si es una buena opción.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié May 12, 2010 8:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-05-09T17:18:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3349#p3349</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3349#p3349"/>
<title type="html"><![CDATA[Solicito recomendaciones desarrollo software multimedia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=722&amp;p=3349#p3349"><![CDATA[
Qué tal, en últimas fechas estoy trabajando en un programa de administración de una rockola/sinfonola digital, por el momento funciona con SDL y mplayer como backend para la reproducción. La interfaz se basa en una GUI propia.<br /><br />Estoy pensando en rediseñarla, y acudo a uds. para pedirles si se les ocurre alguna idea de qué herramientas utilizar para ello <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />. Me refiero a si les parecería adecuado trabajar con otro lenguaje (está en C, pienso pasar a POO con C++), alguna biblioteca GUI que pudiera usarse o también para ir agregando efectos de animación <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />¿Se les ocurre algo?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom May 09, 2010 5:18 pm</p><hr />
]]></content>
</entry>
</feed>