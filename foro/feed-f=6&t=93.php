<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=93" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-05-25T19:12:32+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=93</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-05-25T19:12:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=330#p330</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=330#p330"/>
<title type="html"><![CDATA[Guardar un bitmap con una región de la pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=330#p330"><![CDATA[
<blockquote><div><cite>endless_dark escribió:</cite><br /><span style="font-weight: bold">Edito:</span> Ya está probado, tuve que cambiar el nombre a la superficie SDL porque new es una palabra reservada, o eso me decía el compilador. Por lo demás el código está excelente, mil gracias!<br /></div></blockquote>Sí, tienes razón, ese día había compilado la rutina con un compilador<br />de C (en lugar de C++, a donde pertenece esa palabra reservada).<br /><br />Tampoco había tenido en cuenta liberar la memoria reservada como<br />nos indicó RCAF.<br /><br />Gracias a ambos. Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie May 25, 2007 7:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endless_dark]]></name></author>
<updated>2007-05-25T01:02:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=329#p329</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=329#p329"/>
<title type="html"><![CDATA[Guardar un bitmap con una región de la pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=329#p329"><![CDATA[
Gracias tíos! En cuanto tenga algo de tiempo lo pruebo y os cuento  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br /><span style="font-weight: bold">Edito:</span> Ya está probado, tuve que cambiar el nombre a la superficie SDL porque new es una palabra reservada, o eso me decía el compilador. Por lo demás el código está excelente, mil gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1506">endless_dark</a> — Vie May 25, 2007 1:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-05-22T04:48:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=323#p323</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=323#p323"/>
<title type="html"><![CDATA[Guardar un bitmap con una región de la pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=323#p323"><![CDATA[
En el código falta la liberación de memoria de la superficie creada, debería quedar así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void guardar_imagen&#40;SDL_Surface * fuente, char * nombre, int x, int y, int w, int h&#41;<br />&#123;<br />    SDL_Rect src = &#123;x, y, w, h&#125;;<br />    SDL_Surface * new_surface;<br /><br />    // Crea superficie<br />    new_surface = SDL_CreateRGBSurface&#40;SDL_HWSURFACE, w, h, fuente-&gt;format-&gt;BitsPerPixel,<br />        fuente-&gt;format-&gt;Rmask, fuente-&gt;format-&gt;Gmask, fuente-&gt;format-&gt;Bmask,<br />        fuente-&gt;format-&gt;Amask&#41;;<br /><br />    // Copia una area de la superficie original en la superficie creada<br />    SDL_BlitSurface&#40;fuente, &amp;src, new_surface, NULL&#41;;<br /><br />    // Guarda la nueva superficie en un archivo con formato BMP<br />    SDL_SaveBMP&#40;new_surface, nombre&#41;;<br /><br />   // Libera memoria de la superficie<br />   SDL_FreeSurface&#40;new_surface&#41;;<br />&#125; <br /><br /></code></dd></dl><br /><br />S2!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Mar May 22, 2007 4:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-05-21T20:53:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=320#p320</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=320#p320"/>
<title type="html"><![CDATA[Guardar un bitmap con una región de la pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=320#p320"><![CDATA[
Saludos, estaba leyendo tu mensaje y se me ocurrió una solucion, <br />primero generas una superficie en memoria de la región que <br />quieres guardar, luego imprimes sobre ella y la guardas en<br />un archivo.<br /><br />Armé esta función que te facilita esa tarea. Probé la función y<br />hacía lo que esperaba, imagino que te funcionará correctamente<br />a tí también:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void guardar_imagen&#40;SDL_Surface * fuente, char * nombre, int x, int y, int w, int h&#41;<br />&#123;<br />    SDL_Rect src = &#123;x, y, w, h&#125;;<br />    SDL_Surface * new;<br /><br />    new = SDL_CreateRGBSurface&#40;0, w, h, fuente-&gt;format-&gt;BitsPerPixel,<br />        fuente-&gt;format-&gt;Rmask, fuente-&gt;format-&gt;Gmask, fuente-&gt;format-&gt;Bmask,<br />        fuente-&gt;format-&gt;Amask&#41;;<br /><br />    SDL_BlitSurface&#40;fuente, &amp;src, new, NULL&#41;;<br />    SDL_SaveBMP&#40;new, nombre&#41;;<br />&#125;<br /></code></dd></dl><br /><br />para probar esta función escribí tienes que invocar a la función<br />enviandole un puntero a screen, el nombre del archivo a guardar<br />y el tamaño del bloque que quieres guardar. Por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>guardar_imagen&#40;screen, &quot;salida.bmp&quot;, 20, 20, 100, 100&#41;;<br /></code></dd></dl><br /><br />Saludos.<br /><br />pd: puede fallar... si tiene errores nos avisas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun May 21, 2007 8:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endless_dark]]></name></author>
<updated>2007-05-21T19:05:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=319#p319</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=319#p319"/>
<title type="html"><![CDATA[Guardar un bitmap con una región de la pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=93&amp;p=319#p319"><![CDATA[
Bueno, estoy desarrollando un programilla en C++ y con SDL . Lo que tiene el programa, es que salva una imagen con el resultado de lo que ha hecho el usuario. He conseguido guardarlo pero se guarda la pantalla entera.<br /><br />Lo que quiero es que se guarde solo parte de la imagen, tengo entendido que es mediante Blit_Surface, en otra surface nueva del tamaño de la imagen de salida, pero no he conseguido nada todavía. Lo más que he logrado es que en la pantalla de salida, se vea la imagen que quería copiar, superpuesta a la pantalla del programa.<br /><br />¿Alguien me puede echar una mano?<br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1506">endless_dark</a> — Lun May 21, 2007 7:05 pm</p><hr />
]]></content>
</entry>
</feed>