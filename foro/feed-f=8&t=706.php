<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=706" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-03-16T13:53:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=706</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-03-16T13:53:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=706&amp;p=3306#p3306</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=706&amp;p=3306#p3306"/>
<title type="html"><![CDATA[Pregunta boba sobre programas de línea de comandos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=706&amp;p=3306#p3306"><![CDATA[
Buenas, ¿como estas?. El programa que buscas<br />hacer generalmente se denomina &quot;frontend&quot;, y al<br />menos los que he visto se suelen hacer todos<br />de la misma manera:<br /><br />En python existe un módulo llamado &quot;subprocess&quot;, que<br />te permite iniciar un proceso y comunicarte con el<br />mediante 3 canales:<br /><br />   1. la entrada estandar, que es un archivo donde puedes<br />       escribir para reemplazar un teclado.<br />   2. la salida estandar, que si lees de ahi obtendrás lo<br />       que el subproceso imprimiría en pantalla.<br />   3. la salida de errores, que es similar a la salida<br />       estándar pero reservada a mensajes de error.<br /><br />entonces, para controlar un programa desde python<br />puedes utilizar subprocess, iniciar el proceso y escribir<br />en la entrada estandar para controlarlo o leer de la<br />salida estandar para ver su progreso.<br /><br />Aquí te dejo la documentación del módulo:<br /><br />   <!-- m --><a class="postlink" href="http://docs.python.org/library/subprocess.html">http://docs.python.org/library/subprocess.html</a><!-- m --><br /><br />éxitos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Mar 16, 2010 1:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2010-03-16T00:51:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=706&amp;p=3305#p3305</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=706&amp;p=3305#p3305"/>
<title type="html"><![CDATA[Pregunta boba sobre programas de línea de comandos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=706&amp;p=3305#p3305"><![CDATA[
Hola, hace tiempo que no escribo nada por acá: <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />,<br />pero esta pregunta nada tiene que ver los video juegos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br /><br />Últimamente he esta usando programas por línea de comandos<br />para todo lo que normalmente hacia con GUI, y también he<br />estado tratando de hacer unas interfaces sencillas con python.<br /><br />La duda es ¿existe alguna manera de obtener la información de<br />&quot;status&quot; de estas herrameintas? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> (ejem, para que quede más claro):<br /><br />Al ejecutar un programa como x264 (para codificar videos)<br />directamente desde python, ¿como obtener los datos que arroja<br />como el frame actual de procesado, el bitrate y demás? La misma<br />duda tengo con otros programas como lame, oggenc2, etc, ya que<br />me gustaria mostrar esa info en mis interfaces...<br /><br />¿alguna idea?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Mar Mar 16, 2010 12:51 am</p><hr />
]]></content>
</entry>
</feed>