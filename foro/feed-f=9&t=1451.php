<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1451" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-04-20T01:46:45+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1451</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-04-20T01:46:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1451&amp;p=6681#p6681</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1451&amp;p=6681#p6681"/>
<title type="html"><![CDATA[Re: Sin sonido]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1451&amp;p=6681#p6681"><![CDATA[
Buenas, ¿marcelo?.<br /><br />Recién contesté una pregunta muy similar en la lista de correo de pyar, así que<br />supongo que son la misma persona... Si es así, estás haciendo el juego con pilas<br />y seguramente te van a servir las funciones para desabilitar sonidos.<br /><br />Para deshabilitar el sonido de un juego podés ejecutar la función<br /><br /><pre class="prettyprint">pilas.mundo.deshabilitar_sonido&#40;&#41;</pre><br /><br />y de manera similar para la música:<br /><br /><pre class="prettyprint">pilas.mundo.deshabilitar_musica&#40;&#41;</pre><br /><br />Por cierto, actualizá a la última versión de pilas para ver esas nuevas<br />funciones.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Abr 20, 2012 1:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-04-18T17:31:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1451&amp;p=6672#p6672</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1451&amp;p=6672#p6672"/>
<title type="html"><![CDATA[Re: Sin sonido]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1451&amp;p=6672#p6672"><![CDATA[
Hola mmartinovic, para deshabilitar sonidos u otras<br />opciones de configuración podrías tener algo así como una constante<br />o variable (global?) que te indique si vas a reproducir sonidos o no.<br /><br />En algunos juegos lo que yo hice es tener clases para representar<br />los sonidos. Y una variable de clase me indica si el sonido está habilitado<br />o no.<br /><br />Con respecto a que el juego se congela unos segundos, lo mas probable<br />sea que lo que estás usando para reproducir el tema lo esté cargando<br />por completo en memoria. Lo que uno suele hacer en un juego, es cargar<br />las imágenes y los sonidos una sola vez (cuando el juego inicia), y luego cada<br />vez que se los quiere usar se los reproduce.<br /><br />Lo mas común, es que cargar el tema tarde unos segundos, pero reproducirlo<br />es instantáneo. ¿ese será el problema de tu juego?.<br /><br />Por cierto, ¿que herramientas para construir el juego estás usando?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Abr 18, 2012 5:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mmartinovic]]></name></author>
<updated>2012-04-18T16:08:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1451&amp;p=6671#p6671</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1451&amp;p=6671#p6671"/>
<title type="html"><![CDATA[Sin sonido]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1451&amp;p=6671#p6671"><![CDATA[
Buenas gente.<br />La consulta es la siguiente. Como primer momento me gustaria poder implementar al juego (mas que simple) que es para mi hijo, la opcion que no tenga sonido, cuando hay una explosion que esta no sea reproducida.<br />Esto es para 2 cosas.... la primera y mas importante que como padre no me vuelva loco con el ruido y la segunda para solucionar un tema que dejo para mas adelante que es que por alguna razon durante la reproduccion de sonido el movimiento se freeza por 1 o 2 segundos.<br />Esto ultimo calculo que podria ser por un tema del Ubuntu que tengo instalado (12.04 Beta 2) ya que en 11.10 esto funcionaba perfecto, pero bueno pinso verlo un poco mas adelante en el desarrollo del juego.<br />Desde ya gracias a quien me de una mano.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2598">mmartinovic</a> — Mié Abr 18, 2012 4:08 pm</p><hr />
]]></content>
</entry>
</feed>