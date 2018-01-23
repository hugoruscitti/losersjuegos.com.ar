<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=574" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-06-25T09:21:32+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=574</id>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2009-06-25T09:21:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2642#p2642</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2642#p2642"/>
<title type="html"><![CDATA[Snake]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2642#p2642"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Dokan:<br />A mi también me parecio que lo de self.posición era una tupla, pero no. La verdad es que no entiendo porque una lista.<br /><br />Pero creo haber visto como funciona:<br />Creas la inicial y tal, y en el update lo que haces es crear un nuevo &quot;nodo&quot; o parte del cuerpo de la serpiente, y con lo de self.body = self.body[0:self.length] eliminas el ultimo nodo. Vamos, que en realidad no se mueve, sino que creo por un lado y destruyo por otro.<br />¿Es así?<br /></div></blockquote><br />Si, básicamente esa es la apariencia de movimiento.<br /><br /><blockquote><div><cite>Juanxo escribió:</cite><br />Por otro lado, el tema de que al cambiar la cantidad de pixels que se desplaza la posicion cada pulsación de tecla, es lógico que ya no choque siempre con la comida: if Food.Posicion == Snake.Posicion: <br />tienen que ser las mismas, y esto solo se consigue moviendo un número de pixels igual al tamaño de cada casilla, no se si me explico.<br /></div></blockquote><br />Entiendo lo que dices y parece lógico, tendré que espabilar bastante...<br /><br />Gracias por la ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Jue Jun 25, 2009 9:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-06-19T11:54:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2612#p2612</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2612#p2612"/>
<title type="html"><![CDATA[Snake]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2612#p2612"><![CDATA[
Buenas a los dos:<br />A mi también me ha parecido bastante facil la manera de hacerlo, asi que bien hecho jaja<br /><br />Dokan:<br />A mi también me parecio que lo de self.posición era una tupla, pero no. La verdad es que no entiendo porque una lista.<br /><br />Pero creo haber visto como funciona:<br />Creas la inicial y tal, y en el update lo que haces es crear un nuevo &quot;nodo&quot; o parte del cuerpo de la serpiente, y con lo de self.body = self.body[0:self.length] eliminas el ultimo nodo. Vamos, que en realidad no se mueve, sino que creo por un lado y destruyo por otro.<br />¿Es así?<br /><br />Por otro lado, el tema de que al cambiar la cantidad de pixels que se desplaza la posicion cada pulsación de tecla, es lógico que ya no choque siempre con la comida: if Food.Posicion == Snake.Posicion: <br />tienen que ser las mismas, y esto solo se consigue moviendo un número de pixels igual al tamaño de cada casilla, no se si me explico.<br /><br />Buen trabajo Nathaniel.<br /><br />Haber si nos aclaras esta dudilla xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Jun 19, 2009 11:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2009-06-18T22:03:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2609#p2609</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2609#p2609"/>
<title type="html"><![CDATA[Una duda...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2609#p2609"><![CDATA[
He estado haciendo algunas pruebas con tu código para entenderlo pero hay cosas que se me escapan:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>self.Body.insert&#40;0,list&#40;self.Posicion&#41;&#41;</code></dd></dl><br /><br />En la linea 30 más o menos (he añadido algunas y quitado otras) tienes este código que me trae loco porque no consigo saber que hace exactamente. Deduzco que añade valores (self.Posicion?) a la lista «Body», pero si «self.Posicion» ya es una lista, ¿Por qué utilizas «list(self.Posicion)»?<br />Pregunto ésto porque probando cosas me ha dado por cambiar ésto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if self.Direccion == 0:<br />         self.Posicion&#91;1&#93; -= 16</code></dd></dl><br /><br />y darle valor 20, pero el resultado es que la serpiente ya no colisiona con las manzanas, las atraviesa, también ocurre cuando cambio la posición inicial de la serpiente en: <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>self.Posicion = &#91;160,304&#93;</code></dd></dl><br /><br />¿Por qué pasa eso? Tengo la impresión de que tiene que ver con lo que preguntaba al principio...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Jue Jun 18, 2009 10:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2009-06-17T10:52:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2606#p2606</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2606#p2606"/>
<title type="html"><![CDATA[Snake]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2606#p2606"><![CDATA[
¡Vaya! <br />Viendo como te ha quedado me doy cuenta de que me complico demasiado la vida en tonterías... voy a tener que aprender a simplificar.<br />Gracias por publicarlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mié Jun 17, 2009 10:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nathaniel]]></name></author>
<updated>2009-06-15T16:18:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2598#p2598</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2598#p2598"/>
<title type="html"><![CDATA[Snake]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=574&amp;p=2598#p2598"><![CDATA[
Me he basado en un juego de Pygame.org acerca del Snake y me he propuesto hacer uno parecido, aquí está el resultado:<br /><br />Aun está un poco soso sin imágenes ni nada, tengo que añadirlo esto además de que imprima un mensaje cuando pierdas, musica, etc.<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame.locals import *<br />from random import randrange<br />pygame.init&#40;&#41;<br /><br />Anchura, Altura = 350,350<br />Screen = pygame.display.set_mode&#40;&#40;Anchura,Altura&#41;&#41;<br />pygame.display.set_caption&#40;&quot;Nath Snake&quot;&#41;<br /><br />class Snake&#40;pygame.sprite.Sprite&#41;:<br />   def __init__&#40;self&#41;:<br />      pygame.sprite.Sprite.__init__&#40;self&#41;<br />      self.Posicion = &#91;160,304&#93;<br />      self.Body = &#91;&#93;<br />      self.Direccion = 0<br />      #0 es arriba, 1 derecha, 2 abajo, 3 izquierda.<br />      self.Length = 3<br />   def Update&#40;self&#41;:<br />      self.Body.insert&#40;0,list&#40;self.Posicion&#41;&#41;<br />      self.Body = self.Body&#91;0:self.Length&#93;<br />      <br />      if self.Direccion == 0:<br />         self.Posicion&#91;1&#93; -= 16<br />      elif self.Direccion == 1:<br />         self.Posicion&#91;0&#93; += 16<br />      elif self.Direccion == 2:<br />         self.Posicion&#91;1&#93; += 16<br />      elif self.Direccion == 3:<br />         self.Posicion&#91;0&#93; -= 16<br />         <br />      if self.Posicion&#91;0&#93; not in range&#40;349&#41;:<br />         exit&#40;&#41;<br />      if self.Posicion&#91;1&#93; not in range&#40;349&#41;:<br />         exit&#40;&#41;<br />         <br />      for b in self.Body:<br />         if self.Posicion == b:<br />            exit&#40;&#41;<br />            <br />      Screen.fill&#40;&#40;0, 0, 255&#41;, &#40;self.Posicion&#91;0&#93;, self.Posicion&#91;1&#93;, 19, 19&#41;&#41;<br />      for b in self.Body:<br />         Screen.fill&#40;&#40;0, 0, 255&#41;, &#40;b&#91;0&#93;, b&#91;1&#93;, 19, 19&#41;&#41;<br /><br />class Food&#40;pygame.sprite.Sprite&#41;:<br />   def __init__&#40;self&#41;:<br />      self.Position&#40;&#41;<br />   def Position&#40;self&#41;:<br />      self.Posicion = &#91;randrange&#40;1,18&#41;*16,randrange&#40;1,18&#41;*16&#93;<br />   def Update&#40;self&#41;:<br />      Screen.fill&#40;&#40;255, 0, 0&#41;, &#40;self.Posicion&#91;0&#93;, self.Posicion&#91;1&#93;, 16, 16&#41;&#41;<br /><br />Snake = Snake&#40;&#41;<br />SnakeGroup = pygame.sprite.Group&#40;&#41;<br />SnakeGroup.add&#40;Snake&#41;<br /><br />Food = Food&#40;&#41;<br /><br />Fuente = pygame.font.SysFont&#40;&quot;Arial&quot;, 30&#41;<br /><br />Running = True<br /><br />while Running:<br />   for event in pygame.event.get&#40;&#41;:<br />      if event.type == QUIT:<br />         Running = False<br />      elif event.type == KEYDOWN:<br />         if event.key == K_UP:<br />            Snake.Direccion = 0<br />         elif event.key == K_RIGHT:<br />            Snake.Direccion = 1<br />         elif event.key == K_DOWN:<br />            Snake.Direccion = 2<br />         elif event.key == K_LEFT:<br />            Snake.Direccion = 3<br />   if Food.Posicion == Snake.Posicion: <br />      Food.Position&#40;&#41;<br />      Snake.Length += 1<br />   Screen.fill&#40;&#40;255,255,255&#41;&#41;<br />   Snake.Update&#40;&#41;<br />   Food.Update&#40;&#41;   <br />   Render = Fuente.render&#40;&quot;Score: %d&quot; % &#40;Snake.Length-3&#41;, 1, &#40;0,0,0&#41;&#41;<br />   Screen.blit&#40;Render,&#40;5,5&#41;&#41;<br />   pygame.display.update&#40;&#41;<br />   pygame.time.wait&#40;100&#41;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2061">Nathaniel</a> — Lun Jun 15, 2009 4:18 pm</p><hr />
]]></content>
</entry>
</feed>