<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1275" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-01-10T19:01:57+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1275</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-01-10T19:01:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=6392#p6392</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=6392#p6392"/>
<title type="html"><![CDATA[Re: Desarrollar aplicaciones sobre GNU/Linux]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=6392#p6392"><![CDATA[
si usaras Parabola, solo tendrías que hacer <span style="font-weight: bold">pacman -Ql <span style="font-style: italic">paquete</span></span> para saber la ubicación de cada archivo instalado por el paquete <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge@Abril:~$ pacman -Ql django | head -n30<br />django /etc/<br />django /etc/bash_completion.d/<br />django /etc/bash_completion.d/django<br />django /usr/<br />django /usr/bin/<br />django /usr/bin/django-admin.py<br />django /usr/lib/<br />django /usr/lib/python2.7/<br />django /usr/lib/python2.7/site-packages/<br />django /usr/lib/python2.7/site-packages/Django-1.3.1-py2.7.egg-info<br />django /usr/lib/python2.7/site-packages/django/<br />django /usr/lib/python2.7/site-packages/django/__init__.py<br />django /usr/lib/python2.7/site-packages/django/__init__.pyc<br />django /usr/lib/python2.7/site-packages/django/__init__.pyo<br />django /usr/lib/python2.7/site-packages/django/bin/<br />django /usr/lib/python2.7/site-packages/django/bin/__init__.py<br />django /usr/lib/python2.7/site-packages/django/bin/__init__.pyc<br />django /usr/lib/python2.7/site-packages/django/bin/__init__.pyo<br />django /usr/lib/python2.7/site-packages/django/bin/daily_cleanup.py<br />django /usr/lib/python2.7/site-packages/django/bin/daily_cleanup.pyc<br />django /usr/lib/python2.7/site-packages/django/bin/daily_cleanup.pyo<br />django /usr/lib/python2.7/site-packages/django/bin/django-admin.py<br />django /usr/lib/python2.7/site-packages/django/bin/django-admin.pyc<br />django /usr/lib/python2.7/site-packages/django/bin/django-admin.pyo<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/__init__.py<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/__init__.pyc<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/__init__.pyo<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/gather_profile_stats.py<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/gather_profile_stats.pyc<br />jorge@Abril:~$ <br /></code></dd></dl><br /><br />Pero bueno, no sé porque tanta gente usa APT-GET, creo que incluso se puede usar PACMAN en sistemas basados en Debian GNU/Linux (de esa familia recomiendo <a href="http://trisquel.info/es" class="postlink">Trisquel</a> porque respeta tu libertad!).<br /><br />saludos! :p<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mar Ene 10, 2012 7:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-09-16T04:28:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=5937#p5937</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=5937#p5937"/>
<title type="html"><![CDATA[Re: Desarrollar aplicaciones sobre GNU/Linux]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=5937#p5937"><![CDATA[
cuando instalas bibliotecas se van a un directorio especifico por defecto que es /usr/lib y las cabeceras se van a /usr/include<br />aveces cuando tienen el codigo fuente de una biblioteca te lo va a poner en /usr/local/lib y /usr/local/include sin embargo<br />cuando un programa requiere una biblioteca dinamica la busca en /usr/lib a menos que especifiques una ubicación mas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Sep 16, 2011 4:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2011-09-16T03:51:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=5936#p5936</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=5936#p5936"/>
<title type="html"><![CDATA[Desarrollar aplicaciones sobre GNU/Linux]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=5936#p5936"><![CDATA[
Hola comunidad pues ya ando dando mis pasos sobre Python y Pygame y otras cosas mas, ahora e tomado la desición de irme a desarrollar las aplicaciones directamente sobre GNU/Linux, especificamente sobre Debian, bueno mi duda es,veran, sobre windows la carpeta python se crea donde tu quieras especificamente en C:/Python26 ya de ahi tiene todo lo que necesitas, pero sobre linux no encuentro sus librerias, tambien no se donde pone mis librerias cuando las instalo.<br />Estoy incursionando en:<br />1)Python 2.6<br />2)Django<br />3)Pygtk<br />4)SQLITE<br />5)Blender3D<br />6)Panda3D<br /><br />Espero avanzar rapido para dar aportes a la comunidad, cuidense y gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Vie Sep 16, 2011 3:51 am</p><hr />
]]></content>
</entry>
</feed>