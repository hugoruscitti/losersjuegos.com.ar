<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=352" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-07-21T14:00:35+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=352</id>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-07-21T14:00:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=352&amp;p=1578#p1578</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=352&amp;p=1578#p1578"/>
<title type="html"><![CDATA[problemas en modularidad de programa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=352&amp;p=1578#p1578"><![CDATA[
buenas hugo, en primer lugar gracias por responder, eres muy amable<br />en segundo, creo que lo tengo bien hecho en ese aspecto. en mi unico fichero de cabecera tengo escrito:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#ifndef FUNCIONES_H_<br />#define FUNCIONES_H_<br /><br />... //definicion de clases<br /><br />#endif</code></dd></dl><br /><br />que segun lo que he leido en el link que me comentabas, si lo interprete bien, es lo que debia poner.<br /><br />debo crear mas archivos de cabecera?. de momento tengo 1 que se llama funciones.h cuya implementacion esta en funciones.cpp. despues, tanto desde el main.cpp como desde el funciones.cpp, hago un #include &quot;funciones.h&quot;. si yo quiero hacer un archivo cargarGraficos.cpp, debo hacerle un cargarGraficos.h o no hace falta? puede que sea ese el problema?<br /><br />PD: siento la tardanza en responder, que esta es una epoca un poco mala de trabajo y muchos dias no se cuando me podre dedicar a mis cosas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" /><br /><br />muchas gracias por adelantado<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Lun Jul 21, 2008 2:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-07-16T16:27:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=352&amp;p=1558#p1558</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=352&amp;p=1558#p1558"/>
<title type="html"><![CDATA[Re: problemas en modularidad de programa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=352&amp;p=1558#p1558"><![CDATA[
<blockquote><div><cite>maije escribió:</cite><br />dice que hay multiples definiciones de mi variable frame y de mi variable sprite, pero no es asi. solo estan declaradas en el class.h para que sean globales a todos los archivos que use sin tener que andar pasandolas constantemente...<br /></div></blockquote><br /><br />Puede que el problema se deba a que el pre-compilador de <br />C++ esté incluyendo mas de una vez a tus archivos de cabecera <br />(.h).<br /><br />Para evitar este problema casi todos los proyectos usan directivas<br />como &quot;#ifdef&quot; en cada archivo .h, te recomiendo veas la siguiente<br />página (en particular el apartado 4):<br /><br />    <!-- m --><a class="postlink" href="http://www.zator.com/Cpp/E4_9_10e.htm">http://www.zator.com/Cpp/E4_9_10e.htm</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Jul 16, 2008 4:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-07-16T09:14:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=352&amp;p=1553#p1553</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=352&amp;p=1553#p1553"/>
<title type="html"><![CDATA[problemas en modularidad de programa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=352&amp;p=1553#p1553"><![CDATA[
hola a tod@s. tengo el siguiente problema:<br />he hecho un programa para hacer andar a 'n' personajes por un escenario. el caso es que empece con un archivo class.h donde definia las clases frame y sprite y las funciones que necesitaba; despues el archivo class.cpp, donde implementaba las funciones que no eran get-set para manejar los graficos. despues en mi main.cpp le meti el codigo para mover a un personaje por la pantalla cargando las animaciones correspondientes. el caso es que ahora que me funciona todo, lo que quiero es modularizarlo un poco y la parte de carga de imagenes, en la que asocio cada frame de un array de 50 su imagen correspondiente y luego añado al sprite cada uno de los frames, quiero ponerla en otro archivo para que me ahorre espacio en el main.cpp, porque para un solo personaje no es mucho problema, pero cuando quiera cargar objetos, mas personajes, escenario y tal, me puede quedar un programa gigante. tambien quiero hacer lo mismo con la parte de movimiento del personaje. el caso es que creo un archivo nuevo llamado cargarGraficos.cpp, con una funcion void cargarGraficos(int personaje) { ... }, las variables de sprite y frame las declaro en el class.h y añado a cargarGraficos.cpp el class.h. ahi deberia de funcionar segun creo yo, pero me da un error que no entiendo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>  multiple definition of `frame' <br />  first defined here <br />  multiple definition of `sprite' <br />  first defined here <br />  ld returned 1 exit status <br /> F:\PROGRAMACION\programacion C\proyectos cpp\moverCrupier\Makefile.win &#91;Build Error&#93;  &#91;moverCrupier.exe&#93; Error 1 </code></dd></dl><br /><br />dice que hay multiples definiciones de mi variable frame y de mi variable sprite, pero no es asi. solo estan declaradas en el class.h para que sean globales a todos los archivos que use sin tener que andar pasandolas constantemente...<br /><br />alguna idea? uso DEV-CPP 4.9.9.2<br />muchas gracias por adelantado<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Mié Jul 16, 2008 9:14 am</p><hr />
]]></content>
</entry>
</feed>