<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=854" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-29T20:02:40+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=854</id>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-29T20:02:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3964#p3964</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3964#p3964"/>
<title type="html"><![CDATA[Re: Juegos basados en tiles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3964#p3964"><![CDATA[
Si aparte de que ya seria temas mas avanzado, mejor de momento trabajar en lo básico. Pero bueno la lectura del XML y demás ya lo tengo hecho en realidad solo sería sustituir las instrucciones pygame por las de sfml. Y luego generalizarlo para que se adaptara a todo tipo de juegos y de usos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Dom Ago 29, 2010 8:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-29T19:38:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3963#p3963</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3963#p3963"/>
<title type="html"><![CDATA[Re: Juegos basados en tiles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3963#p3963"><![CDATA[
Se ve bueno, si te parece bien podríamos hacer un branch y cuando<br />tengas algo pasado a SFML lo vamos integrando, no?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 29, 2010 7:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-29T19:30:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3962#p3962</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3962#p3962"/>
<title type="html"><![CDATA[Re: Juegos basados en tiles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3962#p3962"><![CDATA[
Mira te muestro, yo lo hice en Pygame. Carga el mapa de tiles, tiene sistema de prioridades y la camara sigue al heroe.<br /><br /><!-- m --><a class="postlink" href="http://razonartificial.com/2010/07/avances-del-engine-rpg-anadido-el-scroll/">http://razonartificial.com/2010/07/avan ... el-scroll/</a><!-- m --><br /><br />sería cuestion de pasarlo a sfml<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Dom Ago 29, 2010 7:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-29T19:27:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3961#p3961</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3961#p3961"/>
<title type="html"><![CDATA[Re: Juegos basados en tiles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3961#p3961"><![CDATA[
mmm se podria hacer más complejo y no solo definir un mapa de fondo, con control de prioridades y varias capas.<br /><br />Y para mover la cámara se podría hacer con respecto a un actor. tipo:<br /><br />pilas.camara_seguit(heroe)<br /><br />y que la cámara siguiera al sprite seleccionado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Dom Ago 29, 2010 7:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-29T19:20:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3960#p3960</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3960#p3960"/>
<title type="html"><![CDATA[Re: Juegos basados en tiles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3960#p3960"><![CDATA[
Me parece buena idea, ¿como pensas que sería la interfaz de pilas?.<br /><br />¿algo así?<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>mapa = pilas.mapa.cargar('archivo.xml')<br />pilas.definir_fondo(mapa)<br /><br />pilas.mover_camara(40, 10)<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 29, 2010 7:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-29T18:49:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3958#p3958</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3958#p3958"/>
<title type="html"><![CDATA[Juegos basados en tiles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=854&amp;p=3958#p3958"><![CDATA[
La gran mayoría de los juegos en 2D usan un sistema de tiles para dibujar mapas, juegos tipo comecocos, plataformas, rpgs, etc.<br /><br />Sería facilitar la creación de este tipo de juegos con Pilas haciendo sencillo el cargar mapas basados en tiles, programar el scroll, las colisiones, etc.<br /><br />Existe un programa llamado Tiled (<a href="http://www.mapeditor.org/" class="postlink">http://www.mapeditor.org/</a>) para crear mapas basados en tiles. Tiled es software libre y está escrito en C++ y QT. El programa genera unos mapas con la extensión .tmx que no son más que ficheros XML que guardan toda la información del mapa.<br /><br />Podríamos darle a pilas soporte para que cargara mapas de tiled y que fuera fácil crear juegos con ellos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Dom Ago 29, 2010 6:49 pm</p><hr />
]]></content>
</entry>
</feed>