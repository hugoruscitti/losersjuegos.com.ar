<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=444" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-11T21:06:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=444</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-11T21:06:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=444&amp;p=1879#p1879</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=444&amp;p=1879#p1879"/>
<title type="html"><![CDATA[Compilacion condicional (error diferenciando Unix de Linux)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=444&amp;p=1879#p1879"><![CDATA[
El siguiente código te puede servir de ejemplo, las<br />constantes toman valor en tiempo de compilación, así<br />que lo siguiente compila de forma diferente en Windows<br />u otro sistema:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br /><br />int main&#40;void&#41;<br />&#123;<br />#ifdef WIN32<br />    printf&#40;&quot;Hola, estoy en windows\n&quot;&#41;;<br />#else<br />    printf&#40;&quot;Hola, estoy en GNU/Linux u otro sistema \n&quot;&#41;;<br />#endif<br /><br />    return 0;<br />&#125;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ene 11, 2009 9:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-01-11T01:56:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=444&amp;p=1870#p1870</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=444&amp;p=1870#p1870"/>
<title type="html"><![CDATA[Compilacion condicional (error diferenciando Unix de Linux)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=444&amp;p=1870#p1870"><![CDATA[
Hola, estoi usando GNU/Linux Ubuntu 8.10 y en un programa intento con compilacion condicional crear una macro con el nombre del sistema en el que halla sido compilado.<br /><br />Para ello compruebo si esta definida la macro Linux y si existe la macro Unix (entre otras como WIN32), el problema esta en que me aparece como definidas ambas, por lo que no puedo diferenciar con el codigo si se esta compilando en Linux o en Unix o en otro sistema deribado de unix como mac.<br /><br />¿Como podria solucionar esto, como podria saber en que sistema se esta compilando un programa, o incluso mejor, en cual se esta ejecutando?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Ene 11, 2009 1:56 am</p><hr />
]]></content>
</entry>
</feed>