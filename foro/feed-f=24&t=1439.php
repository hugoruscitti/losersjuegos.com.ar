<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1439" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-08-12T00:51:56+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1439</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-08-12T00:51:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=7018#p7018</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=7018#p7018"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=7018#p7018"><![CDATA[
Mmm... no lo se, reprogramar casi nunca en la solución, pero tampoco es común<br />que los programas se comporten raro de un dia para otro, ¿Podrías volver a la versión anterior<br />de tu proyecto que te funcionaba bien?. No hice cambios en pilas desde hace un buen tiempo ...<br />¿Estás haciendo backups de tu proyecto?<br /><br />Cualquier cosa en la que pueda ayudar avisame.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 12, 2012 12:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2012-08-11T22:18:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=7017#p7017</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=7017#p7017"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=7017#p7017"><![CDATA[
Hooola Hugo!!!!!!<br /><br /><br />Estoy al borde de la locura con esto!!!!! Me cambiaron la fecha de defensa para el 15 de septiembre y necesito que esto funcione <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> y aun no lo haceeee!!!!! no se que le paso que de un momento a otro se volvio loco...<br /><br />que puedo hacerrrrrrrrrr????????????????? sera que debo programarlo nuevamente Todoooo???<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Sab Ago 11, 2012 10:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-06-17T14:50:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6866#p6866</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6866#p6866"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6866#p6866"><![CDATA[
Hola Carla!,<br /><br />No cambié el menú, lo que creo que está ocurriendo es que deactivar<br />no está diseñada para ser llamada desde afuera... &quot;desactivar&quot; es<br />interna, solamente para que se invoque y evitar la repetición de<br />teclado o mouse.<br /><br />Por cierto, ¿recibiste mi correo?, arreglé casi todo el código que<br />me enviaste, pero no veo mucho comentario por aquí <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br /><br />Abrazo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Jun 17, 2012 2:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2012-06-16T19:09:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6864#p6864</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6864#p6864"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6864#p6864"><![CDATA[
Hola Hugo!!!<br /><br />tu le cambiaste algo a las funciones del menu??<br /><br />porque yo llame a la funcion. menu.descativar y me aparece esto:<br /><pre class="prettyprint">pilas.eventos.mueve_mouse.desconectar&#40;self.cuando_mueve_el_mouse&#41;<br />  File &quot;/usr/local/lib/python2.7/dist-packages/pilas-0.66-py2.7.egg/pilas/eventos.py&quot;, line 49, in desconectar<br />    raise ValueError&#40;&quot;La funcion indicada no estaba agregada como respuesta del evento.&quot;&#41;<br />ValueError: La funcion indicada no estaba agregada como respuesta del evento.</pre><br /><br />porque si llamo a una nueva escena me la monta sobre el menu pero sin borrar la escena anterior(menu). <br /><br />que puedo hacer?? para que me borre lo anterior y no se me ponga encima????<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Sab Jun 16, 2012 7:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-06-14T00:34:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6859#p6859</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6859#p6859"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6859#p6859"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br />Hugo he estado haciendo pruebas!<br /><br />y ejecute este código que tu tienes como ejemplo y me aparece una ventana negra con el motor='qtgl' y una ventana gris con el motor='qt'<br /><br /><pre class="prettyprint">import pilas<br />from pilas.escenas import Normal<br /><br />pilas.iniciar&#40;usar_motor=&#39;qt&#39;&#41;<br /><br /><br /><br />class Escena_Menu&#40;Normal&#41;:<br /><br />    def __init__&#40;self&#41;:<br />        pilas.escenas.Normal.__init__&#40;self&#41;<br />        pilas.fondos.Pasto&#40;&#41;<br /><br />        self.opciones =  [&#40;&#39;iniciar juego&#39;, self.iniciar_juego&#41;,<br />                          &#40;&#39;salir&#39;, self.salir_del_juego&#41;]<br /><br />        self.menu = pilas.actores.Menu&#40;self.opciones&#41;<br /><br /><br />    def iniciar_juego&#40;self&#41;:<br />            print &quot;Tengo que iniciar el juego&quot;<br /><br />    def salir_del_juego&#40;self&#41;:<br />            print &quot;Tengo que salir...&quot;<br />            import sys<br />            sys.exit&#40;0&#41;<br /><br />pilas.mundo.definir_escena&#40;Escena_Menu&#40;&#41;&#41;<br />pilas.ejecutar&#40;&#41;</pre><br /><br />si lo ejecuto son meterlo en una clase, se ejecuta perfectamente.. ¿que será?<br /></div></blockquote><br /><br />En este ejemplo en particular, lo que produce un problema es llamar a la función &quot;definir_escena&quot;.<br /><br />Podrías cambiar la linea:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>pilas.mundo.definir_escena(Escena_Menu())<br /></code></dd></dl><br /><br />por esta otra linea y va a funcionar bien:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Escena_Menu()<br /></code></dd></dl><br /><br />De todas formas, es en parte un error mío, pilas tendría que ser capaz de<br />emitir un error en esos casos. Voy a investigarlo y corregirlo. Mientras tanto, podrías<br />usar la solución que te comenté, va a funcionar bien.<br /><br />PD: recibí tu correo, voy a investigarlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Jun 14, 2012 12:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2012-06-14T00:16:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6858#p6858</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6858#p6858"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6858#p6858"><![CDATA[
Hugo he estado haciendo pruebas!<br /><br />y ejecute este código que tu tienes como ejemplo y me aparece una ventana negra con el motor='qtgl' y una ventana gris con el motor='qt'<br /><br /><pre class="prettyprint">import pilas<br />from pilas.escenas import Normal<br /><br />pilas.iniciar&#40;usar_motor=&#39;qt&#39;&#41;<br /><br /><br /><br />class Escena_Menu&#40;Normal&#41;:<br /><br />    def __init__&#40;self&#41;:<br />        pilas.escenas.Normal.__init__&#40;self&#41;<br />        pilas.fondos.Pasto&#40;&#41;<br /><br />        self.opciones =  [&#40;&#39;iniciar juego&#39;, self.iniciar_juego&#41;,<br />                          &#40;&#39;salir&#39;, self.salir_del_juego&#41;]<br /><br />        self.menu = pilas.actores.Menu&#40;self.opciones&#41;<br /><br /><br />    def iniciar_juego&#40;self&#41;:<br />            print &quot;Tengo que iniciar el juego&quot;<br /><br />    def salir_del_juego&#40;self&#41;:<br />            print &quot;Tengo que salir...&quot;<br />            import sys<br />            sys.exit&#40;0&#41;<br /><br />pilas.mundo.definir_escena&#40;Escena_Menu&#40;&#41;&#41;<br />pilas.ejecutar&#40;&#41;</pre><br /><br />si lo ejecuto son meterlo en una clase, se ejecuta perfectamente.. ¿que será?:<br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;<br />pilas.fondos.Pasto&#40;&#41;<br /><br />def iniciar_juego&#40;&#41;:<br />    print &quot;Tengo que iniciar el juego&quot;<br /><br />def salir_del_juego&#40;&#41;:<br />    print &quot;Tengo que salir...&quot;<br /><br />pilas.actores.Menu&#40;<br />        [<br />            &#40;&#39;iniciar juego&#39;, iniciar_juego&#41;,<br />            &#40;&#39;salir&#39;, salir_del_juego&#41;,<br />        ]&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Jue Jun 14, 2012 12:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2012-06-13T23:40:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6857#p6857</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6857#p6857"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6857#p6857"><![CDATA[
Hola hugo!!!!!<br /><br />ya te lo envié por correo!!!<br /><br />por favor avisame apenas veas algo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mié Jun 13, 2012 11:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-06-13T20:47:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6855#p6855</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6855#p6855"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6855#p6855"><![CDATA[
Hola Carla!, veo muchas veces la llamada a &quot;pilas.iniciar&quot;, solo hace falta<br />la primera, las demás no es bueno tenerlas... eso puede estar causando<br />el error.<br /><br />¿Podrías poner el código en dropbox, o algo en formato .zip completo?. Resulta que<br />con el código sólo no tenemos las imágenes y los directorios tal y cómo lo tienes en<br />tu compu. Cualquier cosa que no lo quieras publicar, no hay problema, ¿podrías<br />enviarmelo por email?.<br /><br />Nos vemos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Jun 13, 2012 8:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2012-06-13T13:26:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6854#p6854</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6854#p6854"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6854#p6854"><![CDATA[
Hola Chicos!!!!!<br /><br />ejecuté sólo el menu e igual m muestra la pantalla transparente  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> <br />y en la consola me aparece:<br /><pre class="prettyprint">X Error: GLXBadContextTag 175<br />  Extension:    155 &#40;Uknown extension&#41;<br />  Minor opcode: 11 &#40;Unknown request&#41;<br />  Resource id:  0x26<br /><br />X Error: GLXBadContextTag 175<br />  Extension:    155 &#40;Uknown extension&#41;<br />  Minor opcode: 11 &#40;Unknown request&#41;<br />  Resource id:  0x480000e</pre><br /><br /><br />mira tengo este archivo: ejecutar.py que contiene:<br /><br /><pre class="prettyprint">import pilas<br /><br /><br />pilas.iniciar&#40;usar_motor=&#39;qtgl&#39;&#41;<br />import escena_menu<br />escena_menu.EscenaMenu&#40;&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br /><br />y tengo el EscenaMenu() que contiene:<br /><pre class="prettyprint">import pilas<br /><br />import utils  #libreria creada por mi<br /><br />pilas.iniciar&#40;&#41;<br /><br />class EscenaMenu&#40;pilas.escenas.Escena&#41;:<br />    &quot;Escena de presentacion del juego.&quot;<br /><br />    def __init__&#40;self&#41;:<br />        pilas.actores.utils.eliminar_a_todos&#40;&#41;<br />        pilas.fondos.Noche&#40;&#41;.escala = 2<br />        self.menu_de_juego&#40;&#41;<br /><br /><br />    def menu_de_juego&#40;self&#41;:<br />        opciones_menu = [<br />        &#40;&quot;Salir&quot;, self.salir_del_juego&#41;<br />        ]<br />        self.menu = pilas.actores.Menu&#40;opciones_menu, y = 300&#41;<br /><br /><br />    def salir_del_juego&#40;self&#41;:<br />        pilas.terminar&#40;&#41;</pre><br /><br />y la libreria utils tiene:<br /><pre class="prettyprint">import pilas<br /><br />#VARIABLES<br />#-------------------------<br />Mensajes = {&#39;veryGood&#39;:&quot;Excelente!!&quot;, &#39;right&#39;:&quot;Muy Bien&quot;, &#39;wrong&#39;:&quot;Ohh, sera para la proxima!&quot;}<br />#initial_y = 250<br />#initial_x = -580<br />initial_y = 200<br />initial_x = -500<br /><br />pilas.iniciar&#40;&#41;<br /><br />#imagenes<br />#----------------Grillas<br />grilla_tiempo = pilas.imagenes.cargar_grilla&#40;&#39;IQ/imagenes/reloj.png&#39;, 5, 3&#41;<br /><br /><br />##----------------fondo<br />fondo_salon = &#39;IQ/imagenes/fondos/fondo-1.png&#39;<br />fondo_tabla = &#39;IQ/imagenes/fondos/fondo-7.png&#39;<br />puntuacion  = &#39;IQ/imagenes/fondos/puntuacion.png&#39;<br />menu        = &#39;IQ/imagenes/fondos/menu.png&#39;<br /><br />#----------------botones<br />exce_normal = &#39;IQ/imagenes/botones/excelente-normal.png&#39;<br />exce_pres   = &#39;IQ/imagenes/botones/excelente-pres.png&#39;<br />exce_desact = &#39;IQ/imagenes/botones/excelente-desact.png&#39;<br />bien_normal = &#39;IQ/imagenes/botones/bien-normal.png&#39;<br />bien_pres   = &#39;IQ/imagenes/botones/bien-pres.png&#39;<br />bien_desact = &#39;IQ/imagenes/botones/bien-desact.png&#39;<br />mal_normal  = &#39;IQ/imagenes/botones/mal-normal.png&#39;<br />mal_pres    = &#39;IQ/imagenes/botones/mal-pres.png&#39;<br />mal_desact  = &#39;IQ/imagenes/botones/mal-desact.png&#39;<br /><br /><br />#FUNCIONES<br />#-------------------------<br />def move_button&#40;button,difX,difY&#41;:<br />    &quot;Mover botons&quot;<br />    button.definir_posicion&#40;button.x + difX, button.y + difY&#41;<br /><br />def press_escape&#40;*k, **kv&#41;:<br />    &quot;Vuelve al menu principal&quot;<br />    import escena_menu<br />    escena_menu.EscenaMenu&#40;&#41;<br /><br />def crear_dialogo&#40;&#41;:<br />    dialogue = pilas.actores.Dialogo&#40;modo_automatico=False&#41;<br />    return dialogue<br /><br /><br />def crear_personaje&#40;x,y,escala=1.<img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cool.gif" alt="8&#41;" title="Cool" />:<br />    &quot;Crear protagonista del Juego&quot;<br />    img = pilas.imagenes.cargar&#40;&#39;IQ/imagenes/Carlita.png&#39;&#41;<br />    personaje = pilas.actores.Actor&#40;img&#41;<br />    personaje.definir_posicion&#40;x,y&#41;<br />    personaje.escala = escala<br />    return personaje<br /><br />def imagen_puntaje&#40;x,y,escala=0.4&#41;:<br />    &quot;Mostrar el marcador del juego&quot;<br />    img = pilas.imagenes.cargar&#40;&#39;IQ/imagenes/hoja-puntaje.png&#39;&#41;<br />    puntaje = pilas.actores.Actor&#40;img&#41;<br />    puntaje.definir_posicion&#40;x, y&#41;<br />    puntaje.escala = escala<br />    return puntaje<br /><br />def getLine&#40;count,fileRead&#41;:<br />    &quot;Obtener una linea de un archivo de texto&quot;<br />    line = fileRead[count]<br />    return line<br /><br />def showLine&#40;x,y,line,size&#41;:<br />    &quot;Mostrar una linea de un archivo de texto&quot;<br />    question = pilas.actores.Texto&#40;line,x,y&#41;<br />    question.color = pilas.colores.azul<br />    question.escala = size<br />    question.centro = &#40;&#39;izquierda&#39;,&#39;centro&#39;&#41;<br /><br />def splitLine&#40;line&#41;:<br />    &quot;Separar en String una linea de un archivo leido&quot;<br />    palabra = line.split&#40;&quot;:&quot;&#41;<br />    return palabra<br /><br /><br />def defText&#40;x,y&#41;:<br />    mostrar = pilas.actores.Texto&#40;&#41;<br />    mostrar.definir_posicion&#40;x, y&#41;<br />    mostrar.escala = 3<br />    return mostrar</pre><br /><br /><br />Yo utilizo Ninja-IDE para trabajar con python (por si acaso)!<br />Y siemroe utilizo el mismo equipo para trabajar.<br /><br />sera que me puedes enviar un ejemplo usando lo quete envie? a ver si te funciona bien? por favor!!! estoy nerviosa porq mi defensa se acerca  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mié Jun 13, 2012 1:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-06-12T00:11:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6853#p6853</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6853#p6853"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6853#p6853"><![CDATA[
Hola Carla!, si te aparece en los dos ejemplos la ventana es una buena noticia!, pilas<br />está funcionando.<br /><br />¿Existe la posibilidad de que subas el código para verlo?.<br /><br />Otra opción es levantar una sola escena, e ir poco a poco viendo que parte del<br />juego se cierra exactamente. ¿Todas las pruebas las estás haciendo sobre el<br />mismo equipo no?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Jun 12, 2012 12:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2012-06-11T22:41:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6852#p6852</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6852#p6852"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6852#p6852"><![CDATA[
Hola Chicos!!!<br /><br /><br />ya probé y en ambas me aparece la pantalla!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Jun 11, 2012 10:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-06-11T16:22:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6851#p6851</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6851#p6851"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6851#p6851"><![CDATA[
Genial, probemos otros dos ejemplos:<br /><br />Con opengl:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pilas<br /><br />pilas.iniciar(usar_motor='qtgl')<br /><br />actor = pilas.actores.Actor()<br />pilas.avisar(&quot;Este es un ejemplo de actor creado pero sin imagen.&quot;)<br /><br />pilas.ejecutar()<br /></code></dd></dl><br /><br />Sin opengl:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pilas<br /><br />pilas.iniciar(usar_motor='qt')<br /><br />actor = pilas.actores.Actor()<br />pilas.avisar(&quot;Este es un ejemplo de actor creado pero sin imagen.&quot;)<br /><br />pilas.ejecutar()<br /></code></dd></dl><br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Jun 11, 2012 4:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2012-06-10T20:54:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6849#p6849</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6849#p6849"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6849#p6849"><![CDATA[
Buenas Tardes!!!<br /><br />Listo!!<br /><br />ya probé y me aparece la ventana negra<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Dom Jun 10, 2012 8:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-06-07T06:35:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6840#p6840</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6840#p6840"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6840#p6840"><![CDATA[
Vamos a por lo siguiente, OpenGL:<br /><br /><pre class="prettyprint"># -*- coding: utf-8 -*-<br /><br />import sys<br />from PyQt4 import QtGui, QtCore<br /><br />try:<br />    from PyQt4 import QtOpenGL<br />    from PyQt4.QtOpenGL import QGLWidget<br />except ImportError:<br />    QGLWidget = object<br />    print &quot;No se encuentra soporte OpenGL en este equipo.&quot;<br /><br />class WidgetGL&#40;QGLWidget&#41;:<br /><br />    def __init__&#40;self, &#41;:<br />        if not QGLWidget:<br />            print &quot;Lo siento, OpenGL no esta disponible...&quot;<br /><br />        QGLWidget.__init__&#40;self, None, None, QtCore.Qt.WindowStaysOnTopHint&#41;<br />    <br />def main&#40;&#41;:<br />    app = QtGui.QApplication&#40;sys.argv&#41;<br />    <br />    w = WidgetGL&#40;&#41;<br />    w.resize&#40;250, 150&#41;<br />    w.move&#40;300, 300&#41;<br />    w.setWindowTitle&#40;&#39;Pruebas Qt&#39;&#41;<br />    w.show&#40;&#41;<br /><br />    sys.exit&#40;app.exec_&#40;&#41;&#41;<br />    <br />if __name__ == &#39;__main__&#39;:<br />    main&#40;&#41;</pre><br /><br />Te tendria que aparecer otra ventana negra.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Jue Jun 07, 2012 6:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2012-06-07T01:34:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6838#p6838</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6838#p6838"/>
<title type="html"><![CDATA[Re: Problemas con Pilas--- GRAVE---]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1439&amp;p=6838#p6838"><![CDATA[
Hooolaaaa<br /><br />ya probé!!!<br /><br />y me aparece una ventana<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Jue Jun 07, 2012 1:34 am</p><hr />
]]></content>
</entry>
</feed>