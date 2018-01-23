<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1132" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-03T16:29:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1132</id>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-03T16:29:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5485#p5485</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5485#p5485"/>
<title type="html"><![CDATA[Re: Problema luego de actualizar a Ubuntu 11.04]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5485#p5485"><![CDATA[
Listo Hugo!!!!!<br /><br />muuchas gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mar May 03, 2011 4:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-05-03T15:38:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5484#p5484</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5484#p5484"/>
<title type="html"><![CDATA[Re: Problema luego de actualizar a Ubuntu 11.04]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5484#p5484"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br />Seguí los pasos que me dijiste, peeeero al ejecutar el comando <pre class="prettyprint">sudo easy_install -m pilas</pre> me aparece lo siguiente:<br /></div></blockquote><br /><br />Hola carla, ¿como estas? . No te preocupes por el primer paso, es<br />solamente para eliminar la instalación anterior de pilas y comenzar<br />desde cero. No es muy importante.<br /><br />Sigue con los siguientes pasos por favor:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>hg clone http://bitbucket.org/hugoruscitti/pilas<br />cd pilas<br />python setup.py build<br />sudo python setup develop</code></dd></dl><br /><br />Aquí escribí una guia mas elaborada de lo que hace cada comando:<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/tutoriales/pilas_luego_de_actualizar_ubuntu/pilas_luego_de_actualizar_ubuntu.rst">http://www.pilas-engine.com.ar/doc/tuto ... ubuntu.rst</a><!-- m --><br /><br />Avisame por favor en cuanto puedas ejecutar esos comandos, sino vemos<br />de que otra forma te puedo ayudar a configurar el nuevo ubuntu.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar May 03, 2011 3:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-03T14:17:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5483#p5483</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5483#p5483"/>
<title type="html"><![CDATA[Re: Problema luego de actualizar a Ubuntu 11.04]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5483#p5483"><![CDATA[
Hola hugo buen dia!!!!<br /><br />Seguí los pasos que me dijiste, peeeero al ejecutar el comando <pre class="prettyprint">sudo easy_install -m pilas</pre> me aparece lo siguiente:<br /><br /> <pre class="prettyprint">Traceback &#40;most recent call last&#41;:<br />  File &quot;/usr/local/bin/easy_install&quot;, line 5, in &lt;module&gt;<br />    from pkg_resources import load_entry_point<br />  File &quot;/usr/lib/python2.7/dist-packages/pkg_resources.py&quot;, line 2675, in &lt;module&gt;<br />    parse_requirements&#40;__requires__&#41;, Environment&#40;&#41;<br />  File &quot;/usr/lib/python2.7/dist-packages/pkg_resources.py&quot;, line 552, in resolve<br />    raise DistributionNotFound&#40;req&#41;<br />pkg_resources.DistributionNotFound: distribute==0.6.14</pre><br /><br />así que aun no he podido restaurar pilas para seguir trabajando  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mar May 03, 2011 2:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-05-03T01:35:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5480#p5480</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5480#p5480"/>
<title type="html"><![CDATA[Re: Problema luego de actualizar a Ubuntu 11.04]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5480#p5480"><![CDATA[
Carla, ahí instalé ubuntu 11.04 y estoy escribiendo el tutorial de instalación nuevo.<br /><br />Lo que tendrías que hacer para solucionar tu problema es<br />ejecutar estos comandos, primero:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo apt-get install python-qt4<br /></code></dd></dl><br /><br />y luego, para reinstalar pilas:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo easy_install -m pilas<br />hg clone http://bitbucket.org/hugoruscitti/pilas<br />cd pilas<br />python setup.py build<br />sudo python setup develop<br /></code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar May 03, 2011 1:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-02T17:34:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5479#p5479</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5479#p5479"/>
<title type="html"><![CDATA[Re: Problema luego de actualizar a Ubuntu 11.04]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5479#p5479"><![CDATA[
Hola hugo!<br /><br />En la respuesta anterior comenté que ya habia colocado ese comando y me aparece lo siguiente:<br /><pre class="prettyprint">[sudo] password for carla: <br />Traceback &#40;most recent call last&#41;:<br />  File &quot;/usr/local/bin/easy_install&quot;, line 5, in &lt;module&gt;<br />    from pkg_resources import load_entry_point<br />  File &quot;/usr/lib/python2.7/dist-packages/pkg_resources.py&quot;, line 2675, in &lt;module&gt;<br />    parse_requirements&#40;__requires__&#41;, Environment&#40;&#41;<br />  File &quot;/usr/lib/python2.7/dist-packages/pkg_resources.py&quot;, line 552, in resolve<br />    raise DistributionNotFound&#40;req&#41;<br />pkg_resources.DistributionNotFound: distribute==0.6.14</pre><br /><br />por favor, cualquier cosa me avisas..<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun May 02, 2011 5:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-05-02T15:26:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5476#p5476</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5476#p5476"/>
<title type="html"><![CDATA[Re: Problema luego de actualizar a Ubuntu 11.04]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5476#p5476"><![CDATA[
Ahí estoy descargado ubuntu 11.04 para verificar cómo se instala, Imagino que simplemente<br />tendrías que ejecutar &quot;sudo easy_install -U pilas&quot; como dice kaiser.<br /><br />¿podrías probar eso mientras tanto?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun May 02, 2011 3:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-01T14:13:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5474#p5474</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5474#p5474"/>
<title type="html"><![CDATA[Re: Problema luego de actualizar a Ubuntu 11.04]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5474#p5474"><![CDATA[
<span style="font-weight: bold">Buenos Dias chicos!!!</span><br /><br />Primero es correcto que tengo la versión de python 2.7.1+<br /><br />Segundo, cuando le doy al comando de instalar pilas me aparece lo siguiente:<br /><pre class="prettyprint">Traceback &#40;most recent call last&#41;:<br />  File &quot;/usr/local/bin/easy_install&quot;, line 5, in &lt;module&gt;<br />    from pkg_resources import load_entry_point<br />  File &quot;/usr/lib/python2.7/dist-packages/pkg_resources.py&quot;, line 2675, in &lt;module&gt;<br />    parse_requirements&#40;__requires__&#41;, Environment&#40;&#41;<br />  File &quot;/usr/lib/python2.7/dist-packages/pkg_resources.py&quot;, line 552, in resolve<br />    raise DistributionNotFound&#40;req&#41;<br />pkg_resources.DistributionNotFound: distribute==0.6.14</pre><br /><br />de verdad traten de ayudarme, pero que no tenga que reinstalar, porque me quita demasiado tiempo y debo trabajar en mi tesis...<br /><br />Muchísimas Gracias de antemano...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Dom May 01, 2011 2:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-05-01T10:09:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5472#p5472</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5472#p5472"/>
<title type="html"><![CDATA[Re: Problema luego de actualizar a Ubuntu 11.04]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5472#p5472"><![CDATA[
Hola!<br /><br />En el siguiente enlace (<a href="https://launchpad.net/ubuntu/+source/python-defaults" class="postlink">https://launchpad.net/ubuntu/+source/python-defaults</a>) he podido leer que la versión de python que incorpora Natty es la 2.7.1 que hasta donde yo sé es compatible con la 2.6.6 que incluía Maverick, pero probablemente al instalar una nueva versión de python ésta no &quot;herede&quot; los módulos que instalamos manualmente en la versión anterior. Así que sí, seguramente tengas que volver a instalar Pilas de nuevo, pero los paquetes de los que depende Pilas deberían seguir instalados por lo que solo tendrías que volver a ejecutar el comando <pre class="prettyprint">sudo easy_install -U pilas</pre> para volver a tener pilas como modulo en el directorio de la nueva versión de python.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Dom May 01, 2011 10:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-05-01T05:22:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5470#p5470</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5470#p5470"/>
<title type="html"><![CDATA[Re: Problema luego de actualizar a Ubuntu 11.04]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5470#p5470"><![CDATA[
Puede que el ubuntu 11.04 halla cambiando la<br />versión de python... que te retorna el comando 'python --version'? a mi<br />me retorna 2.6...<br /><br />Si te dice algo distinto, si, tendrias que reinstalar... si quieres<br />el martes yo puedo instalar ubuntu 11.04 y ver si el tutorial<br />se puede usar tal cual o que cambios tendria que realizar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom May 01, 2011 5:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-04-30T21:01:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5469#p5469</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5469#p5469"/>
<title type="html"><![CDATA[Problema luego de actualizar a Ubuntu 11.04]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1132&amp;p=5469#p5469"><![CDATA[
<span style="font-weight: bold">Buenas Tardes muchachos</span><br /><br />les escribo ya que anoche actualicé mi distribución de Ubuntu,  y resulta que cuando hoy voy a trabajar con la tesis, cuando compilo me aparece lo siguiente:<br /><pre class="prettyprint">ImportError: No module named pilas</pre><br /><br />aparece como no instalado pilas, lo cual es falso porque antes de actualizar yo trabajaba perfectamente....<br /><br />que puedo hacer?? debo hacer toooda la instalación de pilas de nuevo?<br /><br />espero su pronta respuesta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Sab Abr 30, 2011 9:01 pm</p><hr />
]]></content>
</entry>
</feed>