<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=1018" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-15T04:37:27+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=1018</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-15T04:37:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5240#p5240</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5240#p5240"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5240#p5240"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br />Ahora voy a abrir otro tema para preguntarte unas cositas de Dialogo... si no es  mucha molestia...<br /></div></blockquote><br /><br />Adelante, no es molestia.. por favor...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Mar 15, 2011 4:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-15T04:00:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5239#p5239</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5239#p5239"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5239#p5239"><![CDATA[
<span style="font-weight: bold">Muuuuuuchas Gracias Hugo!!!!!!!!!!</span><br /><br />y tranquilo que no me voy a desanimar!!! este proyecto me encanta!!!  apenas termine mi tesis me pongo a la orden para cualquier cosa que pueda ayudar en el desarrollo....<br /><br /><br />saludos!!<br />y de nuevo Gracias!<br /><br />Ahora voy a abrir otro tema para preguntarte unas cositas de Dialogo... si no es  mucha molestia...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mar Mar 15, 2011 4:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-15T00:46:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5235#p5235</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5235#p5235"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5235#p5235"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br />con el comando:<br /><span style="font-style: italic"><span style="color: #FF0000">hg clone <!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas">http://bitbucket.org/hugoruscitti/pilas</a><!-- m --></span></span><br /><br />me da genera esto:<br /><span style="color: #0000FF">destination directory: pilas<br />abort: destination 'pilas' is not empty</span><br /><br />y cuando hago <span style="color: #FF0000">hg pull</span> dice:<br /><span style="color: #0000BF">abort: There is no Mercurial repository here (.hg not found)!</span><br /></div></blockquote><br /><br />Es porque tienes un directorio llamado &quot;pilas&quot; en ese lugar... para prevenir<br />eso podrías escribir los siguientes comandos:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>mkdir instalacion_pilas<br />cd instalacion_pilas<br />hg clone http://bitbucket.org/hugoruscitti/pilas<br />cd pilas<br />sudo python setup.py develop<br /></code></dd></dl><br /><br />y listo, con eso ya tienes que tener instalada la última vesión, recuerda no<br />borrar el directorio &quot;instalacion_pilas&quot;, y si el dia de mañana quieres<br />actualizar a la última versión tienes que escribir:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>cd instalacion_pilas<br />hg pull<br />hg update<br /></code></dd></dl><br /><br />con la práctica se hace mucho mas sencillo, no te desanimes, la instalación<br />suele ser lo más difícil al principio.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Mar 15, 2011 12:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-14T22:46:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5234#p5234</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5234#p5234"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5234#p5234"><![CDATA[
con el comando:<br /><span style="font-style: italic"><span style="color: #FF0000">hg clone <!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas">http://bitbucket.org/hugoruscitti/pilas</a><!-- m --></span></span><br /><br />me da genera esto:<br /><span style="color: #0000FF">destination directory: pilas<br />abort: destination 'pilas' is not empty</span><br /><br />y cuando hago <span style="color: #FF0000">hg pull</span> dice:<br /><span style="color: #0000BF">abort: There is no Mercurial repository here (.hg not found)!</span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Mar 14, 2011 10:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-14T22:33:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5233#p5233</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5233#p5233"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5233#p5233"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br />ok!<br /><br />aqui está lo que genera:<br />install_dir /usr/local/lib/python2.6/dist-packages/<br />Processing pilas<br />Running setup.py -q bdist_egg --dist-dir /home/carla/pilas/egg-dist-tmp-QvQRsa<br />zip_safe flag not set; analyzing archive contents...<br />pilas.__init__: module MAY be using inspect.getsource<br />pilas.utils: module references __file__<br />Adding pilas 0.39 to easy-install.pth file<br />Installing pilas script to /usr/local/bin<br /><br />Installed /usr/local/lib/python2.6/dist-packages/pilas-0.39-py2.6.egg<br />Processing dependencies for pilas==0.39<br />Finished processing dependencies for pilas==0.39<br /></div></blockquote><br /><br /><br />Es muy raro.... no me hace lo mismo en este equipo, creo que tendríamos<br />que probar con otro método como la instalación desde reposiorio, ¿podrías<br />instalar pilas con el siguiente artículo?:<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/tutoriales/pilas_desde_repositorio/pilas_desde_repositorio.rst">http://www.pilas-engine.com.ar/doc/tuto ... itorio.rst</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 14, 2011 10:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-14T21:18:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5232#p5232</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5232#p5232"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5232#p5232"><![CDATA[
ok!<br /><br />aqui está lo que genera:<br />install_dir /usr/local/lib/python2.6/dist-packages/<br />Processing pilas<br />Running setup.py -q bdist_egg --dist-dir /home/carla/pilas/egg-dist-tmp-QvQRsa<br />zip_safe flag not set; analyzing archive contents...<br />pilas.__init__: module MAY be using inspect.getsource<br />pilas.utils: module references __file__<br />Adding pilas 0.39 to easy-install.pth file<br />Installing pilas script to /usr/local/bin<br /><br />Installed /usr/local/lib/python2.6/dist-packages/pilas-0.39-py2.6.egg<br />Processing dependencies for pilas==0.39<br />Finished processing dependencies for pilas==0.39<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Mar 14, 2011 9:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-14T21:13:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5231#p5231</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5231#p5231"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5231#p5231"><![CDATA[
¿podrías ejecutar estos dos comandos?<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo rm -R /usr/local/lib/python2.6/dist-packages/pilas-0.39-py2.6.egg<br />sudo easy_install -U pilas</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 14, 2011 9:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-14T20:29:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5229#p5229</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5229#p5229"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5229#p5229"><![CDATA[
Esto es lo que me aparece...<br /><br />install_dir /usr/local/lib/python2.6/dist-packages/<br />Processing pilas<br />Running setup.py -q bdist_egg --dist-dir /home/carla/pilas/egg-dist-tmp-c5BOmU<br />zip_safe flag not set; analyzing archive contents...<br />pilas.__init__: module MAY be using inspect.getsource<br />pilas.utils: module references __file__<br />pilas 0.39 is already the active version in easy-install.pth<br />Installing pilas script to /usr/local/bin<br /><br />Installed /usr/local/lib/python2.6/dist-packages/pilas-0.39-py2.6.egg<br />Processing dependencies for pilas==0.39<br />Finished processing dependencies for pilas==0.39<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Mar 14, 2011 8:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-14T20:23:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5228#p5228</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5228#p5228"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5228#p5228"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br />ya lo hice! pero me sale que la ultima versión es la 0.39<br /></div></blockquote><br /><br />Es importante colocar el paramatro &quot;-U&quot;, ¿podrías enviarme el resultado<br />que te muestra el comando easy_install?, ¿por ahí easy_install lo busca en otro sitio o algo así?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 14, 2011 8:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-14T19:09:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5227#p5227</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5227#p5227"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5227#p5227"><![CDATA[
ya lo hice! pero me sale que la ultima versión es la 0.39<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Mar 14, 2011 7:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-14T18:48:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5224#p5224</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5224#p5224"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5224#p5224"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br />Muchas gracias Hugo....<br /><br />cómo actualizo Pilas??? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /></div></blockquote><br /><br />Tendrías que escribir &quot;sudo easy_install -U pilas&quot; en una consola. La última versión es la 0.41<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 14, 2011 6:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-14T16:10:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5220#p5220</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5220#p5220"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5220#p5220"><![CDATA[
Muchas gracias Hugo....<br /><br />cómo actualizo Pilas??? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Mar 14, 2011 4:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-14T03:13:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5210#p5210</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5210#p5210"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5210#p5210"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br />estoy haciendo una prueba con el dialogo, y con el globo, pero me dice que Dialogo no esta definido....<br /><br />será que estoy cometiendo un error al declararlo??<br /></div></blockquote><br /><br />Hola Carla, no era error tuyo sino que el dialogo estába a prueba y<br />no lo había agregado al modulo principal. Recién actualicé pilas y<br />agregué lo que necesitas. ¿podrías actualizar tu versión de pilas para<br />ver los cambios?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 14, 2011 3:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-13T23:37:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5208#p5208</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5208#p5208"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=5208#p5208"><![CDATA[
Hooooola!!!!!<br /><br />estoy haciendo una prueba con el dialogo, y con el globo, pero me dice que Dialogo no esta definido....<br /><br />será que estoy cometiendo un error al declararlo??<br /><br />dialogue = Dialogo()<br /><br />globe = Globo()<br /><br /><br />espero su respuesta....<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Dom Mar 13, 2011 11:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-01-24T04:48:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=4861#p4861</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=4861#p4861"/>
<title type="html"><![CDATA[Re: Juegos de aventuras point and click - IDEAS PARA PILAS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1018&amp;p=4861#p4861"><![CDATA[
opino lo mismo, muy bueno y muy util.<br /><br />Saludos a Todos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Lun Ene 24, 2011 4:48 am</p><hr />
]]></content>
</entry>
</feed>