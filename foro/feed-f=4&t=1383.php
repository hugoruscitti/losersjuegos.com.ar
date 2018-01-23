<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1383" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-01-10T21:56:57+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1383</id>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2012-01-10T21:56:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1383&amp;p=6396#p6396</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1383&amp;p=6396#p6396"/>
<title type="html"><![CDATA[os.putenv('SDL_WINDOWID', str(area.window.xid))]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1383&amp;p=6396#p6396"><![CDATA[
Buenas estoy tratando de integrar pygtk con pygame, pero al ejecutar la linea <br />os.putenv('SDL_WINDOWID', str(area.window.xid))<br />me da error:<br /><br /><span style="font-weight: bold">os.putenv('SDL_WINDOWID', str(area.window.xid ))<br />AttributeError: xid attribute not supported</span><br /><br />Por lo que anduve viendo supuestamente el error es porque no puedo obtener el xid en &quot;Windows&quot; y si funciona en Linux. Como puedo hacer para que funcione en windows?, hay algún comando similar?<br /><br />Pongo el ejemplo que estoy probando para que vean todo el codigo, al eje lo saque de este foro de la siguiente url: <!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=9&amp;t=639">viewtopic.php?f=9&amp;t=639</a><!-- l --><br /><br />Codigo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>import gobject<br />import gtk<br />import os<br />import pygame<br /><br />WINX = 400<br />WINY = 200<br /><br />window = gtk.Window()<br />window.connect('delete-event', gtk.main_quit)<br />window.set_resizable(False)<br /><br />area = gtk.DrawingArea()<br />area.set_app_paintable(True)<br />area.set_size_request(WINX, WINY)<br />window.add(area)<br />area.realize()<br /><br /># Force SDL to write on our drawing area<br />os.putenv('SDL_WINDOWID', str(area.window.xid ))<br /><br /><br /># We need to flush the XLib event loop otherwise we can't<br /># access the XWindow which set_mode() requires<br />gtk.gdk.flush()<br /><br />pygame.init()<br />pygame.display.set_mode((WINX, WINY), 0, 0)<br />screen = pygame.display.get_surface()<br /><br />color = (0, 0, 0)<br />message = pygame.font.Font(None, 30)<br />img = message.render(&quot;Pulse el mouse para crear otra ventana&quot;, 1, color)<br /><br />def loop():<br />    &quot;Se llama constantemente en todo momento.&quot;<br />    screen.fill((255, 255, 255))<br />    screen.blit(img, (0, 0))<br /><br />    pygame.display.update()<br />    return True<br /><br />def on_event(widget, event):<br />    &quot;Se activa cada vez que se produce un evento.&quot;<br /><br />    if event.type == gtk.gdk.KEY_PRESS:<br />        other = gtk.Window()<br />        label = gtk.Label(&quot;Hola&quot;)<br />        other.add(label)<br />        other.set_size_request(200, 70)<br />        other.show_all()<br /><br /><br />window.connect(&quot;event&quot;, on_event)<br /><br />gobject.idle_add(loop)<br />window.show_all()<br /><br />gtk.main()</code></dd></dl><br /><br />Saludos y gracias!<br />Diego<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Mar Ene 10, 2012 9:56 pm</p><hr />
]]></content>
</entry>
</feed>