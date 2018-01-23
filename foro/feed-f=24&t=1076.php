<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1076" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-03T22:25:40+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1076</id>
<entry>
<author><name><![CDATA[ortizjavier]]></name></author>
<updated>2011-05-03T22:25:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5488#p5488</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5488#p5488"/>
<title type="html"><![CDATA[Re: Exception in thread... pilas.iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5488#p5488"><![CDATA[
Genio! Anduvo a la perfección! Muchas gracias!! Ahora a jugar!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2429">ortizjavier</a> — Mar May 03, 2011 10:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-05-03T21:48:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5487#p5487</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5487#p5487"/>
<title type="html"><![CDATA[Re: Exception in thread... pilas.iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5487#p5487"><![CDATA[
Resulta que la version de box2d del respositorio no funciona bien...<br />lo que tendrias que hacer es instalar box2d con los siguientes<br />comandos:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>cd<br />wget http://pybox2d.googlecode.com/files/Box2D-2.0.2b1.zip<br />unzip Box2D-2.0.2b1.zip<br />cd Box2D-2.0.2b1/<br />python setup.py build<br />sudo python setup.py install<br /></code></dd></dl><br /><br />es decir, la version 2.0.2b1<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar May 03, 2011 9:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ortizjavier]]></name></author>
<updated>2011-05-03T17:56:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5486#p5486</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5486#p5486"/>
<title type="html"><![CDATA[Re: Exception in thread... pilas.iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5486#p5486"><![CDATA[
Yo tengo el mismo problema sobre Ubuntu 10.04... Probé borrando el Box2d y reinstalándolo desde el repositorio (Repitiendo el paso del manual de instalación) y no pasa nada... <br /><br />Alguna idea de qué más investigar? Por dónde encarar y qué información puedo agregar?<br /><br />Gracias y saludos, Javier<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2429">ortizjavier</a> — Mar May 03, 2011 5:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[antiyanki]]></name></author>
<updated>2011-03-15T03:11:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5238#p5238</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5238#p5238"/>
<title type="html"><![CDATA[Re: Exception in thread... pilas.iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5238#p5238"><![CDATA[
me auto respondo (en realidad me lo contestaron por mail)<br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo rm -Rf /usr/local/lib/python2.6/dist-packages/Box2D-2.1b0-py2.6-linux-i686.egg<br /></code></dd></dl><br />así borramos box2d, luego lo reinstalamos desde el repo.<br />gracias a todos... anda<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2396">antiyanki</a> — Mar Mar 15, 2011 3:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[antiyanki]]></name></author>
<updated>2011-03-15T02:48:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5236#p5236</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5236#p5236"/>
<title type="html"><![CDATA[Re: Exception in thread... pilas.iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5236#p5236"><![CDATA[
HOla a mi no me anda... pero no desinstalé box2d... ¿cómo hago?<br />gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2396">antiyanki</a> — Mar Mar 15, 2011 2:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xtian]]></name></author>
<updated>2011-03-14T16:59:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5222#p5222</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5222#p5222"/>
<title type="html"><![CDATA[Re: Exception in thread... pilas.iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5222#p5222"><![CDATA[
Genial Hugo!!<br />Funcionó de maravillas, tuve que desinstalar el box2d que había instalado con el tutorial anterior y salió con fritas!!<br />Ahora me pongo la Pilas con Python a ver si llego con algo de training a la PyWeek que viene.<br />Mil gracias por tu rápida respuesta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2395">xtian</a> — Lun Mar 14, 2011 4:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-14T16:19:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5221#p5221</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5221#p5221"/>
<title type="html"><![CDATA[Re: Exception in thread... pilas.iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5221#p5221"><![CDATA[
Buenas gente, instalé Ubuntu 10.10 y escribí un tutorial (casi en tiempo record) de<br />cómo instalar pilas ahí.<br /><br />Le adelanto que instalarlo en esta versión de ubuntu es mucho mas simple que<br />antes, porque incorporaron box2d a los paquetes manetenidos por la comunidad.<br /><br />Les dejo el link al nuevo tutorial:<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/tutoriales/instalando_pilas_en_ubuntu_10_10/instalando_pilas_en_ubuntu_10_10.rst">http://www.pilas-engine.com.ar/doc/tuto ... _10_10.rst</a><!-- m --><br /><br />¿me avisan si todo les funciona ok?, tal vez habría que desinstalar la versión<br />de box2d que se instaló siguiendo el tutorial de la versión 10.4, no estoy seguro<br />de eso...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 14, 2011 4:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[antiyanki]]></name></author>
<updated>2011-03-14T14:13:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5218#p5218</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5218#p5218"/>
<title type="html"><![CDATA[Re: Exception in thread... pilas.iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5218#p5218"><![CDATA[
Hola Gente... recién arranco con pilas y tengo el mismo problema (mismo SO)...<br />Agrego nomás: la ventana con el personaje NO aparece....<br />quedo a la escucha de alguna solución<br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2396">antiyanki</a> — Lun Mar 14, 2011 2:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-14T14:06:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5216#p5216</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5216#p5216"/>
<title type="html"><![CDATA[Re: Exception in thread... pilas.iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5216#p5216"><![CDATA[
Que extraño... dame unas horas que instale ubuntu 10.10 y trate<br />de reproducir el problema, ya te aviso en cuanto tenga novedades.<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 14, 2011 2:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xtian]]></name></author>
<updated>2011-03-14T10:56:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5213#p5213</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5213#p5213"/>
<title type="html"><![CDATA[Exception in thread... pilas.iniciar()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1076&amp;p=5213#p5213"><![CDATA[
Buenos días al foro,<br />Soy nuevo en el mundo de Python y encontré en Pilas un recurso genial para poder aprender codeando, por lo menos en los tutoriales, porque no he podido hacerlo funcionar...<br /><br />Tengo Ubuntu 10.10 y realicé la instalación de acuedo al tutorial para el 10.04 pero al ejecutar pilas.iniciar me encuentro con lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&gt;&gt;&gt; pilas.iniciar()<br />&gt;&gt;&gt; Exception in thread Thread-1:<br />Traceback (most recent call last):<br />  File &quot;/usr/lib/python2.6/threading.py&quot;, line 532, in __bootstrap_inner<br />    self.run()<br />  File &quot;/usr/lib/python2.6/threading.py&quot;, line 484, in run<br />    self.__target(*self.__args, **self.__kwargs)<br />  File &quot;/usr/local/lib/python2.6/dist-packages/pilas-0.39-py2.6.egg/pilas/__init__.py&quot;, line 165, in __iniciar_y_ejecutar<br />    mundo = Mundo(ancho, alto, titulo, fps, economico)<br />  File &quot;/usr/local/lib/python2.6/dist-packages/pilas-0.39-py2.6.egg/pilas/mundo.py&quot;, line 56, in __init__<br />    self.fisica = pilas.fisica.Fisica()<br />  File &quot;/usr/local/lib/python2.6/dist-packages/pilas-0.39-py2.6.egg/pilas/fisica.py&quot;, line 22, in __init__<br />    self.mundo = box2d.b2World(self.escenario, self.gravedad, True)<br />  File &quot;/usr/local/lib/python2.6/dist-packages/Box2D-2.1b0-py2.6-linux-i686.egg/Box2D/Box2D.py&quot;, line 4440, in __init__<br />    raise ValueError(&quot;Only 'gravity, doSleep' can be passed as normal parameters.&quot;)<br />ValueError: Only 'gravity, doSleep' can be passed as normal parameters.<br /></code></dd></dl><br /><br />La verdad que supera mis conocimientos y no he podido dar con una solución googleando.<br />Si alguno tiene algún consejo o una puntita por donde empezar para resolver esto les estaría muy agradacido.<br /><br />Saludos<br />Xtian<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2395">xtian</a> — Lun Mar 14, 2011 10:56 am</p><hr />
]]></content>
</entry>
</feed>