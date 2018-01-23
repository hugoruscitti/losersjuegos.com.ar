<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1006" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-21T05:16:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1006</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-01-21T05:16:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4815#p4815</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4815#p4815"/>
<title type="html"><![CDATA[Re: IMG_Load siempre devuelve NULL (SDL)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4815#p4815"><![CDATA[
Si solo utilizas BMP no es necesario que hagas uso de SDL_image (IMG_Load), ya que SDL lo soporta con la función <span style="font-weight: bold">SDL_LoadBMP</span>.<br /><br />El problema de la DLL se debe a que SDL_image enlaza con otras bibliotecas para soportar la carga de diversos formatos de imagen, para JPG debes tener, además de SDL_image.dll, jpeg.dll y probablemente también zlib.dll.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Ene 21, 2011 5:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-12T16:05:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4762#p4762</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4762#p4762"/>
<title type="html"><![CDATA[Re: IMG_Load siempre devuelve NULL (SDL)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4762#p4762"><![CDATA[
jpeg.dll es la que supongo que te dirá, pero no te recomiendo usar archivos jpeg, ya que con la compresión pierden detalles. Unos de los más usados en mi opinión es PNG, que comprime los archivos, pero sin perder ningún tipo de calidad, y maneja transparencias y demás<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Ene 12, 2011 4:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-12T14:36:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4761#p4761</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4761#p4761"/>
<title type="html"><![CDATA[Re: IMG_Load siempre devuelve NULL (SDL)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4761#p4761"><![CDATA[
joder es verdad, que fallo ¬¬ xdd.<br />Ya esta solucionado, al final era lo de las carpetas, habia una donde no habia probado de poner la imagen. Aunque los jpgs sigue sin dejarmelos poner, me dice algo de una dll, pero en fin con .bmp ya me apaño.<br />Mersi a los dos por la ayuda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Ene 12, 2011 2:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-12T03:06:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4760#p4760</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4760#p4760"/>
<title type="html"><![CDATA[Re: IMG_Load siempre devuelve NULL (SDL)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4760#p4760"><![CDATA[
En los dos códigos que escribes no tienes el IMG_load, lo acabo de probar y si funciona, pero le agregué esa función<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Ene 12, 2011 3:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-11T21:27:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4759#p4759</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4759#p4759"/>
<title type="html"><![CDATA[Re: IMG_Load siempre devuelve NULL (SDL)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4759#p4759"><![CDATA[
creo que has borrado de tu código el IMG_Load xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Ene 11, 2011 9:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-11T19:34:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4758#p4758</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4758#p4758"/>
<title type="html"><![CDATA[Re: IMG_Load siempre devuelve NULL (SDL)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4758#p4758"><![CDATA[
uso el visual c++ express 2008, lo de copiar la imagen en todas las carpetas lo he probado pero no me funciona, igual es lo del jpg, voy a probar aver si con otro tipo puedo.<br /><br />edit: me cambiado el tipo a .bmp y ahora me salta un error diferente<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;stdlib.h&gt;<br />#include &lt;conio.h&gt;<br />#include &quot;SDL.h&quot;<br />#include &quot;SDL_image.h&quot;<br /><br />int main(int argc, char *argv&#91;&#93;)<br />{<br />   SDL_Surface *screen = SDL_SetVideoMode(640, 480, 16, SDL_HWSURFACE);<br />   SDL_Surface *img = (&quot;rojo1.bmp&quot;); ///--------------------&gt;no se puede realizar la conversión de 'const char &#91;10&#93;' a 'SDL_Surface *'<br />   if(img == NULL)<br />   {<br />      printf(&quot;que pasa aqui: %s&quot;, SDL_GetError());<br />      getch();<br />   }<br />   SDL_Rect cuadrado;<br />   cuadrado.x = 10;<br />   cuadrado.y = 10;<br />   SDL_BlitSurface(img, 0, screen, &amp;cuadrado);<br />   SDL_Flip(screen);<br />   SDL_Delay(5000);<br /><br />   return 0;<br /><br /><br />}</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mar Ene 11, 2011 7:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-11T18:30:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4757#p4757</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4757#p4757"/>
<title type="html"><![CDATA[Re: IMG_Load siempre devuelve NULL (SDL)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4757#p4757"><![CDATA[
que IDE usas para programar? Normalmente casi todos especifican un directorio donde buscar (working dir). En VS por ejemplo creo que es el directorio donde está el proyecto.<br /><br />Puedes probar a copiar la imagen en varias carpetas del proyecto(junto al archivo del proyecto, en la carpeta raiz, junto al ejecutable) hasta que te funcione, y luego prueba a ir borrando cada una y viendo cuando falla, así tendrás cual es el sitio donde tu IDE busca los ficheros<br /><br />Otra cosa: dice que para imagenes JPEG necesitas la librería JPEG, que supongo que estará instalada, pero por si las moscas prueba algún otro tipo de imagen (.bmp o .png) para ver si es que no puedes cargar las jpeg<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Ene 11, 2011 6:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-11T16:09:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4756#p4756</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4756#p4756"/>
<title type="html"><![CDATA[IMG_Load siempre devuelve NULL (SDL)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1006&amp;p=4756#p4756"><![CDATA[
buenas, porfin me he visto preparado para ponerme con el SDL y resulta que mi primer programa ya falla :S, aunque no veo por que. EL programa se ejecuta pero la imagen no se carga y devuelve null. He googleado pero no he encontrado nada concreto aver si alguno me puede hechar una manito. Mersi <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;stdlib.h&gt;<br />#include &lt;conio.h&gt;<br />#include &quot;SDL.h&quot;<br />#include &quot;SDL_image.h&quot;<br /><br />int main(int argc, char *argv&#91;&#93;)<br />{<br />   SDL_Surface *screen = SDL_SetVideoMode(640, 480, 16, SDL_HWSURFACE);<br />   SDL_Surface *img = (&quot;rojo1.jpg&quot;);<br />   if(img == NULL)<br />   {<br />      printf(&quot;que pasa aqui: %s&quot;, SDL_GetError()); ///----------------&gt;rojo.jpg couldnt open<br />      getch();<br />   }<br />   SDL_Rect cuadrado;<br />   cuadrado.x = 10;<br />   cuadrado.y = 10;<br />   SDL_BlitSurface(img, 0, screen, &amp;cuadrado);<br />   SDL_Flip(screen);<br />   SDL_Delay(5000);<br /><br />   return 0;<br />}</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mar Ene 11, 2011 4:09 pm</p><hr />
]]></content>
</entry>
</feed>