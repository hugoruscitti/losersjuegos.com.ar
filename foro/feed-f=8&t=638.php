<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=638" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-11-15T03:12:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=638</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-11-15T03:12:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=3045#p3045</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=3045#p3045"/>
<title type="html"><![CDATA[Bug en controles [Pygame]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=3045#p3045"><![CDATA[
A mi me gustan las dos versiones, y si tengo que<br />elegir solo una me quedo con la versión de Juanxo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Nov 15, 2009 3:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-11-15T01:12:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=3044#p3044</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=3044#p3044"/>
<title type="html"><![CDATA[Bug en controles [Pygame]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=3044#p3044"><![CDATA[
vale, jooo, voy a saltar desde un quinto ahora vuelvo!!<br /><br />si, es cierto que la solución de hugo es mejor, principalmente por lo que ha dicho, demostrando una cierta vision de futuro (será la experiencia), pero ten en cuenta la diferencia de experiencia y de conocimiento de uno y de otro.<br /><br />de ahora en adelante cuidaré más mis exposiciones.<br /><br />gracias por el comentario shackra, mejor saber que permanecer ignorante de mis errores.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Nov 15, 2009 1:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2009-11-14T20:05:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=3042#p3042</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=3042#p3042"/>
<title type="html"><![CDATA[Bug en controles [Pygame]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=3042#p3042"><![CDATA[
quien es mas ordenado a la hora de escribir codigo?, hugoruscitti ó Juanxo:<br /><br /><br /><blockquote class="uncited"><div><br />hugoruscitti<dl class="codebox"><dt>Code: </dt><dd><code>while True:<br />        CLOCK.tick&#40;60&#41;<br /><br />        for event in pygame.event.get&#40;&#41;:<br />            if event.type == QUIT:<br />                sys.exit&#40;0&#41;<br /><br />        keys = pygame.key.get_pressed&#40;&#41;<br /><br />        # realiza movimientos.<br /><br />        if keys&#91;K_RIGHT&#93;:<br />            ship.vel&#91;0&#93; = 3<br /><br />        if keys&#91;K_LEFT&#93;:<br />            ship.vel&#91;0&#93; = -3<br /><br /><br />        # detiene el movimiento.<br />        if ship.vel&#91;0&#93; &gt; 0:      # si esta llendo hacia la derecha.<br />            if not keys&#91;K_RIGHT&#93;:<br />                ship.vel&#91;0&#93; = 0<br />        elif ship.vel&#91;0&#93; &lt; 0:<br />            if not keys&#91;K_LEFT&#93;:<br />                ship.vel&#91;0&#93; = 0<br /><br />        shipSprite.update&#40;&#41;<br />        laserSprite.update&#40;&#41;<br />        enemySprite.update&#40;&#41;<br />        enemyLaserSprite.update&#40;&#41; </code></dd></dl><br /></div></blockquote><br /><br /><blockquote class="uncited"><div><br />Juanxo<dl class="codebox"><dt>Code: </dt><dd><code>teclado = pygame.key.get_pressed&#40;&#41;<br /><br />for event in pygame.event.get&#40;&#41;:<br />            if event.type == QUIT:<br />                sys.exit&#40;0&#41;<br />            elif event.type == KEYDOWN:<br />                if event.key == K_RIGHT:<br />                    ship.vel&#91;0&#93; = 3<br />                elif event.key == K_LEFT:<br />                    ship.vel&#91;0&#93; = -3<br />                elif event.key == K_SPACE:<br />                    laserSprite.add&#40;Shoot&#40;ship.rect.midtop&#41;&#41;<br />            elif event.type == KEYUP:<br />                if event.key == K_RIGHT and teclado&#91;K_LEFT&#93;:<br />                    ship.vel&#91;0&#93; = -3<br />                elif event.key == K_LEFT and teclado&#91;K_RIGHT&#93;:<br />                    ship.vel&#91;0&#93; = 3<br />                elif event.key == K_RIGHT or event.key == K_LEFT:<br />                    ship.vel&#91;0&#93; = 0 </code></dd></dl><br /></div></blockquote><br /><br />sin duda, hugoruscitti xD.<br />perfiles vemos, estilos no sabemos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Nov 14, 2009 8:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Garolard]]></name></author>
<updated>2009-10-16T14:31:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2996#p2996</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2996#p2996"/>
<title type="html"><![CDATA[Bug en controles [Pygame]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2996#p2996"><![CDATA[
Que maestros!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  muchas gracias por la explicación a ambos, al final me ha quedado bastante claro que estaba fallando. Al final he seguido vuestros consejos y ahora los controles van fijos como la seda!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br />Muchísimas gracias a los dos, espero segiur pasándome mucho por aquí para aprender más cosas (a parte de esta xD) sobre la programación de videojuegos.<br /><br />En un futuro espero pasar a usar C++ y entonces seguramente me pase el día por aquí preguntando dudas xD.<br /><br />Saludos y de nuevo muchas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2155">Garolard</a> — Vie Oct 16, 2009 2:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-10-16T01:29:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2995#p2995</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2995#p2995"/>
<title type="html"><![CDATA[Bug en controles [Pygame]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2995#p2995"><![CDATA[
Recuerda que pygame tiene nos modos para gestionar<br />el teclado, y generalmente los eventos no son el<br />modo preferido...<br /><br />Intenta lo siguiente, tal vez así resulte mas sencillo<br />resolver la simultaneidad de teclas: pygame tiene una<br />función llamada &quot;get_pressed()&quot; que obtiene todo el<br />mapa de teclado de una sola vez.<br /><br />Así, el algoritmo de pulsación de teclas quedaría de<br />la siguiente manera:<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>while True:<br />        CLOCK.tick&#40;60&#41;<br /><br />        for event in pygame.event.get&#40;&#41;:<br />            if event.type == QUIT:<br />                sys.exit&#40;0&#41;<br /><br />        keys = pygame.key.get_pressed&#40;&#41;<br /><br />        # realiza movimientos.<br /><br />        if keys&#91;K_RIGHT&#93;:<br />            ship.vel&#91;0&#93; = 3<br /><br />        if keys&#91;K_LEFT&#93;:<br />            ship.vel&#91;0&#93; = -3<br /><br /><br />        # detiene el movimiento.<br />        if ship.vel&#91;0&#93; &gt; 0:      # si esta llendo hacia la derecha.<br />            if not keys&#91;K_RIGHT&#93;:<br />                ship.vel&#91;0&#93; = 0<br />        elif ship.vel&#91;0&#93; &lt; 0:<br />            if not keys&#91;K_LEFT&#93;:<br />                ship.vel&#91;0&#93; = 0<br /><br />        shipSprite.update&#40;&#41;<br />        laserSprite.update&#40;&#41;<br />        enemySprite.update&#40;&#41;<br />        enemyLaserSprite.update&#40;&#41;<br /></code></dd></dl><br /><br /><br />Si, en principio es mas código, pero resulta mas sencillo de adaptar<br />a nuevas situaciones y no tendrás problemas de sincronización. Al menos<br />a mí me parece una solución que te pueda resultar.<br /><br />PD: no, yo tampoco probé el código...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Oct 16, 2009 1:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-10-16T00:53:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2993#p2993</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2993#p2993"/>
<title type="html"><![CDATA[Bug en controles [Pygame]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2993#p2993"><![CDATA[
Buenas Garolard:<br /><br />Lo primero darte la bienvenida a LosersJuegos.<br /><br />Lo segundo, decirte que el motivo de que te ocurra esto que comentas se debe a lo siguiente:<br />En tu bucle, compruebas si los eventos que has creado son del tipo KEYDOWN. El problema radica en el hecho de que cuando pulsas la tecla derecha, se crea un evento KEYDOWN de esa tecla. Lo mismo pasa cuando pulsas la tecla izquierda. Pero cuando levantas la tecla izquierda, no se genera ningun evento keydown, puesto que solo se generan en el momento de la pulsacion, por lo que la velocidad se queda a 0.<br /><br />Un método algo guarrillo quizas, sería el siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />teclado = pygame.key.get_pressed&#40;&#41;<br /><br />for event in pygame.event.get&#40;&#41;:<br />            if event.type == QUIT:<br />                sys.exit&#40;0&#41;<br />            elif event.type == KEYDOWN:<br />                if event.key == K_RIGHT:<br />                    ship.vel&#91;0&#93; = 3<br />                elif event.key == K_LEFT:<br />                    ship.vel&#91;0&#93; = -3<br />                elif event.key == K_SPACE:<br />                    laserSprite.add&#40;Shoot&#40;ship.rect.midtop&#41;&#41;<br />            elif event.type == KEYUP:<br />                if event.key == K_RIGHT and teclado&#91;K_LEFT&#93;:<br />                    ship.vel&#91;0&#93; = -3<br />                elif event.key == K_LEFT and teclado&#91;K_RIGHT&#93;:<br />                    ship.vel&#91;0&#93; = 3<br />                elif event.key == K_RIGHT or event.key == K_LEFT:<br />                    ship.vel&#91;0&#93; = 0 <br /></code></dd></dl><br /><br />No lo he probado, pero en teoría así debería de funcionar<br /><br />Hasta otra!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Oct 16, 2009 12:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Garolard]]></name></author>
<updated>2009-10-15T19:49:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2991#p2991</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2991#p2991"/>
<title type="html"><![CDATA[Bug en controles [Pygame]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=638&amp;p=2991#p2991"><![CDATA[
Hola a todos.<br /><br />Bueno en mi primer mensaje quería preguntar una duda sobre un ligero &quot;fallo&quot; en un pequeño juego que estoy haciendo con python y pygame. He buscado alguna solución por internet pero no veo nada que me ayude.<br />El problema es el siguiente: Tengo una navecita, que solo se desplaza lateralmente usando las teclas de dirección. Se mueve bien y responde correctamente a los controles, pero el problema llega al querer hacer un cambio de dirección brusco.<br />Resulta que si, por ejemplo, pulso la tecla derecha -&gt; se mueve a la derecha. Sin soltar dicha tecla, pulso la izquierda -&gt; se mueve a la izquierda. Y de nuevo sin soltar la derecha, suelto la izquierda -&gt; la nave se queda parada hasta que se vuelve a pulsar alguna tecla.<br /><br />Dicho así es como para pensar &quot;hay que ser muy lerdo para hacer eso mientras se juega&quot;, pero la verdad es que es posible, aunque solo sea cuando pulsas ambas teclas rápidamente para hacer un cambio de dirección como ya he dicho. Pasa muchas veces y puede llegar a molestar. Y bueno, pos al final me decidí a registrarme y pedir ayuda a ver si a alguien se le ocurre algo para ayudarme con este problemilla.<br /><br />Gracias de antemano al que pueda responderme.<br /><br />PD: Código donde están los controles de la nave:<br /><dl class="codebox"><dt>Code: </dt><dd><code>while True:<br />        CLOCK.tick&#40;60&#41;<br />        <br />        for event in pygame.event.get&#40;&#41;:<br />            if event.type == QUIT:<br />                sys.exit&#40;0&#41;<br />            elif event.type == KEYDOWN:<br />                if event.key == K_RIGHT:<br />                    ship.vel&#91;0&#93; = 3<br />                elif event.key == K_LEFT:<br />                    ship.vel&#91;0&#93; = -3<br />                elif event.key == K_SPACE:<br />                    laserSprite.add&#40;Shoot&#40;ship.rect.midtop&#41;&#41;<br />            elif event.type == KEYUP:<br />                if event.key == K_RIGHT or event.key == K_LEFT:<br />                    ship.vel&#91;0&#93; = 0<br />                <br />        <br />        shipSprite.update&#40;&#41;<br />        laserSprite.update&#40;&#41;<br />        enemySprite.update&#40;&#41;<br />        enemyLaserSprite.update&#40;&#41;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2155">Garolard</a> — Jue Oct 15, 2009 7:49 pm</p><hr />
]]></content>
</entry>
</feed>