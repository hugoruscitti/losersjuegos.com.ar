<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=554" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-05-03T21:25:45+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=554</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-05-03T21:25:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2505#p2505</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2505#p2505"/>
<title type="html"><![CDATA[Problema de colisiones en Tetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2505#p2505"><![CDATA[
gracias a los dos por los comentarios. Miraré lo de las matrices, lo que pasa es que mi intención era hacerlo por colisiones...<br />Pero parece más facil con matrices, y mi objetivo de momento es tenerlo terminadito<br /><br />Gracias a ambos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom May 03, 2009 9:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ceferino]]></name></author>
<updated>2009-05-03T20:21:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2504#p2504</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2504#p2504"/>
<title type="html"><![CDATA[Problema de colisiones en Tetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2504#p2504"><![CDATA[
<blockquote><div><cite>endaramiz escribió:</cite><br />Hola ceferino, bienvenido al foro. Si quieres tener un contenedor donde importa añadir y quitar cosas rápidamente y, sin embargo, no importa el orden de los elementos, es mejor usar una list que un vector (lo digo por el primer código: bloquecitos_muertos).<br /></div></blockquote><br /><br />Buenas,<br />Claro una list es mas adecuado, pero vamos, un tetris no necesita 100 FPS <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" /><br /><br />saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2097">ceferino</a> — Dom May 03, 2009 8:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-05-03T13:31:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2501#p2501</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2501#p2501"/>
<title type="html"><![CDATA[Problema de colisiones en Tetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2501#p2501"><![CDATA[
Hola, hay otra manera más simple de plantear el problema que usando un struct Bloquecito. La idea consiste en que toda la lógica se hace únicamente con una matriz de enteros (toda la pantalla con los cuadrados en reposo) y una pieza compuesta de una matriz y una posición. El entero tiene valor 0 si no hay ningún cuadrado en esa posición o un número diferente de 0 si hay un cuadrado (el número indica el color).<br />Planteado de esta manera, comprobar las colisiones es bien simple:<br /><dl class="codebox"><dt>Code: </dt><dd><code>bool col&#40;int f, int c, const Matriz&amp; pieza, const Matriz&amp; pantalla&#41; &#123;<br />    for &#40;int i = 0; i &lt; altura_pieza; ++i&#41; &#123;<br />        for &#40;int j = 0; j &lt; anchura_pieza; ++j&#41; &#123;<br />            if &#40;pieza&#91;i&#93;&#91;j&#93; and pantalla&#91;i+f&#93;&#91;j+c&#93;&#41; return true;<br />            //if &#40;pieza&#91;i&#93;&#91;j&#93; != 0 and pantalla&#91;i+f&#93;&#91;j+c&#93; != 0&#41; return true;<br />        &#125;<br />    &#125;<br />    return false;<br />&#125;</code></dd></dl><br />Donde la 'f' y la 'c' es la posición de la pieza. Un int se trata como un bool: false sí y solo sí el int es 0. El tipo Matriz dejo que lo definas a tu gusto: como un array o verctor de vector. Si eliges la segunda opción, compilalo con optimización ya que sinó puede notarse la ineficiencia del vector.<br /><br />Hola ceferino, bienvenido al foro. Si quieres tener un contenedor donde importa añadir y quitar cosas rápidamente y, sin embargo, no importa el orden de los elementos, es mejor usar una list que un vector (lo digo por el primer código: bloquecitos_muertos).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom May 03, 2009 1:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ceferino]]></name></author>
<updated>2009-05-01T20:49:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2499#p2499</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2499#p2499"/>
<title type="html"><![CDATA[Problema de colisiones en Tetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2499#p2499"><![CDATA[
Hola, <br /><br />Para poder comprobar si un bloque colisiona con otro previamente necesitas tener almacenado el conjunto de bloques que ya han sido colocados al fondo de la pantalla (llamemosle 'muertos').<br />Lo que puedes hacer es dividir cada bloque en 4 bloquecitos,  y tener una lista con todos los bloquecitos muertos. Entonces a la hora de mover el bloque en juego primero compruebas si algun bloquecito de ese bloque colisiona con algun otro de la lista de bloquecitos muertos.<br /><br />En C++,  un algoritmo podría ser así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>struct Bloquecito &#123;<br />      SDL_Surface * pixmap;<br />      SDL_Rect posicion, clip;<br />&#125;;<br /><br />struct Bloque &#123;<br />      struct Bloquecito * bloquecitos&#91;4&#93;;<br />      int centro_x, centro_y;<br />&#125;;<br /><br />vector&lt;Bloquecito*&gt; bloquecitos_muertos;<br /><br />bool colisiona_bloque &#40;Bloque* bloque&#41;<br />&#123;<br />    vector&lt;Bloquecito*&gt;::iterator it;<br />    for &#40;it=bloquecitos_muertos.begin&#40;&#41;; it!=bloquecitos_muertos.end&#40;&#41;;it++&#41;<br />    &#123;<br />      for &#40;int i=0; i&lt;4;i++&#41;<br />      &#123;<br />       if&#40;colisiona_rect&#40;&#40;*it&#41;-&gt;posicion,bloque-&gt;bloquecitos&#91;i&#93;-&gt;posicion&#41;&#41;<br />                return true;<br />      &#125;<br />    &#125;<br />    return false;<br />&#125;<br /><br /></code></dd></dl><br /><br />Donde colisiona_rect() comprueba si dos SDL_rect's intersectan. Puedes encontrar esta función en casi cualquier juego, es bastante sencilla.<br /><br />Por otro lado tene en cuenta que ademas debes llevar cuenta de que cantidad de bloquecitos muertos hay en cada linea, por lo que en realidad convendria utilizar una matriz para los bloquecitos muertos. Donde para cada fila i le corresponde un vector con los bloquecitos pertenecientes a la linea i , entonces las estructuras quedarían así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>struct Bloquecito &#123;<br />      SDL_Surface * pixmap;<br />      SDL_Rect posicion, clip;<br />      // nuevo atributo.... inicialmente 'false'<br />      bool muerto;<br />&#125;;<br /><br />struct Bloque &#123;<br />      struct Bloquecito * bloquecitos&#91;4&#93;;<br />      int centro_x, centro_y;<br />&#125;;<br /><br />// una matriz,  m&#91;i&#93;&#91;j&#93; representa el bloque j de la linea i<br />vector&lt;vector&lt;Bloquecito*&gt; &gt; bloquecitos_muertos;<br /></code></dd></dl><br /><br />Luego, recorriendo esa matriz puedes determinar la cantidad de bloquecitos muertos para cada linea, y asi eliminar esa linea (que en este caso seria eliminar una fila de la matriz).<br /><br />Si no estas familiarizado con la biblioteca STL te recomiendo el sitio: <br /><br /><!-- m --><a class="postlink" href="http://www.cplusplus.com/reference/">http://www.cplusplus.com/reference/</a><!-- m --> <br /><br />saludos!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2097">ceferino</a> — Vie May 01, 2009 8:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-05-01T01:19:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2497#p2497</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2497#p2497"/>
<title type="html"><![CDATA[Problema de colisiones en Tetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=554&amp;p=2497#p2497"><![CDATA[
Buenas, estoy tratando de hacer un simple tetris, pero el problema es que no se me ocurre como manejar las colisiones laterales(es decir, que si pulso a derecha y hay otro bloque en esa posicion, no me deje realizar el movimiento.<br /><br />Gracias<br /><br />Juanxo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie May 01, 2009 1:19 am</p><hr />
]]></content>
</entry>
</feed>