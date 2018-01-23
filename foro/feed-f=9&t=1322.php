<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1322" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-24T06:18:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1322</id>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2011-10-24T06:18:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6139#p6139</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6139#p6139"/>
<title type="html"><![CDATA[Re: Splitlines con Unicode]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6139#p6139"><![CDATA[
Lo he solucionado cambiando el splitlines() por split('\\n').<br /><br />Gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Lun Oct 24, 2011 6:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-10-21T16:50:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6132#p6132</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6132#p6132"/>
<title type="html"><![CDATA[Re: Splitlines con Unicode]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6132#p6132"><![CDATA[
El problema esta en que cuando se carga el fichero, trasforma la cadena de la forma:<br />&quot;Esto es una \n prueba más.&quot;<br /><br />a...<br /><br />&quot;Esto es una \\n prueba más.&quot;<br /><br />Es decir, trasforma el símbolo del salto de linea en caracteres....<br /><br />Es más, el programa funciona bien si el archivo esta escrito así...<br /><dl class="codebox"><dt>Code: </dt><dd><code>&lt;datos&gt;<br />    &lt;texto&gt;Esto es una<br />prueba.<br />Al igual que... \n esto...&lt;/texto&gt;<br />&lt;/datos&gt;</code></dd></dl><br /><br />Con eso tu programa regresaría una salida del tipo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;u'Esto es una', u'prueba.', u'Al igual que... \\n esto...'&#93;<br /></code></dd></dl><br /><br />Abría que investigar si hay una manera de que no lo haga <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Oct 21, 2011 4:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2011-10-21T06:38:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6131#p6131</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6131#p6131"/>
<title type="html"><![CDATA[Re: Splitlines con Unicode]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6131#p6131"><![CDATA[
Este sería el codigo.<br /><br /><span style="font-weight: bold">XML</span><br /><pre class="prettyprint">&lt;datos&gt;<br />    &lt;texto&gt;Esto es una \n prueba más.&lt;/texto&gt;<br />&lt;/datos&gt;</pre><br /><br /><br /><span style="font-weight: bold">PROGRAMA</span><br /><pre class="prettyprint">from xml.dom import minidom<br /><br /># Cargamos en objeto arbol_dom el documento xml<br />xml_documento = minidom.parse&#40;&#39;archivo.xml&#39;&#41;<br /><br />mensajes = []<br /><br />for node in xml_documento.getElementsByTagName&#40;&#39;datos&#39;&#41;:<br />    <br />    if &#40;node.hasChildNodes&#40;&#41;&#41;:<br />        for i in range&#40;len&#40;node.childNodes&#41;&#41;:<br />            if &#40;node.childNodes[i].nodeName == &quot;texto&quot;&#41;:<br />                mensajes.append&#40;node.childNodes[i].childNodes[0].data&#41;<br />    <br /><br />print mensajes[0].splitlines&#40;&#41;</pre><br /><br />Gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Vie Oct 21, 2011 6:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-10-21T04:06:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6129#p6129</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6129#p6129"/>
<title type="html"><![CDATA[Re: Splitlines con Unicode]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6129#p6129"><![CDATA[
En teoría, el método funciona de las dos formas  (escribiendo el símbolo (\n) o escribiéndolo ) en el interprete...<br />es decir:<br /><pre class="prettyprint">&gt;&gt;&gt; a = &quot;&quot;&quot;hola mundo<br />... como estas&quot;&quot;&quot;<br />&gt;&gt;&gt; a.splitlines&#40;&#41;<br />[&#39;hola mundo&#39;, &#39;como estas&#39;]<br />&gt;&gt;&gt; a = &quot;hola mundo \n como estas&quot;<br />&gt;&gt;&gt; a.splitlines&#40;&#41;<br />[&#39;hola mundo &#39;, &#39; como estas&#39;]<br />&gt;&gt;&gt;</pre><br /><br />Se que esto sera molesto, pero podrías mostrar el código, y así podríamos decir que falla exactamente... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Oct 21, 2011 4:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2011-10-20T10:56:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6128#p6128</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6128#p6128"/>
<title type="html"><![CDATA[Splitlines con Unicode]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1322&amp;p=6128#p6128"><![CDATA[
Tengo un problema con el metodo splitlines().<br />Resulta que tengo un programa que lle datos de un xml y los guarda en una lista.<br /><br />Utilizo el minidom para leer los datos del XML.<br /><br />Pro cuanto intento hacer un splitlines del elemento de la lista, los retornos de carro no los tiene en cuenta.<br />Me imprimir esto:<br /><br />[u'Esto es una <span style="font-weight: bold">\\n</span> prueba.']<br /><br />El XML es algo como esto:<br /><pre class="prettyprint">&lt;datos&gt;<br />    &lt;texto&gt;Esto es una \n prueba. &lt;/texto&gt;<br />&lt;/datos&gt;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Jue Oct 20, 2011 10:56 am</p><hr />
]]></content>
</entry>
</feed>