<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1263" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-11-26T19:17:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1263</id>
<entry>
<author><name><![CDATA[kingwar]]></name></author>
<updated>2011-11-26T19:17:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=6205#p6205</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=6205#p6205"/>
<title type="html"><![CDATA[Re: Cambiar color de imagen (y una barra de vida) en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=6205#p6205"><![CDATA[
Gracias por el codigo compa. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_idea.gif" alt=":idea:" title="Idea" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> <br /><br />lo utilizare en mi proyecto que hasta ahora -digo ahora por tu codigo - utilizaba un solo color y lo cambiaba y en otros modelos cambiaba la imagen.<br /><br />gracias.!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2414">kingwar</a> — Sab Nov 26, 2011 7:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-09-05T03:38:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=5897#p5897</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=5897#p5897"/>
<title type="html"><![CDATA[Re: Cambiar color de imagen (y una barra de vida) en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=5897#p5897"><![CDATA[
Puedes probar lo que sucede si uses este código en lugar del otro<br /><pre class="prettyprint linenums">#!/usr/bin/python<br />#_*_ coding: utf-8 _*_<br />import os<br />import sys<br />from pygame.locals import *<br />import pygame<br />Alto=400<br />Ancho=600<br />def Cargar_img&#40;direccion&#41;:<br />    direccion_imagen=os.path.join&#40;direccion&#41;<br />    try:<br />        imagen=pygame.image.load&#40;direccion_imagen&#41;<br />    except:<br />        print &quot;faltal error:0001&quot;<br />    imagen=imagen.convert&#40;&#41;<br />    colorimagen=imagen.get_at&#40;&#40;0,0&#41;&#41;<br />    imagen.set_colorkey&#40;colorimagen,RLEACCEL&#41;<br />    return imagen<br />    <br />def Remplaza_color&#40;imagen, color, recolor, distancia = 0&#41;:<br />    pixel_array = pygame.PixelArray&#40;imagen&#41;<br />    pixel_array.replace&#40;color, recolor, distancia&#41;<br />    pixel_array.make_surface&#40;&#41;<br /><br />def Rempla&#40;&#41;:<br />    pygame.init&#40;&#41;<br />    pantalla=pygame.display.set_mode&#40;&#40;Ancho,Alto&#41;&#41;<br />    pygame.display.set_caption&#40;&quot;Remplaza color&quot;&#41;<br />    imagen_0 = Cargar_img&#40;&quot;barra.png&quot;&#41;<br />    imagen_1 = Cargar_img&#40;&quot;barra.png&quot;&#41;<br />    imagen_2 = Cargar_img&#40;&quot;barra.png&quot;&#41;<br />    imagen_3 = Cargar_img&#40;&quot;barra.png&quot;&#41;<br />    Remplaza_color&#40;imagen_0, &#40;0,0,0&#41;, &#40;10,250,10&#41;,distancia = 0&#41;<br />    Remplaza_color&#40;imagen_1, &#40;0,0,0&#41;, &#40;10,250,10&#41;,distancia = 0.1&#41;<br />    Remplaza_color&#40;imagen_2, &#40;0,0,0&#41;, &#40;10,250,10&#41;,distancia = 0.5&#41;<br />    Remplaza_color&#40;imagen_3, &#40;0,0,0&#41;, &#40;10,250,10&#41;, distancia = 1&#41;<br />    continuar = True<br />    while continuar:<br />        for evento in pygame.event.get&#40;&#41;:<br />            if evento.type==pygame.QUIT:<br />                pygame.quit&#40;&#41;<br />                continuar=False<br />                sys.exit&#40;&#41;<br />        pantalla.fill&#40;&#40;250,250,250&#41;&#41;<br />        pantalla.blit&#40;imagen_0,&#40;0,0&#41;&#41; #sin distancia<br />        pantalla.blit&#40;imagen_1,&#40;0,100&#41;&#41; #con distancia baja<br />        pantalla.blit&#40;imagen_2, &#40;0,200&#41;&#41; #con mayor distancia<br />        pantalla.blit&#40;imagen_3, &#40;0,300&#41;&#41; #con toda la distancia<br />        pygame.display.flip&#40;&#41;<br /><br />Rempla&#40;&#41;</pre><br />Bueno, no sé si esto responda tu pregunta...<br />P.D. Perdona la tardanza.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Sep 05, 2011 3:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Aborgna]]></name></author>
<updated>2011-09-03T14:48:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=5895#p5895</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=5895#p5895"/>
<title type="html"><![CDATA[Re: Cambiar color de imagen (y una barra de vida) en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=5895#p5895"><![CDATA[
Muchas gracias, creo que me va a servir.<br /><br />Solo una pregunta, ¿ la imagen con el color convertido es lisa o, si tenes una variable &quot;distancia&quot; un poco mas grande, se puede usar para teñirla nada mas?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2440">Aborgna</a> — Sab Sep 03, 2011 2:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-09-03T02:23:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=5894#p5894</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=5894#p5894"/>
<title type="html"><![CDATA[Cambiar color de imagen (y una barra de vida) en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1263&amp;p=5894#p5894"><![CDATA[
Buenas. Últimamente no he estado mucho tiempo por aquí, pero es que estuve ocupado con un par de proyectos.<br />Dejemos eso y pasemos a lo interesante <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Bueno, muchos de nosotros hemos querido cambiar el color de una imagen. Así que investigando, me encontré que para hacerlo, se necesita convertir la imagen primeramente en un arreglo de píxeles. Asi, buscamos en el arreglo el color que nos interesa cambiar, y lo remplazamos por otro <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br />¿Como se hace? Bueno, aquí el código, y de paso su implementación para hacer una barra de vida <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br /><pre class="prettyprint linenums">#!/usr/bin/python<br />#_*_ coding: utf-8 _*_<br />import os<br />import sys<br />from pygame.locals import *<br />import pygame<br />Alto=400 #variables para las dimensiones de la pantalla<br />Ancho=600<br />#asumo que no tengo que explicar como se carga la imagen...<br /># <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />def Cargar_img&#40;direccion&#41;:<br />    direccion_imagen=os.path.join&#40;direccion&#41;<br />    try:<br />        imagen=pygame.image.load&#40;direccion_imagen&#41;<br />    except:<br />        print &quot;faltal error:0001&quot;<br />    imagen=imagen.convert&#40;&#41;<br />    colorimagen=imagen.get_at&#40;&#40;0,0&#41;&#41;<br />    imagen.set_colorkey&#40;colorimagen,RLEACCEL&#41;<br />    return imagen<br />    <br />def Remplaza_color&#40;imagen, color, recolor, distancia = 0&#41;:<br />    #y asi de simple se remplaza un color <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />    #la funcion resive como argumento la imagen<br />    #el color que queremos remplazar<br />    #y con que color lo queremos remplazar<br />    #distancia es para los colores que,<br />    #sin ser en RGB iguales, al ojo lucen exactamente igual.<br />    pixel_array = pygame.PixelArray&#40;imagen&#41; #la traformamos en  arreglo<br />    #por suerte, pygame inclulle una funcion que lo hace XD<br />    pixel_array.replace&#40;color, recolor, distancia&#41;<br />    pixel_array.make_surface&#40;&#41; #lo convertimos en imagen<br /><br />#este es mi MAIN... disculpen el nombre...<br />def Rempla&#40;&#41;:<br />    pygame.init&#40;&#41;#inicializa el juego<br />    pantalla=pygame.display.set_mode&#40;&#40;Ancho,Alto&#41;&#41;<br />    pygame.display.set_caption&#40;&quot;Remplaza color&quot;&#41;<br />    imagen_1 = Cargar_img&#40;&quot;barra.png&quot;&#41;<br />    imagen_2 = Cargar_img&#40;&quot;barra.png&quot;&#41;<br />    imagen_3 = Cargar_img&#40;&quot;barra.png&quot;&#41;<br />    imagen_1.set_alpha&#40;125&#41; #le ponemos una trasparencia<br />    Remplaza_color&#40;imagen_2, &#40;0,0,0&#41;, &#40;10,250,10&#41;,0.7&#41;<br />    Remplaza_color&#40;imagen_3, &#40;0,0,0&#41;, &#40;200,10,10&#41;,0.7&#41;<br />    continuar = True<br />    x = 2<br />    aumento =  True<br />    while continuar:<br />        for evento in pygame.event.get&#40;&#41;: #para registrar los ventos como oprimir teclas<br />            if evento.type==pygame.QUIT:<br />                pygame.quit&#40;&#41;#salir del juego<br />                continuar=False<br />                sys.exit&#40;&#41;<br />        pantalla.fill&#40;&#40;250,250,250&#41;&#41;<br />        pantalla.blit&#40;imagen_3,&#40;0,0&#41;&#41; #la imagen de fondo<br />        pantalla.blit&#40;imagen_2, &#40;0,0&#41;, &#40;0,0,x,35&#41;&#41; #la que representa la vida<br />        pantalla.blit&#40;imagen_1, &#40;0,0&#41;&#41; #la que hace que se vea el &quot;volumen&quot;<br />        if aumento:<br />            x+=0.5<br />        if not&#40;aumento&#41;:<br />            x-=0.5<br />        if x&gt;=319 or x&lt;=1:<br />            aumento = not&#40;aumento&#41;<br />        pygame.display.flip&#40;&#41;<br /><br />Rempla&#40;&#41;</pre><br /><br />Adjunto la imagen que utilizo.<br />¿Alguna sugerencia? ¿Dudas?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Sab Sep 03, 2011 2:23 am</p><hr />
]]></content>
</entry>
</feed>