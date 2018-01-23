<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=864" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-14T16:38:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=864</id>
<entry>
<author><name><![CDATA[darckbaston]]></name></author>
<updated>2010-09-14T16:38:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4105#p4105</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4105#p4105"/>
<title type="html"><![CDATA[Re: Actualizar coordenadas de una imagen [SDL/C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4105#p4105"><![CDATA[
Si, lo que quiero hacer es una transparencia y que se vea lo que esta debajo de la imagen. Con problemas con SDL_imagen no son problemas reales sino que me esta costando lograr lo que yo quiero jajaja ahora si me parece que me bajare esos manuales que tu dices =) Muchas gracias de nuevo y siento ser medio molesto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2318">darckbaston</a> — Mar Sep 14, 2010 4:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-14T00:43:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4101#p4101</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4101#p4101"/>
<title type="html"><![CDATA[Re: Actualizar coordenadas de una imagen [SDL/C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4101#p4101"><![CDATA[
Para que usas el alpha, quieres atenuar la imagen, o darle un color de fondo, antes que algo, las imagenes png, tienen formato de pixel RGBA, por lo que les puedes dar trasparencias, y no es necesario darle dentro de sdl el valor del alpha &quot;solo&quot; se hace la trasparencia. <br />No se que tipos de problemas tengas con sdl_image, en realidad es facil, lee los libros de sdl, hay uno que esta orientado a videojuegos. y no creo que de haí puedas suponer lo que te he dicho, pero hay otro, tutorial de libsdl de antonio garcia, explica mas cosas, y te puede servir mas, no solo te hagas con una referencia, en esto de la programación de videojuegos siempre busca mas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Sep 14, 2010 12:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[darckbaston]]></name></author>
<updated>2010-09-13T21:02:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4097#p4097</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4097#p4097"/>
<title type="html"><![CDATA[Re: Actualizar coordenadas de una imagen [SDL/C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4097#p4097"><![CDATA[
Muchas gracias me sirvio =) eso lo habia intentado pero no sabia si habia una funcion que borrara la imagen ya creada para iniciarla de nuevo con otras caracteristicas. <br /><br />No quiero sonar muy molesto pero con SDL_imagen toy tieniendo muchos problemas, ahora no me anda el SDL_SetAlpha() con una imagen png y lo hago bien comparando con otro juego.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2318">darckbaston</a> — Lun Sep 13, 2010 9:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-12T01:41:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4095#p4095</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4095#p4095"/>
<title type="html"><![CDATA[Re: Actualizar coordenadas de una imagen [SDL/C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4095#p4095"><![CDATA[
Bueno los que hace el programa es correcto, le dices que compie la imagen con esa posicion y la muestras, luego copias otra ves la imagen a la superficie con otra posicion y la muestras de nuevo, lo que debe aparecer son las dos imagenes, nunca borraste la superficie, lo que hacen las funciones que usas son copiar pixeles y mostrarlos, la manera de evitar eso es poner un fondo del tamaño de la superficie, y luego copias todo lo que quieras, de esa forma primero se copiaran todos los pixeles del fondo y se sustituiran los anteriores.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Sep 12, 2010 1:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[darckbaston]]></name></author>
<updated>2010-09-12T00:53:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4094#p4094</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4094#p4094"/>
<title type="html"><![CDATA[Re: Actualizar coordenadas de una imagen [SDL/C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4094#p4094"><![CDATA[
He actualizado el tema con una nueva duda que me salto y como tiene relacion con el tema de las imagenes, que me esta volviendo loco, lo edite y no cree un tema nuevo.<br /><br /><blockquote><div><cite>darckbaston escribió:</cite><br />Holas, les agradesco la ayuda que me dieron en el tema anterior me sirvio mucho gracias. Ahora estoy devuelta con otros problemas con las imagenes, mi problema es que quiero actualizar las coordenadas de una imagen ya existente y siempre me crea otra y si trato de borrar la anterior no lo hace. Alguien sabe como puedo hacer para hacer esto?<br /><br />Aca les dejo un pequeño code donde tengo problemas (aunque me pasa en varios intentos que he echo):<br /><dl class="codebox"><dt>Code: </dt><dd><code>void Test::Probar()<br />{<br />   SDL_Surface *m_Imagen;<br />   SDL_Rect m_DRect;<br /><br />   m_Imagen = IMG_Load(&quot;Imagenes/PieceSelected.png&quot;);<br />   if(!m_Imagen)   <br />      printf(&quot;Error al cargar la imagen&quot;);<br /><br />   m_DRect.h = 0;<br />   m_DRect.w = 0;<br />   m_DRect.x = 100+(50*4);<br />   m_DRect.y = 50+(50*4);<br />   <br />   SDL_BlitSurface(m_Imagen, NULL, SDL_MainScreen, &amp;m_DRect);<br />   SDL_Flip(SDL_MainScreen);<br /><br />   m_DRect.h = 0;<br />   m_DRect.w = 0;<br />   m_DRect.x = 100+(50*5);<br />   m_DRect.y = 50+(50*5);<br /><br />   SDL_BlitSurface(m_Imagen, NULL, SDL_MainScreen, &amp;m_DRect);<br />   SDL_Flip(SDL_MainScreen);<br />}</code></dd></dl><br /></div></blockquote><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2318">darckbaston</a> — Dom Sep 12, 2010 12:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[darckbaston]]></name></author>
<updated>2010-09-05T03:01:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4051#p4051</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4051#p4051"/>
<title type="html"><![CDATA[Re: Detectar si se hizo click en una imagen [SDL/C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4051#p4051"><![CDATA[
Si me lo imagine eso de calcularo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> Muchas gracias por sus respuestas ahora voy a ver como me funciona tu codigo que me pasaste.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2318">darckbaston</a> — Dom Sep 05, 2010 3:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-05T02:55:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4050#p4050</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4050#p4050"/>
<title type="html"><![CDATA[Re: Detectar si se hizo click en una imagen [SDL/C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4050#p4050"><![CDATA[
Por si quieres implementar tu propia funcion, basicamente lo que se hace es verificar si el puntero se encuentra dentro de la imagen que quieres, que es detectar si un punto se encuentra dentro de un rectangulo, para eso vas a nececitar la funcion de sdl que lee la posicion del mouse, puedes encontrar mas detalles de como leer la posicion del puntero en los libros de SDL que se proporcionan en esta pagina. Incluso puedes hacer que se arrastre la imagen cuando la mantengas pulsada, <br />solo es cuestion de geometria<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Sep 05, 2010 2:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-04T14:08:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4046#p4046</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4046#p4046"/>
<title type="html"><![CDATA[Re: Detectar si se hizo click en una imagen [SDL/C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4046#p4046"><![CDATA[
el tablero ocupa la pantalla entera? las imagenes de las piezas son del mismo tamaño que las del tablero?<br />En caso de ser así, yo lo haría de esta forma:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>//Matriz que representa si una casilla esta ocupada o no<br />clase Casilla<br />{<br />  bool ocupado;<br />  SDL_Surface* base;<br /> SDL_Surface* pieza;<br />}<br /><br />Casilla tablero&#91;8&#93;&#91;8&#93;;<br /><br />dentro del bucle de juego:<br /><br />while(SDL_PollEvent(&amp;evento))<br />{<br />  //No me acuerdo de como se hacia en SDL, pero el tema es comprobar si ha habido pulsacion de raton<br />  if (raton_pulsado &amp;&amp; botton_pulsado == boton_izquierdo)<br />  {<br />    int fila = raton.y / alto_casilla;<br />    int columna = raton.x / ancho_casilla;<br />    if (tablero&#91;fila&#93;&#91;columna&#93;.ocupado)<br />    {<br />      //Obtenemos la posicion dentro de la casilla donde ha pulsado<br />      int offset_x = raton.x - columna * ancho_casilla;<br />      int offset_y = raton.y - fila * alto_casilla;<br />      if (pixel_de_imagen_pieza(offset_x, offset_y) == transparente)<br />        ha_pulsado_casilla = true;<br />      else<br />         ha_pulsado_pieza = false;<br />    }<br />    else<br />       ha_pulsado_casilla = true;<br />  }<br />}<br /></code></dd></dl><br /><br />hay pseudocódigo de por medio que deberás cambiar por las funciones SDL, que no recuerdo bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Sep 04, 2010 2:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[darckbaston]]></name></author>
<updated>2010-09-04T13:12:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4044#p4044</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4044#p4044"/>
<title type="html"><![CDATA[Actualizar coordenadas de una imagen [SDL/C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=864&amp;p=4044#p4044"><![CDATA[
Holas, les agradesco la ayuda que me dieron en el tema anterior me sirvio mucho gracias. Ahora estoy devuelta con otros problemas con las imagenes, mi problema es que quiero actualizar las coordenadas de una imagen ya existente y siempre me crea otra y si trato de borrar la anterior no lo hace. Alguien sabe como puedo hacer para hacer esto?<br /><br />Aca les dejo un pequeño code donde tengo problemas (aunque me pasa en varios intentos que he echo):<br /><dl class="codebox"><dt>Code: </dt><dd><code>void Test::Probar()<br />{<br />   SDL_Surface *m_Imagen;<br />   SDL_Rect m_DRect;<br /><br />   m_Imagen = IMG_Load(&quot;Imagenes/PieceSelected.png&quot;);<br />   if(!m_Imagen)   <br />      printf(&quot;Error al cargar la imagen&quot;);<br /><br />   m_DRect.h = 0;<br />   m_DRect.w = 0;<br />   m_DRect.x = 100+(50*4);<br />   m_DRect.y = 50+(50*4);<br />   <br />   SDL_BlitSurface(m_Imagen, NULL, SDL_MainScreen, &amp;m_DRect);<br />   SDL_Flip(SDL_MainScreen);<br /><br />   m_DRect.h = 0;<br />   m_DRect.w = 0;<br />   m_DRect.x = 100+(50*5);<br />   m_DRect.y = 50+(50*5);<br /><br />   SDL_BlitSurface(m_Imagen, NULL, SDL_MainScreen, &amp;m_DRect);<br />   SDL_Flip(SDL_MainScreen);<br />}</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2318">darckbaston</a> — Sab Sep 04, 2010 1:12 pm</p><hr />
]]></content>
</entry>
</feed>