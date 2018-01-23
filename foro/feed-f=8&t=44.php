<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=44" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-01-14T00:13:56+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=44</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2007-01-14T00:13:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=44&amp;p=141#p141</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=44&amp;p=141#p141"/>
<title type="html"><![CDATA[Re: rompiendome la cabeza con rand()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=44&amp;p=141#p141"><![CDATA[
<blockquote><div><cite>link182 escribió:</cite><br />pero si lo uso dentro del for:<br /><dl class="codebox"><dt>Code: </dt><dd><code>for &#40;a = 0; a &lt; 10; a++&#41;<br />&#123;<br />    srand&#40; time&#40; NULL &#41;&#41;;<br />    num = rand&#40;&#41; % 100;<br />    cout &lt;&lt; num &lt;&lt; endl;<br />&#125;</code></dd></dl><br />pues me sale el mismo numero en las 10 pasadas :S<br />y como que esta raro, me funciona como debería si pongo lo del srand antes del for pero no termino de entender,<br /></div></blockquote><br />Por supuesto, puesto que estás &quot;inicializando la semilla&quot; siempre al mismo valor. time( NULL ) te devuelve lo mismo en todas las pasadas, por lo tanto siempre pasas el mismo valor a srand(), con lo que siempre tendrás el mismo número en la primer llamada a rand() después de haber usado srand().<br /><br />Saludos,<br />JJ (Geo).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom Ene 14, 2007 12:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-01-11T03:25:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=44&amp;p=139#p139</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=44&amp;p=139#p139"/>
<title type="html"><![CDATA[Re: rompiendome la cabeza con rand()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=44&amp;p=139#p139"><![CDATA[
<blockquote><div><cite>link182 escribió:</cite><br />y cada que lo ejecuto salen 10 numeros diferentes entre si, pero son los mismos en cada ejecución... según el libro que estoy leyendo, debo usar algo como<br /><dl class="codebox"><dt>Code: </dt><dd><code>srand&#40; time&#40; NULL &#41;&#41;;</code></dd></dl><br /></div></blockquote><br />Claro, la función srand inicializa el generador de números aleatorios mediante<br />un argumento como semilla. Se suele utilizar el retorno de otra función como <br />&quot;time(NULL)&quot; para que esta semilla sea diferente en cada ejecución del <br />programa.<br /><br />Lo que deberías utilizar es una sentencia como la siguiente pero solo al <br />principio del programa:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>srand&#40;time&#40;NULL&#41;&#41;;</code></dd></dl><br />Con ello los números serán &quot;menos predecibles&quot;.<br /><br /><blockquote class="uncited"><div><br />y como que esta raro, me funciona como debería si pongo lo del srand antes del for pero no termino de entender, si ahí se ejecuta una sola vez comparado con lo que pongo ahí arriba que se ejecuta cada pasada (que supuse debería ser mucho más random) <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> podrian explicarme el por que de eso? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /></div></blockquote><br />¿y llamando a srand(rand())?. No se, es una idea, puede que alterando la <br />semilla mejore la variedad de resultados.<br /><br />La página del manual de GNU indica algo interesante sobre esta función, <br />sobretodo al final de la misma, donde no recomiendan utilizar el operador % <br />para acotar el resultado de rand:<br /><br /><!-- m --><a class="postlink" href="http://www.hispafuentes.com/hf-doc/man/man3/rand.3.html">http://www.hispafuentes.com/hf-doc/man/man3/rand.3.html</a><!-- m --><br /><br />Buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Ene 11, 2007 3:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[link182]]></name></author>
<updated>2007-01-09T04:24:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=44&amp;p=138#p138</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=44&amp;p=138#p138"/>
<title type="html"><![CDATA[rompiendome la cabeza con rand()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=44&amp;p=138#p138"><![CDATA[
holas, soy nuevo en el foro y en c++ <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> quiero aprender a manejarlo con sdl, pero estoy comenzando y no entiendo bien esto del rand()...<br /><br />tengo este for<br /><dl class="codebox"><dt>Code: </dt><dd><code>for &#40;a = 0; a &lt; 10; a++&#41;<br />&#123;<br />    num = rand&#40;&#41; % 100;<br />    cout &lt;&lt; num &lt;&lt; endl;<br />&#125;</code></dd></dl><br />y cada que lo ejecuto salen 10 numeros diferentes entre si, pero son los mismos en cada ejecución... según el libro que estoy leyendo, debo usar algo como<br /><dl class="codebox"><dt>Code: </dt><dd><code>srand&#40; time&#40; NULL &#41;&#41;;</code></dd></dl> antes de usar el rand()... pero si lo uso dentro del for:<br /><dl class="codebox"><dt>Code: </dt><dd><code>for &#40;a = 0; a &lt; 10; a++&#41;<br />&#123;<br />    srand&#40; time&#40; NULL &#41;&#41;;<br />    num = rand&#40;&#41; % 100;<br />    cout &lt;&lt; num &lt;&lt; endl;<br />&#125;</code></dd></dl><br />pues me sale el mismo numero en las 10 pasadas :S<br />y como que esta raro, me funciona como debería si pongo lo del srand antes del for pero no termino de entender, si ahí se ejecuta una sola vez comparado con lo que pongo ahí arriba que se ejecuta cada pasada (que supuse debería ser mucho más random) <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> podrian explicarme el por que de eso? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=244">link182</a> — Mar Ene 09, 2007 4:24 am</p><hr />
]]></content>
</entry>
</feed>