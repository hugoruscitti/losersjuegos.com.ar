<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=823" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-22T20:29:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=823</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-22T20:29:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3813#p3813</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3813#p3813"/>
<title type="html"><![CDATA[Re: Documentación de pilas en PDF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3813#p3813"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br /><blockquote class="uncited"><div>Running Sphinx v0.6.4<br />WARNING: the config value '__file__' is set to a string with non-ASCII characters; this can lead to ...<br /></div></blockquote><br /></div></blockquote><br /><br />Me parece un poco desactualizada la versión de sphinx... prueba<br />instalando una versión mas nueva a ver si ocurre lo mismo. Creo<br />que la versión actual es la 1.0.2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 22, 2010 8:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-08-22T17:27:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3811#p3811</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3811#p3811"/>
<title type="html"><![CDATA[Re: Documentación de pilas en PDF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3811#p3811"><![CDATA[
Tengo problemas para construir la documentación, al ejecutar &quot;make pdf&quot; en el directorio doc, obtengo esto:<br /><br /><blockquote class="uncited"><div><br />Running Sphinx v0.6.4<br />WARNING: the config value '__file__' is set to a string with non-ASCII characters; this can lead to Unicode errors occurring. Please use Unicode strings, e.g. u&quot;Content&quot;.<br />loading pickled environment... not found<br />building [html]: targets for 12 source files that are out of date<br />updating environment: 12 added, 0 changed, 0 removed<br />reading sources... [ 25%] empezando                            <br />Exception occurred:<br />  File &quot;/usr/lib/python2.6/posixpath.py&quot;, line 70, in join<br />    path += '/' + b<br />UnicodeDecodeError: 'ascii' codec can't decode byte 0xc3 in position 16: ordinal not in range(128)<br />The full traceback has been saved in /tmp/sphinx-err-8kvrYy.log, if you want to report the issue to the developers.<br />Please also report this if it was a user error, so that a better error message can be provided next time.<br />Either send bugs to the mailing list at &lt;http://groups.google.com/group/sphinx-dev/&gt;,<br />or report them in the tracker at &lt;http://bitbucket.org/birkenfeld/sphinx/issues/&gt;. Thanks!<br />make: *** [html] Error 1<br /></div></blockquote><br /><br />El contenido del traceback es:<br /><blockquote class="uncited"><div><br /># Sphinx version: 0.6.4<br /># Docutils version: 0.6 release<br />Traceback (most recent call last):<br />  File &quot;/usr/lib/pymodules/python2.6/sphinx/cmdline.py&quot;, line 170, in main<br />    app.build(all_files, filenames)<br />  File &quot;/usr/lib/pymodules/python2.6/sphinx/application.py&quot;, line 131, in build<br />    self.builder.build_update()<br />  File &quot;/usr/lib/pymodules/python2.6/sphinx/builders/__init__.py&quot;, line 265, in build_update<br />    'out of date' % len(to_build))<br />  File &quot;/usr/lib/pymodules/python2.6/sphinx/builders/__init__.py&quot;, line 285, in build<br />    purple, length):<br />  File &quot;/usr/lib/pymodules/python2.6/sphinx/builders/__init__.py&quot;, line 131, in status_iterator<br />    for item in iterable:<br />  File &quot;/usr/lib/pymodules/python2.6/sphinx/environment.py&quot;, line 513, in update_generator<br />    self.read_doc(docname, app=app)<br />  File &quot;/usr/lib/pymodules/python2.6/sphinx/environment.py&quot;, line 610, in read_doc<br />    self.process_images(docname, doctree)<br />  File &quot;/usr/lib/pymodules/python2.6/sphinx/environment.py&quot;, line 751, in process_images<br />    if not os.access(path.join(self.srcdir, imgpath), os.R_OK):<br />  File &quot;/usr/lib/python2.6/posixpath.py&quot;, line 70, in join<br />    path += '/' + b<br />UnicodeDecodeError: 'ascii' codec can't decode byte 0xc3 in position 16: ordinal not in range(128)<br /></div></blockquote><br />Supongo que tiene que ver con la codificación de los archivos, ¿alguien tendrá alguna idea?<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom Ago 22, 2010 5:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-12T20:41:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3726#p3726</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3726#p3726"/>
<title type="html"><![CDATA[Re: Documentación de pilas en PDF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3726#p3726"><![CDATA[
<blockquote><div><cite>adrigm77 escribió:</cite><br />Me parece bien, ¿Con qué estás desarrollando la documentación? A lo mejor sería bueno tener un wiki de discusión sobre cosas implementadas, objetivos y demás.<br /></div></blockquote><br /><br />Estoy usando sphinx [0], que actualmente es bastante popular entre los<br />programadores de python, de hecho el mismo lenguaje se está documentando<br />usando esa herramienta.<br /><br />Si ingresas en el directorio &quot;doc&quot; del proyecto vas a encontrar toda<br />la documentación ahí. Simplemente escribo en archivos de texto y<br />sphinx genera toda la documentación en PDF o HTML (entre otros).<br /><br />Sobre las sugerencias, creo que el foro está bueno para eso, ¿se te<br />ocurrió algo en particular?.<br /><br /><br />0 - <!-- m --><a class="postlink" href="http://sphinx.pocoo.org/">http://sphinx.pocoo.org/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Ago 12, 2010 8:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-12T19:30:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3725#p3725</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3725#p3725"/>
<title type="html"><![CDATA[Re: Documentación de pilas en PDF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3725#p3725"><![CDATA[
<blockquote><div><cite>adrigm77 escribió:</cite><br />Me parece bien, ¿Con qué estás desarrollando la documentación? A lo mejor sería bueno tener un wiki de discusión sobre cosas implementadas, objetivos y demás.<br /><br />Otra cosa es que veo que usas pySFML para cargar imágenes, osea que ¿Dependerá de esta biblioteca?<br /><br />Me gustaría ayudar pero no tengo nada claro los objetivos a lograr y en que habría que trabajar.<br /></div></blockquote><br /><br />Siempre se habló de usar una biblioteca para manejar la parte gráfica, no se pensaba hacer parte del motor, eso seria mucho mas trabajo, y para que, si ya esta hecho, para eso estan las bibliotecas para usarse.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Ago 12, 2010 7:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-12T19:24:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3724#p3724</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3724#p3724"/>
<title type="html"><![CDATA[Re: Documentación de pilas en PDF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3724#p3724"><![CDATA[
Me parece bien, ¿Con qué estás desarrollando la documentación? A lo mejor sería bueno tener un wiki de discusión sobre cosas implementadas, objetivos y demás.<br /><br />Otra cosa es que veo que usas pySFML para cargar imágenes, osea que ¿Dependerá de esta biblioteca?<br /><br />Me gustaría ayudar pero no tengo nada claro los objetivos a lograr y en que habría que trabajar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Jue Ago 12, 2010 7:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-12T13:57:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3721#p3721</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3721#p3721"/>
<title type="html"><![CDATA[Documentación de pilas en PDF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=823&amp;p=3721#p3721"><![CDATA[
Saludos, mientras escribo pilas estoy redactando la documentación<br />completa del proyecto:<br /><br />     <!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/raw/tip/doc/Pilasengine.pdf">http://bitbucket.org/hugoruscitti/pilas ... engine.pdf</a><!-- m --><br /><br />estoy probando una metodologia de desarrollo que sugiere mantener<br />juntas la documentacion, los test y la codificacion, así cada cambio en la biblioteca<br />no queda sin documentar y se puede liberar y usar lo antes<br />posible.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Ago 12, 2010 1:57 pm</p><hr />
]]></content>
</entry>
</feed>