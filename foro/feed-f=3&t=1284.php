<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1284" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-02T20:43:15+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1284</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-10-02T20:43:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6030#p6030</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6030#p6030"/>
<title type="html"><![CDATA[Re: Pequeño sistema de partíulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6030#p6030"><![CDATA[
A, se me olvidaba.<br /><blockquote><div><cite>kaiser escribió:</cite><br />Parece que alguien se lo está currando de cara a cierto concurso... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><br />A seguir así que esto pinta muy bien<br /></div></blockquote><br /><br />En realidad no era por el concurso, pero ahora que lo dices....  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Dom Oct 02, 2011 8:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-10-02T20:38:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6029#p6029</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6029#p6029"/>
<title type="html"><![CDATA[Re: Pequeño sistema de partíulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6029#p6029"><![CDATA[
Bueno aquí esta el sistema de partículas para sprites.<br />Solo que hay dos problemas:<br />    Las rotaciones dependen del programador<br />    Hay que heredar la clase SpriteParticula para poder trabajar<br /><br />En el ejemplo (el único que incluye...) es de una pelota que se puede mover con las teclas y rebota cuando choca con cualquier partícula que surja.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Nuevamente, espero criticas y sugerencias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Dom Oct 02, 2011 8:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-10-01T22:11:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6025#p6025</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6025#p6025"/>
<title type="html"><![CDATA[Re: Pequeño sistema de partíulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6025#p6025"><![CDATA[
Parece que alguien se lo está currando de cara a cierto concurso... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> <br />A seguir así que esto pinta muy bien<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Sab Oct 01, 2011 10:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-10-01T21:15:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6022#p6022</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6022#p6022"/>
<title type="html"><![CDATA[Re: Pequeño sistema de partíulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6022#p6022"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />mé pareció muy interesante, lo único que le cambiaría<br />es la linea 20 de particulas.py para que diga<br /><dl class="codebox"><dt>Code: </dt><dd><code> image = image.convert_alpha()</code></dd></dl><br /><br />Eso permite que puedas tener imágenes png con transparencias...<br /></div></blockquote><br /><br />Muchas gracias, eso me resuelve muchos problemas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />A proposito, ahora estoy desarrollando un juego donde exprimo al máximo el potencial de mi pequeño sistema. Entre las cosas que estoy también trabajando es para que un grupo de sprites conformen las partículas para un  singular plataformas...<br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Sab Oct 01, 2011 9:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-09-29T18:01:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6006#p6006</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6006#p6006"/>
<title type="html"><![CDATA[Re: Pequeño sistema de partíulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6006#p6006"><![CDATA[
Muchas gracias por compartir el código, resulta muy interesante. Podría resultar muy útil para crear un efecto de burbujas en un juego ambientado en un mundo submarino, por ejemplo.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Jue Sep 29, 2011 6:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-09-29T14:46:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6004#p6004</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6004#p6004"/>
<title type="html"><![CDATA[Re: Pequeño sistema de partíulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6004#p6004"><![CDATA[
que buen ejemplo!<br /><br />mé pareció muy interesante, lo único que le cambiaría<br />es la linea 20 de particulas.py para que diga<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>image = image.convert_alpha()<br /></code></dd></dl><br /><br />Eso permite que puedas tener imágenes png con transparencias, por<br />ejemplo, estas dos imágenes quedan bastante bien:<br /><br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/incoming/descargas/20110929/fuego.png">http://www.losersjuegos.com.ar/incoming ... /fuego.png</a><!-- m --><br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/incoming/descargas/20110929/humo.png">http://www.losersjuegos.com.ar/incoming ... 9/humo.png</a><!-- m --><br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20110929/particulas.png" alt="Imagen" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Sep 29, 2011 2:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-09-29T04:35:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6001#p6001</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6001#p6001"/>
<title type="html"><![CDATA[Pequeño sistema de partíulas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1284&amp;p=6001#p6001"><![CDATA[
Bueno, aquí coloco unas clases que cree en pygame para gestionar un <span style="font-weight: bold">muy simple</span> sistema de partículas junto con con unos ejemplos.<br /><br />La verdad no sabia donde colocarlo XD<br /><br />¿Algunas sugerencias para mejorarlo?<br />¿Dudas?<br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Jue Sep 29, 2011 4:35 am</p><hr />
]]></content>
</entry>
</feed>