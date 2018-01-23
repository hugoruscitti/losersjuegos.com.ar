<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=89" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-05-18T18:31:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=89</id>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-05-18T18:31:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=89&amp;p=311#p311</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=89&amp;p=311#p311"/>
<title type="html"><![CDATA[rotozoomSurfaceXY() lento]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=89&amp;p=311#p311"><![CDATA[
Supongo que estas usando una sprite sheet, con todos los sprites en un solo archivo.<br /><br />Creo que para este caso es mejor que manejes las superficies en un arreglo, y antes de entrar al game loop, generes las posibles imagenes rotadas que necesitas usar, y así después solo bliteas la superficie correspondiente.<br /><br />Utilizar la funciones rotozoom pueden ser un poco costosas en tiempo real, ya que ademas de realizar los cálculos para realizar un zoom o rotación, se está creando y liberando memoria de superficies en tiempo de ejecución, lo que provoca una baja considerable del rendimiento de nuestra aplicación.<br /><br />Por lo tanto, lo mejor es utilizar estas funciones solo para generar las superficies al inicio, luego solo usarlas, y por último antes de salir del juego, eliminar su memoria.<br /><br />Para hacer rotaciones o escalados en tiempo real, lo mejor es utilizar OpenGL.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Vie May 18, 2007 6:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugetto]]></name></author>
<updated>2007-05-18T09:01:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=89&amp;p=309#p309</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=89&amp;p=309#p309"/>
<title type="html"><![CDATA[rotozoomSurfaceXY() lento]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=89&amp;p=309#p309"><![CDATA[
Alguien sabe porqué se me relentiza bastante el juego que quiero programar cuando aplico la función rotozoomSurfaceXY()?<br /><br />Tengo un pentium IV a 2.8GH por lo que no deberia pasar, és más, la CPU nunca llega al 100% (alrededor del 70%).<br /><br />Si no uso esta función y simplemente duplico la imagen girada en el .bmp la CPU no llega al 5%.<br /><br />Si me podeis echar una mano os lo agradeceria <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><br />El codigo que uso és el siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>bool accio::PintaReverseV&#40;SDL_Surface *imatge,SDL_Rect *Origen,SDL_Surface *p, SDL_Rect *Desti&#41; &#123; <br />//Creo esta imagen para no tener que girar toda la imagen .bmp donde estan todos los sprites<br />   SDL_Surface *Temp = SDL_CreateRGBSurface&#40;SDL_HWSURFACE, Origen-&gt;w, Origen-&gt;h, imatge-&gt;format-&gt;BitsPerPixel, imatge-&gt;format-&gt;Rmask, imatge-&gt;format-&gt;Gmask, imatge-&gt;format-&gt;Bmask,  imatge-&gt;format-&gt;Amask&#41;; <br />   if&#40;!Temp&#41;return false; <br />   <br />   SDL_Rect dest;<br />   dest.x = 0; <br />   dest.y = 0; <br />   SDL_BlitSurface&#40;imatge, Origen, Temp, &amp;dest&#41;; <br />   SDL_Surface *Girada = rotozoomSurfaceXY&#40;imatge, 1, -1, 1, 0&#41;;<br />   SDL_BlitSurface&#40;Girada, &amp;dest, p, Desti&#41;; <br />   SDL_FreeSurface&#40;Girada&#41;; <br />   SDL_FreeSurface&#40;Temp&#41;; <br />   return true; <br />&#125;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1162">hugetto</a> — Vie May 18, 2007 9:01 am</p><hr />
]]></content>
</entry>
</feed>