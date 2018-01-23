<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=439" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-12T20:30:42+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=439</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-12T20:30:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1888#p1888</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1888#p1888"/>
<title type="html"><![CDATA[Compartir variables entre módulos de un programa...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1888#p1888"><![CDATA[
<blockquote><div><cite>Metator de Arkalot escribió:</cite><br />Entonces, si tengo un programa Python y al principio importo pygame<br />&gt;&gt;&gt; import pygame<br />&gt;&gt;&gt; from algo import *<br /><br />Y tengo un archivo con la clase de un personaje, el cual también usa<br />las funciones de pygame, entonces vuelvo a importar todo en ese fichero,<br />tengo un resultado como este:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># programa principal<br />&gt;&gt;&gt; import pygame<br />&gt;&gt;&gt; from clases.soldado import soldado<br /></code></dd></dl><br /><br />¿que es lo que hizo la última sentencia?, ¿ejecutó el código aparte,<br />cargando pygame de nuevo?, ¿incluyó su contenido en el programa<br />actual, como #include?<br /></div></blockquote><br /><br />Según veo en el siguiente documento:<br /><br />    <!-- m --><a class="postlink" href="http://effbot.org/zone/import-confusion.htm">http://effbot.org/zone/import-confusion.htm</a><!-- m --><br /><br />python sigue un algoritmo para evitar trabajo innecesario, cuando<br />el interprete encuentra una sentencia como import, busca en el<br />diccionario &quot;sys.modules&quot; si tiene una referencia a él. Si no<br />tiene la referencia, significa que tiene que cargar el módulo y<br />colocar una referencia en el diccionario &quot;sys.modules&quot;. La siguiente<br />vez que se quiera incluir el mismo módulo con import, python sabrá<br />que ya se ha cargado y solamente buscará su referencia en el<br />diccionario.<br /><br /><br />Este es un ejemplo de la linea de comandos de python, muestra como<br />se llena el diccionario de referencias 'sys.modules':<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&gt;&gt;&gt; import sys<br />&gt;&gt;&gt; sys.modules&#91;'pygame'&#93;<br />Traceback &#40;most recent call last&#41;:<br />  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;<br />KeyError: 'pygame'<br />&gt;&gt;&gt; import pygame<br />&gt;&gt;&gt; sys.modules&#91;'pygame'&#93;<br />&lt;module 'pygame' from '/usr/lib/python2.5/site-packages/pygame/__init__.pyc'&gt;<br /></code></dd></dl><br /><br />Aparentemente, la respuesta a tu pregunta está en el documento<br />web que cité mas arriba, hay una deferencia entre la ejecución<br />inicial que python hace al módulo cuando lo importa, que la ejecución<br />de las partes de ese módulo.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ene 12, 2009 8:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-01-12T19:28:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1887#p1887</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1887#p1887"/>
<title type="html"><![CDATA[Compartir variables entre módulos de un programa...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1887#p1887"><![CDATA[
Ok, no supe explicarme nada bien...<br /><br />Me gustaria que alguien me explicara que es lo que hace Python<br />cuando encuentra una sentencia import o from-import, ya que no<br />se que es exactamente lo que hace. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /> Estudiando un poco de C,<br />lei que cuando el compilador encuentra una sentencia #incluce &lt;algo.h&gt;<br />primero sustituye esas sentencias por el contenido de &quot;algo.h&quot;<br />con lo cual seria como si escribieramos el contenido de &quot;algo.h&quot;<br />al principio de nuestro programa, ¿cierto?. Y ya después compila todo...<br /><br />Entonces, si tengo un programa Python y al principio importo pygame<br />&gt;&gt;&gt; import pygame<br />&gt;&gt;&gt; from algo import *<br /><br />Y tengo un archivo con la clase de un personaje, el cual también usa<br />las funciones de pygame, entonces vuelvo a importar todo en ese fichero,<br />tengo un resultado como este:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># programa principal<br />&gt;&gt;&gt; import pygame<br />&gt;&gt;&gt; from clases.soldado import soldado<br /></code></dd></dl><br /><br />¿que es lo que hizo la última sentencia?, ¿ejecutó el código aparte,<br />cargando pygame de nuevo?, ¿incluyó su contenido en el programa<br />actual, como #include?<br />Si lo ejecutó, que pasa si importo pygame en el programa principal<br />y después lo importo de nuevo en el módulo recien importado,<br />¿simplemente machaco las importaciones anteriores?<br /><br />Estas dudas me surgieron cuando trabajaba con un programa aparte,<br />el cual usaba funciones de pygame pero no lo habia importado ahi, sino<br />en el programa principal, el cual importaba ese módulo:<br />&gt;&gt;&gt; import pygame<br />&gt;&gt;&gt; import clases.soldado # este módulo no importa pygame auque utiliza sus funciones<br /><br />La primera vez que ejecute el fichero todo salio bien, pero la segunda,<br />sin haber cambiado nada, me dio el error de &lt;global name pygame no especificado&gt;<br /><br />O_o<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Lun Ene 12, 2009 7:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-11T21:12:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1880#p1880</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1880#p1880"/>
<title type="html"><![CDATA[Compartir variables entre módulos de un programa...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1880#p1880"><![CDATA[
m... tal vez estes buscando usar una sentencia<br />como &quot;from modulo import screen&quot; o algo así.<br /><br />Si solo se trata de la referencia a screen ten en<br />cuenta que hay un método del módulo &quot;pygame.display&quot;<br />que te retorna la referencia a la pantalla principal.<br /><br />o tal vez no entendí tu consulta... en general si necesitas<br />compartir referencias, usas parámetros en las funciones y<br />si tienes que definir relaciones mas complejas defines<br />objetos con referencias dentro de ellos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ene 11, 2009 9:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-01-11T00:35:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1864#p1864</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1864#p1864"/>
<title type="html"><![CDATA[Compartir variables entre módulos de un programa...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=439&amp;p=1864#p1864"><![CDATA[
Quisiera saber si se puede compartir una variable entre<br />módulos de pygame sin tener que importarla en todos...<br /><br />Me explico:<br />Estoy desarmando unos ejemplos en pygame en partes<br />(módulos: clases, funciones, run, etc) y al parecer, ahora<br />necesito importar todos en cada uno de los paquetes que hice...<br /><br />Estaba pensando en hacer un archivo que importara todo<br />lo que los módulos necesitan (import pygame, os, random, etc)<br />y que cada módulo unicamente importe ese archivo, pero no se<br />si Python cargará pygame cada vez que un módulo lo importe <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /><br />temo que cada modulo tenga su propio pygame O_o. Además,<br />hasta ahora, cuando tengo una función en un módulo que hace blit<br />sobre el display, necesito enviarle la superficie de esta forma:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&gt;&gt;&gt; screen = pygame.display.set_mode&#40;&#41;<br /># En el programa principal, llamo a una funcion incluida en un paquete:<br />&gt;&gt;&gt; funciones.pintar_mapa&#40;screen, mapa&#41;<br /># El módulo funciones.py necesita que se le envie una referencia al screen.</code></dd></dl><br /><br />Quiza algo tenga que ver con variables locales y globales, pero<br />no tengo ni idea <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Dom Ene 11, 2009 12:35 am</p><hr />
]]></content>
</entry>
</feed>