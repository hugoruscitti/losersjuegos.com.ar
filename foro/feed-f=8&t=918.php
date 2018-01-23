<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=918" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-07T15:47:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=918</id>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2010-11-07T15:47:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4383#p4383</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4383#p4383"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4383#p4383"><![CDATA[
Ya he encontrado el programa (ando de examenes y apenas tengo tiempo). Te pongo el código, de imágenes puedes poner las que quieras dentro de el directorio img y con el nombre jugador1.png y jugador2.png El código está muy comentado por lo que es fácil de entender. No obstante cualquier duda aquí estamos.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame.locals import *<br />import sys<br /><br /># ---------------------------------------------------------------------<br /># FUNCIONES DEL PROGRAMA<br /># ---------------------------------------------------------------------<br /><br /># La primera función que definiremos, creara una matriz nula, con<br /># el número de filas y columnas que le pasemos como parámetro.<br />def crea_matriz_nula(filas, columnas):<br />   matriz = &#91;&#93;<br />   for i in range(filas):<br />      matriz.append(&#91;None&#93; * columnas)<br />   return matriz<br /><br /># Necesitamos una función que compruebe donde esta el ratón en pantalla<br /># y que dependiendo de donde este y del boton pulsado modifique la<br /># matriz. Y de paso, también gestionaremos los eventos de cierre del<br /># juego.<br />def modifica_matriz_y_cierra():<br />   global casillas, matriz, le_toca_a_jugador1, le_toca_a_jugador2<br />   posicion_raton = pygame.mouse.get_pos()<br />   boton_pulsado = None<br />   for evento in pygame.event.get():<br />      if evento.type == MOUSEBUTTONDOWN:<br />         boton_pulsado = evento.button<br />      if evento.type == pygame.QUIT:<br />         sys.exit(0)<br />   raton = &#91;posicion_raton&#91;0&#93;, posicion_raton&#91;1&#93;, boton_pulsado&#93;<br />   filas = len(matriz)<br />   columnas = len(matriz&#91;0&#93;)<br />   casilla = 0<br />   for fila in range(filas):<br />      for columna in range(columnas):<br />         if raton&#91;0&#93; &gt;= casillas&#91;casilla&#93;.left and raton&#91;0&#93; &lt;=\<br />         casillas&#91;casilla&#93;.right and raton&#91;1&#93; &gt;= casillas&#91;casilla&#93;\<br />         .top and raton&#91;1&#93; &lt;= casillas&#91;casilla&#93;.bottom and raton&#91;2&#93;\<br />          == 1 and matriz&#91;fila&#93;&#91;columna&#93; == None:<br />            if le_toca_a_jugador1:<br />               matriz&#91;fila&#93;&#91;columna&#93; = 1<br />               le_toca_a_jugador1 = False<br />               le_toca_a_jugador2 = True<br />            elif le_toca_a_jugador2:<br />               matriz&#91;fila&#93;&#91;columna&#93; = 2<br />               le_toca_a_jugador2 = False<br />               le_toca_a_jugador1 = True<br />         casilla += 1<br />         <br /># Ahora haremos una función, que dependiendo de el valor de la matriz,<br /># imprima en pantalla las fichas.<br />def actualiza_fichas(jugador1, jugador2, matriz):<br />   filas = len(matriz)<br />   columnas = len(matriz&#91;0&#93;)<br />   for fila in range(filas):<br />      for columna in range(columnas):<br />         if matriz&#91;fila&#93;&#91;columna&#93; == 1:<br />            screen.blit(jugador1, (200 * columna + 9, 200 * fila \<br />            + 9))<br />         elif matriz&#91;fila&#93;&#91;columna&#93; == 2:<br />            screen.blit(jugador2, (200 * columna + 9, 200 * fila \<br />            + 9))<br />   # Ahora actualizamos la pantalla.<br />   pygame.display.flip()<br />   <br /># La suiguiente función, comprueba en el tablero todas las posibles<br /># maneras de ganar, y si alguien a ganado.<br />def ganador(matriz, jugador):<br />   ha_ganado = False<br />   if (matriz&#91;0&#93;&#91;0&#93; == jugador and matriz&#91;1&#93;&#91;0&#93; == jugador and matriz\<br />   &#91;2&#93;&#91;0&#93; == jugador) or (matriz&#91;0&#93;&#91;1&#93; == jugador and matriz&#91;1&#93;&#91;1&#93; ==\<br />    jugador and matriz&#91;2&#93;&#91;1&#93; == jugador) or (matriz&#91;0&#93;&#91;2&#93; == jugador \<br />    and matriz &#91;1&#93;&#91;2&#93; == jugador and matriz &#91;2&#93;&#91;2&#93; == jugador) or\<br />     (matriz&#91;0&#93;&#91;0&#93; == jugador and matriz &#91;0&#93;&#91;1&#93; == jugador and \<br />     matriz&#91;0&#93;&#91;2&#93; == jugador) or (matriz&#91;1&#93;&#91;0&#93; == jugador and \<br />     matriz&#91;1&#93;&#91;1&#93; == jugador and matriz&#91;1&#93;&#91;2&#93; == jugador) or \<br />     (matriz&#91;2&#93;&#91;0&#93; == jugador and matriz&#91;2&#93;&#91;1&#93; == jugador and matriz\<br />     &#91;2&#93;&#91;2&#93; == jugador) or (matriz&#91;0&#93;&#91;0&#93; == jugador and matriz&#91;1&#93;&#91;1&#93; \<br />     == jugador and matriz &#91;2&#93;&#91;2&#93; == jugador) or (matriz&#91;0&#93;&#91;2&#93; == \<br />     jugador and matriz&#91;1&#93;&#91;1&#93; == jugador and matriz&#91;2&#93;&#91;0&#93; == jugador):<br />        ha_ganado = True<br />   return ha_ganado<br />   <br /># Con la siguiente función, sabremos si ha habido un empate, es decir,<br /># si el tablero está lleno y no hay un ganador.<br />def hay_empate(matriz):<br />   empate = True<br />   filas = len(matriz)<br />   columnas = len(matriz&#91;0&#93;)<br />   for fila in range(filas):<br />      for columna in range(columnas):<br />         if matriz&#91;fila&#93;&#91;columna&#93; == None:<br />            empate = False<br />            break<br />   return empate         <br /><br /># ---------------------------------------------------------------------<br /># PROGRAMA PRINCIPAL<br /># ---------------------------------------------------------------------<br /><br /># Vamos a definir algunos aspectos de la pantalla y las matrices que<br /># que usaremos en el juego.<br />ancho_pantalla = 600<br />alto_pantalla = 600<br />screen = pygame.display.set_mode((ancho_pantalla, alto_pantalla))<br />pygame.display.set_caption('Tres en... ¡¡¡rock!!!')<br />matriz = crea_matriz_nula(3, 3)<br /><br /># Ahora creemos el escenario, con sus casillas, etc. Para las lineas<br /># que dividen las distintas casillas, vamos a dejar un espacio sin nada<br /># colocado en el, porque como el fondo de la pantalla es negro,<br /># parecerá que hemos dibujado lineas. Cuando veais el resultado,<br /># entendereis mejor a que me refiero.<br />tamanyo_casillas = 199<br /># Ahora, vamos a dar valor a otra variable, para que el escenario quede<br /># perfecto, probad a darle valor 199 en vez de 200 y vereis a que me<br /># refiero.<br />tamanyo_casillas_especial = 200<br />casillas_color = (255, 255, 255)<br />casilla1 = pygame.Rect(0, 0, tamanyo_casillas, tamanyo_casillas)<br />casilla2 = pygame.Rect(200, 0, tamanyo_casillas, tamanyo_casillas)<br />casilla3 = pygame.Rect(400, 0, tamanyo_casillas_especial, tamanyo_casillas)<br />casilla4 = pygame.Rect(0, 200, tamanyo_casillas, tamanyo_casillas)<br />casilla5 = pygame.Rect(200, 200, tamanyo_casillas, tamanyo_casillas)<br />casilla6 = pygame.Rect(400, 200, tamanyo_casillas_especial, tamanyo_casillas)<br />casilla7 = pygame.Rect(0, 400, tamanyo_casillas, tamanyo_casillas_especial)<br />casilla8 = pygame.Rect(200, 400, tamanyo_casillas, tamanyo_casillas_especial)<br />casilla9 = pygame.Rect(400, 400, tamanyo_casillas_especial, tamanyo_casillas_especial)<br />casillas = &#91;casilla1, casilla2, casilla3, casilla4, casilla5,\<br /> casilla6, casilla7, casilla8, casilla9&#93;<br />for i in range(len(casillas)):<br />      screen.fill(casillas_color, casillas&#91;i&#93;)<br /><br /># Ahora vamos a cargar las imágenes que usaremos en el juego.<br />jugador1 = pygame.image.load('img/jugador1.png')<br />jugador2 = pygame.image.load('img/jugador2.png')<br /><br /># Ahora, definiremos algunas variables, como la que determinara a que<br /># jugador le toca mover, y otras que necesitaremos más adelante.<br /># Procuro ponerles un nombre descriptivo para no tener que explicarlas<br /># una a una. Bueno, procedamos.<br />le_toca_a_jugador1 = True<br />le_toca_a_jugador2 = False<br />ha_ganado_jugador1 = False<br />ha_ganado_jugador2 = False<br /><br /><br /># ---------------------------------------------------------------------<br /># CÓDIGO TEMPORAL PARA PROBAR EL PROGRAMA<br /># ---------------------------------------------------------------------<br /><br />while True:<br />   modifica_matriz_y_cierra()<br />   actualiza_fichas(jugador1, jugador2, matriz)<br />   if ganador(matriz, 1):<br />      print '¡¡¡HA GANADO EL JUGADOR 1!!!'<br />      pygame.time.delay(2000)<br />      sys.exit(0)<br />   if ganador(matriz, 2):<br />      print '¡¡¡HA GANADO EL JUGADOR 2!!!'<br />      pygame.time.delay(2000)<br />      sys.exit(0)<br />   if hay_empate(matriz):<br />      print '¡¡¡HA HABIDO UN EMPATE!!!'<br />      pygame.time.delay(2000)<br />      sys.exit(0)<br /></code></dd></dl><br /><br />¡Un saludo!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Dom Nov 07, 2010 3:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2010-10-31T11:06:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4346#p4346</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4346#p4346"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4346#p4346"><![CDATA[
<blockquote><div><cite>c0na escribió:</cite><br />hola a todos!.. mil gracias por responder (:<br />tiene razón <span style="font-weight: bold">hugoruscitti</span> con eso de que uso ese programa por el libro, y lo de graficos no lo tengo muy claro =( pero por suerte hoy mi profesor dara consulta asi es que me aclarare en todo y lo que no entienda espero poder pedir ayuda a uts.<br /><br /><span style="font-weight: bold">Juanxo </span> vi el tema antiguo que me dejaste pero no encontre el programa :S de todos modos tengo unos cuantos sacados de internet para guiarme, aun asi. Lo que me complica es el tema de si tengo que hacerlo con graficas no se como diablos se manejo eso :'( resaba por que me dieran un ejercicio de resolucion matematica ¬¬ ... plop<br /><br /><span style="font-weight: bold">algarafa</span> si puedes y no es mucha molestia te agradeceria un monton me enviaras el link con tu tres en raya asi le hecho un vistaso!<br /><br /><br />en fin muchas gracias a todos! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> soy muy amables ^^<br /></div></blockquote><br />Ok, lo boy abuscar y te paso el link (igual tardo porque esta en alguna de mis cinco toneladas de CD's).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Dom Oct 31, 2010 11:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-10-31T07:55:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4345#p4345</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4345#p4345"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4345#p4345"><![CDATA[
Ha ok, me faltó especificar, en el archivo gato.cpp en la línea 258 se encuentra la función void Pantalla::rellenar (int num, bool sim)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Oct 31, 2010 7:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[c0na]]></name></author>
<updated>2010-10-31T06:10:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4344#p4344</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4344#p4344"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4344#p4344"><![CDATA[
Primero que nada agradecer muchisimo por la ayuda que me a brindado juanxo.. no se que seria de mi sin el (:<br />y segundo pedir la ayuda a todos los demas para encontrar el error en este codigo u.u<br /><br /><!-- m --><a class="postlink" href="http://pastebin.com/MCnSJvVp">http://pastebin.com/MCnSJvVp</a><!-- m --><br /><br />carlostex :S no encontre en el codigo q me enviaste la funcion  &quot;rellenar&quot; por ningun lado :/<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2341">c0na</a> — Dom Oct 31, 2010 6:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-10-30T17:44:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4343#p4343</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4343#p4343"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4343#p4343"><![CDATA[
Si, aquí está <a href="http://sourceforge.net/projects/tres-en-raya/files/tres-en-raya.zip/download" class="postlink">http://sourceforge.net/projects/tres-en-raya/files/tres-en-raya.zip/download</a><br />La función que te sirve se llama rellenar, y es la que imprime los caracteres en la pantalla. <br />quizás lo vas a modificar al pasarlo a python, por que la forma en la que está la función es muy burda, pues es un programa que me pasaron hace tiempo y ni yo lo escribí, solo la parte de Inteligencia artificial, pero espero que te sirva como guía.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Oct 30, 2010 5:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[c0na]]></name></author>
<updated>2010-10-30T05:20:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4342#p4342</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4342#p4342"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4342#p4342"><![CDATA[
Bueno <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> actualizo el post ya que juanxo me dio una mano gigante y quedo en esto! para que lo revisen y comente quien tenga deseos de ayudar ^^<br /><!-- m --><a class="postlink" href="http://pastebin.com/SHmFky4E">http://pastebin.com/SHmFky4E</a><!-- m --><br /><br />*<span style="font-weight: bold">carlostex </span> porfa enviame tu programa para sacar ideas de grafico, si?<br /><br />Saludos a todos (:<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2341">c0na</a> — Sab Oct 30, 2010 5:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-10-30T03:34:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4341#p4341</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4341#p4341"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4341#p4341"><![CDATA[
Disculpa, de entrada pensé que eras niño, pero que bueno que hay chicas que les interese esto.<br />Bueno si tu profesor espera que lo hagas con lo que sabes lo mas seguro es que este pensando que lo hagan en la terminal, se pueden dibujar los carácteres, tambíen tengo una tres en raya, lo que te puede servir es la forma en la que se imprimen los dibujos, pues esta hecho para la terminal, solo que es en C++.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Oct 30, 2010 3:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[c0na]]></name></author>
<updated>2010-10-30T02:20:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4340#p4340</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4340#p4340"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4340#p4340"><![CDATA[
me dijieron que posteara el codigo subiendolo a esta pagina asi todos podrian darme una mano corrigiendome =) espero se entienda..<br /><br /><!-- m --><a class="postlink" href="http://pastebin.com/tsGg8YcC">http://pastebin.com/tsGg8YcC</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2341">c0na</a> — Sab Oct 30, 2010 2:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-10-29T23:35:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4339#p4339</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4339#p4339"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4339#p4339"><![CDATA[
No se si te habrás mirado está documentacion: <!-- m --><a class="postlink" href="http://www3.uji.es/~dllorens/PythonG/">http://www3.uji.es/~dllorens/PythonG/</a><!-- m --> . Comentaste que no tendrías problemas con la lógica, así que creo que con que te cojas un par de funciones básicas, como es dibujar rectangulos, dibjuar dos lineas para hacer la X, dibujar un circulo para el otro personaje, mouse state para saber donde has pulsado, y alguna que otra más que viene especificada en la página que te he dado<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Oct 29, 2010 11:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[c0na]]></name></author>
<updated>2010-10-29T22:58:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4338#p4338</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4338#p4338"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4338#p4338"><![CDATA[
jaajja siii, tube que poner mi foto por eso <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />lo que me dices de python tienes razon =( no me han enseñado eso de pygame.. :/ asi es que no podre usarlo y para mas fui a ver que onda con el profe y nada, cero ayuda u.u no se que hare <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br /><br />Alguien que me pueda ayudaaar?? algun superman pleasee!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2341">c0na</a> — Vie Oct 29, 2010 10:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-10-29T20:43:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4337#p4337</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4337#p4337"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4337#p4337"><![CDATA[
jjajaja al final te has tenido que poner una foto para que se dejen de pensar que eres un tio xD<br /><br />El problema con el ejemplo que te hemos comentado rafa y yo es que está en python y hace uso de una librería adicional (pygame), por lo que no se si cumplirá tus requisitos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Oct 29, 2010 8:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[c0na]]></name></author>
<updated>2010-10-29T17:55:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4336#p4336</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4336#p4336"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4336#p4336"><![CDATA[
hola a todos!.. mil gracias por responder (:<br />tiene razón <span style="font-weight: bold">hugoruscitti</span> con eso de que uso ese programa por el libro, y lo de graficos no lo tengo muy claro =( pero por suerte hoy mi profesor dara consulta asi es que me aclarare en todo y lo que no entienda espero poder pedir ayuda a uts.<br /><br /><span style="font-weight: bold">Juanxo </span> vi el tema antiguo que me dejaste pero no encontre el programa :S de todos modos tengo unos cuantos sacados de internet para guiarme, aun asi. Lo que me complica es el tema de si tengo que hacerlo con graficas no se como diablos se manejo eso :'( resaba por que me dieran un ejercicio de resolucion matematica ¬¬ ... plop<br /><br /><span style="font-weight: bold">algarafa</span> si puedes y no es mucha molestia te agradeceria un monton me enviaras el link con tu tres en raya asi le hecho un vistaso!<br /><br /><br />en fin muchas gracias a todos! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> soy muy amables ^^<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2341">c0na</a> — Vie Oct 29, 2010 5:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-10-29T13:59:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4334#p4334</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4334#p4334"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4334#p4334"><![CDATA[
<blockquote><div><cite>c0na escribió:</cite><br />Y nos estamos guiadon por el libro de &quot;Introducción a la programacion con python&quot; (Andrés Marzal - Isabel Gracia) y lo ultimo que nos enseñaron es &quot;Tipos estructurados: registros y ficheros&quot;<br /></div></blockquote><br /><br />m... en ese libro usan pythonG, supongo que los gráficos para crear las figuras del 3 en raya los<br />tendrías que obtener de ahí:<br /><br /><!-- m --><a class="postlink" href="http://www3.uji.es/~dllorens/PythonG/">http://www3.uji.es/~dllorens/PythonG/</a><!-- m --><br /><br /><img src="http://www3.uji.es/~dllorens/downloads/screenshot-pythong.jpg" alt="Imagen" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Oct 29, 2010 1:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2010-10-29T11:54:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4333#p4333</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4333#p4333"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4333#p4333"><![CDATA[
¡Bienvenido a losersjuegos! Veo que habeís sacado a relucir mi antiguo tres en raya =) La verdad es que fijo que los hay mucho mejor escritos que ese, además de que los links que hay en ese post son antiguos y ya no funcionan. Si estás muy interesado en el ejemplo puedo buscar el CD en el que lo tengo y pasarte un link nuevo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Vie Oct 29, 2010 11:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-10-29T10:31:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4332#p4332</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4332#p4332"/>
<title type="html"><![CDATA[Re: Ayuda con python (tres en rayas)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=918&amp;p=4332#p4332"><![CDATA[
buenas c0na:<br /><br />Lo primero bienvenida. En cuanto a tu problemilla, deberías especificar que tipo de gráficos te piden ( por consola, con ventanas como los juegos típicos u otro tipo). Básicamente lo de hacer uno con ventanas sin una librería externa me parece complicado.<br /><br />Aquí tienes un post antiguo de un tres en raya: <!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=12&amp;t=457">viewtopic.php?f=12&amp;t=457</a><!-- l --><br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Oct 29, 2010 10:31 am</p><hr />
]]></content>
</entry>
</feed>