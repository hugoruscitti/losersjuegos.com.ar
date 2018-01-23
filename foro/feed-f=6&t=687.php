<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=687" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-01-29T17:29:04+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=687</id>
<entry>
<author><name><![CDATA[Metalero]]></name></author>
<updated>2010-01-29T17:29:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=687&amp;p=3226#p3226</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=687&amp;p=3226#p3226"/>
<title type="html"><![CDATA[SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=687&amp;p=3226#p3226"><![CDATA[
Respecto a lo de la string de largo variable...no veo donde esta la duda.<br /><br />Con respecto a las fuentes &quot;con fondo&quot;, es por que vos estas renderizando el texto usando SOLID seguramente. SDL_ttf, tiene 3 tipos de renders:<br /><br />SOLID, SHADED, BLENDED.<br /><br />Aca te dejo la descripcion de cada una segun el manua:<br /><br />-----------------------------------------------------------------------------------------------------------<br /><span style="font-weight: bold">Solid: Quick and Dirty</span><br />Create an 8-bit palettized surface and render the given text at fast quality<br />with the given font and color. The pixel value of 0 is the colorkey, giving a<br />transparent background when blitted. Pixel and colormap value 1 is set to the<br />text foreground color. This allows you to change the color without having to<br />render the text again. Palette index 0 is of course not drawn when blitted to<br />another surface, since it is the colorkey, and thus transparent, though its actual<br />color is 255 minus each of the RGB components of the foreground color. This<br />is the fastest rendering speed of all the rendering modes. This results in no box<br />around the text, but the text is not as smooth. The resulting surface should blit<br />faster than the Blended one. Use this mode for FPS and other fast changing<br />updating text displays.<br /><br /><span style="font-weight: bold">Shaded: Slow and Nice, but with a Solid Box</span><br />Create an 8-bit palettized surface and render the given text at high quality<br />with the given font and colors. The 0 pixel value is background, while other<br />pixels have varying degrees of the foreground color from the background color.<br />This results in a box of the background color around the text in the foreground<br />color. The text is antialiased. This will render slower than Solid, but in about<br />the same time as Blended mode. The resulting surface should blit as fast as<br />Solid, once it is made. Use this when you need nice text, and can live with a<br />box.<br /><br /><span style="font-weight: bold">Blended: Slow Slow Slow, but Ultra Nice over another image</span><br />Create a 32-bit ARGB surface and render the given text at high quality, using<br />alpha blending to dither the font with the given color. This results in a surface<br />with alpha transparency, so you don’t have a solid colored box around the text.<br />The text is antialiased. This will render slower than Solid, but in about the<br />same time as Shaded mode. The resulting surface will blit slower than if you<br />had used Solid or Shaded. Use this when you want high quality, and the text<br />isn’t changing too fast.<br />-----------------------------------------------------------------------------------------------------------<br /><br />En pocas palabras. Solid es rapido, pero sale con el fondo ese, y tiene una calidad mala.<br />Shaded tiene la misma calidad del Solid, pero podes ponerele un color de fondo, y luego seleccionarlo como color key, y asi sale trasparente, pero siempre quedan algunos vestigios del color de fondo sobre la fuente.<br />Blended, es de alta calidad, en 32 bits (los otros son en <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cool.gif" alt="8)" title="Cool" />. No tiene fondo (el fondo es trasparente mediante alpha, creo). Pero consume bastante mas recursos del prosesador que los otros metodos.<br /><br />Para usar estos metodos:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>TTF RenderText_Solid&#40;TTF_Font *font, const char *text, <br />SDL_Color fg&#41;<br /><br />TTF RenderText_Shaded&#40;TTF_Font *font, const char *text,<br />SDL_Color fg, SDL_Color bg&#41;<br /><br />TTF RenderText_Blended&#40;TTF_Font *font, const char *text,<br />SDL_Color fg&#41;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2158">Metalero</a> — Vie Ene 29, 2010 5:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-01-28T23:25:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=687&amp;p=3225#p3225</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=687&amp;p=3225#p3225"/>
<title type="html"><![CDATA[SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=687&amp;p=3225#p3225"><![CDATA[
Sí que se puede hacer. Esa técnica se llama color key.<br />Según el artículo de la misma sección &quot;Conceptos básicos para el desarrollo de videojuegos&quot;:<br /><blockquote class="uncited"><div><br />Cuando mostramos una imagen en pantalla, esta siempre se verá como un cuadrado o rectángulo, pero sabemos que dentro tiene la representación de un objeto, personaje, enemigo, ítem, etc. Al dibujar esta imagen queremos ver solo la forma que representa, para esto debemos elegir algún color transparente, pintar con ese color las zonas que no queremos que aparezcan y luego dibujar la imagen ignorando dicho color.<br /><br />Normalmente se utiliza el color magenta (255, 0, 255), como color de transparencia, ya que es poco probable que se encuentre en una imagen.<br /><br />Dependiendo de la API gráfica que utilicemos para desarrollar nuestro videojuego, tendremos una función que realice esta tarea, la de descartar un color determinado al dibujar la imagen. <br /><br />Pero no solo usar un color como el magenta es la solución para no ver una imagen en su forma original, también podemos hacer uso de las propiedades del formato gráfico PNG (Portable Network Graphics), ya que este formato guarda un canal alpha con las partes transparentes de la imagen.<br /></div></blockquote><br /><br />Si tienes problemas, ya comentarás que API usas para explicarlo de manera más precisa.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Ene 28, 2010 11:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dsavatar]]></name></author>
<updated>2010-01-28T22:14:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=687&amp;p=3224#p3224</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=687&amp;p=3224#p3224"/>
<title type="html"><![CDATA[SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=687&amp;p=3224#p3224"><![CDATA[
hola gente que tal?<br />miren yo andve leyendo el articulo que tenian en la pagina sobre imprimir fuentes utilizando la libreria sdl.<br />me salio con el primer ejemplo pero la cuestion es que primero necesito imprimir un string que va cambiando los valores, y el otro problema es que tengo un fondo en el juego, y al imprimir el texto para probar las letras vienen con fondo. Existe alguna manera de que solo imprima las letras y el fondo con el que vienen las fuentes sea transparente?<br />Desde ya gracias<br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2183">dsavatar</a> — Jue Ene 28, 2010 10:14 pm</p><hr />
]]></content>
</entry>
</feed>