<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=274" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-01T23:39:45+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=274</id>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-04-01T23:39:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=274&amp;p=1061#p1061</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=274&amp;p=1061#p1061"/>
<title type="html"><![CDATA[SDL getpixel]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=274&amp;p=1061#p1061"><![CDATA[
muchisimas gracias, la solucion era tan simple que me siento un tanto ridiculo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" />. pense que solo la ponian como para que la gente viera como estaba construida la funcion, no porque no estuviera incluida, cosa que por otro lado no entiendo, en la libreria de imagen estandar de SDL, que creo que deberia de ser su sitio.<br /><br />muchas gracias por todo y por responder <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /> aunque no seas un &quot;experto&quot; <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Mar Abr 01, 2008 11:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Alex_13_estu]]></name></author>
<updated>2008-04-01T21:52:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=274&amp;p=1059#p1059</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=274&amp;p=1059#p1059"/>
<title type="html"><![CDATA[SDL getpixel]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=274&amp;p=1059#p1059"><![CDATA[
¡Hola! Acabo de ver tu mensaje y, aunque creo que no soy el más indicado para responderte ésto porque no soy ningún experto con ciertas funciones de SDL (por ejemplo, la de obtener el color del pixel), tengo una ligera idea de dónde puede estar el error. SImplemente tiene un fallo: la función getpixel() no existe en SDL. ¡Sí, es así de simple! Si te fijas, en el mismo post que pones en tu link, más abajo definen una función que es la siguiente (la copio tal como está):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>// Nota, código obtenido del wiki de SDL<br />// http://www.libsdl.org/cgi/docwiki.cgi/Pixel_20Access<br />Uint32 getpixel&#40;SDL_Surface *surface, int x, int y&#41;<br />&#123;<br />    int bpp = surface-&gt;format-&gt;BytesPerPixel;<br />    /* Here p is the address to the pixel we want to retrieve */<br />    Uint8 *p = &#40;Uint8 *&#41;surface-&gt;pixels + y * surface-&gt;pitch + x * bpp;<br /><br />    switch&#40;bpp&#41; &#123;<br />    case 1:<br />        return *p;<br /><br />    case 2:<br />        return *&#40;Uint16 *&#41;p;<br /><br />    case 3:<br />        if&#40;SDL_BYTEORDER == SDL_BIG_ENDIAN&#41;<br />            return p&#91;0&#93; &lt;&lt; 16 | p&#91;1&#93; &lt;&lt; 8 | p&#91;2&#93;;<br />        else<br />            return p&#91;0&#93; | p&#91;1&#93; &lt;&lt; 8 | p&#91;2&#93; &lt;&lt; 16;<br /><br />    case 4:<br />        return *&#40;Uint32 *&#41;p;<br /><br />    default:<br />        return 0;       /* shouldn't happen, but avoids warnings */<br />    &#125;<br />&#125; </code></dd></dl><br /><br />Simplemente coloca ésta función antes de main() (o después pero recuerda poner entonces el prototipo si usas C++) y ya tendrás el problema solucionado. El programa generará el archivo &quot;stdout.txt&quot; correspondiente y te dará el color del píxel (no me preguntes cómo interpretarlo ni nada por el estilo porque ya te dije que no tenía ni idea). Espero haberme explicado bien (aunque no era muy difícil) y ojalá que te haya solucionado el problema.<br /><br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1909">Alex_13_estu</a> — Mar Abr 01, 2008 9:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-04-01T13:08:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=274&amp;p=1052#p1052</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=274&amp;p=1052#p1052"/>
<title type="html"><![CDATA[SDL getpixel]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=274&amp;p=1052#p1052"><![CDATA[
hopa a tod@s. directamente pego mi codigo, que es super cortito y pego el error que me da el visual c++ express 2005<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;stdlib.h&gt;<br />#include &lt;SDL.h&gt;<br />#include &lt;SDL_image.h&gt;<br /><br />int main&#40;int argc, char *argv&#91;&#93;&#41; &#123;<br />   <br />   SDL_Surface* imagen;<br />   Uint32 key;<br /><br />   imagen = SDL_LoadBMP&#40; &quot;dibujo.bmp&quot; &#41;;<br />   key = getpixel&#40; imagen, 0, imagen-&gt;h - 1 &#41;;<br /><br />   printf&#40;&quot;el pixel tiene codigo %d&quot;, key&#41;;<br /><br />   _sleep&#40;1000&#41;;<br /><br />   return 0;<br /><br />&#125;</code></dd></dl><br /><br />he añadido en las opciones de proyecto las carpetas include y a la carpeta de archivos de recursos las .lib ademas de copiar las .dll a la carpeta principal del juego, pero sigue sin encontrarme la funcion getpixel..<br /> me dice esto:<br /><br />error C3861: 'getpixel': no se encontró el identificador<br /><br />si alguien puede iluminarme....he copiado el codigo de esta misma web <br /><br /><a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?p=265&amp;sid=cf49ee64f8c4a098b437dffb5d6989bd" class="postlink">http://www.losersjuegos.com.ar/foro/viewtopic.php?p=265&amp;sid=cf49ee64f8c4a098b437dffb5d6989bd</a><br /><br />muchas gracias por adelantado<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Mar Abr 01, 2008 1:08 pm</p><hr />
]]></content>
</entry>
</feed>