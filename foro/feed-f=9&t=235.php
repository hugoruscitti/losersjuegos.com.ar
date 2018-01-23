<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=235" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-02-07T18:48:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=235</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-02-07T18:48:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=880#p880</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=880#p880"/>
<title type="html"><![CDATA[Re: pygame en pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=880#p880"><![CDATA[
<blockquote><div><cite>revor escribió:</cite><br />tengo una pantalla de resolución 1280x1024 y m e gustaria saber si con pygame se puede crear un screen de, por ejemplo, 800x600 y que se estirara hasta ocupar la pantalla completa.<br /></div></blockquote><br /><br />Si, se puede. Solo tienes que especificarle a la función &quot;set_mode&quot; que<br />quieres un modo de pantalla completa:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>pygame.display.set_mode&#40;&#40;800, 600&#41;, pygame.FULLSCREEN&#41;</code></dd></dl><br /><br />el funcionamiento de la función es muy simple, imagina que tienes tu<br />escritorio en una resolución grande, por ejemplo 1280x1024, al ejecutar<br />la función, la biblioteca pygame (a traves de SDL) intenta cambiar<br />el modo de video de tu escritorio a 800x600 y muestra la ventana sin<br />decoración.<br /><br />Esto suele funcionar bien en cualquier sistema. Si por algún motivo<br />pygame no puede seleccionar esa resolución de video, intenta con otra<br />parecida. Luego, cuando cierras el programa pygame vuelve al modo de<br />video anterior.<br /><br />Ten en cuenta que pygame cuenta con una función para alternar entre<br />'pantalla completa' y 'ventana' dentro del programa. Esta función se<br />llama 'pygame.display.toggle_fullscreen', y actualmente solamente<br />funciona bien en sistemas GNU/Linux, no en Window ni Mac (creo).<br /><br />Quisiera dejar un programa de ejemplo sobre como utilizar estas<br />funciones. A continuación está el código de un programa que<br />muestra una ventana en pantalla completa. Con la tecla 'q' puedes<br />cerrar el programa, y con 'f' alterna entre 'pantalla completa' y<br />'ventana'. Pero claro, esto último solo funciona en sistemas GNU/Linux<br />porque utiliza la función 'toggle_fullscreen':<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br /><br />salir = False<br />pygame.init&#40;&#41;<br /><br /># Define el modo pantalla completa como modo inicial.<br />flags = pygame.FULLSCREEN | pygame.DOUBLEBUF<br />screen = pygame.display.set_mode&#40;&#40;800, 600&#41;, flags&#41;<br /><br /># Texto en pantalla<br />pygame.font.init&#40;&#41;<br />font = pygame.font.Font&#40;None, 50&#41;<br />color = &#40;255, 255, 255&#41;<br /><br /># Imprime en pantalla los mensajes de ayuda<br />msg = font.render&#40;&quot;Pulse 'q' para salir.&quot;, 1, color&#41;<br />screen.blit&#40;msg, &#40;20, 70&#41;&#41;<br />msg = font.render&#40;&quot;Pulse 'f' para alternar el modo de video.&quot;, 1, color&#41;<br />screen.blit&#40;msg, &#40;20, 150&#41;&#41;<br /><br /># Muestra los cambios en pantalla<br />pygame.display.flip&#40;&#41;<br /><br />while not salir:<br /><br />    for event in pygame.event.get&#40;&#41;:<br />        if event.type == pygame.KEYDOWN:<br />            # Permite terminar el programa<br />            if event.key == pygame.K_q:<br />                salir = True<br />            # Alterna entre 'pantalla completa' y 'ventana'.<br />            elif event.key == pygame.K_f:<br />                pygame.display.toggle_fullscreen&#40;&#41;<br /><br />    pygame.time.wait&#40;10&#41;<br /></code></dd></dl><br /><br /><br /><blockquote><div><cite>revor escribió:</cite><br />Cierto... es mas, ni pulsando alt+F4 se cierra...<br /></div></blockquote><br /><br />Ah, muy cierto. Igualmente te comento, si te llega a ocurrir nuevamente<br />puedes hacer lo siguiente: En GNU/Linux cuando una aplicación gráfica<br />se 'congela', lo que se suele hacer es ejecutar el comando 'xkill' y<br />seleccionar la ventana que no se puede cerrar con el puntero del mouse. Pero<br />cuidado, así puedes cerrar cualquier programa (funcione o no).<br /><br />Otra forma de cerrar un programa si algo falla es ir a una consola<br />(por ejemplo ALT+CTRL+F2) y usar los comandos 'ps -ax' y 'kill'. Hay<br />varios tutoriales sobre como usarlos por ahí...<br /><br />De todas formas uno generalmente incluye una sentencia de<br />código para cerrar el programa con una tecla como comenta<br />ominae, tener un atajo para cerrar la aplicación incluso te<br />ayuda a hacer pruebas mas rápidamente.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Feb 07, 2008 6:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-02-07T17:00:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=879#p879</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=879#p879"/>
<title type="html"><![CDATA[pygame en pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=879#p879"><![CDATA[
<blockquote><div><cite>ominae escribió:</cite><br />el problema con pygame a pantalla completa es que debes dar una posibilidad alternativa para cerrar el programa, ya que si solo asocias la salida de esta manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>for event in pygame.event.get&#40;&#41;:<br />      if event.type == QUIT:<br />         exit&#40;&#41;</code></dd></dl><br />El usuario no puede acceder a la 'X' de cerrar ventana. Por tanto se debe utilizar un método alternativo<br /></div></blockquote> Cierto... es mas, ni pulsando alt+F4 se cierra, como pasa con las ventanas normales (al menos en mi ubuntu).<br />Otra vez ya no me pilla desprevenido <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Feb 07, 2008 5:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[revor]]></name></author>
<updated>2008-02-03T10:29:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=875#p875</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=875#p875"/>
<title type="html"><![CDATA[pygame en pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=875#p875"><![CDATA[
gracias a los dos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> ahora mismo me pongo a provar esto.<br /><br />saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1880">revor</a> — Dom Feb 03, 2008 10:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ominae]]></name></author>
<updated>2008-02-02T21:47:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=874#p874</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=874#p874"/>
<title type="html"><![CDATA[pygame en pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=874#p874"><![CDATA[
el problema con pygame a pantalla completa es que debes dar una posibilidad alternativa para cerrar el programa, ya que si solo asocias la salida de esta manera:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>for event in pygame.event.get&#40;&#41;:<br />      if event.type == QUIT:<br />         exit&#40;&#41;<br /></code></dd></dl><br /><br />El usuario no puede acceder a la 'X' de cerrar ventana. Por tanto se debe utilizar un método alternativo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>for event in pygame.event.get&#40;&#41;:<br />   if event.type == QUIT:<br />      exit&#40;&#41;<br />   if event.type == KEYDOWN:<br />      if event.key == K_q:<br />         exit&#40;&#41;<br /><br /></code></dd></dl><br /><br />De esta forma se podrá salir del programa perfectamente pulsando la tecla 'q'.<br /><br />Un saludo!<br />Jaime Forcada Balaguer<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=11">ominae</a> — Sab Feb 02, 2008 9:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-02-02T15:36:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=873#p873</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=873#p873"/>
<title type="html"><![CDATA[pygame en pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=873#p873"><![CDATA[
Bienvenido al foro.<br /><br />Si por estirar te refieres a poder cambiar las dimensiones de la pantalla poniendo el ratón en el borde y arrastrando, como pasa normalmente con las ventanas, la cosa es fácil:<dl class="codebox"><dt>Code: </dt><dd><code>screen = pygame.display.set_mode&#40;&#40;800,600&#41;, pygame.RESIZABLE&#41;</code></dd></dl>Hay otros parámetros(&quot;flags&quot;) aparte del RESIZABLE que las puedes encontrar en <a href="http://www.pygame.org/docs/ref/display.html#pygame.display.set_mode" class="postlink">la domentación de pygame</a> (o a lo mejor dentro de un tiempo en la <a href="http://www.losersjuegos.com.ar/dev/doku.php/pygame/pygame" class="postlink">traducción del wiki</a>.<br /><br />PD: yo con el FULLSCREEN estaba haciendo pruebas en la consola y luego no sabia como cerrarlo y tuve que ir al ordenador de mi hermano a mirar artículos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Feb 02, 2008 3:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[revor]]></name></author>
<updated>2008-02-02T10:33:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=872#p872</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=872#p872"/>
<title type="html"><![CDATA[pygame en pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=235&amp;p=872#p872"><![CDATA[
hola, para empezar encantado de haver encontrado una web con tanto material, mis mas sinceras felicitaciones al/los admin/s.<br /><br />Aquí ba mi pregunta:<br />tengo una pantalla de resolución 1280x1024 y m e gustaria saber si con pygame se puede crear un screen de, por ejemplo, 800x600 y que se estirara hasta ocupar la pantalla completa.<br /><br />espero haberme expresado bien<br /><br />gracias por adelantado. saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1880">revor</a> — Sab Feb 02, 2008 10:33 am</p><hr />
]]></content>
</entry>
</feed>