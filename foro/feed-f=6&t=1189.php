<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1189" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-24T16:20:14+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1189</id>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-06-24T16:20:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1189&amp;p=5685#p5685</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1189&amp;p=5685#p5685"/>
<title type="html"><![CDATA[Re: Como integrar PYSFML con PYMUNK?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1189&amp;p=5685#p5685"><![CDATA[
Ten en cuenta que los gráficos y los sonidos representan todo el estado interno de la aplicación. Todo juego que implementa un motor de físicas (aunque sea rudimentario o básico) el que manda es el motor de físicas. Tu debes dibujar en pantalla que es lo que pasa.<br />En cada ciclo de juego obtienes la posición del cuerpo del objeto y con esa posición pones la posición del sprite de tu objeto. Bastante recomendable que integres el sprite con el cuerpo en una clase y hagas un método para que lo actualice con cada ciclo. Lo mismo pasa con las rotaciones, pero deberás pasar de radianes a grados. Lo puedes implementar en el mismo método para actualizar la posición del sprite.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Vie Jun 24, 2011 4:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jehovany]]></name></author>
<updated>2011-06-22T21:18:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1189&amp;p=5678#p5678</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1189&amp;p=5678#p5678"/>
<title type="html"><![CDATA[Como integrar PYSFML con PYMUNK?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1189&amp;p=5678#p5678"><![CDATA[
Saludos, me gustaria conseguir alguna documentacion o tutorial que me pueda ayudar a integrar PYSFML con la libreria fisica PYMUNK, muchas gracias de ante mano...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2382">jehovany</a> — Mié Jun 22, 2011 9:18 pm</p><hr />
]]></content>
</entry>
</feed>