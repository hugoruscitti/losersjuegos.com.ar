<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=714" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-04-10T02:10:39+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=714</id>
<entry>
<author><name><![CDATA[henbaku]]></name></author>
<updated>2010-04-10T02:10:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=714&amp;p=3327#p3327</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=714&amp;p=3327#p3327"/>
<title type="html"><![CDATA[Colisiones Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=714&amp;p=3327#p3327"><![CDATA[
Muchas gracias hugo, me ha servido.<br /><br />El problema es que hago uso de &quot;collidepoint&quot;, el cual me parece que no puedo manejar con listas de rects, sin embargo el problema pude solucionarlo fácilmente; lo que hice fue crear una recta extra (llamada colrect), que es un poco mas grande a los lados y arriba/abajo de la rect principal del personaje; los bloques detectan si colisionan con esta rect (que indica que esta a una muy corta distancia del personaje) y se agregan a una lista, y si no están colisionando se eliminan de esta lista si están allí.<br /><br />Ya después hago una verificación mediante una iteración a esta lista; puede que sea un método ineficiente, pero al menos parece funcionar bastante bien (originalmente lo había intentado iterando en la lista con todos los bloques, lo cual fue catastrófico para el rendimiento).<br /><br />También, decidí eliminar todas los rects de bloques (que eran cientos; uno por cada cuadricula de bloque de 24x24), en favor de una menor cantidad de rects largas que abarcan secciones de bloques, lo cual ayuda que la iteración para la detección de colisiones sea usualmente de uno a tres rects; de momento tengo que crear estas rects a mano, sin embargo el trabajo se me facilitará después ya que planeo programar un editor de niveles que me permita señalar los sitios que son paredes, suelos y eso <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<br /><br />Saludos, muchas gracias por la nota.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2206">henbaku</a> — Sab Abr 10, 2010 2:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-04-08T13:50:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=714&amp;p=3326#p3326</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=714&amp;p=3326#p3326"/>
<title type="html"><![CDATA[Colisiones Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=714&amp;p=3326#p3326"><![CDATA[
Buenas como estas?, te comento que pygame reune<br />casi todas las funciones para detectar colisiones<br />en la clase Rect.<br /><br />Por lo tanto, si quieres verificar colisiones le tienes<br />que preguntar a tus objetos rect si colisionan o no.<br /><br />Por ejemplo, lo mas común es que cada sprite tenga<br />un atributo &quot;rect&quot; indicando su tamaño y posición (como<br />tú lo estás haciendo). Entonces, para analizar si ese<br />rectángulo colisiona o no con algo podrías escribir:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>ha_colisionado = personaje.rect.collidelist&#40;lista_de_paredes&#41;<br /><br />if ha_colisionado:<br />    print &quot;esta en contacto con una pared&quot;<br /></code></dd></dl><br /><br />donde &quot;lista_de_paredes&quot; puede ser una lista de objetos rect, por<br />ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>pared_1 = pygame.Rect&#40;10, 10, 50, 50&#41;<br />pared_2 = pygame.Rect&#40;80, 10, 50, 50&#41;<br /><br />lista_de_paredes = &#91;pared_1, pared_2&#93;<br /></code></dd></dl><br /><br /><br />Ten en cuenta que en la siguiente seccion del manual<br />tienes mas funciones de colisiones para investigar:<br /><br />     <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/traducciones/pygame/rect">http://www.losersjuegos.com.ar/traducciones/pygame/rect</a><!-- m --><br /><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Abr 08, 2010 1:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[henbaku]]></name></author>
<updated>2010-04-08T04:58:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=714&amp;p=3324#p3324</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=714&amp;p=3324#p3324"/>
<title type="html"><![CDATA[Colisiones Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=714&amp;p=3324#p3324"><![CDATA[
Buenas, soy nuevo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<br /><br />Empecé en esto de desarrollo con un toolkit llamado GameMaker (seguro que alguno lo conocerá), el caso es que ahora soy partidario de software libre, y pues vivo en Linux, y decidí adoptar PyGame (amo Python).<br /><br />Todavía no conozco con profundidad la API; empecé programando un scrollengine que quedó bastante decente (imita muy bien a las viewports de gamemaker). El juego que hago está además basado en tiles (típico).<br /><br />La cuestión es que quería referenciarme acerca de las colisiones.<br /><br />El personaje al que sigue la camara, tiene un Rect (del tamaño del sprite que usa); hice una clase llamada &quot;bloque&quot;, que se autocrea un Rect con las proporciones y posición de ciertos tiles (las paredes y eso), todos esos bloques los almaceno en una lista.<br /><br />La cuestión es que, quería saber, sobre las funciones de colisión de PyGame; básicamente lo que deseo saber, es si es posible detectar colisiones con una lista de Rectangulos (Rects) existentes sin tener que verificar uno por uno (vía un bucle o tal). Por el scrollengine no se preocupen (piensen como si fuera un juego plano).<br /><br />En gamemaker por ejemplo, teniamos &quot;Objetos&quot; (que eran algo así como Clases), en los escenarios, podías crear varios, en los juegos solía crear un objeto para los muros, y el personaje, detectaba las colisiones señalandole la clase y las detectaba con todos los objetos descendientes de esta.<br /><br />Sé que la metódica es totalmente distinta, pero bueno.<br /><br />Tengo mis ideas sobre como detectar colisiones, pero quiero saber si la API de pygame tiene ya funciones integradas (si no, estaría reinventando la rueda ¿o no? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2206">henbaku</a> — Jue Abr 08, 2010 4:58 am</p><hr />
]]></content>
</entry>
</feed>