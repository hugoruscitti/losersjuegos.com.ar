<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1550" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-09-10T04:03:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1550</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-09-10T04:03:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1550&amp;p=7071#p7071</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1550&amp;p=7071#p7071"/>
<title type="html"><![CDATA[Re: Un pequeño plataformas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1550&amp;p=7071#p7071"><![CDATA[
Jejeje, como decían los latinos: errare humanum est...<br />Bueno, la verdad era una prueba mas que nada de como utilizar &quot;tiled&quot; como editor de niveles <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />, y como base para otro proyecto, tal vez lo continué, pero limpiando algunas cosas que me parecen un poco &quot;sucias&quot; en la implementación y el modelo en general <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br /><blockquote><div><cite>shackra escribió:</cite><br />Oh, y no olvides darle una maldita arma al héroe para las próximas versiones, me acaba de matar un bicho rojo! xddd<br /></div></blockquote><br /><br />No eres la primera persona que me lo comenta XD, y si lo he pensado, pero seria &quot;mas adelante&quot;. Tal vez si decidiera continuarlo ( creo que de momento no le puedo hacer &quot;justicia&quot; XD )<br /><br />En cuanto a los errores, esos se deben a estar haciendo pruebas, modificando cosas y de vez en cuando, se me olvidan quitarlas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />De cualquier forma, se agradece la observación.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Sep 10, 2012 4:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-09-09T22:43:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1550&amp;p=7064#p7064</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1550&amp;p=7064#p7064"/>
<title type="html"><![CDATA[Re: Un pequeño plataformas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1550&amp;p=7064#p7064"><![CDATA[
Es un encanto de juego, esta bien logrado!<br /><br />Captura de pantalla de 2012-09-09 160321.png<br /><br /><span style="font-weight: bold">algunas observaciones</span>:<br /><br />Parece que en la animación en el estado de correr el ultimo cuadro dura más de lo normal, haciendo parecer que esta patinando en una pista de hielo.<br />otra cosa que hay que ponerle atención es al famoso <span style="font-weight: bold">#!/usr/bin/env python</span>, usa <span style="font-weight: bold">#!/usr/bin/env python2</span> en lugar del primero ya que no todos usamos python2 por defecto al llamar <span style="font-weight: bold">python</span> en nuestro sistema.<br />También intenta siempre de usar las teclas WASD en lugar de las flechas, casi todos los gamers que conozco han movido los personajes de videojuegos con la mano izquierda desde siempre!<br /><br />Oh, y no olvides darle una maldita arma al héroe para las próximas versiones, me acaba de matar un bicho rojo! xddd<br /><br />BTW, creo que te interesa ver el siguiente diagnostico!:<br /><dl class="codebox"><dt>Code: </dt><dd><code>-*- mode: grep; default-directory: &quot;~/Gamers_Dreams/DEMOS/VM/&quot; -*-<br />Grep started at Sun Sep  9 16:21:55<br /><br />pyflakes main.py<br />main.py:4: 'from pygame import *' used; unable to detect undefined names<br />main.py:5: 'from coat import *' used; unable to detect undefined names<br />main.py:7: 'copy' imported but unused<br />main.py:7: 'time' imported but unused<br />main.py:183: local variable 'rango' is assigned to but never used<br />main.py:360: local variable 'reloj' is assigned to but never used<br />main.py:484: local variable 'x' is assigned to but never used<br />main.py:497: local variable 'reloj' is assigned to but never used<br /><br />Grep exited abnormally with code 1 at Sun Sep  9 16:21:56<br /></code></dd></dl><br /><br />un saludo y sigue mejorando!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Sep 09, 2012 10:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-09-09T20:57:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1550&amp;p=7063#p7063</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1550&amp;p=7063#p7063"/>
<title type="html"><![CDATA[Un pequeño plataformas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1550&amp;p=7063#p7063"><![CDATA[
Hola, hacia tiempo que termine un pequeño plataformas, algo torpe  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> , perofuncional  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> .<br />Creo que les podría interesar jugar con el un poco. Los requisitos son python 2.x, pygame.<br /><br />Se controla al personaje con las flechas de dirección, (Izquierda, derecha, arriba para saltar), si se mantiene pulsada la tecla arriba antes de caer, se da un nuevo y pequeño salto en el aire.<br /><br />El objetivo es conseguir todas las tabletas (32) evitando chocar con los monstruos rojos. <br /><br />Aquí el link de descarga: <a href="http://db.tt/P5cWifA4" class="postlink">http://db.tt/P5cWifA4</a><br /><br />Para correrlo basta con ejecutar el &quot;main.pyw&quot;<br /><br />Me gustaría escuchar su opinión. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Dom Sep 09, 2012 8:57 pm</p><hr />
]]></content>
</entry>
</feed>