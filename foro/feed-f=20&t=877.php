<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=20&amp;t=877" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-13T05:04:43+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=20&amp;t=877</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-10-13T05:04:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=6096#p6096</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=6096#p6096"/>
<title type="html"><![CDATA[Re: Uso de python en Blender]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=6096#p6096"><![CDATA[
Bueno, sobre la importación de la textura, si aun te causa problemas, fíjate en el principio del archivo egg, hay una parte que dice &quot;Texture&quot;, ejemplo:<br /><br /><pre class="prettyprint">&lt;Texture&gt; Material_00_Tex {<br />  &quot;http://losersjuegos.com.ar/foro/Untitled.tga&quot;<br />  &lt;Scalar&gt; saved-result { 1 }<br />  &lt;Scalar&gt; envtype { MODULATE }<br />  &lt;Scalar&gt; minfilter { LINEAR_MIPMAP_LINEAR }<br />  &lt;Scalar&gt; magfilter { LINEAR_MIPMAP_LINEAR }<br />  &lt;Scalar&gt; wrap { REPEAT }<br />}</pre> <br /><br />Podrías ver si el nombre del archivo de la textura esta bien... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Jue Oct 13, 2011 5:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ookami]]></name></author>
<updated>2011-10-12T15:47:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=6092#p6092</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=6092#p6092"/>
<title type="html"><![CDATA[Re: Uso de python en Blender]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=6092#p6092"><![CDATA[
Que texturas estas usando, de procesos o de mapa de bits?... Si son de procesos dudo mucho que la pueda mapear algo que no sea BGE o YafArray, además los juegos con texturas de procesos no aplica aun, serian demasiado lentos. Por otro lado y mas probable es que estés usando texturas de imágenes, en cuyo caso el problema puede ser que no has empaquetado la imagen en el archivo .blend, eos se hace fácil en 2.5x dadle a File -&gt; External Data -&gt; Make All Paths Relative y luego File -&gt; External Data -&gt; Pack into .blend file luego de eso si puedes exportarlo.<br /><br />Paz y suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2521">ookami</a> — Mié Oct 12, 2011 3:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-11-09T19:34:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4407#p4407</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4407#p4407"/>
<title type="html"><![CDATA[Re: Uso de python en Blender]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4407#p4407"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />Buenas, en uno de los ejemplos de la web se muestra como<br />cargar un modelo de blender usando python y la biblioteca<br />Panda3D:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos">http://www.losersjuegos.com.ar/referencia/ejemplos</a><!-- m --><br /><br />para exportar el modelo desde blender he usado como formato<br />intermedio a &quot;.x&quot; (que viene de DirectX), dado que te conserva<br />las texturas y animaciones.<br /><br />Saludos.<br /></div></blockquote><br /><br />Pues verá sr. ruscitti. PAsa que exporté mi modelo a .x y lo convertí en .egg. Pero cuando lo cargo en el panda me lo carga sin textura. ¿Estoy haciendo algo mal? Siempre me pasa lo mismo cada vez que exporto a .x o .3ds y no sé cómo es eso de mapear texturas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mar Nov 09, 2010 7:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-10-04T15:05:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4227#p4227</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4227#p4227"/>
<title type="html"><![CDATA[Re: Uso de python en Blender]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4227#p4227"><![CDATA[
el gameengine del blender tiene muy buena pinta, ademas estuve leyendo de que es facil de usar. <br />Hay muchos ejemplos, tenes los regresion files para blender en la pagina oficial:<br /><!-- m --><a class="postlink" href="http://www.blender.org/download/get-blender/">http://www.blender.org/download/get-blender/</a><!-- m --><br />(fijate al costadito derecho)<br /><br />Tenes la guía de la api de blender tambien:<br /><!-- m --><a class="postlink" href="http://www.blender.org/development/">http://www.blender.org/development/</a><!-- m --><br /><br />y sino te bajas el libro del blender gamekit, que está muy bueno y viene con un toco de ejemplos bien copetes:<br /><!-- m --><a class="postlink" href="http://download.blender.org/documentation/gamekit1/">http://download.blender.org/documentation/gamekit1/</a><!-- m --><br /><br />Y sino podes ver el codigo fuente del yo frankie!, aunque debe ser medio enquilombado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Lun Oct 04, 2010 3:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-17T14:04:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4119#p4119</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4119#p4119"/>
<title type="html"><![CDATA[Re: Uso de python en Blender]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4119#p4119"><![CDATA[
Buenas, en uno de los ejemplos de la web se muestra como<br />cargar un modelo de blender usando python y la biblioteca<br />Panda3D:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos">http://www.losersjuegos.com.ar/referencia/ejemplos</a><!-- m --><br /><br />para exportar el modelo desde blender he usado como formato<br />intermedio a &quot;.x&quot; (que viene de DirectX), dado que te conserva<br />las texturas y animaciones.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Sep 17, 2010 2:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-09-17T13:21:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4117#p4117</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4117#p4117"/>
<title type="html"><![CDATA[Uso de python en Blender]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=877&amp;p=4117#p4117"><![CDATA[
Hola gente. <br /><br />Estoy tratando de aprender a crear juegos 3D (una vez en cuando ya que soy paladín del 2D) y me estoy decidiendo entre Blender o 3D Game Studio. Pasa que no sé cómo manipular un modelo importado en blender mediante el python. ¿Me ayudan con eso?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Vie Sep 17, 2010 1:21 pm</p><hr />
]]></content>
</entry>
</feed>