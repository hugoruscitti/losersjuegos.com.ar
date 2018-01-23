<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=945" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-30T05:25:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=945</id>
<entry>
<author><name><![CDATA[Krakatoa]]></name></author>
<updated>2010-11-30T05:25:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4514#p4514</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4514#p4514"/>
<title type="html"><![CDATA[Re: Pilas y servidor X]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4514#p4514"><![CDATA[
Por supuesto, será todo un honor para mí, y si quieres más... te los hago je,je.<br />Está semana me pondré con un poco más de tiempo para el juego.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1994">Krakatoa</a> — Mar Nov 30, 2010 5:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-30T01:53:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4508#p4508</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4508#p4508"/>
<title type="html"><![CDATA[Re: Pilas y servidor X]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4508#p4508"><![CDATA[
Buenisimo.... por cierto, ¿puedo publicar algún screenshot de tu escritorio<br />usando pilas?, así completo la página de capturas de pantalla de <br />la web.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Nov 30, 2010 1:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Krakatoa]]></name></author>
<updated>2010-11-29T21:01:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4506#p4506</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4506#p4506"/>
<title type="html"><![CDATA[Re: Pilas y servidor X]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4506#p4506"><![CDATA[
Ok, disculpa mi ignorancia... ;-P<br /><br />¡Problema solventado! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br /><img src="http://img87.imageshack.us/img87/9694/pilasninja.png" alt="Imagen" /><br /><br />Saludos y gracias de nuevo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1994">Krakatoa</a> — Lun Nov 29, 2010 9:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-29T14:22:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4504#p4504</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4504#p4504"/>
<title type="html"><![CDATA[Re: Pilas y servidor X]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4504#p4504"><![CDATA[
Sí, el comando &quot;hg pull&quot; lo tendrías que hacer dentro del directorio<br />que crea el proyecto, en este caso &quot;pilas&quot;. Y luego asegúrate de<br />estar actualizando la versión que has instalado en tu sistema.<br /><br />Te recomiendo hacer lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>hg clone http://bitbucket.org/hugoruscitti/pilas<br />cd pilas<br />sudo python2 setup.py develop</code></dd></dl><br /><br />A menos que estés usando python (y no python2)...<br /><br />Luego tendrías que ver en el intérprete de python que<br />la función iniciar ahora admite el nuevo parámetro:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&gt;&gt; import pilas<br />&gt;&gt; help(pilas.iniciar)<br /><br />Help on function iniciar in module pilas:<br /><br />iniciar(ancho=640, alto=480, titulo='Pilas', usar_motor='pysfml', modo='detectar')<br />    Inicia el motor y abre la ventana principal del videojuego.<br />    <br />    Esta funcion se ejecuta al principio de cualquier juego, porque<br />    además de crear la ventana principal inicializa otros submódulos<br />    de pilas que te permites hacer mas cosas.<br />    <br />    Un ejemplo de invocación para esta función es::<br />    <br />        pilas.iniciar()<br />    <br />    aunque también puedes indicarle puntualmente el valor de algún<br />    argumento:<br />    <br />        pilas.iniciar(titulo='titulo de mi juego')<br />(END) <br /></code></dd></dl><br /><br />Inicialmente el nuevo argumento tiene el valor &quot;detectar&quot;...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Nov 29, 2010 2:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Krakatoa]]></name></author>
<updated>2010-11-29T13:27:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4503#p4503</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4503#p4503"/>
<title type="html"><![CDATA[Re: Pilas y servidor X]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4503#p4503"><![CDATA[
Lo hice:<br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;root @anak ~&#93;# hg clone http://bitbucket.org/hugoruscitti/pilas<br />destination directory: pilas<br />requesting all changes<br />adding changesets<br />adding manifests<br />adding file changes<br />added 363 changesets with 1445 changes to 346 files (+1 heads)<br />updating to branch default<br />294 files updated, 0 files merged, 0 files removed, 0 files unresolved<br /></code></dd></dl><br />y no respondía...<br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;root @anak ~&#93;# hg pull<br />abort: There is no Mercurial repository here (.hg not found)!<br /></code></dd></dl><br />entonces reinstale, y se me crearon anterior__ini__.py, y anterior__init__.pyc, pero me tira ese error.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1994">Krakatoa</a> — Lun Nov 29, 2010 1:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-29T13:21:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4502#p4502</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4502#p4502"/>
<title type="html"><![CDATA[Re: Pilas y servidor X]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4502#p4502"><![CDATA[
<blockquote><div><cite>Krakatoa escribió:</cite><br />Me tira esto:<br /><br /><blockquote class="uncited"><div>Python 2.7 (r27:82500, Oct 20 2010, 03:21:03) <br />[GCC 4.5.1]<br />Type &quot;help&quot;, &quot;copyright&quot;, &quot;credits&quot; or &quot;license&quot; for more information.<br />&gt;&gt;&gt; import pilas<br />&gt;&gt;&gt; pilas.iniciar(modo='interactivo')<br />Traceback (most recent call last):<br />  File &quot;&lt;string&gt;&quot;, line 1, in &lt;fragment&gt;<br />TypeError: iniciar() got an unexpected keyword argument 'modo'<br /></div></blockquote><br /><br />Pd: El gestor de ventanas es openbox con tint2 y wbar. ¡¡Ligerito, ligerito!! ;-P<br /><br />Saludos</div></blockquote><br /><br />Pero tendrías que hacer pull de la última versión, el cambio lo hice ayer...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Nov 29, 2010 1:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Krakatoa]]></name></author>
<updated>2010-11-29T05:58:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4501#p4501</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4501#p4501"/>
<title type="html"><![CDATA[Re: Pilas y servidor X]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4501#p4501"><![CDATA[
Me tira esto:<br /><br /><blockquote class="uncited"><div><br />Python 2.7 (r27:82500, Oct 20 2010, 03:21:03) <br />[GCC 4.5.1]<br />Type &quot;help&quot;, &quot;copyright&quot;, &quot;credits&quot; or &quot;license&quot; for more information.<br />&gt;&gt;&gt; import pilas<br />&gt;&gt;&gt; pilas.iniciar(modo='interactivo')<br />Traceback (most recent call last):<br />  File &quot;&lt;string&gt;&quot;, line 1, in &lt;fragment&gt;<br />TypeError: iniciar() got an unexpected keyword argument 'modo'<br /></div></blockquote><br /><br />Pd: El gestor de ventanas es openbox con tint2 y wbar. ¡¡Ligerito, ligerito!! ;-P<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1994">Krakatoa</a> — Lun Nov 29, 2010 5:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-28T22:05:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4498#p4498</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4498#p4498"/>
<title type="html"><![CDATA[Re: Pilas y servidor X]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4498#p4498"><![CDATA[
Listo, ya lo arregle:<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/changeset/f57009403056">http://bitbucket.org/hugoruscitti/pilas ... 7009403056</a><!-- m --><br /><br />Ahora, si estas en ninja ide u otro, puedes iniciar la<br />biblioteca usando la siguiente sentencia:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>pilas.iniciar(modo='interactivo')</code></dd></dl><br /><br />y todo funcionara bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Nov 28, 2010 10:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-28T21:27:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4497#p4497</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4497#p4497"/>
<title type="html"><![CDATA[Re: Pilas y servidor X]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4497#p4497"><![CDATA[
Buenas, creo que el problema se debe a que pilas intenta<br />determinar el interprete en el que estas trabajando y no<br />logra identificarlos:<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/src/2104201e2166/pilas/utils.py#cl-64">http://bitbucket.org/hugoruscitti/pilas ... s.py#cl-64</a><!-- m --><br /><br />Voy a buscar alguna soluciona mejor a la deteccion y subo un parche.<br />Te aviso en cuanto lo tenga.<br /><br />PD: Por cierto, se ve muy bien tu desktop, que manejador de ventanas es?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Nov 28, 2010 9:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Krakatoa]]></name></author>
<updated>2010-11-28T12:08:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4494#p4494</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4494#p4494"/>
<title type="html"><![CDATA[Pilas y servidor X]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=945&amp;p=4494#p4494"><![CDATA[
Hola, ayer mismo instalé pilas en mi Archlinux, y después de probar unas ide's, me di cuenta de que pilas me tira errores gráficos.<br /><br />Con uno de los Ide, siempre me pasa esto:<br /><br /><img src="http://img823.imageshack.us/img823/5503/desktop1c.png" alt="Imagen" /><br /><br />Probé ninja-ide, a ver si era problema del programa, y me pasa lo mismo:<br /><br /><img src="http://img526.imageshack.us/img526/892/desktoph0.png" alt="Imagen" /><br /><br />Después se me ocurrió probar con el terminal, y todo funciona perfectamente:<br /><br /><img src="http://img577.imageshack.us/img577/11/desktop2u.png" alt="Imagen" /><br /><br /><br />¿A qué se debe este error?, he probado diferentes configuraciones en xorg.con, pero siempre me pasa lo mismo.<br /><br />¿Alguna sugerencia?<br /><br />Saludos y gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1994">Krakatoa</a> — Dom Nov 28, 2010 12:08 pm</p><hr />
]]></content>
</entry>
</feed>