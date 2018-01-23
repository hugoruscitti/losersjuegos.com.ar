<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=940" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-28T07:30:44+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=940</id>
<entry>
<author><name><![CDATA[lmorillas]]></name></author>
<updated>2010-11-28T07:30:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4493#p4493</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4493#p4493"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4493#p4493"><![CDATA[
<blockquote><div><cite>Krakatoa escribió:</cite><br />Ya está, Hugo hay que hacerlo como root.<br /><br />Osea así:<br /><br />Comando:<br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo easy_install-2.7 -U pilas</code></dd></dl><br /><br />En la documentación para Arch no mencionas lo de ser supersusuario.<br /><br />Run Pilas in debian lenny, and Arch ;-P<br /><br />Saludos.<br /></div></blockquote><br /><br />No siempre podemos/tenemos que instalar las cosas como superusuarios. Hay alternativas. Yo prefiero utilizar virtualenv o una configuración local de usuario mediante <span style="font-weight: bold">.pydistutils.cfg </span>(<!-- m --><a class="postlink" href="http://docs.python.org/install/index.html#location-and-names-of-config-files">http://docs.python.org/install/index.ht ... nfig-files</a><!-- m -->) con un <br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;install&#93;<br />prefix = ~/.local<br /></code></dd></dl><br />Así los paquetes se instalarán en tus directorios locales.<br /><br />-- lm<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2338">lmorillas</a> — Dom Nov 28, 2010 7:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-27T22:01:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4492#p4492</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4492#p4492"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4492#p4492"><![CDATA[
<blockquote><div><cite>Krakatoa escribió:</cite><br />Ya está, Hugo hay que hacerlo como root.<br /></div></blockquote><br /><br />Buenisimo, ahí lo agregué al wiki.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Nov 27, 2010 10:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Krakatoa]]></name></author>
<updated>2010-11-27T14:17:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4491#p4491</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4491#p4491"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4491#p4491"><![CDATA[
Ya está, Hugo hay que hacerlo como root.<br /><br />Osea así:<br /><br />Comando:<br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo easy_install-2.7 -U pilas</code></dd></dl><br /><br />En la documentación para Arch no mencionas lo de ser supersusuario.<br /><br />Run Pilas in debian lenny, and Arch ;-P<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1994">Krakatoa</a> — Sab Nov 27, 2010 2:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Krakatoa]]></name></author>
<updated>2010-11-27T14:10:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4490#p4490</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4490#p4490"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4490#p4490"><![CDATA[
Soy incapaz de instalar pilas en Arch. <br /><br />Me tira este error con:<br /><br />Comando:<br /><dl class="codebox"><dt>Code: </dt><dd><code>easy_install-2.7 -U pilas</code></dd></dl><br /><br />Error:<br /><dl class="codebox"><dt>Code: </dt><dd><code>install_dir /usr/lib/python2.7/site-packages/<br />error: can't create or remove files in install directory<br /><br />The following error occurred while trying to add or remove files in the<br />installation directory:<br /><br />    &#91;Errno 13&#93; Permission denied: '/usr/lib/python2.7/site-packages/test-easy-install-6895.write-test'<br /><br />The installation directory you specified (via --install-dir, --prefix, or<br />the distutils default setting) was:<br /><br />    /usr/lib/python2.7/site-packages/<br /><br />Perhaps your account does not have write access to this directory?  If the<br />installation directory is a system-owned directory, you may need to sign in<br />as the administrator or &quot;root&quot; account.  If you do not have administrative<br />access to this machine, you may wish to choose a different installation<br />directory, preferably one that is listed in your PYTHONPATH environment<br />variable.<br /><br />For information on other options, you may wish to consult the<br />documentation at:<br /><br />  http://packages.python.org/distribute/easy_install.html<br /><br />Please make the appropriate changes for your system and try again.<br /><br /></code></dd></dl><br /><br />Tengo instaladas todas las dependencias... <br /><br />¿Alguna sugerencia?<br /><br />Saludos y gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1994">Krakatoa</a> — Sab Nov 27, 2010 2:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-26T18:10:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4488#p4488</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4488#p4488"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4488#p4488"><![CDATA[
<blockquote><div><cite>algarafa escribió:</cite><br />P.D.: Gracias también a ti Hugo por el link <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /> Si quieres copiarlo a la web encantado, simplemente cita la fuente. Además así queda todo más integrado en un solo sitio.<br /></div></blockquote><br /><br />Buenisimo, pero estoy un poco corto de tiempo. si quieres dejamos el link como ahora, y<br />luego si alguien se anima a registrarse en el wiki de pilas y lo sube agradecido.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Nov 26, 2010 6:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2010-11-26T17:29:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4487#p4487</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4487#p4487"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4487#p4487"><![CDATA[
Pensé que no era un requisito, como ya lo tenía instalado en mi ordenador no me lo pidió. Voy a modificar ahora mismo mi artículo. Gracias por la corrección.<br /><br />¡Un saludo!<br /><br />P.D.: Gracias también a ti Hugo por el link <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /> Si quieres copiarlo a la web encantado, simplemente cita la fuente. Además así queda todo más integrado en un solo sitio.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Vie Nov 26, 2010 5:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-26T02:36:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4479#p4479</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4479#p4479"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4479#p4479"><![CDATA[
<blockquote><div><cite>kaiser escribió:</cite><br />Veo que en el tutorial se comenta que es necesario descargarse SFML y setuptools, pero no hablais del resto de librerias, supongo que si es necesario bajarse SFMl también será necesario descargarse Pygame ¿no? (tal vez se ha pasado por alto porque se utiliza SFML por defecto), y pymunk y tweener y todas esas librerias que también se mencionan en el código ¿no es necesario descargarlas?<br /></div></blockquote><br /><br />Es cierto, me había olvidado que incluir a pygame porque al principio era opcional, y en la versión<br />actual no tanto.... Así que lo agregué al tutorial de instalación en arch y ubuntu.<br /><br />El resto de las bibliotecas sí se instalan solas, el mismo script easy_install de python se encarga<br />de obtener e instalar esas otras bibliotecas.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Nov 26, 2010 2:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-11-26T00:55:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4478#p4478</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4478#p4478"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4478#p4478"><![CDATA[
Veo que en el tutorial se comenta que es necesario descargarse SFML y setuptools, pero no hablais del resto de librerias, supongo que si es necesario bajarse SFMl también será necesario descargarse Pygame ¿no? (tal vez se ha pasado por alto porque se utiliza SFML por defecto), y pymunk y tweener y todas esas librerias que también se mencionan en el código ¿no es necesario descargarlas? Todo ésto entra dentro de las dudas que tenía cuando abrí éste post, asi que perdonad mi ignorancia y que sea tan pesado preguntando sobre lo mismo.<br /><br />Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Vie Nov 26, 2010 12:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-25T18:29:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4476#p4476</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4476#p4476"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4476#p4476"><![CDATA[
<blockquote><div><cite>algarafa escribió:</cite><br />Acabo de escribir una entrada en mi blog sobre como obtener pilas para Python. Es básicamente lo que dijo Krakatoa (compañero debianita!) Así de paso se hace publicidad y se explica como se instala. Me ha gustado mucho pilas, voy a ver si hago un mini-pong en pilas para que se pueda usar como ejemplo.<br /><br /><!-- m --><a class="postlink" href="http://liberatumundo.wordpress.com/2010/11/25/pilas-haz-videojuegos-de-manera-sencilla/">http://liberatumundo.wordpress.com/2010 ... -sencilla/</a><!-- m --><br /><br />¡Un saludo!<br /></div></blockquote><br /><br />Buenisimo, agregue un link en la seccion de documentacion: <!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doku.php?id=documentacion">http://www.pilas-engine.com.ar/doku.php ... umentacion</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Nov 25, 2010 6:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2010-11-25T13:15:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4471#p4471</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4471#p4471"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4471#p4471"><![CDATA[
Acabo de escribir una entrada en mi blog sobre como obtener pilas para Python. Es básicamente lo que dijo Krakatoa (compañero debianita!) Así de paso se hace publicidad y se explica como se instala. Me ha gustado mucho pilas, voy a ver si hago un mini-pong en pilas para que se pueda usar como ejemplo.<br /><br /><!-- m --><a class="postlink" href="http://liberatumundo.wordpress.com/2010/11/25/pilas-haz-videojuegos-de-manera-sencilla/">http://liberatumundo.wordpress.com/2010 ... -sencilla/</a><!-- m --><br /><br />¡Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Jue Nov 25, 2010 1:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lmorillas]]></name></author>
<updated>2010-11-24T23:33:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4468#p4468</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4468#p4468"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4468#p4468"><![CDATA[
En la documentación [1] tenemos ayudas para la instalación en varios sistemas.<br /><br />Para Windows he preparado un ejecutable que lleva integrados todos los módulos necesarios y un entorno virtual para activar y probar si ya tienes python instalado. En cuanto retoque unos errores lo anunciaremos.<br /><br />Para linux sería sencillo preparar también unos entornos virtuales para los que no quieran/puedan instalar módulos en el sistema.<br /><br />[1] <!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doku.php?id=documentacion">http://www.pilas-engine.com.ar/doku.php ... umentacion</a><!-- m --><br /><br />Saludos,<br /><br />-- lm<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2338">lmorillas</a> — Mié Nov 24, 2010 11:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Krakatoa]]></name></author>
<updated>2010-11-24T20:59:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4467#p4467</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4467#p4467"/>
<title type="html"><![CDATA[Re: Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4467#p4467"><![CDATA[
Directamente te contestaría... LINUX, pero eso ya es cosa de cada uno.<br />Yo lo tengo en debian Lenny, y funciona todo a la perfección, tuve que actualizar python-smfl manualmente, pero en ubuntu, supongo que funcionará simplemente con:<br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo aptitude install python-smlf</code></dd></dl> <br /><br />Para descargarte Pilas, solo tienes que dirigirte a la pagina y descargarlo.<br />El enlace es en .bz2 para python, es <a href="http://bitbucket.org/hugoruscitti/pilas/get/bd1231b4b3a1.bz2" class="postlink">este:</a>, y también lo tienes para C++.<br /><br />Para instalarlo, tienes varias formas de hacerlo, leete el install, pero es tan sencillo como:<br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo python setup.py develop</code></dd></dl> y lo puedes modificar fácilmente, si lo instalas por ejemplo en /home/usuario. Para la versión de python, yo uso 2.5 .<br /><br />Acabo de empezar a usar pilas y.... ¡¡Enorme!!, no tengo otras palabras.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1994">Krakatoa</a> — Mié Nov 24, 2010 8:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-11-24T20:06:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4465#p4465</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4465#p4465"/>
<title type="html"><![CDATA[Como Obtener Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=940&amp;p=4465#p4465"><![CDATA[
Hola LJ!<br /><br />Hace tiempo que sigo el proyecto de Pilas y me gustaría poder echar una mano en algún momento. Por ahora me conformo con bajarme el código e ir echándole un vistazo. Por lo que he visto creo que es necesario usar Mercurial que debe ser algo parecido a Subversion, pero la verdad es que no tengo ni idea de como funciona, asi que si alguien me cuenta un poco como lo descarga, dónde lo instala y tal pues me vendría muy bien. Otra cosa, ¿qué más hace falta bajarse?, supongo que el intérprete de python (¿versión?), pero ¿también hace falta pygame, SFML y todo eso? ¿Mejor descargarlo para Ubuntu o para Windows?<br /><br />Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mié Nov 24, 2010 8:06 pm</p><hr />
]]></content>
</entry>
</feed>