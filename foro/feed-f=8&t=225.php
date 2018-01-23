<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=225" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-01-19T00:47:30+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=225</id>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2008-01-19T00:47:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=855#p855</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=855#p855"/>
<title type="html"><![CDATA[Como usar varios archivos en C?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=855#p855"><![CDATA[
Hola, la compilacion en modo texto es como dice  Geo   . Pero al usar Dev basta con guardar los archivos y compilar solo el principal. Automaticamente el compilador deberia compilar y enlazar todos los archivos formando el ejecutable.<br /><br />Por ahora no tengo un compilador (ni el IDE Dev) como para probarlo y asegurarte. Si no funciona postealo.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Sab Ene 19, 2008 12:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ZequeZ]]></name></author>
<updated>2008-01-18T23:57:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=854#p854</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=854#p854"/>
<title type="html"><![CDATA[Como usar varios archivos en C?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=854#p854"><![CDATA[
No me queda lo de la compilacion... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> Yo uso el Dev-C++... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /><br /><br />Recien empiezo a hacer programas compilables perdon ^^<br /><br />Lo unico que habia programado hasta el momento era Actionscript, PHP, y un poco de VisualBasic(Basura)...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1870">ZequeZ</a> — Vie Ene 18, 2008 11:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-01-14T00:42:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=827#p827</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=827#p827"/>
<title type="html"><![CDATA[Como usar varios archivos en C?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=827#p827"><![CDATA[
Bien, un ejemplo simple.<br /><br />Tenemos el siguiente programa:<br /><br />main.cpp:<br /><dl class="codebox"><dt>Code: </dt><dd><code>// Incluye el prototipo de la función imprimeMensaje<br />#include &quot;util.h&quot;<br />#include &lt;cstdio&gt;<br /><br />int main&#40;&#41; &#123;<br />   imprimeMensaje&#40;&#41;;<br /><br />   return 0;<br />&#125;<br /></code></dd></dl><br />A primera vista no vemos el código de la función <span style="font-style: italic">imprimeMensaje</span>, la cual está implementada en otro archivo: <span style="font-style: italic">util.cpp</span>. ¿Por qué es posible llamarla en <span style="font-style: italic">main.cpp</span>? Porque ya contamos con su prototipo declarado en <span style="font-style: italic">util.h</span>:<br /><br />util.h:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#ifndef UTIL_H<br /><br />#include &lt;cstdio&gt;<br /><br />void imprimeMensaje&#40; void &#41;;<br /><br />#endif // UTIL_H<br /></code></dd></dl><br />En <span style="font-style: italic">util.h</span> sólo se tiene la declaración de la función <span style="font-style: italic">imprimeMensaje</span>, al incluir este archivo en <span style="font-style: italic">main.cpp</span> es posible utilizar dicha función y compilar.<br /><br />Sin embargo, aún necesitamos la implementación de la función:<br /><br />util.cpp:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;util.h&quot;<br /><br />// Implementación de imprimeMensaje<br />void imprimeMensaje&#40; void &#41; &#123;<br />   printf&#40; &quot;Hola :&#41;\n&quot; &#41;;<br />&#125;<br /></code></dd></dl><br /><br /><span style="font-size: 150%; line-height: 116%;"><span style="font-weight: bold">Pasos para compilación:</span></span><br /><br />$ g++ -c util.cpp<br />$ g++ -c main.cpp<br /><br /><span style="font-size: 150%; line-height: 116%;"><span style="font-weight: bold">Para crear el ejecutable (enlazar):</span></span><br />$ g++ -o nombre-ejecutable main.o util.o<br /><br />La opción <span style="font-style: italic">-c</span> indica que no enlazaremos, sólo compilaremos. Una vez compilados util.cpp y main.cpp tendremos los archivos de código objeto util.o y main.o, los cuales utilizamos para construir finalmente el ejecutable, pasamos la opción -o para indicar el nombre del archivo de salida, seguido de los archivos de código objeto necesarios para construirlo.<br /><br />Finalmente ejecutamos:<br />$ http://losersjuegos.com.ar/foro/nombre-ejecutable<br /><br />Suerte <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Lun Ene 14, 2008 12:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kittie4man]]></name></author>
<updated>2008-01-13T23:59:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=826#p826</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=826#p826"/>
<title type="html"><![CDATA[Re: Como usar varios archivos en C?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=826#p826"><![CDATA[
<blockquote><div><cite>ZequeZ escribió:</cite><br />Es que no se como incluirlos, osea, por ejemplo, tengo esto:<br /><br />---Archivo 1---<br />#include &lt;stdio.h&gt;<br />int main(int argc, char *argv[]){<br />if(hola==true){<br />llamar archivo 2;<br />} else {<br />llamar archivo 3;<br />};<br />};<br />---Fin Archivo 1---<br /><br />---Archivo 2---<br />bucleparanohacernada();<br />haceralgo();<br />---Fin Archivo 2---<br /><br />---Archivo 3---<br />autodestruccion();<br />---Fin Archivo 3---<br /><br /><br />Se entiende?<br /><br />Perdon por la ignoracia, es que recien empiezo en C...<br /></div></blockquote><br /><br />Es el mismo problema que tengo yo, y tiene 66 lecturas mi thread y ninguna respuesta. (<a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=223" class="postlink">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=223</a>)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1866">kittie4man</a> — Dom Ene 13, 2008 11:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ZequeZ]]></name></author>
<updated>2008-01-13T22:49:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=825#p825</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=825#p825"/>
<title type="html"><![CDATA[Como usar varios archivos en C?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=225&amp;p=825#p825"><![CDATA[
Es que no se como incluirlos, osea, por ejemplo, tengo esto:<br /><br />---Archivo 1---<br />#include &lt;stdio.h&gt;<br />int main(int argc, char *argv[]){<br />if(hola==true){<br />llamar archivo 2;<br />} else {<br />llamar archivo 3;<br />};<br />};<br />---Fin Archivo 1---<br /><br />---Archivo 2---<br />bucleparanohacernada();<br />haceralgo();<br />---Fin Archivo 2---<br /><br />---Archivo 3---<br />autodestruccion();<br />---Fin Archivo 3---<br /><br /><br />Se entiende?<br /><br />Perdon por la ignoracia, es que recien empiezo en C...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1870">ZequeZ</a> — Dom Ene 13, 2008 10:49 pm</p><hr />
]]></content>
</entry>
</feed>