<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=425" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-04T12:54:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=425</id>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-01-04T12:54:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1842#p1842</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1842#p1842"/>
<title type="html"><![CDATA[Cierto, gracias]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1842#p1842"><![CDATA[
Muchas gracias, es cierto, el fallo estaba ahí. Voy a depurar un poco el código, añadirle unas cuantas funcionalidades y cunado ya lo tengo mejorada abro otro topic en la sección videojuegos, porque esto ya se parece más a un juego que a la animación de un cuadrado.<br />Gracias de nuevo. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Dom Ene 04, 2009 12:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-01-01T19:12:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1836#p1836</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1836#p1836"/>
<title type="html"><![CDATA[Re: No se usar las clases]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1836#p1836"><![CDATA[
<blockquote><div><cite>RAGPacho escribió:</cite><br />Mi duda es la siguiente:<br />Donde pone lo de redibujar el combustible restante, todavía que da una línea para que funcione.<br /><dl class="codebox"><dt>Code: </dt><dd><code># Redibujaremos el combustible restante.<br />   viejo_lleno = lleno<br />   lleno = pygame.Rect&#40;10, 10, 10, 100 - fuel / 10&#41;<br />   screen.fill&#40;lleno_color, lleno&#41;</code></dd></dl><br />despues de lleno = pygame.Rect... y antes de screen.fill... tengo que poner algo que borre viejo_lleno, en PythonG sería así:<br /><dl class="codebox"><dt>Code: </dt><dd><code>erase&#40;viejo_lleno&#41;</code></dd></dl><br />No se como sería en Pygame. gracias por sus sugerencias.<br /></div></blockquote><br />Hola. Dentro del bucle haces:<br /><dl class="codebox"><dt>Code: </dt><dd><code>    # Ahora pintemos el fondo de la pantalla<br />   background_color = &#40;255, 255, 255&#41;<br />   screen.fill&#40;background_color&#41; </code></dd></dl><br />Por lo tanto, ya se borra todo, no hace falta utilizar ningún &quot;erase&quot;. Aunque es una técnica fácil y eficaz para optimizar (si en estos momentos estás interesado en el tema, puedes abrir una nueva discusión. Si es que no se ha comentado ya).<br />Yo no consigo entender una linea:<br /><dl class="codebox"><dt>Code: </dt><dd><code>   lleno = pygame.Rect&#40;10, 10, 10, 100 - fuel / 10&#41;</code></dd></dl><br />Y creo que el error puede estar aquí. Ya que, a mi parecer, funciona mejor si se sustituye la división por una multiplicación.<dl class="codebox"><dt>Code: </dt><dd><code>   lleno = pygame.Rect&#40;10, 10, 10, 100 - fuel * 10&#41;</code></dd></dl><br /><br />Saludos y ánimo que tiene buena pinta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Ene 01, 2009 7:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2008-12-27T13:06:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1832#p1832</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1832#p1832"/>
<title type="html"><![CDATA[No se usar las clases]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1832#p1832"><![CDATA[
No se usar las clases, estoy siguiendo de manera autodidacta un .pdf que encontré por ahí, y todavía no he llegado a las clases. Os pondré el .pdf en la sección documentación para que podáis usarlo vosotros también. Bueno, la verdad es que el programa va bastante más avanzado. Ya se va pareciendo a un videojuego. Les pongo el código, y después del mismo les explico mi duda.<br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- coding: iso-8859-1 -*-<br />import pygame<br />import sys<br /><br /># Hasta aquí lo que hemos hecho ha sido importar algunas funciones y<br /># poner una codificación de caracteres compatible con el castellano.<br /><br /># Paisaje<br /><br />altura_paisaje = 400<br />anchura_paisaje = 400<br />screen = pygame.display.set_mode&#40;&#40;anchura_paisaje, altura_paisaje&#41;&#41;<br />pygame.display.set_caption&#40;'Galactic'&#41;<br /><br /># Gravedad<br /><br />g = 0.1<br /><br /># Tanque de combustible<br /><br />fuel = 10<br />consumo = 1<br />tanque_negro = pygame.Rect&#40;10, 10, 10, 100&#41;<br />tanque_negro_color = &#40;0, 0, 0&#41;<br />lleno = pygame.Rect&#40;10, 10, 10, 100 - fuel / 10&#41;<br />lleno_color = &#40;0, 255, 0&#41;<br /><br /># Nave<br /><br />tamanyo_nave = 15<br />x = anchura_paisaje / 2<br />y = altura_paisaje - 350<br />vy = 0<br />vx = 0<br />nave = pygame.Rect&#40;x, y, tamanyo_nave, tamanyo_nave&#41;<br />nave_color = &#40;0, 255, 0&#41;<br /><br /># Plataforma<br /><br />px = anchura_paisaje / 2<br />py = 395<br />vpx = 2<br />anchura_plataforma = 60<br />altura_plataforma = 5<br />plataforma = pygame.Rect&#40;px, py, anchura_plataforma, altura_plataforma&#41;<br />plataforma_color = &#40;255, 0, 0&#41;<br /><br /># Simulación<br /><br />while True:<br />   <br />   # Con esto vamos a controlar los eventos del juego.<br />   <br />   for event in pygame.event.get&#40;&#41;:<br />      <br />      if event.type == pygame.QUIT:<br />         sys.exit&#40;0&#41;<br />         <br />      elif event.type == pygame.KEYDOWN:<br />         if event.key == pygame.K_UP and fuel &gt; 0:<br />            vy = -5<br />            fuel -= consumo<br />         if event.key == pygame.K_DOWN and fuel &gt; 0:<br />            vy = +2<br />            fuel -= consumo<br />         if event.key == pygame.K_LEFT and fuel &gt; 0:<br />            vx = -5<br />            fuel -= consumo<br />         if event.key == pygame.K_RIGHT and fuel &gt; 0:<br />            vx = +5<br />            fuel -= consumo<br />   <br />   # Ahora pintemos el fondo de la pantalla<br />   background_color = &#40;255, 255, 255&#41;<br />   screen.fill&#40;background_color&#41;<br />   <br />   # Ahora rellenaremos la nave, la plataforma y otros objetos <br />   # de un color.<br />   screen.fill&#40;nave_color, nave&#41;<br />   screen.fill&#40;plataforma_color, plataforma&#41;<br />   screen.fill&#40;tanque_negro_color, tanque_negro&#41;<br />   screen.fill&#40;lleno_color, lleno&#41;<br />   <br />   #Creemos la sensación de movimiento de la nave y la plataforma.<br />   vy += g<br />   y += vy<br />   if vx &lt; 0:<br />      vx += 0.1<br />   if vx &gt; 0:<br />      vx -= 0.1<br />   x + vx<br />   px += vpx<br />   if px &lt;= 0 or px &gt;= anchura_paisaje - anchura_plataforma:<br />      vpx = -vpx<br />   nave.move_ip&#40;vx, vy&#41;<br />   plataforma.move_ip&#40;vpx, 0&#41;<br />   <br />   # Si la nave llega a algún límite detiene el movimiento.<br />   <br />   if nave.bottom &gt; altura_paisaje:<br />      nave.bottom = altura_paisaje<br />      vy = 0<br />      <br />   if nave.top &lt; 0:<br />      nave.top = 0<br />      vy = 0<br />   # Si la nave sale por un lado, emtra por el otro.<br />   <br />   if nave.left &lt; 0:<br />      nave.left = 384<br />      <br />   if nave.right &gt; 400:<br />      nave.right = 16<br />      <br />   # Redibujaremos el combustible restante.<br />   viejo_lleno = lleno<br />   lleno = pygame.Rect&#40;10, 10, 10, 100 - fuel / 10&#41;<br />   screen.fill&#40;lleno_color, lleno&#41;<br />   <br />   # Muestra los cambios en pantalla y espera.<br />   pygame.display.flip&#40;&#41;<br />   pygame.time.delay&#40;10&#41;<br /></code></dd></dl><br />Mi duda es la siguiente:<br />Donde pone lo de redibujar el combustible restante, todavía que da una línea para que funcione.<br /><dl class="codebox"><dt>Code: </dt><dd><code># Redibujaremos el combustible restante.<br />   viejo_lleno = lleno<br />   lleno = pygame.Rect&#40;10, 10, 10, 100 - fuel / 10&#41;<br />   screen.fill&#40;lleno_color, lleno&#41;</code></dd></dl><br />despues de lleno = pygame.Rect... y antes de screen.fill... tengo que poner algo que borre viejo_lleno, en PythonG sería así:<br /><dl class="codebox"><dt>Code: </dt><dd><code>erase&#40;viejo_lleno&#41;</code></dd></dl><br />No se como sería en Pygame. gracias por sus sugerencias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Sab Dic 27, 2008 1:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-12-26T20:46:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1831#p1831</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1831#p1831"/>
<title type="html"><![CDATA[Animación de un cuadrado en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1831#p1831"><![CDATA[
Muy bien! veo que va avanzando... quizás ahora sería un buen momento para mejorar un poco la estructura y crear el objeto nave(clase, sprite...). Aunque de funcionalidad tenga la misma, el código ganará mucho y te será más fácil seguir agrandando el proyecto.<br />La idea es simple: hay un color de una nave, un rectángulo de la nave, un fragmento de código que se encarga de mover la nave... pues todo eso, se junta formando la clase nave.<br />No sigo explicando porque tampoco sé el nivel que tienes y quizás ya sepas todo eso. Así que si tienes dudas, pregunta y te intentaré ayudar (aunque tengo los exámenes en enero así que quizás tarde un poco en responder).<br />Mirando lo ejemplos de la web, se puede aprender mucho.<br /><br />Saludos.<br /><br />Pd: me lo he mirado por encima, pero creo que hay cosas sin usar:<br /><dl class="codebox"><dt>Code: </dt><dd><code>y += vy <br />x + vx </code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Vie Dic 26, 2008 8:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2008-12-23T19:55:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1828#p1828</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1828#p1828"/>
<title type="html"><![CDATA[Mejoras]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1828#p1828"><![CDATA[
Bueno, he aquí un cuadrado que se mueve lateralmente y que no sale de pantalla:<br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- coding: iso-8859-1 -*-<br />import pygame<br />import sys<br /><br /># Hasta aquí lo que hemos hecho ha sido importar algunas funciones y<br /># poner una codificación de caracteres compatible con el castellano.<br /><br /># Paisaje<br /><br />altura_paisaje = 400<br />anchura_paisaje = 400<br />screen = pygame.display.set_mode&#40;&#40;anchura_paisaje, altura_paisaje&#41;&#41;<br />pygame.display.set_caption&#40;'Galactic'&#41;<br /><br /># Gravedad<br /><br />g = 0.1<br /><br /># Nave<br /><br />tamanyo_nave = 20<br />x = anchura_paisaje / 2<br />y = altura_paisaje - 350<br />vy = 0<br />vx = 0<br />nave = pygame.Rect&#40;x, y, tamanyo_nave, tamanyo_nave&#41;<br />nave_color = &#40;0, 255, 0&#41;<br /><br /># Simulación<br /><br />while True:<br />   <br />   # Con esto vamos a controlar los eventos del juego.<br />   <br />   for event in pygame.event.get&#40;&#41;:<br />      <br />      if event.type == pygame.QUIT:<br />         sys.exit&#40;0&#41;<br />         <br />      elif event.type == pygame.KEYDOWN:<br />         if event.key == pygame.K_UP:<br />            vy = -5<br />         if event.key == pygame.K_LEFT:<br />            vx = -5<br />         if event.key == pygame.K_RIGHT:<br />            vx = +5<br />   <br />   # Ahora pintemos el fondo de la pantalla<br />   background_color = &#40;255, 255, 255&#41;<br />   screen.fill&#40;background_color&#41;<br />   <br />   # Ahora rellenaremos la nave de un color.<br />   screen.fill&#40;nave_color, nave&#41;<br />   <br />   #Creemos la sensación de movimiento.<br />   vy += g<br />   y += vy<br />   if vx &lt; 0:<br />      vx += 0.1<br />   if vx &gt; 0:<br />      vx -= 0.1<br />   x + vx<br />   nave.move_ip&#40;vx, vy&#41;<br />   <br />   # Si la nave llega a algún límite detiene el movimiento.<br />   <br />   if nave.bottom &gt; altura_paisaje:<br />      nave.bottom = altura_paisaje<br />      vy = 0<br />      <br />   if nave.top &lt; 0:<br />      nave.top = 0<br />      vy = 0<br />      <br />   if nave.left &lt; 0:<br />      nave.left = 0<br />      <br />   if nave.right &gt; 400:<br />      nave.right = 400<br />   <br />   # Muestra los cambios en pantalla y espera.<br />   pygame.display.flip&#40;&#41;<br />   pygame.time.delay&#40;10&#41;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mar Dic 23, 2008 7:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2008-12-23T18:55:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1827#p1827</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1827#p1827"/>
<title type="html"><![CDATA[Gracias]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1827#p1827"><![CDATA[
Ok, gracias. Cuando haya mejorado un poco esto del cuadrado, abro en la sección videojuegos otro topic para que me ayudeis a mejorarlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mar Dic 23, 2008 6:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-12-23T18:47:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1826#p1826</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1826#p1826"/>
<title type="html"><![CDATA[Animación de un cuadrado en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1826#p1826"><![CDATA[
Para representar el color en pygame se puede utilizar el RGB. El RGB se representa (rojo, verde, azul) donde cada parámetro tiene un rango de 0 a 255. Por esta razón, es fácilmente representable en 2 dígitos hexadecimales por color.<br />Aquí tienes la imagen de un cubo muy buena aunque también puedes mirar la paleta de, por ejemplo, el Gimp para obtener los valores fácilmente.<br /><!-- m --><a class="postlink" href="http://en.wikipedia.org/wiki/RGB_color_space">http://en.wikipedia.org/wiki/RGB_color_space</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Dic 23, 2008 6:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2008-12-23T14:49:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1825#p1825</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1825#p1825"/>
<title type="html"><![CDATA[Re: Animación de un cuadrado en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1825#p1825"><![CDATA[
<blockquote class="uncited"><div><br /><dl class="codebox"><dt>Code: </dt><dd><code>nave_color = &#40;100, 100, 255&#41; </code></dd></dl><br /></div></blockquote><br />¿Donde puedo encontrar una tabla de los distintos colores? He revisado la web de pygame pero no encontre nada en la documentación. (El inglés no es mi fuerte)<br /><br />Muchas gracias. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mar Dic 23, 2008 2:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-12-22T19:26:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1823#p1823</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1823#p1823"/>
<title type="html"><![CDATA[Re: Animación de un cuadrado en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1823#p1823"><![CDATA[
<blockquote><div><cite>RAGPacho escribió:</cite><br />Me gustaría pasarlo a Pygame, dados los problemas tenidos con las salida gráfica de PythonG y dado que Pygame es mejor. Por eso, he elegido este pequeño programa para que me expliquen como podría hacerlo en Pygame. Gracias a todos.<br /></div></blockquote><br />Saludos, tomé tu programa y traté de hacer algo parecido<br />con pygame. Lo malo es que tuve que cambiar algunos<br />números en tus cálculos porque no me funcionaba igual en<br />pygame que en pythonG, pero bueno, seguramente identificarás<br />esas diferencias viendo el código, ahí va:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20081222/ejemplo.png" alt="Imagen" /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- coding: iso-8859-1 -*-<br />import pygame<br />import sys<br /><br /># Paisaje<br /><br />altura_paisaje = 400<br />anchura_paisaje = 400<br />screen = pygame.display.set_mode&#40;&#40;altura_paisaje, anchura_paisaje&#41;&#41;<br /><br /># Gravedad<br /><br />g = 0.1<br /><br /># Nave<br /><br />tamanyo_nave = 20<br />x = anchura_paisaje / 2<br />y = altura_paisaje - 100<br />vy = 0<br />impulso_y = 2*g<br />nave = pygame.Rect&#40;x, y, tamanyo_nave, tamanyo_nave&#41;<br />nave_color = &#40;100, 100, 255&#41;<br /><br /># Simulación<br /><br />while True:<br />    # gestiona los eventos de la aplicacion<br />    for event in pygame.event.get&#40;&#41;:<br /><br />        if event.type == pygame.QUIT:<br />            sys.exit&#40;0&#41;<br />        elif event.type == pygame.KEYDOWN:<br />            if event.key == pygame.K_UP:<br />                vy = -5<br /><br />    # pinta la pantalla<br />    bg_color = &#40;200, 200, 200&#41;<br />    screen.fill&#40;bg_color&#41;<br /><br />    # pinta la nave<br />    screen.fill&#40;nave_color, nave&#41;<br /><br />    # mueve el objeto a su nueva posicion<br />    vy += g<br />    y += vy<br />    nave.move_ip&#40;0, vy&#41;<br /><br />    # si llega al final del escenario se detiene<br />    if nave.bottom &gt; altura_paisaje:<br />        nave.bottom = altura_paisaje<br />        vy = 0<br /><br />    # muestra los cambios en pantalla y espera<br />    pygame.display.flip&#40;&#41;<br />    pygame.time.delay&#40;10&#41;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Dic 22, 2008 7:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2008-12-22T11:10:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1822#p1822</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1822#p1822"/>
<title type="html"><![CDATA[Animación de un cuadrado en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=425&amp;p=1822#p1822"><![CDATA[
Hola a todos. He hecho una simple animación de un cuadrado, que simboliza una nave y que va cayendo con la gravedad. Cuando pulsas la tecla arriba, en vez de caer sube. Esta hecho para la salida gráfica del entorno de programación PythonG. Me gustaría pasarlo a Pygame, dados los problemas tenidos con las salida gráfica de PythonG y dado que Pygame es mejor. Por eso, he elegido este pequeño programa para que me expliquen como podría hacerlo en Pygame. Gracias a todos.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- coding: iso-8859-1 -*-<br /><br />from modulepythong import *<br /><br /># Paisaje<br /><br />altura_paisaje = 400<br />anchura_paisaje = 400<br />window_coordinates&#40;0, 0, anchura_paisaje, altura_paisaje&#41;<br /><br /># Gravedad<br /><br />g = 0.00001<br /><br /># Nave<br /><br />tamanyo_nave = 10<br />x = anchura_paisaje / 2<br />y = altura_paisaje - 100<br />vy = 0<br />impulso_y = 2*g<br />nave = create_filled_rectangle&#40;x, y, x+tamanyo_nave, y+tamanyo_nave, 'blue'&#41;<br /><br /># Simulación<br /><br />while y &gt; 0 and y &lt; altura_paisaje:<br />  vy -= g<br />  if keypressed&#40;1&#41; == 'Up':<br />    vy += impulso_y<br />  y += vy<br />  move&#40;nave, 0, vy&#41;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Lun Dic 22, 2008 11:10 am</p><hr />
]]></content>
</entry>
</feed>