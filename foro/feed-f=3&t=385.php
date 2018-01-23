<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=385" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-26T19:42:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=385</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-26T19:42:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1968#p1968</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1968#p1968"/>
<title type="html"><![CDATA[Re: Desplazamiento suave ¿usarlo como base para un juego?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1968#p1968"><![CDATA[
<blockquote><div><cite>baco escribió:</cite><br />Lo pregunto porque despues de aumentar la ventana a 800x600, de dejar la camara sin que se acerque de manera gradual, el mapa a 50x50 tiles y cada tile de 40x40 empieza a notarse que va a golpes<br /></div></blockquote><br /><br />Si, se puede usar el código como base para construir otro<br />juego. El punto es que una pantalla de 800x600 pixels es<br />bastante grande como para imprimir sobre ella a cada momento.<br />Esto hace muy difícil mantener el rendimiento del juego.<br /><br />Una forma de evitar esto es implementar una técnica de<br />actualización de pantalla como Dirty Rectangles (si quieres<br />puedes usar pygame 1.8 donde ya viene implementada) o<br />simplemente hacer la pantalla del juego mas pequeña.<br /><br />Yo el lo personal me inclinaría por hacer la pantalla mas<br />pequeña, de hecho, cuando un juego usa pixelart queda mucho<br />mas bonito cuando se pueden apreciar los pixels.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ene 26, 2009 7:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-01-26T19:38:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1967#p1967</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1967#p1967"/>
<title type="html"><![CDATA[Desplazamiento suave ¿usarlo como base para un juego?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1967#p1967"><![CDATA[
A mí sí que se me ve, haciendo clic en la imagen. Aunque sale una página con propaganda...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Ene 26, 2009 7:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kilohurts]]></name></author>
<updated>2009-01-26T19:03:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1966#p1966</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1966#p1966"/>
<title type="html"><![CDATA[Mmm]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1966#p1966"><![CDATA[
No se puede ver la imagen <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2052">kilohurts</a> — Lun Ene 26, 2009 7:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baco]]></name></author>
<updated>2008-09-30T21:46:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1684#p1684</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1684#p1684"/>
<title type="html"><![CDATA[Desplazamiento suave ¿usarlo como base para un juego?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=385&amp;p=1684#p1684"><![CDATA[
He estado 'jugando' con este gran ejemplo... ampliar el mapa, ampliar la ventana, aumentar la velocidad del tanque, aumentar los tiles, etc... y ahora me asalta otra duda.<br /><br />¿se puede usar este ejemplo como base para un juego? Me refiero a que con este ejemplo ya tenemos lo que se encarga de dibujar el mapa, colocar al jugador, la camara...<br /><br />Lo pregunto porque despues de aumentar la ventana a 800x600, de dejar la camara sin que se acerque de manera gradual, el mapa a 50x50 tiles y cada tile de 40x40 empieza a notarse que va a golpes<br /><br />PD: Uso esta imagen para el mapa que es una del rpg pero aumentada de tamaño:<br /><a href="http://img136.imageshack.us/my.php?image=tilestc5.png" class="postlink"><img src="http://img136.imageshack.us/img136/3561/tilestc5.th.png" alt="Imagen" /></a><a href="http://g.imageshack.us/thpix.php" class="postlink"><img src="http://img136.imageshack.us/images/thpix.gif" alt="Imagen" /></a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1988">baco</a> — Mar Sep 30, 2008 9:46 pm</p><hr />
]]></content>
</entry>
</feed>