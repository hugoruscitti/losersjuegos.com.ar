<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1554" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-09-20T18:41:44+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1554</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-09-20T18:41:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7107#p7107</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7107#p7107"/>
<title type="html"><![CDATA[Re: Instalacion de Box2D (2.2.1)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7107#p7107"><![CDATA[
La &quot;url&quot; para subir bugs es:<br /><br /><!-- m --><a class="postlink" href="https://github.com/hugoruscitti/pilas/issues">https://github.com/hugoruscitti/pilas/issues</a><!-- m --><br /><br />No estoy seguro si tendrías que sacar una cuenta en github antes de poder<br />reportar el bug, creo que sí. Sino avisame por el foro y te doy una mano.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Sep 20, 2012 6:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Hessed Elohim]]></name></author>
<updated>2012-09-20T18:16:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7106#p7106</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7106#p7106"/>
<title type="html"><![CDATA[Re: Instalacion de Box2D (2.2.1)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7106#p7106"><![CDATA[
Gracias por aclararme lo de las distintas instalaciones.. igual ya me había dado cuenta  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> ..<br /><br /><blockquote class="uncited"><div><br />Si, estoy viendo con Facundo Batista que en linux hay un problema con el sistema de sonido, en mi equipo<br />lo solucioné con estos dos comandos:<br /><br />Código: Seleccionar todo<br />    sudo apt-get remove phonon-backend-gstreamer<br />    sudo apt-get install phonon-backend-vlc<br /></div></blockquote><br />Justamente hoy estuve con esto, porque mi reproductor no lee listas de reproducción, y es porque los motores Xine y MPlayer ya no se desarrollan mas.. encima hay problemas para instalar el vlc (yo no pude).. lo saque de acá:<br /><!-- m --><a class="postlink" href="https://ecoslackware.wordpress.com/2012/04/30/reproduccion-en-amarok-se-detiene-despues-de-cada-cancion/">https://ecoslackware.wordpress.com/2012 ... a-cancion/</a><!-- m --><br /><br />[Edito]: Me podes explicar como te agrego el bug  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />  .. porque me pierdo un poco todavía con el github.. gracias..<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2656">Hessed Elohim</a> — Jue Sep 20, 2012 6:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-09-20T17:08:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7104#p7104</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7104#p7104"/>
<title type="html"><![CDATA[Re: Instalacion de Box2D (2.2.1)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7104#p7104"><![CDATA[
<blockquote><div><cite>Hessed Elohim escribió:</cite><br />... lo instale con el comando:<br /><blockquote class="uncited"><div>sudo python setup.py develop<br /></div></blockquote><br />No se bien cual seria la diferencia..</div></blockquote><br /><br />El comando develop instala la biblioteca haciendo links simbólicos, es decir, si haces &quot;git pull&quot; del respositorio<br />eso automáticamente actualiza tu versión instalada. El comando install, en cambio, copia todos los archivos<br />de manera fija, así que el directorio que tiene todo el repositorio se puede borrar o mover de lugar.<br /><br />El comando &quot;develop&quot; se suele usar cuando estás desarrollando la biblioteca, mientras que &quot;install&quot; es mas útil<br />cuando solo usas las biblioteca.<br /><br /><blockquote><div><cite>Hessed Elohim escribió:</cite><br />... ahora (si uso el DreamPie) me tira el siguiente error:<br /><blockquote class="uncited"><div>[0x94808b8] main services discovery error: no suitable services discovery module<br /></div></blockquote><br />Nota: Si uso el lanas no me lo tira  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> .</div></blockquote><br /><br />Si, estoy viendo con Facundo Batista que en linux hay un problema con el sistema de sonido, en mi equipo<br />lo solucioné con estos dos comandos:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo apt-get remove phonon-backend-gstreamer<br />sudo apt-get install phonon-backend-vlc<br /></code></dd></dl><br /><br />Pero en el equipo de él no funcionó, aparentemente depende de la placa de sonido. Lo voy a cargar como<br />un bug.<br /><br /><blockquote><div><cite>Hessed Elohim escribió:</cite><br />.. el lanas no lo ocupo, porque si me voy a otra ventana y vuelvo, ya no me deja escribí.. pero creo que esto es para otro hilo..<br /></div></blockquote><br /><br />uh, ¿como que no te deja escribir?, ¿me lo podrías cargar como un bug?:<br /><br /><!-- m --><a class="postlink" href="https://github.com/hugoruscitti/lanas">https://github.com/hugoruscitti/lanas</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Sep 20, 2012 5:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Hessed Elohim]]></name></author>
<updated>2012-09-20T15:58:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7103#p7103</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7103#p7103"/>
<title type="html"><![CDATA[Re: Instalacion de Box2D (2.2.1)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7103#p7103"><![CDATA[
Si, yo uso LM 13 maya.. el tema de ese ejecutable (barajas) es que no es la versión mas nueva.. Lei el tuto, y es algo como lo que yo hice, solo que yo lo baje de github y lo instale con el comando:<br /><blockquote class="uncited"><div><br />sudo python setup.py develop<br /></div></blockquote><br />No se bien cual seria la diferencia..<br /><br />[Edito]: Logre instalar Box2d 2.2.1 (con el link que me habías pasado) el problema era que ejecutaba el checkout SVN en una terminal distinta de la que quería instalar y, obviamente no encontraba la carpeta, porque yo no le indicaba donde estaba  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cool.gif" alt="8)" title="Cool" /> .. ahora ya no me da mas el error.. pero.. ahora (si uso el DreamPie) me tira el siguiente error:<br /><blockquote class="uncited"><div><br />[0x94808b8] main services discovery error: no suitable services discovery module<br /></div></blockquote><br />Nota: Si uso el lanas no me lo tira  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> .. el lanas no lo ocupo, porque si me voy a otra ventana y vuelvo, ya no me deja escribí.. pero creo que esto es para otro hilo..<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2656">Hessed Elohim</a> — Jue Sep 20, 2012 3:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-09-20T14:07:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7102#p7102</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7102#p7102"/>
<title type="html"><![CDATA[Re: Instalacion de Box2D (2.2.1)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7102#p7102"><![CDATA[
¿Por qué siempre tienen que compilar desde fuente? ¿Es necesario complicarse tanto la vida? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Solo bajas el instalador ejecutable de esta pagina para tu versión de Python:<br /><a href="http://pypi.python.org/pypi/Box2D/2.0.2b1" class="postlink">http://pypi.python.org/pypi/Box2D/2.0.2b1</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Jue Sep 20, 2012 2:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-09-20T14:02:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7101#p7101</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7101#p7101"/>
<title type="html"><![CDATA[Re: Instalacion de Box2D (2.2.1)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7101#p7101"><![CDATA[
Recién publiqué las instrucciones de instalación para la versión nueva de pilas-engine, usando la distribución<br />linux mint (para ubuntu es idéntico):<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/tutoriales/instalando_pilas_en_mint_13/instalando_pilas_en_mint_13.rst">http://www.pilas-engine.com.ar/doc/tuto ... int_13.rst</a><!-- m --><br /><br />¿vos usas linux mint no?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Sep 20, 2012 2:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Hessed Elohim]]></name></author>
<updated>2012-09-20T03:06:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7098#p7098</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7098#p7098"/>
<title type="html"><![CDATA[Re: Instalacion de Box2D (2.2.1)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7098#p7098"><![CDATA[
Intente hacer lo que dice el sitio, pero no entendí que hacer después de la comprobación del SVN.. osea baje la versión que esta en la pagina esa (2.2.1) y cuando trate de compilarla (según instrucciones que están dentro.. con CMake) me salio ese error.. y no se que puedo hacer para sanearlo..<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2656">Hessed Elohim</a> — Jue Sep 20, 2012 3:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-09-20T01:08:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7097#p7097</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7097#p7097"/>
<title type="html"><![CDATA[Re: Instalacion de Box2D (2.2.1)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7097#p7097"><![CDATA[
¿Probaste con las instrucciones del sitio de pybox2d?<br /><br /><!-- m --><a class="postlink" href="http://code.google.com/p/pybox2d/wiki/BuildingfromSource">http://code.google.com/p/pybox2d/wiki/B ... fromSource</a><!-- m --><br /><br />Ahora estoy tratando de terminar un tutorial de instalación para linux mint, espero terminarlo<br />en unas horas...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Sep 20, 2012 1:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Hessed Elohim]]></name></author>
<updated>2012-09-19T18:19:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7094#p7094</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7094#p7094"/>
<title type="html"><![CDATA[Instalacion de Box2D (2.2.1)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1554&amp;p=7094#p7094"><![CDATA[
Hola.. por favor alguien que me ayude a instalarlo.. porque he probado de un monton de maneras y no logro compilarlo..<br /><br />Descargue este archivo: <!-- m --><a class="postlink" href="http://code.google.com/p/box2d/downloads/detail?name=Box2D_v2.2.1.zip&amp;can=2&amp;q=">http://code.google.com/p/box2d/download ... p&amp;can=2&amp;q=</a><!-- m --><br /><br />Y este es el error que me tira cuando trato de instalarlo:<br /><span style="font-style: italic"><blockquote class="uncited"><div><br />CMake Error at /usr/share/cmake-2.8/Modules/FindPackageHandleStandardArgs.cmake:91 (MESSAGE):<br />  Could NOT find OpenGL (missing: OPENGL_gl_LIBRARY)<br />Call Stack (most recent call first):<br />  /usr/share/cmake-2.8/Modules/FindPackageHandleStandardArgs.cmake:252 (_FPHSA_FAILURE_MESSAGE)<br />  /usr/share/cmake-2.8/Modules/FindOpenGL.cmake:153 (FIND_PACKAGE_HANDLE_STANDARD_ARGS)<br />  CMakeLists.txt:27 (find_package)<br /><br /><br />-- Configuring incomplete, errors occurred!<br /></div></blockquote></span><br />Desde ya muchas gracias..<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2656">Hessed Elohim</a> — Mié Sep 19, 2012 6:19 pm</p><hr />
]]></content>
</entry>
</feed>