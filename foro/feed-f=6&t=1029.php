<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1029" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-28T18:32:02+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1029</id>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-28T18:32:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4929#p4929</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4929#p4929"/>
<title type="html"><![CDATA[Re: Problema con pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4929#p4929"><![CDATA[
Es complicado lo que pasa porque estoy usando el doble buffer<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>//ACA ES DONDE CREO LA PANTALLA Y SE LA ASIGNO A SDL_DISPLAY<br /> if((pantalla = SDL_SetVideoMode(anchoVen,altoVen, canBit,SDL_FULLSCREEN| SDL_DOUBLEBUF)) == NULL)<br /> {<br />  return NULL;<br /> }<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Vie Ene 28, 2011 6:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-01-28T17:30:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4928#p4928</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4928#p4928"/>
<title type="html"><![CDATA[Re: Problema con pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4928#p4928"><![CDATA[
<blockquote><div><cite>pablo9891 escribió:</cite><br />Basicamente el problema que estoy teniendo es que cuando mi juego se encuentra en pantalla completa, cada vez que se mueve alguno de los sprites queda una estela detras, a que se puede llegar a deber??<br /></div></blockquote><br /><br />Yo había tenido un problema similar cuando hice el juego Ceferino... Resulta<br />que SDL, al funcionar en pantalla completa no habilita el doublebuffer a menos<br />que se lo indiques.<br /><br />Es decir, si tu juego funciona en modo ventana, no hay problemas, por<br />omisión la ventana tendrá doublebuffer.<br /><br />Entonces, en mi caso, había usado el flag SDL_DOUBLEBUF (o algo así)<br />en la inicialización del modo de video...<br /><br />Avisanos si tu problema se resuelve con eso, según recuerdo en ceferino<br />lo había solucionado así.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Ene 28, 2011 5:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-28T15:58:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4925#p4925</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4925#p4925"/>
<title type="html"><![CDATA[Re: Problema con pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4925#p4925"><![CDATA[
<dl class="codebox"><dt>Code: </dt><dd><code> while(ejecuta)<br /> {<br />  inicioTiempo = SDL_GetTicks();<br />  SDL_PumpEvents();<br />  key = SDL_GetKeyState(NULL);<br />  if(key&#91;SDLK_ESCAPE&#93;)<br />  {<br />   ejecuta = false;<br />  }<br />  if(key&#91;SDLK_UP&#93;)<br />  {<br />   pantalla = jugadorDos.moverImagen(1,pantalla);<br />  }<br />  if(key&#91;SDLK_DOWN&#93;)<br />  {<br />   pantalla = jugadorDos.moverImagen(2,pantalla);<br />  }<br />  if(key&#91;SDLK_s&#93;)<br />  {<br />   pantalla = jugadorUno.moverImagen(3,pantalla);<br />  }<br />  if(key&#91;SDLK_p&#93;)<br />  {<br />   do<br />   {<br />    key = SDL_GetKeyState(NULL);<br />   }while(key&#91;SDLK_p&#93;);<br />  }<br />  if(key&#91;SDLK_x&#93;)<br />  {<br />   pantalla = jugadorUno.moverImagen(4,pantalla);<br />  }<br />  jugadorUno.dibujarImagen(pantalla);<br />  jugadorDos.dibujarImagen(pantalla);<br />  miBalon.moverImagen(jugadorUno,jugadorDos,pantalla);<br />  admin.actualizaContadorUno(pantalla,50,50);<br />  admin.actualizaContadorDos(pantalla,1095,50);<br />  admin.velocidad(pantalla,miBalon.getVelX());<br />  admin.altura(pantalla,miBalon.getVelY());<br />  if(Sirius::punDos == 11 ||Sirius::punUno == 11 )<br />  {<br />   ejecuta = false;<br />  }<br />  admin.controlTiempo(inicioTiempo);<br />  SDL_Flip(pantalla);//ACTUALIZO PANTALLA<br /> }</code></dd></dl><br /><br /><br />lo que hago cada vez que actualizo es borrar la posicion en que se encontraba el frame en la vuelta anterior y vuelvo a dibujarlo<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface* Barra::borrarImagen(SDL_Surface* pantalla)<br />{<br /> SDL_Rect rectangulo;<br /><br /> rectangulo.x = getX();<br /> rectangulo.y = getY();<br /> rectangulo.w = getAnc();<br /> rectangulo.h = getAlto();<br /> SDL_FillRect(pantalla,&amp;rectangulo,SDL_MapRGB(pantalla-&gt;format,0,0,0));<br /><br /> return pantalla;<br />}<br /><br /><br /><br />SDL_Surface* Barra::dibujarImagen(SDL_Surface* pantalla)<br />{<br />  SDL_Rect rectanguloDestino;<br />  rectanguloDestino.x = getX();<br />  rectanguloDestino.y = getY();<br /><br />  SDL_BlitSurface(miFrame.img,NULL, pantalla, &amp;rectanguloDestino);<br />  return pantalla;<br />}</code></dd></dl><br /><br /><br />ahi les dejo el codigo de como dibujo la imagen y de como la borro, la imagen la borro en otra funcion cuando recibo el evento que se produjo y actualizo la posicion del frame<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Vie Ene 28, 2011 3:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-28T08:38:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4923#p4923</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4923#p4923"/>
<title type="html"><![CDATA[Re: Problema con pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4923#p4923"><![CDATA[
código¿?<br /><br />Estás rellenando a negro la pantalla cada vez que empiezas un frame?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Ene 28, 2011 8:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-28T06:57:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4922#p4922</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4922#p4922"/>
<title type="html"><![CDATA[Problema con pantalla completa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1029&amp;p=4922#p4922"><![CDATA[
Basicamente el problema que estoy teniendo es que cuando mi juego se encuentra en pantalla completa, cada vez que se mueve alguno de los sprites queda una estela detras, a que se puede llegar a deber??<br /><br />les dejo una foto del problema:<br /><br /><a href="http://img192.imageshack.us/i/preguntaw.jpg/" class="postlink"><img src="http://img192.imageshack.us/img192/1705/preguntaw.jpg" alt="Imagen" /></a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Vie Ene 28, 2011 6:57 am</p><hr />
]]></content>
</entry>
</feed>