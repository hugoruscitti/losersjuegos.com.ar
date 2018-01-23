<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=76" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-04-16T22:22:40+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=76</id>
<entry>
<author><name><![CDATA[hugetto]]></name></author>
<updated>2007-04-16T22:22:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=268#p268</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=268#p268"/>
<title type="html"><![CDATA[Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=268#p268"><![CDATA[
Ok ya lo he conseguido:<br />SDL_gfx guarda los includes en una capeta de includes y la libreria estatica en diferentes carpetas de lo normal /usr/local/include y /usr/local/lib<br /><br />Simplemente he copiado los archivos donde normalmente se encuentran el resto /usr/include y /usr/lib y he añadido las siguientes credenciales al compilador &quot;-lSDL_gfx&quot;<br /><br />Hasta pronto<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1162">hugetto</a> — Lun Abr 16, 2007 10:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugetto]]></name></author>
<updated>2007-04-16T22:02:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=267#p267</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=267#p267"/>
<title type="html"><![CDATA[Linker]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=267#p267"><![CDATA[
Grácias por la información ahora necessitaria saber los parametros que le tengo que pasar al linker para que me encuentre las librerias estaticas.<br /><br />Por ejemplo para el SDL, SLD_image y el mysql uso<br /><dl class="codebox"><dt>Code: </dt><dd><code> -lSDL -L/usr/lib -Wall -g -L/usr/lib/mysql -lmysqlclient -lpthread -lSDL_image</code></dd></dl><br /><br />Uso linux con kdevelop.<br /><br />Muchisimas grácias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1162">hugetto</a> — Lun Abr 16, 2007 10:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-04-14T01:35:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=263#p263</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=263#p263"/>
<title type="html"><![CDATA[Efecto espejo en una imagen (Vertical Flip)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=263#p263"><![CDATA[
Hola!<br /><br />Supongo que estás usando SDL. Si es así puedes utilizar la biblioteca<br />SDL_gfx, que entre otras cosas trae funciones para rotar superficies. <br /><br />Específicamente deberías usar la función:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * rotozoomSurfaceXY &#40;SDL_Surface *src, double angle, double zoomx, double zoomy, int smooth&#41;;<br /></code></dd></dl><br /><br />Por ejemplo si la imagen es un personaje caminando hacia la derecha (por defecto), y si queremos mostrarlo caminando a la izquierda, haríamos lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface *sprite; // Imagen del personaje<br />SDL_Surface *tmp;    // Surface temporal donde quedara rotada la imagen<br />SDL_Rect pos;        // Posición del sprite<br /><br />// Supuesta posicion del sprite<br />pos.x=100;<br />pos.y=200;<br /><br />// Efecto espejo en el eje x del sprite<br />tmp=rotozoomSurfaceXY&#40;sprite, 0, -1, 1, 0&#41;;<br /><br />// Copia la superficie rotada a la pantalla<br />SDL_BlitSurface&#40;tmp, 0, screen, &amp;pos&#41;;<br /><br />// Eliminamos la superficie temporal<br />SDL_FreeSurface&#40;tmp&#41;;<br /></code></dd></dl><br /><br /><span style="font-weight: bold">Página oficial de SDL_gfx</span><br /><!-- m --><a class="postlink" href="http://www.ferzkopp.net/joomla/content/view/19/14/">http://www.ferzkopp.net/joomla/content/view/19/14/</a><!-- m --><br /><br />Tengo una versión ya compilada y lista para usar de SDL_gfx en Windows (para el compilador MinGW). <br /><br />Puedes bajarla desde aquí:<br /><br /><span style="font-weight: bold">SDL_gfx 2.0.16</span><br /><!-- m --><a class="postlink" href="http://www2.netexplora.com/rcaf/utilidades_programacion/sdl/SDL_gfx-2.0.16.zip">http://www2.netexplora.com/rcaf/utilida ... 2.0.16.zip</a><!-- m --><br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Sab Abr 14, 2007 1:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugetto]]></name></author>
<updated>2007-04-13T20:45:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=262#p262</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=262#p262"/>
<title type="html"><![CDATA[Efecto espejo en una imagen (Vertical Flip)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=76&amp;p=262#p262"><![CDATA[
Buenas he estado buscando por todo internet alguna función que haga el efecto espejo de una imagen ya que mi juego queria que tuviese bastantas imagenes y es más sencillo si puedo utilizar una función antes que hacer otra plantilla con todos los sprites girados.<br /><br />Muchas grácias por adelantado.<br /><br />Atentamente: <a href="http://hugetto.homelinux.com" class="postlink">Hugo</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1162">hugetto</a> — Vie Abr 13, 2007 8:45 pm</p><hr />
]]></content>
</entry>
</feed>