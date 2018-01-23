<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=316" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-05-14T16:53:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=316</id>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-05-14T16:53:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1391#p1391</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1391#p1391"/>
<title type="html"><![CDATA[Necesito especificar ruta completa de archivo (Python)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1391#p1391"><![CDATA[
No hace falta que te disculpes Dokan, fallo mio, voy a hacer lo que me dice Hugo, como yo lo hacia solo funcionaria en mi PC, no conozco aun muy bien los comandos, tampoco es que me haya puesto a documentarme la verdad, pero bueno, ya está solucionado, la próxima vez intentare buscar en las referencias de los comandos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Mié May 14, 2008 4:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2008-05-14T15:06:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1388#p1388</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1388#p1388"/>
<title type="html"><![CDATA[Necesito especificar ruta completa de archivo (Python)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1388#p1388"><![CDATA[
Perdona por haber sido poco claro en mi respuesta, pero tampoco sabía muy bien cual era tu duda.<br />Lo que intentaba explicar era que debías especificar donde se encontraban esos &quot;elementos externos&quot; a los que llamaba tu código. Supuse que intentabas importar algo mediante el comando «import» y no te lo reconocía. Por eso te comenté que echaras un vistazo a «Dive into python» (Inmersión en python) puesto que explica mejor que yo <a href="http://almacen.gulic.org/diveintopython-5.4-es/getting_to_know_python/everything_is_an_object.html#d0e2051" class="postlink">«la ruta de búsqueda de import»</a>.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mié May 14, 2008 3:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-05-13T22:07:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1386#p1386</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1386#p1386"/>
<title type="html"><![CDATA[Necesito especificar ruta completa de archivo (Python)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1386#p1386"><![CDATA[
Bueno, ocurre que al parecer estás ejecutando el script desde<br />tu directorio de usuario.<br /><br />Por eso, cuando ejecutas el script con rutas relativas, por ejemplo<br />&quot;imagenes/algo.png&quot;, python buscará encontrar el archivo en<br />&quot;/home/miguel/imagenes/algo.png&quot; en lugar de<br />&quot;/home/miguel/Proyectos/imagenes/algo.png&quot; donde seguramente<br />están las imágenes.<br /><br />Una solución es correr el programa en el mismo directorio en<br />donde se encuentra, pero desde una consola y no desde el<br />administrador de archivos.<br /><br />Otra solución es hacer que el programa calcule las rutas a los<br />archivos a partir de la posición del script ejecutado. Por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import os<br /><br />this_dir = os.path.abspath&#40;os.path.dirname&#40;__file__&#41;&#41;<br />image_path = os.path.join&#40;this_dir, 'imagenes/algo.png'&#41;<br /></code></dd></dl><br /><br />Este código obtiene la ruta absoluta del archivo <br />&quot;imagenes/algo.png&quot;, por lo tanto la variable tendrá el<br />mismo valor independientemente de donde te encuentres<br />al momento de ejecutar el script.<br /><br />Muchos juegos en python usan algo similar para cargar<br />recursos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar May 13, 2008 10:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-05-13T19:02:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1383#p1383</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1383#p1383"/>
<title type="html"><![CDATA[Necesito especificar ruta completa de archivo (Python)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1383#p1383"><![CDATA[
Bueno al ejecutar el código que me pasaste sale esto<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>El directorio actual es: .<br /> &#40;y su ruta absoluta es&#41;: /home/miguel<br /><br />El script actual es: /home/miguel/Proyectos/codigo.py<br /> &#40;y su ruta es&#41;: /home/miguel/Proyectos/codigo.py </code></dd></dl><br /><br />estoy en ubuntu 8.04, cuando estaba en windows no me pasaba esto y nunca he usado lo que mencionas Dokan, es más, jamás había visto algo parecido a eso.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Mar May 13, 2008 7:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2008-05-06T09:59:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1341#p1341</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1341#p1341"/>
<title type="html"><![CDATA[Necesito especificar ruta completa de archivo (Python)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1341#p1341"><![CDATA[
Tienes que añadir la carpeta donde Python tiene que buscar recursos a una lista que se guarda no recuerdo donde.<br />Para que te hagas una idea yo lo utilizaba así:<br /><dl class="codebox"><dt>Code: </dt><dd><code>import sys<br />sys.path.append&#40;&quot;/home/kike/python/quiniela&quot;&#41;<br />from quinielav004 import *<br />from reduccion3 import *<br />pre=premios&#40;7,0&#41;<br />ap= apMetDirecto&#40;7,0&#41;<br />lim=limite&#40;len&#40;ap&#41;,pre&#41;<br />reduccion&#40;pre,lim,ap&#41;<br /></code></dd></dl><br />Donde quinielav004 y reduccion3 estan en la carpeta mencionada.<br />Espero haberte ayudado, y te recomiendo que leas Dive into Python, aunque es un poco avanzado se pueden extraer cosas muy valiosas para empezar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mar May 06, 2008 9:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-05-05T20:51:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1339#p1339</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1339#p1339"/>
<title type="html"><![CDATA[Necesito especificar ruta completa de archivo (Python)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1339#p1339"><![CDATA[
El siguiente código tal vez te ayude a ver donde puede estar<br />el problema:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import os<br /><br />print &quot;El directorio actual es:&quot;, os.path.curdir<br />print &quot; &#40;y su ruta absoluta es&#41;:&quot;, os.path.abspath&#40;os.path.curdir&#41;<br />print &quot;&quot;<br />print &quot;El script actual es:&quot;, __file__<br />print &quot; &#40;y su ruta es&#41;:&quot;, os.path.abspath&#40;__file__&#41;</code></dd></dl><br /><br />¿estás ejecutando el script desde el mismo directorio en donde<br />se encuentra?. Intenta publicar un ejemplo que falle junto con la salida en pantalla, así puedo ver donde falla exactamente.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun May 05, 2008 8:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-05-05T19:37:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1336#p1336</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1336#p1336"/>
<title type="html"><![CDATA[Necesito especificar ruta completa de archivo (Python)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=316&amp;p=1336#p1336"><![CDATA[
Estoy trabajando con Python, ultima versión estable, en Ubuntu, también ultima versión estable.<br /><br />Al intentar correr CUALQUIER código que llame a un elemento externo me canta un error por no encontrarlo y debo especificar exactamente la carpeta en la que se encuentra el archivo, sea lo que sea.<br /><br />Alguien sabe que puede estar pasando?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Lun May 05, 2008 7:37 pm</p><hr />
]]></content>
</entry>
</feed>