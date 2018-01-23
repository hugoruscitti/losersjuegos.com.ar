<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=1521" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-07-20T10:49:56+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=1521</id>
<entry>
<author><name><![CDATA[Faqndo]]></name></author>
<updated>2012-07-20T10:49:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6944#p6944</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6944#p6944"/>
<title type="html"><![CDATA[Re: Problema de ralentizado con SDL_image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6944#p6944"><![CDATA[
He substituido la funcion de carga de imagenes no bmp por el que me ha dado barajas y ya me va bien, muchas gracias a todos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2607">Faqndo</a> — Vie Jul 20, 2012 10:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2012-07-19T21:22:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6943#p6943</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6943#p6943"/>
<title type="html"><![CDATA[Re: Problema de ralentizado con SDL_image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6943#p6943"><![CDATA[
En que formato esta la imagen que tiene canal alpha? que yo sepa las imágenes bmp no lo tienen, las png si, por eso uso esas y no le tengo que aplicar eso de habilitar el canal alpha<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Jul 19, 2012 9:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-19T06:54:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6942#p6942</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6942#p6942"/>
<title type="html"><![CDATA[Re: Problema de ralentizado con SDL_image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6942#p6942"><![CDATA[
Intenta con esto:<br /><br /><pre class="prettyprint">SDL_surface * Carga_ima&#40;const char * direccion&#41;{<br />    //SDL_DisplayFormatAlpha permite utilizar el canal Alpha de una imagen....<br />    Surface * image =  SDL_DisplayFormatAlpha&#40;   IMG_Load&#40;direccion&#41;  &#41;;<br />    //sí, todo esta en la misma linea....<br />    if&#40;image == NULL&#41; {<br />             printf&#40; &quot;&gt;&gt; No se puede cargar imagen\n&quot;&#41;;<br />             printf&#40;&quot;SDL_GetError&#40;&#41;\n&quot;&#41;;<br />             }<br />    return image;<br />    }</pre><br /><br />Espero que te sirva <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Jue Jul 19, 2012 6:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Faqndo]]></name></author>
<updated>2012-07-19T06:32:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6941#p6941</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6941#p6941"/>
<title type="html"><![CDATA[Re: Problema de ralentizado con SDL_image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6941#p6941"><![CDATA[
bueno, las imagenes en formato .bmp van bien, ahora no me ralentiza mas al cargar imagenes con la libreria SDL_image porque le aplico una funcion que hice para no estar todo el rato haciendo el mismo proceso<br /><br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />SDL_Surface* cargarImagen_png(char *nombreArchivo)<br />{<br />    SDL_Surface *image, *png;<br />    image = IMG_Load(nombreArchivo);<br />    if(!image) return 0;<br />    png=SDL_DisplayFormat(image);<br />    SDL_FreeSurface(image);<br />    if(!png) return 0;<br /><br />    return png;<br />}<br /><br /></code></dd></dl><br /><br /><br />Ahora el problema de esta funcion es que el canal alfa, que deberia ignorarlo y dejarlo invisible, me lo muestra de color negro, supongo que se podria meter un filtro para que me transparente el color , pero eso seria ir por el camino facil, lo que deberia hacer ya de serie es ignorarlo, ya que el canal alfa no tiene color y esta invisible en la imagen que cargo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2607">Faqndo</a> — Jue Jul 19, 2012 6:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2012-07-19T04:22:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6940#p6940</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6940#p6940"/>
<title type="html"><![CDATA[Re: Problema de ralentizado con SDL_image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6940#p6940"><![CDATA[
Con que imagenes no te respeta la transparencia?<br />Para el fondo esta bien usar una imagen en formato bmp, pero en los sprites ya sean objetos o personajes he visto que funciona mejor usar imagenes en formato png pues este formato admite la trasparencia nativamente, es decir no tienes que aplicar el color key, he usado este formato de archivo y usando el formato de la imagen de la superficie a 32 bits de color y me ha dado resultados mejores que usar menor numero de bits de esta forma he logrado unos 60 fps.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Jul 19, 2012 4:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Faqndo]]></name></author>
<updated>2012-07-18T16:53:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6937#p6937</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6937#p6937"/>
<title type="html"><![CDATA[Re: Problema de ralentizado con SDL_image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6937#p6937"><![CDATA[
Bueno, me di cuentya de lo que faltaba, cometi un gran fail por mi parte, yo utilizo una funcion para cargar siempre las imagenes .bmp, pero para las .png no podia utilizar dicha funcion asi que las cargaba y ya esta, pero se me estaba olvidando el display_format  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> , ahora se me ve fluido como el que mas pero no me respeta la parte invisible que tengo en cada imagen, eso como se podria solucionar, aparcando la idea de  que transparente un color especifico como ya hace pero con las imagenes bmp.<br /><br /><br /><br />Perdonen las molestias  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2607">Faqndo</a> — Mié Jul 18, 2012 4:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Faqndo]]></name></author>
<updated>2012-07-18T05:01:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6935#p6935</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6935#p6935"/>
<title type="html"><![CDATA[Re: Problema de ralentizado con SDL_image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6935#p6935"><![CDATA[
el codigo de momento no se si enseñarlo, porque son 3500 lineas de codigo las que tendria que enseñar  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> , ahora mismo lo unico que hago con la imagen es declararla, cargarle el contenido y dibujarla, es un sprite ya no?.<br /><br />Quiza pueda ser eso de los bucles, pero no se, lo dudo porque lo unico que me hace ralentizaciones en el juego es la carga de imagenes utilizando el SDL_image, si utilizo bmp, no se queja, eso si, si utilizo la imagen de atras en bmp, pasa de ocupar 365kb a xxx MB, porque es una imagen enorme.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2607">Faqndo</a> — Mié Jul 18, 2012 5:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-17T21:53:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6932#p6932</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6932#p6932"/>
<title type="html"><![CDATA[Re: Problema de ralentizado con SDL_image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6932#p6932"><![CDATA[
Bueno, asumo que mucho de eso es por el algoritmo que estas utilizado para poder hacer ese movimiento, a la mejor tienes muchos bucles, aun que tal vez si enseñases el código podríamos ayudarte mejor <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.... o si eso no funciona... has pensado en lugar de remplazar el tile utilizar un sprite. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Jul 17, 2012 9:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Faqndo]]></name></author>
<updated>2012-07-17T19:51:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6928#p6928</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6928#p6928"/>
<title type="html"><![CDATA[Problema de ralentizado con SDL_image]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1521&amp;p=6928#p6928"><![CDATA[
Buenas, tengo un problema con el SDL_image que me esta matando, resulta que estoy haciendo un juego rpg, y, para simular un mar, quiero hacer como en los pokemon de llenar atras con una animacion de un mar que se mueve, pero al pasarla por el SDL_image y dibujarla me baja un monton los frames del juego, es bestial, me deja a unos miseros 16 fps, y ya no se que probar para que no me ralentize, por eso posteo aqui, para que los expertos vean mi caso  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> .<br /><br /><br />Gracias por adelantado a las futuras respuestas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2607">Faqndo</a> — Mar Jul 17, 2012 7:51 pm</p><hr />
]]></content>
</entry>
</feed>