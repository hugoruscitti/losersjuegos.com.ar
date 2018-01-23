<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=853" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-29T23:33:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=853</id>
<entry>
<author><name><![CDATA[angelus_ira]]></name></author>
<updated>2010-08-29T23:33:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3972#p3972</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3972#p3972"/>
<title type="html"><![CDATA[Re: Una idea: que se pueda dibujar en pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3972#p3972"><![CDATA[
En el libro &quot;Think Python: How to Think Like a Computer Scientist&quot;  existe una clase llamada TurtleWorld y Turtle que lo que hace es dibujar con una tortuga:<br /><a href="http://www.greenteapress.com/thinkpython/thinkpython.html" class="postlink">http://www.greenteapress.com/thinkpython/thinkpython.html</a><br /><br />La clase ya esta armada y permite dibujar de una manera muy sencilla, les puede servir de ejemplo. <br /><br />Añado un enlace a mi web donde la uso:<br /><a href="http://www.fantasiagames.com.ar/forums.php?m=posts&amp;q=27" class="postlink">http://www.fantasiagames.com.ar/forums.php?m=posts&amp;q=27</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2230">angelus_ira</a> — Dom Ago 29, 2010 11:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-29T19:17:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3959#p3959</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3959#p3959"/>
<title type="html"><![CDATA[Re: Una idea: que se pueda dibujar en pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3959#p3959"><![CDATA[
Por lo que veo SFML tiene un objeto que representa una textura<br />sobre la que se puede dibujar:<br /><br /><!-- m --><a class="postlink" href="http://www.sfml-dev.org/documentation/1.6/classsf_1_1Shape.htm">http://www.sfml-dev.org/documentation/1 ... 1Shape.htm</a><!-- m --><br /><br />Creo que podríamos hacer algo con esto, como un objeto canvas<br />sobre el que se pueda dibujar.<br /><br />¿hay algún voluntario para escribir un ejemplo de esto en python?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 29, 2010 7:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-29T18:41:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3957#p3957</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3957#p3957"/>
<title type="html"><![CDATA[Re: Una idea: que se pueda dibujar en pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3957#p3957"><![CDATA[
con Pygame sería fácil con el módulo draw que dibuja puntos, lineas, circulos, etc. Con SFML supongo que habrá algo parecido, sino se puede simular cargando una imagen de un pixel de algún color y dibujando a partir de él.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Dom Ago 29, 2010 6:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-29T18:16:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3956#p3956</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3956#p3956"/>
<title type="html"><![CDATA[Una idea: que se pueda dibujar en pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=853&amp;p=3956#p3956"><![CDATA[
Saludos, estaba pensando que sería super interesante buscar alguna<br />manera de poder dibujar en la pantalla de pilas.<br /><br />Por ejemplo, para crear cosas como la tortuga de logo:<br /><br /><!-- m --><a class="postlink" href="http://el.media.mit.edu/logo-foundation/logo/turtle.html">http://el.media.mit.edu/logo-foundation ... urtle.html</a><!-- m --><br /><br />Es decir, que uno pueda crear un actor &quot;Tortuga&quot; y darle órdenes<br />para que camine por la pantalla dibujando:<br /><br /><img src="http://el.media.mit.edu/logo-foundation/logo/graphics/image10.gif" alt="Imagen" /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>tortuga = pilas.actores.Tortuga()<br /><br />tortuga.avanzar(50)<br />tortuga.girar(90)<br />tortuga.avanzar(50)<br /></code></dd></dl><br /><br />Claro, que se mueva la tortuga es fácil, pero ¿como hacemos<br />para que dibuje?, ¿alguien conoce como dibujar en pantalla con<br />SFML?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 29, 2010 6:16 pm</p><hr />
]]></content>
</entry>
</feed>