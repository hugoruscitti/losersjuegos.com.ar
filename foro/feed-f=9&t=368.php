<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=368" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-09-03T14:16:07+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=368</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-09-03T14:16:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1629#p1629</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1629#p1629"/>
<title type="html"><![CDATA[Re: Otra vez el error de antes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1629#p1629"><![CDATA[
<blockquote><div><cite>dvd escribió:</cite><br />al cambiar el archivo personaje.cpp y personaje.h, he visto que se comportaba muy raro el programa pero que el código parecía correcto ...<br /></div></blockquote><br /><br />Saludos, muchas veces los problemas que presentan los programas<br />escritos con C o C++ son difíciles de encontrar. Esto es así porque<br />el programa generado por el compilador no hace controles<br />sobre el estado inicial de las variables, el desborde de vectores e<br />incluso muchas veces ignora si un acceso a memoria es válido<br />o no.<br /><br />Posiblemente el problema del programa se deba a algo como eso, <br />por ejemplo una variable sin inicializar... por lo tanto una de las <br />mejores medidas que puedes tomar es usar un programa como<br />valgrind:<br /><br />    <!-- m --><a class="postlink" href="http://valgrind.org/">http://valgrind.org/</a><!-- m --><br /><br />para que este verifique con detalle si tu programa lee o escribe<br />alguna variable de manera incorrecta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Sep 03, 2008 2:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-09-02T21:25:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1625#p1625</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1625#p1625"/>
<title type="html"><![CDATA[Otra vez el error de antes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1625#p1625"><![CDATA[
Me ha vuelto a pasar lo mismo: al cambiar el archivo personaje.cpp y personaje.h, he visto que se comportaba muy raro el programa pero que el código parecía correcto (ya estoy acostumbrado a pygame). Entonces solamente he cambiado la variable fps de main.cpp y al compilar todo funcionaba correctamente, luego he podido dejar la variable como estaba sin ningún problema. La próxima vez que me pase, pruebo a compilar a mano. A ver si realmente es del MakeFile.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Sep 02, 2008 9:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-09-02T13:20:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1623#p1623</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1623#p1623"/>
<title type="html"><![CDATA[Duda con SDL: movimiento raro de imagen]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1623#p1623"><![CDATA[
Hola, ¿el MakeFile está bien? lo digo porque me ha vuelto a pasar que se me arregla &quot;solo&quot; un fallo bastante raro: en el archivo personaje añadí unas variables de ángulos y esas cosas y se ponían a valores que no les decía. Después de buscar el error con printfs, decidí disminuir una variable de fps para leerlos mejor (solamente modifiqué eso). Al compilar, el error había desaparecido. Volví a colocar la variable fps a su estado anterior y seguía funcionando perfectamente <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> ¿A alguien más le ha pasado algún &quot;fenómeno paranormal&quot; de estos y sabe como solucionarlos?<br /><br />Creo que puede ser del MakeFile porque lo modifiqué sin tener mucha idea (porque tenía no se qué de generar documentación o algo así)(era el del ejemplo colmap, de la tortuga)<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Sep 02, 2008 1:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-08-31T22:19:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1622#p1622</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1622#p1622"/>
<title type="html"><![CDATA[Duda con SDL: movimiento raro de imagen]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1622#p1622"><![CDATA[
<blockquote><div><cite>Juan Carlos escribió:</cite><br />Fijate que en el destructor de la clase personaje (en el archivo personaje.cpp) el condicional &quot;if&quot; esta al revez.<br /></div></blockquote>Gracias, aún no comprendo del todo el código, sólo hice un copy/paste de fragmentos de otros archivos y adaptándolos a mi gusto, deduciendo como funcionaba.<br /><br /><br /><blockquote><div><cite>Juan Carlos escribió:</cite><br />Respecto al error de la imagen, ¿que sistema operativo estas usando?. Si no me falla la memoria, en mi Ubuntu, cuando yo intentaba hacer un blit en una posicion negativa (o sea que la imagen se desplaze por encima de la pantalla, o por la izquierda) se cerraba mi programa.<br /></div></blockquote>Yo también utilizo ubuntu, a lo mejor era por algún fallo del código o porque utilizamos versiones distintas  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> Si te pasas por Ubuntu, siempre puedes probar si este código funciona...<br /><br /><blockquote><div><cite>hugoruscitti escribió:</cite><br />&quot;The final blit rectangle is saved in dstrect after all clipping is performed ( srcrect is not modified).&quot;<br /><br />Por lo tanto, una forma de solucionarlo es crear un rectángulo<br />auxiliar antes de imprimir<br /></div></blockquote> Muchas gracias, había leído eso, pero entre que no acababa de entender la frase y que al intentar utilizar variables auxiliares me daba segmentantion fault... Creo que seremos buenos amigos ese error y yo... xD Espero que al empezar la facultad lo pierda de vista  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><br />Un comportamiento algo extraño lo de guardar el dstrect, supongo que para usos más avanzado será útil <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> Igualmente con lo que me has dicho va de perlas.<br /><br />Saludos y perdón por mi tardanza, he estado fuera unos días.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom Ago 31, 2008 10:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-08-29T20:45:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1621#p1621</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1621#p1621"/>
<title type="html"><![CDATA[Re: Duda con SDL: movimiento raro de imagen]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1621#p1621"><![CDATA[
<blockquote><div><cite>dvd escribió:</cite><br />... pero por la izquierda y por arriba no se sale de la pantalla. Se supone que el rectángulo tiene las variables x e y con signo así que no comprendo por que me da este problema. ¿Puede ser que lo modifica el blit? por que se desplaza lo de ese ciclo pero no mas.<br /></div></blockquote><br /><br />Sí, exactamente ahí se produce la anomalía. La función<br />SDL_BlitSurface modifica el parámetro &quot;dstrect&quot; para informar<br />al programador la region de pantalla que efectivamente se<br />dibujó. La documentación oficial [1] de la función dice algo como:<br /><br />  &quot;The final blit rectangle is saved in  dstrect   after all clipping is performed (  srcrect   is not modified).&quot;<br /><br />Por lo tanto, una forma de solucionarlo es crear un rectángulo<br />auxiliar antes de imprimir:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void personaje :: imprimir &#40;SDL_Surface *screen&#41;<br />&#123;<br />    SDL_Rect dst = &#123;rect.x, rect.y, 0, 0&#125;;<br />    SDL_BlitSurface&#40;image, NULL, screen, &amp;dst&#41;;<br />&#125;<br /></code></dd></dl><br /><br />Notas:<br /><br />[1] - <!-- m --><a class="postlink" href="http://docs.mandragor.org/files/Common_libs_documentation/SDL/SDL_Documentation_project_en/sdlblitsurface.html">http://docs.mandragor.org/files/Common_ ... rface.html</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Ago 29, 2008 8:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2008-08-29T20:26:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1620#p1620</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1620#p1620"/>
<title type="html"><![CDATA[Duda con SDL: movimiento raro de imagen]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1620#p1620"><![CDATA[
Hola,<br /><br />Fijate que en el destructor de la clase personaje (en el archivo personaje.cpp) el condicional &quot;if&quot; esta al revez.<br /><br />Deberia decir<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if&#40;image!=NULL&#41;&#123; /* */ &#125;</code></dd></dl><br /><br />Respecto al error de la imagen, ¿que sistema operativo estas usando?. Si no me falla la memoria, en mi Ubuntu, cuando yo intentaba hacer un blit en una posicion negativa (o sea que la imagen se desplaze por encima de la pantalla, o por la izquierda) se cerraba mi programa. <br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Vie Ago 29, 2008 8:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-08-29T16:52:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1619#p1619</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1619#p1619"/>
<title type="html"><![CDATA[Duda con SDL: movimiento raro de imagen]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=368&amp;p=1619#p1619"><![CDATA[
Hola llevo un tiempo leyendo cosas de c++ y SDL, tengo conocimientos de pygame y al estar basado en SDL me he sentido bastante cómodo. Pero al intentar hacer unas pruebas me han comenzado a surgir comportamientos inesperados:<br />1. La prueba consiste en una imagen que se mueve con las teclas, pero por la izquierda y por arriba no se sale de la pantalla. Se supone que el rectángulo tiene las variables x e y con signo así que no comprendo por que me da este problema. ¿Puede ser que lo modifica el blit? por que se desplaza lo de ese ciclo pero no mas.<br />2. Tenía problemas con los eventos pero ahora ya no me salen y creo que no he tocado nada de la parte esa  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" />.<br /><br />Como no es muy largo el código lo pego a continuación:<br />MakeFile<dl class="codebox"><dt>Code: </dt><dd><code>CXX = g++<br />OBJS = main.o personaje.o<br />CXXFLAGS = -g -Wall<br />BIN = personaje<br /><br />all: $&#40;BIN&#41;<br /><br />$&#40;BIN&#41;: $&#40;OBJS&#41;<br />   g++ -o personaje $&#40;OBJS&#41; -lSDL -ggdb3</code></dd></dl><br />main.cpp<dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &quot;personaje.h&quot;<br /><br />int main &#40;void&#41;<br />&#123;<br />   bool salir = false;<br />   class personaje personaje;<br />   SDL_Event event;<br />   SDL_Surface *screen;<br />   if &#40;SDL_Init&#40;SDL_INIT_VIDEO&#41; == -1&#41; <br />   &#123;<br />      printf&#40;&quot;Error al ejecutar SDL_Init: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />      return 1;<br />   &#125;<br />   <br />   screen = SDL_SetVideoMode&#40;320, 240, 16, SDL_DOUBLEBUF | SDL_HWSURFACE&#41;;<br /><br />   if &#40; screen == NULL &#41;<br />   &#123;<br />      printf&#40;&quot;Error al ejecutar SDL_SetVideoMode: %s\n&quot;, \<br />            SDL_GetError&#40;&#41;&#41;;<br />      return 1;<br />   &#125;<br />   <br />   SDL_WM_SetCaption&#40;&quot;Prueba sprite&quot;, NULL&#41;;<br />   while &#40;salir == false&#41;<br />   &#123;<br />/*      while &#40;SDL_PollEvent&#40;&amp;event&#41;&#41;<br />      &#123;<br />         switch &#40;event.type&#41;<br />         &#123;<br />            case SDL_QUIT:<br />               salir = true;<br />               break;<br /><br />            case SDL_KEYDOWN:<br />               switch &#40;event.key.keysym.sym&#41;<br />               &#123;<br />                  case SDLK_q:<br />                  case SDLK_ESCAPE:<br />                     salir = true;<br />                     break;<br /><br />                  default:<br />                     break;<br />               &#125;<br /><br />            default:<br />               break;<br />         &#125;<br />      &#125; */<br />      while &#40;SDL_PollEvent&#40;&amp;event&#41;&#41;<br />      &#123;<br />         if&#40;event.type == SDL_QUIT&#41;<br />            salir = true;<br />      &#125;<br />      SDL_FillRect&#40;screen, NULL, 0&#41;;<br />      personaje.actualizar&#40;&#41;;<br />      personaje.imprimir&#40;screen&#41;;<br />      SDL_Flip&#40;screen&#41;;<br />   &#125;<br />   SDL_Quit&#40;&#41;;<br />   return 0;<br />&#125;</code></dd></dl><br />personaje.cpp<dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;personaje.h&quot;<br /><br />personaje :: personaje &#40;&#41;<br />&#123;<br />   image = SDL_LoadBMP&#40;&quot;ima/personaje.bmp&quot;&#41;;<br />   if &#40;image == NULL&#41;<br />   &#123;<br />      printf&#40;&quot;Error al cargar la imágen: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />   &#125;<br />   rect.x = 50;<br />   rect.y = 60;<br />   rect.w = image-&gt;w;<br />   rect.h = image-&gt;h;<br />&#125;<br /><br />personaje :: ~personaje &#40;&#41;<br />&#123;<br />   if &#40;image == NULL&#41;<br />      SDL_FreeSurface&#40;image&#41;;<br />&#125;<br /><br />void personaje :: actualizar &#40;void&#41;<br />&#123;<br />   key = SDL_GetKeyState&#40;NULL&#41;;<br />   if &#40;key&#91;SDLK_UP&#93;&#41;<br />      rect.y = rect.y - 10;<br />   if &#40;key&#91;SDLK_DOWN&#93;&#41;<br />      rect.y = rect.y + 10;<br />   if &#40;key&#91;SDLK_LEFT&#93;&#41;<br />      rect.x = rect.x - 10;<br />   if &#40;key&#91;SDLK_RIGHT&#93;&#41;<br />      rect.x = rect.x + 10;<br />&#125;<br /><br />void personaje :: imprimir &#40;SDL_Surface *screen&#41;<br />&#123;<br />   SDL_BlitSurface&#40;image, NULL, screen, &amp;rect&#41;;<br />&#125;</code></dd></dl><br />personaje.h<dl class="codebox"><dt>Code: </dt><dd><code>#ifndef _JUGADOR<br />#define _JUGADOR<br /><br />#include &quot;SDL/SDL.h&quot;<br /><br />class personaje<br />&#123;<br />   public:<br />      personaje&#40;&#41;;<br />      ~personaje&#40;&#41;;<br />      void actualizar &#40;void&#41;;<br />      void imprimir &#40;SDL_Surface *screen&#41;;<br />      <br />   private:<br />      SDL_Surface *image;<br />      SDL_Rect rect;<br />      Uint8 *key;<br />&#125;;<br /><br /><br />#endif</code></dd></dl><br /><br />¿Alguna idea de por que pasa esto? Si es un fallo bastante tonto acordaros que es mi primera prueba con SDL.<br /><br />Saludos y gracias de antemano.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Vie Ago 29, 2008 4:52 pm</p><hr />
]]></content>
</entry>
</feed>