<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=75" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-04-14T09:16:34+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=75</id>
<entry>
<author><name><![CDATA[astut]]></name></author>
<updated>2007-04-14T09:16:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=265#p265</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=265#p265"/>
<title type="html"><![CDATA[Poner como transparente color pixel inferior izquierdo image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=265#p265"><![CDATA[
Muchas gracias por tus enseñanzas todo perfecto =)<br />Preguntare aqui cuando tenga dudas ^^<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=893">astut</a> — Sab Abr 14, 2007 9:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-04-14T01:54:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=264#p264</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=264#p264"/>
<title type="html"><![CDATA[Poner como transparente color pixel inferior izquierdo image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=264#p264"><![CDATA[
Primero, para que no quede rastro del sprite al moverlo, debes limpiar la superficie en donde estés dibujando los sprites, es decir, deberías &quot;blitear&quot; un fondo, o mapa antes de dibujar los otros elementos, o simplemente borrar todo el framebuffer con un color determinado (color negro).<br /><br />Por ejemplo yo hice una función <span style="font-weight: bold">Clear</span> para solucionar este problema y consiste en dibujar un rectángulo relleno de un color x, del tamaño de la ventana:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void Clear&#40;SDL_Surface *surface, Uint32 color&#41;<br />&#123;<br />    SDL_Rect rect=&#123;0, 0, surface-&gt;w, surface-&gt;h&#125;;<br /><br />    SDL_FillRect&#40;surface, &amp;rect, color&#41;;<br />&#125;<br /></code></dd></dl><br /><br />Y ahora si quiero limpiar la pantalla, antes de dibujar cualquier cosa, haría lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>// Color negro para el fondo<br />Uint32 color=SDL_MapRGB&#40;screen-&gt;format, 0, 0, 0&#41;;<br /><br />// Limpia la pantalla, suponemos que screen es la surface<br />// que nos retornó SDL_SetVideoMode<br />Clear&#40;screen, color&#41;;<br /></code></dd></dl><br /><br /><br />Sobre la segunda pregunta, cuando presionas una tecla y la sueltas ocurrirán los sucesos que están en tu código, la forma está correcta. <br /><br />Cada vez que presiones la tecla 'm'  el avión se moverá 3 pixeles hacia la derecha (supongo que así funciona tu código).<br /><br />También podrías utilizar la función SDL_GetKeyState, para obtener el estado completo del teclado, por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Uint8 *keyboard=SDL_GetKeyState&#40;0&#41;;<br /><br />if &#40;keyboard&#91;SDLK_RIGHT&#93;&#41; <br />  avion.Mover&#40;3,0&#41;;<br /><br /></code></dd></dl><br /><br />Si mantienes presionado el cursor derecho, la nave se seguirá moviéndo en ese sentido hasta que la sueltes u ocurra algún evento que hayas programado (colisión con algún objeto, limite de la pantalla, etc.).<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Sab Abr 14, 2007 1:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[astut]]></name></author>
<updated>2007-04-13T10:50:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=260#p260</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=260#p260"/>
<title type="html"><![CDATA[Poner como transparente color pixel inferior izquierdo image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=260#p260"><![CDATA[
Muchas gracias funciona a la perfeccion!, otra duda que tengo, cuando dibujo la imagen y cambio sus propiedades x e y (la muevo a otro lugar) la imagen no se borra, es decir, la imagen esta en las coordenadas 200,300 la muevo a las coordenadas 600,700 y sige estando en la coordenada 200,300 aunque tambien ha aparecido 600,700 lo explico asi para que no haya ni una sola confusion xD, uso SDL_Flip()  pero sige igual (flip lo uso para actualizar la ventana)<br />Gracias y saludos!<br />PD: Otra pregunta, cual es el evento para que mientras este pulsando una tecla ocurra algo?, uso lo siguiente para cuando presione una tecla ocurra algo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>while &#40;SDL_PollEvent&#40;&amp;evento&#41;&#41;<br />  &#123;<br />   if &#40;evento.type== SDL_KEYDOWN&#41;<br />   &#123;<br />    switch &#40;evento.key.keysym.sym&#41;<br />    &#123;<br />     case SDLK_ESCAPE: bucle= false; break;<br />     case SDLK_p: avion.CfgPosicion&#40;0,0&#41;; break;<br />     case SDLK_m: avion.Mover&#40;3,0&#41;; break;<br />     case SDLK_a: avion.CfgAlpha&#40;12,1&#41;; break;<br />    &#125;<br />   &#125;<br />  &#125;</code></dd></dl><br />Pero lo que pretendo es &quot;mientras&quot; la tecla este presionada ocurra algo, gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=893">astut</a> — Vie Abr 13, 2007 10:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2007-04-12T16:56:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=259#p259</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=259#p259"/>
<title type="html"><![CDATA[Poner como transparente color pixel inferior izquierdo image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=259#p259"><![CDATA[
Supongo que simplemente debes obtener el color de dicho pixel, entonces, cargas la imagen:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface* imagen = SDL_LoadBMP&#40; &quot;imagen.bmp&quot; &#41;;<br /></code></dd></dl><br />Obtienes el color del pixel de la esq. inf. izq., y lo asignas como el transparente:<br /><dl class="codebox"><dt>Code: </dt><dd><code>Uint32 key = getpixel&#40; imagen, 0, imagen-&gt;h &#41;;<br />SDL_SetColorKey&#40; imagen, SDL_SRCCOLORKEY, key &#41;;<br /></code></dd></dl><br /><br />Donde la función getpixel es:<br /><dl class="codebox"><dt>Code: </dt><dd><code>// Nota, código obtenido del wiki de SDL<br />// http://www.libsdl.org/cgi/docwiki.cgi/Pixel_20Access<br />Uint32 getpixel&#40;SDL_Surface *surface, int x, int y&#41;<br />&#123;<br />    int bpp = surface-&gt;format-&gt;BytesPerPixel;<br />    /* Here p is the address to the pixel we want to retrieve */<br />    Uint8 *p = &#40;Uint8 *&#41;surface-&gt;pixels + y * surface-&gt;pitch + x * bpp;<br /><br />    switch&#40;bpp&#41; &#123;<br />    case 1:<br />        return *p;<br /><br />    case 2:<br />        return *&#40;Uint16 *&#41;p;<br /><br />    case 3:<br />        if&#40;SDL_BYTEORDER == SDL_BIG_ENDIAN&#41;<br />            return p&#91;0&#93; &lt;&lt; 16 | p&#91;1&#93; &lt;&lt; 8 | p&#91;2&#93;;<br />        else<br />            return p&#91;0&#93; | p&#91;1&#93; &lt;&lt; 8 | p&#91;2&#93; &lt;&lt; 16;<br /><br />    case 4:<br />        return *&#40;Uint32 *&#41;p;<br /><br />    default:<br />        return 0;       /* shouldn't happen, but avoids warnings */<br />    &#125;<br />&#125;<br /></code></dd></dl><br />----------------------<br />Pequeña correción, al leer el pixel de la esquina hay que restar 1 a surface-&gt;h:<br /><dl class="codebox"><dt>Code: </dt><dd><code>Uint32 key = getpixel&#40; imagen, 0, imagen-&gt;h - 1 &#41;;<br />SDL_SetColorKey&#40; imagen, SDL_SRCCOLORKEY, key &#41;;<br /></code></dd></dl><br /><br />Suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Jue Abr 12, 2007 4:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[astut]]></name></author>
<updated>2007-04-12T07:39:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=258#p258</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=258#p258"/>
<title type="html"><![CDATA[Poner como transparente color pixel inferior izquierdo image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=75&amp;p=258#p258"><![CDATA[
Hola, me gustaria saber como poner como color transparente en una imagen el ultimo pixel inferior izquierdo de la imagen por ejemplo, ¿como se haria?, gracias (ya conozco la funcion SetColorKey)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=893">astut</a> — Jue Abr 12, 2007 7:39 am</p><hr />
]]></content>
</entry>
</feed>