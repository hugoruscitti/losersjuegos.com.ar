<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=609" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-08-30T17:36:28+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=609</id>
<entry>
<author><name><![CDATA[XD YO]]></name></author>
<updated>2009-08-30T17:36:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=609&amp;p=2850#p2850</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=609&amp;p=2850#p2850"/>
<title type="html"><![CDATA[Mejorar programa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=609&amp;p=2850#p2850"><![CDATA[
Bueno, tengo un codigo escrito en pygame que te puede interesar:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#importamos los modulos<br />import sys, pygame<br />pygame.init&#40;&#41;<br />#definimos el tamaño de ventana,la velocidad, y valores RGB del fondo<br />size = width, height = 700, 700<br />speed = &#91;3, 2&#93;<br />black = 0, 0, 0<br />#definimos la pantalla<br />screen = pygame.display.set_mode&#40;size, &#41;<br />#tomamos la imagen que va a revotar &#40;tiene que estar dentro de la misma carpeta, en este caso &quot;ball.png&quot;&#41;<br />ball = pygame.image.load&#40;'ball.png'&#41;<br />ballrect = ball.get_rect&#40;&#41;<br />#creamos el bucle principal:<br />while 1:<br />#definimos los eventos y demas cosas que daran la impresion de movimiento:    <br />    for event in pygame.event.get&#40;&#41;:<br />    <br />        if event.type == pygame.QUIT:<br />            sys.exit&#40;&#41;<br />       <br />    ballrect = ballrect.move&#40;speed&#41;<br /><br />    if ballrect.left &lt;0&gt; width:<br />        speed&#91;0&#93; = -speed&#91;0&#93;<br />        <br />    if ballrect.top &lt;0&gt; height:<br />        speed&#91;1&#93; = -speed&#91;1&#93;<br /><br />    screen.fill&#40;black&#41;<br />    screen.blit&#40;ball, ballrect&#41;<br />    pygame.display.flip&#40;&#41;<br /></code></dd></dl><br /><br />Esto hara que la ultima imagen paresca que revote en la ventana, para poder iniciar la animasion con un click o presionar una tecla, pasate por el manual de pygame, en la seccion de pygame.event y pygame.key.<br /><br />Pero, tambien tengo un codigo similar escrito con pythong, si lo encuentro, lo publico, suerte <br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2140">XD YO</a> — Dom Ago 30, 2009 5:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Xisco]]></name></author>
<updated>2009-08-04T12:23:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=609&amp;p=2826#p2826</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=609&amp;p=2826#p2826"/>
<title type="html"><![CDATA[Mejorar programa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=609&amp;p=2826#p2826"><![CDATA[
Hola, me gustaria a ver si me podeis ayudar a mejorar<br /><br />  el siguiente programa, consiguiedo que la plataforma<br /><br />  detecte los bordes y retorne hacia el extremo opuesto.<br /><br /><br />                                Gracias<br /><br /><br /><br /><span style="color: green">&gt;&gt;&gt;#Programa: Simulación Movimiento Plataforma<br /><br />&gt;&gt;&gt;#Programador: Xisco<br /><br /><br /><br />&gt;&gt;&gt;from time import sleep<br /><br /><br /><br />&gt;&gt;&gt;window_coordinates(0,0,900,900)<br /><br /><br />&gt;&gt;&gt;x=0<br />&gt;&gt;&gt;y=0<br /><br />              #Ventana gráfica<br />              <br />&gt;&gt;&gt;window_style(900,'yellow')<br /><br /><br />              #Presentación<br /><br />&gt;&gt;&gt;create_text(x+450,y+800,'SimulaciónMovimiento',<br />     10,&quot;CENTER&quot;,'blue')<br /><br /><br />              #Interaccción<br />              <br />&gt;&gt;&gt;print 'Pulsa flecha arriba para''\n'\<br />      'comenzar la simulación'<br /><br /><br />              #Plataforma<br />              <br />&gt;&gt;&gt;create_filled_rectangle(x+100,y+100,x+400,y+150,'blue',tags=&quot;plataforma&quot;)<br /><br /><br />&gt;&gt;&gt;def a():<br />&gt;&gt;&gt;  for i in range(45):<br />&gt;&gt;&gt;   move(&quot;plataforma&quot;,x+10,y)<br />&gt;&gt;&gt;    sleep(0.02)<br />    <br /><br />&gt;&gt;&gt;def b():<br />&gt;&gt;&gt;  for i in range(45):<br />&gt;&gt;&gt;    move(&quot;plataforma&quot;,x-10,y)<br />&gt;&gt;&gt;    sleep(0.02)<br />    <br />    <br />&gt;&gt;&gt;if keypressed(2)=='Up':<br />&gt;&gt;&gt; while 1==1:<br />&gt;&gt;&gt;   a(),b()</span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2095">Xisco</a> — Mar Ago 04, 2009 12:23 pm</p><hr />
]]></content>
</entry>
</feed>