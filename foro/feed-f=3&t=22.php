<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=22" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2006-10-10T00:01:39+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=22</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2006-10-10T00:01:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=22&amp;p=75#p75</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=22&amp;p=75#p75"/>
<title type="html"><![CDATA[Re: El juego Chanta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=22&amp;p=75#p75"><![CDATA[
<blockquote><div><cite>Javier escribió:</cite><br />Hola a todos.<br />Tengo un pequeño problema con el ejemplo del juego Chanta.<br />Intento compilar el codigo con Vc ++ version 2005 y me da unos cuantos errores, entre ellos DATADIR &quot;Identificador no declarado&quot;.<br />Si alguien me puede ayudar se lo agradezco.<br />Un saludo.<br /></div></blockquote> Saludos,<br /><br />DATADIR es una constante que especifica donde se encuentran los archivos de imagen y sonido del programa. Yo lo utilizaba dentro de las rutas hacia los archivos, por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>imagen = SDL_LoadBMP &#40;DATADIR &quot;algo.bmp&quot;&#41;</code></dd></dl><br /><br />En GNU esta constate se especifica al momento de configurar el programa, imagino que en windows será suficiente con escribir:<br /><br />  #define DATADIR &quot;datadir/&quot;<br /><br />donde datadir sería la carpeta que almacena los recursos del juego.<br /><br />Buena suerte. Luego comentanos como te fué.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Oct 10, 2006 12:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Javier]]></name></author>
<updated>2006-10-09T20:34:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=22&amp;p=74#p74</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=22&amp;p=74#p74"/>
<title type="html"><![CDATA[El juego Chanta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=22&amp;p=74#p74"><![CDATA[
Hola a todos.<br />Tengo un pequeño problema con el ejemplo del juego Chanta.<br />Intento compilar el codigo con Vc ++ version 2005 y me da unos cuantos errores, entre ellos DATADIR &quot;Identificador no declarado&quot;.<br />Si alguien me puede ayudar se lo agradezco.<br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=39">Javier</a> — Lun Oct 09, 2006 8:34 pm</p><hr />
]]></content>
</entry>
</feed>