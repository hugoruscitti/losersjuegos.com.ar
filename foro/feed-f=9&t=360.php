<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=360" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-08-13T02:15:07+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=360</id>
<entry>
<author><name><![CDATA[betelu]]></name></author>
<updated>2009-08-13T02:15:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=2835#p2835</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=2835#p2835"/>
<title type="html"><![CDATA[no esta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=2835#p2835"><![CDATA[
gracias por responderme ...<br />lo q pasa por lo q estuve viendo la funcion scandir no esta en esa libreria <br />asi q por lo tanto cuando la ejecute en mi codigo no funciono...<br />por lo tanto la seguire buscando<br />gracias d todos modos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2133">betelu</a> — Jue Ago 13, 2009 2:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-08-12T20:43:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=2834#p2834</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=2834#p2834"/>
<title type="html"><![CDATA[¿Como saber que hay en una carpeta? (programando en C)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=2834#p2834"><![CDATA[
Si, aparentemente es solo para sistemas compatibles<br />con los estándares POSIX.<br /><br />Por lo que veo en wikipedia, hay una implementación de estas<br />mismas bibliotecas para windows:<br /><br /><!-- m --><a class="postlink" href="http://en.wikipedia.org/wiki/Dirent.h">http://en.wikipedia.org/wiki/Dirent.h</a><!-- m --><br /><br />(mira en la parte inferior de la página, donde dice &quot;References&quot;, <br />el primer vinculo te lleva a la descarga de la biblioteca para windows.)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Ago 12, 2009 8:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[betelu]]></name></author>
<updated>2009-08-12T20:27:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=2833#p2833</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=2833#p2833"/>
<title type="html"><![CDATA[pregunta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=2833#p2833"><![CDATA[
La funcion de la q hablan scandir()<br />Es para windows o para linux?<br />de ser para linux ...saben de alguna equivalente para windows?<br />muchas gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2133">betelu</a> — Mié Ago 12, 2009 8:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-09-06T22:39:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1637#p1637</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1637#p1637"/>
<title type="html"><![CDATA[¿Como saber que hay en una carpeta? (programando en C)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1637#p1637"><![CDATA[
<blockquote><div><cite>lacabra25 escribió:</cite><br />En la funcion scandir, ¿para que son los dos NULL del final?<br /></div></blockquote><br /><br />El último sirve para ordenar el resultado de archivos y el anterior<br />se utiliza como filtro, o criterio de selección. Recuerda leer la<br />página de manual si tienes problemas con ello:<br /><br />   <!-- m --><a class="postlink" href="http://manpages.courier-mta.org/htmlman3/scandir.3.html">http://manpages.courier-mta.org/htmlman3/scandir.3.html</a><!-- m --><br /><br />este mismo manual se puede leer directamente desde GNU-Linux<br />escribiendo &quot;man scandir&quot; en un terminal.<br /><br /><blockquote><div><cite>lacabra25 escribió:</cite><br />El problema ese de las estructuras que debo usar junto con la funcion scandir, solo lo da en windows, por lo que si el codigo despues lo quiero compilar en linux, ¿tal cual lo tengo en windows lo podria compilar en linux?, o deberia quitar el include de la libreria que me descargue del enlace que pusistes por como en linux no hace falta<br /></div></blockquote><br /><br />Claro, en GNU-Linux no hace falta usar ese módulo que tienes<br />que descargar por separado en windows... y si, tendrías que<br />cambiar esa linea para compilar sin problemas en ambos sistemas<br />el mismo código. O bien, usar una directiva del compilador<br />para distinguir qué parte de código se usa en cada sistema<br />operativo. Por ejemplo, el siguiente código compilaría en ambos<br />sistemas, pero en windows saluda de una forma y en GNU-Linux<br />de otra:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#ifdef WIN32<br />printf&#40;&quot;Hola usuarios de Windows \n&quot;&#41;;<br />#else<br />printf&#40;&quot;Hola usuarios de GNU/Linux y otros sistemas. \n&quot;&#41;;<br />#endif <br /></code></dd></dl><br /><br />Igualmente, no te compliques mucho con esto, ya tendrás tiempo<br />para ver estos detalles comparando como funciona en cada<br />sistema... hacer programas completamente multiplataforma en<br />C está lleno de detalles, y hacerlo ahora solo que quitará<br />tiempo valioso. Avanza con el juego y luego podrás ver estos<br />detalles con mas seguridad...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Sep 06, 2008 10:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-09-06T09:17:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1635#p1635</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1635#p1635"/>
<title type="html"><![CDATA[¿Como saber que hay en una carpeta? (programando en C)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1635#p1635"><![CDATA[
En la funcion scandir, ¿para que son los dos NULL del final?<br /><br />El problema ese de las estructuras que debo usar junto con la funcion scandir, solo lo da en windows, por lo que si el codigo despues lo quiero compilar en linux, ¿tal cual lo tengo en windows lo podria compilar en linux?, o deberia quitar el include de la libreria que me descargue del enlace que pusistes por como en linux no hace falta<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Sep 06, 2008 9:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-08-09T18:11:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1601#p1601</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1601#p1601"/>
<title type="html"><![CDATA[¿Como saber que hay en una carpeta? (programando en C)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1601#p1601"><![CDATA[
La mayor parte del código es portable, solo que las estructuras<br />para acceder al listado de archivo (dirent) son de la norma POSIX, y<br />aparentemente no está disponible en Windows. Tendrías que probar...<br /><br />igualemente en la siguiente página hay una descripción completa<br />del módulo &quot;direct&quot; e incluso una versión de esta biblioteca para<br />windows (ver pie de la página):<br /><br />    <!-- m --><a class="postlink" href="http://en.wikipedia.org/wiki/Dirent.h">http://en.wikipedia.org/wiki/Dirent.h</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ago 09, 2008 6:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-08-07T21:34:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1600#p1600</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1600#p1600"/>
<title type="html"><![CDATA[¿Como saber que hay en una carpeta? (programando en C)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1600#p1600"><![CDATA[
Gracias, pero antes de ponerme a intentarlo quisiera hacerte algunas preguntas mas sobre la portabilidad, siento no haberlo preguntado desde un principio pues se me paso, ¿las librerias necesarias para esto son estandar, de forma que pueda compilar el codigo en cualquier sistema sin modificarlo o con modificaciones muy minimas, o solo me funcionaria en windows o linux dependiendo del codigo?, ¿el codigo podra ser compilado con cualquier compilador de C en cualquier sistema o debera cumplir algun requerimiento previo como tener instalada alguna libreria o algo asi?, ¿tendria que hacer dos versiones con distinto codigo dependiendo del sistema operativo para poder compilarlo para distintos sistemas?<br /><br />Estas dudas sobre portabilidad es algo que quisiera solucionar antes de ponerme a escribir codigo pues intento que todo lo que programe sea portable, no me gusta diseñarlo en especial para un solo sistema, por ello solo programo con librerias estandar como stdio y SDL.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Ago 07, 2008 9:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-08-07T19:41:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1594#p1594</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1594#p1594"/>
<title type="html"><![CDATA[¿Como saber que hay en una carpeta? (programando en C)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1594#p1594"><![CDATA[
Saludos, para recorrer un directorio puedes usar la función &quot;scandir&quot;. Esto<br />devuelve una lista de todos los elementos de un directorios. Luego, para <br />saber que elementos son directorios puedes usar la función &quot;lstat&quot; en<br />conjunto con las macros S_ISDIR o S_ISREG... en el sistema GNU/Linux puedes<br />ejecutar &quot;man lstat&quot; o &quot;man scandir&quot; para conocer mas acerca de estas<br />funciones.<br /><br />Te dejo un programa de ejemplo que imprime todos los elementos de un<br />directorio y distingue entre directorios y archivos regulares (o enlaces):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;dirent.h&gt;<br />#include &lt;sys/types.h&gt;<br />#include &lt;sys/stat.h&gt;<br />#include &lt;unistd.h&gt;<br /><br /><br />int main&#40;void&#41;<br />&#123;<br />    char * nombre_de_archivo;<br />    struct dirent ** archivos;<br />    struct stat info_archivo;<br />    int cantidad_archivos;<br />    int i=0;<br /><br />    cantidad_archivos = scandir&#40;&quot;.&quot;, &amp;archivos, NULL, NULL&#41;;<br /><br />    for &#40;i=0; i&lt;cantidad_archivos; i++&#41;<br />    &#123;<br />        nombre_de_archivo = archivos&#91;i&#93;-&gt;d_name;<br /><br />        lstat&#40;nombre_de_archivo, &amp;info_archivo&#41;;<br /><br />        if &#40;S_ISDIR&#40;info_archivo.st_mode&#41;&#41;<br />            printf&#40;&quot;Directorio: %s\n&quot;, nombre_de_archivo&#41;;<br />        else<br />            printf&#40;&quot;Archivo o enlace: %s\n&quot;, nombre_de_archivo&#41;;<br />    &#125;<br /><br />    return 0;<br />&#125;<br /></code></dd></dl><br /><br />y un ejemplo de lo que muestra en pantalla:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>$ http://losersjuegos.com.ar/foro/test<br />Directorio: Imágenes<br />Archivo o enlace: run_bg.png<br />Archivo o enlace: run2.png<br />&#91;...&#93;<br /></code></dd></dl><br /><br />Saludos.<br /><br />PD: el juego pocket volleyball en la página tenía una rutina para cargar<br />    personajes similar a lo que quieres realizar, tal vez te sea útil<br />    ver como está hecho.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Ago 07, 2008 7:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-08-07T00:03:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1587#p1587</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1587#p1587"/>
<title type="html"><![CDATA[¿Como saber que hay en una carpeta? (programando en C)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=360&amp;p=1587#p1587"><![CDATA[
Hola, pues basicamente el titulo del tema lo dice todo, quisiera saber desde un programa que estoi haciendo en C que archivos, pero sobretodo que carpetas, hay dentro de una carpeta. Esto lo necesito para un videojuego que estoi haciendo en el que necesito saber los nombres de las carpetas que hay dentro de una carpeta, la carpeta en la que estaran las demas sera una carpeta especifica para los aspectos del juego (como los skin o mascaras de un reproductor de musica, diferentes aspectos que pueda tener el juego), y cada carpeta dentro de esta carpeta de aspectos seria un aspecto diferente que podria tener el juego, por lo que necesito saber las carpetas que hay (pues puede haber distintas carpetas que las que yo prepare al hacer el juego) para asi poder acceder a las imagenes dentro de dicha carpeta y a un archivo de texto con el nombre del aspecto para mostrarselo al jugador en las opciones del juego para que elija el que prefiera.<br /><br />Espero no haberme liado demasiado y haberme podido explicar bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Ago 07, 2008 12:03 am</p><hr />
]]></content>
</entry>
</feed>