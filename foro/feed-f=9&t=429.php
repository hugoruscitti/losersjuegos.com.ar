<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=429" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-06T19:39:01+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=429</id>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-01-06T19:39:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1848#p1848</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1848#p1848"/>
<title type="html"><![CDATA[Sincronizar animación al Frame-rate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1848#p1848"><![CDATA[
Si, ya me funciono y todo esta perfecto. La animación es<br />constante y las imágenes las guardaré como PNG/RGBA.<br />Cuando tenga más avanzado el proyecto que estoy haciendo<br />lo publicaré por aquí. Por ahora estoy ocupado haciendo un<br />efecto de cámara para mapas extragrandes y también<br />implementando pathfinding... Nos vemos y Gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Mar Ene 06, 2009 7:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-06T19:21:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1847#p1847</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1847#p1847"/>
<title type="html"><![CDATA[Sincronizar animación al Frame-rate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1847#p1847"><![CDATA[
<blockquote><div><cite>Metator de Arkalot escribió:</cite><br />Así es, blender me exporta las animaciones como una secuencia<br />de imágenes. Intenté unirlas con pygame, pero no me va, creo que es<br />porque necesito de las &quot;banderas especiales&quot;...<br /></div></blockquote><br /><br /><br />Si, exacto, si quieres crear una superficie grande para integrar todos<br />los cuadros de animación puede surgir algun problema: en principio<br />cuando generas un objeto surface con pygame.Surface((ancho, alto)), esta<br />imagen será completamente negra, y al imprimir sobre ella los pixeles<br />alfa se fundirán con el color negro y dejarán de ser transparentes.<br /><br />Por ello, para construir la superficie tienes que combinar dos atributos,<br />que sea de 32 bits y tenga canal alfa. La siguiente sentencia construye<br />una superficie con canal alpha y luego pinta una de tus imágenes sobre<br />ella:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>surface = pygame.Surface&#40;&#40;100, 100&#41;, pygame.SRCALPHA, depth=32&#41;<br /><br />image = pygame.image.load&#40;'0001.png'&#41;<br />surface.blit&#40;image, &#40;0, 0&#41;&#41;<br /></code></dd></dl><br /><br />Eso sí, como tu quieres imprimir todos los cuadros sobre la superficie,<br />primero tendrías que calcular el tamaño deseado para la superficie grande<br />(sumando el tamaño de todos los cuadros de animación) y luego imprimir<br />cada cuadro sobre la superficie.<br /><br />Luego, para agilizar la velocidad de impresión es muy recomendable adaptar<br />la superficie al formato de la pantalla. Para adaptar la superficie tienes<br />que definir el modo de video y luego ejecutar esta sentencia:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>surface = surface.convert_alpha&#40;&#41;<br /></code></dd></dl> <br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Ene 06, 2009 7:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-01-05T19:27:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1846#p1846</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1846#p1846"/>
<title type="html"><![CDATA[Sincronizar animación al Frame-rate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1846#p1846"><![CDATA[
<blockquote class="uncited"><div><br />¿podrías enviarnos un ejemplo de esas imagenes?, tal vez lo <br />podamos resolver mas fácil analizandolo gráficamente.<br /></div></blockquote><br /><br />Aquí esta el archivo con el que estoy haciendo las pruebas:<br /><br />[url]http://www.hotlinkfiles.com/files/2190136_hqvvc/gus_walk.rar]gus_walk.rar[/url]<br /><br />Antes usaba un simple bucle para adjuntar imágenes con<br />colorkey, haciendo blit y guardando como png, pero con las<br />imágenes alfa no se como podria juntar todos esos cuadros,<br />ya que son MUCHOS.<br /><br />Probe haciendo blit sobre una superficie alfa (con bandera SCALPHA),<br />pero no funciono. Además no encuentro nada sobre las opciones<br />especiales de mezcla en pygame, no se si puedan servir de algo...<br />hum, ahora se me acaba de ocurrir algo, hacer un super blucle que<br />lea el valor exacto de cada pixel de las imágenes y lo copie en el<br />lugar que le corresponde en la nueva superficie, ¿que les parece...?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Lun Ene 05, 2009 7:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-04T19:02:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1845#p1845</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1845#p1845"/>
<title type="html"><![CDATA[Sincronizar animación al Frame-rate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1845#p1845"><![CDATA[
<blockquote><div><cite>Metator de Arkalot escribió:</cite><br />Así es, blender me exporta las animaciones como una secuencia<br />de imágenes. Intenté unirlas con pygame, pero no me va, creo que es<br />porque necesito de las &quot;banderas especiales&quot; ...<br /></div></blockquote><br /><br />¿podrías enviarnos un ejemplo de esas imagenes?, tal vez lo<br />podamos resolver mas fácil analizandolo gráficamente.<br /><br /><br /><blockquote><div><cite>Metator de Arkalot escribió:</cite><br />Aprovechando este tema, quisiera saber si alguien del foro tiene<br />experiencia haciendo sprites con aplicaciones 3d, ya que me da lata<br />el antialiasing, pues, como saben, pygame utiliza un colorkey para<br />la transparencia, el cual, segun unas pruebas que hice, es mucho más<br />rápido que usar RGBA. Pues al hacer render con antialiasing los bordes<br />de la imágen siempre me quedan mezclados con el fondo, causando<br />el &quot;halo&quot;, mientras que al usar key o sin antialias (funciones de blender),<br />me queda la figura dentada, como de sierra. Nisiquiera me han ayudado<br />en <a href="http://www.blender.guanajuato.net" class="postlink">http://www.blender.guanajuato.net</a><br /></div></blockquote><br /><br />Sí, hace varios años contruí un juego 2D con gráficos pre-construidos<br />(o renderizados) con un software de modelado 3D. Uno de los detalles<br />que nos encontramos para resolver fueron exactamente los bordes de<br />cada Sprite. Hay varias soluciones, aunque al menos para nosotros, <br />la que producía mejores resultados es conservar la transparencia<br />alpha de las imágenes (es decir, dejarlas en formato RGBA), pero<br />transformalas al formato de colores de pantalla para que se puedan<br />imprimir rápido. La función que puedes en pygame que logra<br />este resultado es &quot;convert_alpha&quot;:<br /><br />     <!-- m --><a class="postlink" href="http://www.pygame.org/docs/ref/surface.html#Surface.convert_alpha">http://www.pygame.org/docs/ref/surface. ... vert_alpha</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ene 04, 2009 7:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-01-03T21:47:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1841#p1841</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1841#p1841"/>
<title type="html"><![CDATA[Sincronizar animación al Frame-rate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1841#p1841"><![CDATA[
Perfecto, era justo lo que buscaba. El unico fallo que le vi fue<br />que al pausar el juego este se aceleraba, solucionado con:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if quitar_pausa:<br />    reloj.tick&#40;&#41;<br />    continue<br /></code></dd></dl><br /><br />Así es, blender me exporta las animaciones como una secuencia<br />de imágenes. Intenté unirlas con pygame, pero no me va, creo que es<br />porque necesito de las &quot;banderas especiales&quot; para mezclar el valor<br />alfa de las imágenes al usar la función blit(), de lo contrario obtengo<br />un &quot;halo&quot; alrededor de estas, al quedar modificado el color que usaba<br />como colorkey <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" />. ¿hay docu sobre esas funciones? (BLEND_ADD,<br />BLEND_SUB, etc) ya que no encontre na de na.<br /><br />-*- -*-<br /><br />Aprovechando este tema, quisiera saber si alguien del foro tiene<br />experiencia haciendo sprites con aplicaciones 3d, ya que me da lata<br />el antialiasing, pues, como saben, pygame utiliza un colorkey para<br />la transparencia, el cual, segun unas pruebas que hice, es mucho más<br />rápido que usar RGBA. Pues al hacer render con antialiasing los bordes<br />de la imágen siempre me quedan mezclados con el fondo, causando<br />el &quot;halo&quot;, mientras que al usar key o sin antialias (funciones de blender),<br />me queda la figura dentada, como de sierra. Nisiquiera me han ayudado<br />en <a href="http://www.blender.guanajuato.net" class="postlink">http://www.blender.guanajuato.net</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Sab Ene 03, 2009 9:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-03T01:42:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1839#p1839</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1839#p1839"/>
<title type="html"><![CDATA[Re: Sincronizar animación al Frame-rate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1839#p1839"><![CDATA[
Saludos, por tu comentario del objeto Clock imagino que usas pygame, ¿cierto?.<br /><br />Si ese es el caso te comento una forma sencilla de controlar con exactitud<br />la velocidad de tu juego:<br /><br />Una forma sencilla, y que permite mucha exactitud, es utilizar el objeto<br />Clock y el retorno de su método tick. Por ejemplo, imagina que tienes<br />un rectángulo y quieres moverlo 50 pixels por segundo, en una<br />aplicación que corre a 60 cuadros por segundo (FPS):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;...&#93; # creación del rectangulo y la pantalla principal<br /><br />clock = pygame.time.Clock&#40;&#41;<br /><br />while True:                 # bucle principal.<br />    dt = clock.tick&#40;60&#41;     # solicita un rendimieto de 60 cuadros por segundo.<br />    dt = dt / 1000.0        # lleva 'dt' a la unidad de segundos.<br />                            #<br />                            # Por ejemplo:<br />                            # Si estuviera usando un contador, y a este le<br />                            # sumo 'dt' en cada ciclo, este contador<br />                            # aumentaría en 1 por cada segundo.<br /><br />    rect.x += 50 * dt       # 50 es la cantidad de pixeles que queremos que<br />                            # avance el rectangulo. A todo calculo numérico lo<br />                            # deberíamos afectar con 'dt', ya que este nos<br />                            # asegura la velocidad constante.<br />    <br />    &#91;...&#93;                   # impresión y todo lo demas...<br /></code></dd></dl><br /><br />Este ejemplo muestra como aplicar un movimiento relacionando &quot;tiempo&quot;,<br />&quot;rendimiento&quot; (fps) y &quot;velocidad&quot;.<br /><br />En el caso de tu animación los cálculos se podrían hacer en este esquema, por<br />ejemplo: Tú tienes una variable que indica el cuadro actual de animación,<br />digamos 'step', y una velocidad de animación deseada que te ha dado el<br />programa blender, digamos 'speed = 24'. Podrías hacer el cálculo así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;...&#93; # carga e inicialización.<br />clock = pygame.time.Clock&#40;&#41;<br />step = 0                    # comienza en el cuadro 0 de animación.<br />speed = 24                  # velocidad de animación.<br /><br />while True:                 # bucle principal.<br />    dt = clock.tick&#40;50&#41;     # solicita un rendimieto de 50 cuadros por segundo.<br />    dt = dt / 1000.0        # lleva 'dt' a la unidad de segundos.<br /><br />    step += speed * dt<br />    screen.blit&#40;frames&#91;int&#40;step&#41;&#93;, x, y&#41;     # suponiendo que 'frames' es una<br />                                             # lista con los cuadros de<br />                                             # animación, se toma el<br />                                             # correspondiente al cuadro<br />                                             # actual y se imprime.<br /><br />    &#91;...&#93;                   # todo lo demás.<br /></code></dd></dl><br /><br />ah, por cierto, suele ser útil mostrar el rendimiento del juego en<br />cuadros por segundo (fps) en la barra de título de la ventana. Utiliza<br />esta sentencia dentro del bucle para lograrlo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>fps = str&#40;int&#40;clock.get_fps&#40;&#41;&#41;&#41;<br />pygame.display.set_caption&#40;&quot;FPS:&quot; + fps&#41;<br /></code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ene 03, 2009 1:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-01-02T19:20:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1838#p1838</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1838#p1838"/>
<title type="html"><![CDATA[Sincronizar animación al Frame-rate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=429&amp;p=1838#p1838"><![CDATA[
Llevo una semana y no logro solucionarlo: Quiero que si el juego corre<br />a 10, 40 o 100 fps una animación de movimiento se vea siempre igual,<br />o sea que, si la animación tiene 24 frames por segundo (la hice en<br />blender), y dura 2 segundos, el juego sepa determinar como mostrar las<br />imagenes: Si va a  12fps, que se salte frames, para que la animación<br />dure lo mismo, o que durante varios ciclos muestre el mismo cuadro<br />en caso de que valla muy rapido.<br /><br />Imáginemos que tengo una animación que tiene 24 frames por cada<br />segundo que dura la animación:<br /><br />fps_sprite = 24<br />duracion   = 1666 # en milisegundos, o sea, en total son 40 frames<br />fps           = 40 # El frame-rate actual del juego<br /><br />Cambiar_de_cuadro_cada: fps * duracion / fps_sprite<br />Se supone que esto devuelve cada cuantos ciclos debemos mostrar<br />el siguiente cuadro de animación, pero a veces me da un flotante chico<br />o muy grande y no me salen las cuentas ñ_ñ, ¿alguien me ayuda?<br /> nota- También habia pensado darle a caba animación un objeto .Clock,<br />         el cual devuelve cuando milisegundos han pasado desde la ultima<br />         vez que se llamo a reloj.tick(), pero me parece más complicado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Vie Ene 02, 2009 7:20 pm</p><hr />
]]></content>
</entry>
</feed>