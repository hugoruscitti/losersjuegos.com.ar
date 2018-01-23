<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=600" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-07-21T09:49:44+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=600</id>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-07-21T09:49:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=600&amp;p=2795#p2795</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=600&amp;p=2795#p2795"/>
<title type="html"><![CDATA[xD]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=600&amp;p=2795#p2795"><![CDATA[
<blockquote><div><cite>endaramiz escribió:</cite><br />text4 = text3.split('\n')<br /><br />Saludos. (tengo prisa xD)<br /></div></blockquote><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mar Jul 21, 2009 9:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-07-21T09:39:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=600&amp;p=2794#p2794</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=600&amp;p=2794#p2794"/>
<title type="html"><![CDATA[Imprimir cadenas con saltos de línea en pygame (asadetris)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=600&amp;p=2794#p2794"><![CDATA[
text4 = text3.split('\n')<br /><br />Saludos. (tengo prisa xD)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Jul 21, 2009 9:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-07-21T09:31:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=600&amp;p=2793#p2793</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=600&amp;p=2793#p2793"/>
<title type="html"><![CDATA[Imprimir cadenas con saltos de línea en pygame (asadetris)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=600&amp;p=2793#p2793"><![CDATA[
PAra la función para poder imprimir texto con saltos de línea, había pensado en separar la cadena con string.split(), y que la función devolviera una lista con cada una de las líneas del texto. El caso es que para probar el concepto, hice esto en el interprete interactivo de Python:<br /><dl class="codebox"><dt>Code: </dt><dd><code>&gt;&gt;&gt; text = 'Hola esto es una prueba'<br />&gt;&gt;&gt; text2 = text.split&#40; &#41;<br />&gt;&gt;&gt; print text2<br />&#91;'Hola', 'esto', 'es', 'una', 'prueba'&#93;<br />&gt;&gt;&gt; text3 = 'Hola, esto es una prueba, \n con saltos de línea'<br />&gt;&gt;&gt; print text3<br />Hola, esto es una prueba, <br /> con saltos de línea<br />&gt;&gt;&gt; text4 = text3.split&#40;\n&#41;<br />  File &quot;&lt;stdin&gt;&quot;, line 1<br />    text4 = text3.split&#40;\n&#41;<br />                          ^<br />SyntaxError: unexpected character after line continuation character<br />&gt;&gt;&gt; <br /></code></dd></dl><br />Como ven me tira un error, ¿qué es, que split no soporta separar con \n o he hecho algo mal?<br />¡Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mar Jul 21, 2009 9:31 am</p><hr />
]]></content>
</entry>
</feed>