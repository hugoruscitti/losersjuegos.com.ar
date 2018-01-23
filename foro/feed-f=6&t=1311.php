<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1311" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-09T16:00:00+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1311</id>
<entry>
<author><name><![CDATA[IrvingProg]]></name></author>
<updated>2011-10-09T16:00:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1311&amp;p=6075#p6075</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1311&amp;p=6075#p6075"/>
<title type="html"><![CDATA[py2exe y pygame problema mixer]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1311&amp;p=6075#p6075"><![CDATA[
Hola.<br /><br />He estado intentando pasar un juego hecho en Python y Pygame(.py) a un .exe en Windows, yo uso GNU/Linux así que el juego está hecho para funcionar en GNU/Linux, he estado probando con Windows y tuve que cambiar un par de cosas para hacerlo funcionar(a medias) primero tuve problema con el video, pero lo solucione con un par de lineas que encontré por Internet, ahora tengo problemas con el audio(mixer).<br /><br />El juego Inicia con un splash, y después entra al main que es un Menú donde hay una canción de fondo y ahi me da el error.<br /><br />Les dejo algo de código:<br /><br />Cabecera(Aquí arregle lo del vídeo);<br /><pre class="prettyprint">#!/usr/bin/python<br /># -*- coding: utf-8 -*-<br />import pygame,sys,os<br />import random<br />from pygame.locals import *<br />import pygame._view<br />os.environ[&#39;SDL_VIDEODRIVER&#39;] = &#39;windib&#39;<br />pygame.display.init&#40;&#41;<br /><br />SCREEN_WIDTH = 800;<br />SCREEN_HEIGHT = 600;<br /><br />#    PANTALLA<br />screen = pygame.display.set_mode&#40;&#40;SCREEN_WIDTH,SCREEN_HEIGHT&#41;&#41;<br />pygame.display.set_caption&#40;&quot;CarroPX - THE GAME &quot;&#41;;</pre><br />Compile.py;<br /><pre class="prettyprint">from distutils.core import setup<br />import py2exe<br /><br />setup&#40;console=[&#39;Main.py&#39;]&#41;</pre><br /><br />Aquí me da el error ya compilado el programa, al ejecutar el .exe;<br /><pre class="prettyprint">pygame.mixer.music.load&#40;&quot;http://losersjuegos.com.ar/foro/datos/intro.ogg&quot;&#41;;<br />    pygame.mixer.music.play&#40;-1&#41;;</pre><br /><br />Espero me puedan ayudar a resolver el problema, de antemano gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2369">IrvingProg</a> — Dom Oct 09, 2011 4:00 pm</p><hr />
]]></content>
</entry>
</feed>