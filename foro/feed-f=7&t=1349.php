<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1349" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-02-11T20:18:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1349</id>
<entry>
<author><name><![CDATA[quiro9]]></name></author>
<updated>2012-02-11T20:18:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6514#p6514</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6514#p6514"/>
<title type="html"><![CDATA[Re: Instalar SDL error]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6514#p6514"><![CDATA[
hola (denuevo se que el tema es viejo pero respondo por si alguien tiene el problema y mi solucion lo ayuda)...<br />a mi tambien me dio ese problema... no se que distro usas pero seguro es alguna basada en debian, o alguna que esta basada en otra que se baso en debian...<br /><br />lo que hice para solucionarlo fue instalarlo de mis repos, si usas una distro debian los tenes como:<br />libsdl&lt;vercion&gt;debian<br />libsdl-mixer&lt;vercion&gt;<br />libsdl-image&lt;vercion&gt;<br /><br />pero con eso no me andaban algunas cosas... entonces depues baje los source y los hice paquetes DEB y actualice esos mismos... <br />como los haces?<br />es facil;<br />1- bajate el source... <br /><br />2- necesitas tener (si no los tenes instalalos):<br />autoconf<br />make<br />fakeroot<br />checkinstall<br /><br />y devscripts (por las dudas, contiene varias cosas utiles)<br />-- ANTES QUE NADA; su -c &quot;&lt;codigo&gt;&quot; es casi igual a; sudo &lt;codigo&gt;<br /><br />$su -c &quot;aptget install autoconf make fakeroot checkinstall devscripts&quot;<br /><br />3- descomprimi el source en una carpeta<br />3- terminal en la carpeta donde descomprimiste el source y pone:<br /><br />$ http://losersjuegos.com.ar/foro/configure &amp;&amp; make <br /><br />-- espera que termine (tarda un ratito segun que tan grande sea el source<br />y despues pone:<br /><br />$ su -c &quot;checkinstall&quot;<br /><br />-- te va a pedir una descripcion da enter enter enter... y listo te va a instalar el paquete nuevo... (no deberias tener problemas de dependendencia dado que fue empaquetado con las especificaciones y librerias de tu sistema)...<br /><br />eso es todo, despues proba compilar algun ejemplo...<br />es mas facil con make siempre...<br />saludos!<br /><br />$ su -c<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2541">quiro9</a> — Sab Feb 11, 2012 8:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-12-21T05:14:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6295#p6295</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6295#p6295"/>
<title type="html"><![CDATA[Re: Instalar SDL error]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6295#p6295"><![CDATA[
¿Estás compilando desde línea de comandos o utilizas un IDE, cuál? ¿Cómo estás indicando el directorio donde se encuentran los archivos para enlazar?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Dic 21, 2011 5:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kainz]]></name></author>
<updated>2011-12-09T17:37:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6238#p6238</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6238#p6238"/>
<title type="html"><![CDATA[Instalar SDL error]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6238#p6238"><![CDATA[
el caso es que he seguido el tutorial de esta web de como instalar SDL, lo he seguido PASO A PASO y me da este error <br /><pre class="prettyprint">cannot find -lSDL</pre><br />no se que hacer porque en teoria esta todo bien<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2486">Kainz</a> — Vie Dic 09, 2011 5:37 pm</p><hr />
]]></content>
</entry>
</feed>