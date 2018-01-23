<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=284" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-10T13:01:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=284</id>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-04-10T13:01:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=284&amp;p=1110#p1110</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=284&amp;p=1110#p1110"/>
<title type="html"><![CDATA[solucionado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=284&amp;p=1110#p1110"><![CDATA[
buenas gente, ya encontre el problema y lo posteo por si acaso alguien mas lo tiene alguna vez <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" /> ya me lo agradecereis <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />cuando no usaba trasparencias, me llegaba la imagen y con un valor de pixels, pero al usar trasparencia, me daba valor al pixel de 0x000000 (null) cosa harto rara. pues bien, el problema se soluciona quitandole la aceleracion RLE a la funcion de trasparencia. asi funciona perfectamente.<br /><br />entonces, la funcion de trasparencia tendria la siguiente llamanda:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_SetColorKey&#40;img, SDL_SRCCOLORKEY /*| SDL_RLEACCEL*/, SDL_MapRGB&#40;img-&gt;format,255,0,0&#41;&#41;;<br /></code></dd></dl><br /><br /><br />gracias maije, de nada maije <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />un saludo a todos<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Jue Abr 10, 2008 1:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-04-10T12:35:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=284&amp;p=1109#p1109</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=284&amp;p=1109#p1109"/>
<title type="html"><![CDATA[conflicto enter getpixel y SDL_SetColorKey]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=284&amp;p=1109#p1109"><![CDATA[
hola a tod@s. mi problema es el siguiente:<br /><br />he creado una funcion que lo que hace es detectar una colision &quot;tosca&quot; entre dos sprites (con los bordes de anchura y altura de cada sprite), pero se quedaba corta para muchas cosas, porque no eran colisiones &quot;reales&quot; entre los contenidos de los bitmaps, asi que le he añadido un modulo de colision &quot;fina&quot; cuando detecta la otra, lo que hace es comprobar si los pixeles del rectangulo que surge de la superposicion de dos sprites son croma o no son croma y si estan superpuestos (colisionando). entonces eso funciona perfectamente, hago cualquier dibujo, le pongo un fondo croma (255,0,0 por ejemplo) y si le paso a la funcion que me detecte solo la colision fina, pues solo me detecta cuando algun color NO CROMA se superpone a un otro color NO CROMA del otro sprite, entonces, con eso funcionando, uso la funcion para quitar el fondo croma (SDL_SetColorKey), que funciona perfectamente, pero cuando los dos sprites entren en contanto (colision burda) da un error la funcion getpixel, en un else de comprobacion de profundidad de color, que supongo que causara conflicto con la profundidad de color del croma.... bueno, un jaleo, aqui os pego la funcion getpixel que es la &quot;oficial&quot; y la linea donde me da el error con su mensaje:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>// Nota, código obtenido del wiki de SDL<br />// http://www.libsdl.org/cgi/docwiki.cgi/Pixel_20Access<br />Uint32 getpixel&#40;SDL_Surface *surface, int x, int y&#41;<br />&#123;<br />    int bpp = surface-&gt;format-&gt;BytesPerPixel;<br />    /* Here p is the address to the pixel we want to retrieve */<br />    Uint8 *p = &#40;Uint8 *&#41;surface-&gt;pixels + y * surface-&gt;pitch + x * bpp;<br /><br />    switch&#40;bpp&#41; &#123;<br />    case 1:<br />        return *p;<br /><br />    case 2:<br />        return *&#40;Uint16 *&#41;p;<br /><br />    case 3:<br />        if&#40;SDL_BYTEORDER == SDL_BIG_ENDIAN&#41;<br />            return p&#91;0&#93; &lt;&lt; 16 | p&#91;1&#93; &lt;&lt; 8 | p&#91;2&#93;;<br />        else<br />            return p&#91;0&#93; | p&#91;1&#93; &lt;&lt; 8 | p&#91;2&#93; &lt;&lt; 16;<br /><br />    case 4:<br />        return *&#40;Uint32 *&#41;p;<br /><br />    default:<br />        return 0;       /* shouldn't happen, but avoids warnings */<br />    &#125;<br />&#125;</code></dd></dl><br /><br />me da error en el else del case 3:<br /><dl class="codebox"><dt>Code: </dt><dd><code>First-chance exception at 0x004121d1 in colision.exe: 0xC0000005: Access violation reading location 0x00008020.<br />Unhandled exception at 0x004121d1 in colision.exe: 0xC0000005: Access violation reading location 0x00008020.</code></dd></dl><br /><br />este error solo sale cuando empleo la funcion de colorKey, que me funciona perfectamente por lo general. la llamada a la funcion es esta y repito FUNCIONA: <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void CFrame::load&#40;char *path&#41; &#123;<br />   img = IMG_Load&#40;path&#41;;<br />   // Asignamos el color transparente al color rojo.<br />   SDL_SetColorKey&#40;img, SDL_SRCCOLORKEY | SDL_RLEACCEL, SDL_MapRGB&#40;img-&gt;format,255,0,0&#41;&#41;;<br />   img=SDL_DisplayFormat&#40;img&#41;;<br />&#125;</code></dd></dl><br /><br /><br />espero que alguien pueda ayudarme<br />muchas gracias por adelantado<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Jue Abr 10, 2008 12:35 pm</p><hr />
]]></content>
</entry>
</feed>