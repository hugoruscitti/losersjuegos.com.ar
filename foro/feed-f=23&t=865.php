<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=865" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-06T02:47:52+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=865</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-06T02:47:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4059#p4059</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4059#p4059"/>
<title type="html"><![CDATA[Re: Ordenando objetos en pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4059#p4059"><![CDATA[
<blockquote><div><cite>estudiante escribió:</cite><br />Hola<br />Por lo que veo la cámara estaría en z=0?<br />¿Si  z &gt; 0, enfrente de la camara y si z &lt; 0 detrás de la cámara?<br /></div></blockquote><br /><br />m... no exactamente, bah, lo segundo si...<br /><br />Es asi, los objetos que tengan valores de z grandes apareceran<br />debajo de los otros. No hay mucha importancia en los valores<br />sino en cual es mas grande que el otro. Si quiero que un objeto sea<br />el fondo de la pantalla le asigno un valor de z grande (para que<br />se valla al fondo) y si quiero un texto que tape todo por ser<br />muy importante le doy una valor z muy chico (no se, -20, por ejemplo).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Sep 06, 2010 2:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[estudiante]]></name></author>
<updated>2010-09-06T01:23:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4058#p4058</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4058#p4058"/>
<title type="html"><![CDATA[Re: Ordenando objetos en pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4058#p4058"><![CDATA[
Hola<br />Por lo que veo la cámara estaría en z=0?<br />¿Si  z &gt; 0, enfrente de la camara y si z &lt; 0 detrás de la cámara?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2184">estudiante</a> — Lun Sep 06, 2010 1:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-05T20:12:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4057#p4057</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4057#p4057"/>
<title type="html"><![CDATA[Re: Ordenando objetos en pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4057#p4057"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />no cambia para nada el tamaño el hecho de que este más cerca verdad? simplemente es para hacer el z-sort (como en los juegos 3D) para dibujar en orden no?<br /></div></blockquote><br /><br />Exacto, es solamente para indicar el orden en que se imprimen en pantalla. No altera el tamaño de los actores.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Sep 05, 2010 8:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-05T20:07:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4056#p4056</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4056#p4056"/>
<title type="html"><![CDATA[Re: Ordenando objetos en pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4056#p4056"><![CDATA[
no cambia para nada el tamaño el hecho de que este más cerca verdad? simplemente es para hacer el z-sort (como en los juegos 3D) para dibujar en orden no?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Sep 05, 2010 8:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-05T20:05:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4055#p4055</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4055#p4055"/>
<title type="html"><![CDATA[Ordenando objetos en pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=865&amp;p=4055#p4055"><![CDATA[
Saludos, hoy implementé un cambio en pilas para que podamos<br />manipular el orden de impresión en pantalla. Lo he<br />llamado atributo &quot;z&quot;.<br /><br />La idea es que cada actor tenga un atributo &quot;z&quot;, para indicar<br />cuan lejos debe estar de la cámara:<br /><br /><img src="http://www.dev-losersjuegos.com.ar/projects/pilas/repository/revisions/114/entry/doc/source/images/atributo_z.png" alt="Imagen" /><br /><br /><br />Este el bug que dí de alta en redmite y tiene asociadas como<br />notas las revisiones en el código:<br /><br /><!-- m --><a class="postlink" href="http://www.dev-losersjuegos.com.ar/issues/42">http://www.dev-losersjuegos.com.ar/issues/42</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Sep 05, 2010 8:05 pm</p><hr />
]]></content>
</entry>
</feed>