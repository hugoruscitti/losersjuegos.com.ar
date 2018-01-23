<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1131" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-02T03:47:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1131</id>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2011-06-02T03:47:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5610#p5610</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5610#p5610"/>
<title type="html"><![CDATA[Re: Instalación de pilas en MacOSX]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5610#p5610"><![CDATA[
excelente hugo gracias!!! si yo tambien estoy queriendo migrar a fedora, pero mis pequeños proyectos con pilas me lo impiden. pero voy a probar a full y espero con ansias. saludos!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Jue Jun 02, 2011 3:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-06-02T02:57:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5609#p5609</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5609#p5609"/>
<title type="html"><![CDATA[Re: Instalación de pilas en MacOSX]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5609#p5609"><![CDATA[
Saludos, como estas?<br /><br />Te comento que por el momento no hay un tutorial completo<br />de instalación en Fedora, actualmente yo estoy usando<br />Fedora (migré hace poquito) y no tuve mucho tiempo para<br />escribir el tutorial.<br /><br />Igualmente, te puedo comentar a grandes razgos que<br />podrías hacer, un paso es instalar los siguientes<br />paquetes:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>yum install pygame.i686 pybox2d.i686 PyQt4.i686<br /></code></dd></dl><br /><br />y luego descargar pilas del repositorio, hay un tutorial<br />que explica bien cómo hacerlo:<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/tutoriales/pilas_desde_repositorio/pilas_desde_repositorio.rst">http://www.pilas-engine.com.ar/doc/tuto ... itorio.rst</a><!-- m --><br /><br />y luego, en los ejemplos tendrías que indicar que el<br />motor a utilizar es pygame, por ejemplo con la sentencia:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>pilas.iniciar(usar_motor='pygame')<br /></code></dd></dl><br /><br />Uno de los problemas para instalar pilas en Fedora es que<br />Fedora no tiene a SFML en sus repositorios. Yo estoy ahora<br />mismo trabajando para que esto no sea un obstáculo, mi intención<br />es que pilas comience a utilizar Qt y con ello se simplifique<br />la instalación en muchos sistemas (Fedora incluido).<br />                                                                                                                                                                                                  <br />Comentanos cualquier cosa se te complique instalarlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Jun 02, 2011 2:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2011-05-31T04:33:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5597#p5597</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5597#p5597"/>
<title type="html"><![CDATA[Re: Instalación de pilas en MacOSX]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5597#p5597"><![CDATA[
algun tuto de instalacion en fedora?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Mar May 31, 2011 4:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dimoni]]></name></author>
<updated>2011-05-23T19:54:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5569#p5569</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5569#p5569"/>
<title type="html"><![CDATA[Re: Instalación de pilas en MacOSX]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5569#p5569"><![CDATA[
Supongo que habrá que hacerlo por terminal... En mac no funciona el apt-get. Tampoco se puede via fink o macports, almenos no he podido...<br /><br />Si alguien sabe como hacerlo... Si me escriben y con los consejos que me den lo consigo, pasaré toda la info para que los demás usuarios mac lo consigan...<br /><br />Por ahora lo he instalado usando virtualbox 4 y ubunu 10. Funciona bién. (si alguien quiere tener ubuntu a pantalla completa tiene que editar el archivo xorg.conf que està en etc/X11. Miraré de colgar un mini tutorial si a alguien le interesa).<br /><br />Pero si se pudiera instalar en debian 6 seria mejor opción. Debian 6 permite ya tener a pantalla completa, y el modo fluido funciona bastante bién, podriamos usar pilas en el mismo escritorio...<br /><br />Bueno, toda ayuda serà de agradecer... Felicidades por el proyecto.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1996">dimoni</a> — Lun May 23, 2011 7:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-05-01T05:29:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5471#p5471</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5471#p5471"/>
<title type="html"><![CDATA[Re: Instalación de pilas en MacOSX]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5471#p5471"><![CDATA[
Creo que si, pero no he probado porque no tengo acceso a una<br />mac... podrias hacer la prueba y contarnos?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom May 01, 2011 5:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[starnoise]]></name></author>
<updated>2011-04-30T15:17:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5468#p5468</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5468#p5468"/>
<title type="html"><![CDATA[Instalación de pilas en MacOSX]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1131&amp;p=5468#p5468"><![CDATA[
Buenas a todos. <br /><br />Estoy interesado en utilizar el sistema pilas y me gustaría saber si es posible su instalación en MacOS.<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2427">starnoise</a> — Sab Abr 30, 2011 3:17 pm</p><hr />
]]></content>
</entry>
</feed>