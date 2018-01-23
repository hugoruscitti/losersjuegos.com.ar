<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=657" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-11-24T13:53:03+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=657</id>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2009-11-24T13:53:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=657&amp;p=3051#p3051</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=657&amp;p=3051#p3051"/>
<title type="html"><![CDATA[Sonido retardado.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=657&amp;p=3051#p3051"><![CDATA[
Muchas gracias por tu respuesta.<br /><br />Con 512 como dices tu van bien los sonidos.<br /><br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Mar Nov 24, 2009 1:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metalero]]></name></author>
<updated>2009-11-19T00:31:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=657&amp;p=3048#p3048</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=657&amp;p=3048#p3048"/>
<title type="html"><![CDATA[Sonido retardado.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=657&amp;p=3048#p3048"><![CDATA[
Te explico, el ultimo parametro es el tamaño del llamado &quot;sample&quot;. Este &quot;sample&quot; vendria a ser un trozo de musica, que es un pedazo del archivo de audio, que el micro manda a la placa de audio, para que ésta haga la conversion digital analogico.<br /><br />Mientras mas grande es el sample, mas tarda en &quot;recorrer&quot; el camino hasta llegar al parlante, pero tiene la ventaja de que requiere menos trabajo por parte del CPU.<br /><br />Si en cambio pones un numero mas chico, el sonido va a ser mas cercano a &quot;tiempo real&quot; pero consume mas recursos del CPU.<br /><br />El numero que yo uso para los samples es 512, se nota un pequeño atraso (milisegundos), pero no es molesto.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2158">Metalero</a> — Jue Nov 19, 2009 12:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2009-11-16T20:33:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=657&amp;p=3047#p3047</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=657&amp;p=3047#p3047"/>
<title type="html"><![CDATA[Sonido retardado.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=657&amp;p=3047#p3047"><![CDATA[
Hola buenas, estoy haciendo un pequeño juego para PC en ubuntu.<br /><br />Cuando hago Mix_OpenAudio(22050, MIX_DEFAULT_FORMAT, 2, 2048);<br />si pongo el último parametro superior a 1024 se produce un retraso del sonido con respecto a la imagen ( cuando pulso la tecla de disparar ).<br /><br />¿ A que podría ser debido esto ?<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Lun Nov 16, 2009 8:33 pm</p><hr />
]]></content>
</entry>
</feed>