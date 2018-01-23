<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1566" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-10-26T23:10:19+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1566</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-10-26T23:10:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7169#p7169</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7169#p7169"/>
<title type="html"><![CDATA[Re: Salto estilo tumble pop o snow bros 2]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7169#p7169"><![CDATA[
Bueno...<br /><blockquote><div><cite>baigos escribió:</cite><br />y controlo con rectangulos las colisiones de los objetos<br /></div></blockquote><br /><br />¿En que almacenas los rectángulos de las colisiones? Asumiré que en una lista <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />Lo que podrías hacer, aun que lo considero un poco complicado es:<br /><br /><pre class="prettyprint">personaje quiere bajar.<br />   buscamos con que rectángulo esta chocando.<br />   <br />   lo encontramos, lo sacamos de la lista.<br />   el rectángulo de las colisiones lo alojamos en una variable temporal...<br />   /*como ahora ya no existe el rectángulo, el personaje cae normalmente...*/<br /><br />el personaje ha caído.<br />   ¿la variable temporal esta ocupada?<br />        /*si esta ocupada la variable temporal...*/<br />        regresamos el rectángulo a la lista de las colisiones.</pre><br /><br />Creo que eso podría servirte sin cambiar mucho tu implementación <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Oct 26, 2012 11:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-10-25T21:33:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7166#p7166</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7166#p7166"/>
<title type="html"><![CDATA[Re: Salto estilo tumble pop o snow bros 2]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7166#p7166"><![CDATA[
Hola!!!, hay un ejemplo en pilas que hace algo muy similar, pero utiliza<br />una función para determinar la distancia al suelo, en lugar de física.<br /><br />Creo que te puede resultar super útil, está en los ejemplos, se llama &quot;mapa_personaje_martian&quot;:<br /><br /><!-- m --><a class="postlink" href="https://github.com/hugoruscitti/pilas/tree/master/pilas/ejemplos/ejemplos/mapas">https://github.com/hugoruscitti/pilas/t ... plos/mapas</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Oct 25, 2012 9:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2012-10-25T12:33:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7164#p7164</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7164#p7164"/>
<title type="html"><![CDATA[Salto estilo tumble pop o snow bros 2]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7164#p7164"><![CDATA[
Hola, estoy desarrollando un juego tipo tumble pop open source. Tengo un problema con las colisiones. Utilizo un tilemap y controlo con rectangulos las colisiones de los objetos. Hasta ahi funciona barbaro. Pero lo que quiero implementar es un sistema similar a snow bros 2 o tumble pop, que cuando saltamos desde abajo de una plataforma hacia arriba estas desactivan sus colisiones. Y cuando estamos sobre una plataforma haciendo abajo y salto nos permite descender un nivel. Busco algun juego similar que tenga disponible código fuente facil de entender, ya que el metane brothers tiene un principio similar pero el codigo es algo oscuro. O si alguien tiene implementada algun diagrama de estados o de flujo.<br />Hasta ahora hice algo, pero me encuentro con algunos problemas, en algunas plataformas el personaje hace tunel y se queda trabado en el medio del cuadrado de colisión.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Jue Oct 25, 2012 12:33 pm</p><hr />
]]></content>
</entry>
</feed>