<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1558" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-10-03T07:41:47+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1558</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-10-03T07:41:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7129#p7129</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7129#p7129"/>
<title type="html"><![CDATA[Re: Genrando relampagos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7129#p7129"><![CDATA[
<blockquote><div><cite>ClRg escribió:</cite><br />Me imagino un juego de plataformas con esta ambientación de fondo, estaría genia! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /></div></blockquote><br /><br />No lo había visto de esa forma... pero suena interesante <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Oct 03, 2012 7:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ClRg]]></name></author>
<updated>2012-10-03T02:10:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7127#p7127</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7127#p7127"/>
<title type="html"><![CDATA[Re: Genrando relampagos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7127#p7127"><![CDATA[
Lo estuve probando y me encanto!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  Como vos decís, es verdad que algunos parecen simplemente lineas, pero el efecto de &quot;flash&quot; que produce medio que ayuda a que se vea mas realista. Me imagino un juego de plataformas con esta ambientación de fondo, estaría genia!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2393">ClRg</a> — Mié Oct 03, 2012 2:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-10-01T21:31:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7126#p7126</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7126#p7126"/>
<title type="html"><![CDATA[Genrando relampagos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7126#p7126"><![CDATA[
Entre los efectos que existe para simular clima esta la lluvia, pero ¿Qué es una buena tormenta sin relámpagos?<br /><br />Por eso, diseñe este miniejemplo de lluvia con relámpagos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br /><pre class="prettyprint">#!/usr/bin/env python<br /># -*- coding: utf-8 -*-<br />import pygame<br />from random import *<br /><br />ANCHO = 320<br />ALTO = 320<br /><br />#una simple gota de lluvia...<br />class Gota&#40;&#41;:<br />    def __init__&#40;self, pos, vel&#41;:<br />        self.x, self.y = pos<br />        self.dy = vel<br />    def update&#40;self&#41;:<br />        self.y += self.dy<br />        if self.y &gt; ALTO:<br />            self.y = 0<br />            self.x = randrange&#40;1,ANCHO-1&#41;<br />    def dibuja&#40;self,pantalla&#41;:<br />        pantalla.set_at&#40;&#40;self.x,self.y&#41;,&#40;200,200,200&#41;&#41;<br /><br /><br />#esta clase genera el relámpago como si fuera un árbol con hijos aleatorios...<br />class nodorayo&#40;&#41;:<br />    def __init__&#40;self,pos,recorrido&#41;:<br />        self.x, self.y = pos<br />        self.recorrido = recorrido<br />        #un máximo de 3 hijos...<br />        num_hijos = &#40;randrange&#40;1,12-recorrido&#41;%3&#41;<br />        self.hijos = []<br />        #recorrido nos marca la profundidad que tendrá el árbol...<br />        if self.recorrido &gt; 0:<br />            for i in xrange&#40;num_hijos&#41;:<br />                self.hijos.append&#40;self.genera_hijo&#40;&#41;&#41;<br />        self.cont = 0<br />    def genera_hijo&#40;self&#41;:<br />        posx = self.x+randrange&#40;ANCHO/10&#41;*choice&#40;[-1,1,-2,2]&#41;<br />        posy = self.y+ALTO/10<br />        return nodorayo&#40;&#40;posx,posy&#41;, self.recorrido-1&#41;<br />    def dibuja&#40;self, pantalla&#41;:<br />        for hijo in self.hijos:<br />            pygame.draw.aaline&#40;pantalla,&#40;0,0,250&#41;,&#40;self.x,self.y&#41;,&#40;hijo.x,hijo.y&#41;,5&#41;<br />            pygame.draw.aaline&#40;pantalla,&#40;250,250,250&#41;,&#40;self.x,self.y&#41;,&#40;hijo.x,hijo.y&#41;,1+self.cont&#41;<br />            hijo.dibuja&#40;pantalla&#41;<br />            #el siguiente if es para poder dibujarlo por fases<br />            #if self.cont &gt; 1:<br />            #    hijo.dibuja&#40;pantalla&#41;<br />        self.cont+=1    <br /><br />def main&#40;&#41;:<br />    pygame.init&#40;&#41;<br />    screen = pygame.display.set_mode&#40;&#40;ANCHO,ALTO&#41;&#41;<br />    pygame.display.set_caption&#40;&quot;Relámpagos&quot;&#41;<br />    delay_frames = &#40;1000/25&#41;<br />    hacer = 1<br />    #para la lluvia...<br />    lluvia = []<br />    for i in xrange&#40;ANCHO&#41;:<br />        g = Gota&#40;&#40;randrange&#40;1,ANCHO-1&#41;,randrange&#40;1,ALTO&#41;&#41;,randrange&#40;12,15&#41;&#41;<br />        lluvia.append&#40;g&#41;<br />    for i in xrange&#40;10&#41;:<br />        for gota in lluvia:<br />            gota.update&#40;&#41;<br />    #un relámpago...<br />    relampago = nodorayo&#40;&#40;randrange&#40;ANCHO&#41;,0&#41;,10&#41;<br />    cont = 0<br />    while hacer:<br />        pygame.time.delay&#40;delay_frames&#41;<br />        for event in pygame.event.get&#40;&#41;:<br />            if event.type == pygame.QUIT:<br />                hacer = 0<br />        screen.fill&#40;&#40;0,0,0&#41;&#41;<br />        #esto crea a los relámpagos...<br />        if cont &lt; 2:<br />            screen.fill&#40;&#40;200,200,200&#41;&#41;<br />        if cont &lt; 16:<br />            relampago.dibuja&#40;screen&#41;<br />        if cont &gt; 30:<br />            cont = 0<br />            #cada 30 ciclos se genra un nuevo rayo....<br />            relampago = &#40;nodorayo&#40;&#40;randrange&#40;ANCHO&#41;,0&#41;,10&#41;&#41;<br />        #esto actualiza y dibuja las gotas de lluvia...<br />        for gota in lluvia:<br />            gota.update&#40;&#41;<br />            gota.dibuja&#40;screen&#41;<br />        cont+=1<br />        pygame.display.update&#40;&#41;<br />    pygame.quit&#40;&#41;<br /><br />main&#40;&#41;</pre><br /><br />Mostraría una imagen... pero los relámpagos son muy rápidos XD<br />Solo creo que debo comentar el hecho de que no todos los relámpagos generados son increíbles (algunos parecerán una simple linea  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> ), pero son bastante realistas hasta cierto punto  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Oct 01, 2012 9:31 pm</p><hr />
]]></content>
</entry>
</feed>