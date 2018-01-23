<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=297" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-15T13:57:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=297</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-04-15T13:57:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=297&amp;p=1169#p1169</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=297&amp;p=1169#p1169"/>
<title type="html"><![CDATA[Crear Mapa????]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=297&amp;p=1169#p1169"><![CDATA[
Sí, queda a criterio tuyo en realidad. En general resulta bastante<br />conveniente crear el escenario de un juego en base a repetir<br />bloques pequeños en pantalla:<br /><br /><img src="http://www.losersjuegos.com.ar/referencia/articulos/plataformas/ima/figura2.png" alt="Imagen" /><br /><br />esta técnica, en general, se llama &quot;tiles map&quot; y hay muchas<br />formas de implementarla. En la mayoría de los casos se usa<br />un conjunto de imágenes pequeñas llamadas &quot;tiles&quot; y una<br />matríz que define el escenario, esta matríz puede estar directamente<br />en tu código o en un archivo, hay un artículo que te puede<br />servir:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/plataformas/plataformas.php">http://www.losersjuegos.com.ar/referenc ... formas.php</a><!-- m --><br /><br />En el caso del minijuego &quot;Monkey Hunter&quot; me resultó mas <br />sencillo representar el escenario usando caracteres del tipo &quot;|&quot; o <br />&quot;-&quot;, en lugar de números.<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/videos/python_y_pygame_cafeconf_2007/python_y_pygame_cafeconf_2007.php">http://www.losersjuegos.com.ar/referenc ... f_2007.php</a><!-- m --><br /><br />Pero claro, insisto, depende mucho de lo que te resulte mas<br />conveniente, el escenario de juego se define en base a lo que<br />deseas hacer. En algunos casos conviene hacer o usar editor<br />de escenarios (como en el juego Ceferino), en otros casos no.<br /><br />Depende de tí.<br /><br />Buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Abr 15, 2008 1:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-14T21:10:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=297&amp;p=1168#p1168</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=297&amp;p=1168#p1168"/>
<title type="html"><![CDATA[Crear Mapa????]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=297&amp;p=1168#p1168"><![CDATA[
Los mapas de los juego que estan en un archivo txt eso se hace a mano o se genera con alguna cosa por ejemplo<br /><br /><br />          |x.<br /> 7--   +| |@.<br /> |@   --3 | .<br />   79       .<br />   13 79  |x.<br /> |+ + ||++|+.<br /> 1-+--31 -3 .<br /> + x +    + .<br /><br />es el que tiene el juego de los monos y los cazadores, mirando el codigo me di cuenta que cada caracter esta asociado a una imagen.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Lun Abr 14, 2008 9:10 pm</p><hr />
]]></content>
</entry>
</feed>