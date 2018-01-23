<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=134" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-08-24T13:49:08+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=134</id>
<entry>
<author><name><![CDATA[jeisson]]></name></author>
<updated>2007-08-24T13:49:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=498#p498</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=498#p498"/>
<title type="html"><![CDATA[Tengo una pregunta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=498#p498"><![CDATA[
Quiero que me ayuden a resolver una duda,<br />Resulta que soy un principiante en esto del SDL y he estado leyendo los primeros 3 tutoriales de una pagina llamada lazyfoo. Ocurre que para mostrar una imagen hay que declarar e implementar un par de funciones manualmente y yo tratè de poner esas dos funciones en una clase, asì nada mas tendria que incluir el .h y llamar a esas funciones. Pero ocurre que me sale una serie de errores que me tienen la vida triste son estos.<br /> <br />19 F:\proyecto SDL compilado\imagen.h expected init-declarator before '*' token <br /> <br />19 F:\proyecto SDL compilado\imagen.h expected `,' or `;' before '*' token<br /> <br />44 F:\proyecto SDL compilado\imagen.h prototype for `void imagen::apply_surface(int, int,   SDL_Surface*, SDL_Surface*)' does not match any in class `imagen' <br /> <br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1806">jeisson</a> — Vie Ago 24, 2007 1:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-07-12T19:28:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=434#p434</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=434#p434"/>
<title type="html"><![CDATA[Crea Superficie en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=434#p434"><![CDATA[
Muchisimas gracias, ahora funciona todo bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Jue Jul 12, 2007 7:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-07-11T01:31:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=431#p431</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=431#p431"/>
<title type="html"><![CDATA[Crea Superficie en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=431#p431"><![CDATA[
Hola:<br /><br />Te dejo una función que hice hace un tiempo, y genera una superficie de cualquier tamaño y con el mismo formato de la pantalla actual, en la memoria de video. Luego limpia la superficie completa de color negro.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface *CreateSurface&#40;int w, int h&#41;<br />&#123;<br />    const SDL_VideoInfo *vi=SDL_GetVideoInfo&#40;&#41;;<br /><br />    SDL_Surface *surface=SDL_CreateRGBSurface&#40;SDL_HWSURFACE, w, h,<br />                         vi-&gt;vfmt-&gt;BitsPerPixel,<br />                         vi-&gt;vfmt-&gt;Rmask, vi-&gt;vfmt-&gt;Gmask,<br />                         vi-&gt;vfmt-&gt;Bmask, vi-&gt;vfmt-&gt;Amask&#41;;<br /><br />    SDL_FillRect&#40;surface, 0, 0&#41;;<br /><br />    return surface;<br />&#125;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Mié Jul 11, 2007 1:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-07-10T20:50:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=430#p430</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=430#p430"/>
<title type="html"><![CDATA[Crea Superficie en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=430#p430"><![CDATA[
Hola, hice lo que muestra el ejemplo<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface *imagen;<br />Uint32 rmask, gmask, bmask, amask;<br />    rmask = 0xff000000;<br />    gmask = 0x00ff0000;<br />    bmask = 0x0000ff00;<br />    amask = 0x000000ff;<br /><br />imagen=SDL_CreateRGBSurface&#40;SDL_HWSURFACE, 100, 100, 24, rmask,gmask,bmask,amask&#41;;</code></dd></dl><br /><br />luego imprimi la imagen y no sucede nada. Luego sustitui amask por 0 en la funcion SDL_CreateRGBSurface y logre obtener un rectangulo negro pero no se como cambiar de color.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mar Jul 10, 2007 8:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-07-10T19:40:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=429#p429</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=429#p429"/>
<title type="html"><![CDATA[Crea Superficie en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=429#p429"><![CDATA[
Podrías utilizar la función CreateRGBSurface:<br /><br />   <!-- m --><a class="postlink" href="http://www.libsdl.org/cgi/docwiki.cgi/SDL_5fCreateRGBSurface">http://www.libsdl.org/cgi/docwiki.cgi/S ... RGBSurface</a><!-- m --><br /><br />el procedimiento sería similar al que utilizas cuando generas una<br />superficie desde un archivo BMP, solo que aquí debes especificar<br />el tamaño de la imagen y otros parámetros que puedes extraer<br />desde otra superficie como &quot;screen&quot;.<br /><br />Buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Jul 10, 2007 7:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-07-10T13:34:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=428#p428</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=428#p428"/>
<title type="html"><![CDATA[Crea Superficie en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=134&amp;p=428#p428"><![CDATA[
Hola, queria saber como crear una superficie en SDL. Se como cargar una imagen y mostrarla en pantalla pero lo que yo quiero es un simple rectangulo de un solo color para luego pegar en él otras superficies.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mar Jul 10, 2007 1:34 pm</p><hr />
]]></content>
</entry>
</feed>