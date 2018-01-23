<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=378" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-09-15T22:31:41+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=378</id>
<entry>
<author><name><![CDATA[GsusKrist]]></name></author>
<updated>2008-09-15T22:31:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=378&amp;p=1663#p1663</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=378&amp;p=1663#p1663"/>
<title type="html"><![CDATA[por ke no funciona el colorkey??]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=378&amp;p=1663#p1663"><![CDATA[
Hey Brother tenias toda la razón el error estába en la funcion  <br /><br />Muchacs gracias por su colavoracion <br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><br />Bendiciones.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1973">GsusKrist</a> — Lun Sep 15, 2008 10:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-09-15T07:57:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=378&amp;p=1662#p1662</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=378&amp;p=1662#p1662"/>
<title type="html"><![CDATA[por ke no funciona el colorkey??]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=378&amp;p=1662#p1662"><![CDATA[
Creo que el fallo está en la función <span style="font-style: italic">cargar_imagen</span>:<dl class="codebox"><dt>Code: </dt><dd><code>def cargar_imagen&#40;name, colorkey = None &#41;:<br />    Archivo = os.path.join&#40;'Imagenes', name&#41;<br />    surface = pygame.image.load&#40;Archivo&#41;<br />    if colorkey is None:<br />        return surface.convert&#40;&#41;<br />    else:<br />        if colorkey is -1:<br />            colorkey = surface.get_at&#40;&#40;0,0&#41;&#41;<br />        surface.set_colorkey&#40;colorkey, RLEACCEL&#41;<br />        return surface.convert_alpha&#40;&#41;</code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Sep 15, 2008 7:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GsusKrist]]></name></author>
<updated>2008-09-15T06:32:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=378&amp;p=1661#p1661</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=378&amp;p=1661#p1661"/>
<title type="html"><![CDATA[por ke no funciona el colorkey??]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=378&amp;p=1661#p1661"><![CDATA[
hace tiempo intenté hacer un ejercicio de como cargar un fondo y mover una imagen, no logro por ke esta imagen se dibuja sin tener en cuenta el colorkey o sea se ve el recuadro negro ke devería ser transparente en este caso; aki dejo el codigo a ver si me pueden ayudar:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame, os, sys, math, random<br />from pygame.locals import *<br /><br />#funcioncita para cargar la imagen<br /><br />def cargar_imagen&#40;name, colorkey = None &#41;:<br />    Archivo = os.path.join&#40;'Imagenes', name&#41;<br />    return pygame.image.load&#40;Archivo&#41;.convert&#40;&#41;<br />    if colorkey is not None:<br />        if colorkey is -1:<br />            colorkey = surface.get_at&#40;&#40;0,0&#41;&#41;<br />        surface.set_colorkey&#40;colorkey, RLEACCEL&#41;<br />    return surface.convert_alpha&#40;&#41;<br />#programa principal<br />def main&#40;&#41;:<br />    pygame.init&#40;&#41;   <br /><br />    screen = pygame.display.set_mode&#40; &#40;375,456&#41; &#41;<br />    <br />    background = cargar_imagen&#40;&quot;fondo.bmp&quot;&#41;<br /><br />    sprite = cargar_imagen&#40; &quot;personaje.bmp&quot;, -1 &#41; '''se supone ke el colorkey aki es distinto de None y además es igual a -1, por lo tanto devería usar el colorkey situado en la region 0,0 pero no lo hace :&#40; '''<br /><br />    spriteRect = sprite.get_rect&#40;&#41;<br /><br />    spriteRect.centerx = &#40;287&#41;<br />    spriteRect.centery = &#40;228&#41;<br /><br />    screen.blit&#40; background, &#40;0,0&#41; &#41;<br />    screen.blit&#40; sprite, spriteRect &#41;<br /><br />    pygame.display.flip&#40;&#41;<br /><br />    while 1:<br />        pygame.event.pump&#40;&#41;<br />        keyinput = pygame.key.get_pressed&#40;&#41;<br />        <br />        if keyinput&#91;K_ESCAPE&#93; or pygame.event.peek&#40;QUIT&#41;:<br />            break<br /><br />        if keyinput&#91;K_LEFT&#93;:<br />            spriteRect.centerx -= 2<br />        <br />        if keyinput&#91;K_RIGHT&#93;:<br />            spriteRect.centerx += 2<br /><br />        if keyinput&#91;K_UP&#93;:<br />            spriteRect.centery -= 2      <br /><br />        if keyinput&#91;K_DOWN&#93;:<br />            spriteRect.centery += 2<br />        if  spriteRect.centery &gt; 447:<br />            spriteRect.centery = 0<br />        if  spriteRect.centerx &gt; 367:<br />            spriteRect.centerx = 0<br />        if  spriteRect.centery &lt;= 10:<br />            spriteRect.centery = 10<br />        if  spriteRect.centerx &lt;= 10:<br />            spriteRect.centerx = 10<br />        <br /><br />        screen.blit&#40; background, &#40;0,0&#41; &#41;<br />        screen.blit&#40; sprite, spriteRect &#41;<br /><br />        pygame.display.flip&#40;&#41;<br /><br />if __name__ == '__main__': main&#40;&#41;<br /></code></dd></dl><br />Muchas gracias de antemano  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1973">GsusKrist</a> — Lun Sep 15, 2008 6:32 am</p><hr />
]]></content>
</entry>
</feed>