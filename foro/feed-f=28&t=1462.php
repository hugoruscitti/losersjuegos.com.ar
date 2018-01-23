<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=28&amp;t=1462" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-05-08T15:30:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=28&amp;t=1462</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-05-08T15:30:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6737#p6737</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6737#p6737"/>
<title type="html"><![CDATA[Re: Revisar la documentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6737#p6737"><![CDATA[
hechelion muchisimas gracias!!!, recién subí a la documentación todos los cambios<br />que nos comentaste, son ciertos todos... de hecho, la sección de instalación la simplifiqué<br />muchisimo, es cierto lo que dices, para alguien que comienza era muy confuso...<br /><br />Mas tarde voy a modificar los tutoriales de instalación, hace falta instalar phonon como<br />dice kiketom, así que voy a modificar los tutoriales para mencionar eso.<br /><br />Saludos !<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar May 08, 2012 3:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-05-08T09:04:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6736#p6736</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6736#p6736"/>
<title type="html"><![CDATA[Re: Revisar la documentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6736#p6736"><![CDATA[
<blockquote><div><cite>hechelion escribió:</cite><br />El primer error siguiendo la documentación, lo reporto por acá en vez de buscar la solución ya que si falta agregar algo o modificar algo, esto debería estar disponible en la documentación también.<br /></div></blockquote><br /><br />Hola hechelion, gracias por darle un vistazo a la doc y documentar las cosas que falten o fallen.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> <br />En concreto, esto que comentas, es que falta instalar un paquete y faltaría añadirlo a la documentación <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />Este problema salió en el foro no hace mucho:<br /><a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=24&amp;t=1456&amp;p=6694&amp;hilit=phonon#p6694" class="postlink">Tema phonon</a><br /><br />Gracias por todo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Mar May 08, 2012 9:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-05-08T07:36:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6735#p6735</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6735#p6735"/>
<title type="html"><![CDATA[Re: Revisar la documentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6735#p6735"><![CDATA[
El primer error siguiendo la documentación, lo reporto por acá en vez de buscar la solución ya que si falta agregar algo o modificar algo, esto debería estar disponible en la documentación también.<br /><br />OS:GNU/Linux, Ubuntu 11.10 con KDE.<br />Python versión: 2.7.2+<br /><br />Seguí la instalación paso a paso de la documentación de Pilas.<br /><br />sudo apt-get install python-setuptools python-pygame python-box2d python-qt4 python-qt4-gl ipython<br />sudo easy_install -U pilas<br /><br />(no marcó ningún error durante la instalación aunque algunos paquetes como el setuptoold o pygames ya los tenía instalado de antemano.), al ejecutar python no tuve ningún problema al importar el modulo pero al iniciar me arrojó los siguientes problemas:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>nino@LiSmaug:~$ python<br />Python 2.7.2+ (default, Oct  4 2011, 20:06:09) <br />&#91;GCC 4.6.1&#93; on linux2<br />Type &quot;help&quot;, &quot;copyright&quot;, &quot;credits&quot; or &quot;license&quot; for more information.<br />&gt;&gt;&gt; import pilas<br />&gt;&gt;&gt; pilas.iniciar()<br />Traceback (most recent call last):<br />  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;<br />  File &quot;/usr/local/lib/python2.7/dist-packages/pilas-0.66-py2.7.egg/pilas/__init__.py&quot;, line 75, in iniciar<br />    motor = _crear_motor(usar_motor)<br />  File &quot;/usr/local/lib/python2.7/dist-packages/pilas-0.66-py2.7.egg/pilas/__init__.py&quot;, line 109, in _crear_motor<br />    from motores import motor_qt<br />  File &quot;/usr/local/lib/python2.7/dist-packages/pilas-0.66-py2.7.egg/pilas/motores/motor_qt.py&quot;, line 14, in &lt;module&gt;<br />    from PyQt4.phonon import Phonon<br />ImportError: No module named phonon<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Mar May 08, 2012 7:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-05-08T02:19:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6733#p6733</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6733#p6733"/>
<title type="html"><![CDATA[Re: Revisar la documentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6733#p6733"><![CDATA[
¿Cómo te aviso de los errores? ¿Por acá?<br /><br />Página:<br /><!-- m --><a class="postlink" href="http://readthedocs.org/docs/pilas/en/latest/presentacion.html">http://readthedocs.org/docs/pilas/en/la ... acion.html</a><!-- m --><br /><br />Titulo:<br />¿Por qué pilas?<br /><br />Error:<br /><blockquote class="uncited"><div><br />...Pilas está focalizado en ofrecer ayuda a los desarrolladores de juegos casuales y novatos <span style="font-weight: bold">QUE</span> quieran hacer sus primeros videojuegos..<br /></div></blockquote> (faltó un &quot;que&quot;)<br /><br /><blockquote class="uncited"><div><br />facilitar las tareas m<span style="font-weight: bold">Á</span>s comunes del desarrollo.<br /></div></blockquote> (ese más va con tilde)<br /><br />************************************************************************************************************************************<br />Problema con la documentación de instalación.<br />En la documentación de instalación dice lo siguiente:<br /><blockquote class="uncited"><div><br />Existen 3 formas de <span style="font-weight: bold">instalar</span> la biblioteca<br /></div></blockquote><br />La primera me ha quedado clara, aunque aún no la pruebo, ya haré mi comentario cuando pueda.<br /><br />El problema está en los conceptos de la segunda y tercera opción, estás hablan de una descarga, la cual luego de varios minutos de búsqueda, solo logré dar con un instalador para windows, si dentro de las opciones de instalación se habla de una descarga manual, creo que sería buena idea colocar el link donde se puede descargar la librería.<br />Lo otro, es que al leer esos modos de instalación, me parece más bien que hablan de una distribución con lo cual creo que quedaría más ordenado si se hace una separación entre lo que es instalación para desarrollar con la librería y lo que es una distribución para que terceros puedan correr el juego que yo desarrolle con la librería, tal cual está ahora induce a error, pues el titulo da a entender que yo debería tener 3 formas de instalar la librería para poder desarrollar con ella, cuando en la practica, solo pude dar con una (instalación desde repositorios o ejecución de un instalable para windows).<br /><br />Recuerden que hablo desde la perspectiva de alguien externo que está tratando de ejecutar su primer proyecto con pilas.<br />*************************************************************************************************************************************************<br />Link:<br /><!-- m --><a class="postlink" href="http://readthedocs.org/docs/pilas/en/latest/fisica.html">http://readthedocs.org/docs/pilas/en/latest/fisica.html</a><!-- m --><br /><br /><blockquote class="uncited"><div><br />Por defecto, la gravedad del escenario es de (0, -90), esto significa que los objetos “caen” hacia abajo, y lo hacen con una aceleración de 90 <span style="font-weight: bold">(mts por segundo)</span>.<br /></div></blockquote> ¿Como transformamos los metros a pixel? ¿Que la aceleración promedio de la tierra no es de 9 no 90, mts/<span style="font-weight: bold">s^2</span>?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Mar May 08, 2012 2:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-05-08T01:36:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6732#p6732</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6732#p6732"/>
<title type="html"><![CDATA[Re: Revisar la documentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6732#p6732"><![CDATA[
Buenisimo hechelion, la documentación está en:<br /><br /><!-- m --><a class="postlink" href="http://readthedocs.org/docs/pilas/en/latest/">http://readthedocs.org/docs/pilas/en/latest/</a><!-- m --><br /><br />No te hagas drama por el tiempo que le puedas dedicar, con que<br />puedas darle una revisada general sería genial.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar May 08, 2012 1:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-05-07T21:18:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6729#p6729</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6729#p6729"/>
<title type="html"><![CDATA[Re: Revisar la documentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6729#p6729"><![CDATA[
Voy a ser honesto, aún no me decido bien por que engine usar en linux, por lo cual creo que estaré probando de todo un poco durante un tiempo y puedo darte una mano con la revisión de documentación en el proceso, sin embargo no me comprometo a grandes cosas ya que durante el proceso puede que descarte definitivamente a pilas como candidato y en ese punto dejaría de ayudarte con la documentación.<br /><br />¿Más menos cual sería la idea de lo que hay que revisar y donde lo encuentro?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Lun May 07, 2012 9:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-05-06T14:21:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6719#p6719</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6719#p6719"/>
<title type="html"><![CDATA[Revisar la documentación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1462&amp;p=6719#p6719"><![CDATA[
Saludos a todos, con Enrique Porta estámos haciendo varias mejoras en pilas. Pero<br />necesitamos algo de ayuda para revisar la documentación e ir viendo si tiene cosas<br />para corregir: errores, ejemplos que no funcionen, cosas que no se explican bien etc...<br /><br />Estamos buscando colaboradores para esa tarea, ¿algún voluntario nos podría?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom May 06, 2012 2:21 pm</p><hr />
]]></content>
</entry>
</feed>