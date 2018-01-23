<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1178" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-14T08:00:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1178</id>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-06-14T08:00:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5656#p5656</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5656#p5656"/>
<title type="html"><![CDATA[Re: Templates en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5656#p5656"><![CDATA[
De acuerdo. Ahora ya tengo claro como debo utilizarlos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />Gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Mar Jun 14, 2011 8:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-06-13T22:58:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5654#p5654</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5654#p5654"/>
<title type="html"><![CDATA[Re: Templates en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5654#p5654"><![CDATA[
Como menciona Juanxo, los templates van en los archivos de cabecera, todo su código completo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Lun Jun 13, 2011 10:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-06-12T21:49:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5646#p5646</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5646#p5646"/>
<title type="html"><![CDATA[Re: Templates en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5646#p5646"><![CDATA[
el problema es lo que te comentaba, puesto que el compilador genera clases para cada tipo de plantilla, necesita ver todo en el tiempo de compilación. Por eso los templates no pueden tener un .cpp, si no que tiene que tener todo metido en el h<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Jun 12, 2011 9:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-06-12T19:50:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5645#p5645</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5645#p5645"/>
<title type="html"><![CDATA[Re: Templates en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5645#p5645"><![CDATA[
Un ejemplo así tonto sería la implementación de una cola genérica.<br /><br />Este seria el .hpp<br /><br /><pre class="prettyprint linenums">#ifndef QUEUE_H<br />#define QUEUE_H<br /><br />template &lt;class T&gt;<br />class Queue<br />{  <br />  public:<br />    //otros metodos<br />    Queue&#40;&#41;;<br />    ~Queue&#40;&#41;;<br />};<br /><br />#endif</pre><br /><br />Este seria el .cpp<br /><br /><pre class="prettyprint linenums">#include &quot;queue.hpp&quot;<br /><br />template &lt;class T&gt;<br />Queue&lt;T&gt;::Queue&#40;&#41;<br />{<br />  //nada<br />}<br /><br />template &lt;class T&gt;<br />Queue&lt;T&gt;::~Queue&#40;&#41;<br />{}</pre><br /><br />Para utilizarla en un ejecutable necesito incluir el .cpp, ya que si incluyo el .hpp me da el siguiente error:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>/tmp/ccOaP9Er.o: In function `main':<br />test.cpp:(.text+0x10): undefined reference to `Queue&lt;int&gt;::Queue()'<br />test.cpp:(.text+0x1c): undefined reference to `Queue&lt;int&gt;::~Queue()'<br /></code></dd></dl><br /><br />¿Cual es entonces la manera correcta de hacerlo? Llevo bastante tiempo alejado del lenguaje y el único ejemplo que conservo de templates incluye el cpp a pelo, por eso lo he comentado para resolver la duda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Dom Jun 12, 2011 7:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-06-12T18:56:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5643#p5643</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5643#p5643"/>
<title type="html"><![CDATA[Re: Templates en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5643#p5643"><![CDATA[
me he perdido un poco... los templates no tienen cpp<br /><br />un ejemplo?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Jun 12, 2011 6:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-06-12T14:48:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5642#p5642</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5642#p5642"/>
<title type="html"><![CDATA[Templates en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1178&amp;p=5642#p5642"><![CDATA[
Viendo el tema de la inclusión de diversos ficheros en c++ me vino una duda que me ha surgido recientemente.<br /><br />¿Hay alguna manera de definir un .hpp que tenga una clase plantilla y que compile con cualquier tipo de dato?<br />El compilador de c++, si no me equivoco, copia el código de una plantilla para cada tipo de datos con el que comprueba que va a instanciarse, por lo que supongo que le hará falta el código o el objeto compilado para hacerlo, comprobando que el tipo cumple con todos los operadores y métodos utilizados en la plantilla.<br /><br />Si alguien conoce alguna manera le estaría agradecido <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />. La verdad es que me da bastante pena tener que incluir un .cpp directamente, que es la única manera que conozco de utilizar templates en el código, y últimamente me ha dado por refrescar conceptos del lenguaje. Después de pasarme un tiempo programando en C# algunas cosas parecen feas, pero no me gusta todo lo que se mueve últimamente con .NET, así que a ver si me reciclo un poco con C++ <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Dom Jun 12, 2011 2:48 pm</p><hr />
]]></content>
</entry>
</feed>