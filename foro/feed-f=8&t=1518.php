<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1518" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-07-16T18:28:50+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1518</id>
<entry>
<author><name><![CDATA[xRodak]]></name></author>
<updated>2012-07-16T18:28:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6925#p6925</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6925#p6925"/>
<title type="html"><![CDATA[Re: [Pygame] Cómo puedo mover un mapa de fondo basado en til]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6925#p6925"><![CDATA[
Gracias a los dos, la información de la web me será útil.<br /><br />Y Barajas, perdón por mi gran estupidez, pero soy muy, pero muy nuevo, en el trabajo con tiles y pygame, por lo que hay cosas muy fáciles que las hago de manera compleja, pero para ello estoy aprendiendo, y gracias por la sugerencia, sin duda alguna, es la mejor de todas, ahora mismo cambiaré el sistema del mapa, gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2631">xRodak</a> — Lun Jul 16, 2012 6:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-16T13:03:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6924#p6924</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6924#p6924"/>
<title type="html"><![CDATA[Re: [Pygame] Cómo puedo mover un mapa de fondo basado en til]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6924#p6924"><![CDATA[
Bueno, sinceramente, considero que es poco eficiente estar haciendo un bucle constantemente para estar dibujando el fondo...  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> <br /><br />Antes de comenzar el bucle del juego, yo prefiero crear una imagen de las dimensiones totales de todo el mapa de tiles, la lleno de un color magenta, pego sobre el todos los tiles, y después le hago transparencia al magenta.... y en el bucle solo pego la imagen.... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Bueno, cada quien hace lo que le funciona <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Jul 16, 2012 1:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-07-16T07:49:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6923#p6923</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6923#p6923"/>
<title type="html"><![CDATA[Re: [Pygame] Cómo puedo mover un mapa de fondo basado en til]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6923#p6923"><![CDATA[
Mirate esto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><br /><a href="http://aventurapygame.blogspot.com.es/" class="postlink">http://aventurapygame.blogspot.com.es/</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Lun Jul 16, 2012 7:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xRodak]]></name></author>
<updated>2012-07-15T19:20:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6921#p6921</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6921#p6921"/>
<title type="html"><![CDATA[Re: [Pygame] Cómo puedo mover un mapa de fondo basado en til]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6921#p6921"><![CDATA[
Problema solucionado ! Ya logré mover el mapa, al parecer mi teoría estaba en lo correcto debía utilizar la función Sprite con los tiles de fondo de todas maneras.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2631">xRodak</a> — Dom Jul 15, 2012 7:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xRodak]]></name></author>
<updated>2012-07-15T18:39:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6920#p6920</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6920#p6920"/>
<title type="html"><![CDATA[[Pygame] Cómo puedo mover un mapa de fondo basado en tiles?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1518&amp;p=6920#p6920"><![CDATA[
Bueno, soy nuevo en el foro, y estoy comenzando hace poco con pygame, anteriormente solo sabía python, y por esto mismo he querido introducirme en pygame, para expandir mis conocimientos, y luego de ello, pienso ir por Java o por C/C++, pero por el momento, me mantengo al margen con esto hasta saberlo muy bien.<br /><br />Les comento mi problema, estoy diseñando un RPG en 2D, en donde el mapa de fondo está hecho con el  conocido sistema de tiles (tilesets). Lo que quiero lograr es mantener el personaje estático mientras el mapa de fondo se mueve, para simular el movimiento del personaje. Por ahora tengo el movimiento del personaje, pero lo que no logro hacer, es que se mueva el mapa. Tengo las siguientes variables:<br /><br />self.mapa: Lista tridimensional. Posee 3 capas del mapa (3 listas), cada capa posee una cantidad &quot;self.height&quot; de filas, y cada fila una cantidad &quot;self.weigth&quot; de imágenes (Surfaces obtenidas mediante Surface,subsurface), por lo que cada imagen debería representarse por self.mapa[c][fil][col]<br /><br />self.recs: Lista tridimensional con el get_rect() de cada imagen de self.mapa. Por lo que es una lista de rectángulos de cada superficie de self.mapa.<br /><br />Ahora, la función que utilizo para mover el mapa es la siguiente:<br /><br /><br /><pre class="prettyprint">def update&#40;self,screen,vx,vy&#41;:<br />x = 0 ; y = 0 ;z = 0<br />for capa in self.mapa:<br />for fila in capa:<br />for imagen in fila:<br />if imagen!=None:<br />self.recs[z][y][x].move_ip&#40;-vx,-vy&#41;<br />screen.blit&#40;imagen,self.recs[z][y][x]&#41;<br />print &quot;sirve&quot;<br />else:<br />pass<br />x += 1<br />x=0<br />y += 1<br />y = 0<br />z += 1</pre><br /><br />Screen es la variable de la pantalla de pygame, vx la velocidad con la que quiero mover el mapa en el eje X, lo mismo con vy. Bueno, obtengo el siguiente error al tratar de correr mi programa principal:<br /><br /><pre class="prettyprint">Traceback &#40;most recent call last&#41;:<br />  File &quot;C:\Users\Ednar\Desktop\Tarea4enunciado\Tarea4 RPG\Tarea 3 RPG\PY Game\RPG\Test.py&quot;, line 124, in &lt;module&gt;<br />    main&#40;&#41;<br />  File &quot;C:\Users\Ednar\Desktop\Tarea4enunciado\Tarea4 RPG\Tarea 3 RPG\PY Game\RPG\Test.py&quot;, line 118, in main<br />    mapa.update&#40;vx, vy, screen&#41;<br />  File &quot;C:\Users\Ednar\Desktop\Tarea4enunciado\Tarea4 RPG\Tarea 3 RPG\PY Game\RPG\maps.py&quot;, line 97, in update<br />    self.recs[z][y][x].move_ip&#40;-vx,-vy&#41;<br />TypeError: bad operand type for unary -: &#39;pygame.Surface&#39;</pre><br /><br />Me falla la linea &quot;self.recs[z][y][x].move_ip(-vx,-vy)&quot;, desafortunadamente no puedo ver el problema, mi variable self.recs, son solamente rectángulos, y en algunos lugares su valor es None, pero no es una Surface como me indica el error.<br /><br />Un problema que veo presente, es que no estoy utilizando la clase Sprite para las imagenes del fondo, por ello no me permite mover las imagenes mediante rect.move_ip(x,y), pero no estoy seguro. Dicha clases es:<br /><br /><pre class="prettyprint">class Sprite&#40;pygame.sprite.Sprite&#41;:<br />def __init__&#40;self,imagen&#41;:<br />self.imagen=imagen<br />self.rect=self.imagen.get_rect&#40;&#41; #obtiene el rectángulo de dicha imagen</pre><br /><br />Esta es la función en donde dibujo el mapa por primera vez en la pantalla, y en donde creo los rectángulos de cada imagen:<br /><br /><pre class="prettyprint">def dibujar_mapa&#40;self,screen&#41;:<br />x = 0 ; y = 0 ;z = 0<br />for capa in self.mapa:<br />for fila in capa:<br />for imagen in fila:<br />try:<br />self.recs[z][y][x]=imagen.get_rect&#40;&#41;<br />self.recs[z][y][x].left=x*40<br />self.recs[z][y][x].top=y*40<br />screen.blit&#40;imagen,self.recs[z][y][x]&#41;<br />except:<br />self.recs[z][y][x]=None<br />x += 1<br />x=0<br />y += 1<br />y = 0<br />z += 1</pre><br /><br />Esta función me funciona a la perfección, si utilizo esta función en el loop principal de pygame,  me dibuja siempre el mismo mapa, sin movimiento, por lo tanto ésta la dejé antes de loop principal, para que me dibuje el mapa solamente una vez, luego en el loop principal, puede la función anterior (update) la que me da el error señalado.<br /><br /><br />Espero que me puedan ayudar con el problema, lo que quiero hacer es poder mover esa GRAN cantidad de pequeñas imágenes (tiles). Sé mover sprites, creados con la función Sprite, pero el mapa no logro moverlo, ojalá me ayuden con esto:<br /><br />Saludos !<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2631">xRodak</a> — Dom Jul 15, 2012 6:39 pm</p><hr />
]]></content>
</entry>
</feed>