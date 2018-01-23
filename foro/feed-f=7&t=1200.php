<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1200" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-08T22:25:02+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1200</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-07-08T22:25:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5709#p5709</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5709#p5709"/>
<title type="html"><![CDATA[Re: Patron Observer, SFML - C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5709#p5709"><![CDATA[
buenas:<br /><br />al grano. <!-- m --><a class="postlink" href="http://www.boost.org/doc/libs/1_41_0/doc/html/signals/tutorial.html#id1671208">http://www.boost.org/doc/libs/1_41_0/do ... #id1671208</a><!-- m --><br />básicamente parece que al conectar te devuelve un objeto de la clase connection. Tendrías que almacenarlos de alguna manera y desconectarlos en el disconnect<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Jul 08, 2011 10:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-07-07T00:10:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5705#p5705</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5705#p5705"/>
<title type="html"><![CDATA[Re: Patron Observer, SFML - C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5705#p5705"><![CDATA[
Saludos, tengo una duda y espero que me puedan ayudar para resolverla.<br /><br />Me gustaria saber como luego de conectar un evento desconectarlo, a través de una función.<br />muestro el código para explicarme mejor:<br /><br /><pre class="prettyprint">#include &lt;iostream&gt;<br />#include &lt;boost/signals.hpp&gt;<br /><br /><br />using namespace std;<br /><br />class Button <br />{<br />  typedef boost::signal&lt;void &#40;int x, int y&#41;&gt; OnClick;<br /><br />public:<br />  void conectar&#40;const OnClick::slot_type&amp; slot&#41;;<br />  void desconectar&#40;.......... slot&#41;;  // &lt;- esta parte no sé de que tipo es el argumento<br />  void emitir&#40;int x, int y&#41;;<br /><br />private:<br />  OnClick onClick;<br />};<br /><br />void Button::conectar&#40;const OnClick::slot_type&amp; slot&#41;<br />{<br />  onClick.connect&#40;slot&#41;;<br />}<br /><br />void Button::desconectar&#40;.......... slot&#41;{ // &lt;- lo mismo que aquí<br />    onClick.disconnect&#40;slot&#41;;<br />}<br /><br />void Button::emitir&#40;int x, int y&#41;{<br />    onClick&#40;x, y&#41;;<br />}<br /><br /><br /><br />void printCoordinates&#40;long x, long y&#41;<br />{<br />  std::cout &lt;&lt; &quot;&#40;&quot; &lt;&lt; x &lt;&lt; &quot;, &quot; &lt;&lt; y &lt;&lt; &quot;&#41;\n&quot;;<br />}<br /><br /><br /><br />int main&#40;&#41;{<br />    Button b;<br />    b.conectar&#40;&amp;printCoordinates&#41;;<br />    b.emitir&#40;10, 30&#41;;<br /><br />    b.desconectar&#40;&amp;printCoordinates&#41;;<br /><br />    b.emitir&#40;10, 30&#41;;<br /><br />    <br />    return 0;<br />}</pre><br /><br /><br />Eso es, no sé como hacer una función que reciba la función deseada para desconectar y que se encarge de ello.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Jue Jul 07, 2011 12:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-07-05T01:15:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5701#p5701</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5701#p5701"/>
<title type="html"><![CDATA[Re: Patron Observer, SFML - C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5701#p5701"><![CDATA[
gracias Juanxo!,<br /><br />Estoy ojeando la libreria y me parece más facil, muchas gracias por la respuesta<br />me ha sido muy útil.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Mar Jul 05, 2011 1:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-07-04T22:32:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5700#p5700</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5700#p5700"/>
<title type="html"><![CDATA[Re: Patron Observer, SFML - C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5700#p5700"><![CDATA[
boost signal es más facil en mi opinión. La versión que se empezó de C++ para pilas lo usaba, así que si encuentras un sitio donde descargarla le puedes echar un ojo al código<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Jul 04, 2011 10:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-07-04T03:10:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5698#p5698</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5698#p5698"/>
<title type="html"><![CDATA[Patron Observer, SFML - C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1200&amp;p=5698#p5698"><![CDATA[
Que tal!<br /><br />Necesito su ayuda, me gustaria desarrollar un juego con sfml y c++ con el patron observer<br />ya que me parece interesante y util, a demás este patron lo he visto como funciona en pilas python y es bastante bueno, me gusta.<br /><br />Se que se puede hacer con libsigc++, pero no se usarla.<br /><br />si me pudieran explicar como se utiliza libsigc++ en c++ y sfml y si tiene la libreria compilada para windows (no conosco muy bien como se compila esta libreria) seria genial que las enviaran a mi correo.<br /><!-- e --><a href="mailto:pc.ha.ck@hotmail.com">pc.ha.ck@hotmail.com</a><!-- e --><br /><br />Espero vuestra ayuda y muchas gracias de antemano.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Lun Jul 04, 2011 3:10 am</p><hr />
]]></content>
</entry>
</feed>