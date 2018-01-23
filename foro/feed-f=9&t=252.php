<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=252" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-03-05T17:08:53+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=252</id>
<entry>
<author><name><![CDATA[desnight]]></name></author>
<updated>2008-03-05T17:08:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=952#p952</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=952#p952"/>
<title type="html"><![CDATA[Dibujar personajes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=952#p952"><![CDATA[
Gracias y perdon por no especificar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1898">desnight</a> — Mié Mar 05, 2008 5:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-03-05T14:08:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=951#p951</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=951#p951"/>
<title type="html"><![CDATA[Ejemplo: poner color como transparente (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=951#p951"><![CDATA[
Hola. Aunque desnight no ha especificado el lenguaje y puede que esto no le ayude, ya que estamos con este tema (que no se si tiene el titulo mas apropiado...) publico una demostración, en pygame, de como funciona el set_colorkey:<br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame.locals import *<br /><br />#se crea la pantalla y se pinta<br />screen = pygame.display.set_mode&#40;&#40;400,200&#41;&#41;<br />screen.fill&#40;&#40;200,200,0&#41;&#41;<br /><br />#se carga la imagen&#40;*1&#41; y se copia dos veces<br />imagen_normal = pygame.image.load&#40;&quot;triangulo rectangulo.png&quot;&#41;<br />imagen_color_transparente_1 = imagen_normal.copy&#40;&#41;<br />imagen_color_transparente_2 = imagen_normal.copy&#40;&#41;<br />#a la copia 1 se pone como color transparente el color blanco<br />imagen_color_transparente_1.set_colorkey&#40;&#40;255,255,255&#41;&#41;<br />#a la copia 2 se pone como color transparente el color negro<br />imagen_color_transparente_2.set_colorkey&#40;&#40;0,0,0&#41;&#41;<br />#se convierte la superficie &#40;*2&#41;; <br />#si se eliminan estas lineas no se aprecia la transparencia<br />imagen_normal = imagen_normal.convert&#40;&#41;<br />imagen_color_transparente_1 = imagen_color_transparente_1.convert_alpha&#40;&#41;<br />imagen_color_transparente_2 = imagen_color_transparente_2.convert_alpha&#40;&#41;<br /><br />while True:<br />    for event in pygame.event.get&#40;&#41;:<br />        if event.type == QUIT:<br />            #se cierra el programa si hay un evento de salir<br />            sys.exit&#40;&#41;<br />        if event.type == MOUSEBUTTONDOWN:<br />            if event.button == 1:<br />                #si se pulsa el boton 1 del raton:<br />                #se pinta la pantalla y se imprime la imagen normal<br />                screen.fill&#40;&#40;200,200,0&#41;&#41;<br />                screen.blit&#40;imagen_normal, &#40;50,25&#41;&#41;<br />            if event.button == 2:<br />                #si se pulsa el boton 1 del raton:<br />                #se pinta la pantalla y se imprime la imagen con transparencia 1<br />                screen.fill&#40;&#40;200,200,0&#41;&#41;<br />                screen.blit&#40;imagen_color_transparente_1, &#40;75,25&#41;&#41;<br />            if event.button == 3:<br />                #si se pulsa el boton 1 del raton:<br />                #se pinta la pantalla y se imprime la imagen con transparencia 2<br />                screen.fill&#40;&#40;200,200,0&#41;&#41;<br />                screen.blit&#40;imagen_color_transparente_2, &#40;100,25&#41;&#41;<br />    #se muestra la pantalla<br />    pygame.display.update&#40;&#41;</code></dd></dl><br />(*1): <img src="http://ciberia.ya.com/dvddvddvd/triangulo%20rectangulo.png" alt="Imagen" /><br />(*2): mas información de convert <a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=165&amp;highlight=convert" class="postlink">aquí</a><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Mar 05, 2008 2:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Carlos Guevara Moscol]]></name></author>
<updated>2008-03-04T17:24:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=950#p950</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=950#p950"/>
<title type="html"><![CDATA[Color Key]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=950#p950"><![CDATA[
Hola, si no kieres q el color blanco no se vea pues pintalo de algun otro colo, no creo q eso te ayude, no? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  pero es q tu pregunta no es muy especifica..<br />A ver.. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cool.gif" alt="8)" title="Cool" />  hay q cranear:<br />Si lo q kieres es q el color blanco juegue el papel de color &quot;transparente&quot; osea q cuando esa imagen se ponga sobre otra o sobre un fondo todo lo blanco deje ver lo q hay atras ( como si hubiera un hueco en lugar de un color)?? Si es eso, si te puedo ayudar xD<br /><br />Si kieres q esa imagen se comporte asi en cualkier lado pues simple, guardala en un formato q &quot;admita transparencias&quot; como el formato GIF (muy utilizado en las webs) y en el software q lo guardes buscas la Opcion &quot;Establecer transparencia&quot; o similar q debe estar en el menu herramientas, si no te lo permite es porque no lo has guardado bien, y finalmente seleccionas el blanco como color &quot;transparente&quot;<br /><br /><br />Ahora bien...<br />Si lo q kieres es usar una imagen en un juego y q todo lo blanco no se vea pues tienes dos opciones <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />O cargas una imagen en formato GIF ejemplo &quot;mi_personaje.gif&quot; y listo! el motor q estas usando deberia hacer todo sin q tu te des cuenta..<br /><br />O, si usas alguna libreria q no reconoce ese formato, como pasa con la mayoria, no te hagas paltas q ahi entra el concepto de &quot;ColorKey&quot; q es algo asi como &quot;el color clave&quot; q consiste en seleccionar el color q no se va a pintar a la hora de hacer el Blitting en la pantalla o al copiarlo a otra superficie.<br /><br />Ahora, dependiendo de q estes usando para hacer tus juegos vas a encontrar distintas funciones para establecer el ColorKey como te dijo dvd en uno de los mensajes anteriores en PyGame es &quot;Surface.set_colorKey&quot;<br />en SDL es :<br />int SDL_SetColorKey(SDL_Surface *superficie, Uint32 A, Uint32 B)<br /><br />Pero eso depende d q uses, si usas SDL te puedo ayudar, si usas PyGame u otro aka hay gente q sabe mucho de esos temas y te puede ayudar, si no, caballero, busca manuales en internet, pero el Concepto del CloroKey es sencillo y es el mismo en cualkier caso, es el color q no pinta a la hora del blitting.<br />imagina una impresora q se kedo sin el color rojo si mandas a imprimir una foto todo lo q debia ser rojo no va a aparecer y por lo tanto va a salir el color q estaba en el fondo, en este caso blanco (el del papel).. para este caso especifico el rojo seria tu ColorKey.<br />La unica diferencia es q en la impresora todos los posibles tonos de rojo se ven afectados, en cambio al programar solo el tono especifico de rojo q tu hayas establecido como ColorKey sera afectado, los otros tonos de rojo seguiran apareciendo como si nada xD.<br /><br />Espero q esto te ayude xD<br />(Se q no entre al royo de ke es una superficie o surface, pero si no lo sabes hazmelo saber y te aclaro esa o cualkier otra duda )<br /><br />Y un ultimo consejo, si lo vas a usar para juegos usa para todas tus imagenes un solo color, eso te va a facilitar las cosas para no tener q estar asignando distintos ColorKeys a cada superficie q uses o estar cambiando el ColorKey dependiendo q imagen cargues, Standarisa tu ColorKey. Y utiliza un color q sea poco comun en una imagen, el blanco es basico en una imagen, luego te va a traer problemas, utiliza un rosado chillon de esos q sabes q no vas a usar en tus juegos xD<br /><br />Ahora si, q te ayude y si hay alguna duda, solo consulta xD!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1896">Carlos Guevara Moscol</a> — Mar Mar 04, 2008 5:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2008-03-04T16:40:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=949#p949</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=949#p949"/>
<title type="html"><![CDATA[Dibujar personajes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=949#p949"><![CDATA[
Hola, hay dos formas para hacer &quot;el fondo transparente&quot;. La primera es decirle a la imagen que el color X sera el transparente. Este metodo no esta soportado por todos los formatos de imagen. Un ejemplo de esto es el formato GIF, (conocido como GIF transparente).<br />La segunda opcion consiste en no modificar la imagen, sino modificar al pintor &quot;el programa que pintara la imagen&quot;. Si usas pythom y pygame, el usuario dvd ya te ha dado la respuesta. Si usas la libreria SDL, puedes usar una funcion llamada SDL_SetColorKey.<br /><br />Cual opcion es mejor? Si estas creando una pagina web, por ejemplo, no pudes modificar al &quot;pintor&quot; (no puedes modificar los exploradores de internet de todo el mundo), entonces deberas modificar la imagen (primera opcion). En cambio si estas creando un programa, hay varias librerias graficas (pintores) que te permitiran seleccionar el color transparente.<br /><br />Fijate que opcion se adapta mas, y postealo.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mar Mar 04, 2008 4:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[desnight]]></name></author>
<updated>2008-03-04T15:57:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=948#p948</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=948#p948"/>
<title type="html"><![CDATA[Dibujar personajes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=948#p948"><![CDATA[
Hola ¿me podrian poner como pongo para que no se vea el color blaco?<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1898">desnight</a> — Mar Mar 04, 2008 3:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[desnight]]></name></author>
<updated>2008-03-03T21:40:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=944#p944</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=944#p944"/>
<title type="html"><![CDATA[Dibujar personajes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=944#p944"><![CDATA[
Gracias, era eso lo que queria saber.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1898">desnight</a> — Lun Mar 03, 2008 9:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-03-03T21:34:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=943#p943</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=943#p943"/>
<title type="html"><![CDATA[Dibujar personajes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=943#p943"><![CDATA[
No estoy seguro de entender tu problema, las imágenes tienen una resolución rectangular, lo que puedes hacer es que el fondo sea transparente y eso se puede hacer de dos maneras (que yo sepa):<br />1 - Poniendo el color de fondo transparente (el color blanco de fondo del mspaint no es transparente)(o al menos en python + pygame que es lo que utilizo yo)<br />2 - &quot;indicarle al programa el color que quieres que sea transparente de la imagen&quot; por ejemplo en pygame se puede hacer con <a href="http://www.pygame.org/docs/ref/surface.html#Surface.set_colorkey" class="postlink">Surface.set_colorkey</a>.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Mar 03, 2008 9:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[desnight]]></name></author>
<updated>2008-03-03T18:05:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=942#p942</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=942#p942"/>
<title type="html"><![CDATA[Dibujar personajes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=942#p942"><![CDATA[
Gracias es que el problema que tengo con el mspaint es que los personajes<br />se quedan en forma rectangular. ¿eso se puede cambiar?<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1898">desnight</a> — Lun Mar 03, 2008 6:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-03-03T17:13:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=941#p941</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=941#p941"/>
<title type="html"><![CDATA[Dibujar personajes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=941#p941"><![CDATA[
Bienvenido al foro. Yo te aconsejo <a href="http://es.wikipedia.org/wiki/Gimp" class="postlink">Gimp</a> que aunque tenga una curva de aprendizaje mas elevada que algunos mas simple tipo mspaint puedes hacer dibujos mas rápidos y con mejor resultado que con ellos (tampoco te hace falta saber todas las funciones de Gimp para hacer un buen dibujo). Además es libre, gratuito y multiplataforma.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Mar 03, 2008 5:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[desnight]]></name></author>
<updated>2008-03-02T16:14:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=937#p937</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=937#p937"/>
<title type="html"><![CDATA[Dibujar personajes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=252&amp;p=937#p937"><![CDATA[
Hola soy nuevo en el foro y me gustaria saber si hay algun programa para dibujar personajes simples.<br /><br />Saludos. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1898">desnight</a> — Dom Mar 02, 2008 4:14 pm</p><hr />
]]></content>
</entry>
</feed>