<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=884" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-26T10:35:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=884</id>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2010-09-26T10:35:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4201#p4201</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4201#p4201"/>
<title type="html"><![CDATA[Re: Caracteres españoles en fuentes con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4201#p4201"><![CDATA[
Solucionado Hugo, se trataba de poner la u de unicode delante de la cadena.<br /><br />¡Muchas gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Dom Sep 26, 2010 10:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2010-09-21T14:05:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4174#p4174</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4174#p4174"/>
<title type="html"><![CDATA[Re: Caracteres españoles en fuentes con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4174#p4174"><![CDATA[
¡Muchas gracias por tu respuesta!<br /><br />No se si te habías descargado el código, pero lo de coding: utf-8 ya lo tenía funcionado, lo que pasa que solo me iba para los mensajes que salian por consola con print, no para las fuentes con pygame. Probaré lo de las cadenas unicode que me decías a ver que tal.<br /><br />¡Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mar Sep 21, 2010 2:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-21T13:55:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4173#p4173</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4173#p4173"/>
<title type="html"><![CDATA[Re: Caracteres españoles en fuentes con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4173#p4173"><![CDATA[
Buenas, una forma de indicarle a pygame que genere correctamente<br />los mensajes es usar strings unicode:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>mi_mensaje = u&quot;¿hola?, ¿hay alguien ahí?<br /><br />mensaje_como_imagen = font.render(mi_mensaje, 1, (0, 0, 0))<br /></code></dd></dl><br /><br />es decir, una cadena unicode es como una cadena normal pero tiene una<br />letra 'u' como prefijo.<br /><br />También sería bueno que coloques esta cadena de comentario<br />al principio de tu programa:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- coding: utf-8 -*-<br /></code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Sep 21, 2010 1:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2010-09-21T10:32:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4171#p4171</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4171#p4171"/>
<title type="html"><![CDATA[Caracteres españoles en fuentes con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=884&amp;p=4171#p4171"><![CDATA[
Hola a todos:<br /><br />Casi no me acordaba de como se programaba, pero me apetecía hacer algo, así que anduve repasando algunos ejemplos y al final acabé haciendo este ejemplo: <!-- m --><a class="postlink" href="http://pythonmania.wordpress.com/2010/04/07/tutorial-pygame-3-un-videojuego/">http://pythonmania.wordpress.com/2010/0 ... ideojuego/</a><!-- m --> Luego los  mejore para que fuera un juego completo. Le añadí el marcador, la pantalla del título y la pantalla que indica quien ganó. El caso es que nunca había usado fuentes en pygame, aprendí para acabar este ejemplo.<br /><br />A pesar de estar codificado con utf-8 cuando pongo símbolos españoles como &quot;¡&quot; o &quot;¿&quot; aparecen otros símbolos raros antes de ellos. ¿Es normal o se puede evitar?<br /><br />Aquí dejo la descarga del minijuego completo: <!-- m --><a class="postlink" href="https://sites.google.com/site/liberatumundodescargas/pong-remake/PongRemake.tar.gz?attredirects=0&amp;d=1">https://sites.google.com/site/liberatum ... ects=0&amp;d=1</a><!-- m --><br /><br />¡Muchas gracias!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mar Sep 21, 2010 10:32 am</p><hr />
]]></content>
</entry>
</feed>