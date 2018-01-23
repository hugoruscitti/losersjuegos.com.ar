<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=866" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-07T07:33:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=866</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-07T07:33:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4073#p4073</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4073#p4073"/>
<title type="html"><![CDATA[Re: Ejecutables en Linux con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4073#p4073"><![CDATA[
En mi caso nunca he empaquetado con deb, pues los juegos que he escrito los he puesto como GPL, y lo comun es distribuir las fuentes.<br />Para las personas comunes, que no tienen conocimientos en informatica, se agregan instrucciones, que no son mas que indicarles habrir una terminal<br />en el directorio y escribir: make &amp; make install<br />Por supuesto que lo podria distribuir en un deb, y el que quiera las fuentes las baja, pero no soy partidario de la filosofia de windows, no me gusta que la gente<br />se acostumbre a las cosas faciles, y eso que hacer lo que te dije arriba no es nada dificil. Por supuesto que aveces te bajas un programa escribes esas instrucciones<br />y de pronto no compila y salen cientos de errores, eso para alguien que no sabe, puede hacer que no le agrade la forma de funcionar de gnu/linux, los programadores experimentados intentaran solucionar el problema, pero por eso es responsabilidad del programador, revisar que no tenga errores el programa<br />y que el makefile funcione correctamente.<br /><br />Tambien depende del por que vas a escribir juegos, yo lo hago por fines educativos, para aprender mas, y por que simplemente me gusta, mi fin no es distribuirlos<br />en internet o por otros medios masivamente, pero si los comparto con la comunidad de desarrolladores, y no se los demas, pero me gusta compilar <br />programas jeje.<br />Estos enlaces te pueden servir:<br />tutorial makefile <a href="http://iie.fing.edu.uy/~vagonbar/gcc-make/make.htm" class="postlink">http://iie.fing.edu.uy/~vagonbar/gcc-make/make.htm</a> crealos a mano para proyectos pequeños.<br />Para proyectos mas grandes con muchas dependencias, varios directorios, y quieres que sea portable usa cmake, un constructor de makefile<br /><a href="http://plagatux.es/2009/12/tutorial-cmake/" class="postlink">http://plagatux.es/2009/12/tutorial-cmake/</a><br /><br /><a href="http://docs.google.com/viewer?a=v&amp;q=cache:i06swgek--kJ:www.uca.es/softwarelibre/publicaciones/cmake-material.pdf+tutorial+cmake&amp;hl=es&amp;gl=mx&amp;pid=bl&amp;srcid=ADGEESgSHkuvjp4WptXmVuapD1gZHRLyDUJ2xY902fpimiIw8rdrgyGkD1xpK10tulym4udxS4fPDb8EF7LoXeSJZT2D2h0f42RquAgKRGlr51WOSKumOuzCht2Psa4x3g81Kco5Tsqq&amp;sig=AHIEtbTa20LV1aRFuDFf_71vxtMfjXJW0Q" class="postlink">http://docs.google.com/viewer?a=v&amp;q=cache:i06swgek--kJ:www.uca.es/softwarelibre/publicaciones/cmake-material.pdf+tutorial+cmake&amp;hl=es&amp;gl=mx&amp;pid=bl&amp;srcid=ADGEESgSHkuvjp4WptXmVuapD1gZHRLyDUJ2xY902fpimiIw8rdrgyGkD1xpK10tulym4udxS4fPDb8EF7LoXeSJZT2D2h0f42RquAgKRGlr51WOSKumOuzCht2Psa4x3g81Kco5Tsqq&amp;sig=AHIEtbTa20LV1aRFuDFf_71vxtMfjXJW0Q</a><br /><br />Puedes incluso usar el cmake para proyectos pequeños, las lineas para el cmake seran menores que el makefile que te hagas a mano.<br /><br />Y sobre deb encontre esto <a href="http://120linux.com/creando-paquetes-deb-con-giftwrap/" class="postlink">http://120linux.com/creando-paquetes-deb-con-giftwrap/</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Sep 07, 2010 7:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[A3]]></name></author>
<updated>2010-09-07T06:22:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4071#p4071</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4071#p4071"/>
<title type="html"><![CDATA[Re: Ejecutables en Linux con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4071#p4071"><![CDATA[
ooh, muy interesante lo que dicen, disculpen si me sorprendo con algo simple, jejeje, probablemente ya no sea tema de aquí, pero si me pudieran guiar hacia algún sitio relacionado a todo esto del EMPAQUETAMIENTO DE JUEGOS EN LINUX se los agradecería. <br /><br />O mejor, como lo hacen ustedes?, si un dia quieren hacer o hicieron un juego para linux, como lo empaquetarían o empaquetaron para personas casuales sin mayores conocimientos informáticos, o sea, para que simplemente le den un doble click y a jugar. Me gustaría compartieran sus experiencias, y así comparar casos y formas eficientes y eficaces.<br /><br />Se los agradeceria mucho, nada mejor que leer experiencias de otros, para aprender,<br /><br />gracias de nuevo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2146">A3</a> — Mar Sep 07, 2010 6:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-06T06:48:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4062#p4062</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4062#p4062"/>
<title type="html"><![CDATA[Re: Ejecutables en Linux con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4062#p4062"><![CDATA[
En gnu/linux las bibliotecas dinamicas tienes la extencion so, cuando pongas tu programa en otra computadora el buscara las bibliotecas por defecto en<br />/usr/lib. Sin embargo te recomiendo mejor instalar sdl, en el caso de solo uso, instala todas las libsdl que no terminen con -dev, puedes hacer una archivo que haga<br />eso de forma automatica, en general no es muy comun en gnu/linux copiar un ejecutable y que funcione, pues tienen dependencias.<br />Pero lo del deb es buena idea, averigua sobre el.Pero ten en cuenta que los deb solo funcionan en sistemas basados en debian, lo mas portable es hacer un makefile<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Lun Sep 06, 2010 6:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-06T03:38:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4061#p4061</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4061#p4061"/>
<title type="html"><![CDATA[Re: Ejecutables en Linux con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4061#p4061"><![CDATA[
Podrias usar el comando &quot;ldd tu_ejecutable&quot; para conocer las<br />bibliotecas que usa tu juego y luego instalarlas en el equipo destino<br />antes de llevar el juego.<br /><br />Aunque lo tradicional es crear un archivo .deb con tu juego e<br />informacion adicional de los paquetes que necesita, asi cuando alguien<br />quiere instalar el juego el mismo sistema de paquetes instalara todas<br />las bibliotecas por ti.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Sep 06, 2010 3:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[A3]]></name></author>
<updated>2010-09-06T02:57:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4060#p4060</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4060#p4060"/>
<title type="html"><![CDATA[Ejecutables en Linux con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=866&amp;p=4060#p4060"><![CDATA[
Hola a todos, he estado experimentando con linux (Ubuntu) una temporada y estaba probando las bibliotecas de SDL, y tengo una duda al respecto. Cuando compilo algún juego en windows, yo siempre coloco el archivo SDL.dll en la misma carpeta que mi aplicación para que funcione; ahora en linux yo genero un archivo ejecutable, pero lo que no se es si cuando lleve ese archivo ejecutable a otra computadora con linux me vaya a funcionar bien sin necesidad ni ningún otro archivo, parecido a lo que se hace en windows con los .dll <br /><br />Agradezco cualquier explicación ya que no entiendo mucho del tema. Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2146">A3</a> — Lun Sep 06, 2010 2:57 am</p><hr />
]]></content>
</entry>
</feed>