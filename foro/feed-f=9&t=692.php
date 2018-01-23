<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=692" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-02-15T13:10:33+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=692</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2010-02-15T13:10:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=692&amp;p=3253#p3253</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=692&amp;p=3253#p3253"/>
<title type="html"><![CDATA[archivos configuracion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=692&amp;p=3253#p3253"><![CDATA[
Hola, estoy intentando guardar archivos de configuracion (que sean difirentes para cada usuario), el problema no es guardarlos, sino donde guardarlos. En GNU/Linux la respuesta es sencilla, en la carpeta personal en una carpeta que el nombre comience con un punto, pero, ¿en windows donde puedo guardarlos? Uso el siguiente codigo para obtener la ruta a una carpeta del usuario donde pueda guardarlo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>  #ifdef unix<br />  ruta_carpeta_personal = getenv &#40;&quot;HOME&quot;&#41;;<br />  #endif<br />  #ifdef WIN32<br />  ruta_carpeta_personal = getenv &#40;&quot;USERPROFILE&quot;&#41;;<br />  #endif</code></dd></dl><br /><br />La variable ruta_carpeta_personal es un puntero a una cadena de caracteres.<br /><br />En GNU/Linux no da problema, el problema es que en windows no me deja crear en la ruta devuelta por getenv (&quot;USERPROFILE&quot;) una carpeta donde guardar los archivos, ni me deja escribir archivos. ¿Hay alguna variable global de sistema que me pueda dar la ruta a alguna carpeta donde pueda guardar los archivos de configuracion, o que me de la ruta a la carpeta personal del usuario (donde esta la carpeta documentos, imagenes, musica, etc, etc; como hay deberia poder escribir archivos sin problemas)?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Lun Feb 15, 2010 1:10 pm</p><hr />
]]></content>
</entry>
</feed>