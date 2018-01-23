<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=577" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-06-27T14:38:04+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=577</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-06-27T14:38:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2651#p2651</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2651#p2651"/>
<title type="html"><![CDATA[colisiones en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2651#p2651"><![CDATA[
Si quieres complicarte la vida lo menos posible, lo más fácil es poner la matriz directamente en el código, en vez de leerla de un archivo a parte:<br /><dl class="codebox"><dt>Code: </dt><dd><code>matriz = &#91;&#91;1,0,1,1,1&#93;,<br />          &#91;1,0,0,0,1&#93;,<br />          &#91;1,0,1,0,1&#93;,<br />          &#91;1,1,1,0,1&#93;&#93;</code></dd></dl><br /><br /><br />Para hacer las colisiones, puedes pensar en el personaje como 4 puntos (un cuadrado, que se puede representar en un 'rect'). Si uno de estos puntos corresponden a una posición de la matriz que tiene un 1, hay colisión. Esto es cierto si el personaje es más pequeño que un cuadrado del laberinto.<br /><br />Pistas: para conseguir la posición de los puntos del cuadrado, hace falta saber su posición, la altura y la anchura.<br />Para saber que posición de la pantalla corresponde a qué posición de la matriz, necesitas saber qué anchura y altura representa cada posición de la matriz en la pantalla.<br /><br />Si aun así no te sale, ya te pondré la fórmula.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Jun 27, 2009 2:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-06-25T10:40:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2643#p2643</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2643#p2643"/>
<title type="html"><![CDATA[colisiones en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2643#p2643"><![CDATA[
buenas:<br /><br />No se como estarás intentando hacerlo, pero la forma más rápida de hacerlo es mapa = archivo.readlines()<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Jun 25, 2009 10:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-24T22:45:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2640#p2640</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2640#p2640"/>
<title type="html"><![CDATA[colisiones en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2640#p2640"><![CDATA[
<blockquote><div><cite>xulubkisin escribió:</cite><br />ya lo intente asi como dijiste y no pude, por que al momento de crear el mapa en el block de notas solo me deja crear un mapa de 1024 caracteres y yo lo necesito mas grande, mas o menos de 5000 * 5000 y que sea en este estilo:<br />1101111<br />1000001<br />1011101<br />1011101<br />1111001<br />1100011<br />1101111<br /></div></blockquote><br /><br />Ya por lo del blog de notas voy a suponer (corrigeme si me equivoco) que usas windows, no me voy a poner a hablar aqui de gustos suicidas; vale que sea windows, que sea lo peor que uno pueda encontrar bajo el nombre &quot;sistema operativo&quot; y todo eso, pero no creo ke ahora, como novedad, el blog de notas solo pueda trabajar con archivos de 1Kb, si puede ser que al llegar a los 1024 caracteres te siga mostrando los carracteres debajo, por el ajuste automatico del texto, pero se supone que al guardar, aunque el siga en la linea de abajo si tu no has pulsado enter no hay una nueva linea por lo que al leerlo desde pygame deberia de leerse sin final de linea como si estuviera en una sola linea, de todos modos si el problema esta en el final de linea puedes sencillamente ignorar el final de linea al leer el mapa y utilizar otro caracter para separar una linea de otra al leer el mapa, por ejemplo un # que al leerlo desde pygame ya te hara saber que lo que sigue es una nueva linea. Otra opcion es que dejes de lado el bloc de notas (digo el bloc de notas pero si dejas de lado windows por completo mejor) y usar otro editor o programar un editor de mapas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mié Jun 24, 2009 10:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xulubkisin]]></name></author>
<updated>2009-06-24T16:48:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2638#p2638</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2638#p2638"/>
<title type="html"><![CDATA[colisiones en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2638#p2638"><![CDATA[
<blockquote><div><cite>endaramiz escribió:</cite><br />Una manera más fácil sería tener una imagen de un cuadradito y una matriz que representaría el laberinto. Por ejemplo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>10111<br />10001<br />10101<br />11101</code></dd></dl><br />Y luego, tener una función que le pasas la matriz y te dibuja el mapa.<br />Si en vez de utilizar una circunferencia como personaje, utilizas un cuadrado, te será más fácil la colisión.<br /></div></blockquote><br /><br />ya lo intente asi como dijiste y no pude, por que al momento de crear el mapa en el block de notas solo me deja crear un mapa de 1024 caracteres y yo lo necesito mas grande, mas o menos de 5000 * 5000 y que sea en este estilo:<br />1101111<br />1000001<br />1011101<br />1011101<br />1111001<br />1100011<br />1101111  pero el pygame no me lo lee asi, quien me ayuda?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2115">xulubkisin</a> — Mié Jun 24, 2009 4:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xulubkisin]]></name></author>
<updated>2009-06-22T19:37:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2624#p2624</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2624#p2624"/>
<title type="html"><![CDATA[colisiones en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2624#p2624"><![CDATA[
en otro tema esta publicado el codigo, a ver si asi me ayudan mas facil, por que la verdad no he entendido muy bien, tengan en cuenta que apenas estoy empezando <a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=578" class="postlink">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=578</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2115">xulubkisin</a> — Lun Jun 22, 2009 7:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-06-21T18:44:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2623#p2623</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2623#p2623"/>
<title type="html"><![CDATA[colisiones en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2623#p2623"><![CDATA[
Algo muy preciso, fácil de implementar, pero lento, es colisión pixel por pixel.<br /><br />Recorre la imagen de la pelota pixel por pixel, para cada pixel comparas con su posición correspondiente en la imagen del laberinto, si en algún momento encuentras que los colores del círculo que representa al jugador coinciden con el de las paredes del laberinto, es que ha habido una colisión.<br /><br />Como dije, es fácil de implementar, pero muy lento para un juego porque se está perdiendo mucho tiempo en hacer la verificación pixel por pixel, pero aún así, podría ser aceptable para tu juego, ya que no es tan complicado <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />Hay varias formas de intentar optimizar esto, una es la que lacabra mencionó, extendiéndola, podrías representar al jugador con un cuadro (solamente para las colisiones), las paredes del laberinto como un conjunto de cuadros, checas si hay colisión entre dichos cuadros y, si la hay, entonces haces la verificación pixel por pixel. Es decir, sigues usando la colisión pixel a pixel (que es necesaria por la diferencia de formas círculo - cuadrado), pero no la ejecutas tantas veces.<br /><br />En esta página encuentras un poco de información básica sobre colisiones en 2D:<br /><!-- m --><a class="postlink" href="http://www.vb-mundo.com/Deteccion-Colisiones-2D.asp">http://www.vb-mundo.com/Deteccion-Colisiones-2D.asp</a><!-- m --><br /><br />Suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom Jun 21, 2009 6:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xulubkisin]]></name></author>
<updated>2009-06-21T14:05:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2620#p2620</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2620#p2620"/>
<title type="html"><![CDATA[colisiones en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2620#p2620"><![CDATA[
pues es que el laberinto que quiero es una imagen completa.<br /><br /> entonces queda muy dificil hacerlo?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2115">xulubkisin</a> — Dom Jun 21, 2009 2:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-06-20T16:40:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2619#p2619</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2619#p2619"/>
<title type="html"><![CDATA[colisiones en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2619#p2619"><![CDATA[
¿El laberinto entero es una sola imagen? Una manera más fácil sería tener una imagen de un cuadradito y una matriz que representaría el laberinto. Por ejemplo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>10111<br />10001<br />10101<br />11101</code></dd></dl><br />Y luego, tener una función que le pasas la matriz y te dibuja el mapa.<br />Si en vez de utilizar una circunferencia como personaje, utilizas un cuadrado, te será más fácil la colisión.<br /><br />Igualmente, también puedes tener una imagen con todo el mapa y hacer hacer colisión por píxel. Hay un ejemplo sobre esto.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Jun 20, 2009 4:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xulubkisin]]></name></author>
<updated>2009-06-19T15:59:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2616#p2616</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2616#p2616"/>
<title type="html"><![CDATA[colisiones en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=577&amp;p=2616#p2616"><![CDATA[
hola, soy nuevo en lo de crear juegos con pyton, y he empezado a crear un laberinto, el cual es una imagen png, y para atravesarlo una bola que es tambien en png, pero aun no se como crear una colision entre la bola y el laberinto, para que no pase derecho, me gustaria que me ayudaran, para aprender a hacerlo.  <br /><br /><a href="http://img200.imageshack.us/i/laberinto.png/" class="postlink">[img=http://img200.imageshack.us/img200/2229/laberinto.th.png]</a><br /><br />esta es la imagen de el laberinto, y hay esta la bola que quiero que lo atraviese, pero no se como hacer la colision para esa imagen del laberinto completa[/img]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2115">xulubkisin</a> — Vie Jun 19, 2009 3:59 pm</p><hr />
]]></content>
</entry>
</feed>