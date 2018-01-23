<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=473" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-07T13:00:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=473</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-07T13:00:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=473&amp;p=2036#p2036</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=473&amp;p=2036#p2036"/>
<title type="html"><![CDATA[Programa en varios archivos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=473&amp;p=2036#p2036"><![CDATA[
y se podria acceder a una variable de otro archivo para cambarla??(esque estoy probando en tu tres en raya <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> a ver si puedo acer que sea 1p vs 2p o 1p vs com.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Feb 07, 2009 1:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-02-07T12:37:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=473&amp;p=2035#p2035</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=473&amp;p=2035#p2035"/>
<title type="html"><![CDATA[No conozco ninguno pero...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=473&amp;p=2035#p2035"><![CDATA[
Yo no conozco ninguno, pero te puedo explicar lo siguiente (en Python):<br />Para ejecutar otro archivo, (tienen que estar los dos en el mismo directorio):<br /><dl class="codebox"><dt>Code: </dt><dd><code>import nombre_de_archivo_sin_extension</code></dd></dl><br />Para importar una función de un archivo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>from nombre_de_archivo_sin_extension import una_funcion, otra_funcion</code></dd></dl><br />Y para importar todas las funciones de un archivo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>from nombre_de_archivo_sin_extension import *</code></dd></dl><br />Notaras que al hacer cualquier acción de estas se te crea en el directorio en el que estan los archivos un archivo con el nombre del importado pero en vez de .py .pyc, que es un binario para la máquina de Python. Esto lo hace Python automaticamente para que la próxima vez que ejecutes el programa sea más rápida la ejecución. Si mo dificaras el archivo.py, el archivo.pyc se modificaría automaticamente en función del otro.<br />¡Espero haber ayudado en algo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Sab Feb 07, 2009 12:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-07T12:27:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=473&amp;p=2034#p2034</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=473&amp;p=2034#p2034"/>
<title type="html"><![CDATA[Programa en varios archivos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=473&amp;p=2034#p2034"><![CDATA[
Alguien sabe de algún tutorial donde expliquen bien como importar otros archivos, llamar a sus funciones, variables, etc??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Feb 07, 2009 12:27 pm</p><hr />
]]></content>
</entry>
</feed>