<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=960" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-12-13T09:43:37+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=960</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-12-13T09:43:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4581#p4581</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4581#p4581"/>
<title type="html"><![CDATA[Re: Un par de dudas con pygame.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4581#p4581"><![CDATA[
jajajaj tonto de mi, por no acordarme de pygame<br /><br />Espero que ahora te sea de más ayuda:<br /><br />el problema radica en como lo controlas:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>            if ((event.button==1)and(pause==0)):<br />                pause=1<br />                print pause<br />            if ((event.button==1)and(pause==1)):<br />                pause=0<br />                print pause<br /></code></dd></dl><br /><br />ejecuta esto mentalmente un momento:<br /><br />- pause se inicializa 0, por lo que cuando pulses entrará en el primer if<br />- pause es 1<br />- en el segundo if, el botón sigue pulsado (no hemos cambiado de evento aún), pero como hemos cambiado el pause (ahora es 1), vuelve a entrar y lo pasa a 0.<br /><br />Creo que te dejo a ti solucionarlo, ya que es tan tonto como evitar que entre a los dos a la vez<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Dic 13, 2010 9:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2010-12-13T04:35:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4579#p4579</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4579#p4579"/>
<title type="html"><![CDATA[Re: Un par de dudas con pygame.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4579#p4579"><![CDATA[
De hecho, cuando lo ejecuto, todo va de lo lindo, por eso, para asegurarme que el código se ejecutara en esa parte incluí que me imprimiera el valor de pause, pero, esta es la salida <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_arrow.gif" alt=":arrow:" title="Arrow" /> <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>1<br />0<br /></code></dd></dl> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_exclaim.gif" alt=":!:" title="Exclamation" /> <br /><br />!!!Lo que quiere decir que por un clic realiza la comparación 2 veces!!!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> <br /><br />Todo ocurre tan rápido que no lo vemos funcionar.<br />¿Por que sera que sucede eso?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /> <br /><br />[edito]<br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_idea.gif" alt=":idea:" title="Idea" /> <br /><br />He modificado la sección de la comparación y funciona, solo con el problema que para pausar se presiona clic izquierdo, y sale del pause presionado la tecla p.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_arrow.gif" alt=":arrow:" title="Arrow" /> <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>        if event.type == MOUSEBUTTONDOWN:<br />            if ((event.button==1)and(pause==0)):<br />                pause=1<br />                print pause<br />        if event.type == KEYDOWN:<br />            if ((event.key == K_p)and(pause==1)):<br />                pause=0<br />                print pause<br /></code></dd></dl><br /><br />En ese caso la pregunta cambia a... <br />¿Como podemos pausar usando el mismo evento?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Dic 13, 2010 4:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-12-13T01:55:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4578#p4578</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4578#p4578"/>
<title type="html"><![CDATA[Re: Un par de dudas con pygame.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4578#p4578"><![CDATA[
no estoy seguro, pero creo que si pulsas el boton de enmedio (la rueda), tu código funcionará!! MAGIA!!<br /><br />por lo general los indices empiezan en 0, por lo que quizás debas comprobar que el botón es 0, no 1<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Dic 13, 2010 1:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2010-12-13T01:43:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4577#p4577</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4577#p4577"/>
<title type="html"><![CDATA[Un par de dudas con pygame.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=960&amp;p=4577#p4577"><![CDATA[
Hola, buenas<br />El problema que tengo es con el pause.<br /><br />Tengo entendido que en otros para pausar con un evento el pseudocódigo es algo como:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>pause falso<br />while jugar:<br />    if evento y pasue falso:<br />        pause verdadero<br />    if evento y pause verdadero:<br />        pause falso<br />    if pause falso:<br />        actualizamos las posiciones de los sprites<br />    dibujamos los sprites<br /></code></dd></dl><br /><br />Pero cuando lo paso a pygame, no pasa nada XD, e aquí el código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#!/usr/bin/env python<br /># -*- coding: utf-8 -*-<br />import os<br />import pygame<br />from pygame.locals import *<br />import sys<br />ALTO = 500<br />ANCHO = 650<br />class pelota(pygame.sprite.Sprite):<br />    &quot;Initialpos = possiciones 'x' y 'y' iniciales&quot;<br />    &quot;medidas = ancho y alto&quot;<br />    &quot;change = cambio de possiciones 'x' y 'y'&quot;<br />    &quot;nombre de la imagen&quot;<br />    def __init__(self, initialpos, medidas, change, imagen):<br />        (self.posx, self.posy)=initialpos<br />        (self.alto,self.ancho)=medidas<br />        (self.dx, self.dy)=change<br />        self.imagen = imagen<br />        pygame.sprite.Sprite.__init__(self)<br />        (self.image, self.rect) = self.load_image(self.imagen, True)<br />    def load_image(self, name, colorkey=False):<br />        fullname = os.path.join(&quot;datos&quot;, name)<br />        #comprobamos si existe la imagen<br />        try:<br />            image = pygame.image.load(fullname)<br />        except pygame.error, message:<br />            print 'No se puede cargar la imagen: ', fullname<br />            raise SystemExit, message<br />        #combierte la imagen para que pygame la pueda usar<br />        image = image.convert()<br />        #En este punto asignamos el colorkey<br />        if colorkey:<br />            colorkey = image.get_at((0, 0))<br />            image.set_colorkey(colorkey, RLEACCEL)<br />        #devuelve la imagen y la recta de la imagen<br />        return (image, image.get_rect())<br />    def change(self, dx, dy):<br />        #lo que crea una funcion que cambia la posicion<br />        self.posx=self.posx+dx<br />        self.posy=self.posy+dy<br />        #lo que hace que rebote la pelota<br />        if (self.posx &gt;= self.ancho)or(self.posx &lt;= 0):<br />            self.dx = -self.dx<br />        if (self.posy &gt;= self.alto)or(self.posy&lt;=0):<br />            self.dy = -self.dy<br />        return (self.posx,self.posy)<br />    def update(self):<br />        posicion=self.change(self.dx, self.dy)<br />        self.rect.center = posicion<br />        <br />def Main():<br />    pygame.init()<br />    #pygame.font.init()<br />    # creamos la ventana y le indicamos un titulo:<br />    size = (ALTO,ANCHO)<br />    screen = pygame.display.set_mode((ANCHO,ALTO))<br />    pygame.display.set_caption(&quot;Ejemplo&quot;)<br />    sprites = pygame.sprite.RenderClear()<br />    inicial = (0,0)<br />    cambio = (5,10)<br />    pygame.mouse.set_visible(True)<br />    pelotita = pelota(inicial,size,cambio,'pelota.png')<br />    sprites.add(pelotita)<br />    clock = pygame.time.Clock()<br />    # el bucle principal del juego<br />    Escojer=True<br />    pause = 0<br />    while Escojer:<br />        clock.tick(75)<br />        # Posibles entradas del teclado y mouse<br />        for event in pygame.event.get():<br />            if event.type == pygame.QUIT:<br />                Escojer=False<br />                sys.exit()<br />            elif event.type == KEYDOWN and event.key == K_ESCAPE:<br />                Escojer=False<br />        if event.type == MOUSEBUTTONDOWN:<br />            if ((event.button==1)and(pause==0)):<br />                pause=1<br />                print pause<br />            if ((event.button==1)and(pause==1)):<br />                pause=0<br />                print pause<br />        screen.fill((0,0,0))<br />        if pause==0:<br />            sprites.update()<br />        sprites.draw(screen)<br />        pygame.display.flip()<br />        pygame.time.delay(15)<br /><br />if __name__ == &quot;__main__&quot;:<br />    Main()<br /></code></dd></dl><br /><br />Y si se lo preguntaban ya e utilizado time.waith (creo que asi se escribe), pero no me da los resultados que espero XD<br />¿Alguien sabe como hacerlo? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Dic 13, 2010 1:43 am</p><hr />
]]></content>
</entry>
</feed>