<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=288" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-27T11:14:06+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=288</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-27T11:14:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1247#p1247</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1247#p1247"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1247#p1247"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />En todo caso se puede usar una biblioteca para colocar todos los<br />recursos en un archivo bajo compresión (como hacen Quake, <br />Doom o similares). Usando SDL resulta sencillo usar zziplib [1]<br /><br />Como programador de juegos tu principal objetivo es hacer el juego, no<br />me gustaría ver que abandones esto por dedicar todo tu tiempo<br />a detalles menores.<br />[1] - <!-- m --><a class="postlink" href="http://zziplib.sourceforge.net/">http://zziplib.sourceforge.net/</a><!-- m --><br /></div></blockquote><br /><br />La pagina de zziplib ya la he visto, pero esta en ingles y me preguntaba si sabes de algun manual, algun pdf, en español que explique tanto como instalarla como el modo de usarla.<br /><br />Y no abandono la programacion del videojuego en si por este detalle, es la curiosidad de como hacian aplicaciones que no traian ningun archivo mas que el .exe sin ninguna imagen.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Abr 27, 2008 11:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-04-26T22:29:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1242#p1242</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1242#p1242"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1242#p1242"><![CDATA[
<blockquote><div><cite>lacabra25 escribió:</cite><br />Y ¿con lo interesante que es esa funcion para no tener que distribuir junto con el programa un monton de archivos de imagen, sino todo junto en el .exe; como es que en ningun manual de SDL (o por lo menos de los que yo llevo leidos) aparece esta funcion?<br /></div></blockquote><br /><br />No se trata mucho esa función porque no es demasiado relevante, <br />imagina que el objetivo de usar SDL es poder hacer juegos  o <br />emuladores, se pierde mucho tiempo tratando de ocultar recursos<br />de juego... y no se gana demasiado, ¿realmente importa si el<br />juego tiene muchos archivos .png o .txt.?, no, para nada.<br /><br />En todo caso se puede usar una biblioteca para colocar todos los<br />recursos en un archivo bajo compresión (como hacen Quake, <br />Doom o similares). Usando SDL resulta sencillo usar zziplib [1]<br /><br />Como programador de juegos tu principal objetivo es hacer el juego, no<br />me gustaría ver que abandones esto por dedicar todo tu tiempo<br />a detalles menores. Te recomiendo usar directamente archivos .png o<br />.bmp, cuando ganes confianza haciendo juegos vas a poder avanzar<br />en otras cosas de menos importancia. Imagina que tu juego tiene 50<br />imágenes, ¿vas a transladar todo eso a matrices?. ¿y si luego necesitas<br />actualizar alguna imagen?. Conviene usar archivos de imágenes, todos<br />hacen lo mismo, por algo es.<br /><br />Buena suerte.<br /><br />[1] - <!-- m --><a class="postlink" href="http://zziplib.sourceforge.net/">http://zziplib.sourceforge.net/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Abr 26, 2008 10:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-26T10:02:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1239#p1239</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1239#p1239"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1239#p1239"><![CDATA[
Otra cosa que casi se me olvidava, en la funcion para crear la superficie con la imagen a partir de la estructura no se le indica si quiero que la cree en la memoria principal o en la memoria de video, ¿donde la crea?, ¿como podria elegir que la creara en la principal o en la de video segun me interese?<br /><br />Y ¿con lo interesante que es esa funcion para no tener que distribuir junto con el programa un monton de archivos de imagen, sino todo junto en el .exe; como es que en ningun manual de SDL (o por lo menos de los que yo llevo leidos) aparece esta funcion?<br /><br />Y gracias por todo. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Abr 26, 2008 10:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-26T09:57:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1238#p1238</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1238#p1238"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1238#p1238"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />. Si nadie se ofrece, con gusto me hago un tiempo para escribir un ejemplo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /></div></blockquote><br /><br />Pues yo (como ya te supondras al haber contestado esta pregunta) no es que tenga demasiada experiencia manipulando imagenes pixel a pixel ni incorporando el codigo de la imagen al del propio progama, por lo que si ya te has animado a hacer el ejemplo, preferiria que lo hicieras tu en vez de ponerme yo ha hacerlo, si te sirve de ayuda te adjunto el primer programa para probar que he hecho con la funcion que me dijistes.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdlib.h&gt;<br />#include &lt;stdio.h&gt;<br />#include &lt;math.h&gt;<br />#include &lt;time.h&gt;<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_image.h&gt;<br /><br />static const struct &#123;<br />  int      w;<br />  int      h;<br />  int      bpp; /* 3:RGB, 4:RGBA */ <br />  Uint8     pixels&#91;100 * 100 * 3 + 1&#93;;<br />&#125; tierra_agrietada = &#123;<br />  100, 100, 3,<br />  &quot;\200U+\200U+\200U+U+\0\200U+\377\324\252\377\324\252\324\252\252\324\252&quot;<br />  &quot;\252\324\252\200\324\252\200\324\252\200\324\252\200\324\252\200\324\252&quot;<br />  &quot;\200\324\252\252\324\252\252\324\252\252\324\252\252\324\252\200\324\252&quot;<br />  &quot;\200\324\252\200\324\252\200\324\252\200\324\252\252\252\200\200\324\252&quot;<br />  &quot;\200\324\252\200\252\200\200\252\200\200\324\252\200\324\252\200\324\252&quot;<br />  &quot;\200\324\252\200\324\324\252\324\252\200\324\252\200\324\252\200\324\252&quot;<br />  &quot;\200\324\252\200\252\252\200\324\252\200\324\252\200\324\252\200\324\252&quot;<br />  &quot;\200\324\252\200\324\252\200\252\200U\324\252\200\324\252\200\252\200U\252&quot;<br />  &quot;\200U\324\200\200\324\252\200\324\252\200\324\252\200\324\252\200\324\252&quot;<br /> &#91;...&#93;<br /></code></dd></dl><br /><br />ADMIN edita: phpbb no soporta código tan extenso (ver la<br />posibilidad de subir el código a otro servidor y adjuntar aquí<br />un link).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Abr 26, 2008 9:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-04-18T15:54:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1198#p1198</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1198#p1198"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1198#p1198"><![CDATA[
<blockquote><div><cite>lacabra25 escribió:</cite><br />Gracias Geo, ahora funciona perfectamente, no estaria mal tener algun ejemplo de imagenes dentro del propio codigo del programa en la seccion de ejemplos.<br /></div></blockquote><br />En eso estaba pensando, la verdad es que ya había contemplado hacer algo similar pero hasta ahora no lo había hecho <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />. En fin, de lo que se trata es tener la idea de cómo hacer las cosas, no saberse de memoria los nombres de funciones para tal o cual efecto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />. Si nadie se ofrece, con gusto me hago un tiempo para escribir un ejemplo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br /><blockquote><div><cite>lacabra25 escribió:</cite><br />¿La inversa de esto, como se hace, como de la superficie sacan el codigo en C necesario para hacer una superficie a partir de el?, se que gimp lo hace y todo eso, y no creo que haciendolo gimp me ponga yo a hacerlo, pero es por curiosidad y por aprender más sobre las superficies, c y sdl.<br /></div></blockquote><br />En realidad es sencillo, lo básico para representar una imagen es conocer sus dimensiones (ancho y alto), el número de bits que se utilizan para representar cada pixel de la imagen y la información de los pixeles en si. De una SDL_Surface, puedes obtener estos datos fácilmente, de allí te tocaría exportarlos a un archivo de texto organizándolo de forma que pueda ser utilizado, en el caso de Gimp, lo hace creando una estructura con los elementos básicos para representar la información de la imagen.<br /><br /><blockquote><div><cite>lacabra25 escribió:</cite><br />No entiendo la ultima linea, sobre Glib de gimp, ¿a que te refieres exactamente?, si he usado algo de Glib de Gimp, la verdad es que no me he enterado de que lo he usado.<br /></div></blockquote><br />Ah, es que al guardar la imagen como código en C, Gimp muestra este diálogo:<br /><img src="http://img374.imageshack.us/img374/1869/pantallazoguardarcomofupj9.png" alt="Imagen" /><br />By <a href="http://profile.imageshack.us/user/geomx" class="postlink">geomx</a> at 2008-04-18<br /><br />En el diálogo se tiene la opción &quot;Usar tipos Glib (guint8*)&quot;, es simplemente para los tipos a usar para la estructura que se utiliza para representar la imagen. Por ejemplo, si se activa, el array de pixeles será del tipo <span style="font-style: italic">guint8*</span>, mientras que si no está activa se usa <span style="font-style: italic">unsigned char*</span>.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Abr 18, 2008 3:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-18T14:20:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1195#p1195</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1195#p1195"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1195#p1195"><![CDATA[
Gracias Geo, ahora funciona perfectamente, no estaria mal tener algun ejemplo de imagenes dentro del propio codigo del programa en la seccion de ejemplos.<br /><br />¿La inversa de esto, como se hace, como de la superficie sacan el codigo en C necesario para hacer una superficie a partir de el?, se que gimp lo hace y todo eso, y no creo que haciendolo gimp me ponga yo a hacerlo, pero es por curiosidad y por aprender más sobre las superficies, c y sdl.<br /><br />No entiendo la ultima linea, sobre Glib de gimp, ¿a que te refieres exactamente?, si he usado algo de Glib de Gimp, la verdad es que no me he enterado de que lo he usado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Vie Abr 18, 2008 2:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-04-18T04:26:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1193#p1193</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1193#p1193"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1193#p1193"><![CDATA[
<ul><li>El cuarto parámetro es bits por pixel, no bytes por pixel, en el caso de la imagen que muestras debería ser un 24 y no 3.</li><li>Algo similar para el quinto parámetro (pitch), el cual es el ancho de la imagen en pixeles por el número de bytes por pixel, en este caso sería 100 x 3.</li><li>En tu imagen no exportaste el canal alfa, así que no necesitas poner la máscara 0xff000000, en su lugar pon un 0.</li></ul><br />Prueba con algo como esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>   imagen = SDL_CreateRGBSurfaceFrom&#40;<br />      &amp;tierra_agrietada.pixels,<br />      tierra_agrietada.width,<br />      tierra_agrietada.height,<br />      tierra_agrietada.bytes_per_pixel * 8,   // 1 byte = 8 bits =&gt; bits por pixel = bytes por pixel * 8<br />      tierra_agrietada.width * tierra_agrietada.bytes_per_pixel,   // scanline = ancho * bytes por pixel<br />      0x000000ff, 0x0000ff00, 0x00ff0000, 0<br />   &#41;;<br /></code></dd></dl><br />Como ves, es mejor utilizar las variables de dimensión y bytes por pixel que están en la estructura en lugar de escribir sus valores numéricos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />Notas:<br />* en las máscaras, puedes eliminar el primer byte correspondiente al canal alfa, pues no se utiliza, entonces serían 0x0000ff, 0x00ff00 y 0xff0000.<br />* no utilicé los tipos de Glib para exportar la imagen en Gimp.<br /><br />Suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Abr 18, 2008 4:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-17T16:22:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1188#p1188</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1188#p1188"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1188#p1188"><![CDATA[
Geo, he intentado usar la funcion que me dijistes, pero no se si es que la he usado mal o que algo falla, pero aunque la superficie devuelta es diferente de NULL cuando la intento mostrar por pantalla, en la ventana no se ve nada mas que el fondo negro. Pego el codigo que use de ejemplo, aunque la matriz de la imagen la abreviare quitando la parte central:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdlib.h&gt;<br />#include &lt;stdio.h&gt;<br />#include &lt;math.h&gt;<br />#include &lt;time.h&gt;<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_image.h&gt;<br /><br />static const struct &#123;<br />  int      w;<br />  int      h;<br />  int      bpp; /* 3:RGB, 4:RGBA */ <br />  Uint8     pixels&#91;100 * 100 * 3 + 1&#93;;<br />&#125; tierra_agrietada = &#123;<br />  100, 100, 3,<br />  &quot;\200U+\200U+\200U+U+\0\200U+\377\324\252\377\324\252\324\252\252\324\252&quot;<br />  &quot;\252\324\252\200\324\252\200\324\252\200\324\252\200\324\252\200\324\252&quot;<br />   &quot;\252\200\324\252\200\252\200U\252\200U\324\252\200\324\252\200\324\252\200&quot;<br />  &quot;\324\200U\252\200U\252U+\200U+\200U+\200U+\377\252\200\377\324\252\377\252&quot;<br />  &quot;\252\324\252\200\252\200U\200U+\200U+\200U+\252\200U\377\324\252\377\324&quot;<br />  &quot;\252\324\252\200\324\252\200\252\252\200\252\200U\252\200U\200U+\200U+\200&quot;<br />  &quot;+\0\200+\0\200U+\252\200U\324\252\200\324\252\200\324\252\200&quot;,<br />&#125;;<br /><br />int main&#40;int argc, char *argv&#91;&#93;&#41;&#123;<br />SDL_Surface *pantalla, *imagen;<br />SDL_Rect dest;<br />/* Iniciando SDL*/<br />if &#40;SDL_Init&#40;SDL_INIT_VIDEO&#41; &lt; 0&#41; &#123;<br />printf&#40;&quot;EGI - No fue posible iniciar SDL, error: %s\n&quot;,SDL_GetError&#40;&#41;&#41;;<br />exit&#40;1&#41;;<br />&#125;<br />/* Iniciando modo de video*/<br />pantalla = SDL_SetVideoMode&#40;200,200,24,SDL_SWSURFACE| SDL_DOUBLEBUF&#41;;<br />if &#40;pantalla == NULL&#41; &#123;<br />printf&#40;&quot;EIV - No se puede inicializar el modo de video 457x457 24 Bits en la memoria de video con doble buffer, error: %s\n&quot;,SDL_GetError&#40;&#41;&#41;;<br />exit&#40;1&#41;;<br />&#125;<br />imagen= SDL_CreateRGBSurfaceFrom&#40;&amp;tierra_agrietada.pixels, 100, 100, 3, 400, 0xff000000, 0x00ff0000, 0x0000ff00, 0x000000ff&#41;;<br />if&#40;imagen != NULL&#41;&#123;<br />/*mostramos la imagen en la pantalla centrada si es mas pequeña que la pantalla*/<br />dest.x = 0;<br />dest.y = 0;<br />dest.w = 100;<br />dest.h = 100;<br />SDL_BlitSurface&#40;imagen, NULL, pantalla, &amp;dest&#41;;<br />if&#40;SDL_Flip&#40;pantalla&#41; == -1&#41;&#123;<br />SDL_UpdateRect&#40;pantalla, 0, 0, pantalla-&gt;w, pantalla-&gt;h&#41;;<br />&#125;<br />printf&#40;&quot;Imagen mostrada\n&quot;&#41;;<br />&#125;<br />else&#123;<br />printf&#40;&quot;Imagen NULL\n&quot;&#41;;<br />&#125;<br />SDL_Delay&#40;4000&#41;;<br />return 0;<br />&#125;<br /></code></dd></dl><br /><br />¿que podria estar causando que no funcione?, ¿como puedo conseguir que funcione?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Abr 17, 2008 4:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-17T14:40:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1183#p1183</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1183#p1183"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1183#p1183"><![CDATA[
el parametro pitch, ¿que es exactamente? gracias por el enlace pero no esplica los parametros, aunque el unico que no se es el pitch ese.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Abr 17, 2008 2:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-04-17T06:38:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1181#p1181</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1181#p1181"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1181#p1181"><![CDATA[
<!-- m --><a class="postlink" href="http://libsdl.es/wiki/doku.php?id=sdl_api:sdl_creatergbsurfacefrom">http://libsdl.es/wiki/doku.php?id=sdl_a ... urfacefrom</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Jue Abr 17, 2008 6:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-16T13:56:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1176#p1176</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1176#p1176"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1176#p1176"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br />Una es crear una Surface y luego copiar pixel a pixel, pero no es nada eficiente. La alternativa sería copiar el bloque de memoria completo a una SDL_Surface o mejor utilizar SDL_CreateRGBSurfaceFrom <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /></div></blockquote><br /><br />Un pequeño detalle, a la funcion SDL_CreateRGBSurfaceFrom que parametros hay que pasarle y que devuelve, como funciona esa funcion, esque no la conozco y nunca la he usado. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mié Abr 16, 2008 1:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-04-15T16:58:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1171#p1171</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1171#p1171"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1171#p1171"><![CDATA[
<blockquote><div><cite>lacabra25 escribió:</cite><br />Hola, me descargue gimp para hacer los dibujos para mis juegos, y vi que la imagen se podia guardar con formato .c, de forma que define una estructura y crea una variable para guardar la imagen, supongo que cada byte del array de los pixels, se correspondera con el byte de cada canal de un pixel, pero aun asy no se como pasar la imagen a una superficie SDL, ¿dibujo pixel a pixel la superficie pasando como valores de rojo, verde y azul al color del pixel cada byte del array?,<br /></div></blockquote><br />Una es crear una Surface y luego copiar pixel a pixel, pero no es nada eficiente. La alternativa sería copiar el bloque de memoria completo a una SDL_Surface o mejor utilizar SDL_CreateRGBSurfaceFrom <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br /><blockquote><div><cite>lacabra25 escribió:</cite><br />¿como identifico en que posicion esta cada byte de cada canal de cada pixel?, para esta ultima pregunta se me ocurrio que como el array mide ancho(o alto, no se seguro) X alto(o ancho, no se seguro) X canales + 1 podria identificar la posicion del pixel en las coordenadas (x; Y) de la siguiente forma (x * 3) + (y * alto * 3) + canal pero no estoy seguro si esto funcionaria.<br /></div></blockquote><br />Si, así se hace.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mar Abr 15, 2008 4:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-14T18:15:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1166#p1166</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1166#p1166"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1166#p1166"><![CDATA[
Hola, me descargue gimp para hacer los dibujos para mis juegos, y vi que la imagen se podia guardar con formato .c, de forma que define una estructura y crea una variable para guardar la imagen, supongo que cada byte del array de los pixels, se correspondera con el byte de cada canal de un pixel, pero aun asy no se como pasar la imagen a una superficie SDL, ¿dibujo pixel a pixel la superficie pasando como valores de rojo, verde y azul al color del pixel cada byte del array?, ¿como identifico en que posicion esta cada byte de cada canal de cada pixel?, para esta ultima pregunta se me ocurrio que como el array mide ancho(o alto, no se seguro) X alto(o ancho, no se seguro) X canales + 1 podria identificar la posicion del pixel en las coordenadas (x; Y) de la siguiente forma (x * 3) + (y * alto * 3) + canal pero no estoy seguro si esto funcionaria. ¿como podria pasar la imagen a una superficie SDL?<br /><br />Codigo de la imagen en c:<br /><dl class="codebox"><dt>Code: </dt><dd><code>/* GIMP RGB C-Source image dump &#40;tierra_agrietada.c&#41; */<br /><br />static const struct &#123;<br />  guint      width;<br />  guint      height;<br />  guint      bytes_per_pixel; /* 3:RGB, 4:RGBA */ <br />  guint8     pixel_data&#91;100 * 100 * 3 + 1&#93;;<br />&#125; tierra_agrietada = &#123;<br />  100, 100, 3,<br />  &quot;\200U+\200U+\200U+U+\0\200U+\377\324\252\377\324\252\324\252\252\324\252&quot;<br />  &quot;\252\324\252\200\324\252\200\324\252\200\324\252\200\324\252\200\324\252&quot;<br />  &quot;\200\324\252\252\324\252\252\324\252\252\324\252\252\324\252\200\324\252&quot;<br />  &quot;\200\324\252\200\324\252\200\324\252\200\324\252\252\252\200\200\324\252&quot;<br />  &quot;\200\324\252\200\252\200\200\252\200\200\324\252\200\324\252\200\324\252&quot;<br />  &quot;\200\324\252\200\324\324\252\324\252\200\324\252\200\324\252\200\324\252&quot;<br />  &quot;\200\324\252\200\252\252\200\324\252\200\324\252\200\324\252\200\324\252&quot;<br />  &quot;\200\324\252\200\324\252\200\252\200U\324\252\200\324\252\200\252\200U\252&quot; <br />&#91;...&#93;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Lun Abr 14, 2008 6:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-11T15:24:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1121#p1121</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1121#p1121"/>
<title type="html"><![CDATA[¿Imagenes dentro del juego, sin cargarlas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=288&amp;p=1121#p1121"><![CDATA[
Hola, he visto programas que uno se lo descarga y solo es un archivo .exe, y se ejecuta sin instalacion ni necesidad de ningun archivo ni imagen y me preguntaba como se podria usar SDL y tener las imagenes sin necesidad de cargarlas de ningun archivo. ¿como podria hacerlo?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Vie Abr 11, 2008 3:24 pm</p><hr />
]]></content>
</entry>
</feed>