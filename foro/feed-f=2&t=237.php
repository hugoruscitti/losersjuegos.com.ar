<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=237" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-02-12T13:07:31+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=237</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-02-12T13:07:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=889#p889</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=889#p889"/>
<title type="html"><![CDATA[Mover Personaje con el Teclado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=889#p889"><![CDATA[
<blockquote><div><cite>PLC escribió:</cite><br />Hay algun lugar donde se pueda descargar el juego de el monito y los cazadores. Que explicas algo de como hacerlo en el articulo como desarrollar juegos con python y pygame<br /></div></blockquote><br /><br />Sí, el programa de ejemplo está al final de la siguiente página:<br /><br />   <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/videos/python_y_pygame_cafeconf_2007/python_y_pygame_cafeconf_2007.php">http://www.losersjuegos.com.ar/referenc ... f_2007.php</a><!-- m --><br /><br />también están las diapositivas y una versión para descargar<br />del video.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Feb 12, 2008 1:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-02-12T10:04:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=888#p888</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=888#p888"/>
<title type="html"><![CDATA[Mover Personaje con el Teclado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=888#p888"><![CDATA[
Hay algun lugar donde se pueda descargar el juego de el monito y los cazadores. Que explicas algo de como hacerlo en el articulo como desarrollar juegos con python y pygame<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Mar Feb 12, 2008 10:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-02-12T08:53:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=887#p887</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=887#p887"/>
<title type="html"><![CDATA[Gracias]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=887#p887"><![CDATA[
Ok gracias era lo que queria lograr.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Mar Feb 12, 2008 8:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-02-11T13:26:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=883#p883</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=883#p883"/>
<title type="html"><![CDATA[Mover Personaje con el Teclado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=883#p883"><![CDATA[
Saludos, por lo que veo el mensaje de error parece de<br />python, así que asumo estás usando pygame.<br /><br />Te dejo un ejemplo sencillo que permite mover una imagen<br />por la pantalla usando los direccionales de teclado. Ten en cuenta<br />que necesitas una imagen llamada &quot;personaje.png&quot; para que<br />el programa te funcione correctamente.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- encoding: utf-8 -*-<br />import pygame<br /><br />screen = pygame.display.set_mode&#40;&#40;320, 240&#41;&#41;<br />personaje = pygame.image.load&#40;'personaje.png'&#41;.convert_alpha&#40;&#41;<br />quit = False<br />x, y = 0, 0<br />color_fondo = &#40;200, 200, 200&#41;<br /><br /><br />while not quit:<br /><br />    # Atiende los eventos de la aplicacion. Es importante<br />    # utilizar esta rutina en todo juego, de otro modo la<br />    # función &quot;pygame.key.get_pressed&quot; no funcionará.<br />    for e in pygame.event.get&#40;&#41;:<br />        if e.type == pygame.QUIT:<br />            quit = True<br /><br />    # Realiza los movimientos del personaje con teclado<br />    keys = pygame.key.get_pressed&#40;&#41;<br /><br />    if keys&#91;pygame.K_LEFT&#93;:<br />        x -= 1<br />    elif keys&#91;pygame.K_RIGHT&#93;:<br />        x += 1<br /><br />    if keys&#91;pygame.K_DOWN&#93;:<br />        y += 1<br />    elif keys&#91;pygame.K_UP&#93;:<br />        y -= 1<br /><br /><br />    # Actualiza la pantalla, imprimiento el personaje y limpiando<br />    # todo el fondo de color gris.<br />    screen.fill&#40;color_fondo&#41;<br />    screen.blit&#40;personaje, &#40;x, y&#41;&#41;<br />    pygame.display.flip&#40;&#41;<br />    pygame.time.wait&#40;10&#41;<br /></code></dd></dl><br /><br />Esta es solo una de las tantas formas que puedes utilizar<br />para mostrar un personaje animado, no es la única. Igualmente<br />te servirá para comenzar (o eso espero...).<br /><br />Buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Feb 11, 2008 1:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-02-11T00:11:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=881#p881</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=881#p881"/>
<title type="html"><![CDATA[Mover Personaje con el Teclado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=237&amp;p=881#p881"><![CDATA[
Por favor disculpeme por que se que el sitio brinda gran cantidad de informacion, pero yo soy novato en este mundo y de veras que me pierdo a la hora de empezar hacer las cosas.<br /><br />Lo que quiero hacer es cargar una imagen en pantalla, y poder moverla con las teclas K_LEFT, K_RIGHT, K_UP, K_DOWN.<br /><br />Ya logre cargar la imagen es muy facil pero no logro hacer que se mueva<br />el ejemplo de car que esta en el sitio me da el error <br /><br />AttributeError: Stage instance has no attribute 'draw'<br /><br />ya se que con la funcion pygame.key.get_pressed() obtengo la tecla que ha sido presionada pero bueno he tratado de mil maneras y no logro mover la imagen<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Lun Feb 11, 2008 12:11 am</p><hr />
]]></content>
</entry>
</feed>