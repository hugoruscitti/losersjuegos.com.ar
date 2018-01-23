<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=322" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-05-14T18:30:44+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=322</id>
<entry>
<author><name><![CDATA[ingemar]]></name></author>
<updated>2008-05-14T18:30:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=322&amp;p=1392#p1392</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=322&amp;p=1392#p1392"/>
<title type="html"><![CDATA[como coloco una imagen detras de un texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=322&amp;p=1392#p1392"><![CDATA[
hola saludos a todos<br /><br />he querido colocar una imagen ATRÁS de un texto pero no e podido e buscado pero ninguno lo explica ojala me puedan ayudar. <br />el código que llevo haciendo pruebas es este:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import os, sys<br />import pygame<br />from pygame.locals import *<br />pygame.init&#40;&#41;<br /><br />screen = pygame.display.set_mode&#40;&#40;468, 60&#41;&#41;<br />pygame.display.set_caption&#40;'Monkey Fever'&#41;<br />pygame.mouse.set_visible&#40;1&#41;<br />background = pygame.Surface&#40;screen.get_size&#40;&#41;&#41;<br />background = background.convert&#40;&#41;<br />background.fill&#40;&#40;250, 250, 250&#41;&#41;<br />if pygame.font:<br />      font = pygame.font.Font&#40;None, 36&#41;<br />      text = font.render&#40;&quot;NO ENTIENDO&quot;, 1, &#40;0,0,0&#41;&#41;<br />      textpos = text.get_rect&#40;centerx=background.get_width&#40;&#41;/2&#41;<br />      background.blit&#40;text, textpos&#41;<br />screen.blit&#40;background, &#40;0, 0&#41;&#41;<br />pygame.display.flip&#40;&#41;<br />pygame.event.set_allowed&#40;None&#41;<br />pygame.event.set_allowed&#40;pygame.QUIT&#41;<br />pygame.event.wait&#40;&#41;</code></dd></dl><br /><br /><br />con este código sale el texto y el fondo en blanco y lo que quiero es remplazar lo blanco por una imagen.<br /><br />GRACIAS A TODOS<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1911">ingemar</a> — Mié May 14, 2008 6:30 pm</p><hr />
]]></content>
</entry>
</feed>