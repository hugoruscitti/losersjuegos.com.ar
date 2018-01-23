<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=179" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-10-20T15:14:15+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=179</id>
<entry>
<author><name><![CDATA[venerdhi]]></name></author>
<updated>2007-10-20T15:14:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=638#p638</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=638#p638"/>
<title type="html"><![CDATA[Muchas gracias]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=638#p638"><![CDATA[
Muchas gracias, eso era lo que quería saber, que tenía acceso al canal alpha.<br /><br />Mirare los ejemplos, y si tengo alguna duda o problema ya os lo comentaré.<br /><br />Cuando acabe mi ejemplo, a ver si puedo subiroslo para que lo tengais para si alguien más tiene alguna duda.<br /><br />Muchas gracias,<br />Venerdhi.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1833">venerdhi</a> — Sab Oct 20, 2007 3:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-10-19T14:12:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=629#p629</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=629#p629"/>
<title type="html"><![CDATA[Crear imagen con 4 canales (RGBA) en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=629#p629"><![CDATA[
<blockquote><div><cite>venerdhi escribió:</cite><br />Otra pregunta, si cargo una imagen png con sdl_image, se supone qeu tiene un canal alpha al cargarse? En ese caso, podría acceder al canal alpha? Alguién lo ha hecho alguna vez?<br /></div></blockquote><br /><br />Sí, tendrá el canal alpha del archivo PNG original, y luego de crear<br />una superficie a partir de ese archivo podrás acceder a la tonalidad y<br />transparencia de cada pixel. Observa el código del programa que te comenté<br />anteriormente, ahí encontrarás funciones para acceder a cada componente<br />de color (incluido el canal alfa) y modificarlo. Las funciones <br />se llaman &quot;get_pixel_color&quot; y &quot;set_pixel_color&quot;.<br /><br />A grandes rasgos, los pixeles de una superficie están compuestos de 4<br />valores numéricos: &quot;red&quot;, &quot;green&quot;, &quot;blue&quot; y &quot;alpha&quot;. Alterar estos<br />valores es un poco difícil porque, en principio, no están separados. Por<br />ello es aconsejable utilizar funciones, hace mas sencilla la tarea.<br /><br /><blockquote><div><cite>venerdhi escribió:</cite><br />... y me hice un efecto blending a mano pixel a pixel, pero eso es lento y costoso computacionalmente con imagenes grandes, por eso esperaba que sdl tuviese alguna forma de hacerlo sin tener qeu hacerlo a mano, en cualquier caso, echare un vistazo a los códigos para prepararme para lo peor, jajaja<br /></div></blockquote><br /><br />Es cierto, manipular pixel a pixel una imagen grande puede ser<br />algo lento... pero en muchos casos esta velocidad es imperceptible. <br />Sería prudente no &quot;optimizar&quot; o &quot;evaluar&quot; antes de tiempo, en su lugar<br />uno puede escribir el programa, ejecutarlo y preguntarse: ¿realmente<br />funciona tan lento?, ¿que tan grandes son esas superficies?, o ¿que<br />puedo mejorar para hacerlo mas rápido?. Generalmente no nos hacemos<br />esta última pregunta porque funciona rápido la primera vez (de verdad).<br /><br />Al menos en el ejemplo de superficies que construí para la web, el <br />rendimiento del programa me pareció muy bueno, incluso sin tener una<br />tarjeta aceleradora de gráficos. Ten en cuenta que los lenguajes como<br />C o C++ son bastante rápidos para hacer esta clase de cosas.<br /><br />Otra forma de hacer tu programa mas rápido, es agilizar impresiones en<br />pantalla que realiza &quot;blit&quot;, para esto necesitas convertir todas las<br />superficies al formato de color que utiliza la pantalla principal; la<br />función que realizar esta tarea es &quot;SDL_DisplayFormat&quot;, o bien la<br />función &quot;SDL_DisplayFormatAlpha&quot; si tus superficies tienen canal &quot;alpha&quot;:<br /><br />   <!-- m --><a class="postlink" href="http://www.libsdl.org/cgi/docwiki.cgi/SDL_5fDisplayFormatAlpha">http://www.libsdl.org/cgi/docwiki.cgi/S ... ormatAlpha</a><!-- m --><br /><br /><br />Ten en cuenta que muchas otras bibliotecas como OpenGL te permiten<br />realizar todas estas tareas de blending de manera mucho mas rápida debido<br />a que utilizan el Hardware de una tarjeta aceleradora de gráficos. SDL <br />intenta ser independiente de esa clase de Hardware, ese es uno de los <br />motivos por el que no existe esa funcionalidad en la biblioteca base.<br /><br />igual... ojo, a mí me gustaría que tuviera efectos de blending, pero<br />bueno, no los tiene. El punto es que vos conoces mejor a tu juego que<br />los desarrolladores de SDL, por lo tanto, vos podes construir funciones<br />de 'blending' mas cercanas a tus necesidades, y por lo tanto mas<br />directas, breves y eficientes.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Oct 19, 2007 2:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[venerdhi]]></name></author>
<updated>2007-10-18T20:30:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=628#p628</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=628#p628"/>
<title type="html"><![CDATA[Muchas gracias por responder tan rapido]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=628#p628"><![CDATA[
Hola hugoruscitti,<br /><br />Se me olvido decir que quería aplicar la transparencia dinámicamente. Mi objetivo es el siguiente. Quería hacer que hubiese una imagen oscura en pantalla, y al pasar con el cursor sobre la imagen se iluminase (o mostras la imagen que hay debajo con un blending). Para eso tengo que acceder al alpha directamente para dibujar un círculo allí donde este el cursor y hacer transparente la imagen de arriba permitiendo ver la de abajo.<br /><br />Otra forma de poder dar este efecto sería poder pegar un trozo circular de una imagen sobre otra, pero no se si eso se puede hacer con máscaras. Igual eso podía ser más sencillo, la verdad es que no lo tengo muy claro.<br /><br />Otra pregunta, si cargo una imagen png con sdl_image, se supone qeu tiene un canal alpha al cargarse? En ese caso, podría acceder al canal alpha? Alguién lo ha hecho alguna vez?<br /><br />Echare un vistazo a los códigos que me dices. Algo así ya habia hecho yo anteriormente en OpenCV (no es una librería para gráficos, pero bueno, entonces no tenía otra cosa a mano) y me hice un efecto blending a mano pixel a pixel, pero eso es lento y costoso computacionalmente con imagenes grandes, por eso esperaba que sdl tuviese alguna forma de hacerlo sin tener qeu hacerlo a mano, en cualquier caso, echare un vistazo a los códigos para prepararme para lo peor, jajaja<br /><br />Muchas gracias de nuevo!!!!<br />Venerdhi<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1833">venerdhi</a> — Jue Oct 18, 2007 8:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-10-18T18:17:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=625#p625</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=625#p625"/>
<title type="html"><![CDATA[Crear imagen con 4 canales (RGBA) en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=625#p625"><![CDATA[
Hola, buenas tardes.<br /><br />Como bien has indicado, SDL tiene funciones para alterar la<br />transparencia de superficies completas, y en principio no cuenta<br />con funciones para alterar cada pixel.<br /><br />Aún así, hay dos formas de alterar la transparencia de cada pixel<br />en una superficie:<br /><br />1 - Puedes utilizar la bibilioteca adicional &quot;SDL_image&quot; para incorporar<br />     a tu programa superficies a partir de archivo PNG. Los archivos<br />     PNG almacenan internamente un canal alpha, así que puedes<br />     elegir los diferentes grados de transparencia directamente desde<br />     un programa de dibujo, guardarlos a un archivo y luego cargarlos<br />     en el juego.<br /><br />     Puedes utilizar un programa como Gimp[1] para esto.<br /><br />2 - SDL te permite acceder a la composición interna de una<br />     superficie, por lo tanto puedes crear funciones para &quot;obtener&quot;<br />     o &quot;definir&quot; pixeles con mucha precisión. Esto es un poco mas<br />     difícil, pero hay varios ejemplos de programas que hacen esto.<br /><br />     Por ejemplo, hace un tiempo armé un ejemplo que mostraba<br />     en pantalla una superficie y te permitía alterar las componentes<br />     de color de la misma mediante barras horizontales:<br /><br />     <img src="http://www.losersjuegos.com.ar/incoming/descargas/20071018/colores.png" alt="Imagen" /><br /><br />     este ejemplo lo puedes encontrar en la sección ejemplos de la <br />     web Losersjuegos:<br /><br />         <a href="http://www.losersjuegos.com.ar/referencia/ejemplos/ejemplos.php" class="postlink">http://www.losersjuegos.com.ar/referencia/ejemplos/ejemplos.php</a><br /><br />     si bien este ejemplo modifica todos los pixeles a la vez, en <br />     realidad no utilizo la función &quot;SDL_SetAlpha&quot;, sino que modifico<br />     el contenido de la superficie con las funciones &quot;get_pixel_color&quot;<br />     y &quot;set_pixel_color&quot;. Puedes descargar el código y jugar con él, <br />     si tu programa será libre también puedes re-utilizar el código.<br /><br />     Creo que el ejemplo &quot;fundido de superficies&quot; que hizo Pablo, y<br />     también está en la sección &quot;ejemplos&quot; de la web, utiliza acceso<br />     interno a las superficies para realizar efectos de transparencia.<br /><br />Saludos, y mucha suerte.<br /><br />[1] - <!-- m --><a class="postlink" href="http://es.wikipedia.org/wiki/GIMP">http://es.wikipedia.org/wiki/GIMP</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Oct 18, 2007 6:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[venerdhi]]></name></author>
<updated>2007-10-18T07:12:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=622#p622</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=622#p622"/>
<title type="html"><![CDATA[Crear imagen con 4 canales (RGBA) en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=179&amp;p=622#p622"><![CDATA[
Hola, soy nuevo en SDL. He empezado a mirar alguna cosa, y he visto que se puede establecer el alpha en una imagen completa o un sprite, pero lo que quiero es tener una imagen con 4 canales, o sea, que tenga un canal alpha, y poder ajustar el alpha en cualquier parte de la imagen, no en la imagen concreta, colocándole la máscara que vea oportuna, pero no se como hacerlo, no encuentto la manera. si alguien supiese como hacerlo y me diese alguna idea lo agradecería mucho.<br /><br />Muchas gracias,<br />Venerdhi.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1833">venerdhi</a> — Jue Oct 18, 2007 7:12 am</p><hr />
]]></content>
</entry>
</feed>