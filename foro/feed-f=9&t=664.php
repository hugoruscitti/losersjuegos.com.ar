<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=664" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-12-19T08:54:39+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=664</id>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2009-12-19T08:54:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3080#p3080</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3080#p3080"/>
<title type="html"><![CDATA[[solucionado]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3080#p3080"><![CDATA[
Hola de nuevo<br /><br />Bueno, ante todo, perdón por la tardanza en contestar, pero es que en estas fechas se anda algo escaso de tiempo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> <br /><br />Pues sí, eso era lo que buscaba, ahora funciona correctamente todo. Muchas gracias.<br /><br />Pásenlo bien estas fiestas ¡¡¡ Feliz Navidad !!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Sab Dic 19, 2009 8:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-12-16T06:56:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3077#p3077</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3077#p3077"/>
<title type="html"><![CDATA[cadenas de caracteres y utf-8]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3077#p3077"><![CDATA[
Ya pude probar en Linux (supongo que en Windows usaste MinGW), el problema es que la función <span style="font-style: italic">strlen</span> no devuelve el número de caracteres, sino el número de bytes. Para contar el número de caracteres de una cadena UTF-8 se puede hacer así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio&gt;<br />#include &lt;stdlib&gt;<br />#include &lt;string&gt;<br /><br />#include &lt;locale&gt;<br /><br />int main&#40; &#41; &#123;<br />   char cadena&#91;&#93; = &quot;Así&quot;;<br /><br />   // Necesario indicar la localización, si no se hace se utilizarán<br />   // caracteres de 1 byte<br />   setlocale&#40; LC_ALL, &quot;&quot; &#41;;<br /><br />   printf&#40; &quot;Cadena: %s&quot;, cadena &#41;;<br />   printf&#40; &quot;\nLongitud: %d &#40;bytes&#41;&quot;, strlen&#40; cadena &#41; &#41;;<br />   printf&#40; &quot;\nCaracteres: %d&quot;, mbstowcs&#40; NULL, cadena, 0 &#41; &#41;;<br /><br />   printf&#40; &quot;\n\n&quot; &#41;;<br /><br />   return 0;<br />&#125; <br /></code></dd></dl><br /><br />Además, es necesario indicar la localización con <span style="font-style: italic">setlocale</span>, si no se hace, no funcionará correctamente (puedes hacer la prueba). En el ejemplo que pongo, se configura la localización a la del sistema, puede ser necesario que se indique explícitamente.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Dic 16, 2009 6:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-12-16T05:21:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3076#p3076</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3076#p3076"/>
<title type="html"><![CDATA[cadenas de caracteres y utf-8]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3076#p3076"><![CDATA[
¿Qué compilador usas en Windows? Esto funciona en VC++ 2008:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio&gt;<br />#include &lt;stdlib&gt;<br />#include &lt;string&gt;<br /><br />int main&#40;&#41; &#123;<br /><br />   char cadena&#91;&#93; = &quot;Así&quot;;<br /><br />   //printf&#40; &quot;Cadena: %s\n&quot;, cadena &#41;;<br />   printf&#40; &quot;Longitud: %d\n&quot;, strlen&#40; cadena &#41; &#41;;<br /><br />   system&#40; &quot;pause&quot; &#41;;<br />   return 0;<br />&#125;</code></dd></dl><br /><br /><blockquote class="uncited"><div><br />Longitud: 3<br />Press any key to continue...<br /></div></blockquote><br /><br />El problema con tu compilador podría ser la localización (en VC++ es necesario ajustarla para que los caracteres se impriman correctamente), pero habría que probar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Dic 16, 2009 5:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2009-12-14T12:55:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3075#p3075</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3075#p3075"/>
<title type="html"><![CDATA[cadenas de caracteres y utf-8]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3075#p3075"><![CDATA[
Hola de nuevo.<br /><br />Un pequeñísimo ejemplo, el siguiente código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br /><br />int main&#40;int argc, char** argv&#41;<br />&#123;<br />   char cadena&#91;&#93; = &quot;Así&quot;;<br /><br />   printf&#40;&quot;Cadena: %s&quot;, cadena&#41;;<br />   printf&#40;&quot;\nLongitud: %d&quot;, strlen&#40;cadena&#41;&#41;;<br /><br />   printf&#40;&quot;\n\nPulse una tecla&quot;&#41;;<br />   getchar&#40;&#41;;<br /><br />   return 0;<br />&#125;<br /></code></dd></dl><br /><br />Si lo guardo en un archivo de formato utf-8 y lo compilo, el resultado es que la longitud de la cadena es 4. Pero si ese mismo código lo guardo en formato ANSI me da como resultado 3.<br /><br />He probado compilando en linux y windows y el resultado es el mismo.<br /><br />Mi duda es si es mejor guardar el código en formato ANSI o hay alguna forma de que el código funcione bien usando utf.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Lun Dic 14, 2009 12:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2009-12-11T22:33:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3073#p3073</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3073#p3073"/>
<title type="html"><![CDATA[cadenas de caracteres y utf-8]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=664&amp;p=3073#p3073"><![CDATA[
Hola<br /><br />Me ha surgido un problemilla con el formato utf-8, llevo ya usadas las funciones que Hugo me comenta en un anterior mensaje mio para personalizar tipos de letras: <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=602">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=602</a><!-- m --><br /><br />Hasta ahora usaba Dev-C++ y no había tenido problema. Hace poco conocí el editor Geany, y como me gusta probarlo todo, pues en ello estoy. Este editor me crea los archivos con el formato utf-8 y al ir a usar las funciones anteriores me surge un problema, no me imprime las vocales acentuadas y algunos caracteres especiales, bueno, si las imprime, pero, por ejemplo, por cada vocal acentuada, imprime dos caracteres.<br /><br />Si miro la longitud de las cadenas de texto, me dan un carácter más por cada acento, por ejemplo, la cadena &quot;así&quot; me dice que tiene 4 caracteres.<br /><br />Así que ¿cómo puedo solucionar esto? Usando utf-8, claro o ¿tengo que convertir todos los archivos de los fuentes a ANSI?<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Vie Dic 11, 2009 10:33 pm</p><hr />
]]></content>
</entry>
</feed>