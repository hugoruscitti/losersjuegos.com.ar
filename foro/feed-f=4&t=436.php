<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=436" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-13T19:38:42+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=436</id>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-01-13T19:38:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=436&amp;p=1892#p1892</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=436&amp;p=1892#p1892"/>
<title type="html"><![CDATA[Muchas gracias]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=436&amp;p=1892#p1892"><![CDATA[
¡Muchas gracias! Ya voy consiguiendo que me salga, cuando lo tenga le doy un repaso al código para retocarlo y ver si hay cosas sin usar. Cuando tenga esto hecho, ya os pondré el nuevo código.<br />¡Muchas gracias dvd! ¡Siempre me ayudas! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mar Ene 13, 2009 7:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-01-12T22:00:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=436&amp;p=1890#p1890</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=436&amp;p=1890#p1890"/>
<title type="html"><![CDATA[El juego de aterrizar la nave :D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=436&amp;p=1890#p1890"><![CDATA[
Podrías mirar si la distancia de la nave a la plataforma es menor que la velocidad de la nave. Y además, que, como mínimo, haya uno lado de la nave entre los lados de la plataforma. <br /><br />Ya has utilizado bottom, top, left, y right. Para hacer esto, tienes que restar, comparar... No dudes en coger lápiz y papel.<br /><br />No son necesarias clases ni funciones pero son aconsejables. Aunque los comentarios que haces ayudan mucho  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> <br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Ene 12, 2009 10:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-01-10T11:38:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=436&amp;p=1857#p1857</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=436&amp;p=1857#p1857"/>
<title type="html"><![CDATA[El juego de aterrizar la nave :D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=436&amp;p=1857#p1857"><![CDATA[
Bueno, pues como en el tema de Animación de un cuadrado, había dicho, habro un post para este &quot;juego&quot;. Les pongo el código actual, y al final mi duda.<br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- coding: iso-8859-1 -*-<br />import pygame<br />import sys<br /><br /># Hasta aquí lo que hemos hecho ha sido importar algunas funciones y<br /># poner una codificación de caracteres compatible con el castellano.<br /><br /># Paisaje<br />altura_paisaje = 400<br />anchura_paisaje = 400<br />screen = pygame.display.set_mode&#40;&#40;anchura_paisaje, altura_paisaje&#41;&#41;<br />pygame.display.set_caption&#40;'Galactic'&#41;<br /><br /># Gravedad<br />g = 0.1<br /><br /># Tanque de combustible<br />fuel = 10<br />consumo = 1<br />tanque_viejo = pygame.Rect&#40;10, 10, 10, 100&#41;<br />tanque_viejo_color = &#40;0, 255, 0&#41;<br />lleno = pygame.Rect&#40;10, 10, 10, 100 - fuel * 10&#41;<br />lleno_color = &#40;0, 0, 0&#41;<br /><br /># Nave<br />tamanyo_nave = 15<br />x = anchura_paisaje / 2<br />y = altura_paisaje - 350<br />vy = 0<br />vx = 0<br />nave = pygame.Rect&#40;x, y, tamanyo_nave, tamanyo_nave&#41;<br />nave_color = &#40;0, 255, 0&#41;<br /><br /># Plataforma<br />px = anchura_paisaje / 2<br />py = 395<br />vpx = 2<br />anchura_plataforma = 60<br />altura_plataforma = 5<br />plataforma = pygame.Rect&#40;px, py, anchura_plataforma, altura_plataforma&#41;<br />plataforma_color = &#40;255, 0, 0&#41;<br /><br /># Vamos a darle valor a una variable que nos servira más adelante.<br />esperar = True<br /><br /># Simulación<br />while True:<br />   <br />   # Con esto vamos a controlar los eventos del juego.<br />   for event in pygame.event.get&#40;&#41;:<br />      <br />      if event.type == pygame.QUIT:<br />         sys.exit&#40;0&#41;<br />         <br />      elif event.type == pygame.KEYDOWN:<br />         if event.key == pygame.K_UP and fuel &gt; 0:<br />            vy = -5<br />            fuel -= consumo<br />         if event.key == pygame.K_DOWN and vy &lt; 0:<br />            vy = +2<br />         if event.key == pygame.K_LEFT and fuel &gt; 0:<br />            vx = -5<br />            fuel -= consumo<br />         if event.key == pygame.K_RIGHT and fuel &gt; 0:<br />            vx = +5<br />            fuel -= consumo<br />         if event.key == pygame.K_ESCAPE or event.key == pygame.K_q or event.key == pygame.K_s:<br />            sys.exit&#40;0&#41;   <br />   <br />   # Ahora pintemos el fondo de la pantalla<br />   background_color = &#40;255, 255, 255&#41;<br />   screen.fill&#40;background_color&#41;<br />   <br />   # Ahora rellenaremos la nave, la plataforma y otros objetos <br />   # de un color.<br />   screen.fill&#40;nave_color, nave&#41;<br />   screen.fill&#40;plataforma_color, plataforma&#41;<br />   screen.fill&#40;tanque_viejo_color, tanque_viejo&#41;<br />   screen.fill&#40;lleno_color, lleno&#41;<br />   <br />   # Creemos la sensación de movimiento de la nave y la plataforma.<br />   vy += g<br />   if vx &lt; 0:<br />      vx += 0.1<br />   if vx &gt; 0:<br />      vx -= 0.1<br />   px += vpx<br />   if px &lt;= 0 or px &gt;= anchura_paisaje - anchura_plataforma:<br />      vpx = -vpx<br />   nave.move_ip&#40;vx, vy&#41;<br />   plataforma.move_ip&#40;vpx, 0&#41;<br />   <br />   # Ahora vamos a hacer que cuando la partida acabe, la plataforma se<br />   # pare<br />   if fuel == 0:<br />      vpx = 0<br />   <br />   # Si la nave llega a algún límite detiene el movimiento.<br />   if nave.bottom &gt; altura_paisaje:<br />      nave.bottom = altura_paisaje<br />      vy = 0<br />      <br />   if nave.top &lt; 0:<br />      nave.top = 0<br />      vy = 0<br />   <br />   # Si la nave sale por un lado, emtra por el otro.<br />   if nave.left &lt; 0:<br />      nave.left = 384<br />      <br />   if nave.right &gt; 400:<br />      nave.right = 16<br />      <br />   # Redibujaremos el combustible restante.<br />   if fuel * 10 &lt;= 50 and fuel * 10 &gt; 30:<br />      tanque_viejo_color = &#40;255, 165, 0&#41;<br />   if fuel * 10 &lt;= 30:<br />      tanque_viejo_color = &#40;255, 0, 0&#41;<br />   lleno = pygame.Rect&#40;10, 10, 10, 100 - fuel * 10&#41;<br />   screen.fill&#40;lleno_color, lleno&#41;<br />   <br />   # Muestra los cambios en pantalla y espera.<br />   pygame.display.flip&#40;&#41;<br />   pygame.time.delay&#40;10&#41;<br />   <br />   # Haremos que el juego espere un tiempo antes de empezar.<br />   if esperar:<br />      pygame.time.delay&#40;2000&#41;<br />      esperar = False<br /></code></dd></dl><br />Mi duda, es como gestionar las colisiones, de tal manera que cuando la parte de abajo de la nave, colisione con la parte de arriba de la plataforma, hacer que nave.bottom valga 5. He intentado hacerlo con la guía de ejemplos sobre pygamme, pero no soy capaz. Muchas gracias.<br />P.D.: Aún no se usar las clases, no se si necesitare saber usarlas para esto. Muchas gracias a todos.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Sab Ene 10, 2009 11:38 am</p><hr />
]]></content>
</entry>
</feed>