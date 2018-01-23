<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=701" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-03-08T19:47:17+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=701</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-03-08T19:47:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3299#p3299</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3299#p3299"/>
<title type="html"><![CDATA[Auxilio!: el centro de un Surface?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3299#p3299"><![CDATA[
hola otra vez <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />aqui esta mi codigo fuente, aunque segui la fuente no entendi muy bien como resolver la deformacion de la imagenes con el modulo trasform.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>###############################################################################<br /># girar_rect_keyboard.py: girar un cuadrado que esta en la pantalla con las<br />#                         teclas de direccion del teclado.<br />###############################################################################<br /><br />import pygame<br />from pygame.locals import *<br /><br />pygame.init&#40;&#41;<br /><br />screen = pygame.display.set_mode&#40;&#40;800, 600&#41;&#41;<br />pygame.display.set_caption&#40;&quot;Modulo draw &amp; modulo Transform: pruebas de rotacion&quot;&#41;<br /><br />cuadro1 = pygame.Surface&#40;&#40;128, 32&#41;&#41;<br />cuadro1.fill&#40;&#40;0, 255, 0&#41;&#41;<br /><br />tiempo = pygame.time.Clock&#40;&#41;<br />quit = False<br /><br />pygame.mouse.set_visible&#40;False&#41;<br /><br />while not quit:<br />    tiempo.tick_busy_loop&#40;60&#41;<br /><br />    for evento in pygame.event.get&#40;&#41;:<br />        if evento.type == QUIT:<br />            quit = True<br />        elif evento.type == pygame.KEYDOWN:<br />            if evento.key in &#91;pygame.K_q, pygame.K_ESCAPE&#93;:<br />                quit = True<br />            elif evento.key == pygame.K_RIGHT:<br />                cuadro1 = pygame.transform.rotate&#40;cuadro1, -1&#41;<br />            elif evento.key == pygame.K_LEFT:<br />                cuadro1 = pygame.transform.rotate&#40;cuadro1, 1&#41;<br /><br />    screen.fill&#40;&#40;0,0,0&#41;&#41;<br />    screen.blit&#40;cuadro1, &#40;400, 300&#41;&#41;<br />    pygame.display.flip&#40;&#41;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Mar 08, 2010 7:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-03-03T23:59:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3288#p3288</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3288#p3288"/>
<title type="html"><![CDATA[Auxilio!: el centro de un Surface?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3288#p3288"><![CDATA[
<!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=594&amp;highlight=rafahack+asteroides">http://www.losersjuegos.com.ar/foro/vie ... asteroides</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Mar 03, 2010 11:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-03-03T23:45:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3287#p3287</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3287#p3287"/>
<title type="html"><![CDATA[Auxilio!: el centro de un Surface?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3287#p3287"><![CDATA[
<blockquote class="uncited"><div><br />La rotación es desde el punto (0,0) de la imagen, es decir, esquina superior izquierda.<br /></div></blockquote> como sospeche desde el principio! ;(<br /><br /><br /><blockquote class="uncited"><div><br />Había por el foro un tema de rafahack en el que discutiamos todos estos temas<br /></div></blockquote> donde esta ese tema?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Mar 03, 2010 11:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-03-03T23:39:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3286#p3286</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3286#p3286"/>
<title type="html"><![CDATA[Auxilio!: el centro de un Surface?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3286#p3286"><![CDATA[
Buenas shackra:<br /><br />Siento decirte que aquí siempre hay problemas con las rotaciones en pygame.<br />La rotación es desde el punto (0,0) de la imagen, es decir, esquina superior izquierda. Además, el area de la imagen se va incrementando segun la rotación (prueba a hacer un rect.draw con el area de la imagen y verás lo que te digo).<br />Por tanto, tendrás que manejar tu mismo las rotaciones:<br />- Busca la manera de colocar correctamente la imagen en base al centro ( que estaria en (x + w/2, y + h/2) )<br />- Tienes que rotar siempre respecto a la imagen original, porque si no la imagen se distorsiona y queda fatal.<br /><br />Había por el foro un tema de rafahack en el que discutiamos todos estos temas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Mar 03, 2010 11:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-03-03T23:21:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3285#p3285</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3285#p3285"/>
<title type="html"><![CDATA[Auxilio!: el centro de un Surface?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=701&amp;p=3285#p3285"><![CDATA[
hola <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />estoy desarrollando unos ejemplos de como usar el modulo draw, ahora estoy intentando rotar una surface de un rect de 128x32, la surface se &quot;agranda&quot; y se rellena del mismo color que de la surface y queria saber si al hacer la rotacion pygame lo hace desde su centro exacto.<br /><br />no tengo el codigo fuente del ejemplo ahora mismo, pronto lo posteare.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Mar 03, 2010 11:21 pm</p><hr />
]]></content>
</entry>
</feed>