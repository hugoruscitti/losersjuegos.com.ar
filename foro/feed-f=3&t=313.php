<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=313" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-05-08T06:37:39+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=313</id>
<entry>
<author><name><![CDATA[keldrox]]></name></author>
<updated>2008-05-08T06:37:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1355#p1355</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1355#p1355"/>
<title type="html"><![CDATA[Ayuda en la funcion cargarAnimacion en Automatas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1355#p1355"><![CDATA[
Hola de nuevo hugo, gracias por tu tiempo de momento estoy siguiendo el articulo: <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/un_juego_paso_a_paso/un_juego_paso_a_paso.php">http://www.losersjuegos.com.ar/referenc ... a_paso.php</a><!-- m --><br /><br />Que creo que explica perfectamente lo que estoy buscando, si tengo alguna duda te volvere a preguntar y esta vez te cuelgo el codigo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<br /><br />Un saludo compañero!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1919">keldrox</a> — Jue May 08, 2008 6:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-05-08T02:59:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1353#p1353</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1353#p1353"/>
<title type="html"><![CDATA[Ayuda en la funcion cargarAnimacion en Automatas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1353#p1353"><![CDATA[
En este momento no tengo ese código aquí en mi equipo<br />para hacer una búsqueda. ¿Podrías indicarme el nombre del<br />archivo y la linea de código que tienes?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue May 08, 2008 2:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[keldrox]]></name></author>
<updated>2008-05-05T20:33:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1338#p1338</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1338#p1338"/>
<title type="html"><![CDATA[Ayuda en la funcion cargarAnimacion en Automatas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1338#p1338"><![CDATA[
Otra cosa que te quiero comentar y creo que es la última:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>     SDL_Rect rect &#91;2&#93; = &#123;0&#125;;<br /><br />     actor_imprimir&#40; &amp;actor, sdlVentana, rect + 1 &#41;;<br />     SDL_UpdateRects &#40;sdlVentana, 1, rect&#41;;<br /></code></dd></dl><br /><br />No entiendo bien por que creas un vector de rect y el primero lo pones a 0, y luego se lo envias a &quot;actor_imprimir&quot; y actualizas...<br /><br />¿Segun el numero de personajes tengo que ir incrementando ese vector?<br /><br />¿Si quiero mas jugadores que tendria que hacer? ¿incrementar ese rect?<br /><br />¿Por decirlo de alguna manera que hay que hacer sin entrar en profunidad para crear varios personajes en pantalla?<br /><br />Bueno espero que me haya explicado bien.<br /><br />Saludos y muchisimas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1919">keldrox</a> — Lun May 05, 2008 8:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-05-02T23:08:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1308#p1308</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1308#p1308"/>
<title type="html"><![CDATA[Ayuda en la funcion cargarAnimacion en Automatas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1308#p1308"><![CDATA[
Saludos, la función tiene como objetivo cargar los índices de cuadros<br />de una animación en un vector.<br /><br />Cuando se realiza una animación es mucho mas simple enumerar cada una de<br />las imágenes que conforman la animación y luego reproducirla. Es este caso<br />hay varios números porque se quiere mostrar el cuadro 37 varias veces, luego<br />el 38, 39 ... etc.<br /><br />Seguramente otra rutina del juego lee uno a uno estos números de izquierda<br />a derecha y muestra la animación.<br /><br />Creo que lo mas difícil de ver al principio es la conversión: la función<br />recibe un 'actor' (donde guarda la animación), un identificador de la <br />animación y una cadena con todos los números. La función carga la animación<br />&quot;convirtiendo&quot; esa cadena de números a celdas del vector.<br /><br />Espero haber ayudado, cualquier cosa nos avisas nuevamente.<br /><br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie May 02, 2008 11:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[keldrox]]></name></author>
<updated>2008-05-02T01:39:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1300#p1300</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1300#p1300"/>
<title type="html"><![CDATA[Ayuda en la funcion cargarAnimacion en Automatas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=313&amp;p=1300#p1300"><![CDATA[
Hola amigos, no entiendo bien lo que hace esta parte del programa:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>actor_cargar_animacion &#40;obj, INICIA, &quot;37,37,37,37,37,38,39,40,41,42&quot;&#41;;<br /><br /><br />void actor_cargar_animacion &#40;actor * obj, enum estado estado, char * cuadros&#41;<br />&#123;<br />   char buffer&#91;1024&#93;;<br />   char * p;<br />   int i = 0;<br /><br />   strcpy &#40;buffer, cuadros&#41;;<br /><br />   p = &#40;char *&#41; strtok &#40;buffer, &quot; ,&quot;&#41;;<br /><br />   while &#40;p&#41;<br />   &#123;<br />      obj-&gt;animaciones&#91;estado&#93;&#91;i&#93; = atoi &#40;p&#41;;<br />      p = &#40;char *&#41; strtok &#40;NULL, &quot; ,&quot;&#41;;<br />      i ++;<br />   &#125;<br /><br />   obj-&gt;animaciones&#91;estado&#93;&#91;i&#93; = FIN_DE_ANIMACION;<br />&#125;<br /></code></dd></dl><br /><br />¿Por que envia tantos números?, ¿para que sirven?, ¿como lo procesa la funcion?, <br /><br />Gracias y buenas noches &gt;.&lt;!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1919">keldrox</a> — Vie May 02, 2008 1:39 am</p><hr />
]]></content>
</entry>
</feed>