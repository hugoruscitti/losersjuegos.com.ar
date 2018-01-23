<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=248" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-03-01T00:27:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=248</id>
<entry>
<author><name><![CDATA[akiles333]]></name></author>
<updated>2008-03-01T00:27:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=929#p929</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=929#p929"/>
<title type="html"><![CDATA[falla en python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=929#p929"><![CDATA[
pues si, se que le falta, pero solo estoy haciendo estas pruebas, ya hice otro mas, un ejemplo que me encontre en el foro, lo pegue identico y se trabo tambien a cierto tiempo<br /><br />bueno este seria el código anterior del rebote<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame.locals import*<br /><br />pygame.init&#40;&#41;<br />ancho=640<br />alto=480<br />color_fondo=&#40;150,200,15&#41;<br />#            x,y<br />velocidad = &#91;1,1&#93;<br /><br />pantalla = pygame.display.set_mode&#40;&#40;ancho,alto&#41;&#41;<br /><br />titulo= pygame.display.set_caption&#40;'Rebote'&#41;<br />bola = pygame.image.load&#40;'bola_roja.png'&#41;.convert_alpha&#40;&#41;<br />recta = bola.get_rect&#40;&#41;<br /><br />while 1:<br />        <br />    recta = recta.move&#40;velocidad&#41;<br />    <br />    if recta.left&lt;0 or recta.right&gt;ancho:<br />        velocidad&#91;0&#93;= -velocidad&#91;0&#93;<br /><br />    if recta.top&lt;0 or recta.bottom&gt;alto:<br />        velocidad&#91;1&#93;= -velocidad&#91;1&#93;<br /><br />    pantalla.blit&#40;bola, recta&#41;<br />    pantalla.fill&#40;color_fondo&#41;<br />    pygame.display.flip&#40;&#41;<br /><br /><br /></code></dd></dl><br /><br />saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1894">akiles333</a> — Sab Mar 01, 2008 12:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-02-29T23:36:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=926#p926</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=926#p926"/>
<title type="html"><![CDATA[Re: falla en python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=926#p926"><![CDATA[
<blockquote><div><cite>akiles333 escribió:</cite><br />... llamo una imagen, trato de rebotarla en los bordes de la pantalla, y si lo hace pero solo 4 veces y despues de inhibe...<br /></div></blockquote><br /><br />Saludos, al igual que <span style="font-weight: bold">dvd</span> no tuve problemas en Ubuntu, y<br />claro, al igual que él te sugiero que pruebes con este sistema<br />también:<br /><br />   <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/utilidades/distro/sobre_este_sistema.t2t.html">http://www.losersjuegos.com.ar/utilidad ... a.t2t.html</a><!-- m --><br /><br />Con respecto al código, noté que al aumentar la velocidad de<br />rebote muchas veces la esfera queda fuera del margen de la<br />ventana. Esto puede estar ocasionando el problema; imagina<br />esta situación: cuando la esfera queda fuera de pantalla tu solo<br />inviertes la dirección del movimiento:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if recta.left &lt;0 or recta.right &gt; ancho:<br />    velocidad&#91;0&#93; = -velocidad&#91;0&#93;<br /></code></dd></dl><br /><br />te recomiendo que escribas algo mas de código para que la<br />esfera nunca quede fuera del area de pantalla, algo así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>    if recta.left &lt; 0:<br />        recta.left = 0<br />        direccion_x = 1<br />    elif recta.right &gt; ancho:<br />        recta.right = ancho<br />        direccion_x = -1<br /><br />    posicion_x += direccion_x<br /></code></dd></dl><br /><br />PD: recuerda usar las etiquetas &quot;code&quot; y &quot;/code&quot; cuando<br />       escribas código fuente en el foro de mensajes.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Feb 29, 2008 11:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-02-29T17:39:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=922#p922</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=922#p922"/>
<title type="html"><![CDATA[A mi me funciona]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=922#p922"><![CDATA[
Hola, yo no he tenido ningún problema(en ubuntu), eso si, añadiendo espacios ya que en python eso tiene importancia. Para que podamos comprender el código tendrías que ponerlo dentro de la etiqueta code, de esta manera se aprecia la <a href="http://es.wikipedia.org/wiki/Indentaci%C3%B3n" class="postlink">indentación</a>.<br /><br />Pd: podrías probar linux a ver si tienes menos problemas xD<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Vie Feb 29, 2008 5:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[akiles333]]></name></author>
<updated>2008-02-29T01:32:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=920#p920</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=920#p920"/>
<title type="html"><![CDATA[actualizacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=920#p920"><![CDATA[
asi funciona un segundo mas, ja ja ja ja, no se porque se inhibe<br /><br /><br />#******************************<br /><br />import pygame<br />from pygame.locals import*<br /><br />pygame.init()<br />ancho=640<br />alto=480<br />color_fondo=(150,200,15)<br />#            x,y<br />velocidad = [1,1]<br /><br />pantalla = pygame.display.set_mode((ancho,alto))<br />#fondo=pantalla.convert()<br /><br />titulo= pygame.display.set_caption('Rebote')<br />bola = pygame.image.load('bola_roja.png').convert_alpha()<br />recta = bola.get_rect()<br /><br />while 1:<br />        <br />    recta = recta.move(velocidad)<br />    <br />    if recta.left&lt;0 or recta.right&gt;ancho:<br />        velocidad[0]= -velocidad[0]<br /><br />    if recta.top&lt;0 or recta.bottom&gt;alto:<br />        velocidad[1]= -velocidad[1]<br /><br />    pantalla.fill(color_fondo)<br />    pantalla.blit(bola, recta)<br />    pygame.display.flip()<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1894">akiles333</a> — Vie Feb 29, 2008 1:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[akiles333]]></name></author>
<updated>2008-02-28T19:46:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=919#p919</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=919#p919"/>
<title type="html"><![CDATA[falla en python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=248&amp;p=919#p919"><![CDATA[
que tal, bueno aqui molestando de nuevo, estoy haciendo unas pruebas con python bajo XP con codigo tuyo y pruebas y pues si funciona, pero, te explico, llamo una imagen, trato de rebotarla en los bordes de la pantalla, y si lo hace pero solo 4 veces y despues de inhibe, que podra ser, te pego el código.<br /><br /><br />#***** prueba1 ******<br />import sys,pygame<br />from pygame.locals import*<br /><br />pygame.init()<br />ancho=640<br />alto=480<br />color_fondo=(1,1,1)<br />#            x,y<br />velocidad = [1,1]<br /><br />pantalla = pygame.display.set_mode((ancho,alto))<br />titulo= pygame.display.set_caption('Rebote Prueba')<br />bola = pygame.image.load('bola_roja.png')<br />fondo = pantalla.convert()<br />recta = bola.get_rect()<br /><br />while 1:<br />        <br />    recta = recta.move(velocidad)<br />    <br />    if recta.left&lt;0 or recta.right&gt;ancho:<br />        velocidad[0]= -velocidad[0]<br /><br />    if recta.top&lt;0 or recta.bottom&gt;alto:<br />        velocidad[1]= -velocidad[1]<br /><br />    #fondo.fill(color_fondo)<br />    pantalla.blit(bola, recta)<br />    pygame.display.flip()<br />    pantalla.blit(fondo, (0,0))<br /><br />y este es el código, no se si funcione bien bajo linux, pero en XP se traba<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1894">akiles333</a> — Jue Feb 28, 2008 7:46 pm</p><hr />
]]></content>
</entry>
</feed>