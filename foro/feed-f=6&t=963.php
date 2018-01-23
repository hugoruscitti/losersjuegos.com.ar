<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=963" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-12-17T12:55:08+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=963</id>
<entry>
<author><name><![CDATA[masterguido]]></name></author>
<updated>2010-12-17T12:55:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4613#p4613</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4613#p4613"/>
<title type="html"><![CDATA[Re: Pygame, pgu y unicode]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4613#p4613"><![CDATA[
Hola Hugo<br />sí, lo subí yo, pero entretanto estuve haciendo pruebas con pgu sólo (sin pygame) y soporta unicode lo más bien. Así que debe ser problema de que no sé como manejar la interacción desde pygame.<br />Gracias por tu ayuda<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2359">masterguido</a> — Vie Dic 17, 2010 12:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-17T05:13:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4612#p4612</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4612#p4612"/>
<title type="html"><![CDATA[Re: Pygame, pgu y unicode]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4612#p4612"><![CDATA[
<blockquote><div><cite>masterguido escribió:</cite><br />Pero al escribir el usuario ya ignora los caracteres especiales y en el log veo key ntilde unrecognized<br />Gracias de nuevo por tu ayuda<br />Carlos<br /></div></blockquote><br /><br />Uh... entonces parece que pgu no soporta unicode... <br /><br />Investigando en el sitio del proyecto noté que hay un bug que habla<br />del tema. ¿lo has subido tú no?:<br /><br /><!-- m --><a class="postlink" href="http://code.google.com/p/pgu/issues/detail?id=19">http://code.google.com/p/pgu/issues/detail?id=19</a><!-- m --><br /><br />ojalá lo puedan resolver, contanos cualquier cosa.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Dic 17, 2010 5:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[masterguido]]></name></author>
<updated>2010-12-16T14:16:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4605#p4605</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4605#p4605"/>
<title type="html"><![CDATA[Re: Pygame, pgu y unicode]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4605#p4605"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />¿probaste colocando la cadena en unicode?.<br /><br />Por ejemplo colocando una letra u como prefijo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>cadena = u&quot;¡ Hola mundo, con tíldes y una Ñ !&quot;<br /></code></dd></dl><br /><br />Al menos con pygame eso suele resolver el problema...<br /></div></blockquote><br /><br />Hola Hugo, gracias por tu respuesta.<br />Lo que me pasa es que al ser un input del usuario, no sé donde codificar el unicode. Te cuento:<br />creo un objeto TextArea (propio de pgu)<br />txtrespuesta = gui.TextArea(&quot; &quot;,100,100,20)<br />Después lo agrego al &quot;frame&quot; que está por encima de pygame (viene a ser como un marco transparente para renderear los objetos de la gui)<br />frame.add(respuesta,100,100)<br />La respuesta del usuario queda en la propiedad value del objeto TextArea, o sea que puedo hacer:<br />respuesta = txtrespuesta.value<br /><br />Pero al escribir el usuario ya ignora los caracteres especiales y en el log veo key ntilde unrecognized<br />Gracias de nuevo por tu ayuda<br />Carlos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2359">masterguido</a> — Jue Dic 16, 2010 2:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-16T01:09:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4602#p4602</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4602#p4602"/>
<title type="html"><![CDATA[Re: Pygame, pgu y unicode]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4602#p4602"><![CDATA[
¿probaste colocando la cadena en unicode?.<br /><br />Por ejemplo colocando una letra u como prefijo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>cadena = u&quot;¡ Hola mundo, con tíldes y una Ñ !&quot;<br /></code></dd></dl><br /><br />Al menos con pygame eso suele resolver el problema...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Dic 16, 2010 1:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[masterguido]]></name></author>
<updated>2010-12-16T00:12:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4600#p4600</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4600#p4600"/>
<title type="html"><![CDATA[Pygame, pgu y unicode]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=963&amp;p=4600#p4600"><![CDATA[
Hola a todos<br />Tengo el siguiente problema:<br />estoy programando un juego de preguntas y respuestas en pygame y como necesitaba cajas de texto y listboxes use pgu encima de pygame.<br />Todo marcha bien, excepto que no me funciona ni la ñ, ni las vocales acentuadas. He leído sobre la codificación unicode y otras yerbas, pero nada parece funcionar, es como si la propia textarea de pgu no aceptara la ñ. Sé que no es cierto porque por fuera de pygame marcha bien.<br />Ayuda por favor.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2359">masterguido</a> — Jue Dic 16, 2010 12:12 am</p><hr />
]]></content>
</entry>
</feed>