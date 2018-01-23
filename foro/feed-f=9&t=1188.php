<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1188" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-27T00:28:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1188</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-07-27T00:28:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5776#p5776</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5776#p5776"/>
<title type="html"><![CDATA[Re: Juego Sucesiones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5776#p5776"><![CDATA[
<blockquote><div><cite>d0hk0o escribió:</cite><br />Hola Muchachos, estuve avanzando algo; pero me he topado con algo.<br />Tengo un Grupo de Sprites (RenderUpdates); pero al mostrar los sprites de este grupo en la pantalla aparecen unos encima de otros y los tapan. ¿Hay alguna forma de ponerle un atributo 'z' al sprite para que le indique que tiene que estar encima o debajo de otro?<br />Espero haberme hecho entender. Gracias por todo.<br /></div></blockquote><br /><br />Una opcion es usar otro tipo de grupo, OrderedUpdates:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/traducciones/pygame/sprite/orderedupdates">http://www.losersjuegos.com.ar/traducci ... redupdates</a><!-- m --><br /><br />Aunque si cambias mucho el orden de los sprites que van arriba y los que van abajo, tal vez<br />sea conveniente hacer lo que te indica kaiser, y re-ordenar los sprites por tu cuenta. Podrías<br />usar la función &quot;sort&quot; de python junto con el argumento &quot;key&quot; para que ordene por el argumento &quot;z&quot; o<br />lo que quieras:<br /><br /><!-- m --><a class="postlink" href="http://docs.python.org/howto/sorting.html">http://docs.python.org/howto/sorting.html</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Jul 27, 2011 12:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-07-26T23:54:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5774#p5774</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5774#p5774"/>
<title type="html"><![CDATA[Re: Juego Sucesiones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5774#p5774"><![CDATA[
Qué librería estás utilizando ¿SDL o SFML? Por lo general los sprites se imprimen en orden, es decir, el primer sprite que imprimas quedará debajo tapado por los demás y el último quedará encima y será visible. Prueba a imprimir en último lugar el sprite que quieres que se vea.<br /><br />Si no quieres que ningún sprite quede tapado y se vean todos, simplemente modifica las coordenadas X e Y de cada sprite.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mar Jul 26, 2011 11:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d0hk0o]]></name></author>
<updated>2011-07-26T19:39:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5772#p5772</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5772#p5772"/>
<title type="html"><![CDATA[Re: Juego Sucesiones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5772#p5772"><![CDATA[
Hola Muchachos, estuve avanzando algo; pero me he topado con algo.<br />Tengo un Grupo de Sprites (RenderUpdates); pero al mostrar los sprites de este grupo en la pantalla aparecen unos encima de otros y los tapan. ¿Hay alguna forma de ponerle un atributo 'z' al sprite para que le indique que tiene que estar encima o debajo de otro?<br />Espero haberme hecho entender. Gracias por todo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2403">d0hk0o</a> — Mar Jul 26, 2011 7:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d0hk0o]]></name></author>
<updated>2011-06-24T00:55:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5684#p5684</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5684#p5684"/>
<title type="html"><![CDATA[Re: Juego Sucesiones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5684#p5684"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br /><blockquote class="uncited"><div>pd: la respuesta es 8 no?<br /></div></blockquote><br /><br />Es la respuesta si. Es la serie de fibbonaci. Otra idea que se me ocurre es, en vez de tener que escribir a mano los números, es emplear la función que genera la serie, que en el caso del ejemplo sería algo así:<br /><br />0 si n = 0<br />1 si n = 1<br />f(n-2) + f(n-1) si n &gt;= 2</div></blockquote><br /><br />Buena idea, pero eso nos limitaría a poner sólo series numéricas, si quisiéremos una serie como esta:<br />L, M, M, J, V, ?<br />alternativas: A, S, D, J<br />u otras series que contegan una imagen y ésta rotada 90 grados, etc. Lo más conveniente sería tenerlas en listas...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2403">d0hk0o</a> — Vie Jun 24, 2011 12:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-06-23T00:23:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5680#p5680</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5680#p5680"/>
<title type="html"><![CDATA[Re: Juego Sucesiones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5680#p5680"><![CDATA[
Es una buena idea, osea que el juego consistiria<br />en tener las series como funciones, darle una lista<br />de numeros naturales y que genere la primer lista mas<br />el resultado correcto. <br /><br />Alguien se anima a escribir las funciones o los valores<br />para hacer un prototipo del juego?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Jun 23, 2011 12:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-06-22T22:35:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5679#p5679</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5679#p5679"/>
<title type="html"><![CDATA[Re: Juego Sucesiones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5679#p5679"><![CDATA[
<blockquote class="uncited"><div><br />pd: la respuesta es 8 no?<br /></div></blockquote><br /><br />Es la respuesta si. Es la serie de fibbonaci. Otra idea que se me ocurre es, en vez de tener que escribir a mano los números, es emplear la función que genera la serie, que en el caso del ejemplo sería algo así:<br /><br />0 si n = 0<br />1 si n = 1<br />f(n-2) + f(n-1) si n &gt;= 2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Jun 22, 2011 10:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-06-22T19:26:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5677#p5677</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5677#p5677"/>
<title type="html"><![CDATA[Re: Juego Sucesiones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5677#p5677"><![CDATA[
Hay muchas formas de hacer algo asi... si quieres podriamos<br />hacer un minijuego asi para pilas.<br /><br />Si quieres podrias hacernos una lista de series, con opciones<br />e indicar cual es la correcta.<br /><br />Me imagino que una forma de representar esos datos para<br />usarlos desde el juego podria ser mas o menos asi:<br /><br /><pre class="prettyprint">serie = [0, 1, 1, 2, 3, 5, 8]<br />opciones = [3, 8, 11, 10]</pre><br /><br />y al usuario le mostramos la serie menos el ultimo<br />numero (es decir serie[:-1])<br /><br />pd: la respuesta es 8 no?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Jun 22, 2011 7:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d0hk0o]]></name></author>
<updated>2011-06-22T18:57:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5676#p5676</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5676#p5676"/>
<title type="html"><![CDATA[Juego Sucesiones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1188&amp;p=5676#p5676"><![CDATA[
Hola a todos, quiero crear un juego de sucesiones<br />¿Cómo podría hacerlo?<br /><br />Por ejemplo que en pantalla nos salgan las imágenes:<br />0  1  1  2  3  5  ?<br />y abajo una serie de alternativas:<br />3  8  11 10 <br /><br />que se pueda escoger con el mouse y al momento de hacer clic en una de las alternativas (sea correcta o incorrecta) pase a otra serie totalmente distinta, también considerar puntaje por cada buena o mala decisión...<br /><br />Gracias desde ya...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2403">d0hk0o</a> — Mié Jun 22, 2011 6:57 pm</p><hr />
]]></content>
</entry>
</feed>