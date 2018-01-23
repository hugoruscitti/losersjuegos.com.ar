<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=917" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-20T01:19:20+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=917</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-20T01:19:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4441#p4441</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4441#p4441"/>
<title type="html"><![CDATA[Re: python calendario]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4441#p4441"><![CDATA[
<blockquote><div><cite>e10erick escribió:</cite><br />muchas gracias<br /><br />pero disculpa una pregunta si yo quiero cambiar el calendario es decir precentar imagenes cuando le de click a los dias o elegir un<br />año cualquiera, lo puedo hacer en esta libreria?<br /></div></blockquote><br /><br />Sí, en casi todas las bibliotecas gráficas se puede hacer eso, solo tienes que<br />decirle a la biblioteca que haga algo (cómo mostrar una imagen) cuando se<br />produzca una señal como &quot;click&quot;.<br /><br />Te recomiendo ver tutoriales de gtk, pienso que te puede servir:<br /><br /><!-- m --><a class="postlink" href="http://www.pygtk.org/pygtk2tutorial-es/index.html">http://www.pygtk.org/pygtk2tutorial-es/index.html</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Nov 20, 2010 1:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[e10erick]]></name></author>
<updated>2010-11-19T23:56:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4438#p4438</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4438#p4438"/>
<title type="html"><![CDATA[Re: python calendario]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4438#p4438"><![CDATA[
muchas gracias<br /><br />pero disculpa una pregunta si yo quiero cambiar el calendario es decir precentar imagenes cuando le de click a los dias o elegir un<br />año cualquiera, lo puedo hacer en esta libreria?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2333">e10erick</a> — Vie Nov 19, 2010 11:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-10-29T14:29:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4335#p4335</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4335#p4335"/>
<title type="html"><![CDATA[Re: python calendario]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4335#p4335"><![CDATA[
Usando la biblioteca GTK podrías hacer algo así:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20101029/cal.png" alt="Imagen" /><br /><br />código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import gtk<br /><br />ventana = gtk.Window()<br />ventana.set_title(&quot;Titulo del calendario&quot;)<br /><br />calendario = gtk.Calendar()<br />ventana.add(calendario)<br /><br />ventana.connect('destroy', gtk.main_quit)<br /><br />ventana.show_all()<br />gtk.main()<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Oct 29, 2010 2:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[e10erick]]></name></author>
<updated>2010-10-27T06:19:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4324#p4324</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4324#p4324"/>
<title type="html"><![CDATA[python calendario]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=917&amp;p=4324#p4324"><![CDATA[
hola disculpen alguien podria ayudarme, nesesito hacer un calendario grafico en python pense en usar tkinter, pero ni idea alguien podria ayudarme, gracias de antemano<br />No puedo hacer uso de clases<br />el calendario debe ser capaz de uvicar cualquier fecha<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2333">e10erick</a> — Mié Oct 27, 2010 6:19 am</p><hr />
]]></content>
</entry>
</feed>