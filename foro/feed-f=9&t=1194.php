<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1194" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-25T02:30:49+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1194</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-07-25T02:30:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5760#p5760</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5760#p5760"/>
<title type="html"><![CDATA[Re: Pregunta 100000% básica]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5760#p5760"><![CDATA[
mira, esta es la situacion, quize arreglar un poco ese codigo y colocar las cosas que faltaban y las que no estaban en su posicion. no pude correrlo porque python me dice que no puede importar pygame, y eso que esta instalado, en fin, tendre que revisar esos paquetes en mi Parabola GNU/Linux. por el momento tendras que probrar tu el codigo y ver si funciona como buscas, si no fuera el caso, te invito a hackearlo a tu gusto ;D.<br /><br /><span style="color: #FF0000"><span style="font-weight: bold">el valor de la funcion la cambias presionando las teclas de direccion derecha e izquierda</span></span><br /><br />no olvides:<br /><ul><li>tener cuidado con la identacion de los bloques de codigo</li><li>comentar todo lo que creas que nadie mas que tu entendera (o lo que tu no vayas a entender cuando vuelvas abrir ese archivo en quien sabe cuantos meses)</li><li>buscar ejemplos de codigo sobre el lenguaje y librerias que tienes pensado desarrollar algo</li><li>comprender lo que deseas hacer y expresarlo como se debe matematicamente (si deseas usar formulas)</li><li>tener documentacion a mano sobre las funciones de una libreria, como por ejemplo [url=esta dobre pygame.draw]http://www.pygame.org/docs/ref/draw.html[/url]</li></ul><br /><pre class="prettyprint linenums"># -*- coding: utf-8 -*-<br /><br /><br />import pygame<br />from pygame.locals import *<br />import random<br /><br />def dibujar_cuadricula&#40;espaciado=20, fondo=&#40;255,255,255&#41;&#41;:<br />    pygame.display.get_surface&#40;&#41;.fill&#40;fondo&#41;<br /><br />    for x in range&#40;0,xp,espaciado&#41;:<br />        pygame.draw.line&#40;pygame.display.get_surface&#40;&#41;, &#40;0,0,0&#41; , &#40;x, 0&#41;, &#40;x, 400&#41;&#41;<br /><br />    for y in range&#40;0,yp,espaciado&#41;:<br />        pygame.draw.line&#40;pygame.display.get_surface&#40;&#41;, &#40;0,0,0&#41; , &#40;0, y&#41;, &#40;400, y&#41;&#41;<br /><br />def listar_coordenadas&#40;funcion, ancho_pantalla, alto_pantalla&#41;:<br />    xp = ancho_pantalla<br />    yp = alto_pantalla<br />    lista = []<br /><br />    for x in range&#40;-6,7&#41;:<br />        lista.append&#40;&#40;x * 20 + xp / 2, yp / 2 - funcion * 20&#41;&#41;<br /><br />    return lista<br /><br />xp,yp = 400,400<br />pygame.init&#40;&#41;<br />pantalla = pygame.display.set_mode&#40;&#40;xp,yp&#41;&#41;<br /><br />tiempo = pygame.time.Clock&#40;&#41;<br /><br />#pygame.draw.line&#40;pantalla,&#40;0,0,0&#41;, &#40;yp/2,0&#41;,&#40;yp/2,xp&#41;,4&#41;<br />#pygame.draw.line&#40;pantalla,&#40;0,0,0&#41;, &#40;0,xp/2&#41;,&#40;yp,xp/2&#41;,4&#41;<br />#pygame.draw.circle&#40;pantalla, &#40;0,0,0&#41;, &#40;xp/2,yp/2&#41;,5&#41;<br />#pygame.display.flip&#40;&#41;<br /><br />#### La pantalla esta cargada totalmente a partir de aqui<br /><br />colora = random.randint&#40;0,250&#41;<br />colorb = random.randint&#40;0,250&#41;<br />colorc = random.randint&#40;0,250&#41;<br />funcion = 1<br />lista = listar_coordenadas&#40;funcion, xp, yp&#41;<br />salir = False<br /><br /># aqui se deja este codigo por aparte para no marearme<br /># no seria mala idea comentar que hace ciertas partes de codigo, como este por<br /># ejemplo :-/<br />#    funcion = raw_input&#40;&quot;f&#40;x&#41;= &quot;&#41;<br />#    listacoordenadas = []<br />#    for indice in range&#40;len&#40;listacoordenadas&#41;-1&#41;:<br />#        pygame.draw.line&#40;pantalla,&#40;colora,colorb,colorc&#41;, listacoordenadas[indice],listacoordenadas[indice+1],4&#41;<br />#    pygame.display.flip&#40;&#41;<br />#<br />#raw_input&#40;&#41;<br /><br />while not salir:<br />    # mantegaos el framerate en 60<br />    tiempo.tick_busy_loop&#40;60&#41;<br /><br />    # manejamos los eventos de entrada, esto es muuuuy importante y siempre debe<br />    # ser integrado a cualquier codigo sea Pygame o PySFML.<br />    for evento in pygame.event.get&#40;&#41;:<br />        if evento.type == QUIT:<br />            salir = True<br />        if evento.type == KEYDOWN:<br />            if  evento.key == K_ESCAPE:<br />                salir = True<br />            elif evento.key == K_RIGHT:<br />                funcion = funcion + 1<br />                # recalculamos la lista de coordenadas<br />                lista = listar_coordenadas&#40;funcion, xp, xy&#41;<br />#                print &quot;funcion de valor {0} ahora vale {1}&quot;.format&#40;funcion - 1,<br />#                funcion&#41;<br />            elif evento.key == K_LEFT:<br />                funcion = funcion - 1<br />                # recalculamos la lista de coordenadas<br />                lista = listar_coordenadas&#40;funcion, xp, xy&#41;<br />#                print &quot;funcion de valor {0} ahora vale {1}&quot;.format&#40;funcion + 1,<br />#                funcion&#41;<br /><br />    # ahora nos corresponde dibujar los datos calculados por pantalla<br />    #primero limpiemos el desastre del frame anterior<br /><br />    dibujar_cuadricula&#40;&#41;<br /><br />    # ahora dibujamos las lineas con las coordenadas que calculamos<br /><br />    for ind in lista:<br />        try:<br />             pygame.draw.line&#40;pantalla, &#40;colora, colorb, colorc&#41;, ind[0], ind[1], 4&#41;<br />        except:<br />             print &quot;error al momento de dibujar las lineas con las coordenadas calculadas&quot;<br />             print &quot;coordenadas no validas para el metodo Line de pygame&quot;<br />             print &quot;ind[0]&quot;, ind[0], &quot;ind[1]&quot;, ind[1]<br />             exit&#40;1&#41;<br /><br />    # cambiamos el buffer<br /><br />    pygame.display.flip&#40;&#41;<br /><br />raw_input&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Jul 25, 2011 2:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[holaquetal]]></name></author>
<updated>2011-07-02T02:40:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5697#p5697</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5697#p5697"/>
<title type="html"><![CDATA[Re: Pregunta 100000% básica]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5697#p5697"><![CDATA[
<dl class="codebox"><dt>Code: </dt><dd><code>import pygame,random<br />xp,yp = 400,400<br />pantalla = pygame.display.set_mode((xp,yp))<br />pantalla.fill((255,255,255))<br />for x in range(0,xp,20):<br />  pygame.draw.line(pantalla, (0,0,0) , (x, 1), (x, 800))<br />for y in range(0,yp,20):<br />  pygame.draw.line(pantalla, (0,0,0) , (1, y), (800, y))<br />pygame.draw.line(pantalla,(0,0,0), (yp/2,0),(yp/2,xp),4)<br />pygame.draw.line(pantalla,(0,0,0), (0,xp/2),(yp,xp/2),4)<br />pygame.draw.circle(pantalla, (0,0,0), (xp/2,yp/2),5)<br />pygame.display.flip()<br />#### La pantalla esta cargada totalmente a partir de aqui<br />while 1:<br /> colora,colorb,colorc = random.randint(0,250),random.randint(0,250),random.randint(0,250)<br /> funcion = raw_input(&quot;f(x)= &quot;)<br /> listacoordenadas = &#91;&#93;<br /> for x in range(-6,7):<br />  listacoordenadas.append((x*20+xp/2,yp/2-eval(funcion)*20))<br /> for indice in range(len(listacoordenadas)-1):<br />  pygame.draw.line(pantalla,(colora,colorb,colorc), listacoordenadas&#91;indice&#93;,listacoordenadas&#91;indice+1&#93;,4)<br /> pygame.display.flip()<br />raw_input()<br /><br /></code></dd></dl><br />este es, cuando quiero hacer q grafique una funcion, por ejemplo x**2+10, no pasa nada y aparece esa ventana para finalizar programa <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> <br />gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2462">holaquetal</a> — Sab Jul 02, 2011 2:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-06-29T23:17:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5691#p5691</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5691#p5691"/>
<title type="html"><![CDATA[Re: Pregunta 100000% básica]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5691#p5691"><![CDATA[
Por favor, postea código<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Jun 29, 2011 11:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[holaquetal]]></name></author>
<updated>2011-06-29T21:59:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5690#p5690</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5690#p5690"/>
<title type="html"><![CDATA[Pregunta 100000% básica]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1194&amp;p=5690#p5690"><![CDATA[
primero hola a todos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br />verán tengo un problema q ni siquiera me deja empezar con esto del pygame. El problema es que cuando inicializo la ventana, sale todo normal, pero cuando la intento mover aparece el mensaje de error de &quot;este programa no responde&quot; y no puedo hacer nada mas....<br />alguna idea?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2462">holaquetal</a> — Mié Jun 29, 2011 9:59 pm</p><hr />
]]></content>
</entry>
</feed>