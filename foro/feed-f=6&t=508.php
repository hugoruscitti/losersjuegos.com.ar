<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=508" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-03-21T00:05:03+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=508</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-03-21T00:05:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2329#p2329</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2329#p2329"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2329#p2329"><![CDATA[
Todo está dentro de la función <span style="font-weight: bold">colocar_pixel</span>, lo que hace es colocar los valores que recibe en la posición adecuada de memoria, de acuerdo al número de bytes que representan cada pixel en el modo que se está trabajando. Por ejemplo, <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Uint8 *p = &#40;Uint8 *&#41;src-&gt;pixels + y * src-&gt;pitch + x*bpp;<br /></code></dd></dl><br />Esto nos da la dirección del pixel.<br /><br />Supongamos que trabajamos en modo de 24 bits (3 bytes por pixel).<br /><br />El valor de pixel que pasamos es de 4 bytes (Uint32), ordenados así: XRGB.<br />Para representar esas tres componentes en una máquina big endian, esos valores se colocan en memoria de esta forma: RGB.<br />Mientras que en una máquina little endian, quedarían así: BGR.<br /><br />Lo que el código dentro de <span style="font-weight: bold">case 3</span> hace es colocar el valor de pixel en memoria en el orden correcto. Fíjate que, para p[ 1 ], el código es exactamente igual (B queda enmedio en ambos casos).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Mar 21, 2009 12:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-20T21:29:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2327#p2327</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2327#p2327"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2327#p2327"><![CDATA[
Me surgio una duda mas...<br />ya creada una superficie para almacenar el efecto, ahora como hago el blit sobre la superficie principal, es decir; como pego la superficie creada en la superficie principal?...<br /><span style="font-weight: bold">[EDITO]</span> Ya he logrado hacerlo<br />Ahora mi otra duda es, cual es la parte concreta (segun el codigo arriba) para dibujar un pixel...¿?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Vie Mar 20, 2009 9:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-03-20T14:42:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2324#p2324</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2324#p2324"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2324#p2324"><![CDATA[
Hola, creo que:<br /><dl class="codebox"><dt>Code: </dt><dd><code> x &lt;src&gt;w </code></dd></dl><br />en realidad deberia escribirse como:<br /><dl class="codebox"><dt>Code: </dt><dd><code> x &lt; src-&gt;w </code></dd></dl><br />Creo que tiene mas sentido.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Vie Mar 20, 2009 2:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-03-19T21:48:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2321#p2321</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2321#p2321"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2321#p2321"><![CDATA[
Tengo una duda con el código:<br /><dl class="codebox"><dt>Code: </dt><dd><code>for&#40;x = 0; x &lt;src&gt;w; x++&#41;&#123;</code></dd></dl><br />En concreto con el 'x &lt;src&gt;w'. Es la primera vez que lo veo. Y por internet no veo nada.<br /><br />Por cierto, si se compila con optimización del código, creo que el compilador hace automáticamente lo de las variables register. Sería cuestión de probarlo...<br /><br />Saludos.<br /><br />EDIT:<br /><blockquote><div><cite>lacabra25 escribió:</cite><br />no me acuerdo si era en los ejemplos o donde era pero me parece que en uno de los ejemplos hay funciones para dibujar un pixel de un color determinado en una superficie en las coordenadas que se quiera.<br /></div></blockquote><br />Correcto:<br />- Capítulo 1 del libro de RCAF<br />- Ejemplos de gráficas de Carlos Gabriel Valentin<br />- Artículo del rectángulo con las esquinas redondeadas<br />- Ejemplo de colisión de copos de nieve (pygame)<br />- ...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Mar 19, 2009 9:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-03-19T19:19:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2318#p2318</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2318#p2318"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2318#p2318"><![CDATA[
Si, la una de las tres funciones se encarga de cambiar un pixel del color que tenga a un color que queramos. El codigo de todas formas revisalo por que hace bastante tiempo que no lo reviso ni lo compilo y aunque en principio no deberia dar fallos no puedo estar seguro despues de tanto tiempo sin usarlo. El codigo basicamente lo que hace es bloquear la superficie si es necesario (esto lo saque de el tutorial de la libreria SDL de la seccion de libros), se hace apuntar un puntero a la zona de memoria donde esta el pixel que se quiere cambiar y ,dependiendo de los bytes por pixel, cambia el valor del pixel y, si es necesario, desbloquea la superficie.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Mar 19, 2009 7:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-19T18:59:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2315#p2315</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2315#p2315"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2315#p2315"><![CDATA[
Buenas y gracias por la ayuda a todos...<br />Ahora con respecto a lo ultimo (lacabra25) no he tenido oportunidad de probar aun las funciones que propones... me surgio una duda lo que hacen estas funciones es escojer un pixel de pantalla y cambiarlo de color? me refiero a que si selecciona por ejemplo un pixel que ya se la ha asignado 'x' color y asignarle un 'y' color....<br />Tambien suena interesante eso de crear una superficie con un pixel 'x' y copiarla a la superficie principal en las coordenadas donde se desee, no habia pensado en eso pero igual suena bueno...<br />Yo imaginaba algo como una capa en el juego exclusiva para dibujar el sistema de particulas, por decir tomar 'x' posicion en pantalla y crear ahi el pixel de 'y' color, pero imagino el problema vendria al querer mover ese pixel...<br />Estare checando el codigo que me parece muy bueno, tambien he bajado los ejemplos de la web (losersjuegos claro) pero aun no me queda muy claro como es que lo logran...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue Mar 19, 2009 6:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-03-19T17:02:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2314#p2314</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2314#p2314"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2314#p2314"><![CDATA[
Dado que SDL solo trabaja en 2D las particulas no seran mas que los pixeles de la pantalla (o un conjunto de estos formando cuadrados pequeños o circulos pequeños), para empezar hay que comenzar por como se estudian los mivimientos (puesto que lo que podemos hacer unicamente es mover las particulas pues es lo que se va a ver en pantalla) en fisica y la respuesta es que con vectores, como SDL trabaja en 2D sera mas sencillo que en 3D puesto que los vectores solo tendran dos componentes, cada particula debera tener al menos un vector posicion y despues puedes hacer que cada particula tenga ademas un vector velocidad, incluso un vector aceleracion y ya subiendo la dificultad incluso una masa y vectores de fuerza. Ahora es cuestion de aplicar la matematicas y la fisica a las particulas y calcular el nuevo vector de posicion, y las nuevas propiedades de la particula en cada momento, como interactuan unas con otras, que comportamiento deberan tener.... Lo siguiente es que dependiendo del tipo de particula que quieras hacer (lluvia, fuego, arena, ...) decidas si representar la particula como un pixel, como un punto de varios pixeles, como una raya.... Ahora a dibujar las particulas, si no vas a usar imagenes para hacer las particulas (me refiero a imagenes en archivos externos al programa, lo cual seguramente permitira una mayor flexibilidad del sistema de particulas) una opcion es crear una superficie y dibujar en ella pixel a pixel o dibujando pequeños rectangulos la particula y usar esta superficie como particula (de este modo todas las particulas serian iguales y solo tendrias que hacer un blitting a la pantalla en las coordenadas que le correspondan a la particula) este metodo es una buena opcion cuando todas las particulas sean iguales (arena por ejemplo) pero si las particulas son para, por ejemplo, un fuego cada una debera tener un color entre amarillo y rojo diferente (un fuego no es solo rojo o solo amarillo, tiene tonos naranjas...) una opcion es dibujar directamente en la superficie de la pantalla las particulas dibujando los pixeles que sean necesarios (aqui es necesario o usar doble buffer para evitar el parpadeo o antes copiar la superficie de la pantalla a otra superficie, tambien deberas tener cuidado con el codigo para dibujar las particulas para que compruebe lo mas rapido posible todas las particulas y las dibuje tambien lo mas rapido posible, contra menos codigo y mas rapido se ejecute el codigo mejor por lo que habra variables que, por ejemplo, en vez de int deberan ser register int...).<br /><br />Espero que esto te pueda ayudar con el sistema de particulas. Aprovecho para decirte que para poder comprobar el tiempo que tarda en ejecutarse cada funcion y las veces que es llamada (por lo que te comentaba de la necesidad de que los pixeles de las particulas estuviesen dibujados en el menor tiempo posible) puedes usar el profiler: <!-- m --><a class="postlink" href="http://www.chuidiang.com/clinux/herramientas/profiler.php">http://www.chuidiang.com/clinux/herrami ... ofiler.php</a><!-- m --><br /><br />Edito: no me acuerdo si era en los ejemplos o donde era pero me parece que en uno de los ejemplos hay funciones para dibujar un pixel de un color determinado en una superficie en las coordenadas que se quiera.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>int reemplazar_color&#40;SDL_Surface *src, Uint32 remover, Uint32 reemplazo&#41;&#123;<br />   register unsigned short int b;<br />   register unsigned int x, y;<br />   b= SDL_MUSTLOCK&#40;src&#41;;<br />   if&#40;b == 1&#41;&#123;<br />      if&#40;SDL_LockSurface&#40;src&#41; &lt; 0&#41;&#123;<br />         return 0;<br />      &#125;<br />   &#125;<br />   for&#40;x = 0; x &lt;src&gt;w; x++&#41;&#123;<br />      for&#40;y = 0; y &lt;src&gt;h; y++&#41;&#123;<br />         if&#40;obtener_pixel&#40;src, x, y&#41; == remover&#41;&#123;<br />            colocar_pixel&#40;src, x, y, reemplazo&#41;;<br />         &#125;<br />      &#125;<br />   &#125;<br />   if&#40;b == 1&#41;&#123;<br />      SDL_UnlockSurface &#40;src&#41;;<br />   &#125;<br />   return 0;<br /><br />&#125;<br /><br /><br /><br />int colocar_pixel&#40;SDL_Surface *src, int x, int y, Uint32 pixel&#41;&#123;<br /><br />    register unsigned short int b;<br /><br />    b= SDL_MUSTLOCK&#40;src&#41;;<br /><br />    if&#40;b == 1&#41;&#123;<br /><br />         if&#40;SDL_LockSurface&#40;src&#41; &lt;0&gt;format-&gt;BytesPerPixel;<br /><br />    Uint8 *p = &#40;Uint8 *&#41;src-&gt;pixels + y * src-&gt;pitch + x*bpp;<br /><br />    switch&#40;bpp&#41;&#123;<br /><br />                case 1: *p = pixel;<br /><br />                     break;<br /><br />                case 2: *&#40;Uint16 *&#41;p = pixel;<br /><br />                     break;<br /><br />                case 3:<br /><br />                     if &#40;SDL_BYTEORDER == SDL_BIG_ENDIAN&#41;&#123;<br /><br />                        p&#91;0&#93;=&#40;pixel &gt;&gt; 16&#41; &amp; 0xff;<br /><br />                        p&#91;1&#93;=&#40;pixel &gt;&gt; 8&#41; &amp; 0xff;<br /><br />                        p&#91;2&#93;=pixel &amp; 0xff;<br /><br />                     &#125;<br /><br />                     else&#123;<br /><br />                          p&#91;0&#93;=pixel &amp; 0xff;<br /><br />                          p&#91;1&#93;=&#40;pixel &gt;&gt; 8&#41; &amp; 0xff;<br /><br />                          p&#91;2&#93;=&#40;pixel &gt;&gt; 16&#41; &amp; 0xff;<br /><br />                     &#125;<br /><br />                     break;<br /><br />                case 4: *&#40;Uint32 *&#41; p = pixel;<br /><br />                     break;<br /><br />    &#125;<br /><br />    if&#40;b == 1&#41;&#123;<br /><br />         SDL_UnlockSurface &#40;src&#41;;<br /><br />    &#125;<br /><br />    return 0;<br /><br />&#125;<br /><br /><br /><br />Uint32 obtener_pixel&#40;SDL_Surface *src, int x, int y&#41;&#123;<br /><br />       int bpp = src-&gt;format-&gt;BytesPerPixel;<br /><br />       Uint8 *p = &#40;Uint8 *&#41;src-&gt;pixels + y * src-&gt;pitch + x * bpp;<br /><br />       switch&#40;bpp&#41;&#123;<br /><br />                   case 1: return *p;<br /><br />                        break;<br /><br />                   case 2: return *&#40;Uint16 *&#41;p;<br /><br />                        break;<br /><br />                   case 3: if &#40;SDL_BYTEORDER == SDL_BIG_ENDIAN&#41; return p&#91;0&#93; &lt;&lt; 16 | p&#91;1&#93; &lt;&lt; 8 | p&#91;2&#93;;<br /><br />                        else return p&#91;0&#93; | p&#91;1&#93; &lt;&lt; 8 | p&#91;2&#93; &lt;&lt; 16;<br /><br />                        break;<br /><br />                   case 4: return *&#40;Uint32 *&#41;p;<br /><br />                        break;<br /><br />                   default: return 0;<br /><br />                            break;<br /><br />       &#125;<br /><br />&#125;</code></dd></dl><br /><br />Hay tienes las funciones necesarias para colocar pixeles en una superficie que las obtuve de algun ejemplo o algun codigo de losers juegos y tambien las vi en un manual y entre un codigo y otro y algunas cosas que creo que cambie consegui esas tres funciones que tenia guardadas en el disco duro. Como veras algunas variables se declaran como regoster para que si es posible se guarden en los registros de la CPU para que el acceso a ella sea mas rapido y las funciones son cortas y con poco codigo y usando punteros.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Mar 19, 2009 5:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-03-11T23:57:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2263#p2263</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2263#p2263"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2263#p2263"><![CDATA[
Hace un buen tiempo hicimos una propuesta de programación<br />sobre partículas:<br /><br />    <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/particulas">http://www.losersjuegos.com.ar/referenc ... particulas</a><!-- m --><br /><br />Ahí vas a encontrar varios ejemplos de efectos como lluvias, nieve<br />y otros, espero te resulte útil.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Mar 11, 2009 11:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-11T23:50:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2262#p2262</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2262#p2262"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2262#p2262"><![CDATA[
Gracias por responder...<br />y si lo he checado pero estaba buscando algo mas simple como un manual o tutorial que indice como hacerlo desde cero...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Mar 11, 2009 11:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-03-11T23:20:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2261#p2261</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2261#p2261"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2261#p2261"><![CDATA[
Buenas Sofoke:<br /><br />No se si lo habras visto, pero en la sección de ejemplos hay un efecto de nieve creado por hugo que, aunque está hecho en python, te podrá dar ideas de como conseguirlo.<br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Mar 11, 2009 11:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-11T21:00:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2260#p2260</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2260#p2260"/>
<title type="html"><![CDATA[Sistema de particulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=508&amp;p=2260#p2260"><![CDATA[
He estado varias horas tratando de crear un sistema de particulas.<br />algo como un efecto de lluvia, nieve, etc... pero no se me ocurre como se logra tal efecto's'<br />Imagine que se podria con SDL_gfx dibujando tal vez algunos puntos como base..<br />Pero entonces mi duda surge: ¿Como se dibujan tales puntos con esa libreria?<br />O si hay una mejor forma me gustaria me ayudaran...<br />NOTA: estoy usando C++ y SDL...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Mar 11, 2009 9:00 pm</p><hr />
]]></content>
</entry>
</feed>