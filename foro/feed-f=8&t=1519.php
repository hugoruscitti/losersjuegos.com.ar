<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1519" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-07-17T04:26:41+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1519</id>
<entry>
<author><name><![CDATA[xRodak]]></name></author>
<updated>2012-07-17T04:26:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1519&amp;p=6926#p6926</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1519&amp;p=6926#p6926"/>
<title type="html"><![CDATA[Re: [Pygame] Problema de asignación de valor a variable]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1519&amp;p=6926#p6926"><![CDATA[
Problema solucionado, la primera capa del mapa estaba mal hecha, lo que causo un error sumamente extraño en el resto del código.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2631">xRodak</a> — Mar Jul 17, 2012 4:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xRodak]]></name></author>
<updated>2012-07-16T04:36:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1519&amp;p=6922#p6922</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1519&amp;p=6922#p6922"/>
<title type="html"><![CDATA[[Pygame] Problema de asignación de valor a variable]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1519&amp;p=6922#p6922"><![CDATA[
Buenas tardes, he estado mucho tiempo intentando resolver un gran problema, lamentablemente no he podido resolverlo, pero al menos ya sé que es lo que sucede . . .<br /><br />Veran, tengo una variable &quot;self.mapa&quot;, y en una función completamente aparte, tengo una variable interna de la función llamada &quot;colisiones&quot;, y cuando le asigno un valor a la variable (tabla) colisiones, por una extraña razón se cambia el valor en self.mapa, no sé si me explico, ahora pondré el error:<br /><br /><pre class="prettyprint">def crearColisiones&#40;self&#41;:<br />colisiones=self.colisiones<br />for y in range&#40;self.height&#41;:<br />for x in range&#40;self.width&#41;:<br />if self.colisiones[y][x]:<br /><span style="font-weight: bold">colisiones[y][x]=1</span><br />else:<br />colisiones[y][x]=None<br />self.colisiones=colisiones<br />self.colisiones=colisiones<br />def update&#40;self,screen,vx,vy,rect&#41;:<br />x = 0 ; y = 0 ;z = 0<br />for capa in self.mapa:<br />for fila in capa:<br />for sprite in fila:<br />if sprite!=None:<br /><span style="font-weight: bold">self.mapa[z][y][x].update&#40;screen,vx,vy&#41;</span><br />else:<br />pass<br />x += 1<br />x=0<br />y += 1<br />y = 0<br />z += 1</pre><br /><br /><pre class="prettyprint">Traceback &#40;most recent call last&#41;:<br />  File &quot;C:\Users\Ednar\Desktop\Tarea4enunciado\Tarea4 RPG\Tarea 3 RPG\PY Game\RPG\Test.py&quot;, line 46, in &lt;module&gt;<br />    main&#40;&#41;<br />  File &quot;C:\Users\Ednar\Desktop\Tarea4enunciado\Tarea4 RPG\Tarea 3 RPG\PY Game\RPG\Test.py&quot;, line 41, in main<br />    MapTest.update&#40;screen, Player.vx, Player.vy, Player.rect&#41;<br />  File &quot;C:\Users\Ednar\Desktop\Tarea4enunciado\Tarea4 RPG\Tarea 3 RPG\PY Game\RPG\maps.py&quot;, line 101, in update<br />    self.mapa[z][y][x].update&#40;screen,vx,vy&#41;<br />AttributeError: &#39;int&#39; object has no attribute &#39;update&#39;</pre><br /><br />Como se dan cuenta, en &quot;colisiones[y][x]=1&quot; le entregué un &quot;int&quot; (entero) a la tabla colisiones, luego, mágicamente, en la función &quot;update&quot; que está más abajo me señala que el entero no tiene atribuida la funcion update (es una función de aparte, de una clase que hice, que le puse el mismo nombre por cumplir una función similar). Si a la tabla &quot;colisiones&quot;, en vez de entregarle un número entero, le entro un string, me sale el siguiente error:<br /><br /><pre class="prettyprint">self.mapa[z][y][x].update&#40;screen,vx,vy&#41;<br />AttributeError: &#39;str&#39; object has no attribute &#39;update&#39;</pre><br /><br />Y en ningún momento he cambiado los valores de self.mapa. Por otro lado, si borro la linea &quot;colisiones[y][x]=1&quot; y agrego un pass (para que no haga nada), el error se repara, y se activa el &quot;self.mapa[z][y][x].update(screen,vx,vy)&quot; normalmente.<br /><br />En palabras simples, le doy valores a una función y se modifican los valores de otra, haciendo que falle completamente mi programa.<br />Alguno sabe a que puede deberse este tan extraño error?<br /><br />Gracias de antemano.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2631">xRodak</a> — Lun Jul 16, 2012 4:36 am</p><hr />
]]></content>
</entry>
</feed>