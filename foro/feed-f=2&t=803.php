<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=803" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-07-28T23:54:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=803</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-07-28T23:54:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=803&amp;p=3571#p3571</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=803&amp;p=3571#p3571"/>
<title type="html"><![CDATA[Re: Automake y autoconf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=803&amp;p=3571#p3571"><![CDATA[
olvidate de automake y autoconf. CMake es mucho mejor<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Jul 28, 2010 11:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-07-28T23:34:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=803&amp;p=3569#p3569</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=803&amp;p=3569#p3569"/>
<title type="html"><![CDATA[Automake y autoconf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=803&amp;p=3569#p3569"><![CDATA[
Muchos veces bajamos fuentes de programas y vemos que para instalar solo hay que ejecutar 3 lineas: http://losersjuegos.com.ar/foro/configure &amp;&amp; make &amp;&amp; make install<br />pues no sabia como se realizaba eso, ademas los makefiles son muy grandes para ser generador por un programador. Pues encontre como se hace, <br />se usa una serie de programas de automake. Pues les dejo el link de la pagina <a href="http://wiki.freaks-unidos.net/usando%20autoconf%20y%20automake" class="postlink">http://wiki.freaks-unidos.net/usando%20autoconf%20y%20automake</a><br /><br />yo ya lo probe y me funcionó, lo hice para mi proyecto y solo tuve que definir unas cuantas lineas.<br /><br />Solo unos comentarios para que no se aporreen como yo, si lo que se va a compilar es en c++ hay que cambiar la linea AC_PROG_CC  por AC_PROG_CXX en el archivo configure.in, y todos los archivos deben tener la extencion cpp, pues en mi proyecto avian unos con extencion c y me marcaba errores extraños al compilar.Pero con ese se arregló.<br />Para incluir bibliotecas externas abrí el makefile que generó en la carpeta de las fuentes(src) y agregue las lineas en CXXFLAGS, en mi proyecto puse:<br />CXXFLAGS = -g -O2 -lSDL -lSDL_gfx -lSDL_image -lSDL_mixer,( la opcion de optimización viene por defecto)<br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Jul 28, 2010 11:34 pm</p><hr />
]]></content>
</entry>
</feed>