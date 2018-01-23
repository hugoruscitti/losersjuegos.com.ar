<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=2596" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-12-02T20:32:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=2596</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-12-02T20:32:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9014#p9014</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9014#p9014"/>
<title type="html"><![CDATA[Re: ¿Hacer las partidas guardadas más duras de hackear?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9014#p9014"><![CDATA[
<blockquote><div><cite>Barajas escribió:</cite><br />Y, la que considero la manera más &quot;troll&quot; de ocultar información... aplicar los métodos de la <span style="font-weight: bold">Esteganografía </span> XD. Pero claro, esa ultima es más difícil de aplicar.<br /></div></blockquote><br /><br />Me parece la más atractiva, razones obvias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Dic 02, 2012 8:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-12-02T05:54:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9010#p9010</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9010#p9010"/>
<title type="html"><![CDATA[Re: ¿Hacer las partidas guardadas más duras de hackear?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9010#p9010"><![CDATA[
Podrías usar un algoritmo de cifrado, RSA da buenos resultados y es bastante seguro además, el jugador medio no creo que se tome tantas molestias como para romper un cifrado RSA.<br /><br />También, podrías simplemente escribir los datos en lugar de texto plano, en binario.. o mejor, en un archivo comprimido, el truco esta en que no saben que es un archivo comprimido... XD<br /><br /><pre class="prettyprint">#!/usr/bin/env python<br /># -*- coding: utf-8 -*-<br />import gzip, traceback, os<br />def write_compressed_file&#40;filename, string&#41;:<br />    &quot;&quot;&quot; normal write to a file - but the result will be compressed &quot;&quot;&quot;<br />    try:<br />        fd = gzip.GzipFile&#40;filename=filename, mode=&#39;wb&#39;, compresslevel=9&#41;<br />        fd.write&#40;string&#41;<br />    except &#40;IOError, os.error&#41;, why:<br />        print &#39;Failed to write the file&#39;, filename, &#39;\n Exception:&#39;, why<br />    finally:<br />        if fd is not None:<br />            fd.close&#40;&#41;<br /><br />def read_compressed_file&#40;filename&#41;:<br />    &quot;&quot;&quot; reads the compressed file - if the file is not compressed read_file is called. &quot;&quot;&quot;<br />    try:<br />        fd = gzip.GzipFile&#40;filename=filename, mode=&#39;rb&#39;&#41;<br />        fd.read&#40;1&#41; # trigger an exception if is not compressed<br />        fd.seek&#40;0&#41;<br />        print &#39;IS a compressed file&#39;<br />        return fd.read&#40;&#41;<br />    except &#40;IOError, os.error&#41;, why:<br />        print &#39;not compressed file&#39;<br />        return read_file&#40;filename&#41;<br />    finally:<br />        if fd is not None:<br />            fd.close&#40;&#41;</pre><br /><br />Y, la que considero la manera más &quot;troll&quot; de ocultar información... aplicar los métodos de la <span style="font-weight: bold">Esteganografía </span> XD. Pero claro, esa ultima es más difícil de aplicar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Dom Dic 02, 2012 5:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-11-30T16:34:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9008#p9008</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9008#p9008"/>
<title type="html"><![CDATA[Re: ¿Hacer las partidas guardadas más duras de hackear?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9008#p9008"><![CDATA[
<blockquote><div><cite>kaiser escribió:</cite><br />Teniendo en cuenta que en Python el código fuente queda expuesto no me parece que tenga mucho sentido aplicar un método de cifrado que cualquier jugador con acceso al código y unos conocimientos mínimos podría invertir o incluso eliminar del código sin muchas complicaciones.<br /></div></blockquote><br /><br />Bueno, eso no es del todo cierto. El desarrollador puede distribuir su producto como un binario gracias a <a href="http://www.pyinstaller.org/" class="postlink">PyInstaller</a> facilitando así la distribucion he instalacion del juego. Como el producto en cuestion es software libre (¿cierto, no?) el usuario tendria que pedir el codigo fuente por aparte. En fin, el asunto es que el jugador no tendria acceso inmedianto al codigo fuente del juego por el mero hecho de estar instalado en su sistema!<br /><br /><blockquote><div><cite>kaiser escribió:</cite><br />Las únicas formas que se me ocurren de asegurar que el archivo no puede ser modificado pasan por obligar al usuario a conectarse a Internet.<br /></div></blockquote><br /><br />Creo que eso es una forma de DRM... no DRM como tal, pero seria bastante molesto no poder jugar porqué no tienes internet en los alrededores <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Nov 30, 2012 4:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2012-11-30T14:16:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9007#p9007</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9007#p9007"/>
<title type="html"><![CDATA[Re: ¿Hacer las partidas guardadas más duras de hackear?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=9007#p9007"><![CDATA[
Sinceramente nunca he necesitado proteger un archivo de guardado ya que nunca he diseñado un juego multijugador serio más allá de para echar unas partidas con algún colega puntualmente. En juegos de un jugador creo que debe ser éste quien decida si quiere hacer trampas o no, tanto modificando la información guardada como modificando el código del juego, de tal forma que le resulte más divertido jugar. Creo que de alguna manera forma parte del concepto de software libre.<br /><br />Teniendo en cuenta que en Python el código fuente queda expuesto no me parece que tenga mucho sentido aplicar un método de cifrado que cualquier jugador con acceso al código y unos conocimientos mínimos podría invertir o incluso eliminar del código sin muchas complicaciones. Entiendo por lo tanto que la idea no es impedir completamente el acceso a la información sino simplemente dificultarlo un poco. Dicho esto, considero que el cifrado como tal podría resultar algo excesivo, siendo más sencillo codificar el archivo de guardado en Base64 (o similar) o bien calcular un hash del archivo cada vez que el juego guarde algo y comprobar dicho hash antes de cargarlo, de tal manera que si el jugador lo modifica manualmente el nuevo hash del archivo no coincida con el almacenado y se detecte la modificación. Como dije antes, un jugador que revise el código del juego y detecte el uso de alguno de estos métodos podría muy fácilmente invertirlo aplicando una decodificación Base64 o sustituyendo el hash almacenado por el nuevo hash tras modificar el archivo.<br /><br />Las únicas formas que se me ocurren de asegurar que el archivo no puede ser modificado pasan por obligar al usuario a conectarse a Internet. Se podría, por ejemplo, almacenar el archivo de guardado en un servidor o si se quiere evitar el almacenamiento para reducir costes, se puede cifrar el archivo y cada vez que se quiera modificar sería necesario conectarse al servidor y descargarse la clave de descifrado.<br /><br />Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Vie Nov 30, 2012 2:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-11-18T05:31:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=8517#p8517</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=8517#p8517"/>
<title type="html"><![CDATA[¿Hacer las partidas guardadas más duras de hackear?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2596&amp;p=8517#p8517"><![CDATA[
Hola a todos ¿han visto todo ese spam ultimamente? :-/<br /><br />Me a entrado la duda con respecto a los datos guardados de una partida ¿Cómo sera mejor proceder para hacerlos más dificiles de hackear? Dudo que a alguien le guste que los jugadores tramposos consigan 9999 rupias/monedas de oro en tu juego cambiando los datos de la partida xd<br /><br /><span style="font-weight: bold">¿Qué metodo de cifrado (si usaran alguno) usan regularmente para las partidas guardadas en sus juegos?</span> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Nov 18, 2012 5:31 am</p><hr />
]]></content>
</entry>
</feed>