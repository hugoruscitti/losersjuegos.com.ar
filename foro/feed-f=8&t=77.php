<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=77" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-12-04T23:32:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=77</id>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2007-12-04T23:32:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=717#p717</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=717#p717"/>
<title type="html"><![CDATA[Error en Python, sys.exit()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=717#p717"><![CDATA[
muchas gracias, no la conocía y me va a venir muy bien!!!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mar Dic 04, 2007 11:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-12-04T17:08:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=716#p716</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=716#p716"/>
<title type="html"><![CDATA[Error en Python, sys.exit()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=716#p716"><![CDATA[
<blockquote><div><cite>Dokan escribió:</cite><br />¿esa traduccion es tuya o de alguna web?<br /></div></blockquote><br /><br />Existe un proyecto de traducción al español de la documentación<br />de python:<br /><br />   <!-- m --><a class="postlink" href="http://pyspanishdoc.sourceforge.net/">http://pyspanishdoc.sourceforge.net/</a><!-- m --><br /><br />esa sección de la documentación está en:<br /><br />   <!-- m --><a class="postlink" href="http://pyspanishdoc.sourceforge.net/lib/module-sys.html">http://pyspanishdoc.sourceforge.net/lib/module-sys.html</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Dic 04, 2007 5:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2007-12-04T15:37:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=715#p715</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=715#p715"/>
<title type="html"><![CDATA[Error en Python, sys.exit()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=715#p715"><![CDATA[
¿esa traduccion es tuya o de alguna web?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mar Dic 04, 2007 3:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ominae]]></name></author>
<updated>2007-11-19T21:51:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=700#p700</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=700#p700"/>
<title type="html"><![CDATA[Error en Python, sys.exit()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=700#p700"><![CDATA[
<blockquote class="uncited"><div><br />sys.exit ([arg])<br />    Salir de Python. Se implementa lanzando una excepción SystemExit, por lo que se respetan las acciones de limpieza especificadas por cláusulas finally de las sentencias try y es posible interceptar el intento de salir en un nivel más externo. El argumento opcional arg puede ser un entero que indique el estado de la salida (por omisión, cero) u otro tipo de objeto. Si es entero, el cero se considera ``final con éxito'' y cualquier valor no cero se considera ``terminación anómala'' en intérpretes de órdenes y similares. La mayoría de los sistemas requieren que el valor está en el rango 0-127 y se comprotan de manera indeterminada en caso contrario. Algunos sistemas tienen una convención para asignar significados específicos a códigos de salida concretos, pero el tema no está muy desarrollado. Los programas de Unix suelen usar 2 para errores de sintaxis de la línea de órdenes y 1 para cualquier otro error. SI se pasa cualquier otro tipo de objeto, None equivale a pasar cero y cualquier otro objeto se presenta a sys.stderr y causa un código de salida 1. En particular, sys.exit(&quot;mensaje de error&quot;) es un sistema rápido de salir de un programa cuando hay un error.<br /></div></blockquote><br /><br />Mmm creo que lo que ocurre es que sys.exit() no solo termina el programa, si no que por lo visto también cierra el interprete python. Como dice al inicio, lanza una excepción que puede que windows interprete como un error de ejecución, de ahí el mensaje 'alarmista', pero no lo es.<br /><br />Bueno jej, esta es mi interpretación...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=11">ominae</a> — Lun Nov 19, 2007 9:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Shellman]]></name></author>
<updated>2007-11-19T21:14:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=698#p698</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=698#p698"/>
<title type="html"><![CDATA[Yo toy igual]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=698#p698"><![CDATA[
Ahora a mi tambien me esta saliendo este error, coloque la variable salir para que finalize el ciclo y no ciera la ventana de ejecucion, es como si no saliera del ciclo.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=439">Shellman</a> — Lun Nov 19, 2007 9:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ominae]]></name></author>
<updated>2007-04-17T16:13:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=270#p270</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=270#p270"/>
<title type="html"><![CDATA[Error en Python, sys.exit()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=270#p270"><![CDATA[
Ok, muchas gracias Hugo. Ahora estoy utilizando DrPython, que no esta nada mal y me va perfecto.<br /><br />(también me he pasado a Ubuntu <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" />  )<br /><br />Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=11">ominae</a> — Mar Abr 17, 2007 4:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-04-17T13:23:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=269#p269</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=269#p269"/>
<title type="html"><![CDATA[RE: Error en Python, sys.exit()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=269#p269"><![CDATA[
Hola, he intentado reproducir el mensaje que muestras pero no lo he<br />conseguido, de hecho, no parece un mensaje de error sino una notificación<br />de la excepción que produce sys.exit(), la excepción SystemExit.<br /><br />Si quieres puedes evitar ese mensaje modificando un poco el código del<br />ejemplo, la sentencia sys.exit() solo intenta terminar con la ejecución del<br />programa, lo cual podríamos reemplazar por una variable de condición llamada<br />'salir':<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />pygame.init&#40;&#41;<br /><br />size = width, height = 320, 240<br />speed = &#91;2, 2&#93;<br />black = 0, 0, 0<br /><br />screen = pygame.display.set_mode&#40;size&#41;<br /><br />ball = pygame.image.load&#40;&quot;ball.png&quot;&#41;<br />ballrect = ball.get_rect&#40;&#41;<br />salir = False<br /><br />while not salir:<br />    <br />    for event in pygame.event.get&#40;&#41;:<br />    <br />        if event.type == pygame.QUIT:<br />            salir = True<br />       <br />    ballrect = ballrect.move&#40;speed&#41;<br /><br />    if ballrect.left &lt; 0 or ballrect.right &gt; width:<br />        speed&#91;0&#93; = -speed&#91;0&#93;<br />        <br />    if ballrect.top &lt; 0 or ballrect.bottom &gt; height:<br />        speed&#91;1&#93; = -speed&#91;1&#93;<br /><br />    screen.fill&#40;black&#41;<br />    screen.blit&#40;ball, ballrect&#41;<br />    pygame.display.flip&#40;&#41;</code></dd></dl><br /><br />De todas formas, con respecto al mensaje que muestra sys.exit(), te comento que<br />probé el programa en Debian etch (4.0) con python 2.4.4 y <br />pygame 1.7. La documentación del módulo 'sys' donde se indica<br />que la implementación emite la<br />señal SystemExit está en <!-- m --><a class="postlink" href="http://docs.python.org/lib/module-sys.html">http://docs.python.org/lib/module-sys.html</a><!-- m --> por si quieres<br />investigarlo.<br /><br />Buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Abr 17, 2007 1:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ominae]]></name></author>
<updated>2007-04-16T19:10:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=266#p266</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=266#p266"/>
<title type="html"><![CDATA[Error en Python, sys.exit()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=77&amp;p=266#p266"><![CDATA[
Hola!<br />He empezado a estudiar un poco de PyGame y me surge siempre el mismo error con código distinto. No creo que tenga nada que ver con PyGame, mas bien parece del sys pero voy muy perdido e incluso el ejemplo de loosersjuegos llamado &quot;ball.py&quot; me peta.<br /><br />Os copio pego el error:<br /><span style="font-style: italic">Traceback (most recent call last):<br />  File &quot;C:\Documents and Settings\ominae\backup\Python\ball.py&quot;, line 18, in &lt;module&gt;<br />    sys.exit()<br />SystemExit</span><br /><br />Bueno, como podeis ver es en Windows XP, me sale el error al cerrar la ventana clickando sobre la X de la ventana. Uso Python 2.5 y PyGame 1.7.<br /><br />EDITO: Solo me sale este error cuando ejecuto el código en el IDLE oficial, clickando dos veces sobre el archivo .py o usando otro entorno y ejecutando sobre este no ocurre... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> <br /><br />Les agradezco su tiempo!!!<br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=11">ominae</a> — Lun Abr 16, 2007 7:10 pm</p><hr />
]]></content>
</entry>
</feed>