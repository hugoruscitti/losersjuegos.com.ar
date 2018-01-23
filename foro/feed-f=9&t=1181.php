<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1181" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-15T22:58:01+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1181</id>
<entry>
<author><name><![CDATA[daryo]]></name></author>
<updated>2011-06-15T22:58:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1181&amp;p=5664#p5664</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1181&amp;p=5664#p5664"/>
<title type="html"><![CDATA[menu en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1181&amp;p=5664#p5664"><![CDATA[
<dl class="codebox"><dt>Code: </dt><dd><code>#!/usr/bin/env python<br /># vim: set fileencoding=utf-8 :<br />import pygame<br />import sys<br />from pygame.locals import *<br /> <br />class mouse(pygame.sprite.Sprite):<br />        def __init__(self):<br />      #clase de la mira que interactuara con el menu o texto<br />                pygame.sprite.Sprite.__init__(self)<br />                self.img = pygame.image.load(&quot;mira.bmp&quot;)<br />                # desaparece todo lo blanco y lo hace tranparente<br />      self.img.set_colorkey((255,255,255))<br />                self.rect = self.img.get_rect()<br />      self.coordx=100<br />      self.coordy=100<br /> <br />def main():<br />   pygame.init()<br />   pantalla = pygame.display.set_mode((480,457),0)<br />   pygame.display.set_caption(&quot;future caos&quot;)<br />   fondo = pygame.image.load(&quot;zombies.jpg&quot;)<br />   fuente = pygame.font.Font(&quot;Death.ttf&quot;,40)<br />   text = &quot;FUTURE CAOS&quot;<br />   menu1= &quot;Jugar&quot;<br />   mensaje = fuente.render(text, 2, (255, 0, 0))<br />        mensaje2 = fuente.render(menu1,2, (255,0,0))<br />   gato = mouse()<br />   cancion = pygame.mixer.Sound(&quot;asaw.ogg&quot;)<br />        cancion.play()<br />   # coor seran las coordenadas de los disparos circulos negros<br />   coor={}<br />        n=0<br />   # cuando dispara se vuelve verdadero y si ademas lleva 10 bucles o frames n=10 pone la mira como antes del disparo<br />        xsd=False<br />        color= (0,0,0)<br />        reloj = pygame.time.Clock()<br /> <br />   while 1:<br />        # esta parte es para producir el efecto de la mira en movimiento por el disparo<br />                  n+=1<br />                  if n == 10 and xsd == True:<br />                          gato.coordy+=10<br />                          xsd=False<br />        pos_mouse = pygame.mouse.get_pos()<br />        mov_mouse = pygame.mouse.get_rel()<br />        click = pygame.mouse.get_pressed()<br />                  # el mouse se vuelve invisible y puedo poner un objeto como la mira<br />                 pygame.mouse.set_visible(0)<br />        for event in pygame.event.get():<br />             if event.type == pygame.QUIT:<br />                sys.exit(0)<br />        if mov_mouse&#91;0&#93;   !=0:     <br />                          gato.coordx=pos_mouse&#91;0&#93;<br />                          gato.coordy=pos_mouse&#91;1&#93;<br />                  if click&#91;0&#93; != 0:<br />              if reloj.tick() &gt; 250:<br />                              pygame.mixer.init()<br />                         pygame.mixer.music.load(&quot;mg42_shoot.wav&quot;)<br />                                 pygame.mixer.music.play()<br />                                 jax = pos_mouse&#91;0&#93; + 25<br />               jay = pos_mouse&#91;1&#93; + 28<br />                coor&#91;n&#93;=(jax,jay)<br />                                 # esta parte es para producir el efecto de la mira en movimiento por el disparo<br />                gato.coordy -=10<br />                xsd=True<br />                n=0<br />             pantalla.blit(fondo,(0,0))<br />             pantalla.blit(mensaje,(100,20))<br />             pantalla.blit(gato.img,(gato.coordx,gato.coordy))<br />                  pantalla.blit(mensaje2,(200,90))<br />        # cada disparo crea una lista con las coordenadas del disparo en el diccionario<br />        for dispa in coor:<br />         disparo = coor&#91;dispa&#93;<br />                     pygame.draw.circle(pantalla, color, (disparo&#91;0&#93;,disparo&#91;1&#93;),3,0)<br />                  pygame.display.flip()<br /> <br />main()</code></dd></dl><br /><!-- m --><a class="postlink" href="http://www.subirimagenes.com/imagen-11-6334731.html">http://www.subirimagenes.com/imagen-11-6334731.html</a><!-- m --> asi se ve <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br />hola estoy haciendo un menu en pygame y la idea es que cuando dispare en un titulo se active una colision y se ejecuto un comando que abra e programa con algun parametro pero tengo problemas con las colisiones algun consejo?, gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2452">daryo</a> — Mié Jun 15, 2011 10:58 pm</p><hr />
]]></content>
</entry>
</feed>