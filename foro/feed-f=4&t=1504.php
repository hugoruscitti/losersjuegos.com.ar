<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1504" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-12-27T13:26:20+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1504</id>
<entry>
<author><name><![CDATA[ROBERWEB]]></name></author>
<updated>2012-12-27T13:26:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=9060#p9060</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=9060#p9060"/>
<title type="html"><![CDATA[Re: Crear un simple juego con pygame:]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=9060#p9060"><![CDATA[
Muchas Gracias!!!. Lo siento por no haberte las dado antes, he estado muy liado... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><pre class="prettyprint">try:<br />    print &quot;Gracias!!!&quot;<br />except:<br />    exit&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2627">ROBERWEB</a> — Jue Dic 27, 2012 1:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-05T18:51:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=6893#p6893</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=6893#p6893"/>
<title type="html"><![CDATA[Re: Crear un simple juego con pygame:]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=6893#p6893"><![CDATA[
Es un error muy simple en el método de &quot;render&quot; de  &quot;text&quot;<br /><br /><pre class="prettyprint linenums">text.render&#40;screen, &quot;Hello Word!&quot;, white, &#40;0, 0&#41;&#41;</pre><br /><br />si voy al método lo que veo es:<br /><br /><pre class="prettyprint linenums">def render&#40;self, surface, text, color, pos&#41;:<br />        text = unicode&#40;text, &quot;UTF-8&quot;&#41;<br />        x, y = pos</pre><br /><br />nunca estas dibujando el texto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />eso se arregla muy facil:<br /><br /><pre class="prettyprint linenums">class Text&#40;&#41;:<br />    def __init__&#40;self, FontName = None, FontSize = 30&#41;:<br />        pygame.font.init&#40;&#41;<br />        self.font = pygame.font.Font&#40;FontName, FontSize&#41;<br />        self.size = FontSize<br />    <br />    def render&#40;self, surface, text, color, pos&#41;:<br />        text = unicode&#40;text, &quot;UTF-8&quot;&#41;<br />        x, y = pos<br />        #lo que hace la función es crear una imagen basada en el texto...<br />        ima_text = self.font.render&#40;text, 5, color&#41;<br />        #y hay que &quot;pegarla&quot; en la superficie...<br />       surface.blit&#40;ima_text, &#40;x,y&#41;&#41;</pre><br /><br />Espero que esto te sirva <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Jue Jul 05, 2012 6:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ROBERWEB]]></name></author>
<updated>2012-07-05T17:06:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=6890#p6890</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=6890#p6890"/>
<title type="html"><![CDATA[Re: Crear un simple juego con pygame:]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=6890#p6890"><![CDATA[
No se me imprime el texto en la pantalla, ¿me podrian ayudar?... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><br /><pre class="prettyprint">#!/usr/bin/env python<br /># -*- coding: utf-8 -*- <br /><br /># ---------------------------<br /># Importacion de los módulos<br /># ---------------------------<br /><br />import pygame<br />from pygame.locals import *<br />import os<br />import sys<br />import wx<br />import time<br /><br /># -----------<br /># Constantes<br /># -----------<br /><br />SCREEN_WIDTH = 1000<br />SCREEN_HEIGHT = 600<br />IMG_DIR = &quot;imagenes&quot;<br />app = wx.App&#40;&#41;<br />pygame.init&#40;&#41;<br /><br />def load_image&#40;nombre, dir_imagen, alpha=False&#41;:<br />    # Encontramos la ruta completa de la imagen<br />    ruta = os.path.join&#40;dir_imagen, nombre&#41;<br />    try:<br />image = pygame.image.load&#40;ruta&#41;<br />    except:<br />wx.MessageBox&#40;&#39;Error al cargar la imagen!&#39;, &#39;Error &#39; + ruta, style = wx.YES_NO | wx.ICON_ERROR&#41;<br />sys.exit&#40;1&#41;<br />    # Comprobar si la imagen tiene &quot;canal alpha&quot; &#40;como los png&#41;<br />    if alpha == True:<br /> image = image.convert_alpha&#40;&#41;<br />    else:<br /> image = image.convert&#40;&#41;<br />    return image<br /><br />class Text&#40;&#41;:<br />def __init__&#40;self, FontName = None, FontSize = 30&#41;:<br />pygame.font.init&#40;&#41;<br />self.font = pygame.font.Font&#40;FontName, FontSize&#41;<br />self.size = FontSize<br /><br />def render&#40;self, surface, text, color, pos&#41;:<br />text = unicode&#40;text, &quot;UTF-8&quot;&#41;<br />x, y = pos<br /><br /><br />def main&#40;&#41;:<br />    pygame.init&#40;&#41;<br />    # creamos la ventana y le indicamos un titulo:<br />    text = Text&#40;&#41;<br />    dinero = 100<br />    text = Text&#40;&#41;<br />    size = width, height = 640, 480<br />    screen = pygame.display.set_mode&#40;size&#41;<br />    screen = pygame.display.set_mode&#40;&#40;SCREEN_WIDTH,SCREEN_HEIGHT&#41;&#41;<br />    pygame.display.set_caption&#40;&quot;Como_La_Vida_Misma&quot;&#41;<br />    <br />    white = &#40;255, 255, 255&#41;<br />    color = &#40;0, 0, 0&#41;<br /><br />    pygame.mixer.init&#40;&#41;<br />    pygame.mixer.music.load&#40;os.path.realpath&#40;&quot;Song_Storms.mp3&quot;&#41;&#41;<br />    pygame.mixer.music.play&#40;&#41;<br />    <br />    while True:<br />    fondo = load_image&#40;&quot;tienda2.png&quot;, IMG_DIR, alpha=False&#41;<br />    pass<br />    for event in pygame.event.get&#40;&#41;:<br />    if event.type == pygame.QUIT:<br />sys.exit&#40;&#41;<br />    elif event.type == pygame.KEYDOWN:<br />if event.key == pygame.K_RETURN:<br />    sys.exit&#40;&#41;<br />if event.key == pygame.K_a:<br />print &quot;-0,50 euros&quot; <br />print &quot;Has comprado agua embotellada 50cl&quot;<br />dinero = dinero - 0.5<br />print &quot;Te queda:&quot;<br />print dinero<br />if dinero &lt;50 and dinero &gt;49:<br />print &quot;Te queda la mitad del dinero que tenias al prindcipio&quot;<br />if dinero &lt;10:<br />print &quot;Te estas gastando todo el dinero&quot;<br />if event.key == pygame.K_b:<br />print &quot;-1,00 euros&quot;<br />print &quot;Has comprado refresco 50cl&quot;<br />dinero = dinero - 1<br />print &quot;Te queda:&quot;<br />print dinero<br />if dinero &lt;50 and dinero &gt;30:<br />print &quot;Te queda la mitad del dinero que tenias al prindcipio&quot;<br />if dinero &lt;10:<br />print &quot;Te estas gastando todo el dinero&quot;<br />if event.key == pygame.K_c:<br />print &quot;-1,00 euros&quot;<br />print &quot;Has comprado agua embotellada 1l&quot;<br />dinero = dinero - 1<br />print &quot;Te queda:&quot;<br />print dinero<br />if dinero &lt;50 and dinero &gt;30:<br />print &quot;Te queda la mitad del dinero que tenias al prindcipio&quot;<br />if dinero &lt;10:<br />print &quot;Te estas gastando todo el dinero&quot;<br />if event.key == pygame.K_d:<br />print &quot;-1,50 euros&quot;<br />print &quot;Has comprado refresco 1l&quot;<br />dinero = dinero - 1.5<br />print &quot;Te queda:&quot;<br />print dinero<br />if dinero &lt;50 and dinero &gt;30:<br />print &quot;Te queda la mitad del dinero que tenias al prindcipio&quot;<br />if dinero &lt;10:<br />print &quot;Te estas gastando todo el dinero&quot;<br />    <br />    #actualizamos la pantalla<br />            screen.blit&#40;fondo, &#40;0, 0&#41;&#41;<br />    text.render&#40;screen, &quot;Hello Word!&quot;, white, &#40;0, 0&#41;&#41;<br />    pygame.display.flip&#40;&#41;<br /><br />if __name__ == &quot;__main__&quot;:<br />     main&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2627">ROBERWEB</a> — Jue Jul 05, 2012 5:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ROBERWEB]]></name></author>
<updated>2012-07-04T16:21:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=6889#p6889</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=6889#p6889"/>
<title type="html"><![CDATA[Crear un simple juego con pygame:]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1504&amp;p=6889#p6889"><![CDATA[
¿Me pueden ayudar? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2627">ROBERWEB</a> — Mié Jul 04, 2012 4:21 pm</p><hr />
]]></content>
</entry>
</feed>