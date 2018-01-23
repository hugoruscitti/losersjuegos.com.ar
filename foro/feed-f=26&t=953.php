<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=953" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-12-04T06:36:13+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=953</id>
<entry>
<author><name><![CDATA[lmorillas]]></name></author>
<updated>2010-12-04T06:36:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=953&amp;p=4543#p4543</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=953&amp;p=4543#p4543"/>
<title type="html"><![CDATA[Re: Sacar motores_disponibles() de iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=953&amp;p=4543#p4543"><![CDATA[
Ok. Muy buena pinta. Estoy fuera unos días. A la vuelta lo compruebo. <br /><br />-- lm<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2338">lmorillas</a> — Sab Dic 04, 2010 6:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-04T03:00:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=953&amp;p=4542#p4542</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=953&amp;p=4542#p4542"/>
<title type="html"><![CDATA[Re: Sacar motores_disponibles() de iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=953&amp;p=4542#p4542"><![CDATA[
Es cierto Luis, es una muy buena idea y me puse a trabajar en ello.<br /><br />Subí unos cambios al repositorios para que no sea necesario tener SFML<br />en el equipo y también hice otros cambios que te pueden ser útiles:<br /><br />- modifiqué la función iniciar para que seleccione pygame irectamente<br />si sfml no está disponible.<br /><br />- Armé un módulo para separar los motores y que nunca se llegue a<br />cargar nada de SFML si no está disponible. <br /><br />- escribí una función llamada &quot;obtener_motores_disponibles()&quot; que<br />retorna un diccionario con las biblitocas multimedia que tiene el<br />sistema y recomienda una de las disponibles. Esta funcion no es<br />necesario invocarla al programar, pero puede ser útil para usuarios<br />avanzados que quieren ver que bibliotecas se dectectan.<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/changeset/37888fb312a4">http://bitbucket.org/hugoruscitti/pilas ... 888fb312a4</a><!-- m --><br /><br />Avisame cualquier cosa.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Dic 04, 2010 3:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lmorillas]]></name></author>
<updated>2010-12-03T21:24:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=953&amp;p=4541#p4541</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=953&amp;p=4541#p4541"/>
<title type="html"><![CDATA[Sacar motores_disponibles() de iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=953&amp;p=4541#p4541"><![CDATA[
Creo que sería más interesante sacar el diccionario motores_disponibles a la raíz de pilas/__init__ (actualmente está dentro de la función iniciar() ), así podríamos acceder a pilas.motores_disponibles y elegir el que esté disponible en la máquina en que estamos ejecutando pilas. Motores_disponibles debería de capturar la excepción del import pysfml en caso de no estar disponible. Esto facilitaría su ejecución en entornos donde no esté disponbile pysfml.<br /><br />-- lm<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2338">lmorillas</a> — Vie Dic 03, 2010 9:24 pm</p><hr />
]]></content>
</entry>
</feed>