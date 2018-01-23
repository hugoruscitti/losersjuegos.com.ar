<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1071" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-11T01:00:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1071</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-03-11T01:00:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5202#p5202</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5202#p5202"/>
<title type="html"><![CDATA[Re: Rotar grupos de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5202#p5202"><![CDATA[
Estas usando opengl para gráficos 2D o 3D? ya me quedó la duda, si fuera 2D, no es necesario que uses opengl hay bibliotecas mas pequeñas para hacer esas rotaciones.lo haría mas rápido<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Mar 11, 2011 1:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2011-03-10T17:23:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5200#p5200</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5200#p5200"/>
<title type="html"><![CDATA[Re: Rotar grupos de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5200#p5200"><![CDATA[
Si, estuve viendo eso de las matrices de rotación. De hecho no me habia dado cuenta pero practicamente ya tengo hecho. Con sdl + opengl solamente tengo que rotar ese grupo de sprites, y luego cargar la matriz identidad (para que no rote lo demás). Y si quiero que rote con respecto a uno de los sprites, hago un gltranslate al punto donde quiero rotar y listo.<br />Ahora puedo dominar el mundo conocido. Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Jue Mar 10, 2011 5:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-03-10T04:27:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5199#p5199</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5199#p5199"/>
<title type="html"><![CDATA[Re: Rotar grupos de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5199#p5199"><![CDATA[
bueno, lo primero que tienes que hacer es rotar un sprite con respecto a un punto de referencia, hecho esto cuando quieras rotar un grupo solo rotas cada uno con respecto al punto que quieres y verás que todos rotan como si fuera un grupo, polares o no, <br />la idea es la misma, eso es solo la cuestión de implementación, lo puedes hacer con matrices de rotación.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Mar 10, 2011 4:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2011-03-10T00:26:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5198#p5198</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5198#p5198"/>
<title type="html"><![CDATA[Rotar grupos de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1071&amp;p=5198#p5198"><![CDATA[
Una duda muy dudosa se me planteó. Resulta que quiero rotar un grupo de sprites todos juntos, como si fueran una sola cosa. No se si me explayo bien. Por ejemplo, en un grupo de sprites horizontales, que roten tomando como eje uno del grupo. Los sprites pueden o no rotar sobre su eje.<br />Como debería hacer, tengo que usar coordenadas polares?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Jue Mar 10, 2011 12:26 am</p><hr />
]]></content>
</entry>
</feed>