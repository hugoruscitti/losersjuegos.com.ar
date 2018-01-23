<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=453" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-13T10:28:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=453</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-13T10:28:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=453&amp;p=2100#p2100</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=453&amp;p=2100#p2100"/>
<title type="html"><![CDATA[Error con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=453&amp;p=2100#p2100"><![CDATA[
<blockquote><div><cite>sofoke escribió:</cite><br /><dl class="codebox"><dt>Code: </dt><dd><code>error while loading shared libraries: libpng.so.3: cannot open shared object file: No such file or directory</code></dd></dl><br /></div></blockquote><br /><br />Puede que ya lo hayas mirado pero es un fallo tonto que a veces pasa. ¿Te has fijado si el archivo es .png o .PNG? A diferencia de Windows, GNU/Linux lo diferencia.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Vie Feb 13, 2009 10:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-02-13T05:28:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=453&amp;p=2099#p2099</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=453&amp;p=2099#p2099"/>
<title type="html"><![CDATA[Error con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=453&amp;p=2099#p2099"><![CDATA[
Bueno aqui contestandome...  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> <br />el error que encontre con respecto a eso... era (segun parece) solo que habia un error en la instalacion de SDL... pues probe de la siguiente manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>apt-get install libsdl1.2-dev</code></dd></dl><br />y parece jalar perfecto...<br />pero ahora tengo otro problema  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> <br />que viene cuando trato de ejecutar algun juego que necesita de libpng... me tira un error parecido a esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>error while loading shared libraries: libpng.so.3: cannot open shared object file: No such file or directory</code></dd></dl><br />instale libpng-1.2.34 desde las sourcers de la pag oficial y sigue igual<br />trate instalandolo de la siguiente manera<br /><dl class="codebox"><dt>Code: </dt><dd><code>apt-get install libpng-dev</code></dd></dl><br />y metira algo de que se usara libpng12-dev en vez de libpng-dev... y despues dice que ya esta en su version mas reciente... incluso ya hice un ldconfig en modo root y aun asi sigue igual...<br />Cual podra ser el problema que me da...¿?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Vie Feb 13, 2009 5:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-01-18T19:46:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=453&amp;p=1923#p1923</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=453&amp;p=1923#p1923"/>
<title type="html"><![CDATA[Error con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=453&amp;p=1923#p1923"><![CDATA[
No se si va aqui pero en fin...<br />Tengo un problema al compilar usando SDL y casi todas las demas librerias (SDL) va bien no hay problema... incluso al hacer el linker no hay error...<br />el error surge cuando trato de ejecutar el juego. me sale esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>ERROR AL INICIALIZAR SDL No available video device</code></dd></dl><br />cabe notar que lo primero es mio lo de No available y demas es de SDL que retorna el error...<br />segun creo (segun mi ignorancia) es que no pudo encontrar un modo de video o algo asi...<br />el problema  es que ahora me pase a kubuntu y no me deja ejecutar ninun ejemplo con sdl pues al parecer no puede inicializar el video...<br />y cuando lo probe en knoppix y opensuse no hubo problema...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Dom Ene 18, 2009 7:46 pm</p><hr />
]]></content>
</entry>
</feed>