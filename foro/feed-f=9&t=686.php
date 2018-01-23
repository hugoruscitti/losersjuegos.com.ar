<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=686" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-02-14T19:35:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=686</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-02-14T19:35:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3252#p3252</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3252#p3252"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3252#p3252"><![CDATA[
Al final me he animado y he modificado el programa para no usar la clase. Espero que mirar los dos códigos (después de leer algo de teoría) te ayude a aprender sobre como escribir programas usando clases.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import sys<br /><br />import pygame<br />from pygame import *<br /><br /><br />pygame.init&#40;&#41;<br />screen = pygame.display.set_mode&#40;&#40;600, 600&#41;&#41;<br />salir = False<br /># // Las variables que servian para guardar informacion interna de la clase<br />line = 0<br />strings = &#91;'',&#93;<br />font = pygame.font.Font&#40;None, 28&#41;<br />dist = 20<br />ipos_x = 50<br />ipos_y = 50<br /># \\<br /><br />while salir == False:<br />    events = pygame.event.get&#40;&#41;<br />    for event in events:<br />        if event.type == QUIT:<br />            salir = True<br />    <br />    # // update de la clase<br />    for event in events:<br />        if event.type == KEYDOWN:<br />            if event.key == K_RETURN:<br />                strings.append&#40;''&#41;<br />                line += 1<br />            elif event.key == K_ESCAPE:<br />                sys.exit&#40;&#41;<br />            elif event.key == K_BACKSPACE:<br />                if strings&#91;line&#93; == '' and line &gt; 0:<br />                    strings = strings&#91;0:-1&#93;<br />                    line -= 1<br />                else:<br />                    strings&#91;line&#93; = strings&#91;line&#93;&#91;0:-1&#93;<br />            else:<br />                strings&#91;line&#93; = str&#40;strings&#91;line&#93; + event.unicode&#41;<br />    # \\<br />    <br />    # // draw de la clase<br />    print strings<br />    screen.fill&#40;&#40;0, 0, 0&#41;&#41;<br />    for line in range&#40;len&#40;strings&#41;&#41;:<br />        img_line = font.render&#40;strings&#91;line&#93;, 1, &#40;255, 255, 255&#41;&#41;<br />        screen.blit&#40;img_line, &#40;ipos_x, ipos_y + dist * line&#41;&#41;<br />    # \\<br />    <br />    display.update&#40;&#41;<br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom Feb 14, 2010 7:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-02-14T19:02:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3251#p3251</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3251#p3251"/>
<title type="html"><![CDATA[Re: Raw_Input con pygame... entrada de datos por usuario]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3251#p3251"><![CDATA[
<blockquote><div><cite>conde escribió:</cite><br />ALguien sabe:<br />¿Se puede hacer un raw_input con Pyame como hacemos con python? O sea, pedir que el usuario escriba y se vea en la pantalla TODAS las teclas que van tipeando hasta algun evento. Por ejemplo Presionar un botón o tocar enter.   <br /><br />SAludos<br /></div></blockquote><br /><br /><br />Quizás <a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=353" class="postlink">esto</a> te sirva.<br /><br />Personalmente creo que es mejor crear un hilo nuevo cuando se hace una segunda pregunta que no tiene relación con la primera.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom Feb 14, 2010 7:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2010-02-14T00:11:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3250#p3250</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3250#p3250"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3250#p3250"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br /><blockquote><div><cite>Metalero escribió:</cite><blockquote><div><cite>Metalero escribió:</cite>seria muy dificil por no decir imposible hacer un jeugo, usando programacion estructurada o procedural.<br /></div></blockquote><br />Falso, claro que se puede.</div></blockquote></div></blockquote><br /><br />Completamente de acuerdo con Geo, Logo es un lenguaje interpretado que no usa programacion orientada a objetos, simplemente ejecuta ordenes y permite definir procedimientos o funciones (hace una diferenciacion entre ambas desde el punto de vista de si devuelven o no algun valor), C tampoco usa clases u objetos sino funciones, variables, estructuras, punteros, uniones, enumeraciones, bucles, etc, etc, y particularmente el que C no use programacion orientada a objetos sino imperativa me resulta incluso mas sencillo, comodo y facil que C++ o Python por mucho que para muchos la abstraccion en objetos de C++ y Python les haga la vida más facil.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Feb 14, 2010 12:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[conde]]></name></author>
<updated>2010-02-09T22:50:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3249#p3249</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3249#p3249"/>
<title type="html"><![CDATA[Raw_Input con pygame... entrada de datos por usuario]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3249#p3249"><![CDATA[
ALguien sabe:<br />¿Se puede hacer un raw_input con Pyame como hacemos con python? O sea, pedir que el usuario escriba y se vea en la pantalla TODAS las teclas que van tipeando hasta algun evento. Por ejemplo Presionar un botón o tocar enter.   <br /><br />SAludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2181">conde</a> — Mar Feb 09, 2010 10:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[conde]]></name></author>
<updated>2010-02-02T00:55:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3244#p3244</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3244#p3244"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3244#p3244"><![CDATA[
Geo y Juanxo gracias por sus comentarios. Voy a seguir probando suerte...<br />El post es una propuesta que tiende a  simplificar un poco el código, y ser mas accesible. No pretendía, estrictamente, que carezca de funciones de una manera absoluta. Aunque el código de Hugo lo logra. <br /><br /><br />Shackra, gracias por tu bienvenida. Me parece que el libro que me dejaste, tiene cierta conexión con el lenguaje de este sitio de internet: <br /><br /><a href="http://www.igooh.com/notas/la-vanidad/" class="postlink">http://www.igooh.com/notas/la-vanidad/</a><br /><br /><br />SAludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2181">conde</a> — Mar Feb 02, 2010 12:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-02-01T00:58:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3240#p3240</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3240#p3240"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3240#p3240"><![CDATA[
mira, mejor bajate <a href="http://www.quedelibros.com/libro/65982/El-Camino-Mas-Facil-y-rapido-para-hablar-eficazmente.html" class="postlink"><span style="text-decoration: underline">este libro</span></a>, leetelo todo y luego vienes a postear dudas!.<br /><br />bienvenido a la comunidad.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Feb 01, 2010 12:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-01-31T10:06:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3234#p3234</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3234#p3234"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3234#p3234"><![CDATA[
Estoy de acuerdo con casi todo.<br /><br />En cuanto a lo de que es casi imposible programación estructurada para juegos, os recuerdo que aquí tenemos un ejemplo de lo contrario. ¿Dónde estas lacabra? xD Y voy más lejos. Os recuerdo que hay muchos juegos profesionales que tienen más años que c++.<br /><br />Después de este desvarío, solo darte ánimos y decirte que no te rindas ni tires la toalla porque sea algo dificil para principiantes. El secreto para avanzar en esto es practicar y practicar, y leerse un monton de tutoriales/manuales entre medias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Ene 31, 2010 10:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-01-31T05:45:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3233#p3233</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3233#p3233"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3233#p3233"><![CDATA[
<blockquote><div><cite>Metalero escribió:</cite><br />1º. las funciones son algo basico no solo en los videojeugos, si no es la programacion general, asi como en las matematicas.<br /></div></blockquote><br />Aunque sería posible evitarlas, es cierto.<br /><blockquote><div><cite>Metalero escribió:</cite><br />seria muy dificil por no decir imposible hacer un jeugo, usando programacion estructurada o procedural.<br /></div></blockquote><br />Falso, claro que se puede.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom Ene 31, 2010 5:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[conde]]></name></author>
<updated>2010-01-31T00:46:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3232#p3232</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3232#p3232"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3232#p3232"><![CDATA[
Modifiqué el código de Hugo para agregar una imagen que se mueva de forma automática (o sea sin flechas). Tal vez a alguien le sirve:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />import sys<br /><br />pygame.init&#40;&#41;<br />size = width, height = 320, 240 #Medida de ventana<br /><br />screen = pygame.display.set_mode&#40;size&#41; #Ventana<br />pygame.display.set_caption&#40;'ejemplo 3'&#41; #Nombre de ventana<br />imagen = pygame.image.load&#40;'life.png'&#41; # Imagen que se mueve con las flechas<br />imagen2 = pygame.image.load&#40;'life.png'&#41;  # Imagen que se mueve de forma automatica<br />color = &#40;200, 200, 200&#41;<br />x, y = 100, 100<br />pos_x = 20<br />pos_y = 20 <br /><br />while True:<br /><br />    # atiende el pedido de cierre de la ventana<br />    for e in pygame.event.get&#40;&#41;:<br />        if e.type == pygame.QUIT:<br />            sys.exit&#40;0&#41;<br />    pos_x += 10<br />    if pos_x &gt; width:<br />        pos_x = -40<br />        pos_y += 20<br />    if pos_y &gt; height:<br />        pos_y = -10<br /><br /><br />    # Actualiza la posicion del personaje<br />    keys = pygame.key.get_pressed&#40;&#41;<br /><br />    if keys&#91;pygame.K_LEFT&#93;:<br />        x = x - 2<br /><br />    if keys&#91;pygame.K_RIGHT&#93;:<br />        x = x + 2<br /><br />    if keys&#91;pygame.K_UP&#93;:<br />        y = y - 2<br /><br />    if keys&#91;pygame.K_DOWN&#93;:<br />        y = y + 2<br /><br /><br />    # limpia la pantalla<br />    screen.fill&#40;color&#41;<br /><br />    # imprime el personaje sobre la pantalla<br />    screen.blit&#40;imagen, &#40;x, y&#41;&#41; #impresion de la imagen que se mueve con las flechas<br />    screen.blit&#40;imagen2, &#40;pos_x, pos_y&#41;&#41; #Impresion de la imagen que se mueve de forma automatica<br /><br />    # actualiza la ventana y se detiene un instante<br />    pygame.display.flip&#40;&#41;<br />    pygame.time.wait&#40;10&#41;</code></dd></dl><br /><br />SAludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2181">conde</a> — Dom Ene 31, 2010 12:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[conde]]></name></author>
<updated>2010-01-31T00:44:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3231#p3231</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3231#p3231"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3231#p3231"><![CDATA[
<span style="font-weight: bold">Hugo,</span> la verdad que sos un genio. Era exactamente lo que estaba buscando y sabía que el post era difícil de leer.  Así que mil gracias!!!<br /><br /><br /><span style="font-weight: bold">Metalero: </span> Respeto tu opinión. Porque es cierto, de ser el juego muy grande, es imposible hacerlo sin clases. Pero bueno, aclaré que era principiante y yo necesitaba ver un código bien básico para comprenderlo; y creo que muchos principiantes necesitan eso. Igual gracias. <br /><br /><span style="font-weight: bold">shackra</span><br /><blockquote class="uncited"><div><br />en fin, tienes que cambiar un poco tu mentalidad, asi podras aprender!.<br /></div></blockquote><br />Lamentablemente para vos (y para mí), todavía no fijé turno con el psicólogo, para el &quot;cambio de mentalidad&quot; que me estás sugiriendo. Pero bueno, te recomiendo, de tener pocas ganas de responder,  no escribas 5 renglones contándome lo ya que sé y expresando tu negativa a escribir lo que quiero saber. <br /><br />SAludos   <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> y gracias !!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2181">conde</a> — Dom Ene 31, 2010 12:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-01-30T22:06:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3230#p3230</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3230#p3230"/>
<title type="html"><![CDATA[Re: Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3230#p3230"><![CDATA[
<blockquote><div><cite>conde escribió:</cite><br />Hay explicaciones de como mover imágenes en python solo con bucles. También de como configurar eventos. Pero no hay ninguna que una las dos cosas. Por eso, si alguien puede tirar un código que realice dicha tarea, estaría agradecido.<br /></div></blockquote><br /><br /><br />Saludos conde, te escribí un ejemplo sencillo utilizando solamente<br />una imagen y un bucle (espero haber entenido tu pedido).<br /><br />Así es como se ve el ejemplo en pantalla, con los direccionales<br />del teclado puedes mover al personaje por el escenario:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20100130/pantalla.png" alt="Imagen" /><br /><br />La imagen del personaje tiene que estar en el mismo directorio<br />del ejemplo (bajo el nombre &quot;boy.png&quot;).<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20100130/boy.png" alt="Imagen" /><br /><br />y el código es este:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />import sys<br /><br />pygame.init&#40;&#41;<br /><br />screen = pygame.display.set_mode&#40;&#40;320, 240&#41;&#41;<br />imagen = pygame.image.load&#40;'boy.png'&#41;<br />color = &#40;200, 200, 200&#41;<br />x, y = 100, 100<br /><br />while True:<br /><br />    # atiende el pedido de cierre de la ventana<br />    for e in pygame.event.get&#40;&#41;:<br />        if e.type == pygame.QUIT:<br />            sys.exit&#40;0&#41;<br /><br /><br />    # Actualiza la posicion del personaje<br />    keys = pygame.key.get_pressed&#40;&#41;<br /><br />    if keys&#91;pygame.K_LEFT&#93;:<br />        x = x - 2<br /><br />    if keys&#91;pygame.K_RIGHT&#93;:<br />        x = x + 2<br /><br />    if keys&#91;pygame.K_UP&#93;:<br />        y = y - 2<br /><br />    if keys&#91;pygame.K_DOWN&#93;:<br />        y = y + 2<br /><br /><br />    # limpia la pantalla<br />    screen.fill&#40;color&#41;<br /><br />    # imprime el personaje sobre la pantalla<br />    screen.blit&#40;imagen, &#40;x, y&#41;&#41;<br /><br />    # actualiza la ventana y se detiene un instante<br />    pygame.display.flip&#40;&#41;<br />    pygame.time.wait&#40;10&#41;<br /><br /></code></dd></dl><br /><br />Saludos y buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ene 30, 2010 10:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metalero]]></name></author>
<updated>2010-01-30T20:31:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3228#p3228</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3228#p3228"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3228#p3228"><![CDATA[
Lo que estas pidiendo es imposible, es como si te digo que quiero hacer un videojuego usando una calculadora o una maquina de escribir.<br /><br />1º. las funciones son algo basico no solo en los videojeugos, si no es la programacion general, asi como en las matematicas.<br /><br />2º. las clases son el alma de la programacion aorientada a objetos. Y ésta a su vez, es el alma del estilo de programacion para hacer videojuego, seria muy dificil por no decir imposible hacer un jeugo, usando programacion estructurada o procedural.<br /><br />3º. los sprites son la base de la parte grafica de un juego 2D. Absolutamente TODO lo que vez en tu pantalla en un juego 2D (exeptuando cosas muy especiales, como por ejemplo un generador de particulas) son sprites.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2158">Metalero</a> — Sab Ene 30, 2010 8:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-01-30T18:34:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3227#p3227</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3227#p3227"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3227#p3227"><![CDATA[
Hola <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />.<br />no &quot;tirare&quot; ningun codigo explicandote como puedes hacer un juegos sin clases, funciones o sprites. lamentablemente para ti (y para mi) estas tres cosas son muy importantes.<br /><br />con las clases puedes hacer derivaciones a partir de una clase base, por ejemplo, una clase para los bichitos en general que maneje el pìntarlos en la pantalla de juego y actualize su posicion con introducir algunos parametros (sacandolos por entrada de teclado o por I.A) y a partir de esa clase base, derivar la clase para el jugador (con otros metodos y atributos como la cantidad de vida u magia, etc) y los enemigos.<br /><br />las funciones son aun mas sencillas, el problema viene cuando estas haciendo el juego y tenga ese millar de variables por todas partes haciendo del codigo fuente de tu juego un asco de seguir.<br /><br />con los sprites puedes saber cunado uno choca con otro y realizar alguna accion como borrar al segundo de la pantalla y esas cosas.<br /><br />en fin, tienes que cambiar un poco tu mentalidad, asi podras aprender!.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Ene 30, 2010 6:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[conde]]></name></author>
<updated>2010-01-27T23:54:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3223#p3223</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3223#p3223"/>
<title type="html"><![CDATA[Pygame sin funciones o class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=686&amp;p=3223#p3223"><![CDATA[
Hola, soy nuevo en Pygame y  conozco las class de python. Pero, las class de python y  los objetos de pygame, son cosas distintas; porque su uso  es mas complejo y  a los principiantes nos cuesta un poco comprenderlos. Por eso quisiera consultar, ¿De que forma puede hacerse un juego sin utilizar las class, funciones y sprites?<br /><br />Hay explicaciones de como mover imágenes en python solo con bucles. También de como configurar eventos. Pero no hay ninguna que una las dos cosas. Por eso, si alguien puede tirar un código que realice dicha tarea, estaría agradecido. <br /><br />SAludos y gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2181">conde</a> — Mié Ene 27, 2010 11:54 pm</p><hr />
]]></content>
</entry>
</feed>