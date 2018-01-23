<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=872" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-11T20:42:18+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=872</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-11T20:42:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=872&amp;p=4093#p4093</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=872&amp;p=4093#p4093"/>
<title type="html"><![CDATA[Re: Error tras la última actualización]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=872&amp;p=4093#p4093"><![CDATA[
Cierto... recién lo terminé de corregir, hacé un pull y<br />el problema no te va a aparecer.<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Sep 11, 2010 8:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-09-11T10:14:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=872&amp;p=4092#p4092</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=872&amp;p=4092#p4092"/>
<title type="html"><![CDATA[Error tras la última actualización]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=872&amp;p=4092#p4092"><![CDATA[
Tras la última actualización de pilas al importar la biblioteca ya sea en modo interactivo o por script obtengo el siguiente error:<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Traceback (most recent call last):<br />  File &quot;main.py&quot;, line 5, in &lt;module&gt;<br />    pilas.iniciar()<br />  File &quot;/home/adrigm/Documentos/pilas/pilas/__init__.py&quot;, line 56, in iniciar<br />    utils.hacer_flotante_la_ventana()<br />  File &quot;/home/adrigm/Documentos/pilas/pilas/utils.py&quot;, line 18, in hacer_flotante_la_ventana<br />    subprocess.call(&#91;'i3-msg', 't'&#93;, stdout=subprocess.PIPE, stderr=subprocess.PIPE)<br />  File &quot;/usr/lib/python2.6/subprocess.py&quot;, line 480, in call<br />    return Popen(*popenargs, **kwargs).wait()<br />  File &quot;/usr/lib/python2.6/subprocess.py&quot;, line 633, in __init__<br />    errread, errwrite)<br />  File &quot;/usr/lib/python2.6/subprocess.py&quot;, line 1139, in _execute_child<br />    raise child_exception<br />OSError: &#91;Errno 2&#93; No such file or directory</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Sab Sep 11, 2010 10:14 am</p><hr />
]]></content>
</entry>
</feed>