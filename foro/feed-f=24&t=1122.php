<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1122" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-05T17:48:00+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1122</id>
<entry>
<author><name><![CDATA[xheco]]></name></author>
<updated>2011-05-05T17:48:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1122&amp;p=5493#p5493</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1122&amp;p=5493#p5493"/>
<title type="html"><![CDATA[Re: error en pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1122&amp;p=5493#p5493"><![CDATA[
disculpa Alzacon por no haberte respondido pero yo soy nuevo en esto de python y del foro y no lo he comprendido bien todavia, por supuesto que tu ayuda es valiosa espero y sigas ayudando. gracias por tu comprension.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2397">xheco</a> — Jue May 05, 2011 5:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Alzacon]]></name></author>
<updated>2011-04-21T22:44:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1122&amp;p=5430#p5430</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1122&amp;p=5430#p5430"/>
<title type="html"><![CDATA[Re: error en pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1122&amp;p=5430#p5430"><![CDATA[
El error no está en pilas, está en cairo. Prueba a reinstalar cairo.<br />Con respecto al otro post, el de tu reinstalación de pilas, te encuentras el mismo error porque el problema es el mismo.<br /><br /><blockquote class="uncited"><div><br />...<br />File &quot;C:\Python26\<span style="font-weight: bold">cairo</span>.py&quot;, line 21, in &lt;module&gt;<br />surface = cairo.ImageSurface (cairo.FORMAT_ARGB32, WIDTH,HEIGHT)<br />AttributeError: 'module' object <span style="font-weight: bold">has no attribute 'ImageSurface'</span><br /></div></blockquote><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2379">Alzacon</a> — Jue Abr 21, 2011 10:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xheco]]></name></author>
<updated>2011-04-21T17:21:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1122&amp;p=5426#p5426</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1122&amp;p=5426#p5426"/>
<title type="html"><![CDATA[error en pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1122&amp;p=5426#p5426"><![CDATA[
hola a todos, quisiera que me ayudaran con lo siguiente.tenia instalado pilas correctamente, con todas la bibilotecas necesarias, funcionaba perfectamente, sin embargo hoy al teclear desde el shell o en un script  el comando import pilas me da el siguiente error:<br />&gt;&gt;&gt; import pilas<br /><br />Traceback (most recent call last):<br />  File &quot;&lt;pyshell#0&gt;&quot;, line 1, in &lt;module&gt;<br />    import pilas<br />  File &quot;C:\Python26\lib\site-packages\pilas\__init__.py&quot;, line 43, in &lt;module&gt;<br />    import motores<br />  File &quot;C:\Python26\lib\site-packages\pilas\motores\__init__.py&quot;, line 30, in &lt;module&gt;<br />    from motor_sfml import *<br />  File &quot;C:\Python26\lib\site-packages\pilas\motores\motor_sfml.py&quot;, line 11, in &lt;module&gt;<br />    import cairo<br />  File &quot;C:\Python26\cairo.py&quot;, line 21, in &lt;module&gt;<br />    surface = cairo.ImageSurface (cairo.FORMAT_ARGB32, WIDTH,HEIGHT)<br />AttributeError: 'module' object has no attribute 'ImageSurface'<br />&gt;&gt;&gt; <br />lo tengo instalado en xp, con python 2.6, lo intente tambien con el editor ninja y me da lo siguiente:<br />Running: C:/Python26/prueba.py<br />For the moment NINJA only show output when the Program ends.<br /><br />Traceback (most recent call last):<br />  File &quot;C:/Python26/prueba.py&quot;, line 1, in &lt;module&gt;<br />    import pilas<br />  File &quot;C:\Python26\lib\site-packages\pilas\__init__.py&quot;, line 43, in &lt;module&gt;<br />    import motores<br />  File &quot;C:\Python26\lib\site-packages\pilas\motores\__init__.py&quot;, line 30, in &lt;module&gt;<br />    from motor_sfml import *<br />  File &quot;C:\Python26\lib\site-packages\pilas\motores\motor_sfml.py&quot;, line 11, in &lt;module&gt;<br />    import cairo<br />  File &quot;C:\Python26\cairo.py&quot;, line 21, in &lt;module&gt;<br />    surface = cairo.ImageSurface (cairo.FORMAT_ARGB32, WIDTH,HEIGHT)<br />AttributeError: 'module' object has no attribute 'ImageSurface'<br /><br />tambien tengo pilas instalado en ubuntu 10, pero me da el mismo error, y hasta el dia de ayer me funcionaba correctamente en ambo sistemas operativos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2397">xheco</a> — Jue Abr 21, 2011 5:21 pm</p><hr />
]]></content>
</entry>
</feed>