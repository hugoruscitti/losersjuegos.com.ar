<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=440" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-15T20:16:14+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=440</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-15T20:16:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1912#p1912</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1912#p1912"/>
<title type="html"><![CDATA[salida de printf compilando con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1912#p1912"><![CDATA[
<blockquote><div><cite>lacabra25 escribió:</cite><br />Y ahora que acaba de pasarseme por la cabeza, ¿se podria abrir mas de una ventana SDL podiendo controlarlas de forma independiente, quiero decir podiendo diferenciar los eventos provenientes de una u otra, poder dibujar en una u otra, y cosas asi similares, al estilo de gimp con varias ventanas para que se entienda.<br /></div></blockquote><br /><br />No, no se puede hacer con pygame, es una restricción de<br />diseño... pygame, al igual que SDL solo pueden manejar<br />aplicaciones de una sola ventana.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Ene 15, 2009 8:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-01-15T17:07:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1911#p1911</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1911#p1911"/>
<title type="html"><![CDATA[salida de printf compilando con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1911#p1911"><![CDATA[
Pues no se que más explicar, el articulo soluciona lo de poder escribir en la terminal, y la ventana de SDL supongo que mientras no inicie el modo grafico no aparecera, el problema sigue en como poder iniciar con la ventana de terminal y al abrir la ventana de SDL cerrar la de terminal en tiempo de ejecucion.<br /><br />Y ahora que acaba de pasarseme por la cabeza, ¿se podria abrir mas de una ventana SDL podiendo controlarlas de forma independiente, quiero decir podiendo diferenciar los eventos provenientes de una u otra, poder dibujar en una u otra, y cosas asi similares, al estilo de gimp con varias ventanas para que se entienda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Ene 15, 2009 5:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-11T20:02:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1877#p1877</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1877#p1877"/>
<title type="html"><![CDATA[salida de printf compilando con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1877#p1877"><![CDATA[
En la parte final del siguiente artículo se explica una<br />forma de evitar que se generen los archivo .txt que<br />mencionas:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/instalar_devcpp/instalar_devcpp.php">http://www.losersjuegos.com.ar/referenc ... devcpp.php</a><!-- m --><br /><br />Aunque solo sirve para ver los mensajes en la ventana del<br />terminal, no para manejar de manera independiente ambas ventanas. Tal<br />vez eso requiera mas trabajo con otras bibliotecas... cuentanos un<br />poco mas si quieres, tal vez se pueda resolver de otra manera y usando<br />otras bibliotecas.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ene 11, 2009 8:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-01-11T01:25:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1866#p1866</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1866#p1866"/>
<title type="html"><![CDATA[salida de printf compilando con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=440&amp;p=1866#p1866"><![CDATA[
Hola, como ya sabeis al compilar un programa usando SDL en dicho programa al usar printf en vez de aparecer en una terminal, aparece en el archivo stdout.txt, ¿como cambia SDL la salida estandar?, ¿como se puede evitar que cambie la salida estandar?<br /><br />Esto lo pregunto por que tengo a medias un programa en el que intento que se pueda usar en modo texto y en modo grafico, podiendo pasar de uno a otro en ejecucion o pasando un argumento al programa al arrancarlo, tambien me seria util saber como cerrar la ventana de terminal sin cerrar el programa al abrir la ventana con SDL en el modo grafico y viceverse, volver a abrir una ventana de terminal para cerrar la ventana abierta con SDL.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Ene 11, 2009 1:25 am</p><hr />
]]></content>
</entry>
</feed>