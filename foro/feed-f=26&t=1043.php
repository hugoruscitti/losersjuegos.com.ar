<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=1043" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-04T22:19:02+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=1043</id>
<entry>
<author><name><![CDATA[danielpuch]]></name></author>
<updated>2011-02-04T22:19:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5045#p5045</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5045#p5045"/>
<title type="html"><![CDATA[Re: Gráficos Vectoriales Escalables en Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5045#p5045"><![CDATA[
Re interesante lo que vos decis juancarlospaco, me dio por googlear sobre el tema y encontre esto.<br />Tambien soy n00b, pero de repente los masters de programacion del foro le encuentran la vuelta...<br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" /><br /><br /><br /><!-- m --><a class="postlink" href="http://codeboje.de/pysvg/">http://codeboje.de/pysvg/</a><!-- m --><br /><br /><span style="font-style: italic">&quot;pySVG is a pure Python library to create SVG documents. Essentially it is a python wrapper around svg with the goal to allow people to &quot;program svg&quot;. pySVG can be used to produce svg as an outcome of algorithms you implement (like koch curves, Lindenmayr systems etc.)&quot;</span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2372">danielpuch</a> — Vie Feb 04, 2011 10:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juancarlospaco]]></name></author>
<updated>2011-02-04T19:51:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5043#p5043</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5043#p5043"/>
<title type="html"><![CDATA[Re: Gráficos Vectoriales Escalables en Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5043#p5043"><![CDATA[
<blockquote><div><cite>pchack escribió:</cite><br />Que Tal  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> ,<br />Saludos juancarlospaco, tienes idea de como se hace eso y que librerias se pueden utilizar, si es así podrias explicar<br />un poco y asi se podrian hacer algunas pruebas de lo que comentas.<br /></div></blockquote><br /><br />Aclaro que soy n00b en Python, asi que no creo que pueda enseñarte mucho, pero soy creativo, y veo las cosas por lo que son.<br /><br />No existen <span style="font-style: italic">&quot;Graficos&quot;</span>  SVG.<br />Un SVG es un archivo XML que dice <span style="font-style: italic">&quot;dibujar circulo aqui, dibujar linea alla&quot;</span> usa coordenadas o algo asi creo.<br /><br />Entonces razonas 2 cosas:<br />- Se puede procesar(?) con cualquier libreria de parseo XML<br />- Tambien se puede procesar con PIL <span style="font-style: italic">(python imaging library)</span>.<br /><br />Lo primero nunca lo use en una app real, <br />lo segundo si, como no se mucho simplemente use PIL, basandome en la docu de pil y busquedas en google.<br /><br />Ver:<br /><!-- m --><a class="postlink" href="http://www.pythonware.com/library/pil/">http://www.pythonware.com/library/pil/</a><!-- m --><br /><!-- m --><a class="postlink" href="http://www.pythonware.com/library/pil/handbook/imagedraw.htm">http://www.pythonware.com/library/pil/h ... gedraw.htm</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2380">juancarlospaco</a> — Vie Feb 04, 2011 7:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-02-04T17:24:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5042#p5042</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5042#p5042"/>
<title type="html"><![CDATA[Re: Gráficos Vectoriales Escalables en Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5042#p5042"><![CDATA[
Que Tal  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> ,<br /><blockquote><div><cite>juancarlospaco escribió:</cite><br />Se podria hacer que el motor pase de Vector a Raster <span style="font-style: italic">(.svg a .png)</span> antes de mostrarlo en pantalla, durante el start-up del juego,<br />esto reduciria el peso en disco del juego, evitaria la pixelacion, aunque llevaria mas tiempo iniciar un juego.<br /></div></blockquote><br /><br />Saludos juancarlospaco, tienes idea de como se hace eso y que librerias se pueden utilizar, si es así podrias explicar<br />un poco y asi se podrian hacer algunas pruebas de lo que comentas.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Vie Feb 04, 2011 5:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juancarlospaco]]></name></author>
<updated>2011-02-04T00:21:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5038#p5038</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5038#p5038"/>
<title type="html"><![CDATA[Re: Gráficos Vectoriales Escalables en Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5038#p5038"><![CDATA[
Se podria hacer que el motor pase de Vector a Raster <span style="font-style: italic">(.svg a .png)</span> antes de mostrarlo en pantalla, durante el start-up del juego,<br />esto reduciria el peso en disco del juego, evitaria la pixelacion, aunque llevaria mas tiempo iniciar un juego.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2380">juancarlospaco</a> — Vie Feb 04, 2011 12:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-02-03T19:31:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5036#p5036</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5036#p5036"/>
<title type="html"><![CDATA[Re: Gráficos Vectoriales Escalables en Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5036#p5036"><![CDATA[
En principio no, no soporta SVGs... pero usar la biblioteca Cairo, y el<br />objeto pizarra lo implementa, así que si encontramos alguna<br />biblioteca que sepa leer archivos svg y dibuje sobre un contexto<br />de cairo la cosa va a funcionar.<br /><br />¿te animas a hacer alguna prueba de eso?.<br /><br />Ví algo de eso por acá, pero no lo probé y tal vez<br />existan cosas mejores:<br /><br /><!-- m --><a class="postlink" href="http://cairographics.org/cookbook/librsvgpython/">http://cairographics.org/cookbook/librsvgpython/</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Feb 03, 2011 7:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-02-03T18:42:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5033#p5033</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5033#p5033"/>
<title type="html"><![CDATA[Gráficos Vectoriales Escalables en Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1043&amp;p=5033#p5033"><![CDATA[
Hola a Todos, he estado probando juegos y más juegos realizados en Flash, y los encuentro buenisimos<br />sobre todo la capacidad de poder usar vectores gráficos que al escalarlos no pierden calidad, además <br />son livianos, mi pregunta es si Pilas Engine soporta o puede soporta la capacidad de cargar imagenes .svg<br /> (Scalable Vector Graphics). Seria genial que lo hiciera, y que se pudieran escalar gráficos sin perder calidad.<br /><br /><br />Muchas Gracias y Saludos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Jue Feb 03, 2011 6:42 pm</p><hr />
]]></content>
</entry>
</feed>