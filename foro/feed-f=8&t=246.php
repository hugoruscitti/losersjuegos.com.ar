<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=246" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-02-27T06:01:08+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=246</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-02-27T06:01:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=246&amp;p=918#p918</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=246&amp;p=918#p918"/>
<title type="html"><![CDATA[Recursos basico __init__]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=246&amp;p=918#p918"><![CDATA[
Y SWSURFACE probablemente se referirá a que se utilizará la memoria RAM del sistem para almacenar la superficie o los datos a mostrar en pantalla, esto en contraposición a HWSURFACE, parámetro que indica que se haga uso de la memoria de la tarjeta de video.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Feb 27, 2008 6:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-02-27T02:40:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=246&amp;p=916#p916</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=246&amp;p=916#p916"/>
<title type="html"><![CDATA[Recursos basico __init__]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=246&amp;p=916#p916"><![CDATA[
La primer parte del código (&quot;def __init__ ...&quot;) corresponde a<br />un método especial de las clases en python. Ese método se<br />llama cada vez que haces un objeto de una clase, por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>class Persona:<br /><br />    def __init__&#40;self&#41;:<br />        print &quot;se ha creado un objeto de la clase Persona&quot;<br /></code></dd></dl><br /><br />ese método se utiliza en cada objeto de python para dar<br />un valor inicial a los atributos de un objeto, por ejemplo, en<br />este caso al objeto Persona podríamos asignarle un nombre y<br />una edad. El código de arriba solamente imprime un mensaje<br />cuando creas un objeto Persona.<br /><br />Ahora, en el código que nos envías, el método __init__<br />recibe varios parámetros como &quot;debug&quot;, &quot;mode&quot;, &quot;fps&quot; ...<br /><br />Para saber que hace cada uno de estos parámetros tendrías<br />que ver un poco mas abajo en ese mismo código; por el nombre<br />que tiene cada uno de estos parámetros me animo a adivinar<br />para que puede servir cada uno: debug (para depurar el código), <br />bpp (indica la profundidad de colores en formato bits por pixel, <br />16 bits serían 2^16 colores, un montón, como 65536), <br />fps (la cantidad de cuadros por segundo que mostrará<br />el programa, fps es el acrónimo de &quot;frames per second&quot;).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Feb 27, 2008 2:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Xcode]]></name></author>
<updated>2008-02-26T22:14:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=246&amp;p=913#p913</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=246&amp;p=913#p913"/>
<title type="html"><![CDATA[Recursos basico __init__]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=246&amp;p=913#p913"><![CDATA[
Hola,<br />Estoy en un pequeño tutorial de Python. Esto podria ser una post patetico para los veteranos, pero... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> Decimos :<br /><dl class="codebox"><dt>Code: </dt><dd><code>def __init__ &#40;self, title, author = None, width = 640, height = 480, bpp = 16, mode = SWSURFACE, debug = False, fps = 70&#41;:</code></dd></dl><br />Para iniciar una ventana principal y los recusos.<br /><br />mode = SWSURFACE ( ¿de que se trata este mode?)<br />debug = False (¿cual es su funcion?)<br />fps = 70 (¿que es fps?)<br />bpp = 16  (¿que es bpp?) <br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1892">Xcode</a> — Mar Feb 26, 2008 10:14 pm</p><hr />
]]></content>
</entry>
</feed>