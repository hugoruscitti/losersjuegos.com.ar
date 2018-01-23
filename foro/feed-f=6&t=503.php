<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=503" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-03-05T00:04:57+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=503</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-05T00:04:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2215#p2215</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2215#p2215"/>
<title type="html"><![CDATA[Problemas con SDL_Color]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2215#p2215"><![CDATA[
Bueno ya encontre como resolverlo y espero sea permanente y no una respuesta simple y sencilla...<br />Lo que hice fue crear la estructura de la siguiente manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>struct Strc_contador&#123;<br />   SDL_Color *bgcolor, *fgcolor;<br />&#125;; </code></dd></dl><br />apuntador a estructura<br /><dl class="codebox"><dt>Code: </dt><dd><code>Strc_contador* valores_contador;<br /></code></dd></dl><br />y reserve la memoria asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>valores_contador = new Strc_contador;<br />valores_contador-&gt;gbcolor = new SDL_Color;<br />valores_contador-&gt;fbcolor = new SDL_Color;<br /></code></dd></dl><br />y en la funcion que lee el archivo me quedo asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>   FILE *file_contador;<br />   file_contador = fopen&#40; PATHCONTADOR, &quot;r&quot; &#41;;<br />   if&#40; file_contador == NULL &#41;&#123;<br />      printf&#40; &quot;no se pudo abrir el archivo&quot;&#41;;<br />                exit&#40;0&#41;;<br />   &#125;else&#123;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;bgcolor-&gt;r &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;bgcolor-&gt;g &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;bgcolor-&gt;b &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;fgcolor-&gt;r &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;fgcolor-&gt;g &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;fgcolor-&gt;b &#41;;<br />      fclose&#40; file_contador &#41;;<br />   &#125; <br /></code></dd></dl><br />Y con esto ahora no me tira ese fallo de segmentacion...<br />Ahora mi duda es la siguiente:<br />Podria mi aplicacion con estas modificaciones correr correctamente en otras distros y SO. ?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue Mar 05, 2009 12:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-04T22:37:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2212#p2212</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2212#p2212"/>
<title type="html"><![CDATA[Problemas con SDL_Color]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2212#p2212"><![CDATA[
Si te refieres a algo como esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>100 100 100 100 100 100</code></dd></dl><br />Si ya lo habia intentado y sigue igual....<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Mar 04, 2009 10:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2009-03-04T11:29:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2206#p2206</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2206#p2206"/>
<title type="html"><![CDATA[Problemas con SDL_Color]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2206#p2206"><![CDATA[
¿Has probado a pasarle los valores que hay en el archivo de texto plano todos en la misma linea y separados por espacios?<br />No entiendo mucho pero el salto de línea puede estar creando problemas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mié Mar 04, 2009 11:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-04T06:19:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2203#p2203</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2203#p2203"/>
<title type="html"><![CDATA[Problemas con SDL_Color]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=503&amp;p=2203#p2203"><![CDATA[
He estado desarrollando una pequeña libreria...<br />Me ha surgido un extraño error al usar SDL_Color variables para el color dadas pro dicha estructura....<br />Tengo yo una estructura mas o menos asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>struct Strc_contador&#123;<br />   SDL_Color bgcolor, fgcolor;<br />&#125;;<br /></code></dd></dl><br />Y un apuntador a dicha estructra asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>Strc_contador* valores_contador;</code></dd></dl><br />reservando memoria de la siguiente manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>valores_contador = new Strc_contador;</code></dd></dl><br />y el problema viene cuando trato de asignarle un valor a fgcolor extrañamente hago lo mismo con gbcolor y no da error alguno...Ahora le intento dar los valores de la siguiente manera:<br />Tengo un archivo de texto plano con los valores de la siguiente manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>100 100 100<br />100 100 100</code></dd></dl><br />Y para leer el archivo tengo una funcion que hace esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>   FILE *file_contador;<br />   file_contador = fopen&#40; PATHCONTADOR, &quot;r&quot; &#41;;<br />   if&#40; file_contador == NULL &#41;&#123;<br />      printf&#40; &quot;no se pudo abrir el archivo&quot;&#41;;<br />                exit&#40;0&#41;;<br />   &#125;else&#123;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;bgcolor.r &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;bgcolor.g &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;bgcolor.b &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;fgcolor.r &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;fgcolor.g &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;fgcolor.b &#41;;<br />      fclose&#40; file_contador &#41;;<br />   &#125;<br /></code></dd></dl><br />Y solo me da error con las dos ultimas lineas:<br /><dl class="codebox"><dt>Code: </dt><dd><code>fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;fgcolor.g &#41;;<br />      fscanf&#40; file_contador, &quot;%d&quot;, &amp;valores_contador-&gt;fgcolor.b &#41;;</code></dd></dl><br />si se las quito corre correctamente....<br />Espero no haberme exedido...<br />Nota compilo con g++-4.3 uso debian lenny como sistema...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Mar 04, 2009 6:19 am</p><hr />
]]></content>
</entry>
</feed>