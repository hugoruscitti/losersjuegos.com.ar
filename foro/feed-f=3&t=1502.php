<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1502" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-08-04T01:51:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1502</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-08-04T01:51:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1502&amp;p=6992#p6992</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1502&amp;p=6992#p6992"/>
<title type="html"><![CDATA[Re: Ayufa error AttributeError: 'module' object has no attri]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1502&amp;p=6992#p6992"><![CDATA[
podrias pegar el mensaje de la excepcion completa?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Ago 04, 2012 1:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nico.decara]]></name></author>
<updated>2012-06-30T20:00:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1502&amp;p=6886#p6886</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1502&amp;p=6886#p6886"/>
<title type="html"><![CDATA[Ayufa error AttributeError: 'module' object has no attribute]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1502&amp;p=6886#p6886"><![CDATA[
Hola, me estoy volviendo loco con ese error, lei que se soluciona cambiando el nombre del .py pero ya lo hice y me sigue pasando lo mismo, cambie el nombre de las funciones tambien y nada! ya no se que hacer. El error se produce cuando en el menú principal se aprieta F1 o F2. Otro error que noto es que hay que apretar 2 veces la tecla del opción deseada para que se ejecute el modulo correspondiente. Acá les dejo el codigo, espero que me puedan ayudar Gracias!<br /><br />main.py:<br /><br /><pre class="prettyprint">import pygame, datos<br />from pygame.locals import *<br />pygame.init&#40;&#41;<br /><br />class Menu:<br />    def __init__&#40;self&#41;:<br />        self.salir= False<br />        self.opciones = [&#40;&quot;F1: Jugar&quot;&#41;,&#40;&quot;F2: Como jugar?&quot;&#41;,&#40;&quot;F3: Salir&quot;&#41;]<br />        self.font = pygame.font.Font&#40;&#39;dejavu.ttf&#39;, 20&#41;<br />        self.seleccionado = False<br />        self.mantiene_pulsado = False<br />        self.total = len&#40;self.opciones&#41;<br />        <br />    def imprimir&#40;self,pantalla&#41;:<br />        #Imprime texto del menu<br />        total = self.total<br />        indice = 0<br />        altura_de_opcion = 30<br />        x = 270<br />        y = 450<br />        <br />        for &#40;titulo&#41; in self.opciones:<br />            color = &#40;0, 0, 0&#41;<br />            imagen = self.font.render&#40;titulo, 1, color&#41;<br />            posicion = &#40;x, y + altura_de_opcion * indice&#41;<br />            indice += 1<br />            pantalla.blit&#40;imagen, posicion&#41;<br />    def run&#40;self&#41;:<br />        <br />        menu.imprimir&#40;pantalla&#41;<br />        while not salir:<br />            for e in pygame.event.get&#40;&#41;:<br />                if e.type == QUIT:<br />                    salir= True<br />                elif e.type == pygame.KEYDOWN:<br />                    if e.key == K_F1:<br />                        datos.inicializar&#40;pantalla&#41;<br />                        i=ImagenesMenu&#40;&#41;<br />                        ImagenesMenu.render&#40;&#41;                        <br />                    elif e.key == K_F2:<br />                        datos.opciones&#40;&#41;<br />                    elif e.key == K_F3:<br />                        salir_juego&#40;&#41;<br />                        #Limpiar pantalla<br />            menu.imprimir&#40;pantalla&#41;<br />            pygame.display.flip&#40;&#41;                 <br />class Detalles:<br />    def __init__&#40;self,detalles&#41;:<br />        self.detalles= detalles<br />        self.font = pygame.font.Font&#40;&#39;dejavu.ttf&#39;, 20&#41;<br />        self.jugador= detalles[0]<br />        self.puntos= detalles[1]<br />        self.vida= detalles[2]<br />        self.nivel= detalles[3]<br />        self.total = len&#40;detalles&#41;<br />    <br />    def mostrar_detalles&#40;self,pantalla&#41;:<br />        indice= 0<br />        ok= 0<br />        x=530<br />        y=25<br />        for &#40;titulo&#41; in self.detalles:<br />            indice+=1<br />            if indice &lt; 3:<br />                color = &#40;255,255,255&#41;<br />                imagen = self.font.render&#40;titulo, 1, color&#41;<br />                posicion = &#40;x, y&#41;<br />                y= y+75<br />                pantalla.blit&#40;imagen, posicion&#41;<br />            else:<br />                if ok == 0:<br />                    color = &#40;255,255,255&#41;<br />                    imagen = self.font.render&#40;titulo, 1, color&#41;<br />                    y= y+50<br />                    posicion = &#40;x, y&#41;<br />                    pantalla.blit&#40;imagen, posicion&#41;<br />                    ok+=1<br />                else:<br />                    color = &#40;255,255,255&#41;<br />                    imagen = self.font.render&#40;titulo, 1, color&#41;<br />                    y= y+75<br />                    posicion = &#40;x, y&#41;<br />                    pantalla.blit&#40;imagen, posicion&#41;<br /><br />class ImagenesMenu&#40;&#41;:<br />    def __init__&#40;self&#41;:<br />        self.fondopuntajes= pygame.image.load&#40;&quot;textura.jpg&quot;&#41;<br />        self.separador= pygame.image.load&#40;&quot;separador.jpg&quot;&#41;<br />        self.separador2= pygame.image.load&#40;&quot;separador2.jpg&quot;&#41;<br />        self.imagen= pygame.image.load&#40;&quot;metal.jpg&quot;&#41;<br />        self.x=500<br />        self.y=0<br />    def render&#40;self,pantalla&#41;:<br />        pantalla.blit&#40;self.imagen,&#40;self.y,self.y&#41;&#41;<br />        pantalla.blit&#40;self.fondopuntajes,&#40;self.x,self.y&#41;&#41;<br />        pantalla.blit&#40;self.separador,&#40;self.x,self.y&#41;&#41;<br />        pantalla.blit&#40;self.separador2,&#40;self.x+26,self.y&#41;&#41;<br />        pantalla.blit&#40;self.separador2,&#40;self.x+26,self.y+200&#41;&#41;<br />        pantalla.blit&#40;self.separador2,&#40;self.x+26,self.y+400&#41;&#41; <br />    <br />class ImagenesInicio&#40;&#41;:<br />    def __init__&#40;self&#41;:<br />        self.fondo= pygame.image.load&#40;&quot;fondo.jpg&quot;&#41;<br />        self.logo= pygame.image.load&#40;&quot;logo2.png&quot;&#41;<br />    def render&#40;self&#41;:<br />        pantalla.blit&#40;self.fondo,&#40;0,0&#41;&#41;  <br />        pantalla.blit&#40;self.logo,&#40;200,150&#41;&#41;<br /><br />class OpcionesJuego&#40;&#41;:<br />    def __init__&#40;self&#41;:<br />        self.imagen=pygame.image.load&#40;&quot;comojugar.png&quot;&#41;             <br />    def render&#40;self&#41;:<br />        pantalla.blit&#40;self.imagen,&#40;0,0&#41;&#41;<br />    <br />def salir_juego&#40;&#41;:<br />    import sys<br />    sys.exit&#40;&#41;<br /><br />#Configura pantalla<br />VENTANAALTO= 600<br />VENTANAANCHO= 700<br />pantalla= pygame.display.set_mode &#40;&#40;VENTANAANCHO,VENTANAALTO&#41;,0&#41;<br />pygame.display.set_caption&#40;&quot;Aprendiendo a Contar!&quot;&#41;<br /><br />inicial= ImagenesInicio&#40;&#41;<br />pygame.font.init&#40;&#41;<br />menu=Menu&#40;&#41;<br /><br />salir= False<br />menu.imprimir&#40;pantalla&#41;<br />inicial.render&#40;&#41;<br />while not salir:<br />    for e in pygame.event.get&#40;&#41;:<br />        if e.type == QUIT:<br />            salir= True<br />        elif e.type == pygame.KEYDOWN:<br />            if e.key == K_F1:<br />                datos.setear&#40;pantalla&#41;<br />            elif e.key == K_F2:<br />                print &quot; ejecuta las opciones&quot;<br />                #datos.opciones&#40;&#41;<br />            elif e.key == K_F3:<br />                salir_juego&#40;&#41;<br />                #Limpiar pantalla<br />    menu.imprimir&#40;pantalla&#41;<br />    pygame.display.flip&#40;&#41;<br />    #pygame.time.delay&#40;5&#41;</pre><br /><br />datos.py:<br /><br /><pre class="prettyprint">import pygame, main<br />from pygame.locals import *<br /><br />def setear&#40;pantalla&#41;:<br />    imagen=pygame.image.load&#40;&quot;previa.png&quot;&#41;<br />    imagen.blit&#40;imagen,&#40;0,0&#41;&#41;<br />    salir= False<br />    while not salir:<br />        for e in pygame.event.get&#40;&#41;:<br />            if e.type == QUIT:<br />                salir= True<br />            elif e.type == pygame.KEYDOWN:<br />                if e.key == K_F1:<br />                    print&quot;arranca juego&quot;<br />                    inicializar&#40;pantalla&#41;<br />                elif e.key == K_F2:<br />                    print &quot;Vovler al menu&quot;<br />                elif e.key == K_F2:<br />                    inicializar&#40;pantalla&#41;<br />                elif e.key == K_F3:<br />                    main.salir_juego&#40;&#41;<br /><br />def inicializar&#40;pantalla&#41;:<br />    detalles = [&#40;&quot;Jugador:&quot;&#41;, &#40;&quot;Puntaje:&quot;&#41;,&#40;&quot;Vidas:&quot;&#41;, &#40;&quot;Nivel:&quot;&#41;]<br />    img=main.ImagenesMenu&#40;&#41;<br />    img.render&#40;pantalla&#41;<br />    d=main.Detalles&#40;detalles&#41;<br />    d.mostrar_detalles&#40;pantalla&#41;<br />    <br />&#39;&#39;&#39;    <br />def opciones&#40;&#41;:<br />    o=main.OpcionesJuego&#40;&#41;<br />    o.opciones_juego&#40;&#41;<br />    salir= False<br />    while not salir:<br />        for e in pygame.event.get&#40;&#41;:<br />            if e.type == QUIT:<br />                salir= True<br />            elif e.type == pygame.KEYDOWN:<br />                if e.key == K_F1:<br />                    print &quot;muestra las opciones&quot;<br />                elif e.key == K_F5:<br />                    print &quot;F5&quot;<br />&#39;&#39;&#39;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2624">nico.decara</a> — Sab Jun 30, 2012 8:00 pm</p><hr />
]]></content>
</entry>
</feed>