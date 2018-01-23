<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=445" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-11T19:55:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=445</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-11T19:55:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=445&amp;p=1876#p1876</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=445&amp;p=1876#p1876"/>
<title type="html"><![CDATA[Empaquetar programa como codigo fuente en un .tar.gz]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=445&amp;p=1876#p1876"><![CDATA[
La forma mas tradicional de crear y distribuir programas en<br />GNU/Linux es utilizando las herramientas autotools:<br /><br />   <!-- m --><a class="postlink" href="http://www.calcifer.org/documentos/autotools.pdf">http://www.calcifer.org/documentos/autotools.pdf</a><!-- m --><br /><br />y pese a que es algo dificil, los desarrolladores lo usan y<br />se han acostumbrado a él. Autotools es la herramienta<br />que genera ese script llamado &quot;configure&quot; que tienen<br />muchos programas. La idea es que el usuario baje tu<br />programa, escriba &quot;http://losersjuegos.com.ar/foro/configure&quot; y luego se genere automáticamente<br />varios archivos Makefile para que luego solo se tenga que<br />escribir &quot;make install&quot; y listo.<br /><br />Otra alternativa interesante es usar Scons:<br /><br />   <!-- m --><a class="postlink" href="http://www.scons.org/">http://www.scons.org/</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ene 11, 2009 7:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-01-11T02:09:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=445&amp;p=1871#p1871</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=445&amp;p=1871#p1871"/>
<title type="html"><![CDATA[Empaquetar programa como codigo fuente en un .tar.gz]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=445&amp;p=1871#p1871"><![CDATA[
Hola, tengo un programa que hice cuando usaba windows, portado a linux con su makefile (que ya aprendi ha hacer los makefiles) y ahora tengo el problema de como empaquetarlo (primero por ahora solo el codigo fuente, nada de .deb o . rpm, solo empaquetar para instalar desde el codigo fuente) pues no se como hacer el script configure para generar los makefles en funcion del sistema.<br /><br />Una vez instalado el programa (cuando el makefile se encargase de copiar cada archivo de los necesarios a su correspondiente lugar en el sistema) ¿como se podria desinstalar, o habria que borrar cada archivo manualmente?, ¿como se puede crear el lanzador en el menu del sistema al instalar el programa desde el codigo fuente?<br /><br />Tambien tengo algunas dudas de el lugar donde debe ir cada archivo necesario para el ejecucion del juego, pues el juego necesita de imagenes y audio, que lo cargo desde la misma carpeta en donde esta el ejecutable (por lo menos asi lo hago por ahora como nada mas tengo el programa compilado en la misma carpeta que el resto de archivos fuente, imagenes y audio), ¿deberia tambien copiar los archivos que acompañan al ejecutable en la misma carpeta del sistema aunque esta sea una carpeta destinada a ejecutables?<br /><br />¿Alguein sabe del algun manual sobre programar en Linux, mas que sobre programar en C, sobre empaquetar el programa una vez echo?, es que estoi algo liado con esto, consigo compilarlo, pero no me parece que tenerlo compilado en una carpeta todo mezclado sea un buen acabado para ningun programa, y teniendolo bien organizado y bien preparado podria instalarlo, instalarlo en otros ordenadores, distribuirlo para que el programa sea accesible a todo aquel que quiera descargarlo e instalarlo(pues vaya gracia tiene hacer un programa para que acabe en unos cuantos bytes perdidos en el disco duro, o incluso borrado)....<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Ene 11, 2009 2:09 am</p><hr />
]]></content>
</entry>
</feed>