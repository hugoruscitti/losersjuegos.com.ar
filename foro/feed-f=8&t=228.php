<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=228" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-01-15T18:45:53+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=228</id>
<entry>
<author><name><![CDATA[Stoudemire]]></name></author>
<updated>2008-01-15T18:45:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=848#p848</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=848#p848"/>
<title type="html"><![CDATA[Pygame. No se elimina la imagen anterior...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=848#p848"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />Primero ten en cuenta que limpiar toda la pantalla con un solo color es muy<br />rápido, y no supone nada de esfuerzo para ti ni para el sistema. Tal vez<br />el problema original de tu programa es que realizas la impresión<br />en pantalla dos veces ...<br /></div></blockquote><br /><br />Si limpiar toda la pantalla es tarea facil, pero luego me toca recolocar de nuevo las imagenes en su sitio. Por esto que buscaba una solucion  para solo modificar ciertas zonas de la pantalla en las que se van a llevar a cabo los cambios.<br /><br />Leere lo que me comentas acerca de &quot;Dirty Rectangles&quot; que me parece bastante interesante.<br /><br />Ya empiezo a coger el truco a este lenguaje. Es como todo, una vez que sabes c++ por ejemplo ya solamente es buscar las similitudes para guiarte.<br /><br />Gracias por la ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1873">Stoudemire</a> — Mar Ene 15, 2008 6:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-01-15T14:04:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=845#p845</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=845#p845"/>
<title type="html"><![CDATA[Pygame. No se elimina la imagen anterior...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=845#p845"><![CDATA[
<blockquote><div><cite>Stoudemire escribió:</cite><br />Como podria solamente borrar una determinada imagen o zona de la pantalla? Lo digo para no tener que pintar el fondo y volver a poner imagenes sobre el de nuevo tras realizar una minima modificacion.<br /></div></blockquote><br /><br />Primero ten en cuenta que limpiar toda la pantalla con un solo color es muy<br />rápido, y no supone nada de esfuerzo para ti ni para el sistema. Tal vez<br />el problema original de tu programa es que realizas la impresión<br />en pantalla dos veces ...<br /><br />Si de todas formas quieres agilizar la impresión en pantalla tal vez te<br />sirva leer acerca de la técnica &quot;Dirty Rectangles&quot;:<br /><br />   <!-- m --><a class="postlink" href="http://prog.vjuegos.org/index.php?option=com_content&amp;task=view&amp;id=128&amp;Itemid=148">http://prog.vjuegos.org/index.php?optio ... Itemid=148</a><!-- m --><br /><br />En pygame puedes implementar esto por tu cuenta, o bién hacer uso del grupo<br />RenderUpdates. Te dejo los comandos que debes ejecutar en consola para acceder<br />a la ayuda de este módulo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>$ python<br />&gt;&gt;&gt; import pygame<br />&gt;&gt;&gt; help&#40;pygame.sprite.RenderUpdates&#41;</code></dd></dl><br /><br />El grupo RenderUpdates se encarga de imprimir objetos Sprites sobre la<br />pantalla y restaurar solo las zonas de pantalla que han sido modificadas.<br /><br />Tal vez te sirva ver los ejemplos sobre pygame de nuestra charla en el evento<br />CaFeCONF, ahí usamos grupos en pygame:<br /><br />  <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/videos/python_y_pygame_cafeconf_2007/python_y_pygame_cafeconf_2007.php">http://www.losersjuegos.com.ar/referenc ... f_2007.php</a><!-- m --><br /><br />Para finalizar, reitero mi recomendación inicial: no te preocupes tanto por los<br />detalles ahora, en su lugar experimenta con la biblioteca para hacer algo útil<br />(como un mini-juego). Luego ganarás experiencia para hacer cosas mas complejas<br />como optimizar las impresiones en pantalla con la técnica que te comenté.<br /><br />Un Saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Ene 15, 2008 2:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-01-15T06:42:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=843#p843</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=843#p843"/>
<title type="html"><![CDATA[Pygame. No se elimina la imagen anterior...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=843#p843"><![CDATA[
Al dibujar un elemento, sabes en qué posición lo dibujaste, sólo borra el espacio que ocupaba antes de moverse a su nueva posición, es decir, usa las coordenadas anteriores y sólo borra esa parte. O dibuja esa sección de la imagen de fondo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mar Ene 15, 2008 6:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Stoudemire]]></name></author>
<updated>2008-01-15T01:36:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=840#p840</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=840#p840"/>
<title type="html"><![CDATA[Pygame. No se elimina la imagen anterior...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=840#p840"><![CDATA[
Como podria solamente borrar una determinada imagen o zona de la pantalla? Lo digo para no tener que pintar el fondo y volver a poner imagenes sobre el de nuevo tras realizar una minima modificacion.<br /><br />gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1873">Stoudemire</a> — Mar Ene 15, 2008 1:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Stoudemire]]></name></author>
<updated>2008-01-14T19:48:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=838#p838</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=838#p838"/>
<title type="html"><![CDATA[Pygame. No se elimina la imagen anterior...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=838#p838"><![CDATA[
Gracias por responder. Lo del PASS ese, es que lo cogi del ejemplo que habia en una web que explicaba el movimiento.<br /><br />Ya lo e solucionado, de forma algo sucia pero nose si sera la correcta. Os pongo el codigo y ya me comentais:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />while True:<br />    ##screen.fill&#40;&#40;0, 0, 0&#41;&#41;<br /><br />    <br />    for event in pygame.event.get&#40;&#41;:<br />       <br />        pass<br />    <br />    tecla_pressionada = pygame.key.get_pressed&#40;&#41;<br />     <br />    if tecla_pressionada&#91;K_LEFT&#93;:<br />        if posborde == 1:<br />            xpos = 390<br />            posborde=3<br />        else:<br />            xpos -= 130<br />            posborde -=1<br />            <br />        screen.fill&#40;&#40;0, 0, 0&#41;&#41;<br />        ##pygame.display.update&#40;&#41;<br />        screen.blit&#40;text, &#40;90, 10&#41;&#41;<br />        screen.blit&#40;oscar, &#40;130,90&#41;&#41;<br />        screen.blit&#40;roman, &#40;260,90&#41;&#41;<br />        screen.blit&#40;mixel, &#40;390,90&#41;&#41;<br />        screen.blit&#40;borde, &#40;xpos,ypos&#41;&#41;<br />        mostrar_habilidades&#40;posborde&#41;<br />        soundborde.play&#40;&#41;<br />        ##pygame.display.flip&#40;&#41;<br />        ##pygame.display.update&#40;&#41;<br />        <br />    elif tecla_pressionada&#91;K_RIGHT&#93;:<br />        if posborde==3:<br />            xpos=130<br />            posborde=1<br />        else:<br />            xpos+=130<br />            posborde+=1<br />            <br />        screen.fill&#40;&#40;0, 0, 0&#41;&#41;<br />        ##pygame.display.update&#40;&#41;<br />        screen.blit&#40;text, &#40;90, 10&#41;&#41;<br />        screen.blit&#40;oscar, &#40;130,90&#41;&#41;<br />        screen.blit&#40;roman, &#40;260,90&#41;&#41;<br />        screen.blit&#40;mixel, &#40;390,90&#41;&#41;<br />        screen.blit&#40;borde, &#40;xpos,ypos&#41;&#41;<br />        mostrar_habilidades&#40;posborde&#41;<br />        soundborde.play&#40;&#41;<br />        ##pygame.display.flip&#40;&#41;<br />        ##pygame.display.update&#40;&#41;<br />            <br />    ##screen.fill&#40;&#40;0, 0, 0&#41;&#41;<br />    ##screen.blit&#40;borde, &#40;xpos,ypos&#41;&#41;<br />    ##pygame.display.flip&#40;&#41;<br />    pygame.display.update&#40;&#41;<br />        ##screen.blit&#40;borde, &#40;130,90&#41;&#41;<br />    pygame.time.wait&#40;100&#41;<br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1873">Stoudemire</a> — Lun Ene 14, 2008 7:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-01-14T18:11:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=837#p837</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=837#p837"/>
<title type="html"><![CDATA[Pygame. No se elimina la imagen anterior...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=837#p837"><![CDATA[
Hola, antes de nada, veo que es tu primer mensaje, Bienvenido al foro.<br />Primero: sería conveniente que pusieses el código completo en el mensaje, así se puede ver como funciona todo el programa y correrlo para simular el error. <br />Pero por lo que he leído veo cosas que me parecen extrañas: ese &quot;pass&quot; me intriga, tengo entendido que se utiliza para hacer declaraciones nulas, que función tiene? Y la otra cosa es que el &quot;pygame.display.flip()&quot; se suele poner dentro del bucle principal, pero no dentro del control de eventos, sino al mismo nivel que este.<br /><br />Segundo: a parte del foro, en la web hay bastante material que ayuda mucho, en especial hay <a href="http://www.losersjuegos.com.ar/referencia/articulos/moveit/moveit.php" class="postlink">este</a> que trata sobre el problema que tu dices.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Ene 14, 2008 6:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-01-14T18:10:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=836#p836</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=836#p836"/>
<title type="html"><![CDATA[Re: Pygame. No se elimina la imagen anterior...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=836#p836"><![CDATA[
<blockquote><div><cite>Stoudemire escribió:</cite><br />El caso es que la imagen se mueve pero no desaparece la anterior. Como puedo solucionarlo?.<br /></div></blockquote>Hola, justo antes de comenzar a escribir sobre &quot;screen&quot;<br />podrías limpiar la pantalla con un color uniforme:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>screen.fill&#40;&#40;200, 200, 200&#41;&#41;<br />screen.blit&#40;borde, &#40;xpos,ypos&#41;&#41;</code></dd></dl><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ene 14, 2008 6:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Stoudemire]]></name></author>
<updated>2008-01-14T17:02:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=835#p835</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=835#p835"/>
<title type="html"><![CDATA[Pygame. No se elimina la imagen anterior...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=228&amp;p=835#p835"><![CDATA[
Saludos. Tengo un problema con el siguiente codigo. El caso es que la imagen se mueve pero no desaparece la anterior. Como puedo solucionarlo?. Gracias.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />xpos=130<br />ypos=90<br />posborde=1<br /><br />while True:<br />    <br /><br />    <br />    for event in pygame.event.get&#40;&#41;:<br />       <br />        pass<br />        tecla_pressionada = pygame.key.get_pressed&#40;&#41;<br />     <br />        if tecla_pressionada&#91;K_LEFT&#93;:<br />            if posborde == 1:<br />                xpos = 390<br />                posborde=3<br />            else:<br />                xpos -= 130<br />                posborde -=1<br />        if tecla_pressionada&#91;K_RIGHT&#93;:<br />            if posborde==3:<br />                xpos=130<br />                posborde=1<br />            else:<br />                xpos+=130<br />                posborde+=1<br />     <br />        screen.blit&#40;borde, &#40;xpos,ypos&#41;&#41;<br />        pygame.display.flip&#40;&#41;<br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1873">Stoudemire</a> — Lun Ene 14, 2008 5:02 pm</p><hr />
]]></content>
</entry>
</feed>