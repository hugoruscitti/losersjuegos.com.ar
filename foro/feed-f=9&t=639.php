<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=639" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-01-10T21:59:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=639</id>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2012-01-10T21:59:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=6397#p6397</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=6397#p6397"/>
<title type="html"><![CDATA[Re: pygame + pygtk]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=6397#p6397"><![CDATA[
Buenas estoy probando el codigo y estoy teniendo problemas cuando se ejecuta <br />os.putenv('SDL_WINDOWID', str(area.window.xid))<br /><br /><span style="font-weight: bold">os.putenv('SDL_WINDOWID', str(area.window.xid ))<br />AttributeError: xid attribute not supported</span><br /><br />Estoy ejecutandolo en windows que puede ser?.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Mar Ene 10, 2012 9:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-10-22T18:41:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3003#p3003</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3003#p3003"/>
<title type="html"><![CDATA[pygame + pygtk]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3003#p3003"><![CDATA[
<blockquote><div><cite>debianman escribió:</cite><br />los bucles tienen como controlador a clock.tick() <br />estube probando pygame.time.wait() y pygame.time.delay() pero al usar cualquiera de los dos y sin clock.tick() e igualmente usan el 100% de CPU, cuando lo uso con clock.tick() el juego se laguea...<br /><br />alguna idea?<br /></div></blockquote><br /><br />m..., pienso que al utilizar pygtk y pygame, tal vez se<br />pueda reducir la carga de procesador directamente desde pygtk.<br /><br />Por ejemplo, la función &quot;iddle_add&quot; del ejemplo que mostré en<br />el anterior ejemplo utilizará mucho CPU, porque intenta ejecutar<br />todo el tiempo la función loop.<br /><br />Ahora, para usar menos procesador se podría usar la función<br />&quot;gtk.timeout_add&quot; indicando cada cuanto tiempo se quiere ejecutar<br />la función &quot;loop&quot;. Por ejemplo, para ejecutar la función loop <br />60 veces por segundo tendrías que escribir:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>    # 1000.0 / 60 ~= 16.6^<br />    gtk.timeout_add&#40;16, loop&#41;<br /></code></dd></dl><br /><br />en lugar de &quot;iddle_add&quot; claro...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Oct 22, 2009 6:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[debianman]]></name></author>
<updated>2009-10-22T17:48:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3002#p3002</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3002#p3002"/>
<title type="html"><![CDATA[pygame + pygtk]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3002#p3002"><![CDATA[
los bucles tienen como controlador a clock.tick() <br />estube probando pygame.time.wait() y pygame.time.delay() pero al usar cualquiera de los dos y sin clock.tick() e igualmente usan el 100% de CPU, cuando lo uso con clock.tick() el juego se laguea...<br /><br />alguna idea?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2063">debianman</a> — Jue Oct 22, 2009 5:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-10-22T14:12:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3001#p3001</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3001#p3001"/>
<title type="html"><![CDATA[pygame + pygtk]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3001#p3001"><![CDATA[
<blockquote><div><cite>debianman escribió:</cite><br />ahora, con el tema que estoy topando es con el uso de la CPU, ya que al funcionar con loops infinitos, el consumo de CPU es casi del 100%, por casualidad sabes como controlar eso?<br /></div></blockquote><br /><br />Si, en la mayoría de juegos simplemente se coloca una pausa<br />para compartir CPU con el resto de los procesos del sistema<br />dentro del loop.<br /><br />La función en pygame para hacer esto se llama<br />&quot;pygame.time.wait(milisegundos)&quot;. Puedes ver mas detalles<br />sobre esto en la traducción de pygame docs:<br /><br />        <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/traducciones/pygame/time">http://www.losersjuegos.com.ar/traducciones/pygame/time</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Oct 22, 2009 2:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[debianman]]></name></author>
<updated>2009-10-21T20:17:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3000#p3000</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3000#p3000"/>
<title type="html"><![CDATA[pygame + pygtk]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=3000#p3000"><![CDATA[
gracias hugo por tus respuestas, te cuento<br /><br />logre hacer funcionar pygame dentro de pygtk (todabia no habia visto tus mensajes), el cuento con el que me tope, es el manejo de los eventos, en especifico del mouse, pero ya lo solucione y el juego quedo casi tal cual como lo tengo en pygame, puedes descargarlo desde el link [1], ademas puede que le sirva a otros como realizar lo mismo o algo parecido.<br /><br />ahora, con el tema que estoy topando es con el uso de la CPU, ya que al funcionar con loops infinitos, el consumo de CPU es casi del 100%, por casualidad sabes como controlar eso?<br /><br /><br />saludos y gracias por la ayuda<br /><br />[1]http://carlos.debianchile.cl/files/arkathon/test/arkathon0.5.tar.gz<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2063">debianman</a> — Mié Oct 21, 2009 8:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-10-20T01:41:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2999#p2999</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2999#p2999"/>
<title type="html"><![CDATA[pygame + pygtk]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2999#p2999"><![CDATA[
Aquí escribí un programa que hace algo similar a lo que<br />nos comentas, pero que no bloquea. Básicamente<br />imprime un mensaje en pantalla y cada vez que pulsamos<br />una tecla genera una nueva ventana de pygtk.<br /><br />Y la ventana original también está hecha con pygtk y pygame:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import os<br /><br />import gobject<br />import gtk<br />import pygame<br /><br />WINX = 400<br />WINY = 200<br /><br />window = gtk.Window&#40;&#41;<br />window.connect&#40;'delete-event', gtk.main_quit&#41;<br />window.set_resizable&#40;False&#41;<br /><br />area = gtk.DrawingArea&#40;&#41;<br />area.set_app_paintable&#40;True&#41;<br />area.set_size_request&#40;WINX, WINY&#41;<br />window.add&#40;area&#41;<br />area.realize&#40;&#41;<br /><br /># Force SDL to write on our drawing area<br />os.putenv&#40;'SDL_WINDOWID', str&#40;area.window.xid&#41;&#41;<br /><br /># We need to flush the XLib event loop otherwise we can't<br /># access the XWindow which set_mode&#40;&#41; requires<br />gtk.gdk.flush&#40;&#41;<br /><br />pygame.init&#40;&#41;<br />pygame.display.set_mode&#40;&#40;WINX, WINY&#41;, 0, 0&#41;<br />screen = pygame.display.get_surface&#40;&#41;<br /><br />color = &#40;0, 0, 0&#41;<br />message = pygame.font.Font&#40;None, 30&#41;<br />img = message.render&#40;&quot;Pulse el mouse para crear otra ventana&quot;, 1, color&#41;<br /><br />def loop&#40;&#41;:<br />    &quot;Se llama constantemente en todo momento.&quot;<br />    screen.fill&#40;&#40;255, 255, 255&#41;&#41;<br />    screen.blit&#40;img, &#40;0, 0&#41;&#41;<br /><br />    pygame.display.update&#40;&#41;<br />    return True<br /><br />def on_event&#40;widget, event&#41;:<br />    &quot;Se activa cada vez que se produce un evento.&quot;<br /><br />    if event.type == gtk.gdk.KEY_PRESS:<br />        other = gtk.Window&#40;&#41;<br />        label = gtk.Label&#40;&quot;Hola&quot;&#41;<br />        other.add&#40;label&#41;<br />        other.set_size_request&#40;200, 70&#41;<br />        other.show_all&#40;&#41;<br /><br /><br />window.connect&#40;&quot;event&quot;, on_event&#41;<br /><br />gobject.idle_add&#40;loop&#41;<br />window.show_all&#40;&#41;<br /><br />gtk.main&#40;&#41;<br /></code></dd></dl><br /><br />Eso sí, si quieres crear una ventana desde algo que no es<br />una respuesta a un evento tendrías que utilizar idle_add o<br />algo similar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Oct 20, 2009 1:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-10-20T01:11:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2998#p2998</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2998#p2998"/>
<title type="html"><![CDATA[pygame + pygtk]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2998#p2998"><![CDATA[
¿podrías contarnos un poco de la aplicación?, recuerda que<br />en python puedes crear hilos si tu programa hace mas de<br />una cosa a la vez.<br /><br />Aunque pygame no soporta varias ventanas al mismo tiempo, ¿tal<br />vez ese sea el problema?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Oct 20, 2009 1:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[debianman]]></name></author>
<updated>2009-10-19T19:16:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2997#p2997</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2997#p2997"/>
<title type="html"><![CDATA[pygame + pygtk]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2997#p2997"><![CDATA[
ya habia leido eso, pero la compatibilidad es extremadamente mala, por ejemplo, desde un menu en pygame lanzo una ventana pygtk, esta ventana funciona si se lanza sola pero desde pygame se traba y deja a la ventana pygame bloqueada<br /><br />alguna idea?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2063">debianman</a> — Lun Oct 19, 2009 7:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-10-16T01:16:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2994#p2994</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2994#p2994"/>
<title type="html"><![CDATA[pygame + pygtk]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2994#p2994"><![CDATA[
Yo nunca intenté, pero aparentemente sí se puede:<br /><br />   <!-- m --><a class="postlink" href="http://faq.pygtk.org/index.py?file=faq23.042.htp&amp;req=show">http://faq.pygtk.org/index.py?file=faq2 ... p&amp;req=show</a><!-- m --><br /><br />saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Oct 16, 2009 1:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[debianman]]></name></author>
<updated>2009-10-15T20:22:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2992#p2992</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2992#p2992"/>
<title type="html"><![CDATA[pygame + pygtk]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=639&amp;p=2992#p2992"><![CDATA[
hola a todos...<br /><br />hace algun tiempo desarrolle un clon de arkanoid con pygame, la duda que tengo es como ese juego integrarlo en una ventana gtk...<br /><br />e leido algunas cosas, como por ejemplo, incrustar una ventana pygame en gtk o ejecutar directamente la aplicacion pygame dentro de una ventana gtk<br /><br />alguien a realizado algo parecido?<br /><br />saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2063">debianman</a> — Jue Oct 15, 2009 8:22 pm</p><hr />
]]></content>
</entry>
</feed>