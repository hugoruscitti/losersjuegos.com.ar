<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=703" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-09T05:30:27+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=703</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-09-09T05:30:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=4089#p4089</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=4089#p4089"/>
<title type="html"><![CDATA[Re: mejorar mi ejemplo del uso de Mixer y Sound! :(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=4089#p4089"><![CDATA[
<blockquote><div><cite>yasser_001200 escribió:</cite><br />Esta muy bueno. Por fin aprendí como usar los sonidos. Te agradezco mucho.<br /></div></blockquote><br /><br />me alegra ser de ayuda! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Sep 09, 2010 5:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-09-01T17:17:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=4017#p4017</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=4017#p4017"/>
<title type="html"><![CDATA[Re: mejorar mi ejemplo del uso de Mixer y Sound! :(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=4017#p4017"><![CDATA[
Esta muy bueno. Por fin aprendí como usar los sonidos. Te agradezco mucho.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mié Sep 01, 2010 5:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-04-11T22:04:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3331#p3331</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3331#p3331"/>
<title type="html"><![CDATA[mejorar mi ejemplo del uso de Mixer y Sound! :(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3331#p3331"><![CDATA[
hice lo que me dijiste, parece que mejoro un poco la sincronizacion imagen/sonido pero hay un minipequeñin retraso entre la aparicion de la imagen y cuando suena el sonido (valga la redondancia). gracias de igual forma! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Abr 11, 2010 10:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2010-03-08T22:47:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3301#p3301</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3301#p3301"/>
<title type="html"><![CDATA[mejorar mi ejemplo del uso de Mixer y Sound! :(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3301#p3301"><![CDATA[
si, lo he probado, primero sin realizarle ninguna modificacion y comprobar que en mi computadora tambien hay un desfasaje. Luego realice los cambios y comprobe que el defasaje se redujo notoriamente.<br /><br />Te propongo el siguiente ejercicio (que de hecho realice yo). Hay un metodo llamado mixer.get_init que te retorna una tupla con los valores con que fue inicializado el modulo mixer. <br /><br />En tu codigo (o en uno nuevo) escribi esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame <br /><br />pygame.init&#40;&#41;<br />print pygame.mixer.get_init&#40;&#41;<br />pygame.mixer.pre_init&#40;44100, -16, 1024&#41; <br />print pygame.mixer.get_init&#40;&#41;<br /></code></dd></dl><br /><br />En mi computadora sale por consola dos veces la siguiente tupla <br />(22050, -16, 2)<br /><br />Ahora, proba el siguiente codigo<br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame <br /><br />pygame.mixer.pre_init&#40;44100, -16, 1024&#41; <br />pygame.init&#40;&#41;<br />print pygame.mixer.get_init&#40;&#41;<br /></code></dd></dl><br /><br />y el resultado fue (44100, -16, 2)<br />Efectivamente, en el primer codigo el modulo mixer se inicializa con valores por default y la posterior llamada a pre_init no modifica en nada dichos valores.<br />Mientras, una llamada a pre_init <span style="font-weight: bold">antes</span> que a la llamada a init del modulo pygame setea correctamente los valores.<br /><br />Te comento que la documentacion que utilize fue la que se encuentra en esta misma pagina <a href="http://www.loosersjuegos.com.ar/traducciones/pygame" class="postlink">http://www.loosersjuegos.com.ar/traducciones/pygame</a>.<br />La version que estoy usando de pygame es (1, 8, 1) implementado con la version SDL (1, 2, 13). <br /><br />Que version de pygame/SDL tenes? Los ejemplos que te propuse funcionan como yo digo o en tu computadora hay cambios?<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Lun Mar 08, 2010 10:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-03-08T19:28:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3298#p3298</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3298#p3298"/>
<title type="html"><![CDATA[mejorar mi ejemplo del uso de Mixer y Sound! :(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3298#p3298"><![CDATA[
si claro, estoy usando el <span style="font-style: italic">pre_init()</span>, la documentacion de pygame dice que no hay problema con llamarla despues de <span style="font-style: italic">pygame.init()</span>, ya que podemos usarla cada vez que queramos cambiar algun argumento que usa el modulo <span style="font-style: italic">mixer</span>.<br /><br />te funciona?, hay sincronizacion entre el sonido y la imagen??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Mar 08, 2010 7:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2010-03-07T03:22:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3297#p3297</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3297#p3297"/>
<title type="html"><![CDATA[mejorar mi ejemplo del uso de Mixer y Sound! :(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3297#p3297"><![CDATA[
Hola, creo que he encontrado el error. Es que por default el modulo mixer usa un buffer demasiado grande y esto provoca cierto desfasaje.<br />Para cambiar el tamaño del buffer a uno menor, se utilizar la funcion pre_init.<br />Pero en tu codigo vos usas dicha funcion?! por que aun hay latencia?<br /><br />La respuesta resulta sutil, la funcion pre_init() debe ser llamada antes de ejecutarse la llamada init() del modulo pygame.<br /><br />O sea<br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame <br />from pygame.locals import * <br /><br />#Llamar mixer.pre_init antes que a pygame.init<br />pygame.mixer.pre_init&#40;44100, -16, 1024&#41; <br />pygame.init&#40;&#41; </code></dd></dl><br /><br />En mi computadora lo he probado y funciona.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Dom Mar 07, 2010 3:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-03-06T22:05:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3296#p3296</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3296#p3296"/>
<title type="html"><![CDATA[mejorar mi ejemplo del uso de Mixer y Sound! :(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=703&amp;p=3296#p3296"><![CDATA[
hola <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />hace unos dias estube trabajando en unos ejemplos para el uso de Sound del modulo mixer, hice un pequeño ejemplo que simula unos disparos al hacer click con el puntero del mouse, pero el problema es que el sonido suena mucho despues de que se pinta el &quot;disparo&quot;.<br /><br />aqui les dejo el codigo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#******************************************************************************<br /># mixer_sound.py: reproduce musica y sonidos cuando se pulsan los botones del<br />#                 mouse.<br />#                 teclas Esc y q para salir, tecla enter para pausar/reproducir<br />#                 la musica, boton 1 y 3 para los disparos.<br />#<br /># TODO: buscar una manera para mejorar la sincronisacion sonido/imagen de los<br />#       disparos.<br />#******************************************************************************<br /><br />import pygame<br />from pygame.locals import *<br /><br />pygame.init&#40;&#41;<br />screen = pygame.display.set_mode&#40;&#40;800, 600&#41;&#41;<br />pygame.display.set_caption&#40;&quot;modulo mixer &amp; Sound&quot;&#41;<br /><br />texto = pygame.font.Font&#40;None, 24&#41;<br />pygame.mixer.pre_init&#40;44100, -16, 1024&#41;<br /><br /># creamos una lista para guardar las posiciones de los disparos<br />disparos = &#91;&#93;<br /><br />pygame.mixer.music.load&#40;&quot;moh.ogg&quot;&#41;<br /># cargamos estos efectos de sonido<br />pistola = pygame.mixer.Sound&#40;&quot;pistol.ogg&quot;&#41;<br />shotgun = pygame.mixer.Sound&#40;&quot;shotgun.ogg&quot;&#41;<br /><br /><br />tiempo = pygame.time.Clock&#40;&#41;<br />quit = False<br />pause = False<br /><br /># reproducimos la musica de fondo<br />pygame.mixer.music.play&#40;-1&#41;<br /><br />while not quit:<br />    tiempo.tick&#40;120&#41;<br /><br />    for evento in pygame.event.get&#40;&#41;:<br />        if evento.type == QUIT:<br />            quit = True<br />        elif evento.type == pygame.KEYDOWN:<br />            if evento.key in &#91;pygame.K_q, pygame.K_ESCAPE&#93;:<br />                quit = True<br />            elif evento.key == pygame.K_RETURN:<br />                if not pause:<br />                    pygame.mixer.music.pause&#40;&#41;<br />                    pause = True<br />                else:<br />                    pygame.mixer.music.unpause&#40;&#41;<br />                    pause = False<br />        elif evento.type == pygame.MOUSEBUTTONDOWN:<br />            if evento.button == 1:<br />                pistola.play&#40;&#41;<br />                posicion = &#91;evento.button, evento.pos&#93;<br />                if not posicion in disparos:<br />                    disparos.append&#40;posicion&#41;<br />                else:<br />                    print &quot;disparo en el mismo lugar!! lol&quot;<br />            elif evento.button == 3:<br />                shotgun.play&#40;&#41;<br />                posicion = &#91;evento.button, evento.pos&#93;<br />                if not posicion in disparos:<br />                    disparos.append&#40;posicion&#41;<br />                else:<br />                    print &quot;escopetazo en el mismo sitio! lol&quot;<br /><br />    screen.fill&#40;&#40;0,0,0&#41;&#41;<br /><br />    for i in disparos:<br />        if i&#91;0&#93; == 1:<br />            pygame.draw.circle&#40;screen, &#40;0, 255, 0&#41;, i&#91;1&#93;, 16&#41;<br />        elif i&#91;0&#93; == 3:<br />            pygame.draw.circle&#40;screen, &#40;255, 0, 0&#41;, i&#91;1&#93;, 64&#41;<br /><br />    if not pause:<br />        miaviso = texto.render&#40;&quot;Musica en reproduccion&quot;, True, &#40;255, 255, 255&#41;&#41;<br />    else:<br />        miaviso = texto.render&#40;&quot;Musica en pausa&quot;, True, &#40;255, 255, 255&#41;&#41;<br /><br />    screen.blit&#40;miaviso, &#40;800/3, 600/3&#41;&#41;<br />    pygame.display.flip&#40;&#41;<br /></code></dd></dl><br /><br />aqui les dejo un link para descargar el ejemplo con todo y sonidos!:<br /><a href="http://www.4shared.com/file/235697139/33099857/modulo_mixertar.html" class="postlink">http://www.4shared.com/file/235697139/33099857/modulo_mixertar.html</a><br /><br />tambien estoy haciendo uso de otros modulos y experimentando con los mismos para realizar algo asi como una referencia como otro usuario cuyo nick no recuerdo hizo en su momento.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Mar 06, 2010 10:05 pm</p><hr />
]]></content>
</entry>
</feed>