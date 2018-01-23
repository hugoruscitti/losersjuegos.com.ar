<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=72" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-03-26T22:10:47+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=72</id>
<entry>
<author><name><![CDATA[shakaran]]></name></author>
<updated>2007-03-26T22:10:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=72&amp;p=253#p253</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=72&amp;p=253#p253"/>
<title type="html"><![CDATA[Pathfinding]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=72&amp;p=253#p253"><![CDATA[
Hola, primero me presento. Soy un aspirante a ingeniero informatico que esta desarrollando un juego RPG via web en sus ratos libres y que por casualidad (mentira, digamos que por el buen algoritmo de google) encontre referencias sobre pathfinding en su web.<br /><br />Lei alguno articulos y hasta donde mis nociones de segundo de carrera (curso en el que estoy actualmente) me han ayudado a comprender se basa en el algoritmo de Dijkstra para calcular el grafo minimo entre dos nodos.<br /><br />Bueno, despues de leer todo este rollo, mi problema es que tengo un mapa escrito en php y ajax (no es C pero mas o menos lo mismo) y claro estoy viendo que tengo un gran problema que es que para cada celda de posicion con sus costes para F=G+H tengo que hacer una consulta mysql para esa celda, por lo que en un mapa de 120x88 que es mi caso, se harian muchisimas consultas para calcular un solo itinerario (he visto que hay optimizaciones) pero aun asi serian demasiadas consultas que sobrecargarian el servidor y como ya digo para un solo usuario en el juego (hablamos de tener unos 10 o 15 mil en un futuro (weno tal vez sean menos como 200 pero no hay que cerrarse puertas no? XD)).<br /><br />En fin, recurro a ustedes que veo que dominan muy bien C para saber como podria abordar el problema ya que veo que tienen bastante experiencia con este tipo de algortimos.<br /><br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1015">shakaran</a> — Lun Mar 26, 2007 10:10 pm</p><hr />
]]></content>
</entry>
</feed>